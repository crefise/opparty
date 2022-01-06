@extends('layouts.app')

@section('content')
    <div id="app">
        <Index></Index>
    </div>
@endsection

@push('vue-scripts')
    <script src="{{ asset('js/modules/events/main.js') }}" defer></script>
@endpush
