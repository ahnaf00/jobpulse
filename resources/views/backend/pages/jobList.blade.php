@extends('backend.layouts.master')

@section('title')
    Job
@endsection

@section('content')

    @if ($role == 'super_admin')
        @include('backend.layouts.inc.admin-sidebar')
    @elseif ($role == 'company')
        @include('backend.layouts.inc.company-sidebar')
    @endif

    @include('backend.components.job.jobList')
    @include('backend.components.job.job-create')
    @include('backend.components.job.job-update')
    @include('backend.components.job.job-delete')


@endsection

