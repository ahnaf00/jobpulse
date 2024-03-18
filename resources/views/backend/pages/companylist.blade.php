@extends('backend.layouts.master')

@section('title')
    Company
@endsection

@section('content')
    @include('backend.layouts.inc.admin-sidebar')
    @include('backend.components.company.comanyList')
    @include('backend.components.company.company-delete')
    @include('backend.components.company.company-update')
@endsection
