module.exports = {
    template: require('./clientlist.html'),
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
        client: require('./client')
    }
}