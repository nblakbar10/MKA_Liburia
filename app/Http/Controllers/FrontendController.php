<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artikel;


class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            [
                "title" => "555Majukan Pariwisata NTT Lewat Ideathon 2021 #RinduLabuanBajo",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, quibusdam ullam? Accusamus labore sapiente magni quia autem impedit in voluptatibus assumenda blanditiis quae illum perspiciatis dignissimos dolorum ut, vitae molestias?"
            ],
            [
                "title" => "Majukan Pariwisata NTT Lewat Ideathon 2021 #RinduLabuanBajo",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, quibusdam ullam? Accusamus labore sapiente magni quia autem impedit in voluptatibus assumenda blanditiis quae illum perspiciatis dignissimos dolorum ut, vitae molestias?"
            ],
            [
                "title" => "Majukan Pariwisata NTT Lewat Ideathon 2021 #RinduLabuanBajo",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, quibusdam ullam? Accusamus labore sapiente magni quia autem impedit in voluptatibus assumenda blanditiis quae illum perspiciatis dignissimos dolorum ut, vitae molestias?"
            ],
        ];
        /*dd($data);*/
        $dataview = [
            'article' => $data
        ];
        return view('front.home', $dataview, [
            "title" => "Homepage"
        ]);
    }
}
