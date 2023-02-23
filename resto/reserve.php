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
  <input type="text" name="name" placeholder="Your Name" required><br><br>
  <input type="text" name="phone" placeholder="Your phone number" required><br><br>
  <input type="text" name="email" placeholder="Your email address" required><br><br>
  <input type="text" name="guests_nbr" placeholder="Number of guests" required><br><br>  
  <input type="text" name="special_request" placeholder="Your special request" required><br><br>
  <select name="table_id"><br><br>
    <option value="Table 1">Table 1 2 seats</option>
    <option value="3">333</option>
    <option value="Meeting room">Meeting room 10 seats</option>
  </select>
  <br><br>
  <input type="submit" value="Submit Your Reservation" name="submit">
</form>
<?php
  if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $guests_nbr = $_POST['guests_nbr'];
    $table_id = $_POST['table_id'];
    $special_request = $_POST['special_request'];
    include 'restodb.php';
    $sql = "INSERT into reservations(`name`, phone, email, guests_nbr, table_id, special_request)
    VALUES('$name', '$phone', '$email', '$guests_nbr', '$table_id', '$special_request')";
    
    if ($conn ->query($sql) === true) {
      echo "Your information is added successfully";
    }
    else {
      echo "Error: ".$conn->error;
    }
  }
?>







<!-- sql for database creating

CREATE DATABASE resto;
USE resto;

DROP TABLE IF EXISTS rtables, reservations;
CREATE TABLE rtables (
  table_id INT NOT NULL PRIMARY KEY,
  table_name VARCHAR(50) NOT NULL,
  seats INT NOT NULL
);

CREATE TABLE reservations (
  reservation_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cname VARCHAR(30),
  phone VARCHAR(20),
  email VARCHAR(50),
  table_id INT NOT NULL,
  reservation_time DATETIME NOT NULL,
  guests_nbr INT NOT NULL,
  special_request VARCHAR(255),
  reservation_code VARCHAR(6) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (table_id) REFERENCES rtables(table_id)
);


USE resto;

DROP TABLE IF EXISTS rtables, reservations;
CREATE TABLE rtables (
  table_id INT NOT NULL PRIMARY KEY,
  table_name VARCHAR(50),
  seats INT
);

CREATE TABLE reservations (
  reservation_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cname VARCHAR(30),
  phone VARCHAR(20),
  email VARCHAR(50),
  table_id INT NOT NULL,
  guests_nbr INT NOT NULL,
  special_request VARCHAR(255)
);

-->
<?php 
include '../quang22000layout/footer.php';
?>