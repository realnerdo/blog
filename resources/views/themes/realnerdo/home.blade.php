@extends('themes.realnerdo.partials.base')

@section('title', 'Welcome')

@section('content')
    <div class="bg"></div>
    <div class="wrapper">
        @include('themes.realnerdo.partials.profile')
        @include('themes.realnerdo.partials.stream')
        @include('themes.realnerdo.partials.footer')
    </div>
@endsection
