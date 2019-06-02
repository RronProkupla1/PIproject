function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}

//qikjo me mshel ata nese klikon dikun tjeter
window.onclick = function(event) {
  if (!event.target.matches('.dropdown2')) {
    var dropdowns = document.getElementsByClassName("dropdown-content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}