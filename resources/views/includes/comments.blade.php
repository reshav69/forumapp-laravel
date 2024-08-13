<div class="comment-area" style="display: inline-block;">
	<form action="{{route('forums.comments.store',$forum->id)}}" method="post">
		@csrf
		{{-- <input type="hidden" name="forum_id" value="{{ $forum->id }}"> --}}
		<label for="comment">Add a comment:</label><br>
				
		<textarea name="comment" rows="5" cols="70"  style=" width: 100%;"></textarea>

		<button type="submit"> Add</button>

	</form>

</div>
<br><hr>
<div>
	@foreach($forum->comments as $comment)
	<b>{{$comment->user->name}}</b>
	<p>&emsp;{{$comment->comment}}</p>
	<br>

	<div class="lkdslk">

		<form action="{{ route('forums.comments.like', ['forum' => $forum->id, 'comment' => $comment->id]) }}" method="POST">
			@csrf
			<button type="submit" class="likeBtn">&#x1f44d;</button>
			<span>{{ $comment->likes()->count() }}</span>
			&emsp;
		</form>
		<form action="{{ route('forums.comments.dislike', ['forum' => $forum->id, 'comment' => $comment->id]) }}" method="POST">
			@csrf
			<button type="submit" class="dislikeBtn">&#x1f44e;</button>
			{{-- &emsp; --}}
			<span> {{ $comment->dislikes()->count() }}</span>
		</form>
	</div>
	<br><hr>
	@endforeach

</div>