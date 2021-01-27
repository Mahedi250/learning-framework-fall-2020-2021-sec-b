@extends('layout/main')



@section('navbar')
<a href="{{route('home.index')}}"> Home</a> | 
<a href="{{route('home.create')}}"> Create New</a> | 
<a href="{{route('home.stdlist')}}"> Student List</a> | 
<a href="/home"> logout</a> 
@endsection