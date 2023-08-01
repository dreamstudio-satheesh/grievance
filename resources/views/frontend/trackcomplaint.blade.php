@extends('frontend.layouts')
@section('title') Clean Salem @endsection
@section('content')


    <!-- ===========Cart Section Ends Here========== -->
    <div class="shop-cart padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section-wrapper">
               
                <div class="cart-bottom">
                   
                    <div class="shiping-box">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="calculate-shiping">
                                    
									<div class="cart-overview">
                                    
										
                                    <ul class="codex">
                                        <li>
                                            <span class="pull-left">Complaint ID</span>
                                           <input type="text" name="complaintid" placeholder="Type Your Complaint id" class="cart-page-input-text"/>
                                        </li>
										
                                        
                                    </ul>
										<button type="submit" class="default-btn move-right m-2"><span>Clear</span></button>
                            <button type="submit" class="default-btn move-right m-2"><span>Submit</span></button>
                                </div>
									                                   
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
				
				<div class="cart-top">
                    <table>
                        <thead>
                            <tr>
                                <th class="cat-product">ID/Date</th>
                                <th class="cat-price">Type</th>
                                <th class="cat-quantity">Description</th>
                                <th class="cat-toprice">Status</th>
                                <th class="cat-edit">Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($complaints as $complaint)
                            <tr>
                                <td class="product-item cat-product">
                                    
                                    <div class="p-content">
                                       #{{$complaint->complaint_id}}
                                        <br>
                                        {{ \Carbon\Carbon::parse($complaint->created_at)->format('d/m/Y')}}
                                    </div>
                                </td>
                                <td class="cat-price">{{$complaint->subject}}</td>
                                <td class="cat-quantity">
                                    {{$complaint->description}}
                                </td>
                                <td class="cat-toprice">{{$complaint->status}}</td>
                                <td class="cat-edit">
                                    <a href="#"><i class="fas fa-angle-double-right"></i></a>
                                </td>
                            </tr>
                                
                            @endforeach
                         
                            
                            
                        </tbody>
                    </table>
                </div>
				
				
            </div>
        </div>
    </div>
	<!-- ===========Cart Section Ends Here========== -->



@endsection