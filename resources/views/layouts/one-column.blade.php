@extends('layouts.base')

@section('header')
    @include('blocks.header')
@endsection

@section('content')
    <main class="content">
        <div class="wrapper">
            @yield('center-column')
        </div>
    </main>
@endsection