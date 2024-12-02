<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3>Welcome to My Blog Page!, Daniel</h3> --}}


    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tigh font-bold text-gray-900">{{ $post ['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post ['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{$post ['body'] }}</p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts">&laquo; Back To Posts</a>
    </article>


</x-layout>
