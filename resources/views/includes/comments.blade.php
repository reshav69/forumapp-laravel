<div>
	<form action="{{route('forums.comments.store',$forum->id)}}" method="post">
		@csrf
		{{-- <input type="hidden" name="forum_id" value="{{ $forum->id }}"> --}}
		<label for="comment">Add a comment:</label><br>
		<input type="text" name="comment" autocomplete="off">

		<input type="submit">

	</form>
</div>
<br><br>
<div>
	@foreach($forum->comments as $comment)
		<b>{{$comment->user->name}}</b>
		<p>&emsp;{{$comment->comment}}</p>
		<hr>
	@endforeach

</div>