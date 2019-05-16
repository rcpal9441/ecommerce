@php 
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
            <input class="form-control" type="number" onchange="commn.updateCart({{$id}},this,'review-order-list');"  value="{{ $details['quantity'] }}">
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
        $total += $details['totalPrice'] * $details['quantity'];
        
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
            <td class="text-center">${{$details['totalPrice'] * $details['quantity']}}</td>
            <td class="text-right">
            <button type="button" class="btn btn-sm btn-outline-danger" onclick="commn.removeCart({{$id}});">
                    <i class="fa fa-trash"></i>
                </button>
            </td>
        </tr>
        @endforeach
        
        @endif