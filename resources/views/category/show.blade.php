@extends('layouts.application')
@section('content')
<div class="left">
    
</div>
<div class="right"></div>

<div class='kontent'>
	@forelse($forums as $forum)
        @include('includes.forum-card')
    @empty
        <p>No forums found</p>
    @endforelse
</div>
@endsection