

<?php 
echo $_POST['submit'];
if(isset($_POST['submit']))
  // upload


  // mail
{
    $to = $_POST['email'];
    $from = "test@extramuros.olivierduport.fr"; 
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $artist_name = $_POST['artistname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $label = $_POST['label'];
    $phone = $_POST['phone'];
    $citizenship = $_POST['citizenship'];
    $propo = $_POST['propo'];
    $link1 = $_POST['link1'];
    $link2 = $_POST['link2'];
    $file1 = $_POST['lfile1'];
    $file2 = $_POST['file2'];
    $subject = "New application to Extra Muros 2019";
    $subject2 = "Your copy of your Extra Muros 2019 application";

  	$headers = "MIME-Version: 1.0\r\n";
  	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " .$from. "\r\n";

  	$headers2 = "MIME-Version: 1.0\r\n";
  	$headers2 .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers2 .= "From: " .$to. "\r\n";

    // Message1

$message = '<html><body>';
 $message .= '<h1><strong>Thank you for you application</strong><br>
    <br>Here is a copy of the data submitted</h1>';

$message .= '<img src="http://extramuros.olivierduport.fr/logo.png" width="300" length="300" alt="Extra Muros" />';

$message .= '<style>
    p {
      color: white;
      background-color: blue;
      padding: 15px;
      border: 1px solid black;
    }
  </style>';
  $message .= '
    <p>
      <h2>
      <div class="applyForm><label for="title>Identity</label>
        <br>
      </h2>';
      
$message .='<table>';
$message .= "<tr><td><strong>Artist Name:</strong> </td><td>" . $_POST['artistname'] . "</td></tr>";
$message .= "<tr><td><strong>First Name:</strong> </td><td>" . $_POST['firstname'] . "</td></tr>";
$message .= "<tr><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['lastname']) . "</td></tr>";
$message .= "<tr><td><strong>Age:</strong> </td><td>" . strip_tags($_POST['age']) . "</td></tr>";
$message .= "</table>";

$message .= '
    <p>
      <h2>
      <div class="applyForm><label for="title>Details</label>
        <br>
      </h2>';
      
$message .='<table>';
$message .= "<tr><td><strong>Address:</strong> </td><td>" . $_POST['address'] . "</td></tr>";
$message .= "<tr><td><strong>Country:</strong> </td><td>" . strip_tags($_POST['country']) . "</td></tr>";
$message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_POST['city']) . "</td></tr>";
$message .= "<tr><td><strong>Zip Code:</strong> </td><td>" . strip_tags($_POST['zipcode']) . "</td></tr>";
$message .= "<tr><td><strong>Citizenship:</strong> </td><td>" . strip_tags($_POST['citizenship']) . "</td></tr>";
$message .= "</table>";

$message .= '
    <p>
      <h2>
      <div class="applyForm><label for="title>Contact</label>
        <br>
      </h2>';
      
$message .='<table>';
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $_POST['email'] . "</td></tr>";
$message .= "<tr><td><strong>Website:</strong> </td><td>" . $_POST['website'] . "</td></tr>";
$message .= "<tr><td><strong>Label:</strong> </td><td>" . $_POST['label'] . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";
$message .= "</table>";

$message .= '
    <p>
      <h2>
      <div class="applyForm><label for="title>Work</label>
        <br>
      </h2>';
      
$message .='<table>';
$message .= "<tr><td><strong>Project Proposal:</strong> </td><td>" . strip_tags($_POST['propo']) . "</td></tr>";
$message .= "<tr><td><strong>Links:</strong> </td><td>" . strip_tags($_POST['link1']) . "</td></tr>";
$message .= "<tr><td><strong>File:</strong> </td><td>" . strip_tags($_POST['file1']) . "</td></tr>";
$message .= "<tr><td><strong>Links:</strong> </td><td>" . strip_tags($_POST['link2']) . "</td></tr>";
$message .= "</table>";
$message .= "</br>";
$message .= "If you are among qualified candidates, we will get in touch shortly. Thank you, again, for taking the time to apply to Extra Muros. 
</br>FLEE";
$message .= "</html>";

  // Message2
    
 $message2 = '<h1><strong>Thank you for you application</strong><br>
    <br>Here is a copy of the data submitted</h1>';


$message2 .= '<style>
    p {
      color: white;
      background-color: blue;
      padding: 15px;
      border: 1px solid black;
    }
  </style>';
  $message2 .= '
    <p>
      <h2>
      <div class="applyForm><label for="title>Identity</label>
        <br>
      </h2>';
      
$message2 .='<table>';
$message2 .= "<tr><td><strong>Artist Name:</strong> </td><td>" . $_POST['artistname'] . "</td></tr>";
$message2 .= "<tr><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['firstname']) . "</td></tr>";
$message2 .= "<tr><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['lastname']) . "</td></tr>";
$message2 .= "<tr><td><strong>Age:</strong> </td><td>" . strip_tags($_POST['age']) . "</td></tr>";
$message2 .= "</table>";

$message2 .= '
    <p>
      <h2>
      <div class="applyForm><label for="title>Details</label>
        <br>
      </h2>';
      
$message2 .='<table>';
$message2 .= "<tr><td><strong>Address:</strong> </td><td>" . $_POST['address'] . "</td></tr>";
$message2 .= "<tr><td><strong>Country:</strong> </td><td>" . strip_tags($_POST['country']) . "</td></tr>";
$message2 .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_POST['city']) . "</td></tr>";
$message2 .= "<tr><td><strong>Zip Code:</strong> </td><td>" . strip_tags($_POST['zipcode']) . "</td></tr>";
$message2 .= "<tr><td><strong>Citizenship:</strong> </td><td>" . strip_tags($_POST['citizenship']) . "</td></tr>";
$message2 .= "</table>";

$message2 .= '
    <p>
      <h2>
      <div class="applyForm><label for="title>Contact</label>
        <br>
      </h2>';
      
$message2 .='<table>';
$message2 .= "<tr><td><strong>Email:</strong> </td><td>" . $_POST['email'] . "</td></tr>";
$message2 .= "<tr><td><strong>Website:</strong> </td><td>" . $_POST['website'] . "</td></tr>";
$message2 .= "<tr><td><strong>Label:</strong> </td><td>" . $_POST['label'] . "</td></tr>";
$message2 .= "<tr><td><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";
$message2 .= "</table>";

$message2 .= '
    <p>
      <h2>
      <div class="applyForm><label for="title>Work</label>
        <br>
      </h2>';
      
$message2 .='<table>';
$message2 .= "<tr><td><strong>Project Proposal:</strong> </td><td>" . strip_tags($_POST['propo']) . "</td></tr>";
$message2 .= "<tr><td><strong>Links:</strong> </td><td>" . strip_tags($_POST['link1']) . "</td></tr>";
$message2 .= "<tr><td><strong>Links:</strong> </td><td>" . strip_tags($_POST['link2']) . "</td></tr>";
$message2 .= "</table>";
$message2 .= "</br>";
$message2 .= "If you are among qualified candidates, we will get in touch shortly. Thank you, again, for taking the time to apply to Extra Muros. 
</br>FLEE";
$message2 .= "</html>";
    
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Application received, thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
echo "<script>window.close();</script>";
?>