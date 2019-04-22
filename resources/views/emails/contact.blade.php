<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>聯絡</h2>
    <h3 class="float-left">作品碼：{{ $artId }} |  作品碼連結：<a href="{{ action('ArtController@show', [ 'artId' => $artId ]) }}">{{ action('ArtController@show', [ 'artId' => $artId ]) }}</a></h3>
    <hr/>
    <h3>姓名/單位名稱</h3>
    <p>{{ $name }}</p>
    <h3>電子郵件</h3>
    <p>{{ $email }}</p>
    <h3>網站</h3>
    <p>{{ $website }}</p>
    <h3>聯絡事項</h3>
    <p>{{ $comments }}</p>
  </body>
</html>