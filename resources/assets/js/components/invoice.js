module.exports = {
    template: require('./invoice.html'),
    data: function () {
        return {
            items: [
                {content: 'Invoice item 1'},
                {content: 'Invoice item 2'},
                {content: 'Invoice item 3'}
            ]
        }
    },
    methods: {
        addItem: function (event) {
            event.preventDefault();
            this.items.push({content: 'New item'});
        }
    },
    components: {
        invoiceitem: require('./invoice-item')
    }
}