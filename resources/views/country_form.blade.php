<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Динамический select в Laravel</title>
</head>
<body>

<div class="container">
    <h1>Динамический select в Laravel</h1>
    <form>
        @csrf
        <div class="form-group">
            <label for="countries">Страна</label>
            <select class="form-control" id="countries">
                <option>Выберите страну</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="city">Город</label>
            <select class="form-control" id="city">
                <option>Выберите город</option>
            </select>
        </div>

    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

<script type="text/javascript">
    $("#countries").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        console.log(id_country);

        $.ajax({
            url: "{{ route('selectcity') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
                $("#city").html('');
                $("#city").html(data.options);
            }
        });
    });
</script>

</body>
</html>
