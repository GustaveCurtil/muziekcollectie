@extends('_layouts.head')


@section('body')
<body>
    <header>
        <h1>
            @if (!request()->routeIs('home'))
            <a href="{{ route('home') }}">MINEZIMMER</a>
            @else
            MINEZIMMER
            @endif
        </h1>
        @auth
        <a href="{{ route('settings') }}">{{$user->name}}</a>
        @endauth
    </header>
    <main>
        <section id="content">
            <div>
                @foreach ($rooms as $room)  
                <a href="{{ url('/' . $room->slug)}}"><span>@include('_partials.icon_world')</span>{{$room->name}}</a> 
                @endforeach
            </div>
            
        </section>
    </main>
    <footer>
        <a href="{{  url('/machen') }}"><button>+</button></a>
    </footer>
</body>

@endsection
