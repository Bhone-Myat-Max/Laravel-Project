<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function value() {

        $category=[
            [
                'id'=> 1,
                'name'=> 'Vegetable',
            ],
            [
                'id'=> 2,
                'name'=> 'Fruit',
            ],
            [
                'id'=> 3,
                'name'=> 'Meat',
            ],
            [
                'id'=> 4,
                'name'=> 'Juice',
            ],
            [
                'id'=> 5,
                'name'=> 'Snacks',
            ]
        ];
        return view('index', compact('category'));
    }
}
