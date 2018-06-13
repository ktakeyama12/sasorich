@extends('layouts.app')

@section('content')
    <h1>Lunch List</h1>
        @foreach ($events as $event)
            {{ $event->month }}/{{ $event->day }} {{ $event->timefrom }}-{{ $event->timeto }}
            <br>
            {{ $event->title }}
            <br>
            {{ $event->theme }}
            
            {!! Form::model($event, ['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除') !!}
            {!! Form::close() !!}
        @endforeach
        
        {!! link_to_route('events.create', '新規Eventの投稿') !!}
        
        
@endsection
