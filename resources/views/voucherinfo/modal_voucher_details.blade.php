    <table class="table table-bordered product-quotation-list">
                <thead>
                  <tr class="">
                    <th>#</th>
                    <th>Notes </th>
                    <th> Unit</th>
                    <th class="text-right">Amount </th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                        $total = 0;
                    @endphp
                    @foreach ($details as $detail)
                    @php
                        $total +=  ($detail->paid_amount ?? 0);
                      
                    @endphp
                    <tr class="">
                        <td class="">{{ ++$i }}</td>
                        <td class="">
                            {{ $detail->notes_values ?? ''  }}
                          </td>
                        <td class="">{{ $detail->no_of_notes ?? '' }}</td>
                        <td class="text-right">{{  ($detail->paid_amount ?? 0) }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="text-success">
                        <td class="text-right" colspan="3">Total </td>
                        <td class="text-right">{{number_format((float)($total ?? 0),2,'.','')}}</td>
                      
                    </tr>
                </tfoot>
 </table>