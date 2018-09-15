<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach($results as $result)
    @if ($loop->index == 1)
    <title>{{ $result->user->full_name }} - Integração da API do Instagram com Laravel</title>
    @endif
    @endforeach
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron" style="padding: 2rem 1rem;color: dimgrey;">
    @foreach($results as $result)
    @if ($loop->index == 1)
        <div class="col-md-12" style="display: flex;flex-direction: row;justify-content: center;align-items: center;">
            <img src="{{ $result->user->profile_picture }}" alt="{{ $result->user->full_name }}" class="img-circle" style="height: 75px;border-radius: 45px;">
            <div style="margin-left: 15px;margin-left: 15px;display: flex;flex-direction: column;align-items: flex-start;">
                <h1 class="text-center">{{ $result->user->full_name }}</h1>
                @foreach($results2 as $result2)
                @if ($loop->index == 1)
                <p><b>{{$results2->counts->media}}</b> Publicações | <b>{{$results2->counts->followed_by}}</b> Seguidores | Seguindo <b>{{$results2->counts->follows}}</b></p>
                @endif
                @endforeach
            </div>
        </div>
    @endif
    @endforeach
    </div>

    <main class="container">

        @yield('content')
    
    </main>
</body>
</html>