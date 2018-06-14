@extends('layouts.app')

@section('content')

    <h1>id = {{ $events->id }} のタスク詳細ページ</h1>

    <p>タスク；{{ $task->title }} <br>ステータス；{{ $task->status }}</p>

    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection