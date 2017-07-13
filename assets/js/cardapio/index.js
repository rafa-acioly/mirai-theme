import vue from 'vue/dist/vue';

new vue({
  el: '#cardapio-app',
  data: {
    cardapioTitle: 'Cardápio',
  },
  methods: {
    findProducts (name) {
      this.cardapioTitle = name;
    }
  }
})