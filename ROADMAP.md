**Roadmap / Next Steps:** <p/>
- due to issue of users having problems updating, make the size of the update smaller, check if there are mp4 files in the mapper zips to remove, its the .git folder!!<p/>
- check whats wrong with the zip update function, maybe move it to a script which is cp to /tmp and run from there, there seems nothing wrong, I guess the useres are not patient enough <p/>
- when accessed over the internet, the ola panel is not visible, check how to handle ports with the remote..   <p/>
- dmx comand to record / stop recording dmx shows  <p/>
- fix the annoying usb cable mouse issue when using mapper  <p/>
- set mapper to start with presentation mode to get rid of tearing, currently you have to go to mapping and back to presentation  <p/>
- help ola to fix the deb building issue! <p/>

<p/> <p/>

- Adding wake on lan feature? <p/>
- add wireless-power off to interfaces ? <p/>
- Integrate this script for more CPU infos in CP: https://gist.github.com/ecampidoglio/5009512#file-cpustatus-sh <p/>
- enable disable sync, to support ultra short files <p/>
- rename master/slave to sender/receiver or driver/driven or something politcally correct  <p/>
- fade video or at least seamless play a list of videos <p/>
- Fix the ArtNet Universe limit, which is currently 4 (if this is even possible?, maybe an usb to rj45 adaptor with a second ip?) <p/>
- Add gender recognition based on openCV to trigger gender based content <p/>
- Add scripts to trigger content based on humidity/temperature <p/>
- Add Buttons to trigger dmxshow together with videoplayer sync (already works with osc/scheduler, sync might cause a lot of webtraffic) <p/>
- manual start of ken-burns slideshow (currently only with autostart) <p/>
- slideshow with different times of images depending on number in file-name of image  <p/>
- play images and videos after each other, depending on filename or with an ofx timeline  <p/>
- System alive ping, which sends out an email every 5 minutes to tell that beamer&pocketvj is alive, alarm function. <p/>
- AES67 Support, is it possible (https://github.com/dewiweb/ALSA-RAVENNA-AES67-Driver) Edit: Dante USB-donles are supported <p/>
- Add DMX in control commands to control the video player/mapper with DMX <p/>
- Automount and connect to usb lte modems for remote internet<p/>
- Complete authors file <p/>
- read color from video and create dmx fixture for it: https://github.com/MadSciLabs/ofxDmxUtils  <p/>
- parse dmx sequences from *cough* software to playback on PocketVj (similar to mapping converter <p/>
- think about adding sonic pi <p/>
- make https://dicaffeine.com/ working with our linux version and talk to dev about licensing <p/>

<p/>



**Tutorials/Manual:** <p/>

- how to use the dmx delay function to sync audio/video with recorded dmx/artnet <p/>
- how to change the distance of the pir sensor, factory wise set to ~5m and can be changed from ~3 to ~7m<p/>
- connect usb soundcard for better audio quality<p/>
- mapper sync<p/>
- remote mapper<p/>
- create list of OSC/midi commands for website (without code around it)<p/>
- Video tutorial for connecting knobs (simple number game)<p/>
- Video tutorial for presenter<p/>
- Video tutorial for VNC/Linux/remote Mapping/Recording<p/>


**Tests:** <p/>

- test sync script with large files, adjust window if necessary<p/>
- sync with very short files <p/>
- test autostart of dmxshow<p/>
- long term test with mapper sync <p/>