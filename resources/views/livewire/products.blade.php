<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 style="float: left" class="text-white">Add Product</h4>
                        <a href="#" style="float: right" class="btn btn-dark" data-toggle="modal"
                            data-target="#addproduct">
                            <i class="fa fa-plus-circle"></i> Add New Products </a>
                      </div>
                    <div class="card-body">
                        <table class="table table-bordered table-left">
                            @include('products.table')
                        </table> 
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-white">PRODUCT DETAILS</h4>
                    </div>
                    <div class="card-body">
                        @include('products.product_detail')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
