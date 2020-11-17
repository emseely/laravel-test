{{-- VV looks in views>>layouts>>app --}}
@extends ('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        {{-- ^^from compact($title) in controller --}}
        <p>This is a test!</p>
@endsection
