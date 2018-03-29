@extends('layouts.app')

@section('content')

    {{Form::open(['url' => 'vakken/opslaan'])}}
    {{csrf_field()}}

    {{Form::fullText('naam', null, 'Naam van het vak')}}
    {{Form::fullText('url', null, 'Url voor dit vak')}}
    {{Form::sub()}}
    {{Form::close()}}
    
@endsection