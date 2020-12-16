# PHPでテストを書く（PHPUnit）

# 自動テストの重要性

コードを書き換えた後、再テストには大きな労力がかかる。 => **自動テスト**という仕組みが役に立つ。

参考書籍に則り、**PHPUnit**という自動テストツールを使用する。

他にも様々なツールがあるみたい。

[PHPの自動テストフレームワークってどんなんがあるん？](https://qiita.com/geckothic/items/adeb3eddb4131ebff2cf)

# PHPUnitのインストール

PHPUnitのインストール

```
composer require --dev phpunit/phpunit
```

# テストの書き方

PHPUnitに用意されてる TestCaseを継承したクラスを作成する必要がある。

- クラス名、ファイル名は```Test```で終わる必要がある。
- テストの成功か、失敗かはメソッド内に書かれた**assertOOメソッド**が真を返すかどうかで決まる。



# 実行

ファイル名: MyTest.php

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
  // テスト処理
  public function test1()
  {
    $array = [1, 5, 10];

    // 配列（$array）の要素数が３つであることをテストする。
    $this->assertCount(3, $array);
  }

  public function test2()
  {
    $num1 = 1;
    $num2 = 1;

    // ２つの値が型も含めて等しいことをテストする。
    $this->assertSame($num1, $num2);
  }

  public function test3()
  {
    $text = "hello";

    // 値が空であることをテストする。
    $this->assertEmpty($text);
  }
}
```

**実行**

```
./vendor/phpunit/phpunit/phpunit MyTest.php
```



**実行結果**

```
PHPUnit 9.5.0 by Sebastian Bergmann and contributors.

..F                                                                 3 / 3 (100%)

Time: 00:00.008, Memory: 4.00 MB

There was 1 failure:

1) MyTest::test3
Failed asserting that a string is empty.

/Users/kona/PHPUnitApp/MyTest.php:31

FAILURES!
Tests: 3, Assertions: 3, Failures: 1.
```

2行目が結果を示している。

- 「.」が**成功**
- 「F」が失敗
- 「E」がエラー
- 「R」がリスク
- 「S」がスキップ
- 「I」が不完全

↑の実行結果は２つが成功し、１つが失敗している。

# おまけ（エイリアスの作成）

エイリアスを作成して楽しよう

```
alias phpunit="./vendor/phpunit/phpunit/phpunit"
```

以降、

```
phpunit MyTest.php
```

で実行可能。



# 参考情報

[PHPの自動テストフレームワークってどんなんがあるん？](https://qiita.com/geckothic/items/adeb3eddb4131ebff2cf)

