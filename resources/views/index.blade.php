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
        <br>
        <br>
        ------Debug用------
        <br>
        @if (Auth::check())
            ログインしているユーザー名:{{ Auth::user()->name }}
            <br>
            {!! link_to_route('logout.get', 'Logout') !!}
            {!! link_to_route('events.top', 'TOPへ戻る') !!}
        @else
        {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        <br>
        {!! link_to_route('login', 'Login') !!}
        <br>
        @endif
        <br>
        ------Debug用おわり------
        <br>
        <br>
        
@endsection

