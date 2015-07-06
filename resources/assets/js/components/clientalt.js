module.exports = {
    template: require('./clientalt.html'),
    data: function () {
        return {
            company: null
        }
    },
    methods: {
        addClient: function(event) {
            event.preventDefault();
            this.onSave({company: this.company});
        }
    },
    props: ['on-save']
}