<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PocketVJ_exh_CP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Open%20Sans.css">
    <link rel="stylesheet" href="assets/css/styles.css">
<!--
Code below loads custom js for form submission without reload-->
<script src="js/submitcppw.js"></script>

<!--Code  below is for beamer IP infos-->
<script src="js/submitbeamerip.js"></script>

<!--Code  below is for countdown set-->
<script src="js/submitcountdown.js"></script>

<!--Code below is for setting dmx delay-->
<script src="js/submitdelay.js"></script>

 <!--Code below is for wifi infos-->
<script src="js/submitwifi.js"></script>
<script src="js/submitwifipass.js"></script>

 <!--Code below is for expansion buttons1-->
<script src="js/submitbutton1.js"></script>
<script src="js/submitbutton2.js"></script>
<script src="js/submitbutton3.js"></script>



 <!--Code below loads my custom bootstrap colors-->
<link href="assets/css/styles.css" rel="stylesheet">
</head>

<body style="font-family: 'Open Sans', sans-serif;">
    <div class="container" style="background: #e0e0e0;border-radius: 15px;">
        <section>
            <div class="row" style="height: 85px;">
                <div class="col"><a href="https://pocketvj.com" target="_blank"><img class="logo" src="assets/img/PVJ_2019.svg"></a></div>
                <div class="col d-flex justify-content-end">
                    <div class="row">
                        <div class="col">
                            <p class="text-center" id="version_text" style="font-weight: normal;padding-top: 12px;color: rgb(0,0,0);">CP 4.0.2<br><a href="https://github.com/magdesign/PocketVJ-CP-exh/issues" style="text-align: right;" target="_blank"><img class="help_logo" src="assets/img/help.svg" style="text-align: right;padding: 8px;max-width: 60%;"></a><br><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row no-gutters" style="height: 50px;">
                <div class="col"><a class="d-xl-flex justify-content-xl-center action" href="?action=stop"><img class="d-xl-flex justify-content-xl-center shortcuts_header" src="assets/img/stop_icon.svg" data-toggle="tooltip" title="stop all"></a></div>
                <div class="col"><a class="d-xl-flex justify-content-xl-center action" href="?action=startmaster"><img class="d-xl-flex justify-content-xl-center shortcuts_header" src="assets/img/play_icon.svg" data-toggle="tooltip" title="play video"></a></div>
                <div class="col"><a class="d-xl-flex justify-content-xl-center action" href="?action=pause"><img class="d-xl-flex justify-content-xl-center shortcuts_header" src="assets/img/pause_icon.svg" data-toggle="tooltip" title="pause"></a></div>
                <div class="col"><a class="d-xl-flex justify-content-xl-center action" href="?action=fastforward"><img class="d-xl-flex justify-content-xl-center shortcuts_header" src="assets/img/fastforward_icon.svg" data-toggle="tooltip" title="fastforward"></a></div>
                <div class="col"><a class="d-xl-flex justify-content-xl-center" target="_blank" href="/eXtplorer/" onclick=""><img class="d-xl-flex justify-content-xl-center shortcuts_header" src="assets/img/filebrowser_icon.svg" data-toggle="tooltip" title="filebrowser"></a></div>
                <div
                    class="col"><a class="d-xl-flex justify-content-xl-center action" href="?action=screenshot"><img class="d-xl-flex justify-content-xl-center shortcuts_header" src="assets/img/screenshot_icon.svg" data-toggle="tooltip" title="screenshot"></a></div>
            <div class="col"><a class="d-xl-flex justify-content-xl-center action" href="?action=testscreen"><img class="d-xl-flex justify-content-xl-center shortcuts_header" src="assets/img/testscreen_icon.svg" data-toggle="tooltip" title="testscreen"></a></div>
            <div class="col"><a class="d-xl-flex justify-content-xl-center action" href="?action=getresolution"><img class="d-xl-flex justify-content-xl-center shortcuts_header action" src="assets/img/resolution_icon.svg" data-toggle="tooltip" title="get resolution"></a></div>
            <div
                class="col"><a class="d-xl-flex justify-content-xl-center action" href="?action=reboot"><img class="d-xl-flex justify-content-xl-center shortcuts_header" src="assets/img/power_icon.svg" data-toggle="tooltip" title="reboot"></a></div>
    <div class="col"><a class="d-xl-flex justify-content-xl-center action" href="?action=shutdown"><img class="d-xl-flex justify-content-xl-center shortcuts_header" src="assets/img/power_off_icon.svg" title="shutdown" data-toggle="tooltip"></a></div>
    </div>
    </section>
    <section class="text-center" id="output_window" style="font-weight: 500;color: rgb(20,20,20);height: 111px;"><div style="height:100%; overflow-y: auto; overflow-x: hidden;padding:10px;">
<table width="100%" height="100%" border="2" align="center">
  <tr>
       <td id="actions_output" width="360" height="90px"></td>
  <tr>
