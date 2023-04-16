@extends('layouts.app')

@section('content')

@include('partials._search')

@php
    $tags = explode(",", $listing['tags']);
@endphp

    <a href="index.html" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{asset('images/logo.png')}}" alt="" />

                <h3 class="text-2xl mb-2">{{ $listing['title'] }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing['company'] }}</div>
                <ul class="flex">
                    @foreach($tags as $tag)
                        <li class="flex items-center justify-center bg-laravel text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="">{{ $tag }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing['location'] }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>{{ $listing['description'] }}</p>
                        <div class="flex inline-flex  row-flex content-center">
                            <a href="mailto:{{$listing['email']}}" class="block bg-laravel text-white m-6 px-10 py-2 rounded-full hover:opacity-80">
                                <i class="fa-solid fa-envelope"></i> {{ $listing['email'] }}
                            </a>

                            <a href="https://test.com" target="_blank" class="rounded-full mt-6 border-2 border-laravel text-laravel px-10 py-0 h-10 hover:opacity-80">
                                <i class="fa-solid fa-globe"></i> {{ $listing['website'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection