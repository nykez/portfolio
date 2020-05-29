@extends('_layouts.master')

@section('content')

    <div class="container m-auto flex flex-col justify-center items-center py-16 min-h-screen">
        <div class="w-full text-center mb-20">
            <div class="relative mx-auto rounded-full h-48 w-48 border-gray-600 border-2 mb-4" style="padding: .375rem">
                <div class="rounded-full border-2 border-gray-600" style="padding: .375rem">
                    <img src="https://i.imgur.com/MpijUOU.jpg" alt="hero" class="rounded-full block" />
                </div>
            </div>
            <div class="leading-tight text-3xl my-2 text-white font-bold">Nykez</div>
            <div class="text-gray-400 leading-tight mb-2">Software Engineerr</div>
            <div class="flex justify-between max-w-sm mx-auto mt-5">
                <a href="{{ $page->github }}" class="inline-block rounded-full bg-gray-700 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
                    <i class="fab fa-github fa-fw"></i>
                    Github
                </a>
                <a href="{{ $page->twitter }}" class="inline-block rounded-full bg-blue-600 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
                    <i class="fas fa-plug"></i>
                    Wakatime
                </a>
                <a href="{{ $page->gmodstore }}" class="inline-block rounded-full bg-blue-700 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
                    <i class="far fa-gamepad fa-fw"></i>
                    Gmodstore
                </a>

                <a href="mailto:nykezgaming@live.com" class="inline-block rounded-full bg-blue-700 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
                    <i class="far fa-mailbox fa-fw"></i>
                    Email
                </a>
            </div>
        </div>

        <div class="w-full text-center mt-8">
            <h1 class="text-3xl lg:text-6xl font-black text-white mb-10">Coming Soon.</h1>

        </div>
    </div>


@endsection
