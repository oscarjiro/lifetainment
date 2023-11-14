@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <!-- Wallpaper -->
    <img src="{{ asset('storage/static_images/halloween.jpg') }}" alt=""
        class="absolute w-screen h-[calc(50vh+32px)] object-cover left-0 top-[calc(var(--navbar-height)*2)] z-[-1] brightness-[0.5]">

    <!-- Main Header -->
    <section class="h-[50vh] flex items-center mb-[50px]">
        <div class="space-y-2 preset-text-white">
            <x-logo class="text-9xl" />
            <x-tagline class="text-5xl" />
        </div>
    </section>

    <!-- Magazine Carousel -->
    <section class="space-y-4 mb-[50px]">
        <div class="text-upperwide text-3xl font-light">
            Explore our magazines
        </div>
        <div class="w-full overflow-x-scroll flex space-x-8 ">
            <x-magazine-item title="Magazine Title" link="/" />
            <x-magazine-item title="Magazine Title" link="/" />
            <x-magazine-item title="Magazine Title" link="/" />
            <x-magazine-item title="Magazine Title" link="/" />
        </div>
    </section>

    <!-- News -->
    <section class="px-32 space-y-8">
        <div class="text-7xl">What's up?</div>
        <div class="flex flex-col space-y-8">
            <x-news-item title="Onto Movement Wide Proud Sat Carried Class Planned Look Fact State" author="John Doe"
                preview="Further block amount aid farmer syllable worried line strength week spider gas liquid tip average
                        gone statement there pupil education lamp nest leaf known call tired vertical let art expression
                        molecular by road street strange number wool shelter alphabet merely mine such station told free end
                        indicate handsome excited introduced disappear applied cow corner identity brown fog too vessels
                        prepare agree fire asleep opportunity smooth thousand ask citizen leader audience knife which"
                link="/" category="Fashion" />
            <x-news-item title="{{ ucwords('garden divide let smaller replied buried cross simple') }}" author="Jane Doe"
                preview="Fairly model since shelter sale year bigger heading soap ear 
                        meal sweet skill too full clock hang structure sight largest well 
                        size moment parentFurther block amount aid farmer syllable worried 
                        line strength week spider gas liquid tip average"
                link="/" category="Beauty" />
        </div>
    </section>
@endsection
