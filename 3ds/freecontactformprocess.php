<?php
/**
 * 
 * URL: www.freecontactform.com
 * 
 * Version: FreeContactForm Free V2.2
 * 
 * Copyright (c) 2013 Stuart Cochrane
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * 
 * Note: This is NOT the same code as the PRO version
 * 
 */

if(isset($_POST['Email_Address'])) {
	
	include 'freecontactformsettings.php';
	
	function died($error) {
		echo "Sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	if(!isset($_POST['Full_Name']) ||
		!isset($_POST['Email_Address']) ||
		!isset($_POST['Your_Message']) || 
		!isset($_POST['AntiSpam'])		
		) {
		died('Sorry, there appears to be a problem with your form submission.');		
	}
	
	$full_name = $_POST['Full_Name']; // required
	$email_from = $_POST['Email_Address']; // required
	$comments = $_POST['Your_Message']; // required
	$antispam = $_POST['AntiSpam']; // required
	
	$error_message = "";
	
  if(strlen($email_from) < 2) {
  	$error_message .= 'Please specify whether you wish to be contacted.<br />';
  }
  if(strlen($full_name) < 2) {
  	$error_message .= 'Your Name does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  
  if($antispam <> $antispam_answer) {
	$error_message .= 'The Anti-Spam answer you entered is not correct.<br />';
  }
  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Form details below.\r\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Sender: ".clean_string($full_name)."\r\n";
	$email_message .= "Contact? ".clean_string($email_from)."\r\n";
	$email_message .= "Message: ".clean_string($comments)."\r\n";
	
$headers = 'From: '.$full_name."\r\n".
'Reply-To: '.null."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
header("Location: $thankyou");
?>
<script>location.replace('<?php echo $thankyou;?>')</script>
<?php
}
die();
?>