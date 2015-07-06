@extends('index')

@section('scripts')
<script src="{{ url('app/poll-1.js') }}"></script>
<script src="{{ url('app/poll-2.js') }}"></script>
@endsection

@section('javascript')
new Vue({el: '#poll-1'});
new Vue({el: '#poll-2'});
@endsection

@section('content')
<div id="samples">
<style>
.poll-items {
    list-style: none;
}
</style>
<p>The following demonstrates a little poll component</p>

<div id="poll-1">
<poll1></poll1>
</div>

<pre><code class="html">
<?php echo htmlspecialchars('<poll></poll>'); ?>
</code></pre>

<pre><code class="js">
Vue.component('poll', {
    template: '<?php echo htmlspecialchars('<div class="poll"> \
    <h2>{{ title }}</h2> \
    <ul class="poll-items"> \
        <li v-repeat="items"> \
            <li v-repeat="items">
            <label> \
                <input type="radio" name="choice" /> \
                @{{ content }} \
            </label> \
        </li> \
    </ul> \
    </div>'); ?>',

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

new Vue({el: '#samples'});
</code></pre>

<h2>Things that we would like to improve</h2>

<ol>
<li>It would be nice if we could pass in the poll title</li>
<li>It would also be nice if we could somehow move the template out of the definition</li>
</ol>

<script id="poll-2-template" type="x-template">
<div class="poll">
    <h2>@{{ title }}</h2>
    <ul class="poll-items">
        <li v-repeat="items">
            <label><input type="radio" name="choice" /> @{{ content }}</label>
        </li>
    </ul>
</div>
</script>

<div id="poll-2">
<poll2 title="Best PHP framework?"></poll2>
</div>

<pre><code class="html">
<?php echo htmlspecialchars('<poll title="Best PHP framework?"></poll>'); ?>
</code></pre>

<pre><code class="html">
<?php echo htmlspecialchars('<script id="poll-template" type="x-template">
<div class="poll">
    <h2>@{{ title }}</h2>
    <ul class="poll-items">
        <li v-repeat="items">
            <label> \
                <input type="radio" name="choice" /> \
                @{{ content }} \
            </label> \
        </li>
    </ul>
</div>
</script>'); ?>
</code></pre>

<pre><code class="js">
Vue.component('poll', {
    template: document.querySelector('#poll-template'),

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
</code></pre>
</div>
@endsection