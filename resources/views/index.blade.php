<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heroes</title>
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
</head>
<body>

<div class="container-sm">
    <form method="get">
        <div class="mb-3">
            <label for="heroiInput" class="form-label">Heroi Nome</label>
            <input type="text" class="form-control" id="heroiInput" name="name" style="max-width:200px">
        </div>
        <button type="submit" class="btn btn-primary">Procurar</button>
    </form>
</div>

<div class="container">
    @for($i = 0; $i < count($results);$i++)
        @foreach($results as $key => $result)
            <ul class="list-group mt-3 mb-5">
            <img src="{{$results[$i]['image']['url']}}"style="margin:0 auto;max-width: 300px;max-height: 200px;width: auto;height: auto">
                <li class="list-group-item mt-1">{{"Name: ".$results[$i]['name']}}</li>
                <li class="list-group-item">{{"Publisher: " . $results[$i]['biography']['publisher']}}</li>
                <li class="list-group-item">{{"Place of birth: " . $results[$i]['biography']['place-of-birth']}}</li>
                <li class="list-group-item">{{"Gender: " . $results[$i]['appearance']['gender']}}</li>
                <li class="list-group-item">{{"Race: " . $results[$i]['appearance']['race']}}</li>
            </ul>
            @break
        @endforeach
    @endfor

</div>

</body>
<script src="{{asset('site/jquery.js')}}"></script>
<script src="{{asset('site/bootstrap.js')}}"></script>
</html>
