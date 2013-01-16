<?php
	function fc_contact_form_handler_callback() {
		//global $wpdb;
		
		if(isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['umessage'])) {
			// includes phpmailer class used for sending notification and auto-reply emails
			if (!class_exists("PHPMailer")) {
				require_once ABSPATH . WPINC . '/class-phpmailer.php';
			}
			
			// Store form values in variables
			$name = $_POST['uname'];
			$email = $_POST['uemail'];
			$message = $_POST['umessage'];
			
			// Set to true to enable notification emails
			$sendNotificationEmail = true;
			
			// Notification email type, specify either plain or html
			$notification_email_type = 'plain';
			
			// Set to true to enable auto-reply emails
			$sendAutoReplyEmail = false;
			
			// Auto-reply email type, specify either plain or html
			$auto_reply_email_type = 'plain';
			
			// Set to true to save data to a MySQL database 
			$saveToDatabase = false;
			
			
			try {
				// Check if an email id has been set for "Email for Subscription Notice" option in the OptionTree options panel in WordPress admin panel
				// If yes then we use that email id to which notification will be sent
				// Otherwise we try to use the email id set for the admin
				if (function_exists('get_option_tree')) {
					$biopic_contact_form_email = get_option_tree('contact_form_email');
					if ($biopic_contact_form_email == '') {
						$biopic_contact_form_email = get_option('admin_email');
					}
				}
				else {
					$biopic_contact_form_email = get_option('admin_email');
				}
				
				// Send notification email
				if ($sendNotificationEmail) {
					
					// Creates notification mailer object
					$notification_mailer = new PHPMailer();
					
					// Set from email id
					// Should be email id on the domain where this script is going to be hosted otherwise emails might not go through due to security concerns
					$notification_mailer->SetFrom($biopic_contact_form_email);
					
					// Set reply-to email id
					//$notification_mailer->AddReplyTo("sher.ali@lucidstudios.net", "Website Name or Something Else");
					
					// Set the email id to which notification email will be sent
					// You can send email to more than one email ids by duplicating the line below
					$notification_mailer->AddAddress($biopic_contact_form_email);
					
					// Set subject of notification email
					$notification_mailer->Subject = "Website Contact Form Submission";
					
					if ($notification_email_type == 'html') {
						$notification_email_body = "Hi,<br>A user <b>$name</b> has contacted with the following particulars:<br>Name: $name<br>Email: $email<br>Message: $message";
						$notification_mailer->MsgHTML($notification_email_body);
					}
					else {
						$notification_email_body = "Hi,\nA user has contacted with following particulars:\nName: $name\nEmail: $email\nMessage: $message";
						$notification_mailer->Body = $notification_email_body;
					}
					
					$notification_email_status = $notification_mailer->Send();
				}
				
				// Send auto-reply email back to user
				if ($sendAutoReplyEmail) {
					
					// Creates auto-reply mailer object
					$auto_reply_mailer = new PHPMailer();
					
					// Set from email id
					// Should be email id on the domain where this script is going to be hosted otherwise emails might not go through due to security concerns
					$auto_reply_mailer->SetFrom("sher.ali@lucidstudios.net", "Website Name or Something Else");
					
					// Set reply-to email id
					$auto_reply_mailer->AddReplyTo("sher.ali@lucidstudios.net", "Website Name or Something Else");
					
					// Email will be sent to the email id entered by the user
					$auto_reply_mailer->AddAddress("$email");
					
					// Set subject of auto-reply email
					$auto_reply_mailer->Subject = "Thanks for contacting us";
					
					if ($auto_reply_email_type == 'html') {
						$auto_reply_email_body = "Hi $name,<br><h1>Thank you for contacting us</h1><p>We will get in touch with you asap.</p>";
						$auto_reply_mailer->MsgHTML($auto_reply_email_body);
					}
					else {
						$auto_reply_email_body = "Hi $name,\nThank you for contacting us\nWe will get in touch with you asap.";
						$auto_reply_mailer->Body = $auto_reply_email_body;
					}
					
					$auto_reply_email_status = $auto_reply_mailer->Send();
				}
				
				// Save to a MySQL database table
				if ($saveToDatabase) {
					// Connect to MySQL, make sure to set your own database values
					mysql_connect('database-host', 'database-username', 'database-password');
					
					// Select the database
					mysql_select_db('database-name');
					
					
					// Build the query, change contacts_table_name with the table name of your database
					$query = "INSERT INTO contacts_table_name SET ";
					$query .= "`name` = '" . mysql_real_escape_string($name) . "',";
					$query .= "`email` = '" . mysql_real_escape_string($email) . "',";
					$query .= "`message` = '" . mysql_real_escape_string($message) . "';";
					
					// Execute the query
					mysql_query($query);
					
					// Close the connection
					mysql_close();
				}
				
				if ($notification_email_status) {
					echo json_encode(array("status"=>"success"));
				}
				else {
					echo json_encode(array("status"=>"error"));
				}
			}
			catch (Exception $e) {
				// An exception has occurred, show error message
				echo json_encode(array("status"=>"error"));
			}
		}
		else {
			echo json_encode(array("status"=>"error"));
		}
		
		die();
	}
	
	add_action('wp_ajax_fc_contact_form_handler', 'fc_contact_form_handler_callback');
	add_action('wp_ajax_nopriv_fc_contact_form_handler', 'fc_contact_form_handler_callback');
?>