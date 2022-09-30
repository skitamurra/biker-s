<x-app-layout>
    <h1>Biker's</h1>
     <div class="content">
            <div class="content__post">
                <p>{{ $post->body }}</p>
                <img src="{{ $post->image }}" >
            </div>
    </div>
    <div>
        <p class="edit">[<a href="{{ route('posts.edit', ['post' => $post->id]) }}">edit</a>]</p>
        <a href="/">戻る</a>
   </div>
</x-app-layout>