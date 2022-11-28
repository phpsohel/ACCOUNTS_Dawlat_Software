    <table class="table table-bordered product-quotation-list">
                <thead>
                  <tr class="">
                    <th>#</th>
                    <th>{{trans('file.product')}}</th>
                    <th>Qty</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                        $totalqty = 0;
                    @endphp
                    @foreach ($items as $item)
                    @php
                        $totalqty += $item->qty ?? 0;
                    @endphp
                    <tr class="">
                        <td class="">{{ ++$i }}</td>
                        <td class="">{{ $item->product->code ?? ''  }} , {{ $item->product->name ?? ''  }} ,
                            {{ $item->product->product_dimension ?? ''  }}
                          </td>
                        <td class="">{{ $item->qty ?? '' }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="">
                        <td class="text-right" colspan="2">Total Qty</td>
                        <td class="">{{  $totalqty ?? 0 }}</td>
                    </tr>
                </tfoot>
            </table>