<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // データのクリア
        DB::table('sofa')->truncate();
        // データ挿入
        $now = Carbon::now();
        $blick = [
            "name" => "BLICK",
            "img" => "images/sofa1.png",
            "description" => "",
            "size" => "一人掛け",
            "kiji" => "張り包み",
            "type" => "ローソファ",
            "OP" => "木肘・肘カバー",
            "price" => 107500,
            "created_at" => $now,
            "updated_at" => $now
        ];
        $nook = [
            "name" => "NOOK",
            "img" => "images/sofa2.png",
            "description" => "",
            "size" => "一人掛け",
            "kiji" => "カバーリング",
            "type" => "スタンダード",
            "OP" => "2or3シート・肘カバー",
            "price" =>  90300,
            "created_at" => $now,
            "updated_at" => $now
        ];
        $monde = [
            "name" => "MONDE",
            "img" => "images/sofa3.png",
            "description" => "",
            "size" => "一人掛け",
            "kiji" => "張り包み",
            "type" => "スタンダード",
            "OP" => "なし",
            "price" => 75600,
            "created_at" => $now,
            "updated_at" => $now
        ];

        $blick2 = [
            "name" => "BLICK",
            "img" => "images/sofa4.png",
            "description" => "",
            "size" => "二人掛け",
            "kiji" => "張り包み",
            "type" => "ローソファ",
            "OP" => "木肘・肘カバー",
            "price" => 137700,
            "created_at" => $now,
            "updated_at" => $now
        ];
        $place = [
            "name" => "PLACE",
            "img" => "images/sofa5.png",
            "description" => "",
            "size" => "二人掛け",
            "kiji" => "張り包み",
            "type" => "ローソファ",
            "OP" => "ヘッドレスト・竹集成材BOX",
            "price" => 271200,
            "created_at" => $now,
            "updated_at" => $now
        ];
        $quatt = [
            "name" => "QUATT",
            "img" => "images/sofa6.png",
            "description" => "",
            "size" => "二人掛け",
            "kiji" => "カバーリング",
            "type" => "スタンダード",
            "OP" => "ヘッドレスト",
            "price" => 112800,
            "created_at" => $now,
            "updated_at" => $now
        ];

        DB::table('sofa')->insert([$blick, $nook, $monde,$blick2,$place,$quatt]);
        // $this->call(UsersTableSeeder::class);

      // データのクリア
        DB::table('users')->truncate();
        // データ挿入
        $now = Carbon::now();
        $sample = [
            "name" => "sample",
            "email" => "sample@oic.jp",
            "password" => "$2y$10\$MHbuexLeBauR.XMX6vWLDOdyja/hRONfxqJqbnOJ3/6QcJf73PYBq",
            "remember_token" => "NULL",
            "created_at" => $now,
            "updated_at" => $now
        ];
        $hyodo = [
            "name" => "hyodo",
            "email" => "b5123@oic.jp",
            "password" => "$2y$10\$riRh9g.hwyek7EZ5V4H46egB15P68qxFW0rZm00w0I1Rqx29Zfz3m",
            "remember_token" => "NULL",
            "created_at" => $now,
            "updated_at" => $now
        ];

      DB::table('users')->insert([$sample,$hyodo]);
}
}
