@extends('layouts.master');
@section('bodycontent')
    <h1>Directions</h1>
    @foreach($dir as $d)
        <li>{{$d}}</li>
        @endforeach
    @endsection
