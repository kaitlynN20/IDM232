function hamburger_animation(){
   
   document.getElementById("bttn_animation").classList.toggle("change");
    document.getElementById("myDropdown").classList.toggle("show");
}



window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function myAnimation() {
    document.getElementById("bttn_animation").classList.toggle("change");
}
/*var menuBttn = document.getElementById("bttn_animation");
menuBttn.addEventListener("click",myFunction(),false);
menuBttn.addEventListener("click",myAnimation(x), false);
    
        function myAnimation(x) {
    x.classList.toggle("change");
}
}*/