<form action="{{ route('products.search')}}">

<input class="form col-11" type="text" name="q" placeholder="kikivendkoi !? " aria-label="Search" value="{{ request()->q ?? '' }}">
<button type="button" class="btn btn-info">kiki?</button>
</form>
