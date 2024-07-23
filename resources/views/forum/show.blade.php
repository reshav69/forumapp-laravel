@extends('layouts.application')
@section('content')
<div class="left"></div>
<div class="right"></div>

<div class='kontent'>
	<div>
		@include('includes.forum-card')
	</div>

	<div>
		@include('includes.comments')
	</div>
</div>
@endsection