const app = new Vue({
  el: '#app',

  data:{
    axios,
    url: 'http://localhost:8888/Esercizi%20Boolean/php-ajax-dischi/api.php',
    listaAlbum: [],
    listaDati: []
  },

  created(){
    axios.get(this.url)
    .then(resp=>{
      this.listaAlbum.push(resp.data);
      this.listaDati = this.listaAlbum[0];
      console.log(this.listaDati);
    })
    .catch(err=>{
      console.log(err);
    })
    
  }




});