module.exports = {
    template: require('./client.html'),
    data: function () {
        return {
            company: null
        }
    },
    methods: {
        addClient: function(event) {
            event.preventDefault();
            this.clients.push({company: this.company});
        }
    },
    props: ['clients']
}