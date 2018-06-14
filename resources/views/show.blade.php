@extends('layouts.app')

@section('content')

    <h1>{{ $events->title }} の詳細ページ</h1>
    <li>Month:{{ $events->month }}</li>
                <li>Day:{{ $events->day }}</li>
                <li>Time From:{{ $events->timefrom }}</li>
                <li>Time To:{{ $events->timeto }}</li>
                <li>Place:{{ $events->place }}</li>
                <li>Theme:{{ $events->theme }}</li>
                <li>Max People:{{ $events->maxpeople }}</li>

@endsection