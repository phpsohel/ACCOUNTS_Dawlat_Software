<!DOCTYPE html>
<html>
<head>
    <title>Challan Report</title>
<style>
body{
    font-family: sans-serif;
}
.shipping_table{
 
  border-collapse;
  
}

.shipping_tr_th_td {
  border-bottom: 1px solid rgb(20, 3, 76);
}


.product_table {
 
  width: 100%;
  border-collapse:collapse;
  border-top: 1px solid rgb(7, 4, 92);

}

.product_tr_th_td {
 
  border-bottom: 1px solid rgb(20, 3, 76);
  padding: 0;
  margin: 0%;
 
  /* border-color: rgb(20, 24, 20); */
  /* padding: 8px; */
}








</style>
</head>
<body>
<div style="text-align: center;">
  @if(!empty($quotation->biller->image))
  <img src="{{url('public/images/biller',$quotation->biller->image)}}" style="width: 70px;height:50px;padding:0%;margin:0%;">
  @else
 <img src="{{ asset('public/logo/tradeco.png') }}" style="width: 70px;height:50px;padding:0%;margin:0%;">
 @endif

 <br>
 <strong>CHA22000000167</strong>
<div class="upper_case">{{ $quotation->biller->name ?? '' }}.</div>
</div>
<style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 30%;


}
.box1 {
  float: left;
  width: 33.33%;
  padding: 0px;

}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.text_center{
  text-align: center;
}
.upper_case{
    text-transform: uppercase;
    font-size: 12px;
}
</style>


<div class="clearfix">
  <div class="box1" style="background-color:#FFF">

  <div class="upper_case">Forwarded</div>
    <strong class="upper_case">{{ $quotation->customer->company_name  ?? '' }}</strong>
    <div class="upper_case">Brand - {{ $quotation->customer->brand_name ?? '' }}</div>
    <div class="upper_case">{{ $quotation->customer->address  ?? '' }}</div>
    <br class="">
    <div class="upper_case">Contact Person - {{ $quotation->customer->name ?? '' }}</div>
    <div class="upper_case">Contact Number - {{ $quotation->customer->phone_number ?? '' }}</div>
    <div class="upper_case">Delivery Place - {{ $quotation->delivery_place ?? '' }}</div>

  </div>
  <div class="box1" style=""></div>
  <div class="box1" style="">
    <div class="row" >
      <div class="upper_case" style="">
          <table class="shipping_table" style="width:100%;margin-left:15px">
            <tr class="">
              <td class="" colspan="2" style="text-align: center;background-color: black;color:white">Shipping Challan</td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">Client Code</td>
              <td class="shipping_tr_th_td">{{ $quotation->customer->customer_code  ?? '' }}</td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">
                Enlisted<br>
                Shipping Date
              </td>
              <td class="shipping_tr_th_td">
                {{ \Carbon\Carbon::parse($quotation->created_at)->format('d M Y')}}
                <br>
                {{ \Carbon\Carbon::parse($quotation->shipping_date)->format('d M Y')}}
              </td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">Shipping Item</td>
              <td class="shipping_tr_th_td">{{  $quotation->shipping_item   ?? '' }}</td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">Sales Person</td>
              <td class="shipping_tr_th_td">{{  $quotation->sales_person   ?? '' }}</td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">Delivery Person</td>
              <td class="shipping_tr_th_td">{{  $quotation->delivery_person   ?? '' }}</td>
            </tr>
          </table>
      </div>

    </div>
  </div>
</div>
<br>
<table class="product_table">
    <tr style=""> 
        <th class="upper_case product_tr_th_td" style="text-align: center">PO <br> Number</th>
        <th class="upper_case product_tr_th_td" style="text-align: center">Description<br> (Product Details)</th>
        <th class="upper_case product_tr_th_td text_center">Unit <br> ( Single Count)</th>
       
    </tr>



    @php
    $total_qty = 0;
@endphp
@foreach($quotationdetails as $key =>$quotationdetail)
@php
    $total_qty += $quotationdetail->qty ?? ''; 
@endphp
<tr>
   
    <td class="upper_case product_tr_th_td" style="text-align: center"># PO-PP<br> SB/---/{{$quotation->id  }}</td>
    <td class="upper_case product_tr_th_td" style="text-align: center">
        {{ $quotationdetail->product->category->name ?? ''  }}|{{ $quotationdetail->product->product_dimension ?? ''  }}| {{ $quotationdetail->product->name ?? ''  }}
       | {!! $quotationdetail->product->product_details ?? ''  !!}
    </td>
  
    <td class="upper_case product_tr_th_td text_center">{{$quotationdetail->qty ?? '-'}}</td>
</tr>
@endforeach
  <tfoot>
  	<tr>
      <td class=""></td>
      <td class=""></td>
  	
  		<th class="upper_case product_tr_th_td text_center" >{{$total_qty ?? '0'}}</th>
     
  	</tr>
     
  </tfoot>
</table>

<div class="clearfix">

  <div class="box" style=";text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
    <br>
    <br>
   
    
    <p class="upper_case">Shipped By </p>
  </div>
  <div class=" box" style="background-color:#FFF;text-align:center;margin-inline: 4px">
   
   
    @php
        $total_data  = $quotation->biller->name.', Address :'.$quotation->biller->address.',  Mobile No :'.$quotation->biller->phone_number.', Mail : '.$quotation->biller->email;
    @endphp
   
    <br>
    <br>
    <br>
    <br>
  
    <?php echo '<img style="margin-top:10px; width:90px" src="data:image/png;base64,' . DNS2D::getBarcodePNG($total_data, 'QRCODE') . '" alt="barcode"   />';?><br>
    <span class="upper_case" style="font-size: 10px;">{{ $quotation->biller->website_link ?? '' }}</span> 
    </div>
  <div class="box" style="background-color:#FFF;text-align:right;margin-left: 40px;">
    <br><br><br><br>
    <br><br>
    <br>
  
    <p class="upper_case">Sign , Seal & Date <br> By Receiver</p>
  
  </div>
</div>

</body>
</html>