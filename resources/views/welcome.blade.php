<x-layout>
    <x-slot name="content">
        {{-- @foreach ($posts as $post)
        <article>
                <h1><a href="post/{{ $post->slug; }}"> {{ $post->title; }} </a></h1>
                <p>
                    Por 
                    <a href={{ ("../author/". $post->author->username) ?? "#" }}>
                        {{ $post->author->name; }}
                    </a> 
                    em
                    <a href="../categoria/{{ $post->category->slug; }}"> 
                        {{ $post->category->name ?? ''; }} 
                    </a>
                </p>
                <div> {{ $post->excerpt; }} </div> 
            </article>
        @endforeach
    </x-slot>
</x-layout> --}}
@include('_post-header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    <x-post-feature :post="$posts[0]" />

    <div class="lg:grid lg:grid-cols-2">
        <x-post-card/>
        <x-post-card/>
    </div>

    <div class="lg:grid lg:grid-cols-3">
        <x-post-card/>
        <x-post-card/>
        <x-post-card/>
    </div>
</main>

</x-slot>
</x-layout>