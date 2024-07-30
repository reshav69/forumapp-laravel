<div>
	<form action="{{route('forums.comments.store',$forum->id)}}" method="post">
		@csrf
		{{-- <input type="hidden" name="forum_id" value="{{ $forum->id }}"> --}}
		<label for="comment">Add a comment:</label><br>
		<textarea name="comment" rows="5" cols="80"></textarea>

		<input type="submit">

	</form>

</div>
<br><hr>
<div>
	@foreach($forum->comments as $comment)
	<b>{{$comment->user->name}}</b>
	<p>&emsp;{{$comment->comment}}</p>
	<br>


	<form action="{{ route('forums.comments.like', ['forum' => $forum->id, 'comment' => $comment->id]) }}" method="POST">
		@csrf
		<button type="submit">Like</button>
		&emsp;&emsp;
		<span>{{ $comment->likes()->count() }}</span>
	</form>
	<form action="{{ route('forums.comments.dislike', ['forum' => $forum->id, 'comment' => $comment->id]) }}" method="POST">
		@csrf
		<button type="submit">Dislike </button>
		&emsp13;&emsp;
		<span> {{ $comment->dislikes()->count() }}</span>
	</form>
	<br><hr>
	@endforeach

</div>