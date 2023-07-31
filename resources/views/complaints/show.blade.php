@extends('layouts.livemaster')
@section('title') @lang('translation.dashboards') @endsection
@section('css')
    <link href="{{ URL::asset('admin_assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Grievances @endslot
@slot('title') Manage Complaints  @endslot
@endcomponent


    <div class="card">
        <form action="{{ route('complaints.store') }}"  method="POST" enctype="multipart/form-data" >
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
                <label for="customername-field" class="form-label">Reply</label>
                <textarea name="message"  class="form-control" required="" cols="30" rows="6"></textarea>
            </div>




            <div class="mb-3">
                <label class="form-label text-muted">*Status</label>
                <select name="status" class="form-control" required >
                <option selected="" value="new">New</option>
                <option value="in-progress">In Progress</option>
                <option value="resolved">resolved</option>
                 
                </select>
            </div>

            <div class="mb-3">

               

                <div class="hstack gap-2 justify-content-end">
                    
                    <button type="submit" class="btn btn-primary"> Reply</button> 
                </div>
             </form>

             
            </div>
            
        </div>
    
           

        <div class="card-footer" >


            <div class="row">
                
                <div class="col-xxl-8">
                    <div class="card">
                            @if (!empty($complaint->division->name))

                                <div class="d-flex gap-2">
                                    <div class="edit">
                                    
                                        <a href="https://wa.me/6379108040?text={{ urlencode($complaint->subject.'
                                        '.'name :'. $complaint->username) }}" class="btn  btn-success btn-label" > <i class="bx bxl-whatsapp label-icon align-middle fs-16 me-2"></i>Whatsapp JE</a>
                                    </div>
                                    <div class="remove">
                                        <a href="https://wa.me/6379108040?text={{ urlencode($complaint->subject.'
                                        '.'name :'. $complaint->username) }}" class="btn  btn-primary btn-label" > <i class="bx bxl-whatsapp label-icon align-middle fs-16 me-2"></i>Whatsapp AE</a>
                                
                                    </div>
                                </div>

                            @elseif (!empty($complaint->panchayat->name))

                                <div class="d-flex gap-2">
                                    <div class="edit">
                                    
                                        <a href="https://wa.me/{{ $complaint->panchayat->pmobile}}?text={{ urlencode($complaint->subject.'
                                        '.'name :'. $complaint->username) }}" class="btn  btn-success btn-label" > <i class="bx bxl-whatsapp label-icon align-middle fs-16 me-2"></i>president</a>
                                    </div>
                                    <div class="remove">
                                        <a href="https://wa.me/{{ $complaint->panchayat->vmobile}}?text={{ urlencode($complaint->subject.'
                                        '.'name :'. $complaint->username) }}" class="btn  btn-primary btn-label" > <i class="bx bxl-whatsapp label-icon align-middle fs-16 me-2"></i>vise president</a>
                                
                                    </div>
                                </div>
                                
                            @endif
                        
                         
                        <div class="card-body p-4">
                            <h6 class="fw-semibold text-uppercase mb-3">{{ $complaint->subject }}</h6>
                            <p class="text-muted">{{ $complaint->description}}</p>
                           
                            
                        </div><!--end card-body-->
                        <div class="card-body p-4">
                            <h5 class="card-title mb-4">Replies</h5>

                            @foreach ($complaint->replies as $item)

                            <div data-simplebar style="height: 300px;" class="px-3 mx-n3">
                                <div class="d-flex mb-4">
                                    
                                
                                </div>
                                <div class="d-flex mb-4">
                                    
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="fs-13">Donald Palmer <small class="text-muted">24 Dec 2021 - 05:20PM</small></h5>
                                        <p class="text-muted">If you have further questions, please contact Customer Support from the “Action Menu” on your <a href="javascript:void(0);" class="text-decoration-underline">Online Order Support</a>.</p>
                                        
                                    </div>
                                </div>
                                
                            </div> 
                                
                            @endforeach
                                                               
                            
                        </div>
                        <!-- end card body -->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-xxl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Complaint Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless align-middle mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="fw-medium">Ticket</td>
                                            <td>#<span id="t-no">{{ $complaint->complaint_id }}</span> </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium">Client</td>
                                            <td id="t-client">{{ $complaint->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium">Name</td>
                                            <td>{{ $complaint->username }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium">Email</td>
                                            <td>{{ $complaint->email }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium">Mobile</td>
                                            <td>{{ $complaint->mobile }}</td>
                                        </tr>
                                       
                                        <tr>
                                            <td class="fw-medium">Priority</td>
                                            <td>
                                                <span class="badge bg-danger" id="t-priority">{{ $complaint->priority }}</span>
                                            </td>
                                        </tr>

                                      

                                        <tr>
                                            <td class="fw-medium">Address</td>
                                            <td id="c-date">address</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium">Create Date</td>
                                            <td id="c-date">{{ \Carbon\Carbon::parse($complaint->created_at)->format('d/m/Y')}}</td>
                                        </tr>
                                      
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title fw-semibold mb-0">Files Attachment</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center border border-dashed p-2 rounded">
                                <div class="flex-shrink-0 avatar-sm">
                                    <div class="avatar-title bg-light rounded">
                                        <i class="ri-file-zip-line fs-20 text-primary"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1"><a href="javascript:void(0);">admin.zip</a></h6>
                                    <small class="text-muted">3.2 MB</small>
                                </div>
                                <div class="hstack gap-3 fs-16">
                                    <a href="javascript:void(0);" class="text-muted"><i class="ri-download-2-line"></i></a>
                                    <a href="javascript:void(0);" class="text-muted"><i class="ri-delete-bin-line"></i></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
           
        </div>
    
</div>


@endsection
@section('script')
    <script src="{{ URL::asset('admin_assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/pages/form-file-upload.init.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection