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

    public function productSelect($uid, $pid, $oid){
        $customer = Customer::find($uid);

        $orders = $customer->bought->where('current_order', $oid)->all();

        if(count($orders) > 1){
            $products = Product::where('id', $orders[0]->product_id)->orWhere('id', $orders[1]->product_id)->get();
        }
        else{
            $products = Product::where('id', $orders[0]->product_id)->get();
        }

        return view('serverside.customers.product', ['customer' => $customer, 'products' => $products]);
    }
}
