@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Users  @endslot
@endcomponent

<table class="table table-nowrap">
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Customer</th>
    <th scope="col">Date</th>
    <th scope="col">Invoice</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#VZ2110</a></th>
    <td>Bobby Davis</td>
    <td>October 15, 2021</td>
    <td>$2,300</td>
    <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
    </tr>
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#VZ2109</a></th>
    <td>Christopher Neal</td>
    <td>October 7, 2021</td>
    <td>$5,500</td>
    <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
    </tr>
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#VZ2108</a></th>
    <td>Monkey Karry</td>
    <td>October 5, 2021</td>
    <td>$2,420</td>
    <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
    </tr>
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#VZ2107</a></th>
    <td>James White</td>
    <td>October 2, 2021</td>
    <td>$7,452</td>
    <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
    </tr>
    </tbody>
    </table>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection