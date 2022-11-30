const { createApp } = Vue

createApp({
    data() {
        return {
            api_url: 'server.php',
            tasks: [],
            newTask: ''
        }
    },
    methods: {
        readtasks(url) {
            axios.get(url).then(response => {
                console.log(response.data);
                this.tasks = response.data;
            })
        },
        addTask() {
            console.log('ho cliccato sul pulsante');
            console.log(this.newTask);
            this.tasks.push(this.newTask)
        }
    },
    mounted() {
        this.readtasks(this.api_url)
    }
}).mount('#app')