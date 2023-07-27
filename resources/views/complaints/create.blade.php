@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') GRIEVANCES @endslot
@slot('title') REGISTER GRIEVANCES  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('complaints.store') }}"  method="post" >
        @csrf
        <div class="card-body">
            

            <div class="mb-3">
                <label for="customername-field" class="form-label">Ward Name</label>
                <input type="text" name="name"  class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter ward name.</div>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted">Town Panchayat</label>
                <select name="ward_id" class="form-control" >
                    <option selected="selected" value="Select">Select</option>
                    <option value="309">Arasiramani</option>
                    <option value="310">Attayampatty</option>
                    <option value="311">Ayothiyapattanam</option>
                    <option value="312">Belur</option>
                    <option value="313">Edanganasalai</option>
                    <option value="314">Elampillai</option>
                    <option value="315">Gangavalli</option>
                    <option value="316">Jalakandapuram</option>
                    <option value="317">Kadayampatty</option>
                    <option value="318">Kannankurichi</option>
                    <option value="319">Karuppur</option>
                    <option value="320">Keeripatty</option>
                    <option value="321">Kolathur</option>
                    <option value="322">Konganapuram</option>
                    <option value="323">Mallur</option>
                    <option value="324">Mecheri</option>
                    <option value="325">Nangavalli</option>
                    <option value="326">Omalur</option>
                    <option value="327">Panamarathupatty</option>
                    <option value="328">Pethanaickenpalayam</option>
                    <option value="329">PNPatty</option>
                    <option value="330">Poolampatty</option>
                    <option value="331">Sankagiri</option>
                    <option value="332">Sendarapatty</option>
                    <option value="333">Thammampatty</option>
                    <option value="334">Tharamangalam</option>
                    <option value="335">Thedavoor</option>
                    <option value="336">Thevur</option>
                    <option value="338">Valappady</option>
                    <option value="337">Vanavasi</option>
                    <option value="339">Veeraganur</option>
                    <option value="340">Veerakkalpudur</option>
                    <option value="341">Yethapur</option>
                </select>
            </div>
            
           

        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success"> Add Ward</button> 
            </form>
            </div>
        </div>
    
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection