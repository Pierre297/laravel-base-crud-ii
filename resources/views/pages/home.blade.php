@extends('layouts.main')
@section('content')

<h3>
    <a href="{{ route('create') }}">New Movie</a>
</h3>
<h3>List</h3>
<ul>
    @foreach ($movies as $movie)
    <li>
        <a href="{{ route('show', $movie -> id) }}">
            {{$movie -> title}}
        </a>
         - {{$movie -> release_date}}
         - <a href="{{ route('edit', $movie -> id)}}">EDIT</a>
    </li>
        
    @endforeach
</ul>
    
@endsection