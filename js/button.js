// variables
let button = document.getElementById("button-test");

//functions
function btnClicked() {
    document.getElementById("button-test").style.backgroundImage = "url('http://localhost:8888/morales_2021/img/celladore_thumb.jpg')";
  }

//event listener
button.addEventListener('click', btnClicked , false);


// just checking if the javascript file is linked console.log ('click');
