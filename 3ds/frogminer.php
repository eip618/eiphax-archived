<?php 
$keywords="nintendo, homebrew, custom firmware, 11.10, free cfw, free homebrew, frogminer, 3ds, steelhax, steelminer";
$title="FRII CFW CONFIRMED 11.10";
require('header.php');

?>

<div class="container">
    <div class="content">
        <center><h1>Frogminer: Frii CFW for 11.10 U/E/J</h1></center>
        <hr>
        <!-- <p><div id="license" class="blue">Licensing: This content is provided under the <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/">CC-BY-NC-ND licence</a>, with one notable addition: you may not use, read or view this content if you are Jack Sorrell, or a representative or affiliate of Jack Sorrell. If you are Jack Sorrell, or a representative or affiliate of Jack Sorrell, you must immediately navigate away from this website, and explicitly not use, read or view any of the content herein.</div> -->
        <h1>What This Is</h1>
        <p>Frogminer is a method of free CFW for any "3DS Family" system running firmware 11.10. It requires access to the homebrew menu. If you do not have an entry point to homebrew, Steelminer is a free way to get one. If you do not know what an entrypoint is, you do not have one. Keep reading to learn more.<br>If you require support with this process, please visit <a href="https://discord.gg/C29hYvh">this Discord</a> and ask for help in the 3ds assistance channels. Mention you are following eip's frogminer guide, which step you are up to, and what exactly you are having issues with.
        <h2>Who Did It (credits from zoogie)</h2>
        <ul>
            <li>zoogie: b9stool, frogminer, seedminer, etc, etc, etc</li>
            <li>Martin Korth (nocash) - location hints for flipnote privkeys, no$gba, excellent Gbatek docs. I could go on.</li>
            <li>Shutterbug2000 - ugopwn exploit. brilliant stuff!</li>
            <li>Fincs and Wintermute - Flipnote Lenny, a revised version of ugopwn. This is the version I ported. Very clean, elegant work which made it a more manageable task for me.</li>
            <li>zacchi4k and Chromaryu - for tools assistance, thanks a bunch!</li>
            <li>DeadPhoenix, zoogie, Kartik and testers - for EU 11.10 Payload!</li>
            <li>All my peeps on the Nintendo Homebrew Discord and GBAtemp for constant support of seedminer and its users!</li>
            <li>eip wrote this guide (if you are a smart person and have an issue with any of the content in this guide, please contact @eip &infin;#3283 on the Nintendo Homebrew discord with your complaints and or suggestions)</li>
        </ul>
        
        <h2>Before You Begin</h2>
        <ol>
            <li>First, a test: On your console, open Download Play. It is a small orange icon with a DS console and some WiFi signals.</li>
            <li>Then, tap "Nintendo DS". If it loads successfully and you see the old DS menu, proceed to item five.</li>
            <li>If you only see a black screen or an error screen, exit Download Play, go to System Settings, Internet Settings, DS Connection Settings.</li>
            <li>If this also hangs on a black screen or an error screen instead of loading to the old DS menu, <b>you will need to <a href="./twlfix.html">fix your TWL mode</b></a> then try again.</li>
            <li>Please download and install 7-zip, the suggested archival management tool, available <a href="http://www.7zip.org/download.html" target="_blank">here.</a></li>
            <li>Please turn file extensions ON. Instructions for Windows <a href="https://3ds.hacks.guide/file-extensions-(windows)" target=”_blank”>here.</a></li>
        </ol>
        <h2>Two Paths</h2>
        The use of Frogminer requires access to the homebrew launcher. If you do not know what this is or how to do this, you do not have access. If you do not have access, click "I do not have a homebrew entry point."
        <br>If you do already have access, click "I already have a homebrew entry point".
        <p><button class="btn-toggle-visibility" data-target="#steel">I do not have a homebrew entry point</button>
        <div class="box hidden" id="steel">
            <h2>What You Need</h2>
            <ol>
                <li>The free eShop game, "Steel Diver: Sub Wars". <b>DO NOT download the update.</b> <i>JPN users: search "steeldiver", one word.</i></li>
                <li>Your console updated to 11.10</li>
            </ol>
            
            <h2>How to Steelminer</h2>
            <h3>Seedminer: finding your id0</h3>
            <ol>
                <li>Turn your console off and take out the SD card.</li>
                <li>Put the SD card into your computer, navigate to it and open the "Nintendo 3DS" folder.</li>
                <li>Inside this folder, you will see one or more folders with very long, seemingly random names. Do not open any further folders.</li>
                <li><b>If you only have ONE long named folder, skip to step 11. If you have TWO OR MORE, follow these steps in order.</b> <i>The "private" folder, if it exists, does not count.</i></li>
                <li>Back out of your Nintendo 3DS folder to your SD root. You may see folders such as Nintendo 3DS and DCIM. This means you are in the right place.</li>
                <li>Rename your Nintendo 3DS folder to "Nintendo BACKUP" <i>(right click and select "Rename")</i></li>
                <li>Safely eject your SD card, put it back in your console, and power it on.</li>
                <li>Wait for your console to generate some data.</li>
                <li>Once you see the home menu, power off your console, take out the SD card and put it in your computer.</li>
                <li>Navigate back to the "Nintendo 3DS" folder on your SD card. You should now only have one long named folder.</li>
                <li>The 32 character name of this long named folder is referred to as your 'id0'.</li>
                <li>Right click this 'id0' folder and select "Rename".</li>
                <li>The folder name should now be blue. Right click the blue text and select "Copy". DO NOT enter or replace any text. If you accidentally enter or replace any text, press Control+Z to undo this action and restore your 'id0' name.</li>
                <li>Left click away from the folder to deselect it, and paste (Control+V) your id0 somewhere (for example, a Notepad window).</li>
                <li><b>IF YOU NEEDED TO RENAME THE NINTENDO 3DS FOLDER</b>: delete the "Nintendo 3DS" folder, then rename "Nintendo BACKUP" to "Nintendo 3DS". If you did NOT need to rename the "Nintendo 3DS" folder, DO NOT delete or rename anything.</li>
            </ol>
            
            <h3>Seedminer: movable.sed</h3>
            <ol>
                <li>Go to <a href="http://bruteforcemovable.com" target="_blank">bruteforcemovable</a>.</li>
                <li>Input your friend code and id0 into the fields given.</li>
                <li>Complete the "I'm not a robot" CAPTCHA.</li>
                <li>The website will give you a friend code. On your console, open the Friends List (home menu, top row, orange box with smiley face). <i>If, instead, it skips to "Done!" (step 4) and gives you the option to download your movable.sed directly, skip to step eight.</i></li>
                <li>Press "Register Friend", then "Internet", then enter the friend code from the website.</li>
                <li>Give it a random name. The name is not important.</li>
                <li>Back on BruteforceMovable, the website should be on step 2. When presented the option, click "Continue". <i>If it is not on step 2, refresh the page ONCE.</i></li>
                <li>Wait some time. Once the process is finished, you can download your "movable.sed". Put it somewhere you'll remember.</li>
            </ol>
            
            <h3>Generating your save file</h3>
            <ol>
                <li>Go to <a href="https://bruteforcemovable.com/steelhax/" target="_blank">BFM's injector</a>.</li>
                <li>Upload your "movable.sed" and select the region of your console.</li>
                <li>Download your modified save and put it somewhere you'll remember.</li>
            </ol>
            
            <h3>Booting homebrew</h3>
            <ol>
                <li>Download the <a href="https://github.com/VegaRoXas/vegaroxas.github.io/raw/master/files/steelhax-installer.rar" target="_blank">steelhax installer archive</a>.</li>
                <li>Download the latest release of the homebrew menu, <a href="https://github.com/fincs/new-hbmenu/releases/" target="_blank">boot.3dsx</a>.</li>
                <li>Download the otherapp payload for your region and version:</li>
                <button class="btn-toggle-visibility" data-target="#new">NEW console (start and select buttons under ABXY)</button>
                <div class="box hidden" id="new">
                    <p><a href="./payload/new/U/payload.bin" target="_blank">US region</a>
                    <br><a href="./payload/update/new/payload.bin" target="_blank">EU region</a>
                    <br><a href="./payload/new/J/payload.bin" target="_blank">JP region</a>
                </div>
                <p>
                <button class="btn-toggle-visibility" data-target="#old">OLD console (start and select buttons along touch screen, also non-folding 2DS)</button>
                <div class="box hidden" id="old">
                    <p><a href="./payload/old/U/payload.bin" target="_blank">US region</a>
                    <br><a href="./payload/update/old/payload.bin" target="_blank">EU region</a>
                    <br><a href="./payload/old/J/payload.bin" target="_blank">JP region</a>
                </div>
                <li>Extract the "steelhax-installer.rar" and copy the "steelhax" folder to the root of your SD card. <i>This means NOT inside any other folder. You do NOT need the "3ds" folder.</i></li>
                <li>Copy the "payload.bin" you downloaded into the "steelhax" folder on your SD card.</li>
                <li>Copy the "boot.3dsx" you downloaded to the root of your SD card.</li>
                <li>Put your SD card back in your console and start the Steel Diver game.</li>
                <li>Pick a Mii, in order to initialise your save.</li>
                <li>Once you have picked a Mii, exit the game, power off your system and put your SD card back in your computer.</li>
                <li>Navigate to: <div class="code">Nintendo 3DS > ID0 > ID1 > title > 00040000 > regionID > data</div> (regionID: if US, 000d7d00, if EU, 000d7e00, if JP, 000d7c00)</li>
                <li>Replace the save in this folder with the one you received from "Generating your save file".</li>
                <li>Create a folder in your root called "3ds".</li>
                <li>Put your SD card back in your console and start the game.</li>
            </ol>
            You should now have booted into the Homebrew Menu. It will say "no applications found". This is normal. If you do see the Homebrew Menu, click the "I already have a homebrew entry point" button and follow that to get to CFW!
            <h2>Troubleshooting</h2>
            <h3><a href="issues.html">Here!</a></h3>
        </div>
        
        <button class="btn-toggle-visibility" data-target="#frog">I already have a homebrew entry point</button>
        <div class="box hidden" id="frog">
            <h2>What You Need</h2>
            <div class="info">In all cases, where offered the option, download the <b>latest release, and NOT the source code version.</b></div>
            <ol>
                <li>Frogtool.3dsx, available in the zip file from <a href="https://github.com/zoogie/Frogtool/releases/latest" target="_blank">here</a>.</li>
                <li>frogcert.bin, available <a href="magnet:?xt=urn:btih:D12278EA50BB3574F1FBD327F3D0E2292C70941F&dn=frogcert.bin&tr=udp%3a%2f%2fbigfoot1942.sektori.org%3a6969%2fannounce&tr=https%3a%2f%2ftracker.fastdownload.xyz%3a443%2fannounce&tr=https%3a%2f%2fopentracker.xyz%3a443%2fannounce&tr=http%3a%2f%2fopen.trackerlist.xyz%3a80%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce&tr=udp%3a%2f%2fopen.demonii.si%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.port443.xyz%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.vanitycore.co%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.torrent.eu.org%3a451%2fannounce&tr=udp%3a%2f%2fretracker.lanta-net.ru%3a2710%2fannounce&tr=udp%3a%2f%2fthetracker.org%3a80%2fannounce&tr=http%3a%2f%2ftorrent.nwps.ws%3a80%2fannounce&tr=udp%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.iamhansen.xyz%3a2000%2fannounce&tr=udp%3a%2f%2fbt.xxx-tracker.com%3a2710%2fannounce&tr=http%3a%2f%2f0d.kebhana.mx%3a443%2fannounce&tr=udp%3a%2f%2fexodus.desync.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker4.itzmx.com%3a2710%2fannounce&tr=udp%3a%2f%2ftracker.justseed.it%3a1337%2fannounce&tr=http%3a%2f%2ftherightsize.net%3a1337%2fannounce&tr=udp%3a%2f%2fretracker.hotplug.ru%3a2710%2fannounce&tr=udp%3a%2f%2ftracker.internetwarriors.net%3a1337%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2800%2fannounce&tr=https%3a%2f%2f2.track.ga%3a443%2fannounce
    " target=”_blank”>here</a>. <b><u>THIS IS A TORRENT. You will need a torrent client to access this link. <a href="https://www.qbittorrent.org/download.php" target="_blank">qbittorrent</a> is recommended.</u></b></li>
                <li>the b9stool archive from <a href="https://github.com/zoogie/b9sTool/releases/latest" target=”_blank”>this link</a>.</li>
                <li>The latest Luma release from <a href="https://github.com/AuroraWright/Luma3DS/releases" target=”_blank”>here</a>.</li>
                <li>Access to the Homebrew Launcher. If you do not already have access, scroll back up and click "I do not have a homebrew entry point", and do that tutorial. <b><u>KEEP YOUR movable.sed, YOU WILL NEED IT FOR THIS PROCESS.</u></b></li>
                <li>Your [ movable.sed ]. If you do not have this file from the above tutorial, open the "I do not have a homebrew entry point" section above and follow the "Finding your id0" and "Finding your movable.sed" sections, then come back here.</li>
                <li>Your console updated to 11.10. To do this, go to System Settings, then Other Settings, then find System Update. <i>If this breaks your existing homebrew access, go click "I do not have a homebrew entry point" above and do that tutorial.</i></li>
            </ol>
            
            <h2>How To Frii CFW</h2>
            <ol>
                <li>Extract the Frogtool, Luma3ds and b9stool archives to a folder of your choice.</li>
                <li>Copy "boot.nds" from the b9stool folder onto your SD card root. <i>NB: Your root is the SD card's main window, not inside any folders. You may see such folders as Nintendo 3DS and DCIM. This means you are in the root.</i></li>
                <li>Copy "boot.firm" from the Luma3ds folder onto your SD card root.</li>
                <li>Copy "frogcert.bin" onto your SD card root.</li>
                <li>Copy "movable.sed" to the SD card root.</li>
                <li>Copy "Frogtool.3dsx" to inside the 3ds folder on your SD card. Make one if it does not exist. <i>NB: This means "3ds", <b>NOT</b> "Nintendo 3DS"</i></li>
                <li>Put your SD in your console and power on.</li>
                <li>Launch Steel Diver, which should launch the Homebrew Menu.</li>
                <li>Launch Frogtool 2.2 from the list of applications.</li>
                <li>Select INJECT patched DS Download Play, and press A.</li>
                <li>Once this operation has finished, read the top screen. All operations should finish in OK, GOOD or DONE. If any finish in NOT OK, MISSING, CORRUPTED or FAIL, try injecting again or ask for help on the Discord server linked at the top of this page.</li>
                <li>If all operations succeed, select BOOT patched DS Download Play and press A.</li>
                <li>Wait a minute or two. Eventually, this should boot straight into Japanese Flipnote. Follow <a href="https://zoogie.github.io/web/flipnote_directions/" target="_blank">these slides</a> in order to boot into b9stool. <i>Here's a <a href="https://streamable.com/ti9jk" target="_blank">video</a> if you prefer that.</i></li>
                <li>Once you have booted b9stool, select "install boot9strap" and follow the on screen prompts.</li>
                <li>Once boot9strap is successfully installed, power off your device. <i>If the Luma Configuration menu appears, skip to step 16.</i></li>
                <li>Power on your device. You should boot into the Luma Configuration menu.</li>
                <li>In this menu, put an X in the "Show NAND or user string" box. Press Start to continue.</li>
                <li>You should now be at the 3DS home menu. From here, follow <a href="https://3ds.hacks.guide/finalizing-setup">this page.</a></li>
                </ol>
                Once you have finished Finalizing Setup, you have fully functioning custom firmware. Congrats!
                <h2>Troubleshooting</h2>
                <h3><a href="issues.html">Here!</a></h3>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>
