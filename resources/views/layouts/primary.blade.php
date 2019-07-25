@extends('layouts.one-column')

@section('header')
    @include('blocks.header')
@endsection

@section('center-column')
    @include($page)
@endsection

