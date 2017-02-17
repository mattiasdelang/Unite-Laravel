@extends('app')

@section('content')


            <form id="login" action="/login" method="POST">
                {!! csrf_field() !!}

                 <input type="email" placeholder="Emailadres" name="email" value="{{ old('email') }}" required>
                 <input type="password" placeholder="wachtwoord" name="password" required>
                 <button class="btnLogin" type="submit">Meld je aan</button>

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
