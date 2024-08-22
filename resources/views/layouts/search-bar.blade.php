
<form action=" {{route('search')}}" class="is-center">
    <input name="search" placeholder="..." class="search" type="text" id="search" value="{{request('search','')}}">
    <button class="button icon-only outline is-marginless"> &#128269;</button>
</form>