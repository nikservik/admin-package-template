@extends('admin-dashboard::layout')

@section('content')
    <h1 class="page-header mb-6">@lang('package_slug::admin.list-title')</h1>

    <div>{{ $result }}</div>
@endsection
