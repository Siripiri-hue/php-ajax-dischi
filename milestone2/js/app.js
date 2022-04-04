const app = new Vue ({
    el: "#grid",

    data: {
        discs : [],
    },

    methods: {
        getDiscs: function () {
          axios.get("http://localhost/php-ajax-dischi/milestone2/partials/vars.php") 
            .then( resp => {
                this.discs = resp.data;
                console.log(this.discs);
            });
        },
    },

    created () {
        this.getDiscs();
    }
})

