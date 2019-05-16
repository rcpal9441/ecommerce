@extends('layouts.frontBody')

@section('body')


<section class="checkout-section sec-pad bg-gray">
@csrf
        <div class="container">

            <div class="row">

                <div class="col-sm-8 col-md-9 ord1-mobile">

                    

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



                            <div class="row btn-block-mob">

                                <div class="col-sm-6  col-md-6">

                                    <a href="{{url('')}}" class="btn btn-01">Continue Shopping</a>

                                </div>

                                <div class="col-sm-6 col-md-6 text-right">

                                    <a href="{{url('checkout')}}" class="btn btn-01">Place Order</a>

                                </div>

                            </div>

                        </div>

              





                </div>

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



        </div>

    </section>


@endsection