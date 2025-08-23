@extends('layouts.master')
    

@section('title')
    Edit Gendre
@endsection

@section('content')
<form method="POST" action="/gendre/{{$gendre->id}}">
    @method('put')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf
  <div class="mb-3">
    <label class="form-label">Gendre Name</label>
    <input type="text" class="form-control" name="name" value="{{$gendre->name}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Gendre Description</label>
    <textarea name="description" class="form-control" cols="30" rows="10">{{$gendre->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection