@extends('layouts.app')

@section('content')
    <h1>ID,Sports,Food,Music</h1>
            @foreach ($categories as $category)
                <li>ID:{{ $category->id }} Sports:{{ $category->sports }} Food:{{ $category->food }} Music:{{ $category->music }}</li>
            @endforeach
        
        <?php
        var_dump ($categories);
        ?>
            
        {!! Form::model($category, ['route' => 'categories.store']) !!}

        {!! Form::label('sports', 'メッセージ:') !!}
        {!! Form::text('sports') !!}
                {!! Form::label('music', 'メッセージ:') !!}
        {!! Form::text('music') !!}
                {!! Form::label('food', 'メッセージ:') !!}
        {!! Form::text('food') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    
            {!! link_to_route('categories.create', '新規メッセージの投稿') !!}
@endsection