</table>
</div></section>
    <section>
        <div>
            <ul class="nav nav-tabs nav-fill" role="tablist" style="border-style: none;">
                <li class="nav-item" role="presentation" style="background: #f29c33;border-radius: 15px;"><a class="nav-link text-center" role="tab" data-toggle="tab" href="#tab-1">&nbsp;<img class="icons" src="assets/img/Autostart_icon.svg"></a></li>
                <li class="nav-item" role="presentation" style="background: #ffc800;border-radius: 15px;"><a class="nav-link text-center" role="tab" data-toggle="tab" href="#tab-2"><img class="icons" src="assets/img/Filehandling_icon_01.svg"></a></li>
                <li class="nav-item" role="presentation" style="background:#08be75;border-radius: 15px;"><a class="nav-link text-center" role="tab" data-toggle="tab" href="#tab-3"><img class="icons" src="assets/img/Presenter_icon_02.svg"></a></li>
                <li class="nav-item" role="presentation" style="background:#6cc6d9;border-radius: 15px;"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4"><img class="icons" src="assets/img/Video_icon_01.svg"></a></li>
                <li class="nav-item" role="presentation" style="background:#4296d2;border-radius: 15px;"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-5"><img src="assets/img/webcam_icon.svg"></a></li>
                <li class="nav-item" role="presentation" style="background:#204b9c;border-radius: 15px;"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-6"><img src="assets/img/mapping_icon.svg"></a></li>
                <li class="nav-item" role="presentation" style="background:#574697;border-radius: 15px;"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-7"><img src="assets/img/Expansion_icon.svg"></a></li>
                <li class="nav-item" role="presentation" style="background:#792b71;border-radius: 15px;"><a class="nav-link" role="tab" data-toggle="tab" id="schedulerbutton" href="#tab-8"><img src="assets/img/Scheduler_icon.svg"></a></li>
                <li class="nav-item" role="presentation" style="background:#ad325f;border-radius: 15px;"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-9"><img src="assets/img/dmx_icon.svg"></a></li>
                <li class="nav-item" role="presentation" style="background: #972c2b;border-radius: 15px;"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-10"><img src="assets/img/Display_icon_01.svg"></a></li>
                <li class="nav-item" role="presentation" style="background: #e74533;border-radius: 15px;"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-11"><img src="assets/img/network_icon.svg"></a></li>
                <li class="nav-item" role="presentation" style="background: #f86800;border-radius: 15px;"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-12"><img src="assets/img/settings_icon_04.svg"></a></li>
            </ul>
            <div class="tab-content" style="background: #ffffff;">
                <div class="tab-pane" role="tabpanel" id="tab-1">
                    <div class="row">
                        <div class="col" style="border-style: none;">
                            <h1>AUTOSTART</h1>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #08be75;padding-top: 15px;">
                        <div class="col">
                            <div>
                                <h2 style="height: 32px;"><img src="assets/img/Presenter_icon_02.svg">&nbsp;PRESENTER</h2>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=setimage">Slideshow</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=setimageusb">Slideshow&nbsp;USB</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=powerpoint">Presenter</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3 style="height: 32px;">&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=setimagemanual">Slideshow Manual</a></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=setpdf">Pdf Presenter</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <h2 style="height: 32px;">AUDIO</h2>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=setaudio">Audio Player</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=setaudiousb">Audio Player USB</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;">
                        <div class="col" style="background: #6cc6d9;">
                            <div>
                                <h2 style="height: 32px;margin-top: 15px;"><img src="assets/img/Video_icon_01.svg">&nbsp;VIDEO</h2>
                                <div class="col colforbutton"><a class="btn btn-info action" role="button" href="?action=setmaster">Sender/Master</a></div>
                                <div class="col colforbutton"><a class="btn btn-info action" role="button" href="?action=autostartloop01">01_* Loop</a></div>
                                <div class="col colforbutton"><a class="btn btn-info action" role="button" href="?action=autostartloop02">02_* Loop</a></div>
                                <div class="col colforbutton"><a class="btn btn-info action" role="button" href="?action=setmasterdmx01">Master/dmxShow01</a></div>
                                <div class="col colforbutton"><a class="btn btn-info action" role="button" href="?action=setmasterdmx">Master/QLC+</a></div>
                            </div>
                        </div>
                        <div class="col" style="background: #6cc6d9;">
                            <div>
                                <h3 style="height: 32px;margin-top: 15px;">&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-info action" role="button" href="?action=setslave">Receiver/Slave</a></div>
                                <div class="col colforbutton"><a class="btn btn-info action" role="button" href="?action=setslaveonce">Receiver/Slave Once</a></div>
                            </div>
                        </div>
                        <div class="col" style="background: #4296d2;">
                            <h2 style="height: 32px;margin-top: 15px;"><img src="assets/img/webcam_icon.svg">&nbsp;SHARING</h2>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=screenshare">VNC Screensharing</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=setsyphon">TCPSyphon</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=setwebcam">USB Webcam</a></div>
                            </div>
                        </div>
                        <div class="col" style="background: #4296d2;">
                            <h3 style="height: 32px;margin-top: 15px;">&nbsp;</h3>
                            <div></div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;">
                        <div class="col" style="background: #204b9c;">
                            <div>
                                <h2 style="height: 32px;margin-top: 15px;"><img src="assets/img/mapping_icon.svg">&nbsp;MAPPING</h2>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=setmapper">Mapper</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=setmapperfbo">Mapper fbo</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=setmappercam">piCam Feed</a></div>
                            </div>
                        </div>
                        <div class="col" style="background: #204b9c;">
                            <div>
                                <h3 style="height: 32px;margin-top: 15px;">&nbsp;</h3>
                            </div>
                        </div>
                        <div class="col" style="background: #574696;">
                            <h2 style="height: 32px;margin-top: 15px;"><img src="assets/img/Expansion_icon.svg">&nbsp;EXPANSION</h2>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" href="?action=setpir1">PIR Motion</a></div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" href="?action=setbutton1">Buttons</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="background: #574696;">
                            <div></div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;">
                        <div class="col" style="background: #792b71;">
                            <div>
                                <h2 style="height: 32px;margin-top: 15px;"><img src="assets/img/Scheduler_icon.svg">&nbsp;SCHEDULER</h2>
                                <div class="col colforbutton"><a class="btn btn-secondary action" role="button" href="?action=setscheduler">Scheduler &amp; OSC</a></div>
                                <div class="col colforbutton"><a class="btn btn-secondary action" role="button" href="?action=autostartclock">Clock</a></div>
                                <div class="col colforbutton"><a class="btn btn-secondary action" role="button" href="?action=autostartcountdown">Countdown</a></div>
                            </div>
                        </div>
                        <div class="col" style="background: #792b71;">
                            <div>
                                <h3 style="margin-top: 15px;height: 32px;">&nbsp;</h3>
                            </div>
                        </div>
                        <div class="col" style="background: #ad325f;">
                            <h2 style="height: 32px;margin-top: 15px;"><img src="assets/img/dmx_icon.svg">&nbsp;DMX OSC UDP</h2>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=autostartdmx01">Show01 loop</a></div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=autostartdmxvid01">Show01 &amp; 01_* Video</a></div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=autostartdmxaud01">Show01 &amp; 01_* Audio</a></div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=setosc">OSC/ArtNet/UDP</a></div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=startoladaemon" data-toggle="tooltip" title="starts ola panel on boot">OLA on</a></div>
                            </div>
                        </div>
                        <div class="col" style="background: #ad325f;">
                            <h3 style="height: 32px;margin-top: 15px;">&nbsp;</h3>
                            <div>
                                <div class="col d-none d-sm-flex colforbutton" style="height: 48px;"></div>
                                <div class="col d-none d-sm-flex colforbutton" style="height: 48px;"></div>
                                <div class="col d-none d-sm-flex colforbutton" style="height: 48px;"></div>
                                <div class="col d-none d-sm-flex colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=stopoladaemon" data-toggle="tooltip" title="stop ola from autostarting">OLA off</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;">
                        <div class="col" style="background: #972c2b;">
                            <div>
                                <h2 style="margin-top: 15px;height: 32px;"><img src="assets/img/Display_icon_01.svg">&nbsp;OTHERS</h2>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=autostartmidi">Midi Control</a></div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=setqlc">QLC+</a></div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=setprocessing">Processing</a></div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=setfugio">Fugio</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div style="background: #972c2b;">
                                <div class="col colforbutton">
                                    <h3 style="height: 32px;">&nbsp;</h3>
                                </div>
                                <div class="col colforbutton">
                                    <div style="height: 38px;"></div>
                                </div>
                                <div class="col colforbutton">
                                    <div style="height: 38px;"></div>
                                </div>
                                <div class="col colforbutton">
                                    <div style="height: 38px;"></div>
                                </div>
                                <div class="col colforbutton">
                                    <div style="height: 38px;"></div>
                                </div>
                                <div class="col colforbutton">
                                    <div style="height: 38px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h2 style="margin-top: 15px;height: 32px;"><img src="assets/img/aux_icons2.svg">&nbsp;CUSTOM</h2>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=custom1">Custom 01</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-2">
                    <div class="row">
                        <div class="col">
                            <h1>FILE&nbsp;MANAGEMENT</h1>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #ffc800;">
                        <div class="col">
                            <div>
                                <h2 style="height: 26px;">INFO</h2>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=diskspace" data-toggle="tooltip" title="show diskspace left">Diskspace</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <div class="col colforbutton" style="height: 36px;"></div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=codecinfo">Movie Codec</a></div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=movieinfo">Movie Resolution</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <h2>USB</h2>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=mount" data-toggle="tooltip" title="mount usb stick">Mount</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <h3>&nbsp;</h3>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=eject" data-toogle="tooltip" title="unmount usb stick">Unmount</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-2 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #ffc800;">
                        <div class="col">
                            <div>
                                <h2>BROWSER</h2>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=openfilebrowser" target="_blank" onclick="window.open(`//${window.location.hostname}:8060`)" data-toggle="tooltip" title="slim and slick filebrowser">filebrowser</a></div>
                                <div class="col colforbutton"><a class="btn btn-dark" role="button" href="/elFinder/elfinder.src.html" target="_blank" data-toggle="tooltip" title="has 2GB file limit">elFinder</a></div>
                                <div class="col colforbutton"><a class="btn btn-dark" role="button" href="/eXtplorer/" target="_blank">eXtplorer</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                                <div class="col colforbutton" style="height: 68px;"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;&nbsp;</h2>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=defaultfilebrowser">make default</a></div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=defaultelfinder">make default</a></div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=defaultextplorer">make default</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                                <div class="col colforbutton" style="height: 68px;"></div>
                            </div>
                        </div>
                        <div class="col">
                            <h2>TOOLS</h2>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=permissionfixer" data-toogle="tooltip" title="fixes write access to your files">Permission Fixer</a></div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=namefixer" data-toogle="tooltip" title="removes umlauts &amp; empty spaces">Filename Fixer</a></div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=clean" data-toggle="tooltip" title="removes . __.Trash files">Clean Hidden</a></div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=imageconform" data-toggle="tooltip" title="resize images to max. 1920x1080">Conform Images</a></div>
                                <div class="col colforbutton"><a class="btn btn-dark action" role="button" href="?action=mappingconverter" data-toggle="tooltip" title="import mapping from other software">Mapping Converter</a></div>
                                <div class="col colforbutton" style="height: 68px;"></div>
                            </div>
                        </div>
                        <div class="col">
                            <h3>&nbsp;</h3>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-3">
                    <div class="row">
                        <div class="col" style="border-style: none;">
                            <h1>PRESENTER</h1>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px; background: #08be75;">
                        <div class="col">
                            <div>
                                <h3>CONTROL</h3>
                                <div class="col colforbutton" style="height: 120px;"><a class="btn btn-success action" role="button" href="?action=impressprev"><br>&lt; Previous<br><br></a></div>
                            </div>
                        </div>
                        <div class="col" style="height: 120px;">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=impressnext"><br>Next &gt;<br><br></a></div>
                            </div>
                        </div>
                        <div class="col" style="height: 36px;">
                            <div></div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px; background: #08be75;">
                        <div class="col">
                            <div>
                                <h3>SLIDE SHOW</h3>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=startimagemanual">Manual</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=imagekenburn">Slide Show</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=startpdf">Manual *.pdf</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=imageusb">Slide Show USB</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=startpdfusb">Manual *.pdf USB</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h3>SLIDE TIME</h3>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=slidetime0">fastest</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=slidetime5">5 s</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=slidetime10">10 s</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h3>&nbsp;</h3>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=slidetime15">15 s</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=slidetime30">30 s</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=slidetime60">60 s</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px; background: #08be75;">
                        <div class="col">
                            <div>
                                <h3>OVERLAY</h3>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=overlay" data-toggle="tooltip" title="/images/overlay.png over everything">Overlay</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=stopoverlay">no Overlay</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px; background: #08be75;">
                        <div class="col">
                            <div>
                                <h3>IMPRESS</h3>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=impressrelaunch">Launch</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=impressopen">Open</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=impressclose">Save</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=impressedit">Edit</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=impresslast">Open Demo</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=impressplay">Fullscreen</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h3>AUDIO</h3>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=startaudio">Play</a></div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=startaudiosub">Play USB</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h3>&nbsp;</h3>
                            <div>
                                <div class="col colforbutton"><a class="btn btn-success action" role="button" href="?action=startaudioslave">Play Slave</a></div>
                                <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=stopaudio">Stop Audio only</a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-4">
                    <div class="row">
                        <div class="col" style="border-style: none;">
                            <h1>VIDEO</h1>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #6cc6d9;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <h2 data-toggle="tooltip" title="regular video player">PLAYER</h2>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless">Play All</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless01">Loop 01_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless02">Loop 02_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless03">Loop 03_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless04">Loop 04_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless05">Loop 05_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless06">Loop 06_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless07">Loop 07_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless08">Loop 08_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless09">Loop 09_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startless10">Loop 10_*</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>PLAYER ONCE</h2>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce01">Once 01_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce02">Once 02_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce03">Once 03_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce04">Once 04_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce05">Once 05_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce06">Once 06_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce07">Once 07_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce08">Once 08_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce09">Once 09_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startlessonce10">Once 10_*</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2 data-toggle="tooltip" title="for multichannel installations">PLAYER SYNC</h2>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster">Play All</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster01">Loop 01_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster02">Loop 02_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster03">Loop 03_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster04">Loop 04_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster05">Loop 05_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster06">Loop 06_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster07">Loop 07_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster08">Loop 08_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster09">Loop 09_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmaster10">Loop 10_*</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2 data-toggle="tooltip" title="for button trigger sync stuff">PLAYER SYNC ONCE</h2>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce01">Once 01_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce02">Once 02_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce03">Once 03_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce04">Once 04_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce05">Once 05_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce06">Once 06_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce07">Once 07_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce08">Once 08_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce09">Once 09_*</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startmasteronce10">Once 10_*</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #6cc6d9;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <h2 data-toggle="tooltip" title="only works with video named: wifisync.mp4">SYNC WIFI</h2>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" id="dmxbuttoncolor-1" href="?action=startmasterwifi" data-toggle="tooltip" title="make sure you configured the receiver!">Wifi Sender</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" id="dmxbuttoncolor-3" href="?action=startslavewifi" data-toggle="tooltip" title="set masters wifi name/password in the system settings => &quot;Connect to Wifi&quot;">Wifi Receiver</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>MULTICHANNEL</h2>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startslave">Receiver/Slave</a></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=setsync_long" data-toggle="tooltip" title="use this for long videos to sync proper">set long videos</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                                <div class="col colforbutton" style="height: 48px;"><a class="btn btn-primary action" role="button" href="?action=startslaveonce">Receiver/Slave Once</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=stopslaves">Stop Slaves</a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=setsync_short" data-toggle="tooltip" title="use this if very short videos do not play">set short videos</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-5">
                    <div class="row">
                        <div class="col" style="border-style: none;">
                            <h1>SHARING</h1>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #4296d2;">
                        <div class="col">
                            <div>
                                <h2 style="height: 26px;">SCREEN SHARING</h2>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startscreensharing" data-toggle="tooltip" title="vnc for reverse connection, startscreen stays black until connected">VNC ON<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=tcpsserver" data-toggle="tooltip" title="TCPSypon Receiver by techlife.sg">TCPSyphon<br></a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3 style="height: 26px;">&nbsp;</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #4296d2;">
                        <div class="col">
                            <div>
                                <h2>CAMERA USB</h2>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startwebcamusb" data-toggle="tooltip" title="webcam">Webcam ON<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-primary" role="button" data-toggle="tooltip" title="show webcam" onclick="window.open(`//${window.location.hostname}:8081`)" target="_blank">Show<br></a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=stopwebcamusb" data-toggle="tooltip" title="webcam">Webcam OFF<br></a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #4296d2;">
                        <div class="col">
                            <div>
                                <h2 style="height: 26px;">piCAMERA</h2>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=enablecamera" data-toggle="tooltip" title="needs reboot">Enable<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=camerafeed" data-toggle="tooltip" title="picam livefeed on screen">Livefeed<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=startwebcam" data-toggle="tooltip" title="picam webcam">Webcam<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=camerapicture" data-toggle="tooltip" title="saves in /images/*">Take Picture<br></a></div>
                                <div class="col colforbutton">
                                    <h3>&nbsp;</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3 style="height: 26px;">&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=disablecamera" data-toggle="tooltip" title="needs reboot">Disable<br></a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <div class="col colforbutton">
                                    <h2 style="height: 26px;">FX</h2>
                                </div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=cameranone" data-toggle="tooltip" title="TCPSypon Receiver by techlife.sg">no<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=camerasketch" data-toggle="tooltip" title="TCPSypon Receiver by techlife.sg">Sketch<br></a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <div class="col colforbutton">
                                    <h3 style="height: 26px;">&nbsp;</h3>
                                </div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=cameragpen" data-toggle="tooltip" title="TCPSypon Receiver by techlife.sg">GPen<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=cameraemboss" data-toggle="tooltip" title="TCPSypon Receiver by techlife.sg">Emboss<br></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-6">
                    <div class="row">
                        <div class="col" style="border-style: none;">
                            <h1>MAPPING</h1>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #204b9b;padding-bottom: 20px;">
                        <div class="col">
                            <h2>OPEN</h2>
                            <div>
                                <div class="row" style="width: 215px;margin-left: 0px;margin-right: 0px;">
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperimport1">01</a></div>
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperimport2">02</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                            <div>
                                <div class="row" style="width: 215px;margin-left: 0px;margin-right: 0px;">
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperimport3">03</a></div>
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperimport4">04</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;SAVE</h2>
                            </div>
                            <div>
                                <div class="row" style="width: 215px;margin-left: 0px;margin-right: 0px;">
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperexport1">01</a></div>
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperexport2">02</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                            <div>
                                <div class="row" style="width: 215px;margin-left: 0px;margin-right: 0px;">
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperexport3">03</a></div>
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperexport4">04</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-2 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #204b9b;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <h2>MODE</h2>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mappermappingmode">MAPPING</a></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton" style="height: 48px;"><a class="btn btn-light action" role="button" href="?action=mappermediaselect">Media Selection</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mappertexturemode">TEXTURE</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperplaymode">PRESENT</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperquad">Add Quad</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mappertriangl">Add Triangle</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mappercircle">Add Circle</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperdelete">Delete</a></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mappermediaselectth">Media Stepper</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;FUNCTION</h2>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperfullscreen">Fullscreen</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperedgeblend">Edge Blend</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperprev">Prev Surface</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperprevvertex">Prev Vertex</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperlayerup">Layer Up</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperup">Move Up</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperleft">Move Left</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button">UNDO</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button">Panel</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mappernext">Next Surface</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mappernextvertex">Next Vertex</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperlayerdown">Layer Down</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperdown">Move Down</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperright">Move Right</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-2 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #204b9b;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <h2>SYNC</h2>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperwhat">Set to ?</a></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mappersender">Sender</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                                <div class="col colforbutton" style="height: 48px;"></div>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperreceiver">Receiver</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #204b9b;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <h2>REMOTE</h2>
                                <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=launchmapperremote">Launch</a></div>
                                <div class="col colforbutton"><a class="btn btn-light" role="button" href="https://github.com/magdesign/ofxPiMapper_PVJexh/releases/tag/v0.1" target="_blank">Download App</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>FBO</h2>
                                <div class="col colforbutton" style="height: 48px;"><a class="btn btn-light action" role="button" href="?action=launchmapperfbo">Launch</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                        <div class="col">
                            <div></div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #204b9b;padding-bottom: 20px;">
                        <div class="col">
                            <h2>SLIDESHOW</h2>
                            <div>
                                <div class="row" style="width: 215px;margin-left: 0px;margin-right: 0px;">
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperslidetime2">2s</a></div>
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperslidetime5">5s</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                            <div>
                                <div class="row" style="width: 215px;margin-left: 0px;margin-right: 0px;">
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperslidetime10">10s</a></div>
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperslidetime15">15s</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;FORMAT</h2>
                            </div>
                            <div>
                                <div class="row" style="width: 215px;margin-left: 0px;margin-right: 0px;">
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperresizenative">Native</a></div>
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperresizefit">Fit</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                            <div>
                                <div class="row" style="width: 215px;margin-left: 0px;margin-right: 0px;">
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperresizefitprop">Prop</a></div>
                                    <div class="col colforbutton"><a class="btn btn-light action" role="button" href="?action=mapperresizefillprop">Fill</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-7">
                    <div class="row">
                        <div class="col" style="border-style: none;">
                            <h1>EXPANSION</h1>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #574696;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <h2>PIR SENSOR</h2>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" href="?action=startpir1">Start</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" href="?action=stop">Stop</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>SENSITIVITY</h2>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" href="?action=pirlow">low</a></div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" href="?action=pirmedium">medium</a></div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" href="?action=pirhigh">high</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #574696;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <h2 data-toggle="tooltip" title="for making the transition pic">STILLSHOT</h2>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" href="?action=startloopfile">Play Loopfile</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" href="?action=stillshot">Take Stillshot</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #574696;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <div class="col colforbutton">
                                    <h2>BUTTONS</h2>
                                </div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" href="?action=startbuttons">Enable</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <div class="col colforbutton">
                                    <h2>&nbsp; &nbsp;</h2>
                                </div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" href="?action=stopbuttons">Disable</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #574696;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <h2>BUTTON 1</h2>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="stopall"><label class="form-check-label" for="formCheck-1">stopall</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-1" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="startmaster"><label class="form-check-label" for="formCheck-1">startmaster</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-2" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="startmaster01"><label class="form-check-label" for="formCheck-1">startvideo 01_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-10" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton-1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="startmasterone01"><label class="form-check-label" for="formCheck-1">startvideo once 01_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-3" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="startmaster01"><label class="form-check-label" for="formCheck-1">startvideo 02_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-9" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="startmaster03"><label class="form-check-label" for="formCheck-1">startvideo 03_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-8" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="startimage"><label class="form-check-label" for="formCheck-1">slideshow</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-7" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="clockdisplay"><label class="form-check-label" for="formCheck-1">clockdisplay</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-6" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="impressnext"><label class="form-check-label" for="formCheck-1">presenter next</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-5" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="impressprev"><label class="form-check-label" for="formCheck-1">presenter previous</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton1form-4" method="post" style="margin-left: 12px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton1" method="post" name="cpbutton1" onclick="SubmitBTNFormData();" value="pause"><label class="form-check-label" for="formCheck-1">pause</label></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>BUTTON 2</h2>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="stopall"><label class="form-check-label" for="formCheck-1">stopall</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-1" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="startmaster"><label class="form-check-label" for="formCheck-1">startmaster</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-4" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="startmaster01"><label class="form-check-label" for="formCheck-1">startvideo 01_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-10" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton-2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="startmasterone01"><label class="form-check-label" for="formCheck-1">startvideo once 01_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-3" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="startmaster02"><label class="form-check-label" for="formCheck-1">startvideo 02_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-2" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="startmaster03"><label class="form-check-label" for="formCheck-1">startvideo 03_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-5" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="startmaster03"><label class="form-check-label" for="formCheck-1">slideshow</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-6" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="clockdisplay"><label class="form-check-label" for="formCheck-1">clockdisplay</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-7" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="impressnext"><label class="form-check-label" for="formCheck-1">presenter next</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-8" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="impressprev"><label class="form-check-label" for="formCheck-1">presenter previous</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton2form-9" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton2" method="post" name="cpbutton2" onclick="SubmitBTN2FormData2();" value="pause"><label class="form-check-label" for="formCheck-1">presenter previous</label></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>BUTTON 3</h2>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="stopall"><label class="form-check-label" for="formCheck-1">stopall</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-1" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="startmaster"><label class="form-check-label" for="formCheck-1">startmaster</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-2" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="startmaster01"><label class="form-check-label" for="formCheck-1">startvideo 01_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-10" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton-3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="startmasterone01"><label class="form-check-label" for="formCheck-1">startvideo once 01_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-4" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="startmaster02"><label class="form-check-label" for="formCheck-1">startvideo 02_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-3" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="startmaster03"><label class="form-check-label" for="formCheck-1">startvideo 03_*</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-9" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="startimage"><label class="form-check-label" for="formCheck-1">slideshow</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-8" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="clockdisplay"><label class="form-check-label" for="formCheck-1">clockdisplay</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-7" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="launchmapper"><label class="form-check-label" for="formCheck-1">launchmapper</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-6" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="beameron"><label class="form-check-label" for="formCheck-1">beameron</label></div>
                                    </form>
                                </div>
                                <div class="col colforbutton" style="height: 24px;">
                                    <form id="cpbutton3form-5" method="post" style="margin-left: 10px;">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="cpbutton3" method="post" name="cpbutton3" onclick="SubmitBTN3FormData3();" value="pause"><label class="form-check-label" for="formCheck-1">pause</label></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #574696;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <div class="col colforbutton">
                                    <h2 data-toggle="tooltip" title="all other sensors">SENSORS</h2>
                                </div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="expansionbutton" data-toggle="tooltip" title="dht11 on pin5" href="?action=gettemperature">Temperature</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <div class="col colforbutton">
                                    <h2>&nbsp; &nbsp;</h2>
                                </div>
                                <div class="col colforbutton"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-8">
                    <div class="row">
                        <div class="col" style="border-style: none;">
                            <h1>SCHEDULER</h1>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #782b71;padding-bottom: 20px;">
                        <div class="col">
                            <div>
                                <h2>CLOCK</h2>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton" data-toggle="tooltip" title="check date and time" href="?action=gettime">Check<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton" data-toggle="tooltip" title="display on screen" href="?action=clockdisplay">Display<br></a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-warning" role="button" id="schedulerbutton" data-toggle="tooltip" title="set date and time from user" onclick="settime();">Set<br></a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>COLOR</h2>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton" href="?action=clockred">Red<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton" href="?action=clockorange">Orange<br></a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton" style="height: 48px;"><a class="btn btn-warning action" role="button" id="schedulerbutton" href="?action=clockgreen">Green<br></a></div>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton" href="?action=clockpink">Pink<br></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #782b71;">
                        <div class="col">
                            <div>
                                <h2>SCHEDULER</h2>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton-1" data-toggle="tooltip" title="check date and time" href="?action=timeron">Enable<br></a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton-2" data-toggle="tooltip" title="set date and time from user" href="?action=timeroff">Disable<br></a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h2>&nbsp;TIMETABLE</h2>
                                <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton-3" data-toggle="tooltip" title="" href="?action=timer">Show<br></a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h3>&nbsp;</h3>
                                <div class="col colforbutton" style="height: 48px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters row-cols-1 row-cols-xl-2" style="margin-right: -15px;margin-left: -15px;background: #782b71;">
                        <div class="col">
                            <div>
                                <h2>SCHEDULER</h2>
                                <div class="col colforbutton">
                                    <div class="d-xl-flex align-items-xl-center" id="crondisplay" style="height: 60px;color: rgb(0,0,0);background: #ffffff;border-radius: 5px;margin: 10px;padding-left: 15px;padding-top: 15px;">
                                    
                                    <!-- this displays the cron plugin -->

