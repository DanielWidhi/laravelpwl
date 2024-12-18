<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3>Welcome to My Blog Page!, Daniel</h3> --}}
    @foreach ($posts as $post)
        
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $post['slug'] }}" class="hover:undeline">
        <h2 class="mb-1 text-3xl tracking-tigh font-bold text-gray-900">{{ $post ['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post ['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post ['body'], 100) }}</p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts/{{ $post['slug'] }}">Read More &raquo;</a>
    </article>
    @endforeach

    
</x-layout>