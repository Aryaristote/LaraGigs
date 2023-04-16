@extends('layouts.app')

@section('content')

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($listings) == 0)
        @foreach($listings as $listing)
            <!-- Spliting tags into an array -->
            @php
                $tags = explode(",", $listing['tags']);
            @endphp
            <!-- ----------- -->
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-20 h-20 mr-6 md:block" src="images/logo.png" alt=""/>
                    <div>
                        <h3 class="text-2xl">
                            <a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">{{ $listing['company'] }}</div>
                        <ul class="flex">
                            @foreach($tags as $tag)
                            <li class="flex items-center justify-center bg-laravel text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="/?tag={{$tag}}">{{ $tag }}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> {{ $listing['location'] }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="text-center">
        <h1>No jobs available now</h1><br>
        <small>Please add some job to</small>
        </div>
    @endunless
    
</div>
@endsection
