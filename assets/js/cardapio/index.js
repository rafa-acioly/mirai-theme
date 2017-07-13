import vue from 'vue/dist/vue';
import wpapi from 'wpapi';

new vue({
  el: '#cardapio-app',
  data: {
    cardapioTitle: 'Cardápio',
    isSearching: false,
    products: [],
    notFound: false,
    wp: ''
  },

  created: function () {
    console.log('created');
    this.wp = new wpapi({endpoint: 'http://mirai.dev/index.php/wp-json'});
  },

  methods: {
    findProducts (name) {
      this.cardapioTitle = name;
      this.products = [];
      this.isSearching = !this.isSearching;

      this.wp.categories().slug(name)
      .then(categorie => {
        var current = categorie[0];
        if (!current) { return Promise.reject(); }
        return this.wp.posts().categories(current.id);
      })
      .then(productsList => {
        productsList.forEach(product => {
          this.products.push(product);
        });
        this.isSearching = !this.isSearching;
      })
      .catch(err => {
        this.isSearching = !this.isSearchin;
        this.notFound = true;
      });
    }
  }
})