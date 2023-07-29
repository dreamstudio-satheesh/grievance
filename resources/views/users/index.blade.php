@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Users  @endslot
@endcomponent


<div class="row g-4 mb-3">
    <div class="col-sm-auto">
        <div class="search-box ms-2">
            <input type="text" class="form-control search" placeholder="Search...">
            <i class="ri-search-line search-icon"></i>
        </div>
        
    </div>
    <div class="col-sm">
        <div class="d-flex justify-content-sm-end">
            <div>
                <a href="{{ url('/admin/users/create') }}" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
            </div>
          
        </div>
    </div>
</div>

<table class="table table-nowrap">
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">name</th>
    <th scope="col">email</th>
    <th scope="col">mobile number</th>
    <th scope="col">ward number</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#{{ $user->id }}</a></th>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->mobile_number }}</td>
    <td>{{ $user->ward_number }}</td>
    <td>
      
        <div class="d-flex gap-2">
            <div class="edit">
                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Edit</button>
            </div>
            <div class="remove">                                
                <button class="btn btn-sm btn-primary remove-item-btn" data-bs-toggle="modal" data-bs-target="#smallModal" data-attr="{{ route('users.destroy',$user->id) }}">Remove</button>
                
            </div>
        </div>
    </td>
    
    </tr>
         @endforeach
   
    </tbody>
    </table>

    

<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
                <div class="modal-body">
                    <div class="mb-3" id="modal-id" style="display: none;">
                        <label for="id-field" class="form-label">ID</label>
                        <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                    </div>

                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Customer Name</label>
                        <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required />
                        <div class="invalid-feedback">Please enter a customer name.</div>
                    </div>

                    <div class="mb-3">
                        <label for="email-field" class="form-label">Email</label>
                        <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required />
                        <div class="invalid-feedback">Please enter an email.</div>
                    </div>

                    <div class="mb-3">
                        <label for="phone-field" class="form-label">Phone</label>
                        <input type="text" id="phone-field" class="form-control" placeholder="Enter Phone no." required />
                        <div class="invalid-feedback">Please enter a phone.</div>
                    </div>

                    <div class="mb-3">
                        <label for="date-field" class="form-label">Joining Date</label>
                        <input type="text" id="date-field" class="form-control" placeholder="Select Date" required />
                        <div class="invalid-feedback">Please select a date.</div>
                    </div>

                    <div>
                        <label for="status-field" class="form-label">Status</label>
                        <select class="form-control" data-trigger name="status-field" id="status-field" required>
                            <option value="">Status</option>
                            <option value="Active">Active</option>
                            <option value="Block">Block</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you Sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <form action="" method="Post">                    
                        @csrf
                        @method('DELETE')    
                    <button type="submit" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end modal -->
@endsection
@section('script')
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>

<script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });

</script>
@endsection