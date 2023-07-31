<?php

namespace App\Http\Livewire;

use App\Models\Ward;
use App\Models\Dstreet;
use Livewire\Component;
use App\Models\Division;
use App\Models\Panchayat;
use App\Models\Street;

class Dropdown extends Component
{
    public $Selectedtype = null;
    public $SelectedPanchayat = null;
    public $SelectedWard = null;
    public $SelectedDivision = null;
    public $panchayats = null;
    public $wards = null;
    public $streets = null;
    public $divisions = null;
    public $dstreets = null;


    function updatedSelectedtype($type)
    {

        if ($type == 'Town') {

            $this->panchayats = Panchayat::all();

            $this->divisions = null;

        }elseif ($type == 'City') {

            $this->divisions =  Division::all();

            $this->panchayats = null;
            
        }
        
    }

    function updatedSelectedPanchayat($id) {

        $this->wards = Ward::where('panchayat_id',$id)->get();
        
    }

    function updatedSelectedWard($id) {

        $this->streets = Street::where('ward_id',$id)->get();
        
    }

    function updatedSelectedDivision($id) {
        $this->dstreets = Dstreet::where('division_id',$id)->get();
    }
   
    
    
    public function render()
    {
        return view('livewire.dropdown');
    }
}
