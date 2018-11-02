<?php

namespace Tests\Unit;

use App\Car;
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
    public function testUpdateCar()
    {
        $cars = car::find(1);
        $cars->year = 2000;
        $this->assertTrue($cars->save());
    }
    public function testCountCar()
    {
        $cars = car::all();
        $carRecordsCount = $cars->count();
        $this->assertEquals(50,$carRecordsCount);
    }
    public function testDeleteCar()
    {
        $cars = new car();
        $cars->make = 'Honda';
        $cars->model = 'City';
        $cars->year = '2009';
        $cars->save();
        $this->assertTrue($cars->delete());
    }
    public function testDataTypeCar()
    {
        $cars = car::inRandomOrder()->first();
        $year = (int)$cars->Year;
        $this->assertInternalType("int", $year);
    }
    public function testCarMake()
    {
        $cars = car::inRandomOrder()->first();
        $this->assertContains($cars->Make, ["Honda", "Ford", "Toyota"]);
    }
    public function testModelCar()
    {
        $cars = car::inRandomOrder()->first();
        $model = $cars->Model;
        $this->assertInternalType("string", $model);
    }


    public function testInsertCar()
    {
        $cars= new Car();
        $cars->make = 'Honda';
        $cars->model = 'City';
        $cars->year = '2010';
        $this->assertTrue($cars->save());
    }
}
