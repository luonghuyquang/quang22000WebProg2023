<?php $title = "20.02.2023 Javascript"; include "quang22000layout/header.php" ?>
<h1>20.02.2023 Java script (javascript.php)</h1>
<!--semicolon ; are optional if codes in different lines. But recommended to use consistently-->
<script>
document.write("Hello world, this is Java Script");
</script>

<noscript>
    Please enable Java Script to view this content,
</noscript>

<br>
<script> //this is not very welcomed by reader
    // window.alert("This will trigger an alert box. Viewer must click to continue to view the website.");
    // window.alert(5+10);
</script>

<input type="button" onclick="hello()" value="Click Me">;
<br><br>
<button onclick="add()">The Add function new way starting with button</button>
<br><br>
<input type="button" onclick="add()" value="The Add function old way starting with input">
<br><br>

<p id="place1" style="color:red; background-color:yellow;"></p>
<span id="place2" style="color:white; background-color:darkgreen;"></span>
<script>
    document.getElementById("place1").innerHTML="This will go to place1";
    document.getElementById("place2").innerHTML="This will go to place2";
</script>

<h3>Changing background color</h3>
<form action="">
<input type="color" name = "background" onchange="changeColor('qbgrd1', this.value)">
</form>


<?php include "quang22000layout/footer.php" ?>