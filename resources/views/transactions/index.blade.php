<table class="table table-bordered table-left">
    <div>
        <thead>
            <tr>
                <th>#</th>
                <th>Invoice code</th>
                <th>Customer</th>
                <th>Phone number</th>
                <th>Product name</th>
                <th>Amount</th>
                <th>Unit Price</th>
                <th>Total Funds</th>
                <th>Abate</th>
                <th>Excess money</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($getAllTrans as $key => $trans)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $trans->order_id }}</td>
                    <td style="cursor: pointer;" data-toggle="tooltip" data-placement="right"
                        title="click to show product information" wire:click="ProductsDetails({{ $trans->order_id }})">
                        {{ $trans->name }}</td>
                    <td>{{ $trans->phone }}</td>
                    <td>{{ $trans->product_name }}</th>
                    <td>{{ $trans->amount }}</th>
                    <td>{{ $trans->unitprice }}</th>
                    <td>{{ $trans->paid_amount - $trans->balance }}</th>
                    <td>{{ $trans->paid_amount }}</th>
                    <td>{{ $trans->balance }}</th>
                    </td>

                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-info" data-toggle="modal"
                                data-target="#editproduct{{ $trans->order_id }}"><i class="fa fa-edit"></i>Edit</a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                data-target="#deleteProduct{{ $trans->order_id }}"><i
                                    class="fa fa-trash"></i>Delete</a>
                        </div>
                    </td>
                </tr>
    </div>

    <!-- model -->

    {{-- @include('products.edit') --}}


    <!-- model -->

    {{-- @include('products.delete') --}}
    @endforeach

    {{-- {{ $products->links() }} --}}

    </tbody>
</table>
