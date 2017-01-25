<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" title="no title">
    <title>main</title>
  </head>
  <body>
    <div class="wrap">


  <div class="title">
    <h1>sofa-shop</h1>
  </div>

<div class="user">
  @if(Auth::check())
  <span>userName - {{ Auth::user()->name }}</span>
  <a class="btn btn-primary" href="forLogout">ログアウト</a>

  @else
  <a class="btn btn-primary" href="login">ログイン</a>
  @endif
</div>
<br>
<li style="list-style:none;"><a href="/cart" class="button special fit"><input type="button" name="name" value="カートへ"></a></li>
<br>
<form action="/shop" method="get">
      <select class="" name="size">
        <option value="">全て</option>
        @foreach($sofaList as $value)
        <option value="{{$value->size}}">{{$value->size}}</option>
        @endforeach
      </select>
      <input type="submit" class="" name="" value="絞り込み">
</form>

<div class="all">
<ul>
@foreach($sofa as $sofa)
<li>

<article class="style{{ $sofa->id }}">

<div class="img">
<span class="image">
<a href="/detail?id={{ $sofa->id }}">
<img src="{{ $sofa->img }}" alt=""/>
</span>
</div>
<div class="itemname">

<h3>{{ $sofa->name }}</h3>

</div>

</a>
</article>
</li>
@endforeach
</ul>






</div>
  </body>
</html>
