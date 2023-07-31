<div> 
    <li>
        <span class="pull-left">Panchayat or Division</span>
        <div class="outline-select">
            <select wire:model="Selectedtype" >
                <option selected="" value="Select">Select</option>
                <option value="City">City</option>
                <option value="Town">Town panchayat</option>                                  
            </select>
            <span class="select-icon"><i class="fas fa-angle-down"></i></span>
        </div>
    </li>


    @if (!is_null($divisions))
    <li>
        <span class="pull-left">Division</span>
        <div class="outline-select">
            <select name="division_id"  wire:model="SelectedDivision" required>
                <option selected=""  value="">Select</option>
                @foreach ($divisions as $division)
                <option value="{{ $division->id }}">{{ $division->name }}</option>
                @endforeach                
            </select>
            <span class="select-icon"><i class="fas fa-angle-down"></i></span>
        </div>
    </li> 

            @if (!is_null($dstreets))
            <li>
                <span class="pull-left">Street Name </span>
                <div class="outline-select">
                    <select  name="dsreet_id" required>
                        <option selected=""  value="">Select</option>
                        @foreach ($dstreets as $dstreet)
                        <option value="{{ $dstreet->id }}">{{ $dstreet->name }}</option>
                        @endforeach                           
                    </select>
                    <span class="select-icon"><i class="fas fa-angle-down"></i></span>
                </div>
            </li>
        
            @endif

    @endif


    @if (!is_null($panchayats))
    <li>
        <span class="pull-left">Town Panchayat</span>
        <div class="outline-select">
        <select name="panchayat_id"  wire:model="SelectedPanchayat" required>
            <option selected=""  value="">Select</option>
            @foreach ($panchayats as $panchayat)
            <option value="{{ $panchayat->id }}">{{ $panchayat->name }}</option>
            @endforeach 
        </select>
        <span class="select-icon"><i class="fas fa-angle-down"></i></span>
        </div>
    </li>
            @if (!is_null($wards))
            <li>
                <span class="pull-left">Ward No </span>
                <div class="outline-select">
                    <select  name="ward_id" wire:model="SelectedWard" >
                        <option selected=""  value="">Select Ward</option>
                        @foreach ($wards as $ward)
                        <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                        @endforeach                   
                    </select>
                <span class="select-icon"><i class="fas fa-angle-down"></i></span>
                </div>
            </li>
            @endif

            @if (!is_null($streets))
            <li>
                <span class="pull-left">Street Name </span>
                <div class="outline-select">
                    <select name="sreet_id" required>
                        <option selected=""  value="">Select</option>
                        @foreach ($streets as $street)
                        <option value="{{ $street->id }}">{{ $street->name }}</option>
                        @endforeach                        
                    </select>
                    <span class="select-icon"><i class="fas fa-angle-down"></i></span>
                </div>
            </li>
            @endif
    @endif 


</div>
