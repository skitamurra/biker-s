<x-app-layout>
		<h1>Biker's</h1>
		<form action="{{ route('posts.create') }}" method="post">
			@csrf
			<div class="body">
				<textarea name="body" placeholder="投稿を作成"></textarea>
				<button type="submit">投稿</button>
			</div>
		</form>
		<div class="posts">
			@foreach($posts as $post)
			<div class="post" >
				<a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->body }}</a>
			</div>
			@endforeach
		</div>
</x-app-layout>