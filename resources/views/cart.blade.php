<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>カート</title>
    <link rel="stylesheet" href="/css/cart.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>

    <div class="wrap">

      <form class="" action="/proce" method="post">


    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h2>お買い物かご</h2>
            @if($items)
            <a href="/delete/all" class="button" style="margin-bottom: 20px;"><input type="button" name="name" value="カートを空にする"></a>
            @endif
            
            <div class="table-wrapper">
                {{--商品が入っているとき--}}
                @if($items)
                    <table class="data">
                        <thead>
                        <tr>
                            <th>商品名</th>
                            <th>サイズ</th>
                            <th>価格（税込）</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--sessionに入ってるデータをループで回す--}}
                        <?php $sum = 0; ?>
                        @foreach($items as $index=>$item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->size }}</td>
                                <td>¥ {{ number_format($item->price) }}</td>
                                <?php $sum += $item ->price; ?>
                                <td style=""><a href="/delete?index={{ $index }}">削除</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h2>合計金額:¥<?php echo number_format($sum);?></h2>
                    <ul class="actions-fit">
                      <li><a href="/shop" class="button fit"><input type="button" name="name" value="買い物を続ける(TOPページへ)"></a></li>
                    </br>
                      <li><a href="/proce" class="button special fit"><input type="button" name="name" value="購入手続きへ"></a></li>
                   </ul>
                {{--商品が入っていないとき--}}
                @else
                    <p>商品は入っていません。</p>
                    <ul class="actions-fit">
                      <li><a href="/shop" class="button fit"><input type="button" name="name" value="買い物を続ける(TOPページへ)"></a></li>
                   </ul>
                @endif
            </div>

              </div>
                </form>
  </body>
</html>
