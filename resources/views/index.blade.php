@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Dashboard  @endslot
@endcomponent
@endsection
@section('script')
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection