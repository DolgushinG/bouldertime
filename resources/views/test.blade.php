@extends('layout')
@section('content')

    <div class="site-section site-hero inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <h4>Город</h4>
                    <div class="ui-widget">
                        <input class="form-control" id="city" type="text" placeholder="Начните вводить название города">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function($){
            $(function() {
                $('[name="city"]').fias({
                    type: $.fias.type.city,
                    'withParents' : true
                });
            });
        })(jQuery);
    </script>

    <input type="text" name="city"  />
    <script type="text/javascript">
        $.fias.token = '7fBE5fb79DHK2F5tRHe2kKs9szYdhkBD';
        $.fias.url = 'https://kladr-api.com/api.php';
</script>


@endsection
