<?php
$title="Donations";
require('header.php');
?>

<div class="container">
    <div class="content">
        <center><h1>Donations</h1></center>
        <hr>
        <p>I've chosen to offer a way to donate to me, for anyone that may be interested in helping to support the maintenance of this website.
		<p>Any donations received will go directly towards hosting this website, with none taken for personal use.
		<p>If you do choose to donate, I and everyone else who uses this website thank you very much for your contribution.
		<p><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_donations" />
            <input type="hidden" name="business" value="2AEJ6TGJCD35L" />
            <input type="hidden" name="currency_code" value="AUD" />
            <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
            <img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1" />
        </form>
    </div>
</div>
<?php require('footer.php') ?>