<div class='crontab'>
    <div id='example1b'></div>
    </div></div>
                                </div>
                                <div class="col colforbutton">
                                    <div id="commandsselection" style="height: 157px;border-radius: 5px;margin: 10px;">
                                        <div class="row">
                                            <div class="col">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-check"><input class="form-check-input" type="radio" id="shedulerradio" method="post" name="shedulerradio" onclick="displayRadioValue();" value="stopall"><label class="form-check-label" for="formCheck-1">stop all</label></div>
                                                            <div
                                                                class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-2" method="post" name="shedulerradio" onclick="displayRadioValue();" value="startmaster"><label class="form-check-label" for="formCheck-1">start video master</label></div>
                                                        <div
                                                            class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-4" method="post" name="shedulerradio" onclick="displayRadioValue();" value="startmaster01"><label class="form-check-label" for="formCheck-1">start video 01_*</label></div>
                                                    <div
                                                        class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-5" method="post" name="shedulerradio" onclick="displayRadioValue();" value="startmaster02"><label class="form-check-label" for="formCheck-1">start video 02_*</label></div>
                                            <div
                                                class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-6" method="post" name="shedulerradio" onclick="displayRadioValue();" value="relaunchmapper"><label class="form-check-label" for="formCheck-1">start mapper</label></div>
                                        <div
                                            class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-8" method="post" name="shedulerradio" onclick="displayRadioValue();" value="mapperimport1"><label class="form-check-label" for="formCheck-1">start mapper 01</label></div>
                                    <div
                                        class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-7" method="post" name="shedulerradio" onclick="displayRadioValue();" value="mapperimport2"><label class="form-check-label" for="formCheck-1">start mapper 02</label></div>
                            </div>
                            <div class="col">
                                <div class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-1" method="post" name="shedulerradio" onclick="displayRadioValue();" value="startimage"><label class="form-check-label" for="formCheck-1">slideshow</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-3" method="post" name="shedulerradio" onclick="displayRadioValue();" value="clockdisplay"><label class="form-check-label" for="formCheck-1">clock</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-9" method="post" name="shedulerradio" onclick="displayRadioValue();" value="beameron"><label class="form-check-label" for="formCheck-1">projector on</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-10" method="post" name="shedulerradio" onclick="displayRadioValue();" value="beameroff"><label class="form-check-label" for="formCheck-1">projector off</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-12" method="post" name="shedulerradio" onclick="displayRadioValue();" value="startdmxplayback01"><label class="form-check-label" for="formCheck-1">dmx 01</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-11" method="post" name="shedulerradio" onclick="displayRadioValue();" value="startdmxplaybackaudio01"><label class="form-check-label" for="formCheck-1">dmx 01/audio</label></div>
                                <div
                                    class="form-check"><input class="form-check-input" type="radio" id="shedulerradio-13" method="post" name="shedulerradio" onclick="displayRadioValue();" value="startdmxplaybackvid01"><label class="form-check-label" for="formCheck-1">dmx 01/video</label></div>
                        </div>
                    </div> <script>
 	function displayRadioValue() {
        var ele =document.getElementsByName('shedulerradio');
         for(i =0; i< ele.length; i++) {
           if(ele[i].checked)
           document.getElementById("result").innerHTML
            =""+ele[i].value;                    
            }
        }
  </script></form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col">
            <div>
                <h2>COMMANDS</h2>
                <div class="col colforbutton">
                    <div class="d-xl-flex align-items-xl-center" id="codedisplay" style="height: 60px;color: rgb(0,0,0);background: #ffffff;border-radius: 5px;margin: 10px;padding-left: 15px;padding-top: 15px;"><!-- displays the scheduler commands -->

