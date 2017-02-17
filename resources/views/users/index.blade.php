@extends('app')

@section('content')

    @if(Session::has('message'))
        <div class="alert alert-danger">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    <a href="/logout">Meld je af</a>
@endsection
