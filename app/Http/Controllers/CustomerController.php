<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Ava Santos', 'email' => 'ava.santos@example.com', 'phone' => '0917-555-0101'],
            ['id' => 2, 'name' => 'Liam Cruz', 'email' => 'liam.cruz@example.com', 'phone' => '0917-555-0102'],
            ['id' => 3, 'name' => 'Mia Reyes', 'email' => 'mia.reyes@example.com', 'phone' => '0917-555-0103'],
            ['id' => 4, 'name' => 'Noah Garcia', 'email' => 'noah.garcia@example.com', 'phone' => '0917-555-0104'],
            ['id' => 5, 'name' => 'Isla Flores', 'email' => 'isla.flores@example.com', 'phone' => '0917-555-0105'],
        ];

        return view('customers.index', compact('customers'));
    }
}
