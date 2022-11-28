    <table class="table table-bordered product-quotation-list">
                <thead>
                  <tr class="">
                    <th>#</th>
                    <th>Description </th>
                    <th>
                        Unit ( Single Count)
                    </th>
                    <th>Cost</th>
                    <th>Amount </th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                        $subtotal = 0;
                    @endphp
                    @foreach ($details as $detail)
                    @php
                        $subtotal +=  ($detail->qty ?? 0)*($detail->per_qty_cost ?? 0);
                      
                    @endphp
                    <tr class="">
                        <td class="">{{ ++$i }}</td>
                        <td class="">
                            <textarea name="" class="form-control " rows="5" placeholder="" readonly>{{ $detail->chadetails->challan_no.' | '.$detail->chadetails->shipping_date.' | '.$detail->chadetails->item_details ?? '' }}</textarea>
                        </td>
                        <td class="">
                            {{ $detail->qty ?? ''  }}
                          </td>
                        <td class="">{{ $detail->per_qty_cost ?? '' }}</td>
                        <td class="">{{  ($detail->qty ?? 0)*($detail->per_qty_cost ?? 0) }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="">
                        <td class="text-right" colspan="4">Sub Total </td>
                        <td class="">{{  $subtotal ?? 0 }}</td>
                    </tr>
                    <tr class="">
                        <td class="text-right" colspan="4">Vat ({{  $item->vat ?? 0 }} %)</td>
                        <td class="">{{  $item->vat_tk ?? 0 }}</td>
                    </tr>
                    <tr class="">
                        <td class="text-right" colspan="4">AIT ({{ $item->ait ?? 0 }} %)</td>
                        <td class="">{{  $item->ait_tk ?? 0 }}</td>
                    </tr>
                    <tr class="">
                        <td class="text-right" colspan="4">Duty ({{ $item->duty ?? 0 }} %)</td>
                        <td class="">{{  $item->duty_tk ?? 0 }}</td>
                    </tr>
                    <tr class="">
                        <td class="text-right" colspan="4">Charge ({{  $item->charge ?? 0 }} %)</td>
                        <td class="">{{  $item->charge_tk ?? 0 }}</td>
                    </tr>
                    <tr class="text-info">
                        <td class="text-right" colspan="4">Grandtotal </td>
                        <td class="">{{  $item->payable_amount ?? 0 }}</td>
                    </tr>
                    <tr class="text-success">
                        <td class="text-right" colspan="4">Paid Amount</td>
                        <td class="">{{  $item->paid_amount ?? 0 }}</td>
                    </tr>
                    <tr class="text-danger">
                        <td class="text-right" colspan="4">Due Amount </td>
                        <td class="">{{  ($item->payable_amount ?? 0)-($item->paid_amount ?? 0) }}</td>
                    </tr>
                </tfoot>
 </table>