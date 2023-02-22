<?php $title = "22.02.2023 Javascript"; include "quang22000Layout/header.php" ?>
<h1>22.02.2023 Java script 2nd session (javascript2.php) <br>
JavaScript Events and form validation</h1>

<h4>Introduction</h4>
<!--to declare a variable, use let (recommended) or other-->
<script>
let var1 = 'John';
document.write(var1, "<br>");
let age = 20;
if(age<18){document.write("U18")}
else {document.write("not<18")};
</script>
<br><br>

<h4>A simple button to display date</h4>
<button onclick="this.innerHTML=Date()">Click to know date</button>
<br><br>

<!--copy from javascrip 1 for control-->
<h3>Changing background color - this is to control that site.js is linked</h3>
<form action="">
<input type="color" name = "background" onchange="changeColor('qbgrd1', this.value)">
</form>
<br><br>

<h4>Make a button and a place holder as paragraph for the date</h4>
<!--onblur not working here-->
<button onclick="getElementById('jour').innerHTML=Date()">Click to know date 2</button>
<p id="jour"></p>
<br><br>

<h4>Change the background color -  debugged by removing .apply in site.js</h4>
<form>
    <input type="color" id="bgrd2" onchange="changeColor2()">
</form>

<h4>Change the font color - debugged by removing .apply in site.js</h4>
<form>
    <input type="color" id="fcolor" onchange="changeFontColor()">
</form>
<br><br>

<h4>On Mouse Over & On Mouse Out 1</h4>
<span onmouseover="this.style.color='blue';
                    this.style.backgroundColor='yellow'; onmouseout;
                    this.style.fontSize='2em';
                    ">Hover the Mouse Over Me</span>
<br><br>
<span onmouseout="this.style.color='red';
                    this.style.backgroundColor='white';
                    this.style.fontSize='1.1em';">On Mouse Out only</span>
<br><br>

<h4>On Mouse Over & On Mouse Out 2</h4>
<span onmouseover="this.style.color='blue';
                    this.style.backgroundColor='yellow'; onmouseout;
                    this.style.fontSize='2em';
                    "
      onmouseout="this.style.color='red';
                    this.style.backgroundColor='white';
                    this.style.fontSize='1.1em';">On Mouse Over then Out</span>


<h3>Changing background color - this is to control that site.js is linked</h3>
<form action="">
<input type="color" name = "background" onchange="changeColor('qbgrd1', this.value)">
</form>

<?php include "quang22000Layout/footer.php" ?>