<?php

/* User Story 8 */
//definiert eine Klasse welche von der abstrakten Klasse "AbstractVideo" erbt.
//Dadurch hat "VimeoVideo" die Eigenschaften und Methoden von "AbstractVideo"

/*wie Klassen Vererbung funktioniert =
    Es beschreibt die Vorgehensweise,
eine neue Klasse als Erweiterung einer bereits bestehenden Klasse
(oder mehrerer bereits bestehender Klassen) zu entwickeln.
Die neue Klasse wird auch Subklasse genannt.
Die bestehende Klasse wird Basisklasse oder Superklasse genannt.*/

require_once "./AbstractVideo.php";
class VimeoVideo extends AbstractVideo
{
    //Konstruktor für die "VimeoVideo"-Klasse
    public function __construct($title, $videoId)
    {
        ///Die Eigenschaften werden initialisiert

        parent::__construct($title, $videoId);
        //Der Konstruktor der Elternklasse "AbstractVideo" wird aufgerufen,
        //um die Initialisierung der Eigenschaften in der Elternklasse durchzuführen
    }

    public function getEmbedCode(): string
    {
        return '<iframe src="https://player.vimeo.com/video/' . $this->source . '" width="420" height="345" frameborder="0" allowfullscreen></iframe>';
    }
}