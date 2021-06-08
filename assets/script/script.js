const app = new Vue({
  el: '#app',

  data:{
    axios,
    url = 'http://localhost:8888/Esercizi%20Boolean/php-ajax-dischi/api.php',
    listaAlbum: []
  },

  created(){
    axios.get(url)
    .then(resp=>{
      this.listaAlbum.push(resp);
      console.log(this.listaAlbum);
    })
    .catch(err=>{
      console.log(err);
    })
    
  }




});