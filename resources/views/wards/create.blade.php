@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add User  @endslot
@endcomponent


    <div class="card">
    <form class="tablelist-form" autocomplete="off">
        <div class="card-body">
            <div class="mb-3"  style="display: none;">
                <label for="id-field" class="form-label">ID</label>
                <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
            </div>

            <div class="mb-3">
                <label for="customername-field" class="form-label">User Name</label>
                <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter user name.</div>
            </div>

            <div class="mb-3">
                <label for="email-field" class="form-label">Email</label>
                <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required="">
                <div class="invalid-feedback">Please enter an email.</div>
            
            <div class="mb-3">
                <label for="phone-field" class="form-label">Phone</label>
                <input type="text" id="phone-field" class="form-control" placeholder="Enter Phone no." required="">
                <div class="invalid-feedback">Please enter a phone.</div>
            </div>

            <div class="mb-3">
                <label for="date-field" class="form-label">Ward Number</label>
                <input type="text" id="date-field" class="form-control" placeholder="Select Date" required="">
                <div class="invalid-feedback">Please select a Ward Number.</div>
            </div>

            <div>
                <label for="status-field" class="form-label">Status</label>
                <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" data-trigger="" name="status-field" id="status-field" required="" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Status</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Status</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="Status" placeholder=""><div class="choices__list" role="listbox"><div id="choices--status-field-item-choice-3" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="3" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Status</div><div id="choices--status-field-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Active" data-select-text="Press to select" data-choice-selectable="">Active</div><div id="choices--status-field-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Block" data-select-text="Press to select" data-choice-selectable="">Block</div></div></div></div>
            </div>
        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success" id="add-btn">Add User</button>
            </div>
        </div>
    </form>
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection