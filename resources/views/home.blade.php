<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

      <h1>Ecco i film più belli</h1>
    <div class="contenitore">
      @foreach ($movies as $key => $value)
      <div class="card">
        <div class="card-txt">
          <p><span>titolo</span>:{{$value['title']}}</p>
          <p><span>titolo originale</span>:{{$value['original_title']}}</p>
          <p><span>Nazione</span>:{{$value['nationality']}}</p>
          <p><span>data</span>:{{$value['date']}}</p>
          <p><span>voto</span>:{{$value['vote']}}</p>

        </div>
      </div>

      @endforeach
    </div>

  </body>
</html>
