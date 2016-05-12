@extends('layouts.master')


@section('title')
    Show all safety concerns
@stop

@section('content')



    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <h3> View my safety concerns </h3>

    @if(sizeof($incidents) == 0)
    You have not added any safety concerns.
    @else


    <div class= 'incidents'>
        @foreach($incidents as $incident)
            <h5>{{$incident->type}}</h5>
            <p>{{$incident->text}}</p>
            <a href='/edit/{{$incident->id}}'>Edit</a>
            <a href='/confirm-delete/{{$incident->id}}'>Delete</a><br>
        @endforeach
    </div>

        @endif
@stop
