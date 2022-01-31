@extends('layouts.main')
@section('content')

<h1>Show: </h1>
<h3>{{ $movie -> title }}</h3>
<h4>{{ $movie -> subtitle }}</h4>
<p>{{ $movie -> release_date }}</p>
    
@endsection 