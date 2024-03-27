@extends('layouts.landing')

@section('title','Services')

@section('content')
    <h2>Services</h2>
    <div class="container__card">
        @component('_components.Card')
            @slot('title','Service 1')
            @slot('content','Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor')
        @endcomponent
        @component('_components.Card')
            @slot('title','Service 2')
            @slot('content','Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor')
        @endcomponent
        @component('_components.Card')
            @slot('title','Service 3')
            @slot('content','Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor')
        @endcomponent
    </div>
@endsection