@extends('frontend.layouts')
@section('title') Clean Salem @endsection

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')

    <!-- ===========Cart Section Ends Here========== -->
    <div class="shop-cart padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section-wrapper">
               
                <div class="cart-bottom">
                   
                    <div class="shiping-box">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="calculate-shiping">
                                    
									<div class="cart-overview">
                                    
										
                                    <ul class="codex">
                                        <li>
                                            <span class="pull-left">District</span>
                                            <div class="outline-select">
                                        <select>
                                            <option value="">Salem</option>
                                            
                                        </select>
                                        <span class="select-icon"><i class="fas fa-angle-down"></i></span>
                                    </div>
                                        </li>
										
                                        @livewire('dropdown')
                                        
                                    </ul>
                                </div>
									                                   
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="calculate-shiping">
                                    
									<div class="cart-overview">
                                    
										
                                    <ul class="codex">
                                        
                                        <li>
                                            <span class="pull-left">Grievance Type </span>
                                            <div class="outline-select">
                                        <select>
                                            <option value="Select">Select</option>
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
                                            <option selected="selected" value="New street light   ">New street light   </option>
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
                                            <option value="Other Complaints">Other Complaints</option></select>
                                        <span class="select-icon"><i class="fas fa-angle-down"></i></span>
                                    </div>
                                        </li>
                                        <li>
                                            <span class="pull-left">Grievance Description</span>
                                            <textarea placeholder="Your Message" rows="8" name="message" id="message" required class="cart-page-input-text"></textarea>
                                        </li>
										<li>
                                            <span class="pull-left">Name</span>
                                            <p class="pull-right"><input type="text" name="name" placeholder="Name" class="cart-page-input-text"/></p>
                                        </li>
										<li>
                                            <span class="pull-left">Mobile No</span>
                                            <p class="pull-right"><input type="text" name="mobile" placeholder="Mobile No" class="cart-page-input-text"/>	</p>
                                        </li>

                                    </ul>
                                </div>
									                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div align="left" style="float: left"><form class="cart-checkout" action="#">
                            <button type="submit" class="default-btn move-right m-2"><span>Track you Complaint</span></button></div>
                            
				<div align="right" ><form class="cart-checkout" action="#">
                            <button type="submit" class="default-btn move-right m-2"><span>Clear</span></button>
                            <button type="submit" class="default-btn move-right m-2"><span>Submit</span></button>
                        </form></div>
            </div>
        </div>
    </div>
	<!-- ===========Cart Section Ends Here========== -->



@endsection