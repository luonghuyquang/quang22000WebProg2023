<?php
$title = "A simple CRUD app";
include '../quang22000layout/header.php';
?>
<!--copy from javascrip 1 for control-->
<h3>Changing background color - this is to control that site.js is linked</h3>
<form action="">
<input type="color" name = "background" onchange="changeColor('qbgrd1', this.value)">
</form>
<br><br>
<!--new-->
<h1>22.02.2023 (Validation)<br><br></h1>
<form method="post" action = "" onsubmit="return crudvalid2()" name="form1">
  <input type="text" name="fname" placeholder="First Name" required><br><br>
  <input type="text" name="lname" placeholder="Last Name" required><br><br>
  <input type="text" name="city" placeholder="City" required><br><br>
  <select name="groupid"><br><br>
    <option value="BBCAP22">BBCAP22</option>
    <option value="BBCAP21">BBCAP21</option>
    <option value="Others">Others</option>
  </select>
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>
<?php
  if (isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    include 'db.php';
    $sql = "insert into studentinfo(fname, lname, city, groupid)
    values ('$fname', '$lname', '$city', '$groupid')";
    if ($conn ->query($sql) === true) {
      echo "Your information is added successfully";
    }
    else {
      echo "Error: ".$conn->error;
    }
  }
?>
<?php 
include '../quang22000layout/footer.php';
?>