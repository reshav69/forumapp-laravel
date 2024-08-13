<div>
	<i>{{$forum->user->name}} </i>&backsim;
	<i>{{$forum->created_at}}</i>
	<h2>{{ $forum->title }}</h2>
	<br>
	<p>{{ $forum->description }}</p>
	<br>


</div>
<div>
	{{-- show message  icon --}}
	<span class="dialog-icon">aaa</span>
	{{-- //show count --}}
	<span> {{ $forum->comments_count ?? $commentCount }}</span>&emsp;

	<span>comments: {{ $forum->comments_count ?? $commentCount }}</span>&emsp;
	<a href="{{ route('forums.show',$forum->id) }}">View</a>


	{{-- <form action="{{ route('ideas.destroy',$idea->id) }}" method="post">
		@csrf

		@auth
		<a class="mx-3" href="{{ route('ideas.edit',$idea->id) }}">Edit</a>
		@method('delete')
		<button class="btn btn-danger btn-sm"> X </button>
		@endauth

	</form> --}}
</div>
<hr>
