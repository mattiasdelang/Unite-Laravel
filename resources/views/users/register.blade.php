@extends('app')

@section('content')

            <form id="signup" action="/register" method="POST">


                {!! csrf_field() !!}
                <input type="text" name="firstname" value="{{ old('firstname') }}" placeholder="voornaam" required>
                <input type="text" name="lastname" value="{{ old('lastname') }}" placeholder="achternaam" required>

                <input type="email" name="email" value="{{ old('email') }}" placeholder="emailadres" required>

                <input type="password" name="password" placeholder="wachtwoord" required>
                <input type="password" name="password_confirmation" placeholder="wachtwoord" required>

                <input type="text" name="street" value="{{ old('street') }}" placeholder="straat" required>
                <input type="text" name="number" value="{{ old('number') }}" placeholder="nummer" required>
                <input type="text" name="postcode" value="{{ old('number') }}" placeholder="postcode" required>
                <input type="text" name="city" value="{{ old('number') }}" placeholder="gemeente" required>

                <button class="btnLogin" type="submit">Registreer</button>
            </form>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

@endsection
