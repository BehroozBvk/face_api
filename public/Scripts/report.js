// import Pagination from './ComponnetVue/Pagination.vue';
// Vue.component('example-component', Pa);
const app = new Vue({
    el: '#app-face',
    data: {
        results: [],
        pagination: {
            'current_page': 1
        }
    },
    mounted() {
        this.getItems()
    },
    methods: {
        getItems() {
            axios.get('reports?page=' + this.pagination.current_page).then(response => this.results = response.data.data)
        }
    }

});

