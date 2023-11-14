@extends('layout')

@section('title')
    {{ $category }}
@endsection

@section('content')
    <img src="{{ asset("storage/static_images/$category.jpg") }}" alt=""
        class="absolute w-screen h-screen object-cover left-0 top-0 z-[-1] brightness-[0.5]">
    <div class="space-y-2 preset-text-white">

    </div>
@endsection
