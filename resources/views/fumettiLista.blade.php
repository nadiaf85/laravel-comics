@extends('layouts.app')
 
@section('page-title','Home Page')

@section('content')
    <main>
        <div class="fumetti">
            <div class="container">
                @foreach ($fumetti as $indice => $formato)
                <div class="card">
                    <div class="image">
                        <img src="{{$formato['thumb']}}" >
                    </div>
                    <div class="text">
                        {{ $formato['title'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div> 
    </main>
@endsection