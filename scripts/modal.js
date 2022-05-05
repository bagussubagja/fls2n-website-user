//Ini Buat Alif
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

function showModal(){
    // modal.style.transform = "translateY(0%)";
    modal.classList.add("active");
}

span.onclick = function() {
    // modal.style.display = "none";
    modal.classList.remove("active")
  }


//Ini buat Arfi
let modalArfi = document.getElementById("myModal2");
let btnArfi = document.getElementById("myBtn2");
let spanArfi = document.getElementsByClassName("close")[1];

function showModal2(){
  // modal.style.transform = "translateY(0%)";
  modalArfi.classList.add("active");
}

spanArfi.onclick = function() {
  // modal.style.display = "none";
  modalArfi.classList.remove("active")
}

//Ini buat Bagus
let modalBagus = document.getElementById("myModal3");
let btnBagus = document.getElementById("myBtn3");
let spanBagus = document.getElementsByClassName("close")[2];

function showModal3(){
  // modal.style.transform = "translateY(0%)";
  modalBagus.classList.add("active");
}

spanBagus.onclick = function() {
  // modal.style.display = "none";
  modalBagus.classList.remove("active")
}

//Ini buat Faja
let modalFaja = document.getElementById("myModal4");
let btnFaja = document.getElementById("myBtn4");
let spanFaja = document.getElementsByClassName("close")[3];

function showModal4(){
  // modal.style.transform = "translateY(0%)";
  modalFaja.classList.add("active");
}

spanFaja.onclick = function() {
  // modal.style.display = "none";
  modalFaja.classList.remove("active")
}

window.onclick = function(event) {
    if (event.target == modal) {
      modal.classList.remove("active")
    }
    else if (event.target == modalArfi){
      modalArfi.classList.remove("active");
    }
    else if (event.target == modalBagus){
      modalBagus.classList.remove("active");
    }
    else if (event.target == modalFaja){
      modalFaja.classList.remove("active");
    }
}