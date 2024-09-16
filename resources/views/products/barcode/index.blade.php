@extends('layouts.app')

@section('content')
<body style="background-color:rgb(201, 207, 213)">
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
           <div class="col-md-12">
           <div class="card">
            
                <div class="card-header"><h4 style="float:left">Product List</h4>
                </div>
                    <div class="card-body">
                    <div id="print">
                    <div class="row">
                        @forelse ($productsBarcode as $barcode)
                        <div class="col-lg-3 col-md-4 col-sm-12 mt-3 text-center">
                            <div class="card">
                                <div class="card-body">
                                <img src="{{ asset('product/barcodes/' . $barcode->barcode) }}" alt="">
                                    <h4 class="text-center" style="padding: 1em; margin-top: 0.5em">{{ $barcode->product_code }}</h4>
                                </div>
                            </div>
                        </div>
                        @empty
                        <h2 class="center">No data</h2>
                        @endforelse
                    </div>
                    </div>

                    </div>
                </div>
           </div>
        </div>
    </div>
</div>


<style>

    .card-header{
      background-color:rgb(52,73,94);
      color: #fff;
 }
    
</style>
@endsection

