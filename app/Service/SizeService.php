<?php
namespace App\Service;
use Illuminate\Support\Facades\DB;
/**
 * カートの中身を保持するクラス
 */
class SizeService{
  /**
   * カートの中にデータを入れる
   * @param $id
   */
  public function Size($size){
    $sofa = DB::table('sofa')->get();
    if (!empty($size)){
      $sofa = DB::table('sofa')->where('size', $size)->get();
    }
    $sofaList = DB::table('sofa')->select('size')->groupBy('size')->get();
    //重複して入れる
    return [$sofa,$sofaList];
  }
}
?>
