const app = new Vue({
  el: '#app',

  data:{
    axios,
    url: 'http://localhost:8888/Esercizi%20Boolean/php-ajax-dischi/api.php',
    albums: [],
    genres: [],
    genreToSearch: 'all',
  },
  methods:{

    getAPI(){
      axios.get(this.url,{
        params:{
          genre: this.genreToSearch
        }
      })
      .then(resp=>{
        this.albums = resp.data.albums;
        this.genres = resp.data.genres;
        console.log(this.albums);
        console.log(this.genres);
      })
      .catch(err=>{
        console.log(err);
      })
    }

  },
  created(){
    this.getAPI();
    
  }




});