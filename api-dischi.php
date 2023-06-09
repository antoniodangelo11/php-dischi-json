<?php

$arrSong = file_get_contents('album.json');

/* $arrSong = [
    [
        'name'   => "New Jersey",
        'artist' => "Bon Jovi",
        'date'   => "1988",
        'cover'  => "img/bonjovi.jpg",
    ],
    [
        'name'   => "Live at Wembley 86",
        'artist' => "Queen",
        'date'   => "1992",
        'cover'  => "img/queen.jpg",
    ],
    [
        'name'   => "Ten's Summoner's Tales",
        'artist' => "Sting",
        'date'   => "1993",
        'cover'  => "img/sting.jpg",
    ],
    [
        'name'   => "Steve Gadd Band",
        'artist' => "Steve Gadd Band",
        'date'   => "2018",
        'cover'  => "img/stevegadd.jpg",
    ],
    [
        'name'   => "Brave New World",
        'artist' => "Iron Maiden",
        'date'   => "2000",
        'cover'  => "img/ironmaiden.jpg",
    ],
    [
        'name'   => "One More Car, One More Rider",
        'artist' => "Eric Clapton",
        'date'   => "2002",
        'cover'  => "img/eric_clapton.jpg",
    ],
]; */

header('content-type: application/json');
echo ($arrSong);

/* Questo serve per generare l'array prima di avere il file json */

// echo json_encode($arrSong);

/* Con queste ho creato il file.json */

// $json_string = json_encode($arrSong);
// file_put_contents('album.json', $json_string);