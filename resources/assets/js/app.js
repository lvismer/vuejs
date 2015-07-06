var Vue = require('vue')
var Resource = require('vue-resource')

Vue.use(Resource)

new Vue({
    ready: function() {
        this.$http.get('/invoice/sample', function (data, status, request) {
            console.log(data);
        });
    },
    el: '#app',
    components: {
        invoice: require('./components/invoice'),
        clientlist: require('./components/clientlist'),
        client: require('./components/client'),
        clientlistalt: require('./components/clientlistalt'),
        clientalt: require('./components/clientalt')
    }
});