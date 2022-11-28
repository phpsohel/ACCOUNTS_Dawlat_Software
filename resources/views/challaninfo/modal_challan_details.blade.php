    <table class="table table-bordered product-quotation-list">
                <thead>
                  <tr class="">
                    <th>#</th>
                    <th>PO Number</th>
                    <th>Description 
                        <br>
                        (Product Details)
                    </th>
                    <th>Unit
                        <br class="">
                        ( Single Count)
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                        $totalqty = 0;
                    @endphp
                    @foreach ($details as $detail)
                    @php
                        $totalqty += $detail->qty ?? 0;
                    @endphp
                    <tr class="">
                        <td class="">{{ ++$i }}</td>
                        <td class="">{{ $detail->po_number ?? '' }}</td>
                        <td class="">
                            {!! $detail->item_details ?? ''  !!}
                          </td>
                        <td class="">{{ $detail->qty ?? '' }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="">
                        <td class="text-right" colspan="3">Total Qty</td>
                        <td class="">{{  $totalqty ?? 0 }}</td>
                    </tr>
                </tfoot>
            </table>