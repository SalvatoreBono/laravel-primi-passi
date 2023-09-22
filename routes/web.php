<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        "listInfoBear" => [
            [
                "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/European_Brown_Bear.jpg/800px-European_Brown_Bear.jpg",
                "nome" => "Orso bruno",
                "specie" => "Ursus arctos",
                "habitat" => "Foreste",
                "dimensioni" => "1,4 – 2,8 m",
            ],
            [
                "img" => "http://www.latelanera.com/images_bank/ilpozzo/2011/03/orso-grizzly-bear-killer-02.jpg",
                "nome" => "Orso grizzly",
                "specie" => "Ursus arctos horribilis",
                "habitat" => "Foreste",
                "dimensioni" => "2 m",
            ],
            [
                "img" => "https://www.today.it/~media/horizontal-hi/67097231360498/krwf_pk0.jpeg",
                "nome" => "Orso polare",
                "specie" => "Ursus Maritimus",
                "habitat" => "Polo Nord",
                "dimensioni" => "2,4 - 3 m",
            ],
            [
                "img" => "https://www.thoiry.net/wp-content/uploads/2022/04/ours-baribal.jpg",
                "nome" => "Orso nero o baribal",
                "specie" => "Ursus americanus",
                "habitat" => " Nord del Canada e dell'Alaska al nord del Messico, e dalle coste atlantiche alle coste pacifiche dell'America del Nord",
                "dimensioni" => "1,4 m",
            ],
        ],
    ];
    return view('home', $data);
});

Route::get('/Spider-Man', function () {
    $data = [
        "listInfoMaisMorales" => [
            [
                "img" => "https://assetsio.reedpopcdn.com/news-videogiochi-spider-man-miles-morales-playstation-5-digital-foundry-elogia-ray-tracing-1604745536413.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp",

            ],
            [
                "img" => "https://cdn.domestika.org/c_fill,dpr_auto,f_auto,q_auto/v1608255846/content-items/006/509/807/SPIDERMAN_1-original.png?1608255846",

            ],
            [
                "img" => "https://sm.ign.com/ign_it/screenshot/default/blob_7d76.jpg",

            ],
            [
                "img" => "https://www.coliseugeek.com.br/wp-content/uploads/2023/01/d296f-clickwallpapers-spider-man-miles-morales-wallpaper-sony-img2-scaled-1.jpg",

            ],
        ],
    ];
    return view('spider-man', $data);
});
