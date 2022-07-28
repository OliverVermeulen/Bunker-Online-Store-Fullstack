import productArray from "/Bunker-Online-Store-Fullstack/src/json/products.json" assert { type: "json" };

const { createApp } = window.Vue;

const filterType = (key, productList) =>
  productList.filter((item) => item.type === key);

const Component = {
  data() {
    return {
      search: "",
      productList: productArray,
      // awesome: true
    };
  },
  computed: {
    topList() {
      return filterType("top", this.productList);
    },
    bottomList() {
      return filterType("bottom", this.productList);
    },
    accessoriesList() {
      return filterType("accessories", this.productList);
    },
    filteredList() {
      let result = this.productList.filter((post) => {
        return post.name.toLowerCase().includes(this.search.toLowerCase());
      });
      let queryParams = window.location.search.substr(1).split("=")
      if (queryParams[0] === "product_id") {
        let productId = parseInt(queryParams[1], 10);
         result = result.filter((product) => {return parseInt(product.id, 10) === productId})
      }
      if (queryParams[0] === "product_type") {
          result = result.filter((product) => {return product.type === queryParams[1]})
      }
      return result;
    },
  },
  methods: {
    toggle() {
      this.awesome = !this.awesome;
    },
    resetInput() {
      this.search = "";
    },
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
};
});
