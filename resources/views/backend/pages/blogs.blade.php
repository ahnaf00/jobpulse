@extends('backend.layouts.master')

@section('title')
    Blogs
@endsection


@section('content')

    @include('backend.layouts.inc.admin-sidebar')
    @include('backend.components.blogs')

@endsection
