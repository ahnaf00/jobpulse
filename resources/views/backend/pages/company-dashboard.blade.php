@extends('backend.layouts.master')

@section('title')
    Company Dashboard
@endsection

@section('content')

    @include('backend.layouts.inc.company-sidebar')
    @include('backend.components.dashboard')

@endsection
