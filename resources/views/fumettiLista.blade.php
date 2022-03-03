@extends('layouts.app')
 
@section('page-title','Home Page')

@section('content')
    <div class="fumetti">
        <div class="container">
            @foreach ($fumetti as $indice => $formato)
            <div class="card">
                <img src="{{$formato['thumb']}}" >
                <div class="overlay">
                    {{ $formato['title'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div> 
@endsection