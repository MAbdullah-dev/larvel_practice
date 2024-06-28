@extends('layouts.layout')
@section('content')
    home page
@endsection
@section('title')
home
@endsection
@push('scripts')
    <script src="{{ asset('js/example.js') }}"></script>
@endpush



































{{-- <x-layout>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">contact</a>
    </nav>
    <h1> Hello World from home page! </h1>
    {{ 5 + 200 }}

    <br><br>

    {{ "hello World" }}

    <br><br>

    {{ "<h1> helloworld </h1>" }}

    {!! "<h1> helloworld </h1>" !!}

    {{-- {!! "<script> alert('helloworld') </script>" !!} --}}
    {{-- comments --}}
    {{-- @php
        $colors= ["Blues","greens","red","Ahmed"];
    @endphp
    <ul>
        @foreach ($colors as $color)
        <li>
            {{ $color }}
        </li>
        @endforeach
    </ul>
</x-layout> --}}
