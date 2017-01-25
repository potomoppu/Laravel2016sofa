<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>購入手続き</title>
    <link rel="stylesheet" href="/css/cart.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>
<div class="wrap">


  <a href="/shop">TOPへ</a>
  <a href="/cart">カートに戻る</a>
    <table class=>
      <form class="" action="index.html" method="post">
      <tr><h1>お届け先住所入力</h1></tr>

            <tr><th>住所</th>
                <td><input type="text" name="name" value="" maxlength="50" size="50"></td>
            </tr>
    </table>
    </form>
    <h1>以下の内容でよろしいですか</h1>
    <p>ユーザID:{{Auth::user()-> name}}様</p>
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
            @endif

            <ul class="actions-fit">
              <li><a href="/complite" class="button special fit"><input type="button" name="name" value="注文確定"></a></li>
          </ul>
<!--  <table class=>
      <tr><h4>注文内容</h4></tr>
            <tr><th>商品名</th><th>数量</th><th>合計金額</th>
            </tr>
            <tr>
                <td></td><td></td><td>¥円</td>
            </tr>
            <tr>
                <td></td><td></td><td>¥ 円</td>
            </tr>
            <tr><th colspan="2">合計金額</th><td>¥ 12,000円</td></tr>
        </table>
      -->
      </div>
  </body>
</html>
