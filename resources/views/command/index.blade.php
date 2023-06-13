
@extends('layout.master')
@section('title')
page index 
@endsection
@section('main')
     <h1>gestion des commands : </h1>
      <table class="table table-dark table-striped">
     <thead>
    <tr>
      <th scope="col">titre</th>
      <th scope="col">nombre </th>
      <th scope="col">image</th>
      <th scope="col">prix</th>
  
      <th scope="col">catégories</th>
      <th scope="col">actions</th>
    </tr>

    <tbody>
     


        @foreach ($commands as $c )
        <tr>
            
            <td>{{ $c->titre }}</td>
            <td>{{ $c->nombre }}</td>
            {{-- <td>{{ $c->titre }}</td> --}}
            <td>


                <img width="200px" src="storage/{{$c->image  }}" alt="iamge">
            </td>
            <td>{{ $c->prix }}</td>
            <td>{{ $c->catégorie_id }}</td>

            <td>

                <form method="post" action="{{ route("commad.destroy",$c->id) }}">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger">delete</button>
                </form>

                
                <form method="get" action="{{ route("commad.edite",$c->id) }}">
                    @csrf

                    <button class="btn btn-info">update</button>
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
  </thead>
      </table>
@endsection
