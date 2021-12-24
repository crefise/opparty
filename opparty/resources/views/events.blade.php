@extends('layouts.app')

@section('content')
    <h1>Welcome to events page</h1>
    <div id="app">
        <Index></Index>
    </div>
@endsection

@push('vue-scripts')
    <script src="{{ asset('js/modules/events/main.js') }}" defer></script>
    <link href="{{ asset('css/modules/events/main.css') }}" rel="stylesheet">
@endpush

