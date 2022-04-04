const app = new Vue ({
    el: "#grid",

    data: {
        album : [],
    },

    methods: {
        getDiscs: function () {
          axios.get("http://localhost/php-ajax-dischi/milestone2/partials/vars.php") 
            .then( resp => {
                this.album = resp.data;
                console.log(this.album);
            });
        },
    },

    created () {
        this.getDiscs();
    }
})

