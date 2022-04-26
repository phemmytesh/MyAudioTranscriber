<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;


class TranscriberTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testTranscriber()
    {

        $this->assertTrue(post('/', ['audioFile' => 'QWERTYUIOP'])
                            ->seeJson([
                                'created' => true,
                            ])
                );
    
    }
}
