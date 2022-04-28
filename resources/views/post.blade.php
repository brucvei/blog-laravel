<x-layout>
    <x-slot name="content">
        <article>
            <h1>{{ $post->title }}</h1>
            <p>
                Por 
                <a href={{ ("../author/". $post->author->username) ?? "#" }}>
                    {{ $post->author->name }}
                </a> 
                em
                <a href={{ ("../categoria/". $post->category->slug) ?? "#" }}> 
                    {{ $post->category->name ?? "" }} 
                </a>
            </p>

            <div>{!! $post->body; !!}</div>
        </article>
        <a href="/">Go back</a>
    </x-slot>
</x-layout>