<div class='crontab'>
    <p><span class='example-text' id='example1b-val'> </span> /var/www/sync/<span id="result"></span></p>
    </div></div>
                    <div class="d-inline-flex" id="cronwrite" style="margin-left: 10px;"><?php
    $filename = "../../media/internal/timer.txt";

    function make_content_file($filename,$content,$opentype="w")
    {
        $fp_file = fopen($filename, $opentype);
        fputs($fp_file, $content);
        fclose($fp_file);
    }

    if($_POST)
    {
         $newcontents=$_POST[newcontents];
         make_content_file($filename,$newcontents);
    }
    $filecontents = file_get_contents($filename);
?>
<?php
    if($_POST)
    {
    }
?>

<form method="post">
    <textarea name="newcontents"
              class=" " style="overflow:auto;resize:none; border-radius: 5px;" cols="50"    rows="8"
              ><?=$filecontents?></textarea>
    <br>
    <input class="btn btn-danger" type="submit" value="Write Scheduler"  ;>  
</form></div>
                </div>
            </div>
        </div>
        </div>
        <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #782b71;">
            <div class="col">
                <div>
                    <h2>&nbsp;</h2>
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
                </div>
            </div>
            <div class="col">
                <div>
                    <h2>&nbsp;&nbsp;</h2>
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
                </div>
            </div>
        </div>
        <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #782b71;">
            <div class="col">
                <div>
                    <h2>COUNTDOWN</h2>
                    <div class="col colforbutton">
                        <form id="countdownform" method="post"><input class="form-control" type="number" id="countdown" name="countdown" placeholder="60" style="margin-left: 10px;max-width: 200px;"></form>
                    </div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton-4" data-toggle="tooltip" title="start countdown" href="?action=startcountdown">Start<br></a></div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
                    <div class="col colforbutton"><a class="btn btn-warning" role="button" id="submitcountdownFormData" onclick="SubmitcountdownFormData();" value="countdown" data-toggle="tooltip" titel="set the countdown time">set Time<br></a></div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="schedulerbutton-5" data-toggle="tooltip" title="stop" href="?action=stop">Stop<br></a></div>
                </div>
            </div>
            <div class="col">
                <div>
                    
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
               
                </div>
            </div>
        </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="tab-9">
            <div class="row">
                <div class="col" style="border-style: none;">
                    <h1>DMX OSC MIDI</h1>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #ad325f;padding-bottom: 20px;">
                <div class="col">
                    <div>
                        <h2 data-toggle="tooltip" title="ola is needed for all dmx&amp;artnet functions!">OLA</h2>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=startola">Start</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=startoladaemon">Daemon ON</a></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-danger" role="button" id="dmxbuttoncolor" onclick="window.open(`//${window.location.hostname}:9090`)" target="_blank">Open Panel</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=stopoladaemon">Daemon OFF</a></div>
                    </div>
                </div>
                <div class="col">
                    <div></div>
                </div>
                <div class="col">
                    <div></div>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #ad325f;">
                <div class="col">
                    <div>
                        <h2>DMX&nbsp;RECORDER</h2>
                        <div class="col colforbutton" style="height: 78px;"><a class="btn btn-primary action" role="button" data-toggle="tooltip" title="stop dmx recording" href="?action=stopdmx">Stop Recording</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" data-toggle="tooltip" title="record universe 0-30" href="?action=startdmxrecord01">&nbsp;REC Show01</a></div>
                        <div class="col d-none d-lg-flex colforbutton" style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" data-toggle="tooltip" title="record universe 0-20" href="?action=startdmxrecord02">&nbsp;REC Show02</a></div>
                        <div class="col d-none d-lg-flex colforbutton" style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" data-toggle="tooltip" title="record universe 0-20" href="?action=startdmxrecord03">&nbsp;REC Show03</a></div>
                        <div class="col d-none d-lg-flex colforbutton" style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" data-toggle="tooltip" title="record universe 0-20" href="?action=startdmxrecord04">&nbsp;REC Show04</a></div>
                        <div class="col d-none d-lg-flex colforbutton" style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" data-toggle="tooltip" title="record universe 0-20" href="?action=startdmxrecord05">&nbsp;REC Show05</a></div>
                        <div class="col d-none d-lg-flex colforbutton" style="height: 68px;"></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h2>UNIVERSE</h2>
                        <div class="col colforbutton" style="height: 78px;"></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="change all recorded universes to universe 1 for playback" href="?action=changedmxuniverseshow1">Change to 1</a></div>
                        <div class="col d-none d-lg-flex colforbutton"
                            style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="change all recorded universes to universe 1 for playback" href="?action=changedmxuniverseshow2">Change to 1</a></div>
                        <div class="col d-none d-lg-flex colforbutton"
                            style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="change all recorded universes to universe 1 for playback" href="?action=changedmxuniverseshow3">Change to 1</a></div>
                        <div class="col d-none d-lg-flex colforbutton"
                            style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="change all recorded universes to universe 1 for playback" href="?action=changedmxuniverseshow4">Change to 1</a></div>
                        <div class="col d-none d-lg-flex colforbutton"
                            style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="change all recorded universes to universe 1 for playback" href="?action=changedmxuniverseshow5">Change to 1</a></div>
                        <div class="col d-none d-lg-flex colforbutton"
                            style="height: 68px;"></div>
                    </div>
                </div>
                <div class="col">
                    <h2>DMX&nbsp;PLAYER</h2>
                    <div>
                        <div class="col colforbutton" style="height: 78px;">
                            <form id="submitdelayform" method="post"><input class="form-control" type="number" step="0.01" id="delay" name="delay" placeholder="1.0" style="margin-left: 10px;max-width: 200px;"></form>
                        </div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show only" href="?action=startdmxplayback01">&nbsp; &nbsp; &nbsp; &nbsp;Show01&nbsp; &nbsp; &nbsp; &nbsp;</a></div>
                        <div class="col colforbutton"
                            style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show only" href="?action=startdmxplayback02">&nbsp; &nbsp; &nbsp; &nbsp;Show02&nbsp; &nbsp; &nbsp; &nbsp;</a></div>
                        <div class="col colforbutton"
                            style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show only" href="?action=startdmxplayback03">&nbsp; &nbsp; &nbsp; &nbsp;Show03&nbsp; &nbsp; &nbsp; &nbsp;</a></div>
                        <div class="col colforbutton"
                            style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show only" href="?action=startdmxplayback04">&nbsp; &nbsp; &nbsp; &nbsp;Show04&nbsp; &nbsp; &nbsp; &nbsp;</a></div>
                        <div class="col colforbutton"
                            style="height: 68px;"></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show only" href="?action=startdmxplayback05">&nbsp; &nbsp; &nbsp; &nbsp;Show05&nbsp; &nbsp; &nbsp; &nbsp;</a></div>
                        <div class="col colforbutton"
                            style="height: 68px;"></div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton" data-toggle="tooltip" title="set the delay in seconds until the audio/video starts" style="height: 78px;"><a class="btn btn-danger" role="button" id="submitdelayFormData" onclick="SubmitdelayFormData();" value="Set Delay" data-toggle="tooltip" title="set delay time in seconds until video/audio starts 0.1=100millisec">Set Delay</a></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with audio" href="?action=startdmxplaybackaudio01">Show01/01_* Audio</a></div>
                        <div class="col colforbutton" style="height: 68px;"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with video" href="?action=startdmxplaybackvid01">Show01/01_* Video</a></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with audio" href="?action=startdmxplaybackaudio02">Show02/02_* Audio</a></div>
                        <div class="col colforbutton" style="height: 68px;"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with video" href="?action=startdmxplaybackvid02">Show02/02_* Video</a></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with audio" href="?action=startdmxplaybackaudio03">Show03/03_* Audio</a></div>
                        <div class="col colforbutton" style="height: 68px;"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with video" href="?action=startdmxplaybackvid03">Show03/03_* Video</a></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with audio" href="?action=startdmxplaybackaudio04">Show04/04_* Audio</a></div>
                        <div class="col colforbutton" style="height: 68px;"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with video" href="?action=startdmxplaybackvid04">Show04/04_* Video</a></div>
                        <div class="col colforbutton"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with audio" href="?action=startdmxplaybackaudio05">Show05/05_* Audio</a></div>
                        <div class="col colforbutton" style="height: 68px;"><a class="btn btn-secondary action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="play show with video" href="?action=startdmxplaybackvid05">Show05/05_* Video</a></div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #ad325f;padding-bottom: 20px;">
                <div class="col">
                    <div>
                        <h2>OSC</h2>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=oscreceiver">Start Listen Port: 9876</a></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-danger" role="button" id="dmxbuttoncolor" href="sync/PocketVJ_OSC.touchosc" target="_blank">Download TouchOSC</a></div>
                    </div>
                </div>
                <div class="col">
                    <h2>MIDI CONTROL</h2>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="start midi listener" href="?action=startmidicontrol">Start Remote</a></div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=stopmidicontrol">Stop Remote</a></div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #ad325f;">
                <div class="col">
                    <div>
                        <h2>MIDI RECORDER</h2>
                        <div class="col colforbutton"><a class="btn btn-primary action" role="button" href="?action=stopmidirecplay">Stop Recording</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=startmidirecord01" data-toggle="tooltip" title="@120bpm 4/4 beat on device :20">REC Track01</a></div>
                        <div class="col d-none d-lg-flex colforbutton" style="height: 68px;"></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="show connected midi devices" href="?action=showmidi">Show Devices #</a></div>
                        <div class="col colforbutton" style="height: 48px;"></div>
                        <div class="col d-none d-lg-flex colforbutton" style="height: 68px;"></div>
                    </div>
                </div>
                <div class="col">
                    <h2>MIDI PLAYBACK</h2>
                    <div>
                        <div class="col d-none d-lg-flex colforbutton" style="height: 48px;"></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=startmidiplay01" data-toogle="tooltip" title="@120bpm 4/4 beat on device #20">Track01</a></div>
                        <div class="col colforbutton" style="height: 68px;"></div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col d-none d-lg-flex colforbutton" style="height: 48px;"></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=startmididmxaudioplay01">Track01/DMX/Audio</a></div>
                        <div class="col colforbutton" style="height: 68px;"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=startmididmxvideoplay01">Track01/DMX/Video</a></div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #ad325f;">
                <div class="col">
                    <div>
                        <h2>QLC+</h2>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=startqlcplus">Open</a></div>
                        <div class="col colforbutton" style="height: 68px;"></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-danger" role="button" id="dmxbuttoncolor" data-toggle="tooltip" titel="opens qlc+ webpanel" target="_blank" onclick="window.open(`//${window.location.hostname}:9999`)">Open Panel</a></div>
                        <div class="col colforbutton" style="height: 68px;"></div>
                    </div>
                </div>
                <div class="col">
                    <h2>CUSTOM</h2>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" data-toggle="tooltip" title="start ola always on boot" href="?action=customfunction1">Custom #1</a></div>
                        <div class="col colforbutton" style="height: 68px;"></div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="dmxbuttoncolor" href="?action=customfunction2">Custom #2</a></div>
                        <div class="col colforbutton" style="height: 68px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="tab-10">
            <div class="row">
                <div class="col" style="border-style: none;">
                    <h1>DISPLAY</h1>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #972c2c;">
                <div class="col">
                    <div>
                        <h2>INFO</h2>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=getresolution">Actual Resolution</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                        <div class="col colforbutton"></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=resolutionquery_dmt">Possible DMT</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=resolutionquery_cea">Possible CEA</a></div>
                        <div class="col colforbutton"></div>
                    </div>
                </div>
                <div class="col">
                    <h2 data-toggle="tooltip" title="forces to selected resolution, needs reboot!">RESOLUTION</h2>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=hdmireset">Default</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=hdmi5">1920 x 1080</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=force1680">1680 x 1050</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=hdmi1">1024 x 768</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=hdmi4">1280 x 720</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=hdmi6">1280 x 800</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #972c2c;">
                <div class="col">
                    <div>
                        <h2>ROTATE &amp; FLIP</h2>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=hdmireset">Default</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=flip1">Flip Horizontal</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=flip2">Flip Vertical</a></div>
                        <div class="col colforbutton">
                            <h2>&nbsp;</h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=rotate1">90°</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=rotate2">180°</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=rotate3">270°</a></div>
                        <div class="col colforbutton">
                            <h2>&nbsp;</h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h2>SLEEP</h2>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=screenoff">Display Sleep</a></div>
                        <div class="col colforbutton"></div>
                        <div class="col colforbutton"></div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=screenon">Display Wakeup</a></div>
                        <div class="col colforbutton"></div>
                        <div class="col colforbutton"></div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #972c2c;">
                <div class="col">
                    <div>
                        <h2>PROJECTOR</h2>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=beameron" data-toggle="tooltip" title="Beamer ON">ON</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=beamerstatus" data-toggle="tooltip" title="check if on or off">Status</a></div>
                        <div class="col colforbutton">
                            <form id="beameripform" method="post"><input class="form-control" type="text" id="beamerip" name="beamerip" placeholder="192.168.2.254" style="margin-left: 10px;max-width: 200px;"></form>
                        </div>
                        <div class="col colforbutton">
                            <h2>&nbsp;</h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="?action=beameroff" data-toggle="tooltip" title="Beamer OFF">OFF</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" href="http://192.168.2.254" target="_blank" data-toggle="tooltip" title="opens control interface of projector">Interface</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger" role="button" id="submitbeameripFormData" onclick="SubmitbeameripFormData();" value="Set IP" data-toggle="tooltip" title="make sure to stay in same range as pvj rj45">Set IP</a></div>
                    </div>
                </div>
                <div class="col">
                    <h2>&nbsp;</h2>
                    <div>
                        <div class="col colforbutton"></div>
                        <div class="col colforbutton"></div>
                        <div class="col colforbutton"></div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton"></div>
                        <div class="col colforbutton"></div>
                        <div class="col colforbutton"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="tab-11">
            <div class="row">
                <div class="col" style="border-style: none;">
                    <h1>NETWORK SETTINGS</h1>
                </div>
            </div>
            <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #e74410;">
                <div class="col">
                    <div>
                        <h2>INFO</h2>
                        <div class="col colforbutton"><a class="btn btn-dark action" role="button" id="networkbutton" data-toggle="tooltip" title="show wifi ip" href="?action=ipwifi">Wifi IP</a></div>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="networkbutton" data-toggle="tooltip" title="show wifi networks in range, takes a few seconds" href="?action=showwifi">Available Wifi's</a></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-danger action" role="button" id="networkbutton" data-toggle="tooltip" title="show rj45 ip" href="?action=iplan">RJ45 IP</a></div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="show to which wifi we are connected" href="?action=connectedtowifi">Name of Wifi</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h2 data-toggle="tooltip" title="forces to selected resolution, needs reboot!">CHANGE IP</h2>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="change to default range" href="?action=iprange192">192.168.2.*</a></div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="sets rj45 to dhcp to get ip from router" href="?action=setdhcp">RJ45 DHCP</a></div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="change to light console range" href="?action=iprange10">10.0.0.*</a></div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-sm-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #e74410;">
                <div class="col">
                    <div>
                        <h2>REMOTE ACCESS</h2>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="remote access over internet with password" href="?action=remoteaccesson">Enable</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="stop remote access" href="?action=remoteaccessoff">Disable</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h2 data-toggle="tooltip" title="forces to selected resolution, needs reboot!">CP PASSWORD</h2>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" href="?action=passwdenable">Enable</a></div>
                        <div class="col colforbutton">
                            <form id="cppasswordform" method="post"><input class="form-control" type="text" id="cppassword" name="cppassword" placeholder="Password" style="margin-left: 10px;max-width: 200px;"></form>
                        </div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" href="?action=passwddissable">Disable</a></div>
                        <div class="col colforbutton"><a class="btn btn-warning" role="button" id="submitcpFormData" onclick="SubmitcpFormData();" value="Set CP Password">&lt;&nbsp; Set new Password</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #e74410;">
                <div class="col">
                    <div>
                        <h2>CONNECT to WIFI</h2>
                        <div class="col colforbutton">
                            <form id="wifiform" method="post"><input class="form-control" type="text" id="wifiname" name="wifiname" placeholder="Name" style="margin-left: 10px;max-width: 200px;"></form>
                        </div>
                        <div class="col colforbutton">
                            <form id="cppasswordform-2" method="post"><input class="form-control" type="text" id="wifipass" name="wifipass" placeholder="Password" style="margin-left: 10px;max-width: 200px;"></form>
                        </div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="test wifi connection" href="?action=wifitest">Test Connection</a></div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="after testing, make it permanent" href="?action=wifipermanent">Make Permanent</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="submitwifiFormData" data-toggle="tooltip" title="wifi name you want to connect" onclick="SubmitwifiFormData();" value="Set Wifi Name">&lt;&nbsp; Set Wifi Name</a></div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="submitwifipassFormData" data-toggle="tooltip" title="set password of wifi you want to connect" onclick="SubmitwifipassFormData();" value="Set Wifi Pass">&lt;&nbsp; Set Wifi Password</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="revert to factory standard hotspot mode and fix ip" href="?action=setstatic">Revert to Hotspot</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h2 data-toggle="tooltip" title="forces to selected resolution, needs reboot!">&nbsp;</h2>
                    <div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #e74410;">
                <div class="col">
                    <div>
                        <h2>WIFI ANTENNA</h2>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="enable onboard wifi" href="?action=wifiup">ON</a></div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="always enable onboard wifi (default)" href="?action=wifienable">ON Permanent</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>&nbsp;</h3>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="disable onboard wifi" href="?action=wifidown">OFF</a></div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" data-toggle="tooltip" title="disable wifi forever" href="?action=wifidisable">OFF Permanent</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h2 data-toggle="tooltip" title="forces to selected resolution, needs reboot!">WIFI CHANNEL</h2>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" href="?action=setwifi4">CH4</a></div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" href="?action=setwifi9">CH9</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>&nbsp;</h3>
                    <div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" href="?action=setwifi6">CH6</a></div>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="networkbutton" href="?action=setwifi11">CH11</a></div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="tab-12">
            <div class="row">
                <div class="col" style="border-style: none;">
                    <h1>SYSTEM SETTINGS</h1>
                </div>
            </div>
            <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #f86800;">
                <div class="col">
                    <div>
                        <h2>INFO</h2>
                        <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=buildversion">PVJ Version<br></a></div>
                        <div class="col colforbutton"></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <div class="col colforbutton">
                            <h3>&nbsp;</h3><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=oladversion">OLA Version<br></a></div>
                        <div class="col colforbutton"></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <div class="col colforbutton">
                            <h2>&nbsp;&nbsp;</h2><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=gettemp">CPU Temperature<br></a></div>
                        <div class="col colforbutton"></div>
                    </div>
                </div>
                <div class="col">
                    <div><a class="action" href="?action=rentalreset" data-toogle="tooltip" titel="rental reset, attention! deletes everything!" target="_blank"><img id="rentalreset" src="assets/img/danger_icon.svg" style="text-align: right;height: 40px;"></a>
                        <div
                            class="col colforbutton"><a class="btn btn-primary action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=getgpu">GPU Usage<br></a></div>
                    <div class="col colforbutton"></div>
                </div>
            </div>
        </div>
        <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #f86800;">
            <div class="col">
                <div>
                    <h2>AUDIO OUTPUT</h2>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="set audio output to hdmi" href="?action=hdmi_out">HDMI<br></a></div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=both_out">HDMI&amp;Jack<br></a></div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=jack_out">Jack<br></a></div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=alsa_out">USB/Alsa<br></a></div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h2>&nbsp;TESTTONE</h2>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=testtone">Stereo<br></a></div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=testtoneleft">Left&nbsp;<br></a></div>
                    <div class="col colforbutton"></div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
                    <div class="col colforbutton" style="height: 48px;"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=volume_up">Volume to 100%<br></a></div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=testtoneright">Right<br></a></div>
                    <div class="col colforbutton"></div>
                </div>
            </div>
        </div>
        <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #f86800;">
            <div class="col">
                <div>
                    <h2>FIRMWARE</h2>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=updateall">Update Everything<br></a></div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=updateola">Update OLA<br></a></div>
                    <div class="col colforbutton">
                        <h3>&nbsp;</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=factoryreset">Factory Reset<br></a></div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="delets all content, resets to delivery state" href="?action=rentalreset">Rental Reset<br></a></div>
                    <div class="col colforbutton">
                        <h3>&nbsp;</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h2>&nbsp;UPDATE MAPPER</h2>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=mapperupdate">Mapper<br></a></div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=mapperupdatehdmi">Mapper HDMI<br></a></div>
                    <div class="col colforbutton">
                        <h3>&nbsp;</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
                </div>
            </div>
        </div>
        <div class="row no-gutters row-cols-2 row-cols-lg-4" style="margin-right: -15px;margin-left: -15px;background: #f86800;">
            <div class="col">
                <div>
                    <h2>ACCESS</h2>
                    <div class="col colforbutton"><a class="btn btn-warning" role="button" id="settingsbutton" onclick="window.open(`//${window.location.hostname}:4222`)" target="_blank">Terminal<br></a></div>
                    <div class="col colforbutton">
                        <h3>&nbsp;</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
                    <div class="col colforbutton">
                        <h3>&nbsp;</h3>
                    </div>
                    <div class="col colforbutton">
                        <h3>&nbsp;</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h2>&nbsp;ALPHA STUFF</h2>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="untested, do not click!" href="?action=updatekernel">switch to RT kernel<br></a></div>
                    <div class="col colforbutton"></div>
                    <div class="col colforbutton">
                        <h3>&nbsp;</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h3>&nbsp;</h3>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="" href="?action=stopwebserver">stop server, php, smb<br></a></div>
                    <div class="col colforbutton"><a class="btn btn-warning action" role="button" id="settingsbutton" data-toggle="tooltip" title="to fix clock on first generation PVJs" href="?action=fixclock">fix RTC bug<br></a></div>
                    <div class="col colforbutton">
                        <h3>&nbsp;</h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    </div>
    <footer id="footer" style="height: 200px;">
        <div class="container" style="background: #e0e0e0;border-radius: 15px;">
            <p id="footertext" style="text-align: center;padding: 12px;color: rgb(0,0,0);">©2021&nbsp;<a href="https://magdesign.ch" target="_blank">magdesign.ch</a></p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 <!--  remove the 2x "active" words for the tabs-->

 <!--  insert this code before the </body> tag-->




