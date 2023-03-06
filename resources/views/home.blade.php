@extends('layouts.app')

@section('content')
    
    <div>         
        <div class="m-4">
            <h1>Статьи</h1></div>

        @foreach ($posts_title as $ptitle)
            <div class="m-4">

                <div class="card bg-light">

                    <div class="card-body pt-0 m-4">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="text-muted text-sm"><b>{{ $ptitle['title'] }}</b></h4>
                                <p class="text-muted text-sm">{{ $ptitle['text'] }}</p>

                            </div>
                            <div class="col-4">
                                <img src="{{ $ptitle['img'] }}" alt="" class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
            </div>




    </div>

    
    @endforeach
    
@endsection
