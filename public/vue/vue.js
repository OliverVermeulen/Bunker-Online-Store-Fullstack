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

    filteredList() {
      return this.productList.filter((post) => {
        return post.name.toLowerCase().includes(this.search.toLowerCase());
      });
    },
  },
  methods: {
    toggle() {
      this.awesome = !this.awesome;
    },
  },
};

// mounting app
window.addEventListener("DOMContentLoaded", () => {
  const app = createApp(Component);
  app.mount("#app");
});
