<div class="alert alert-warning" role="alert">
    @foreach(App\Alert::all() as $Alert)
    <h5 class="alert-text">{{$Alert->text}}</h5>
    @endforeach
</div>
