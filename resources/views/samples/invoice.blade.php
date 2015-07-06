@extends('indexclean')

@section('content')
<p>One can use a module packaging tool like <a href="http://browserify.org">Browserify</a> to modularize applications into CommonJS modules.</p>

<p>Using Laravel the easiest way todo this is to use Elixir</p>

<pre><code class="bash">
$ npm install
$ npm install vue --save
$ npm install vue-resource --save
$ gulp
</code></pre>

<pre><code class="js">
elixir(function(mix) {
    mix.browserify('app.js');
});
</code></pre>

<p>For production to add minification</p>

<pre><code class="bash">
$ gulp --production
</code></pre>

<div id="demo">
    <div id="app">
        <invoice />
    </div>
</div>
<script type="text/javascript" src="{{ url('js/bundle.js') }}"></script>

<p>Alternatively one can package the <i>application</i> using webpack</p>

<pre><code class="bash">
$ sudo npm install -g webpack
$ npm install html-loader
$ webpack
</code></pre>

<pre><code class="js">
// webpack.config.js
module.exports = {
    entry: "./resources/assets/js/app.js",
    output: {
        path: "./public/js",
        publicPath: "/js/",
        filename: "build.js"
    },
    module: {
        loaders: [
            { test: /\.styl$/, loader: "style!css!stylus" },
            { test: /\.html$/, loader: "html" }
        ]
    }
}
</code></pre>

<p>A good example, <a href="https://github.com/vuejs/vue-webpack-example">https://github.com/vuejs/vue-webpack-example</a>
@endsection