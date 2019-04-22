<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>檢舉</h2>
    <h3 class="float-left">作品碼：{{ $artId }} |  作品碼連結：<a href="{{ action('ArtController@show', [ 'artId' => $artId ]) }}">{{ action('ArtController@show', [ 'artId' => $artId ]) }}</a></h3>
    <hr/>
    <h3>檢舉人/單位</h3>
    <p>{{ $applicant }}</p>
    <h3>電子郵件</h3>
    <p>{{ $email }}</p>
    <h3>主要聯繫電話</h3>
    <p>{{ $phone }}</p>
    <h3>檢舉原因</h3>
    <p>{{ $feedback }}</p>
  </body>
</html>