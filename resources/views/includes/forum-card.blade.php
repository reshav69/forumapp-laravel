<div>
	<p>{{$forum->category->category_name}}</p>
	<i><a href="{{route('profile.show',$forum->user->id)}}">{{$forum->user->name}} </a></i>&backsim;
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

	{{-- <span>comments: {{ $forum->comments_count ?? $commentCount }}</span>&emsp; --}}
	<a style="font-size: 16pt;text-decoration: none" href="{{ route('forums.show',$forum->id) }}">
		&#x1F441;&#x1F441;
	</a>


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
