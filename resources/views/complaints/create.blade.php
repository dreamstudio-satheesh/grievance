@extends('layouts.livemaster')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Grievances @endslot
@slot('title') Register Grievances  @endslot
@endcomponent


    <div class="card">
        <form action="{{ route('complaints.store') }}"  method="POST" >
        @csrf
        <div class="card-body">

            @if (count($errors) > 0)
            <div class="mb-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            
            <div class="mb-3">
                <label class="form-label text-muted">* Created For </label>
                <select name="user_id" class="form-control" required >
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
                 
                </select>
            </div>

            <div class="mb-3">
                <label for="customername-field" class="form-label"> Name</label>
                <input type="text" name="username"  class="form-control" placeholder="Enter Name" required="">
            </div>

            <div class="mb-3">
                <label for="customername-field" class="form-label"> Mobile No</label>
                <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number" required="">
            </div>


            <div class="mb-3">
                <label for="customername-field" class="form-label"> Email</label>
                <input type="text" name="email"  class="form-control" placeholder="Enter Mail ID" required="">
            </div>

            <div class="mb-3">
                <label for="customername-field" class="form-label"> Door No</label>
                <input type="text" name="doorno"  class="form-control" placeholder="Enter Door Number" required="">
            </div>

            @livewire('show-city-town')

            <div class="mb-3">
                <label class="form-label text-muted">Grievance Type</label>
                <select name="subject" class="form-control" required >
                <option selected="" value="">Select</option>
                <option value="Blockage of drainage">Blockage of drainage</option>
                <option value="Mosquito menace">Mosquito menace</option>
                <option value="Street Dog menace">Street Dog menace</option>
                <option value="Stagnant of water on the road">Stagnant of water on the road</option>
                <option value="Pig menace">Pig menace</option>
                <option value="Mixing of waste water in drinking water">Mixing of waste water in drinking water</option>
                <option value="Dust bin removal           ">Dust bin removal           </option>
                <option value="Public Health">Public Health</option>
                <option value="Unsanitary conditions on the road       ">Unsanitary conditions on the road       </option>
                <option value="Complaints regarding dust, smoke ">Complaints regarding dust, smoke </option>
                <option value="Damage against public property  ">Damage against public property  </option>
                <option value="New street light   ">New street light   </option>
                <option value="Non burning of street lights  ">Non burning of street lights  </option>
                <option value="Complaint regarding toilet   ">Complaint regarding toilet   </option>
                <option value="Improper maintenance of  toilet   ">Improper maintenance of  toilet   </option>
                <option value="Burning of street light during day time   ">Burning of street light during day time   </option>
                <option value="Mixing of waste water in drinking water   ">Mixing of waste water in drinking water   </option>
                <option value="Broken of water tank       ">Broken of water tank       </option>
                <option value="Sales of water   ">Sales of water   </option>
                <option value="No water supply                   ">No water supply                   </option>
                <option value="Reqest to lay new drainage line     ">Reqest to lay new drainage line     </option>
                <option value="Request to rely the road      ">Request to rely the road      </option>
                <option value="No speed breake  ">No speed breake  </option>
                <option value="Road damage     ">Road damage     </option>
                <option value="Stagnant of water on the road      ">Stagnant of water on the road      </option>
                <option value="Encroachment of sand in public road   ">Encroachment of sand in public road   </option>
                <option value="Complaint regarding street name board ">Complaint regarding street name board </option>
                <option value="Encroachment">Encroachment</option>
                <option value="Encroachment of rocks in public road ">Encroachment of rocks in public road </option>
                <option value="Water tank ">Water tank </option>
                <option value="Request to swimming pool    ">Request to swimming pool    </option>
                <option value="Delay of pension    ">Delay of pension    </option>
                <option value="Delay in changing the name in certificates ">Delay in changing the name in certificates </option>
                <option value="Tax collection ">Tax collection </option>
                <option value="Other Complaints">Other Complaints</option>  
                </select>
            </div>

            <div class="mb-3">
                <label for="customername-field" class="form-label">Desctiption</label>
                <textarea name="description"  class="form-control" required="" cols="30" rows="10"></textarea>
            </div>


            <div class="mb-3">
                <label class="form-label text-muted">*Priority</label>
                <select name="priority" class="form-control" required >
                <option selected="" value="Medium">Medium</option>
                <option value="High">High</option>
                <option value="Low">Low</option>
                 
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted">*Status</label>
                <select name="status" class="form-control" required >
                <option selected="" value="new">New</option>
                <option value="in-progress">In Progress</option>
                <option value="resolved">resolved</option>
                 
                </select>
            </div>

          

   
        </div>
    
           

        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success"> Add Complaint</button> 
            </form>
            </div>
        </div>
    
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection