<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testBasicTest2()
    {
        $response = $this->get('/abcde');
        $response->assertStatus(200);
    }

    public function testBasicTest3()
    {
        $response = $this->get('/helloview');
        $response->assertStatus(200);
    }


    public function testBasicTest5()
    {

        $stack = [];
        $this->assertSame(0, count($stack)); //配列が0件

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]); // 配列の特定の値がfooであること
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack)); // 配列の最後の項目がfooである
        $this->assertSame(0, count($stack)); // 配列が0件に戻っている
    }


    public function test1(){
        $stack = [];
        array_push($stack, 'foo');
        $this->assertSame(1, count($stack)); //配列が0件

        return $stack;

    }

    /**
     @depends test1
    */
    public function test2($array){

        $this->assertSame(1, count($array)); //配列が0件

    }




}
