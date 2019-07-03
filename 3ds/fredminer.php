<?php
$title="Fredminer";
require('header.php');
?>
<div class="container">
    <div class="content">
        <center><h1>Fredminer</h1></center>
        <hr>
        <p>Welcome to Fredminer. This is a method of free CFW for US and JP systems, and cheap CFW for EU systems.
		<br>Fredminer requires any DSiWare game. US and JP both have free DSiWare on the eShop. EU does not.
		<br>This means that you must either already have a DSiWare game, or have access to the eShop to be able to download one.
		
		<h2>Before You Begin</h2>
        <ol>
            <li>First, a test: On your console, open System Settings, Internet Settings, DS Connection Settings.</li>
            <li>If it loads successfully and you see the old DS menu, proceed to item four.</li>
            <li>If, instead, it hangs on a black screen or an error screen instead of loading to the old DS menu, <b>you are unable to use Fredminer, Frogminer or Sudokuminer.</b> You will need to use <a href="https://3ds.hacks.guide/ntrboot" target="_blank">NTRboot</a> to access CFW.</li>
            <li>Please download and install 7-zip, the suggested archival management tool, available <a href="http://www.7zip.org/download.html" target="_blank">here.</a></li>
            <li>Please turn file extensions ON. Instructions for Windows <a href="https://3ds.hacks.guide/file-extensions-(windows)" target=”_blank”>here.</a></li>
        </ol>
		
		<h2>What You Need</h2>
		<div class="info">In all cases, where offered the option, download the <b>latest release, and NOT the source code version.</b></div>
		<ol>
			<li>A DSiWare game on your console, either already installed or downloaded from the eShop for this process.
			<li>The b9stool archive from <a href="https://github.com/zoogie/b9sTool/releases/latest" target=”_blank”>this link</a>.</li>
			<li>The latest Luma release from <a href="https://github.com/AuroraWright/Luma3DS/releases" target=”_blank”>here</a>.</li>
			<li>The latest Homebrew Menu from <a href="https://github.com/fincs/new-hbmenu/releases/latest" target="_blank">here</a></li>
			<li>The "Frogminer_save" archive, from <a href="https://github.com/zoogie/Frogminer/releases/tag/1.0" target="_blank">here</a>.</li>
			<li>Your console updated to 11.9 (fredminer works on 11.9, so there's no problem doing this)</li>
		</ol>
		<p><h3>Need a DSiWare game?</h3>
		Don't have any DSiWare, and need some? Click your console's region below. Click any button again to close it.
		<p>
		<button class="btn-toggle-visibility" data-target="#jp">JP</button>
        <div class="box hidden" id="jp">Try this QR code in the eShop QR scanner.
            <br><img src="pic/qr-jp.png">
        </div><p>
        <button class="btn-toggle-visibility" data-target="#us">US</button>
        <div class="box hidden" id="us">Try this QR code in the eShop QR scanner.
            <br><img src="pic/qr-us.png">
        </div><p>
        <button class="btn-toggle-visibility" data-target="#eu">EU</button>
        <div class="box hidden" id="eu">EU region consoles have no free DSiWare. Sorry! Usually, the cheapest one is around 2 dollars/pounds/euro/etc. Find one and buy it!
	    	<br>Alternatively, you can <a href="./frogminer.html">try Frogminer</a>. It works differently than Fredminer, and will be free for EU.
        </div><p>
			
		<h2>Preparation: Seedminer</h2>
		<h3>Finding your id0</h3>
        <ol>
            <li>Take your SD card out of your console.</li>
            <li>Put the SD card into your computer, navigate to it and open the "Nintendo 3DS" folder.</li>
            <li>Inside this folder, you will see one or more folders with very long, seemingly random names.</li>
            <li>If you only have ONE long named folder, skip to step 11. If you have TWO OR MORE, follow these steps in order.</li>
            <li>Back out of your Nintendo 3DS folder to your SD root. You may see folders such as Nintendo 3DS and DCIM. This means you are in the right place.</li>
            <li>Rename your Nintendo 3DS folder to "Nintendo BACKUP" <i>(right click and select "Rename")</i></li>
            <li>Safely eject your SD card, put it back in your console, and power it on.</li>
            <li>Wait for your console to generate some data.</li>
            <li>Once you see the home menu, power off your console, take out the SD card and put it in your computer.</li>
            <li>Navigate back to the "Nintendo 3DS" folder on your SD card. You should now only have one long named folder.</li>
            <li>The 32 character name of this long named folder is referred to as your 'id0'. Inside your id0 folder is your id1 folder. Your id1 is not relevant at this time.</li>
            <li>Right click this 'id0' folder and select "Rename".</li>
            <li>Press Control+C to COPY your id0. DO NOT enter or replace any text. If you accidentally enter or replace any text, press Control+Z to undo this action and restore your 'id0' name.</li>
            <li>Left click away from the folder to deselect it, and paste (Control+V) your id0 somewhere (for example, a Notepad window).</li>
            <li><b>IF YOU NEEDED TO RENAME THE NINTENDO 3DS FOLDER</b>: delete the "Nintendo 3DS" folder, then rename "Nintendo BACKUP" to "Nintendo 3DS". If you did NOT need to rename the "Nintendo 3DS" folder, DO NOT delete or rename anything.</li>
        </ol>
        <h3>Finding your movable.sed</h3>
        <ol>
            <li>Go to <a href="http://bruteforcemovable.com" target="_blank">bruteforcemovable</a>.</li>
            <li>Input your friend code from your friend card on your console and id0 into the fields given.</li>
            <li>Complete the "I'm not a robot" CAPTCHA.</li>
            <li>You will be provided a friend code. Add this friend code as an Internet friend on your console. <i>If, instead, it skips to "Done!" and gives you the option to download your movable.sed directly, skip to step six.</i></li>
            <li>When presented the option, click "Continue".</li>
            <li>Wait some time. Once the process is finished, you can download your "movable.sed". Put it somewhere you'll remember.</li>
        </ol>
		<h3>Exporting your DSiWare</h3>
		<ol>
			<li>On your console, open System Settings > Data Management > DSiWare.</li>
			<li>Under the System Memory tab, tap your DSiWare.</li>
			<li>Tap "Copy".</li>
			<li>Exit System Settings and power off your console.</li>
		</ol>
		<h3>Patching your DSiWare</h3>
		<ol>
			<li>Put your SD card in your computer.</li>
			<li>Navigate to SD > Nintendo 3DS > [id0] > [id1] > Nintendo DSiWare.</li>
			<li>Inside here, there should be a file with an 8 character name, ending in .bin. This is your DSiWare.</li>
			<li>Go to <a href="https://fredtool.bruteforcemovable.com/" target="_blank">fredtool</a>.</li>
			<li>In the relevant fields, provide your movable.sed and your DSiWare (file from step 3)</li>
			<li>Complete the CAPTCHA. If you do not see a CAPTCHA, please try this section again from a different browser.</li>
			<li>Once the process has finished, click Download to download your archive.</li>
		</ol>
		
		<h2>Fredminer: Fredmining</h2>
        <ol>
            <li>Extract the Frogminer_save, fredtool_output, Luma3ds and b9stool archives to a folder of your choice.</li>
            <li>Copy "boot.nds" from the b9stool folder onto your SD card root. <i>NB: Your root is the SD card's main window, not inside any folders. You may see such folders as Nintendo 3DS and DCIM. This means you are in the root.</i></li>
            <li>Copy "boot.firm" from the Luma3ds folder onto your SD card root.</li>
            <li>Copy "boot.3dsx" onto your SD card root.</li>
            <li>Copy the "private" folder from the Frogminer_save folder onto your SD card root. <i>This means the whole "private" folder, not just its contents.</i></li>
            <li>From the fredtool folder, open output > hax. Copy the file inside this folder onto your SD card: SD > Nintendo 3DS > [id0] > [id1] > Nintendo DSiWare. You will have two DSiWare files inside this folder.</li>
            <li>Put your SD card back into your console and power it on.</li>
            <li>On your console, go to System Settings > Data Management > DSiWare.</li>
            <li>Tap SD card, tap the Haxxxxxxxxx! entry, then tap Copy.</li>
            <li>Go back to System Settings > Internet Settings > DS Connection Settings.</li>
            <li>If all was successful, you should have booted to JPN Flipnote. Follow <a href="https://zoogie.github.io/web/flipnote_directions/" target="_blank">these slides</a> in order to boot into b9stool. <i>Here's a <a href="https://streamable.com/ti9jk" target="_blank">video</a> if you prefer that.</i></li>
            <li>Once you have booted b9stool, select "install boot9strap" and follow the on screen prompts.</li>
            <li>Once boot9strap is successfully installed, power off your device. <i>If the Luma Configuration menu appears, skip to step 15.</i></li>
            <li>Power on your device. You should boot into the Luma Configuration menu.</li>
            <li>In this menu, put an X in the "Show NAND or user string" box. Press Start to continue.</li>
            <li>You should now be at the 3DS home menu. From here, follow <a href="https://3ds.hacks.guide/finalizing-setup">this page.</a></li>
        </ol>
        Once you have finished Finalizing Setup, you have fully functioning custom firmware. Congrats!
        <div class="info">Once you have finished the process, you should restore your DS Internet Settings by copying the DSiWare .bin file from the "clean" folder in the fredtool_output folder from earlier to SD > Nintendo 3DS > [id0] > [id1] > DSiWare, then restoring it in System Settings > Data Management > DSiWare > SD card > tap the game > Copy</div>
    </div>
</div>
<? require('footer.php'); ?>