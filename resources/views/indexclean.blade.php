<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600|Lato|Inconsolata' rel='stylesheet' type='text/css'>
    <!-- atelier-sulphurpool.light.min.css, solarized_light.min.css -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/styles/atelier-sulphurpool.light.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="/css/page.css" type="text/css">
    <script language="JavaScript">
    $(document).ready(function() {
        $('pre code').each(function(i, block) {
            hljs.highlightBlock(block);
        });
    });
    </script>
</head>
<body>

<div id="mobile-bar">
    <a class="menu-button"></a>
    <a class="logo" href="/"></a>
</div>

<div id="header">
    <a id="logo" href="/">
        <img src="/images/logo.png">
        <span>Vue.js</span>
    </a>
    <ul id="nav">
        <li><a href="{{ url('/') }}" class="nav-link current">Home</a></li>
        <li><a href="http://vuejs.org" class="nav-link">Vue Home</a></li>
    </ul>
</div>

<div id="main">

    <div class="sidebar">
        <div class="list">
            <h2>Samples</h2>
            <ul class="menu-root" style="min-height: 400px;">
                @include('menu')
            </ul>
        </div>
    </div>

    <div id="samples" class="content sample with-sidebar">
        <h1>Samples</h1>
        @yield('content')
    </div>

</div>

@yield('scripts')
<script src="/lib/smooth-scroll.min.js"></script>

<script>
@yield('javascript')
</script>
</body>
</html>