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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex" method="get">
                <input class="form-control me-2" type="search" placeholder="Search Hero" aria-label="Search" name="name">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

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
