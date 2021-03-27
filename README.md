<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## データベース設計
### postsテーブル

| Column  | Type      |
| ------- | --------- |
| name | string |
| age | integer |
| sex | integer |
| property | integer |
| memo | text |

## 工夫した点
### フォーム内「希望物件種別」のデータベース設計=>キーワード「素数」
数値に意味を持たせるという数学的な方法で、カラムやテーブルを増やさずにチェックボックスの値をデータベースに保存できるようにしました。
* それぞれのチェックボックスに異なる素数を付与
  * 新築一戸建て=>2
  * 中古一戸建て=>3
  * マンション=>5
  * 土地=>7
* JavaScriptでこれらの掛け算をしてinput:hiddenに代入
* データベースには単純な整数値を保存
* 詳細表示Bladeテンプレートで素因数分解を実施
  * 2の倍数=>新築一戸建て
  * 3の倍数=>中古一戸建て
  * 5の倍数=>マンション
  * 7の倍数=>土地
