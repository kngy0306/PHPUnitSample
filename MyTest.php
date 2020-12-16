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
    $text = "";

    // 値が空であることをテストする。
    $this->assertEmpty($text);
  }
}