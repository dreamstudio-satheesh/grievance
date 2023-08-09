<script>
    @if ($message = Session::get('success'))
    Swal.fire({
            position: 'top-end',
            title: 'Good job!',
            text: '{{ $message }} !',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500,
            showCancelButton: true,
            cancelButtonClass: 'btn btn-danger w-xs mt-2',
            buttonsStyling: false,
            showCloseButton: true
        });  


    @endif
  
@if ($message = Session::get('error'))

@endif
   
@if ($message = Session::get('warning'))

@endif
   
@if ($message = Session::get('info'))

@endif
  
@if ($errors->any())

@endif

</script>