<!-- Code below sets the "Set Time" button function--> 
 
<script type="text/javascript">
 function settime() {
    window.open('time_change.php');
    document.getElementById('actions_output').innerHTML = ("time set");
  } 
</script>


<!--Code below this line checks if user is online-->

<script src="js/offline.min.js"></script>
<link rel="stylesheet" href="../themes/offline-theme-chrome.css" />
<link rel="stylesheet" href="../themes/offline-language-english.css" />

<script>
  var run = function(){
  var req = new XMLHttpRequest();
  req.timeout = 5000;
  req.open('GET', 'http://localhost:8888/walter/0', true);
  req.send();
}
setInterval(run, 3000);

        Offline.options = {
        requests: false
        }
        
</script>


<!--Code below is for button actions-->

  <script type="text/javascript">
   $("a.action").on("click", function(event) { 
       event.preventDefault();
       $.get( "backend.php" + $(this).attr('href'), function(data) {
          $("#actions_output").html(data);
       });
   });
   </script>


   <!--Code  below is for cron / Scheduler generator -->

  <link rel="stylesheet" href="js/gentleSelect/jquery-gentleSelect.css">
  <link rel="stylesheet" href="js/cron/jquery-cron.css">
    <script src="js/jquery.min.js"></script>
  <script src="js/gentleSelect/jquery-gentleSelect-min.js"></script>
  <script src="js/cron/jquery-cron.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#example1b').cron({
            initial: "9 21 * * *",
            onChange: function() {
                $('#example1b-val').text($(this).cron("value"));
            },
            useGentleSelect: true
        });
    });
    </script>



</body>

</html>