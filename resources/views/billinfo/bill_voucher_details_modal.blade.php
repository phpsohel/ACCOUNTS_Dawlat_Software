<table  class="table table-bordered table-sm table-striped text-nowrap">
    <thead>
        <tr>
            <th>SL</th>
            <th>Date</th>
            <th>Voucher No</th>
            <th>Vendor Name</th>
            <th class="text-success text-right">Paid Amount</th>
           
        </tr>
    </thead>
    <tbody>
        @forelse ($voucherdetails as $key=>$voucherdetail )  
       
        <tr>
            <td>{{ ++$key}}</td>
            <td>{{ $voucherdetail->payment_date ?? '' }}</td>
            <td><a href="{{ route('voucherPdfInvoice',$voucherdetail->id) }}" class="" target="_blank">{{ $voucherdetail->voucher_no ?? ''}}</a></td>
          
            <td>{{ ($voucherdetail->customer->name ?? '').'('.($voucherdetail->customer->customer_code ?? '').')'}}</td>
            <td class="text-success text-right">{{ $voucherdetail->paid_amount ?? ''}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="14" class="text-center text-danger"><h5>No data available in table.</h5></td>
            
           </tr>
        @endforelse()
    </tbody>
</table>