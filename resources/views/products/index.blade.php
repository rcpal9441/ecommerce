@extends('layouts.adminBody')

@section('body')

<div class="dashboard-wrapper dashboard-wrapper-lg">

        <!-- Container fluid Starts -->
        <div class="container-fluid">

            <!-- Top Bar Starts -->
            <div class="top-bar clearfix">
                <div class="row gutter">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="page-title">
                            <h3>Our Products</h3>
                            <p>Dashboard / <a href="javascript:void()">Our Products</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
                </div>
            </div>
            <!-- Top Bar Ends -->

            <!-- Row Starts -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row gutter">
                                <div class="responsiveTbl">
                                    <table class="productTbl" width="100%">
                                        <tr>
                                            <th width="70px">S No.</th>
                                            <th>Product Name & Title</th>
                                            <th>Image</th>
                                            <th width="280px">Description</th>
                                            <th width="280px">Sub-Description</th>
                                            <!--th>Size</th-->
                                            <th>Price</th>
                                            <th width="80px">Action</th>
                                        </tr>

                                        @if($products ?? '')
                                        @foreach($products as $prod)
                                    
                                        <tr>
                                            <td>1</td>
                                            <td><b>{{$prod->name}}</b> <span>({{$prod->title}})</span></td>
                                            <td>
                                                <figure>{{--*/ $image = $prod->image /*--}}
                                                    <img src="{{url('')}}/{{$prod->image}}" style="width:30px;" />
                                                    <!--img src="{{url('public/admin/images/other/rv.png')}}" style="width:30px;" />
                                                    <img src="{{url('public/admin/images/other/rv.png')}}" style="width:30px;" />
                                                    <span>+5</span-->
                                                </figure>
                                            </td>
                                            <td>{{$prod->description}}</td>
                                            <td>{{$prod->sub_description}}</td>
                                            <!--td>22&#0176; W x 45&#0176; L x 3&#0176; D</td-->
                                            <td>${{$prod->price}}</td>
                                            <td>
                                                <div class="action">
                                                    <a href="{{route('products.edit',$prod->id)}}"><button type="button" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                                    <button type="button" class="del"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Row Ends -->



        </div>
        <!-- Container fluid ends -->

    </div>
    <!-- Dashboard Wrapper End -->

    @endsection