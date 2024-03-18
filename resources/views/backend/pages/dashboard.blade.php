@extends('backend.layouts.master')

@section('title')
    Admin Dashboard
@endsection

@section('content')

    @include('backend.layouts.inc.admin-sidebar')

    @include('backend.components.dashboard')

@endsection
