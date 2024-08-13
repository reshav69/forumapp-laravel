<div class="search-body">
    <form action="{{route('search')}}" method="get">

        <input name="search" placeholder="..." class="search" type="text" id="search" value="{{request('search','')}}">
        <button class="searchBtn">&#128269;</button>
    </form>
</div>