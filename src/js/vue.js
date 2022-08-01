// import axios from 'axios';
// import productArray from "/Bunker-Online-Store-Fullstack/src/json/products.json" assert { type: "json" };

const { createApp } = window.Vue;

// const filterType = (value, productList) =>
// productList.filter((item) => item.featured === value);

const Component = {
  data() {
    return {
      // search: "",
      // productList: productArray,
      // awesome: true,
      all: null,
      coming_soon: [],
    };
  },
  // computed: {
  //   filteredList() {
  //     let result = this.productList.filter((post) => {
  //       return post.name.toLowerCase().includes(this.search.toLowerCase());
  //     });
  //     let queryParams = window.location.search.substr(1).split("=");
  //     if (queryParams[0] === "product_id") {
  //       let productId = parseInt(queryParams[1], 10);
  //       result = result.filter((product) => {
  //         return parseInt(product.id, 10) === productId;
  //       });
  //     }
  //     if (queryParams[0] === "product_type") {
  //       result = result.filter((product) => {
  //         return product.type === queryParams[1];
  //       });
  //     }
  //     return result;
  //   },
  //   featuredList() {
  //     return filterType(true, this.productList);
  //   },
  // },
  methods: {
    // toggle() {
    //   this.awesome = !this.awesome;
    // },
    // resetInput() {
    //   this.search = "";
    // },
    comingSoonArray() {
      for (product in all) {
        if (product.released == false) {
          array.push(product, coming_soon);
        }
      }
    },
  },
  mounted() {
    axios
      .get("public/product-data/all")
      .then((response) => (this.all = response.data)),
      console.log(this),
    this.comingSoonArray()  
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
