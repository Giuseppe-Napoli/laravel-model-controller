@extends('layouts.main')


@section('content')
    <main>

        <h1>Catalago Film</h1>
        <div class="container mt-5 box">
            @foreach ($movies as $movie)
            <div class="box-card">
                <ul>
                    <li class="mb-3">
                      <strong>Title:</strong> {{$movie ['title']}}
                    </li>
                    <li class="mb-3">
                       <strong>Vote:</strong> {{$movie ['vote']}}
                    </li>
                    <li class="mb-3">
                       <strong>Nationality:</strong> {{$movie ['nationality']}}
                    </li>
                </ul>
            </div>
            @endforeach
            
        </div>
        
        
    </main>
@endsection