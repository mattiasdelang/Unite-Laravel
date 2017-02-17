@extends('app')

@section('content')

            <h3>Maak nieuwe community</h3>
            <form id="login" action="/newcomm" method="POST">

                {!! csrf_field() !!}

                <input type="text" placeholder="naam" name="name" required>
                <button class="btnLogin" type="submit">Maak aan</button>

            </form>

@endsection
