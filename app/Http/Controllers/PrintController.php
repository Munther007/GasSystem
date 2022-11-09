<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\User;
class PrintController extends Controller
{

    //    print information of all users

    public function index()
    {
        $users = User::all();
        return view('livewire.admin.user.printusers')->with('users', $users);;
    }
    public function prnpriview()
    {
        $users = User::all();
        $cars = Car::all();
        return view('livewire.admin.user.users' , ['users', $users , 'cars' , $cars])->with('users', $users);;
    }

    //    print information of all cars


    public function index2()
    {
        $cars = Car::all();
        return view('cars.printusers')->with('cars', $cars);
    }
    public function prnpriview2()
    {
        $cars = Car::all();
        return view('cars.users' , ['cars' => $cars]);
    }

//    print information of one car
//    public function carinfo($id)
//    {
//        $car = Car::find($id);
//        return view('cars.printinfo' , compact('car'));
//    }
    public function prnpriview3()
    {
        $car = Car::all();
        return view('cars.info' , compact('car'));
    }

}
