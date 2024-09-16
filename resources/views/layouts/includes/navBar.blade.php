<a href="#" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-outline rounded-pill"><i class="fa fa-list"></i></a>
<a href="{{ route('users.index') }}" class="btn btn-outline rounded-pill"> <i class="fa fa-user"></i>Users</a>
<a href="{{ route('products.index') }}" class="btn btn-outline rounded-pill"> <i class="fa fa-box"></i>Products</a>
<a href="{{ route('orders.index') }}" class="btn btn-outline rounded-pill"> <i class="fa fa-desktop"></i>Cashier</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-file"></i>Reports</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-money-bill"></i>Transactions</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-chart-bar"></i>Suppliers</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-users"></i>Customers</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-truck"></i>Incoming</a>
<a href="{{ route('products.barcode') }}" class="btn btn-outline rounded-pill"> <i class="fa fa-barcode"></i>Barcode</a>


<style>
    .btn-outline {
        border-color: rgb(52,73,94);
        color: rgb(52,73,94);;
        
    }
 
    .btn-outline:hover {
        background: rgb(52,73,94);
        color: #fff;
    }

    .btn-outline:active {
  transform: translateY(1px);
  box-shadow: none;
}

.btn-outline:focus {
  outline: none;
}

.btn-outline:hover {
  background-color: rgb(52,73,94);
  color: #fff;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3);
}
 
 </style>
 
