@extends('layouts.app')

@section('content')
    <script src="{{asset('js/calendar/calendar.js')}}" defer></script>

    <div id="calendar"></div>
    <div id="modal" class="modal modal-fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create a new event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{Form::open(['url' => 'clientside/calendar/save', 'method' => 'POST'])}}
                    {{csrf_field()}}

                    {{Form::fullText('title', null, 'Titel van het evenement')}}
                    {{Form::label('start_label', 'Starting time', ['class' => 'form-label'])}}
                    <input type="datetime-local" id="start" name="start" class="form-control" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}T{{\Carbon\Carbon::now()->addHours(2)->format('H:i')}}">
                    {{Form::label('end_label', 'ending date time', ['class' => 'form-label'])}}
                    <input type="datetime-local" id="end" name="end" class="form-control" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}T{{\Carbon\Carbon::now()->addHours(2)->format('H:i')}}">
                    {{Form::label('allDay_label', 'Is the event all day?', ['class' => 'form-label'])}}
                    {{Form::select('allDay', ['true' => 'Yes', 'false' => 'No'], 'yes' , ['class' => 'form-control'])}}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{Form::close()}}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="result"></div>

@endsection