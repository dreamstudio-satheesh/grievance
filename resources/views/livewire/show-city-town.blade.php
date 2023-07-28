<div>
    

    <div class="mb-3">
        <label class="form-label text-muted">Select Type</label>
        <select  wire:model="Selectedtype"  class="form-control" required >
            <option selected="" value="Select">Select</option>
            <option value="City">City</option>
            <option value="Town">Town panchayat</option>            
        </select>
    </div>

    @if (!is_null($divisions))

            <div class="mb-3">
                <label class="form-label text-muted">Select Divisions</label>
                <select name="division_id"  wire:model="SelectedDivision"  class="form-control"  required>
                    <option selected=""  value="">Select</option>
                    @foreach ($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                    @endforeach         
                </select>
            </div>

            @if (!is_null($dstreets))

            <div class="mb-3">                
                <label class="form-label text-muted">Select Street</label>
                <select name="dsreet_id"   class="form-control" required >
                    <option selected=""  value="">Select</option>
                    @foreach ($dstreets as $dstreet)
                    <option value="{{ $dstreet->id }}">{{ $dstreet->name }}</option>
                    @endforeach         
                </select>
            </div>
         @endif
    @endif


    @if (!is_null($panchayats))

        <div class="mb-3">
            <label class="form-label text-muted">Select Panchayat</label>
            <select name="panchayat_id"  wire:model="SelectedPanchayat"  class="form-control" required >
                <option selected=""  value="">Select</option>
                @foreach ($panchayats as $panchayat)
                <option value="{{ $panchayat->id }}">{{ $panchayat->name }}</option>
                @endforeach         
            </select>
        </div>

        @if (!is_null($wards))

        <div class="mb-3">                
            <label class="form-label text-muted">Select Ward</label>
            <select name="ward_id" wire:model="SelectedWard"  class="form-control"  required>
                <option selected=""  value="">Select Ward</option>
                @foreach ($wards as $ward)
                <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                @endforeach         
            </select>
        </div>
        @endif

        @if (!is_null($streets))
        <div class="mb-3">                
            <label class="form-label text-muted">Select Street</label>
            <select name="sreet_id"   class="form-control" required >
                <option selected=""  value="">Select</option>
                @foreach ($streets as $street)
                <option value="{{ $street->id }}">{{ $street->name }}</option>
                @endforeach         
            </select>
        </div>
     @endif

    @endif



</div>


