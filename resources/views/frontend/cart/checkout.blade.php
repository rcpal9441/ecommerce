
@extends('layouts.frontBody')
@section('title','Checkout')
@section('body')
<section class="checkout-section sec-pad bg-gray">
    @csrf
        <div class="container">

            <div class="row">

                <div class="col-sm-8 col-md-9 ord1-mobile">

                    <div id="accordion" class="login-modal">

                        <div class="card active">

                            <div class="card-header" id="headingOne">

                                <div class="custom-control custom-radio">

                                    <input id="debit" checked name="paymentMethod" type="radio" class="custom-control-input" required="">

                                    <label class=" custom-control-label" for="debit" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                        Log In / Sign Up

                                        <i class="far ml-auto fa-check-circle"></i>

                                    </label>



                                </div>

                            </div>

                         @auth

                         @else

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

                                <div class="card-body">

                                    <div class="modal-body pt-1 pl-5 pr-5">
                                        <form >

                                            <div class="form-group chips-input ">

                                                <div class="input-div">

                                                    <input type="email" class="inputText form-control" id="login-email" required="">

                                                    <label class="floating-label">Enter Email/Phone Number </label>

                                                </div>

                                            </div>

                                            <div class="form-group chips-input ">

                                                <div class="input-div">

                                                    <input type="password" class="inputText form-control" id="login-password" required="">

                                                    <label class="floating-label">Enter Password</label>

                                                </div>

                                            </div>

                                            <div class="form-group mt-4 mb-4">

                                                 

                                                <button type="button" class="btn btn-01 ml-auto w-100 text-center"  onclick="return commn.customLogin();";>Continue Checkout</button>
                                                <span id="login-error" style="color: red;"></span>

                                            </div>



                                            <div class="links-password d-flex justify-content-between">

                                                <!--a href="# " class="para-1-dropdown">Recover Password</a-->

                                                <p class="">New to Make My Foam?

                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter1" class="para-1-dropdown ml-auto">Create Account</a>

                                                </p>

                                            </div>



                                            <!--div class="para-1-dropdown mt-4 text-center">

                                                <span>Or Login Using</span>

                                            </div>



                                            <div class="form-group form-inline text-center btn-social mt-2">

                                                <a href="#" class="social-btn fb-btn">

                                                    <i class="fab fa-facebook-f"></i>Facebook</a>

                                                <a href="#" class="social-btn ml-3 ggle-btn ">

                                                    <i class=" fab fa-google "></i> Google</a>

                                            </div-->

                                        </form>

                                    </div>

                                </div>

                            </div>

                            @endauth

                        </div>

                        <div class="card">

                            <div class="card-header" id="headingTwo">



                                <div class="custom-control custom-radio">

                                    <input id="debit1" name="paymentMethod1" type="checkbox" class="custom-control-input" required="">

                                    <label class="custom-control-label" for="debit1" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"

                                        aria-controls="collapseTwo">

                                        Deliver Address

                                        <i class="far ml-auto fa-check-circle"></i>

                                    </label>

                                </div>

                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                                <div class="card-body">

                                    <b>Travis Hoehne</b>

                                    <p>1405 Tchesinkut Lake Rd Mackenzie, BC V0J 2C0, Canada

                                        <i class="fas fa-pencil-alt"></i>

                                    </p>

                                    <!-- <button class="btn-01 btn mr-2">Edit</button> -->

                                    <button class="btn-01 btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Deliver Here</button>

                                </div>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header" id="headingThree">



                                <div class="custom-control custom-radio">

                                    <input id="debit2" name="paymentMethod1" type="checkbox" class="custom-control-input" required="">

                                    <label class="custom-control-label" for="debit2" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"

                                        aria-controls="collapseThree">

                                        Review Order

                                        <i class="far ml-auto fa-check-circle"></i>

                                    </label>

                                </div>





                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">

                                <div class="card-body">

                                    <div class="custom-cart-table">

                                        <div class="table-responsive">

                                            <table class="table">

                                                <thead>

                                                    <tr>

                                                        <th scope="col"> </th>

                                                        <th scope="col" class="w-30">Product</th>

                                                        <th scope="col">Available At

                                                            <span class="font-normal">M3C 0C1</span>

                                                            <a href="#">

                                                                <i class="fa fa-pencil-alt text-orange"></i>

                                                            </a>

                                                        </th>

                                                        <th scope="col" style="width: 100px;">Quantity</th>

                                                        <th scope="col" class="text-center">Price</th>

                                                        <th> </th>

                                                    </tr>

                                                </thead>

                                                <tbody id="addCartItems">

				                                 @php 
				                                 $i=1;
				                                 $total=0;
				                                 @endphp 
				                                @if($carts)

				                                 @foreach($carts as $id => $details)
				                                   @php 
				                                    $total += $details['price'] * $details['quantity'] 
				                                    @endphp

                                                    <tr>
                                                        <td>
                                                            <img src="{{url($details['image'])}}"> </td>
                                                        <td>
                                                           <h5>{{$details['name'] }}</h5>
                                                            <p class="d-block font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione cumque harum</p>
                                                        </td>
                                                        <td>Delivery By 09 Jan - 10 Jan | FREE</td>
                                                        <td>
                                                            <input class="form-control" type="number" min="1" onchange="commn.updateCart({{$id}},this,'review-order-list');" value="{{ $details['quantity'] }}">
                                                        </td>
                                                        <td class="text-center">${{$details['price'] * $details['quantity']}}</td>
                                                        <td class="text-right">
                                                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="commn.removeCart({{$id}});">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    @endif


                                            @if($shapeCarts)
                                                    
                                                 @foreach($shapeCarts as $id => $details)
                                                   @php 
                                                    $total += $details['price'] * $details['quantity'];
                                                    $total +=$details['gst'];
                                                    @endphp

                                                    <tr>
                                                        <td>
                                                            <img src="{{url('public/assets/images/icon/'.$details['image'])}}"> </td>
                                                        <td>
                                                           <h5>{{$details['shapeName'] }}</h5>
                                                            <p class="d-block font-12">{{$details['dimension']}}</p>
                                                        </td>
                                                        <td>Delivery By 09 Jan - 10 Jan | FREE</td>
                                                        <td>
                                                            <input class="form-control" type="number" min="1" onchange="commn.updateCart({{$id}},this,'review-order-list');" value="{{ $details['quantity'] }}">
                                                        </td>
                                                        <td class="text-center">${{$details['price'] * $details['quantity']}}</td>
                                                        <td class="text-right">
                                                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="commn.removeCart({{$id}});">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                    @endif

                                                </tbody>

                                            </table>

                                        </div>

                                        <p class="font-12 mb-3">Order confirmation email will be send to

                                            <b class="text-orange" id="emailId"> {{Auth::user() ? Auth::user()->email : ''}} </b>

                                        </p>

                                        <div class="row btn-block-mob">

                                            <div class="col-sm-6  col-md-6">

                                                <a href="{{url('')}}" class="btn btn-01">Continue Shopping</a>

                                            </div>

                                            <div class="col-sm-6 col-md-6 text-right">      

                                                <button class="btn btn-01" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Proceed to Payment</button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header" id="headingFour">



                                <div class="custom-control custom-radio">

                                    <input id="debit3" name="paymentMethod1" type="checkbox" class="custom-control-input" required="">

                                    <label class="custom-control-label" for="debit3" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"

                                        aria-controls="collapseFour">

                                        Make Payment</label>

                                </div>

                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">

                                <div class="card-body">

                                    <form class="needs-validation" novalidate="">

                                        <div class="d-flex mb-3 mt-0">

                                            <div class="custom-control custom-radio" style="display:none;">

                                                <input id="credit10" name="paymentMethod" type="radio" value="credit-card" class="custom-control-input paymentMethod" required="">

                                                <label class="custom-control-label" for="credit10">Credit card</label>

                                            </div>

                                            <div class="custom-control custom-radio ml-4" style="display:none;">

                                                <input id="debit11" name="paymentMethod" type="radio"  value="debit-card" class="custom-control-input paymentMethod" required="">

                                                <label class="custom-control-label" for="debit11">Debit card</label>

                                            </div>

                                            <div class="custom-control custom-radio ml-4">

                                                <input id="paypal10" name="paymentMethod" value="paypal" checked type="radio" class="custom-control-input paymentMethod" required="">

                                                <label class="custom-control-label" for="paypal10">Paypal</label>

                                            </div>

                                        </div>
                                 <div id="credit-card-form" style="display:none;">
                                        <div class="row">

                                            <div class="col-md-6 mb-0">
                                                <div class="form-group chips-input ">

                                                    <div class="input-div">

                                                        <input type="text " class="inputText form-control" required="">

                                                        <label class="floating-label"> Name On Card </label>

                                                    </div>



                                                </div>

                                            </div>

                                            <div class="col-md-6 mb-0">

                                                <div class="form-group chips-input ">

                                                    <div class="input-div">

                                                        <input type="email " class="inputText form-control" required="">

                                                        <label class="floating-label"> Card Number</label>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-3 mb-0">
                                                <div class="form-group chips-input ">

                                                    <div class="input-div">

                                                        <input type="date " class="inputText form-control" required="">

                                                        <label class="floating-label"> Expiration</label>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-3 mb-0">
                                                <div class="form-group chips-input ">

                                                    <div class="input-div">

                                                        <input type="password" class="inputText form-control" required="">

                                                        <label class="floating-label"> CVV</label>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                     </div>
                                     
                                     <div id="paypal-image">
                                         <img src="{{asset('public/front/images/paypal.png')}}" width="210px;">
                                     </div>   

                                        <div class="sonme-instruction">
                                            <span class="font-12">
                                                By placing the order, I have read makemyfoam.com's
                                                <a href="#" class="text-orange">Terms & Conditions </a>
                                            </span>
                                        </div>
                                        <button class="btn btn-01 btn-block mt-4 mb-2" type="button" onclick="commn.paymentMethod();" id="payamount">Pay ${{$total+10+9}} </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>


        <form method="POST" action="{{ route('checkout.payment.paypal') }}" id="paypal-submit">
            {{ csrf_field() }}
        </form>
                                    

                <div class="col-sm-4 col-md-3">

                    <div class="chekc-out-box pay-detail">


                        <div class="cover-total title-section mb-0">

                            <h3 class="font-16 mb-0">Price Detail</h3>
                        </div>

                        <hr class="mt-0">

                        <div class="cover-total subtotal  d-flex">

                            <h3>Subtotal</h3>

                            <h3 class="ml-auto" id="subtotal">${{$total}}</h3>

                        </div>

                        <div class="cover-total subtotal  d-flex">

                            <h3>Delivery Charges</h3>

                            <h3 class="ml-auto">Free</h3>

                        </div>

                        <div class="cover-total subtotal  d-flex">

                            <h3>+5% GST

                            </h3>

                            <h3 class="ml-auto">$9</h3>

                        </div>

                        <div class="cover-total subtotal  d-flex">

                            <h3>+7% GST</h3>

                            <h3 class="ml-auto">$10</h3>

                        </div>

                        <div class="cover-total  subtotal  d-flex mb-0 pb-0">
                        
                            <!--span class="font-12 text-orange w-100 d-flex mb-0">Your Total Savings on this order
                        
                                <b class="ml-auto">$10</b>
                        
                            </span-->
                        
                        </div>
                        <hr>

                        <div class="cover-total total d-flex align-items-center justify-content-between total mb-0 pb-1">
                            <h5 class="mb-0">Total</h5>
                            <h2 class="mb-0" id="total">${{$total+10+9}}</h2>
                        </div>

                    </div>

                </div>

            </div>

        </div>



    </section>

    @endsection

    @section('script')
    <script src="{{url('public/front/js/common.js')}}"></script>
    @endsection