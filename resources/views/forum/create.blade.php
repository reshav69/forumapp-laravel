@extends('layouts.application')
@section('content')
<div class="left"></div>
<div class="right"></div>
<div class='kontent'>
	<div class="formarea">
		<form action="{{route('forums.store')}}" method="post">
			@csrf
			<input type="text" name="title" placeholder="Title*">
			<br><br>
			<textarea name="description" placeholder="Description" rows="10" cols="50"></textarea>
			<br>

			<select name="category_id" id="cat">
				<option value="">Select a category</option>
				@if($categories)
					@foreach($categories as $category)
						<option value="{{$category->id}}">
							{{$category->id}} :
							{{$category->category_name}}
						</option>
						
					@endforeach
				@endif
			</select>
			<br><br><hr><br>
			<input type="submit" value="create">

		</form>
	</div>
</div>
@endsection