<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index() {
        $enquirylist = Enquiry::all();
        return view('enquiry.index', compact('enquirylist'));
    }



      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();

        return redirect()->route('enquiry.index')->with('success', 'item deleted successfully!');
    }
}
