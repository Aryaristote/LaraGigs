@props(['listing']) <!-- Giving access to the array Listing -->

<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="images/logo.png" alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing['company'] }}</div>
            <ul class="flex">
                @foreach($tags as $tag)
                    <li class="flex items-center justify-center bg-laravel text-white rounded-xl py-1 px-3 mr-2 text-xs">
                        <a href="">{{ $tag }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing['location'] }}
            </div>
        </div>
    </div>
</div>
