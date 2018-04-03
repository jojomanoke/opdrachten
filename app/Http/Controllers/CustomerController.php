<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function overview(){
        $customers = Customer::all();

        return view('serverside.customers.overview', ['customers' => $customers]);
    }

    public function allBought($id){
        $customer = Customer::find($id);

        return view('serverside.customers.personal', ['customer' => $customer]);
    }

    public function productSelect($uid, $pid){
        $customer = Customer::find($uid);
        $product = Product::find($pid);
        $amount = $customer->bought->where('id', $pid);

        return view('serverside.customers.product', ['customer' => $customer, 'product' => $product, 'amount' => $amount]);
    }
}
