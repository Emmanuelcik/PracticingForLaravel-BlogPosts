@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mb-4">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h5 class="card-title">{{$post->titulo}}</h5>
                    <p class="card-text">
                        {{$post->body}}

                    </p>
                    <p class="text-mutted mb-0">
                        <em>
                            &ndash; {{$post->user->nombre}}
                        </em>
                        {{$post->created_at->format("d M Y")}}
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
