@extends('layouts.app')
 
@section('content')
<example-component></example-component>
<test></test>
<ul>
    @foreach($games as $game)
        <li><a href="/game/{{ $game->id }}">{{ $game->name }}</a></li>
    @endforeach
</ul>
 
@endsection
