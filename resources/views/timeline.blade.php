<x-app-layout>
		<h1>Biker's</h1>
		<form action="/" method="post">
			@csrf
			<div class="body">
				<textarea name="body" placeholder="投稿を作成"></textarea>
				<button type="submit">投稿</button>
			</div>
		</form>
		
		<div class="posts">
			@foreach($posts as $post)
			<div class="post" >
				<p class="body">{{ $post->body }}</p>
			</div>
			@endforeach
		</div>
		
</x-app-layout>