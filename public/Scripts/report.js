const app = new Vue({
    el: '#app-face',
    data: {
        results: []
    },
    mounted() {
        this.getItems()
    },
    methods: {
        getItems() {
            axios.get('reports' ).then(response => this.results = response.data)
        }
    }

});

