@extends('layouts.master')
    
@section('title')
    Tampil Gendre
@endsection

@section('content')

<a href="/gendre/create" class="btn btn-primary btn-sm my-2">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($gendres as $item)
    <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            <td>
                <a href="/gendre/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                <a href="/gendre/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <form action="/gendre/{{$item->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    
                    <input type="submit" class="btn btn-warning btn-sm" value="Delete">
                </form>
            </td>
    </tr>
@empty
    <tr>
        <td>Tidak ada data Gendre</td>
    </tr>
@endforelse
  </tbody>
</table>

@endsection