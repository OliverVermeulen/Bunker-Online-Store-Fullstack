
function myFunction() {
  let searchbar = document.getElementById("searchbar");
  if (searchbar.style.display === "none") {
    searchbar.style.display = "block";
  } else {
    searchbar.style.display = "none";
  }
}

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