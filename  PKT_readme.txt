Updating ldmaltavoce.com

1. change reader data in:
    1. Popup?.vue
    2. readers.js
    3. Audio.vue
2. Add mp3 and jpg files to the Public/assets folder
3. Whenever a vue file is changed:
    1. run npm dev



Additional notes

The .env file is where the database is accessed
Must run php 8.1 currently
To remove server side caching, open he phprc file in .php/8.1 directory and add: 
	opcache.enable=0  [Caching is enabled by default, this removes it]
	


When editing .wav files:
	1.  Correct mistakes and re-reads in Adobe Audition
	2.  Use the Speech Volume leveler from the Amplitude and Compression Effects Rack, and Apply

	