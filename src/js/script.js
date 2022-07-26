// Header functions
window.onscroll = function () {
  myFunction();
};
let header = document.getElementById("myHeader");
let sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky"); // Add sticky class
  } else {
    header.classList.remove("sticky"); // Remove sticky class
  }
};

// Navigation controller functions
function openNav() { // Open nav
  document.getElementById("mySidenav").style.width = "35px";
  document.getElementById("app").style.marginLeft = "35px";
};
function closeNav() { // Close nav
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("app").style.marginLeft = "0";
};
function topFunction() { // Top of page
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};
function bottomFunction() { // Bottom of page
  document.body.scrollTop = 10000;
  document.documentElement.scrollTop = 10000;
};