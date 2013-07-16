<?php
if (isset($_POST['confirm']) && $_POST['confirm']=="sendEmail") {
			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			if (isset($_POST['number']) && $_POST['number']!="")
				$message .= "<tr><td><strong>Number:</strong> </td><td>" . strip_tags($_POST['number']) . "</td></tr>";
			$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";

      $from = trim(strip_tags($_POST['req-email']));

			$to = 'contact@aevidi.com';

			$subject = 'Website Change Reqest';

			$headers = "From: " . $from . "\r\n";
			$headers .= "Reply-To: ". $from . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	    if (mail($to, $subject, $message, $headers)) {
	      echo "sent";
	    } else {
	      echo "failed";
	    }

      die();

} else {

	die("You do not have permission to access this page!");

}