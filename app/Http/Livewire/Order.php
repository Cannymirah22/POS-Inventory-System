<?php

namespace App\Http\Livewire;

use App\Cart;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Livewire\Component;

class Order extends Component
{

    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

        //
    }
    public function __construct()
    {
        $this->productInCart = Cart::orderBy('id',"DESC")->get();
        
    }
    public $orders, $products = [], $product_name, $message = '', $productInCart;

    public $pay_money = '', $balance = '';
    public $cartQty = '', $cartPrice = '';

    public function mount()
    {
        $this->products = Product::all();
        $this->productInCart = Cart::all();
    }

    public function InsertoCart()
    {
        $countProduct = Product::where('product_name', $this->product_name)->first();

        if (!$countProduct) {
            return $this->message = 'Product not found';
        }

        $countCartProduct = Cart::where('product_id', $this->product_name)->count();

        if ($countCartProduct > 0) {
            return $this->message = 'product ' . $countProduct->product_name . ' already in the cart, check the quantity again ' ;
        }

        $add_to_cart = new Cart;
        $add_to_cart->product_id = $countProduct->id;
        $add_to_cart->product_qty = 1;
        $add_to_cart->product_price = $countProduct->price;
        $add_to_cart->user_id = auth()->user()->id;
        $add_to_cart->save();
        $this->productInCart->prepend($add_to_cart);
        $this->product_name = '';
        return $this->message = 'Add successful products';
       
    }

    public function IncrementQty($cartID){
        $carts = Cart::where('id', $cartID)->first();
        $carts->increment('product_qty');
        $updatePrice = $carts->product_qty * $carts->product->price;
        $carts->update(['product_price' => $updatePrice]);
        $this->mount();
    }

    public function DecrementQty($cartID){
        $carts = Cart::find($cartID);
        if ($carts->product_qty == 1) {
            return session()->flash('info', 'Product' . $carts->product->product_name. 
        ' The number cannot be lower than 1. Add quantities or remove products from invoices');
        }
        $carts->decrement('product_qty');
        $updatePrice = $carts->product_qty * $carts->product->price;
        $carts->update(['product_price' => $updatePrice]);
        $this->mount();
    }

    public function removeProduct($cartID){
        $deleteCart = Cart::find($cartID);
        $deleteCart->delete();
        if($this->pay_money != '') {

        }

        session()->flash('success', 'Products removed from invoice.');
        $this->productInCart = $this->productInCart->except($cartID);
    }

    public function render()
    {
        $order = Cart::all();
        if ($this->pay_money != '') {
        $totalAmount = $this->pay_money - $this->productInCart->sum('product_price');
        $this->balance = $totalAmount;
        }
        return view('Livewire.order',compact('order'));
    }
    
}
?>
