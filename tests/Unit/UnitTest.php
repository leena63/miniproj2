<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testUpdate()
    {
        $user = User::find(1);
        $user->name = 'Steve Smith';
        $this->assertTrue($user->save());
    }
    public function testDelete()
    {
        $user = new  User();
        $user->name = "Shreya";
        $user->email = "Shreya@gmail.com";
        $user->password = 'qwerty';
        $user->save();
        $this->assertTrue($user->delete());
    }
    public function testCount()
    {
        $user = User::all();
        $recordsCount = $user->count();
        $this->assertEquals(50, $recordsCount);
    }
    public function testInsertUser()
    {

        $user = new User();
        $user->name = "Leena Patil";
        $user->email = "lp277@njit.com";
        $user->password = "123456";
        $this->assertTrue($user->save());
    }
}
