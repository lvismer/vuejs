Vue.component('poll1', {
    template: '<div class="poll"> \
    <h2>{{ title }}</h2> \
    <ul class="poll-items"> \
        <li v-repeat="items"><label> \
            <input type="radio" name="choice"/> {{ content }}</label> \
        </li> \
    </ul> \
    </div>',

    data: function() {
        return {
            title: 'Favourite Movie?',
            items: [{
                content: 'Highlander'
            },{
                content: 'Quantum of Solace'
            },{
                content: 'The Terminator'
            }]
        }
    }
});