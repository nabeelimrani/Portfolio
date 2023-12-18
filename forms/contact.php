<?php
// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'nabeelemraane09@gmail.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate and sanitize user input
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
  $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

  // Create an array to store errors
  $errors = array();

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
  }

  // Check if there are any errors
  if (empty($errors)) {
    // Include the PHP Email Form library
    $php_email_form = '../assets/vendor/php-email-form/php-email-form.php';
    
    if (file_exists($php_email_form)) {
      include($php_email_form);

      $contact = new PHP_Email_Form;
      $contact->ajax = true;

      $contact->to = $receiving_email_address;
      $contact->from_name = $name;
      $contact->from_email = $email;
      $contact->subject = $subject;

      $contact->add_message($name, 'From');
      $contact->add_message($email, 'Email');
      $contact->add_message($message, 'Message', 10);

      echo $contact->send();
    } else {
      echo 'Unable to load the "PHP Email Form" Library!';
    }
  } else {
    echo implode('<br>', $errors);
  }
}
?>
