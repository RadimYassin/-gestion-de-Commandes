
@extends('layout.master')

@section('main')
<form method="POST" action="{{route("commad.store") }}" enctype="multipart/form-data">
{{-- <div class="mb-3">
    @if ($errors->any())
    <ul class="alert alert-danger">
        <h6>errors:</h6>
    @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
    @endforeach
    </ul>

    @endif --}}

@csrf
<div class="mb-3">
    <label for="titre" class="form-label">titre</label>
    <input type="text" class="form-control" name="titre" placeholder="titre">

  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">nombreCommande</label>
    <input type="numbre" class="form-control" name="nombre" placeholder="nombre">

  </div>
  <div class="mb-3">
    <label  class="form-label">image :</label>
    <input type="file" name="image">
  </div>

  <div class="mb-3">
    <label for="prix" class="form-label">price</label>
    <input type="numbre" class="form-control" name="prix" placeholder="type">

  </div>
  <select class="form-select" name="catégorie_id" aria-label="Default select example">
    <option selected>Open this select catégories </option>

    @foreach ($data as $a )
    <option value="{{  $a->id }}">{{ $a->id }}</option>
    @endforeach
  </select>

  <div class="d-grid">
   <button type="submit" class="bnt btn-primary btn-block">submit</button>
  </div>

</form>
@endsection
