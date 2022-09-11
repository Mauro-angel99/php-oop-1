<?php

class Movie
{
    public $title;
    public $genre;
    public $plot;
    public $language;
    public $year;


    public function __construct($title, $genre, $plot, $language, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->plot = $plot;
        $this->language = $language;
        $this->year = $year;


    }

    public function setYear($year)
    {
        if(!is_numeric($year)) return;
        $this->year = $year;
    }

}

$plot1 = 'Peter Parker, un liceale orfano, è cresciuto con gli zii Ben e Mary. Quando trova una valigetta appartenente a suo padre, il ragazzo inizia ad avere dei dubbi sulla morte dei genitori e decide di scoprire la verità.';
$plot2 = 'Giappone, XVIII secolo: quarantasette samurai vogliono vendicare la morte del loro maestro, ucciso da un tiranno malvagio.';
$plot3 = 'Per indagare su una serie di furti, il poliziotto Brian O\'Connor diventa un infiltrato sotto copertura nel mondo delle corse clandestine di Los Angeles. Mentre cerca di guadagnarsi la fiducia del capo, l\'uomo rischia di essere smascherato.';


$movie1 = new Movie('The Amazing Spiderman', 'Action', $plot1, 'English', $year);
$movie2 = new Movie('47 Ronin', 'action', $plot2, 'japan', $year);
$movie3 = new Movie('Fast & Furios', 'action', $plot3, 'english', $year);


$movie1->setYear(2012);
$movie2->setYear(2013);
$movie3->setYear(2001);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>FILM</h1>
    <section>
        <h2><?= $movie1->title ?></h2>
        <h4><?= $movie1->genre ?></h4>
        <p><?= $movie1->plot ?></p>
        <h4><?= $movie1->linguage ?></h4>
        <h4><?= $movie1->year ?></h4>
    </section>
    <section>
        <h2><?= $movie2->title ?></h2>
        <h4><?= $movie2->genre ?></h4>
        <p><?= $movie2->plot ?></p>
        <h4><?= $movie2->linguage ?></h4>
        <h4><?= $movie2->year ?></h4>
    </section>
    <section>
        <h2><?= $movie3->title ?></h2>
        <h4><?= $movie3->genre ?></h4>
        <p><?= $movie3->plot ?></p>
        <h4><?= $movie3->linguage ?></h4>
        <h4><?= $movie3->year ?></h4>
    </section>
</body>

</html>