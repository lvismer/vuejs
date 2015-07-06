@extends('index')

@section('content')
<div id="demo">
    <h1>@{{title | uppercase}}</h1>
    <ul>
        <li v-repeat="todos"
            v-on="click: done = !done"
            class="@{{ done ? 'done' : '' }}">@{{ content }}</li>
    </ul>
</div>

<script>
    var vm = new Vue({
        el: '#demo',

        data: {
            title: 'Todo App - Simple',
            todos: [
                {
                    done: true,
                    content: 'Buy some earbuds'
                },
                {
                    done: false,
                    content: 'Get some new tyres'
                }
            ]
        }
    });
</script>

<pre><code class="highlight html">
<?php echo htmlspecialchars('<div id="demo">
    <h1>@{{title | uppercase}}</h1>
    <ul>
        <li v-repeat="todos"
            v-on="click: done = !done"
            class="@{{ done ? \'done\' : \'\' }}">@{{ content }}</li>
    </ul>
</div>'); ?>
</code></pre>

<pre><code class="highlight js">
var vm = new Vue({
    el: '#demo',

    data: {
        title: 'Todo App - Simple',
        todos: [
            {
                done: true,
                content: 'Buy some earbuds'
            },
            {
                done: false,
                content: 'Get some new tyres'
            }
        ]
    }
});
</code></pre>
@endsection