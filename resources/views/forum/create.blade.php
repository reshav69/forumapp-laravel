@extends('layouts.application')
@section('content')
<div class="left"></div>
<div class="right"></div>
<div class='main'>
	<div class="container">
		<h2>Create a new Forum</h2>
		<form action="{{route('forums.store')}}" method="post">
			@csrf
			<fieldset>
				<input type="text" name="title" placeholder="Title*">
				<br><br>
				<textarea name="description" placeholder="Description" rows="10" cols="50" spellcheck="true"></textarea>
				<br>

				<div class="row">
					<div class="col">

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
					</div>
					<div class="col">

						<select class="is-right">
							<option value="">Select a Tag</option>
						</select>
					</div>
				</div>
				<hr>
				<input type="submit" value="create">
			</fieldset>
		</form>
	</div>
	<br><br>
</div>
@endsection