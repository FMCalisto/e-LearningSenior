<?php

use App\Todolist;

class TodolistTest extends TestCase
{

    public function testCanInstantiateTodolist()
    {

        $list = new Todolist;

        $this->assertEquals(get_class($list), 'App\Todolist');

    }

    public function testNotValidWhenNameMissing()
    {

        $t = new Todolist;

        $this->assertFalse($t->validate());

    }

}

?>