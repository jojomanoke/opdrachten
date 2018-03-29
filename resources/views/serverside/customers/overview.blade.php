@extends('layouts.app')

@section('content')


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <th scope="row">{{$customer->id}}</th>
                <td>{{$customer->first_letters}}</td>
                <td>{{$customer->lastname}}</td>
                <td><button type="button" class="btn btn-info"><a style="color:white;" href="{{url('/serverside/customer'.'/'.$customer->id.'/overview')}}">See orders</a></button></td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection