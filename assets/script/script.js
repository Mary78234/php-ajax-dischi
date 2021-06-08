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
      this.listaAlbum = resp.data;
      console.log(this.listaAlbum);
    })
    .catch(err=>{
      console.log(err);
    })
    
  }




});