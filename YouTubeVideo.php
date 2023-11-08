<?php

/* User Story 7 */

/*Klasse namens "YouTubeVideo",
die von der abstrakten Klasse "AbstractVideo" erbt
-> "YouTubeVideo" erbt alle Eigenschaften und Methoden von
"AbstractVideo" und kann diese verwenden oder überschreiben*/
require_once "./AbstractVideo.php";
class YouTubeVideo extends AbstractVideo
{

    //Konstruktor für die "YouTubeVideo"-Klasse

/*constructor = Ein Konstruktor ist eine spezielle Prozedur zur
Erzeugung neuer Objekte. Ein Konstruktor führt bei Aufruf folgende
Aufgaben durch: Erzeugung eines neuen, eindeutigen Objektidentifikators.
Bereitstellung von Speicherplatz für den Objektzustand*/

    public function __construct($title, $videoId)
    {
        /*Die Eigenschaften die von der Elternklasse "AbstractVideo" geerbt wurden
        werden vom Konstruktor mit spezifischen Werten übergebenen*/    

        parent::__construct($title, $videoId);
        //Der Konstruktor der Elternklasse "AbstractVideo" wird aufgerufen,
        //um die Initialisierung der Eigenschaften in der Elternklasse durchzuführen.
        //Um sicherzustellen, dass die Methoden in "YouTubeVideo" korrekt funktionieren,
        //da sie von "AbstractVideo" geerbt und in der Elternklasse implementiert wurden.
    }

    public function getEmbedCode(): string
    {
        return '<iframe width="420" height="345" src="https://www.youtube.com/embed/' . $this->source . '" frameborder="0" allowfullscreen></iframe>';
    }
}