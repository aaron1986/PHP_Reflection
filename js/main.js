

  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  window.onclick = function(event) {
    if(!event.target.matches('.fa.fa-chevron-down.rotate')){
      let dropdowns = document.getElementsByClassName('answer');
      let i;
      for(i = 0; i < dropdowns.length; i++) {
          let openDropdown = dropdowns[i];
          if(openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
      }
    }
  }



