<!DOCTYPE html>
<html>
<head>
    <title>Ledger Report</title>
<style>
body{
    font-family: sans-serif;
}
.shipping_table{
 
  border-collapse;
  
}

.shipping_tr_th_td {
  
}


.product_table {
 
  width: 100%;

  border-collapse:collapse;
   border-top: 1px solid rgb(7, 4, 92); */
  /* border-bottom: 1px solid rgb(7, 4, 92); */

}

.product_tr_th_td {
 
  border-bottom: 1px solid rgb(20, 3, 76);
  padding: 0px;
  margin: 0%;
 
  /* border-color: rgb(20, 24, 20); */
  /* padding: 8px; */
}
.product_tr_paddding{
  padding: 3px 0px 3px 0px;
}



</style>
</head>
<body>
<div style="text-align: center;">


 <br>

</div>
<style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 20%;
}

.sealbox {
  float: left;
  width: 20%;
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
.text_right{
  text-align: right;
  padding-right: 4px;
}
.text_left{
  text-align: left;
}
.upper_case{
    text-transform: uppercase;
    font-size: 10px;
    padding: 10px;

}
</style>


<div class="clearfix">
  <div class="box1" style="background-color:#FFF">

  <div class="upper_case" style=" font-size: 18px;color:rgb(144, 8, 8);font-weight: bold;">BDT : {{  number_format(($total_paid ?? 0) - ( $total_payable?? 0),2)}}</div>
  <div class="upper_case" style=" font-size: 18px;color:rgb(10, 10, 10);font-weight: bold;">{{ $vendor->customer_code ?? '' }} {{ $vendor->name ?? '' }}</div>
 


  </div>
  <div class="box1" style="margin-top: 50px">
 
  </div>
  <div class="box1" style="margin-top: 50px">
    <div class="" style="text-align: right">
       
    </div>
  </div>
</div>
<br>
<table class="product_table">
    <tr style="">
        <th class="upper_case product_tr_th_td" style="text-align: center">Date</th>
        <th class="upper_case  text_left product_tr_th_td">Title <br> Order</th>
        <th class="upper_case  text_left product_tr_th_td">Particulars </th>
        <th class="upper_case  text_left product_tr_th_td">Received By </th>
      
        <th class="upper_case  text_right product_tr_th_td">Sales <br>
           {{ number_format(($total_payable?? 0),2)}}
        </th>
        <th class="upper_case  text_right product_tr_th_td">Received <br>
           {{ number_format(($total_paid?? 0),2)}}
        </th>
    </tr>

    @php
    $sub_total = 0;

   @endphp
   @forelse ($items as $key=>$item )  
@php
    $sub_total += ($item->paid_amount ?? ''); 
@endphp
<tr>
    @php
        $row_pand = $item->count();
    @endphp
 
    <td class="upper_case " style="text-align: center">{{ $item->billing_date ?? '' }}</td>
    <td class="upper_case  text_left">    Delivery <br>
        {{ $item->challan->challan_no ?? ''}}</td>
    <td class="upper_case  text_left">
        @foreach ($item->challan->chadetails as $detail)
        {{ $detail->item_details  }} <br>
        @endforeach
    </td>
    <td class="upper_case text_left">
        @if($item->voucher)
            @if($item->voucher->payment_type== 1)
            Cash 
            @else
             Bank
            @endif
        @endif

    </td>
    <td class="upper_case  text_right">{{ number_format(($item->payable_amount ?? 0),2)}} </td>
    <td class="upper_case  text_right">{{ number_format(($item->paid_amount ?? 0),2)}}</td>
</tr>

@endforeach

</table>


  <div class="" style="">


    
  </div>
<div class="clearfix">

  <div class="box" style="text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
  
   
    
    {{-- <p class="upper_case"><strong>Received By<br> Cash/Account Department</strong></p> --}}
  </div>
  <div class="box" style="text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
  
   
    
    <p class="upper_case"><strong></strong></p>
  </div>
  <div class="box" style="text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
   
   
    
    <p class="upper_case"><strong></strong></p>
  </div>


  <div class="box" style="background-color:#FFF;text-align:right;margin-left: 40px;">
    <br><br><br><br>
    <br><br>
  
  
    {{-- <p class="upper_case"><strong>Official Seal</strong></p> --}}
  
  </div>


</div>

</body>

</html>