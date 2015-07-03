<script type="text/javascript">
	function char_amount(in_form, char_count) {
		var max_length = <?php echo($CHAR_LIMIT); ?>;
		if (in_form.value.length > max_length) {
			alert("You have reached the maximum limit of "+max_length+" characters.");
			in_form.value = in_form.value.substring(0, max_length);
		}
		else {
			char_count.value = max_length - in_form.value.length;
		}
	}
</script>
    
        <form action="contact.php" method="GET">
            Name: <input type="text" name="name" required />
            <input type="checkbox" name="anon" value="true" /> <p class="form_misc">(Check to remain anonymous)</p><br />
            Email: <input type="email" name="email" required />
            <input type="checkbox" name="hidemail" value="true" /> <p class="form_misc">(Check to keep your email private)</p><br />
            Message: <textarea name="message" onKeyDown="char_amount(this.form.message,this.form.char_lim);" onKeyUp="char_amount(this.form.message,this.form.char_lim);" required></textarea><br />
            <p class="form_misc" style="float:right;padding-left:5px;line-height:8px;">characters left</p> <input type="text" name="char_lim" size="2" value="<?php echo($CHAR_LIMIT); ?>" style="float:right;font-size:8pt;text-align:center;padding:5px 2px 2px;border:0;margin:5px 0;" readonly /><br />
            <input type="submit" value="Send Message" class="formbutton" />
            <input type="reset" name="reset" value="Reset" class="formbutton" />
        </form>
    
    <?php
		$mailto = 'chiakisoejima@aol.com'; 
		$mailsub = 'Message from "2300 Project 1" website';
		$is_valid_post = true;
						
		if (isset($_REQUEST['name'])){  
			$name = strip_tags($_REQUEST['name']);
			if (!empty($_REQUEST['anon'])) {
				$name = 'Anonymous';
			}
			$_SESSION['user'] = $name;
			$name = 'From: '.$name;
			$email = strip_tags($_REQUEST['email']);
			if (!empty($_REQUEST['hidemail'])) {
				$email = 'Hidden';
			}
			$message = strip_tags($_REQUEST['message']);
				  

			if(strpos($email, '@') != true){
  				$is_valid_post = false;
				$errormsg = 'Please enter a valid email address.';
			}
			if(strlen($name) < 1){
				$is_valid_post = false;
				$errormsg = 'Please enter your name.';
			}
			if(strlen($message) < $MSG_LIMIT){
				$is_valid_post = false;
				$errormsg = 'Your comment/post must be at least '.$MSG_LIMIT.' characters long.';
			}
				
			if($is_valid_post != true){
				echo('<p id="error_message">'.$errormsg.'</p>');
			}
			else{
				$message = 'From: '.$name.'\n Email: '.$email.'\n Message:\n '.$message; 
				$mail = mail($mailto,$mailsub,$message);
				if($mail){
					echo('<br /><div class="center">Thanks for sending your message, '.$user.'!</div>');
				}
				else{
					echo('<br /><div class="center">Sorry '.$user.', the message failed to send. :(</div>');
				}
			}
		}
	?>