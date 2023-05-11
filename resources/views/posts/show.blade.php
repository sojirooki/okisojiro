<x-app-layout>
    <x-slot name="header">
        Header
    </x-slot> 
    <body>
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class='content_post'>
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
                <a href="">{{ $post->category->name }}</a>
            </div>
        </div>
        <div class='edit'>
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>