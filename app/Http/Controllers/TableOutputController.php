<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Products;
use App\Models\Employees;
use Illuminate\Http\Request;

class TableOutputController extends Controller
{
    // CHANGE - Use compact() syntax instead
    // public function index(){
    //     $sales = Sales::all();
    //     $employees = Employees::all();
    //     $products = Products::all();

    //     return view('tables', ['sales' => $sales, 'employees' => $employees, 'products' => $products]);
    // }

    public function index()
    {
        $employees = Employees::all();
        $products = Products::all();
        $sales = Sales::all();

        return view('table', compact('employees', 'products', 'sales'));
    }
}
