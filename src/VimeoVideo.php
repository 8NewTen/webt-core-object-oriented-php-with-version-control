<?php

/* User Story 8 */
//definiert eine Klasse welche von der abstrakten Klasse "AbstractVideo" erbt.
//Dadurch erbt "VimeoVideo" die Eigenschaften und Methoden von "AbstractVideo"
namespace Htlw3r\Composerdemo\one_Aufgabe;

class VimeoVideo extends AbstractVideo
{
    //Konstruktor für die "VimeoVideo"-Klasse
    public function __construct($videoId)
    {
        ///Die Eigenschaften werden initialisiert
        $title = "Vimeo Video Title";
        $source = "https://vimeo.com/" . $videoId;
        $embedCode = '<iframe src="https://player.vimeo.com/video/' . $videoId . '" width="420" height="345" frameborder="0" allowfullscreen></iframe>';

        parent::__construct($title, $source, $embedCode);
        //Der Konstruktor der Elternklasse "AbstractVideo" wird aufgerufen,
        //um die Initialisierung der Eigenschaften in der Elternklasse durchzuführen
    }
}