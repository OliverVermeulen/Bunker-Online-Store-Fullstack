const { createApp } = window.Vue;

const Component = {
  data() {
    return {
      upcoming: null,
      available: null,
      featured: null,
      all: null,
    };
  },
  mounted() {
    axios
      .get("public/product-data/upcoming")
      .then((response) => (this.upcoming = response.data));
    console.log(this);

    axios
      .get("public/product-data/available")
      .then((response) => (this.available = response.data));
    console.log(this);

    axios
    .get("public/product-data/available")
    .then((response) => (this.available = response.data));
  console.log(this);

    axios
      .get("public/product-data/featured")
      .then((response) => (this.featured = response.data));
    console.log(this);
    // this.comingSoonArray()
  },
};

// mounting app
window.addEventListener("DOMContentLoaded", () => {
  const app = createApp(Component);
  app.mount("#app");

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
  }
});
