<div class="container"	>
	<form action="{{route('forums.comments.store',$forum->id)}}" method="post">
		@csrf
		{{-- <input type="hidden" name="forum_id" value="{{ $forum->id }}"> --}}
		<label for="comment">Add a comment:</label><br>

		<textarea name="comment" rows="5" cols="70"  style=" width: 100%;"></textarea>
		<br>
		<button type="submit"> Add</button>

	</form>

</div>
<hr>
<div class="container">
	@foreach($forum->comments as $comment)
	<b>{{$comment->user->name}}</b>
	<p>&emsp;{{$comment->comment}}</p>
	<br>


	<div class="row">
		<div class="col-2">
			<form action="{{ route('forums.comments.like', ['forum' => $forum->id, 'comment' => $comment->id]) }}" method="POST" class="col">
				@csrf
				<button class="button icon-only likeBtn is-rounded" type="submit">&#x1f44d;</button>
				<span>{{ $comment->likes()->count() }}</span>
				&emsp;
			</form>

		</div>
		<div class="col-2">
			<form action="{{ route('forums.comments.dislike', ['forum' => $forum->id, 'comment' => $comment->id]) }}" method="POST">
				@csrf
				<button class="button icon-only dislikeBtn is-rounded" type="submit">&#x1f44e;</button>
				{{-- &emsp; --}}
				<span> {{ $comment->dislikes()->count() }}</span>
			</form>

		</div>

	</div>

	<hr>


	@endforeach

</div>