<?php

namespace App\Http\Controllers;

use App\Models\Transcriber;

use Illuminate\Http\Request;
use Google\Cloud\Speech\V1\SpeechClient;
use Google\Cloud\Speech\V1\RecognitionAudio;
use Google\Cloud\Speech\V1\RecognitionConfig;
use Google\Cloud\Speech\V1\RecognitionConfig\AudioEncoding;

class TranscriberController extends Controller
{
    private $audioFile;

    public function __invoke($audioFile)
   {

        $this->audioFile = $audioFile;
        $this->requestTime = time();

        // set string as audio content
        $audio = (new RecognitionAudio())->setContent(file_get_contents($this->audioFile));
        
        // set config
        $config = (new RecognitionConfig())
            ->setEncoding(AudioEncoding::FLAC)
            ->setSampleRateHertz(32000)
            ->setLanguageCode('en-US');
    
        // create the speech client
        $client = new SpeechClient();
        
        // create the asyncronous recognize operation
        $operation = $client->longRunningRecognize($config, $audio);
        $operation->pollUntilComplete();
    
        if ($operation->operationSucceeded()) {
            $response = $operation->getResult();
        
            // each result is for a consecutive portion of the audio. iterate
            // through them to get the transcripts for the entire audio file
            // and save transcript into database
            foreach ($response->getResults() as $result) {
                $alternatives = $result->getAlternatives();
                $mostLikely = $alternatives[0];
                
                $transcript = $mostLikely->getTranscript();
                $confidence = $mostLikely->getConfidence();

                $this->transcript = $transcript;
                $this->confidence = $confidence;

                $transcriber = new Transcriber;
                $transcriber->transcript = $this->transcript;
                $transcriber->confidence = $this->confidence;
                $transcriber->requestTime = $this->requestTime;
                $transcriber->save();
                        
            }
        } else {
            print_r($operation->getError());
        }
        
        $client->close();

        return "Transcript Saved!";
    
   }


}