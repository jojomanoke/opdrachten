@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name of product</th>
            <th scope="col">Bought amount</th>
            <th scope="col">Price of product</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customer->bought as $bought)
            <tr>
                <th scope="row">{{$bought->product->name}}</th>
                <td>{{$bought->amount}}</td>
                <td>€{{$bought->product->price}}</td>
                <td><button type="button" class="btn btn-info"><a style="color:white;" href="{{url('/serverside/customer'.'/'.$customer->id.'/product' . '/' . $bought->product->id . '/' . $bought->current_order)}}">See details</a></button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
@endsection