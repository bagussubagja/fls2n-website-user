var modal = document.getElementById("myModal");
var btn = document.getElementById("myButton");
var span = document.getElementsByClassName("close")[0];
function showModal(){
    // modal.style.transform = "translateY(0%)";
    modal.classList.add("active");
}

span.onclick = function() {
    // modal.style.display = "none";
    modal.classList.remove("active")
  }

  window.onclick = function(event) {
    if (event.target == modal) {
        modal.classList.remove("active");
    }
}