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
    this.wp = new wpapi({endpoint: 'http://miraisushi.com.br/wp-json'});
  },

  methods: {
    /**
     * Remove o indice "codigoprod" do array
     * para que o loop entre os preços não exiba ele entre os preços
     * @param {Array} prices 
     */
    removeTag (prices) {
      delete prices.codigoprod;
    },
    findProducts (name, title) {
      this.cardapioTitle = title;
      this.products = [];
      this.isSearching = !this.isSearching;

      this.wp.categories().slug(name)
      .then(categorie => { 
        var current = categorie[0];
        if (!current) { return Promise.reject(); }
        return this.wp.posts().perPage(50).categories(current.id);
      })
      .then(productsList => {
        productsList.forEach(product => {
          this.products.push(product);
        });
        this.products.sort((current, next) => {
          return parseInt(current.acf.codigoprod) > parseInt(next.acf.codigoprod) ? 1 : -1;
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