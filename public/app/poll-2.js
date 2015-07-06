Vue.component('poll2', {
    template: document.querySelector('#poll-2-template'),

    props: ['title'],

    data: function() {
        return {
            items: [{
                content: 'Laravel'
            },{
                content: 'Zend Framework 2'
            },{
                content: 'Slim Framework'
            }]
        }
    }
});