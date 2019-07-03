<?php
$title="Contact Me";
require('header.php');
?>

<script src="freecontactformvalidation.js"></script>
<script>
	required.add('Full_Name','NOT_EMPTY','Full Name');
	required.add('Email_Address','NOT_EMPTY','Email Address');
	required.add('Your_Message','NOT_EMPTY','Your Message');
	required.add('AntiSpam','NOT_EMPTY','Anti-Spam Question');
</script>
<div class="container">
	<div class="content">
		<center><h1>contact me</h1>
			<hr>
			<p>
			<form name="freecontactform" method="post" action="freecontactformprocess.php" onsubmit="return validate.check(this)">
				<table width="400px" class="freecontactform">
					<tr>
						<td colspan="2">	  
							<div class="freecontactformmessage">Fields marked with <span class="required_star"> * </span> are mandatory.</div>
						</td>
					</tr>
					<tr>
						<td valign="top">
							<label for="Full_Name" class="required">Name, tag, email or other identifier<span class="required_star"> * </span></label>
						</td>
						<td valign="top">
							<input type="text" name="Full_Name" id="Full_Name" maxlength="40" style="width:230px">
						</td>
					</tr>
					<tr>
						<td valign="top">
							<label for="Email_Address" class="required">Should I get back to you?<span class="required_star"> * </span></label>
						</td>
						<td valign="top">
							<input type="text" name="Email_Address" id="Email_Address" maxlength="20" style="width:230px">
						</td>
					</tr>
					<tr>
						<td valign="top">
							<label for="Your_Message" class="required">Your Message<span class="required_star"> * </span></label>
						</td>
						<td valign="top">
							<textarea style="width:230px;height:160px" name="Your_Message" id="Your_Message" maxlength="1000"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center" >
							<div class="antispammessage">
								To help prevent automated spam, please answer this question
								<br /><br />
								<div class="antispamquestion">
									<span class="required_star"> * </span>
									Using only numbers, what is 10 plus 15? &nbsp; 
									<input type="text" name="AntiSpam" id="AntiSpam" maxlength="100" style="width:30px">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center" >
							<br /><br />
							<input type="submit" value=" Submit Form " style="width:200px;height:40px">
							<br /><br />
				<!-- 
				If you want to remove this author link, 
				please purchase an unbranded version from: http://www.freecontactform.com/unbranded_form.php 
				Or upgrade to the professional version at: http://www.freecontactform.com/professional.php
				-->
							<div>Form provided by: <a href="http://www.freecontactform.com">FreeContactForm.com</a></div>
							<br /><br />
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>
</div>
<?php require('footer.php'); ?>