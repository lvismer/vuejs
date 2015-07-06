module.exports = {
    template: require('./clientlistalt.html'),
    data: function () {
        return {
            clients: [
                {company: 'Sony Inc.'},
                {company: 'Google Inc.'},
                {company: 'Samsung Pty Ltd.'}
            ]
        }
    },
    components: {
        clientalt: require('./clientalt')
    },
    methods: {
        onClientCreate: function(data) {
            this.clients.push({company: data.company});
        }
    }
}