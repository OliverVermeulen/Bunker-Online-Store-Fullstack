const { createApp } = window.Vue;

const Component = {
  data() {
    return {
      upcoming: null,
      available: null,
      featured: null,
      cart: null,
      users: null,
    };
  },
  mounted() {
    // Upcoming products
    axios
      .get("/public/product-data/upcoming")
      .then((response) => (this.upcoming = response.data));
    console.log(this);

    // Available products
    axios
      .get("/public/product-data/available")
      .then((response) => {
        let result = response.data;
        let queryParams = window.location.search.substr(1).split("=");
        console.log(queryParams)
        console.log(result)
        if (queryParams[0] === "product_id") {
          let productId = parseInt(queryParams[1], 10);
          console.log("Filtering products for", productId)
          result = result.filter((product) => {
            return parseInt(product.product_id, 10) === productId;
          });
        }
        if (queryParams[0] === "product_type") {
          result = result.filter((product) => {
            return product.type === queryParams[1];
          });
        }
        this.available = result
      });
    console.log(this);

    // Featured products
    axios
      .get("/public/product-data/featured")
      .then((response) => (this.featured = response.data));
    console.log(this);
    
    axios
    .get("/public/cart-data/user")
    .then((response) => (this.cart = response.data));
  console.log(this);

  axios
  .get("/public/users-data/all")
  .then((response) => (this.users = response.data));
console.log(this);
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
