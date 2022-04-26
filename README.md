# MyAudioTranscriber
 API that utilizes Googles Speech-to-Text and saves transcript into a database

# How To Use
 1. Clone this repo into the root directory of your local server, make sure your server is up and running
 2. Create a database with user privilegdes and make sure uou have updated your .env accordingly
 3. Open your CLI and run php artisan migrate
 4. You can simply use POSTMAN to send a Base64 encoded audio file to localhost/myaudiotranscriber, or myaudiotranscriber.test