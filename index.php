<?php
	 header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!--
   _____   __                       .___        __                              __  .__              
  /  _  \_/  |_  _____   ____  _____|   | _____/  |_  ________________    _____/  |_|__|__  __ ____  
 /  /_\  \   __\/     \ /  _ \/  ___/   |/    \   __\/ __ \_  __ \__  \ _/ ___\   __\  \  \/ // __ \ 
/    |    \  | |  Y Y  (  <_> )___ \|   |   |  \  | \  ___/|  | \// __ \\  \___|  | |  |\   /\  ___/ 
\____|__  /__| |__|_|  /\____/____  >___|___|  /__|  \___  >__|  (____  /\___  >__| |__| \_/  \___  >
        \/           \/           \/         \/          \/           \/     \/                   \/
-->
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title>The Oracle</title>
	    <meta name="description" content="The Oracle is an experiment that uses WebGL, speak.js, dancer.js a chat bot, and music from Soundcloud.">
	    <meta name="viewport" content="width=device-width">
        <meta property="og:image" content="img/oracle_thumb.png"/> 

	    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	    <link rel="stylesheet" href="css/main.css">
        <link rel="image_src" href="img/oracle_thumb.png" />
	</head>
    <body>
         <img style="display:none;" src="img/oracle_thumb.png" />
    	<!-- webgl bg -->
    	<div id="env" style="position: absolute; left:0px; top:0px"></div>
       
       	<!-- the bar to communcate with -->
    	<div class="converse-box">
    		<p id="reply">Awating Input...</p>
    		<input type="textarea" id="txt"/>
    		<div class="powered-by">
    			<p><b>Powered by </b> <a href="http://www.threejs.org/" target="_blank">threejs</a> | <a href="https://github.com/mattytemple/speak-js" target="_blank">speakjs</a> | <a href="http://jsantell.github.io/dancer.js/" target="_blank">dancerjs</a> | <a href="http://blog.program-o.com/" target="_blank">program-o</a> | <a href="http://www.soundcloud.com" target="_blank">soundcloud</a> |  <b>Created by </b> <a href="http://www.atmosinteractive.com">Atmos Interactive</a> </p>
    		</div>
    	</div>
    	<!-- music track info -->
    	<div class="sc-box">
            <div class="pause-play"></div>
			<a id="scLink" href="">
    			<div class="col_1">
	    			<h4 id="scTitle"></h4>
	    			<p id="scTrack"></p>
	    		</div>
	    		<div class="col_1">
	    			<img id="scImg" src=""/>
	    		</div>
    		</a>
		</div>
    	<!-- preload cover -->
    	<div class="cover">
    		<div class="center">
                <button id="summonBtn">Summon The Oracle</button>
    		</div>
    	</div>
    	
    	<!-- the audio element to be used by speakjs -->
    	<div id="audio"></div>

        
	    <?php include('scripts.php');?>

    </body>
</html>
