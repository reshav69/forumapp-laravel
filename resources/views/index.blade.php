@extends('layouts.application')
@section('content')

<div class="left">
    @if($categories)
        @foreach($categories as $category)
        <li><a href="{{route('category.show',$category->id)}}">{{$category->category_name}}</a></li>
        
        @endforeach
    @endif
</div>
<div class="right">
    @if(session()->has('success'))
        <h2>{{session('success')}}</h2>
    @endif
    
</div>
<div class="kontent">
    @forelse($forums as $forum)
        @include('includes.forum-card')
    @empty
        <p>No forums found</p>
    @endforelse
</div>

@endsection
