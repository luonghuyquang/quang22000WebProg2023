// a simple function that triggers alert box
function hello(){
alert("Welcome to my website");
}
// a simple function to add 2 numbers
function add(){
document.write(5+6); 
}

//a function to change the background color of the page
function changeColor(where, newColor){
if (where == "qbgrd1"){
    document.body.style.backgroundColor = newColor;
}
}
//other function to change background color -- TO DEBUG
function changeColor2(){
    let color = document.getElementById('bgrd2').value;
    document.body.style.backgroundColor = color;
     }
 
 // change the font color -- TO DEBUG
 function changeFontColor(){
     let fcolor = document.getElementById('fcolor').value;
     document.body.style.color = fcolor;
      }

// crud validation 1


// crud validation 2
// // to ensure name cannot be more than 5 characters
function fname5(){
    let fname = (document.form1.fname.value).trim();
    if(fname.length<5){
        alert("First Name must have at least 5 characters");
        return false;
    }
}




// crud validation 2