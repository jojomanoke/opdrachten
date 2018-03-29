@extends('layouts.app')

@section('content')

    <table class="table">
        <a class="btn btn-success float-right" href="{{url('vakken/toevoegen')}}">Toevoegen</a>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naam</th>
            <th scope="col">Link</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vakken as $vak)

            <tr>
                <th scope="row">{{$vak->id}}</th>
                <td>{{$vak->naam}}</td>
                <td><a class="nav-link" href="{{url("/".$vak->url)}}">{{url("/".$vak->url)}}</a></td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection