<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class PrintController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('livewire.admin.user.printusers')->with('users', $users);;
    }
    public function prnpriview()
    {
        $users = User::all();
        return view('livewire.admin.user.users')->with('users', $users);;
    }
}
