<!DOCTYPE html>
<html>
<head>
    <title>Challan Report</title>
<style>
body{
    font-family: sans-serif;
}
.product_table {
 
  width: 100%;
  border-collapse;
  border-top: 1px solid rgb(21, 22, 21);
}

.product_tr_th_td {
 
  border-bottom: 1px solid rgb(21, 22, 21);
  padding: 0;
  margin: 0%;
 
  /* border-color: rgb(20, 24, 20); */
  /* padding: 8px; */
}


</style>
</head>
<body>
<div style="text-align: center;">
 <img src="{{ asset('public/logo/tradeco.png') }}" style="width: 70px;height:50px;padding:0%;margin:0%;">
 <br>
 <strong>CHA22000000167</strong>
<div>TRADECO INC.</div>
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
  width: 50%;
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
  <div class="box1" style="background-color:#FFF;text-align: right;">

    <div class="bg-dark text-white text-center"  >
        <span class="upper_case" style="background-color: black;color:white;padding:2,10,2,10;">Shipping Challan</span>
    </div>
                       
    <div class="upper_case">Client Code   - {{ $quotation->customer->customer_code  ?? '' }}</div>
    <div class="upper_case">Enlisted      - {{ $quotation->customer->created_at  ?? '' }}</div>
    
    <div class="upper_case">Shipping Item - {{ $quotation->shipping_item  ?? '' }}</div>
    
    <div class="upper_case">Shipping Date -  {{ $quotation->shipping_date  ?? '' }}</div>
    
    <div class="upper_case">Sales Person  - {{ $quotation->sales_person  ?? '' }}</div>
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
   
    <td class="upper_case product_tr_th_td" style="text-align: center"># PO-PP SB/--{{$quotation->id  }}</td>
    <td class="upper_case product_tr_th_td" style="text-align: center">
        {{ $quotationdetail->product->code ?? ''  }} | {{ $quotationdetail->product->name ?? ''  }} |
        {{ $quotationdetail->product->product_dimension ?? ''  }}
    </td>
  
    <td class="upper_case product_tr_th_td text_center">{{$quotationdetail->qty ?? '-'}}</td>
</tr>
@endforeach
  <tfoot>
  	<tr>
  		<td class="upper_case product_tr_th_td" colspan="2" style="text-align: center">Total Quantity </td>
  		<td class="upper_case product_tr_th_td text_center">{{$total_qty ?? '0'}}</td>
     
  	</tr>
     
  </tfoot>
</table>

<div class="clearfix">

  <div class="box" style="background-color:#FFF;text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
    <br>
    <br>
   
    
    <p class="upper_case">Shipped By </p>
  </div>
  <div class=" box" style="background-color:#FFF;text-align:center;margin-inline: 4px">
   
    @php
        $total_data  ='Company Name :'.$general_setting->site_title.', Address :'.$general_setting->address.',  Mobile No :'.$general_setting->phone.', Mail : '.$general_setting->email;
    @endphp
   
    <br>
    <br>
    <br>
    <br>
  
    <?php echo '<img style="margin-top:10px; width:90px" src="data:image/png;base64,' . DNS2D::getBarcodePNG($total_data, 'QRCODE') . '" alt="barcode"   />';?><br>
    <span class="upper_case" style="font-size: 10px;">{{ $general_setting->site_title ?? '' }}</span> 
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