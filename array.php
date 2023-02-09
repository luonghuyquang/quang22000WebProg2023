<?php $title = "09.09.2023 array"; include "quang22000Layout/header.php" ?>
<h1>09.02.2023 in class exercise Array.php</h1>
<h3>1. Write a php script to display courses as list.</h3>
<?php
//1. display array as list
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
$countCourse = count($courses);
for ($i=0; $i<$countCourse; $i++){
    echo "<li>$courses[$i]</li>";
}
?>
<br>
<h3>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.</h3>
<?php
//2. remove element by unset ()
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo ">>> before unsetting: <br>";
print_r($courses1);
unset($courses1[3]);
echo "<br> >>> after unsetting #3 CMS: <br>";
print_r($courses1);
?>
<br><br>
<h3>3. Sort the following array</h3>
<?php
//3. Sort array
//a
echo "a) ascending order sort by Value:<br>";
//original array
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
$toSort = count($courses3);
echo ">>> printing with loop <br>";
echo "ascending 1: ";
for ($i = 0; $i < $toSort; $i++) {
    echo $courses3[$i]." ";}
//print with implode
echo "<br>>>> printing with implode <br>";
echo "ascending 2: " .implode(", ", $courses3);
?>
<?php
//b
echo "<br><br>b) ascending order sort by Key:<br>";
//original array
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
//first assign the keys to the array currently having no key
$keys_added = ["k1", "k2", "k3", "k4", "k5"];
$courses3 = array_combine($keys_added, $courses3);
ksort($courses3);
echo "ascending by Key: " . implode(", ", $courses3);
?>
<?php
//c
echo "<br><br>c) descending order sort by Value:<br>";
//original array
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
rsort($courses3);
//print with loop
echo ">>> printing with loop <br>";
echo "descending 1: ";
for ($i = 0; $i < $toSort; $i++) {
    echo $courses3[$i]." ";}
//print with implode
echo "<br>>>> printing with implode <br>";
echo "descending 2: " .implode(", ", $courses3);
?>
<?php
//d
echo "<br><br>d) descending order sort by Key<br>";
//original array
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
$keys_added = ["k1", "k2", "k3", "k4", "k5"];
$courses3 = array_combine($keys_added, $courses3);
//sorting
krsort($courses3);
echo "descending by Key: " . implode(", ", $courses3);
?>
<h3><br>4. Change the following array's all values to upper case.</h3>
<?php
//4. UPPER case
//original array
$courses4=array("php", "html", "javascript", "cms", "project");
//upper case
$courses4 = array_map('strtoupper', $courses4);
echo "values to upper case:<br>";
print_r($courses4);
?>
<h3><br>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h3>
<?php
//5. favorite colors
$favorite_colors = ['black' => '#000000','white' => '#FFFFFF','blue' => '#0000FF','purple' => '#800080','orange' => '#FFA500'];
print_r($favorite_colors);
?>
<h3><br>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3>
<?php
//6. Temperatures

?>
<?php include "quang22000Layout/footer.php" ?>