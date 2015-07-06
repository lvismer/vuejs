@extends('indexclean')

@section('content')
<div id="demo">
    <div id="app">
        <p>A client sample using <i>$props</i> to pass data and update data.</p>
        <clientlist />
    </div>
</div>
<script type="text/javascript" src="{{ url('js/bundle.js') }}"></script>
@endsection