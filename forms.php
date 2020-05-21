

<?php 
echo $_POST['submit'];
if(isset($_POST['submit'])){
    $to = "extramurosresidency@gmail.com"; 
    $from = $_POST['email'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $artist_name = $_POST['artistname'];
    $age = $_POST['age'];
    $subject = "New application to Extra Muros 2019";
    $subject2 = "Your copy of your Extra Muros 2019 application";
    $headers = "From: " .$_POST['email']. "\r\n";
  $headers = "Reply-To: " .$to. "\r\n";
  $headers = "MIME-Version: 1.0\r\n";
  $headers = "Content-Type: text/html; charset=UTF-8\r\n";



  

  $message =
 '<h1><strong>Thank you for you application</strong><br>
    <br>
  Here is a copy of the data submitted</h1>


  <style>
    p {
      color: white;
      background-color: blue;
      padding: 15px;
      border: 1px solid black;
    }
  </style> 
    <p>
      <h2>
      <div class="applyForm><label for="title>Identity</label>
        <br>
      </h2>
      
<table>
    <thead>
        <tr>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><label for="name">Artist Name</label></td>
            <td>'. $_POST['lastname'] .'</td>
        </tr>
        <tr>
            <td><label for="firstname">First Name</label></td>
            <td>'.$first_name.'</td>
        </tr>
        <tr>
            <td><label for="lastname">Last Name</label></td>
            <td><input type="text" name="lastname" id="lastname" required></td>
        </tr>
        <tr>
          <td><label for="age">Age</label></td>
          <td><input type="text" name="age" id="age" required></td>
        </tr>
    </tbody>
</table>
</p>
  </div>


  <p>
      <h2>
      <div class="applyForm><label for="title>Details</label>
        <br>
      </h2>

<table>
    <thead>
        <tr>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td><label for="title">Address</label></td>
          <td><input type="text" name="address" id="address" required></td>
        </tr>
        <tr>
          <td><label for="name">Country</label></td>
          <td><input type="text" name="name" id="name" required></td>
        </tr>
         <tr>
          <td><label for="name">City</label></td>
          <td><input type="text" name="name" id="name" required></td>
        </tr>
         <tr>
          <td><label for="name">Zip Code</label></td>
          <td><input type="text" name="name" id="name" required></td>
        </tr> 
        <tr>
          <td><label for="name">Citizenship</label></td>
          <td><input type="text" name="name" id="name" required></td>
        </tr>
    </tbody>
</table>
</p>
  </div>

    <p>
      <h2>
      <div class="applyForm><label for="title>Contact</label>
        <br>
      </h2>

<table>
    <thead>
        <tr>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td><label for="title">E-mail</label></td>
          <td><input type="text" name="address" id="address" required></td>
        </tr>
        <tr>
          <td><label for="name">Website</label></td>
          <td><input type="text" name="name" id="name" required></td>
        </tr>
         <tr>
          <td><label for="name">Label/Structure</label></td>
          <td><input type="text" name="name" id="name" required></td>
        </tr>
         <tr>
          <td><label for="name">Phone</label></td>
          <td><input type="text" name="name" id="name" required></td>
        </tr>
    </tbody>
</table>
</p>
  </div>

    <p>
      <h2>
      <div class="applyForm><label for="title>Work</label>
        <br>
      </h2>

<table>
    <thead>
        <tr>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td><label for="title">Project Proposal (briefly detail why you want to be part of the Extra Muros program)</label></td>
          <td><input type="text" name="address" id="address" required></td>
        </tr>
        <tr>
          <td><label for="name">Link to previous work (audio or video recordings, scores, installations, etc.) 1</label></td>
          <td><input type="text" name="name" id="name" required></td>
        </tr>
         <tr>
          <td><label for="name">Link to previous work (audio or video recordings, scores, installations, etc.) 2</label></td>
          <td><input type="text" name="name" id="name" required></td>
        </tr>
    </tbody>
</table>
</p>
  </div>';

  
    
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Application received, thank you1 " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
echo "<script>window.close();</script>";
?>