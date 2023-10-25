<?php

/* User Story 7 */

/*Klasse namens "YouTubeVideo",
die von der abstrakten Klasse "AbstractVideo" erbt
-> "YouTubeVideo" erbt alle Eigenschaften und Methoden von
"AbstractVideo" und kann diese verwenden oder überschreiben*/

namespace Htlw3r\Composerdemo\one_Aufgabe;

class YouTubeVideo extends AbstractVideo
{
    //Konstruktor für die "YouTubeVideo"-Klasse
    public function __construct($videoId)
    {
        /*Die Eigenschaften die von der Elternklasse "AbstractVideo" geerbt wurden
        werden vom Konstruktor mit spezifischen Werten übergebenen*/
        $title = "The Falcon has landed | Recap of Falcon 9 launch and landing";
        $source = "https://www.youtube.com/watch?v=" . $videoId;
        $embedCode = '<iframe width="420" height="345" src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0" allowfullscreen></iframe>';

        parent::__construct($title, $source, $embedCode);
        //der Konstruktor der Elternklasse "AbstractVideo" wird aufgerufen,
        //um die Initialisierung der Eigenschaften in der Elternklasse durchzuführen.
        //um sicherzustellen, dass die Methoden in "YouTubeVideo" korrekt funktionieren,
        //da sie von "AbstractVideo" geerbt und in der Elternklasse implementiert wurden.
    }
}