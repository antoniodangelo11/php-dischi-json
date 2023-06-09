const app = Vue.createApp({
    data() {
      return {
        arrSong: [],

        /* arrSong: [
            {
            name: "New Jersey",
            artist: "Bon Jovi",
            date: "1988",
            cover: "img/bonjovi.jpg",
            },
            {
            name: "Live at Wembley 86",
            artist: "Queen",
            date: "1992",
            cover: "img/queen.jpg",
            },
            {
            name: "Ten's Summoner's Tales",
            artist: "Sting",
            date: "1993",
            cover: "img/sting.jpg",
            },
            {
            name: "Steve Gadd Band",
            artist: "Steve Gadd Band",
            date: "2018",
            cover: "img/stevegadd.jpg",
            },
            {
            name: "Brave New World",
            artist: "Iron Maiden",
            date: "2000",
            cover: "img/ironmaiden.jpg",
            },
            {
            name: "One More Car, One More Rider",
            artist: "Eric Clapton",
            date: "2002",
            cover: "img/eric_clapton.jpg",
            },
        ], */
      };
    },
    methods: {
        requestSong(){
            axios.get("http://localhost/php-dischi-json/api-dischi.php")
                .then((response) => (this.arrSong = response.data));
        }       
    },
    created() {
        this.requestSong();
    },
});

app.mount("#app");

