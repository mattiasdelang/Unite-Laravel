@extends('app')

@section('content')

<ul>
    <li>
        <h3>Kies een community</h3>
        <form action="/choose" method="post">
            {!! csrf_field() !!}
            @foreach($communities as $community)
            <input type="radio" name="communities" value="{{$community->id}}">{{$community->name}}, {{\Carbon\Carbon::parse($community->created_at)->diffForHumans() }}, {{$community->firstname}}, {{$community->lastname}} <br/>
            @endforeach
            <button class="btnLogin" type="submit">Kies deze community</button>
        </form>
    </li>

    <li>
        <h3><a href="/newcomm"> Maak nieuwe community</a></h3>

    </li>

</ul>
@endsection
