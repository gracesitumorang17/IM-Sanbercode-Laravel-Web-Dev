@extends('layouts.master')
    
@section('title')
    Detail Gendre
@endsection
@section('content')

<h1 class="text-primary">{{$gendre->name}}</h1>
<p>{{$gendre->description}}</p>

<a href="/gendre" class="btn btn-secondary">Kembali</a>
@endsection