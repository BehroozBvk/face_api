var app = new Vue({
    el: '#app-face',
    data: {
        results: []
    },
    mounted() {
        axios.get('reports').then(response => this.results = response.data);
    }

});

