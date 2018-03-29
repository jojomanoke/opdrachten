@extends('layouts.app')

@section('content')

    @foreach($customer->bought as $bought)
    {{$bought}}<br>
    @endforeach
    
@endsection