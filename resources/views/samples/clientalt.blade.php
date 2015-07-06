@extends('indexclean')

@section('content')
<div id="demo">
    <div id="app">
        <p>A client sample using <i>callback</i> to pass data and update data.</p>
        <clientlistalt />
    </div>
</div>
<script type="text/javascript" src="{{ url('js/bundle.js') }}"></script>
@endsection