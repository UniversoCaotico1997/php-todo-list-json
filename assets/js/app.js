const { createApp } = Vue

createApp({
    data() {
        return {
            api_url: 'server.php',
            tasks: []
        }
    },
    methods: {
        readtasks(url) {
            axios.get(url).then(response => {
                console.log(response.data);
                this.tasks = response.data
            })
        }
    },
    mounted() {
        this.readtasks(this.api_url)
    }
}).mount('#app')