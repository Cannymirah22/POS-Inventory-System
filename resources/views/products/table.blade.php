<table class="table table-bordered table-left">
    <body style="background-color:rgb(201, 207, 213)">
    <div>
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            
        </thead>
    </div>

        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td style="cursor: pointer;" data-toggle="tooltip" data-placement="right"
                        title="click to show product information"wire:click="ProductsDetails({{ $product->id }})">
                        {{ $product->product_name }}</td>
                    {{-- <td>{{ $product->description }}</td> --}}
                    <td>{{ $product->brand }}</th>
                    <td>{{ number_format($product->price, 2) }}</th>
                    <td>{{ $product->quantity }}</th>
                    <td>
                        @if ($product->alert_stock >= $product->quantity)
                            <span class="badge badge-danger"> Low Stock {{ $product->alert_stock }}</span>
                        @else
                            <span class="badge badge-success"> {{ $product->alert_stock }}</span>
                        @endif
                    </td>

                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#editproduct{{ $product->id }}"><i class="fa fa-edit"></i>Edit</a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                data-target="#deleteProduct{{ $product->id }}"><i class="fa fa-trash"></i>Delete</a>
                        </div>
                    </td>
                </tr>
    </div>
    <!-- Model corrects information -->
    <!-- model -->

    @include('products.edit')

    <!-- Model deletes user information -->
    <!-- model -->

    @include('products.delete')
    @endforeach

    {{-- {{ $products->links() }} --}}

    </tbody>
</table>
