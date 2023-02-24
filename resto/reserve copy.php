<?php
$title = "Testing reservation page";
include '../quang22000layout/header.php';
?>
<h3>Changing background color - this is a housekeeping code to demonstrate that 'relative_link/site.js' is linked</h3>
<form action="">
<input type="color" name = "background" onchange="changeColor('qbgrd1', this.value)">
</form>
<br>

<h3>=====Reservation Form=====</h3>
<p></p>

<form method="POST" action = "" name="reservation form">
  Your Name: <input type="text" name="cname" placeholder="Your Name" required><br><br>
  Your Phone Number: <input type="text" name="phone" placeholder="Your phone number" required><br><br>
  Your Email Address: <input type="text" name="email" placeholder="Your email address" required><br><br>
  Number of Guests: <input type="text" name="guests_nbr" placeholder="Number of guests" required><br><br>  
  Please select an appropriate Table: <select name="table_id"><br><br>
    <option value="meeting_room">Meeting Room, 10 places</option>
    <option value="table_1">Table 1, good for 1 - 2 people </option>
    <option value="table_2">Table 2, good for 1 - 2 people </option>
    <option value="table_3">Table 3, good for 1 - 2 people </option>
    <option value="table_4">Table 4, good for 3 - 4 people </option>
    <option value="table_5">Table 5, good for 3 - 4 people</option>
    <option value="table_6">Table 6, good for 5 - 6 people</option>
  </select>
  <br><br>
  Your Special Request: <input type="text" name="special_request" placeholder="Your special request" required>
  <br><br>
  <input type="submit" value="Submit Your Reservation" name="submit">
</form>

<?php
  if (isset($_POST['submit'])){
    $cname = $_POST['cname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $guests_nbr = $_POST['guests_nbr'];
    $table_id = $_POST['table_id'];
    $special_request = $_POST['special_request'];
    include 'restodb.php';
    $sql = "INSERT into quang_reservation(cname, phone, email, guests_nbr, table_id, special_request)
    VALUES('$cname', '$phone', '$email', '$guests_nbr', '$table_id', '$special_request')";
    
    if ($conn ->query($sql) === true) {
      echo '<br>Thank you for your reservation. You successfully reserved table X on Date from Start Time to End Time. Your reservation ID is ';
    }
    else {
      echo "Error: ".$conn->error;
    }
  }
?>







<!--

-->
<?php 
include '../quang22000layout/footer.php';
?>