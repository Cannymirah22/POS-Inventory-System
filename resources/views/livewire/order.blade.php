<div class="col-lg-12">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <body style="background-color:rgb(201, 207, 213)">

                <div class="card-header">
                    <h4 style="float:left">ORDER PRODUCTS</h4><a href="#" style="float:right" class=""
                        data-toggle="modal" data-target="#addUser"><i class=""></i></a>
                </div>
                <div class="my-2">
                    <form wire:submit.prevent="InsertoCart">
                        @csrf
                        <input type="text" name="" wire:model="product_name" id=""
                            class="form-control" placeholder="Enter Product Name">
                    </form>
                </div>
                <form action="{{ route('orders.store') }}" method="post">
                    @csrf
                    <div class="card-body">

                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ $message }}</div>
                        @elseif(session()->has('info'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-info">{{ session('info') }}</div>
                        @elseif(session()->has('info'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                </form>
                <table class="table table-bordered table-left">
                    <thead>
                        <p><strong><center style="color: #fff;">QWESI VENTURES INVENTORY SYSTEM</center></strong></p>
                        <tr>
                            <th style="color: #fff;">#</th>
                            <th style="color: #fff;">Product Name</th>
                            <th style="color: #fff;">Amount</th>
                            <!-- <th style="color: red;">Phone number</th> -->
                            <th style="color: #fff;">Price</th>
                            {{-- <th style="color: #fff;">Dis (%)</th> --}}
                            <th style="color: #fff;" colspan="6">Total</th>
                            
                            <!-- <th><a href="#" class="btn btn-sm btn-success rounded-circle add_more"><i class="fa fa-plus-circle"></i></a></th> -->
                        </tr>
                    </thead>
                    <tbody class="addMoreProduct">
                        <form action="{{ route('orders.store') }}" method="POST">
                            @csrf
                            @foreach ($productInCart as $key => $cart)
                                <tr>
                                    <td class="no">{{ $key + 1 }}</td>
                                    <td width="30%">
                                        <input type="text" class="form-control"
                                            value="{{ $cart->product->product_name ?? 'None' }}">
                                    </td>

                                    <td width="15%">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <button wire:click.prevent="DecrementQty({{ $cart->id }})"
                                                    class="btn-sm btn-danger rounded-circle">-</button>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">{{ $cart->product_qty }}</label>
                                            </div>
                                            <div class="col-md-2">
                                                <button wire:click.prevent="IncrementQty({{ $cart->id }})"
                                                    class="btn-sm btn-success rounded-circle">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control"
                                            value="{{ $cart->product->price ?? 'None' }}">
                                    </td>
                                    {{-- <td>
                                    <input type="number" class="form-control">
                                </td> --}}
                                    <td>
                                        <input type="number" class="form-control"
                                            value="{{ $cart->product_qty * $cart->product->price }}">
                                    </td>
                                    <td><a href="#" class="btn btn-sm btn-danger delete rounded-circle"><i
                                                class="fa fa-times"
                                                wire:click="removeProduct({{ $cart->id }})"></i></a></td>
                                </tr>
                            @endforeach
                        </form>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                @foreach ($productInCart as $key => $cart)
                    <input type="hidden" name="product_id[]" class="form-control" value="{{ $cart->id }}">
                    <input type="hidden" name="quantity[]" value="{{ $cart->product_qty }}">
                    <input type="hidden" name="price[]" class="form-control price"
                        value="{{ $cart->product->price ?? 'None' }}">
                    <input type="hidden" name="discount[]" class="form-control discount">
                    <input type="hidden" name="total_amount[]" class="form-control total_amount"
                        value="{{ $cart->product_qty ?? ('None' * $cart->product->price ?? 'None') }}">
                @endforeach
                <div class="card-header">
                    <h4>Total GH&#8373;<b class="total"> {{ $productInCart->sum('product_price') }}</b>.00</h4>
                    
                    <div class="card-body">
                        <div class="panel">
                            <div class="row">
                                <div class="btn-group">
                                    <button type="button" onclick="PrintReceiptContent('print')"
                                        class="btn btn-dark"><i class="fa fa-print"></i>Print</button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" onclick="PrintReceiptContent('print')"
                                        class="btn btn-primary"><i class="fa fa-history"></i>History</button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" onclick="PrintReceiptContent('print')"
                                        class="btn btn-danger"><i class="fa fa-cubes"></i>Report</button>
                                </div>
                                <table class="table table-striped">
                                    <tr>
                                        <tr>
                                            <td>
                                                <label for="" style="color: #fff;">Customer Name</label>
                                                <input type="text" name="customer_name" id="" class="form-control">
                                            </td>
                                            <td>
                                                <label for="" style="color: #fff;">Customer Phone</label>
                                                <input type="number" name="customer_phone" id="" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="color: #fff;">Payment Methods</td>
                                        </tr>
                                        
                                </table>

                                <span class="radio-item">
                                    <input type="radio" name="payment_method" id="payment_method" class="true"
                                        value="cash" checked="checked">
                                    <label for="payment_method"><i class="fa fa-money-bill" text-success></i> Cash </label>
                                </span>

                                <span class="radio-item">
                                    <input type="radio" name="payment_method" id="payment_method" class="true"
                                        value="bank-transfer">
                                    <label for="payment_method"><i class="fa fa-calculator" text-danger></i> Mobile Money </label>    
                                </span>

                                <span class="radio-item">
                                    <input type="radio" name="payment_method" id="payment_method" class="true"
                                        value="credit card">
                                    <label for="payment_method"><i class="fa fa-credit-card" text-info></i> Credit Card</label>     
                                </span>
                                </td>
                            </div>

                            <td>
                                Payment
                                <input type="number" wire:modal="pay_money" name="paid_amount" id="paid_amount"
                                    class="form-control paid_amount">
                            </td>

                            <td>
                                Returning Change
                                <input type="number" wire:modal="balance" readonly name="balance" id="balance"
                                    class="form-control balance">
                            </td>

                            <td>
                                <button class="btn-primary btn-lg btn-block mt-5">Save</button>
                            </td>

                            <td>
                                <button class="btn-danger btn-lg btn-block mt-2">Cancel</button>
                            </td>
                            <div class="text-left" style="text-align: left">
                                <a href="#"class="text-danger  text-left"> <i
                                        class="fa fa-sign-out-alt"></i></a>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<style>
   
    .card{
        background: rgb(52, 73, 94);
        color: #fff;
    }
</style>
