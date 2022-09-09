<?php

class Movie
{
    public $title;
    public $genre;
    public $language;
    public $year;


    public function __construct($title, $genre, $language, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->year = $year;


    }
}

$movie1 = new Movie('The Amazing Spiderman', 'Action', 'English', 2012);
$movie2 = new Movie('47 Ronin', 'action', 'japan', 2013);
$movie3 = new Movie('Fast & Furios', 'action', 'english', 2001);



var_dump($movie1);
var_dump($movie2);
var_dump($movie3);