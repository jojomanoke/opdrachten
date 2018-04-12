@extends('layouts.app')

@section('content')

    @foreach($products as $product)
        @php $amount = $customer->bought->find($product->id)->amount; @endphp
        <div class="card">
            <div class="car-header">
                <p class="lead">Factuur voor {{$product->name}}</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p><strong>Naam:</strong> {{$customer->first_letters}} {{$customer->lastname}}</p>
                    </div>
                    <div class="col">
                        <p><strong>Adres:</strong> {{$customer->address}} {{$customer->town->name}}</p>
                    </div>
                    <div class="col">
                        <strong>ZIP-code: </strong>{{$customer->zip}}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <strong>Product naam: </strong>{{$product->name}}
                    </div>
                    <div class="col">
                        <strong>Prijs per stuk: </strong>€{!! number_format($product->price, 2) !!}
                    </div>
                    <div class="col">
                        <strong>Aantal gekocht: </strong>{{$amount}}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <strong>Subtotaal: (exclusief btw)</strong>€{{number_format($product->price * $amount, 2)}}
                    </div>
                    <div class="col">
                        <strong>BTW: </strong>{{$product->btw}}%
                    </div>
                    <div class="col">
                        <strong>Totaal (inclusief BTW): </strong>€{{number_format(((($product->price/100)*$product->btw) * $amount) * $product->price, 2)}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection