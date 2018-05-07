const app = new Vue({
    el: '#app-dashboard',
    data: {
        age_male_avg: null,
        age_male_max: null,
        age_male_min: null,
        age_women_avg: null,
        age_women_max: null,
        age_women_min: null,
        male_count: null,
        total: null,
        women_count: null,
        avg: null
    },
    mounted() {
        this.getItems()
    },
    methods: {
        getItems() {
            axios.get('/admin/dashboard').then((response) => {
                this.age_male_avg = response.data.age_male_avg;
                this.age_male_max = response.data.age_male_max;
                this.age_male_min = response.data.age_male_min;
                this.age_women_avg = response.data.age_women_avg;
                this.age_women_max = response.data.age_women_max;
                this.age_women_min = response.data.age_women_min;
                this.male_count = response.data.male_count;
                this.total = response.data.total;
                this.women_count = response.data.women_count;
                this.avg = Math.round((response.data.age_women_avg + response.data.age_male_avg) / 2);
            })
        }
    }

});

