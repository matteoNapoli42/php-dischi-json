const { createApp } = Vue

createApp({
    data() {
        return {
            musicAlbums: [],
        }
    },
    methods: {
        getData() {
            axios.get('script.php')
                .then(response => {
                    console.log(response.data);
                    this.musicAlbums = response.data;
                    console.log("CIAOOOO");
                })
        }
    },

    mounted() {
        this.getData('script.php');
    },

}).mount('#app')