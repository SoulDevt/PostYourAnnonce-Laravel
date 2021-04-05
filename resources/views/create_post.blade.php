@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">Titre de l'annonce</label>
      <input type="text" name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le titre de l'annonce">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description</label>
      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
      <label for="author">Author: </label>
      <input type="text"  name='author' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

@endsection