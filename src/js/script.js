window.onscroll = function () {
  myFunction();
  scrollFunction();
};

// Sticky header function
let header = document.getElementById("myHeader");
let sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// Top of page function
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Bottom of page function
function bottomFunction() {
  document.body.scrollTop = 10000;
  document.documentElement.scrollTop = 10000;
}

// Navbar function
function openNav() {
  document.getElementById("mySidenav").style.width = "35px";
  document.getElementById("app").style.marginLeft = "35px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("app").style.marginLeft = "0";
}
