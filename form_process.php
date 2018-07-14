<?php


	$name_error = $email_error = $order_error = $phone_error = $address_error = $organisation_error = $department_error = $designation_error = $event_error = $delivery_error = "";
	$name = $email = $order = $phone = $success = $address = $organisation = $department = $designation = $event = $delivery = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }
  }



	if (empty($_POST["phone"])) {
		$phone_error = "Phone No. is required";
	} else {
		$phone = test_input($_POST["phone"]);
		// check if e-mail address is well-formed
		// if (!filter_var($phone, FILTER_VALIDATE_PHONE)) {
		// 	$email_error = "Invalid email format";
		// }
	}

	if (empty($_POST["address"])) {
		$address_error = "Address is required";
	} else {
		$address = test_input($_POST["address"]);
		// check if e-mail address is well-formed
		// if (!filter_var($phone, FILTER_VALIDATE_PHONE)) {
		// 	$email_error = "Invalid email format";
		// }
	}


	if (empty($_POST["organisation"])) {
		$organisation_error = "College/Organisation Name is required";
	} else {
		$organisation = test_input($_POST["organisation"]);
		// check if e-mail address is well-formed
		// if (!filter_var($phone, FILTER_VALIDATE_PHONE)) {
		// 	$email_error = "Invalid email format";
		// }
	}


	if (empty($_POST["department"])) {
		$department_error = "Department/Society Name is required";
	} else {
		$department = test_input($_POST["department"]);
		// check if e-mail address is well-formed
		// if (!filter_var($phone, FILTER_VALIDATE_PHONE)) {
		// 	$email_error = "Invalid email format";
		// }
	}

	if (empty($_POST["designation"])) {
		$designation_error = "Designation is required";
	} else {
		$designation = test_input($_POST["designation"]);
		// check if e-mail address is well-formed
		// if (!filter_var($phone, FILTER_VALIDATE_PHONE)) {
		// 	$email_error = "Invalid email format";
		// }
	}

	if (empty($_POST["event"])) {
		$event_error = "Event Date is required";
	} else {
		$event = test_input($_POST["event"]);
		// check if e-mail address is well-formed
		// if (!filter_var($phone, FILTER_VALIDATE_PHONE)) {
		// 	$email_error = "Invalid email format";
		// }
	}

	if (empty($_POST["delivery"])) {
		$delivery_error = "Delivery Date is required";
	} else {
		$delivery = test_input($_POST["delivery"]);
		// check if e-mail address is well-formed
		// if (!filter_var($phone, FILTER_VALIDATE_PHONE)) {
		// 	$email_error = "Invalid email format";
		// }
	}






  if (empty($_POST["order"])) {

    $order_error = "Your Order is required";
  } else {
    $order = test_input($_POST["order"]);

  }


	if($name_error == '' and $email_error == ''  and $order_error == ''){
		$message_body = '';
		unset($_POST['submit']);
		foreach ($_POST as $key => $value) {
			$message_body .= "$key: $value\n";
		}
		$to = 'chauhanarchana34@gmail.com';
		$subject = 'Contact Form Submit';

		$message_new = "$email\n.$name\n.$order";
		if(mail($to, $subject, $message_new)){
			$success = "Message sent, thank you for contacting us!";
			$name = $email = $order = '';
		}
	}


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
