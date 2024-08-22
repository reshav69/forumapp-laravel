<article class="card">
	<header>
		<i><a href="{{route('profile.show',$forum->user->id)}}">{{$forum->user->name}} </a></i>&backsim;
		<i>{{$forum->created_at}}</i>
		<h2>{{$forum->title}}</h2>
		<a class="bd-primary round text-small">{{$forum->category->category_name}}</a>
		<a class="bg-light round">Tag</a>

	</header>
	<br>

	<p>{{ $forum->description }}</p>

	<footer>
		<hr>
		<i class="dialog-icon">---</i>
		<span> {{ $forum->comments_count ?? $commentCount }}</span>&emsp;
		<a href="{{ route('forums.show',$forum->id) }}">&#x1F441;&#x1F441;</a>

	</footer>

</article>

{{-- <div class="uinfo">
	<i><a href="{{route('profile.show',$forum->user->id)}}">{{$forum->user->name}} </a></i>&backsim;
	<i>{{$forum->created_at}}</i>
	<h2>{{ $forum->title }}</h2>
	<span class="catname">{{$forum->category->category_name}}</span>
	<br>
	<p class="fdesc">{{ $forum->description }}</p>
	<br>


</div> --}}

	{{-- <form action="{{ route('ideas.destroy',$idea->id) }}" method="post">
		@csrf

		@auth
		<a class="mx-3" href="{{ route('ideas.edit',$idea->id) }}">Edit</a>
		@method('delete')
		<button class="btn btn-danger btn-sm"> X </button>
		@endauth

	</form> --}}
