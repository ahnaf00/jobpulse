@extends('backend.layouts.master')

@section('title')
    Plugins
@endsection

@section('content')

    @include('backend.layouts.inc.admin-sidebar')
    @include('backend.components.plugins')

@endsection

