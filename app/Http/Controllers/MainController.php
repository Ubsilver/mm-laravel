<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = [
            [
                'id' => 1,
                'title' => 'Продукт 1',
                'price' => '500',
                'path' => 'images/1.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Продукт 2',
                'price' => '550',
                'path' => 'images/2.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Продукт 3',
                'price' => '555',
                'path' => 'images/3.jpg'
            ]
        ];
        return view('home', compact('array'));
    }
}
