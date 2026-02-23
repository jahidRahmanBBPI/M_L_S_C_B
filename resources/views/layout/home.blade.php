@extends('layout.app')
@section('content')
    

{{-- <h1>This is my content.</h1> --}}
@include('component.hero')
@include('component.howWeDo')
@include('component.pricing')
@include('component.team')
@include('component.newsLetter')


@endsection