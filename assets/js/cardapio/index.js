import vue from 'vue/dist/vue';
import wpapi from 'wpapi';

new vue({
  el: '#cardapio-app',
  data: {
    cardapioTitle: 'Cardápio',
    isSearching: false,
    products: [],
    wp: ''
  },

  created: function () {
    console.log('created');
    this.wp = new wpapi({endpoint: 'http://mirai.dev/index.php/wp-json'});
  },

  methods: {
    findProducts (name) {
      this.cardapioTitle = name;
      this.isSearching = true;
      this.wp.categories().slug(name)
      .then(categorie => {
        var current = categorie[0];
        return this.wp.posts().categories(current.id);
      })
      .then(productsList => {
        productsList.forEach(product => {
          this.products.push(product);
        });
        this.isSearching = false;
        console.log(this.products);
      });
    }
  }
})