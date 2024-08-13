@extends('layouts.application')
@section('content')

<div class="left">
    @if(session()->has('success'))
        <h2>{{session('success')}}</h2>
    @endif
</div>
<div class="right">
    
</div>
<div class="kontent">
    @forelse($forums as $forum)
        @include('includes.forum-card')
    @empty
        <p>No forums found</p>
    @endforelse
</div>

@endsection
