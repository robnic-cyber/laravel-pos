<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Jordan Lee', 'email' => 'jordan.lee@example.com', 'role' => 'Administrator'],
            ['id' => 2, 'name' => 'Camila Torres', 'email' => 'camila.torres@example.com', 'role' => 'Cashier'],
            ['id' => 3, 'name' => 'Ethan Lim', 'email' => 'ethan.lim@example.com', 'role' => 'Cashier'],
            ['id' => 4, 'name' => 'Sofia Navarro', 'email' => 'sofia.navarro@example.com', 'role' => 'Manager'],
            ['id' => 5, 'name' => 'Mateo Villanueva', 'email' => 'mateo.villanueva@example.com', 'role' => 'Inventory Clerk'],
        ];

        return view('users.index', compact('users'));
    }
}
