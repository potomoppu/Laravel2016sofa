<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>商品ページ</title>
    <link rel="stylesheet" href="/css/detail.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>
    <a href="/shop">TOPへ</a>

    <div class="item_dit">
    <div class="item_img">
      <img src="{{ $sofa->img }}" alt=""/>
    </div>
    <div class="itemname">
      <h1>{{ $sofa->name }}</h1>
    </div>
    <div class="itemprice">
      <h2>￥{{ number_format($sofa->price) }}</h2>
    </div>
    <form class="" action="/cart?id={{$sofa->id}}" method="post">
      {{ csrf_field() }}
    <div class="cart">
    <!--<select class="" name="number">
      <?php for ($i=1; $i <=20 ; $i++) { ?>
        <option value="<?php echo $i ?>"><?php echo $i ?></option>
      <?php }?>
    </select>
  -->
    <input type="submit" name="name" value="購入">
    </div>
    </form>
    <table cellspacing="1" class=data>
        <tr><th>生地</th><td>{{$sofa->kiji}}</td></tr>
        <tr><th>タイプ</th><td>{{$sofa->type}}</td></tr>
        <tr><th>オプション</th><td>{{$sofa->op}}</td></tr>
        <tr><th>詳細</th><td>{{$sofa->description}}</td></tr>
    </table>
  </div>
  </body>
</html>
