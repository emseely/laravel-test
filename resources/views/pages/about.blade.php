@extends ('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<p>Hello, my name is {{$name}}.</p>
    @if(count($professions)>0)
        @foreach($professions as $profession)
        <ul>
        <li>
            {{$profession}}
        </li>
        </ul>
        @endforeach
    @endif
@endsection
