<?php 
$title="TWLFix";
require('header.php')
?>
<div class="container">
	<div class="content">
		<center><h1>TWLFix</h1></center>
		<hr>
        <p>This is a page on how to fix your TWL firm, if it is broken.
		<br>What you need to use will depend on if you have no hacks, Homebrew or CFW.
		<br>Click whichever button is appropriate.
		<p><button class="btn-toggle-visibility" data-target="#stock">No hacks/Stock</button>
        <div class="box hidden" id="stock">
			<br>The easiest thing to do is to get Homebrew via Steel Diver and then use Homebrew-only TWLFix below.
			<br>To get Homebrew, go over to <a href="frogminer.php">the Frogminer page</a> and click "I don't have a homebrew entry point", and follow the instructions there.
			<br>Once you have Homebrew, come back here and do the Homebrew-only method.
			<br>If, for some reason, you can't get Homebrew access, there is a stock-only option. It's a bit more complicated, and requires a DSiWare application from the eShop.
			<br>Once you've got a DSiWare application, our good friend MechanicalDragon has written us some instructions here: <a href="https://github.com/MechanicalDragon0687/TWLFix/wiki/Instructions">TWLFix</a>.
		</div>
        <p><button class="btn-toggle-visibility" data-target="#homebrew">Homebrew-only</button>
        <div class="box hidden" id="homebrew">
			<br><h3>What You Need</h3>
			<ol>
				<li>The latest release of <a href="https://github.com/MechanicalDragon0687/TWLFix-3DS/releases/">TWLFix-3DS</a> (just the .3dsx, NOT the source)</li>
				<li>Your movable.sed, which you can generate/redownload from <a href="https://bruteforcemovable.com">bruteforcemovable</a> if you don't have it</li>
				<li>Access to the Homebrew Menu</li>
			</ol>
			<br>
			<h3>Doing It</h3>
			<ol>
				<li>Power off your console and take out the SD card.</li>
				<li>Put the SD card in a computer.</li>
				<li>Copy the movable.sed to the root of the SD card. Root means inside SD, but not inside any folders.</li>
				<li>Copy TWLFix-3DS.3dsx to the "3ds" folder. Note: this means "3ds", NOT "Nintendo 3DS"</li>
				<li>Safely eject your SD card and put it back in your console.</li>
				<li>Power on and open the Homebrew Launcher.</li>
				<li>Run "TWLFix-3DS".</li>
				<li>Follow the instructions in the application.</li>
				<li>Once complete, the application should reboot the console.</li>
				<li>Go to System Settings > Other Settings > System Update.</li>
				<li>Once the update is complete, your TWL firm should be fixed. Try doing whatever you were previously doing.</li>
			</ol>
		</div>
        <p><button class="btn-toggle-visibility" data-target="#cfw">CFW</button>
        <div class="box hidden" id="cfw">
			<h3>What You Need</h3>
			<ol>
				<li>The latest release of <a href="https://github.com/MechanicalDragon0687/TWLFix-CFW/releases/">TWLFix-CFW</a> (just the .3dsx, NOT the source)</li>
			</ol>
			<br>
			<h3>Doing It</h3>
			<ol>
				<li>Power off your console and take out the SD card.</li>
				<li>Put the SD card in a computer.</li>
				<li>Copy TWLFix-CFW.3dsx to the "3ds" folder. Note: this means "3ds", NOT "Nintendo 3DS"</li>
				<li>Safely eject your SD card and put it back in your console.</li>
				<li>Power on and open the Homebrew Launcher.</li>
				<li>Run "TWLFix-CFW".</li>
				<li>Follow the instructions in the application.</li>
				<li>Once complete, the application should reboot the console.</li>
				<li>Go to System Settings > Other Settings > System Update.</li>
				<li>Once the update is complete, your TWL firm should be fixed. Try doing whatever you were previously doing.</li>
			</ol>
			<br>
		</div>
	</div>
</div>
<?php require('footer.php') ?>
