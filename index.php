<?php

/*namespace =  eine Möglichkeit,
 verschiedene Gegenstände zu kapseln. In einem Betriebssystem
-> zusammengehörige Dateien zu gruppieren, und dienen als
Namespace für die beinhalteten Dateien*/

/*eine interface = bezeichnet eine Übergangsstelle
 zwischen verschiedenen Komponenten eines IT-Systems,
 über die der Datenaustausch oder die Datenverarbeitung
 realisiert werden. Dies können Mensch-Computer-Schnittstellen
oder Computer-Computer-Schnittstellen sein.*/

/*wie Klassen Vererbung funktioniert =
Es beschreibt die Vorgehensweise, eine neue Klasse
als Erweiterung einer bereits bestehenden Klasse
(oder mehrerer bereits bestehender Klassen) zu entwickeln.
Die neue Klasse wird auch Subklasse genannt. Die bestehende
 Klasse wird Basisklasse oder Superklasse genannt.*/

/*version control = zb GitHub verschiedene
 versionen von einem Dokument hochladen und verwalten*/

/*unterschied zwischen protected private und
public variablen = protected-Elemente sind vor
 Zugriffen von außen geschützt, können aber von
abgeleiteten Klassen verwendet werden. Die public-Elemente
schließlich bilden die für alle sichtbaren Teile einer Klassendefinition
und können daher als ihre Schnittstelle angesehen werden.*/

//Instanzen "YouTubeVideo" und "VimeoVideo" werden erstellt
use Htlw3r\Composerdemo\one_Aufgabe\VimeoVideo;
use Htlw3r\Composerdemo\one_Aufgabe\YouTubeVideo;

$youtubeVideo = new YouTubeVideo("ANv5UfZsvZQ");
$vimeoVideo = new VimeoVideo("867338027");

echo "<h2>YouTube Videos:</h2><br>";
//Methode "getEmbedCode" für diese Instanzen aufrufen, um die Einbettungscodes für die Videos auszugeben.
echo $youtubeVideo->getEmbedCode();
echo $youtubeVideo->getEmbedCode();
echo $youtubeVideo->getEmbedCode();
echo $youtubeVideo->getEmbedCode();
echo $youtubeVideo->getEmbedCode();
echo "<br><h2>Vimeo Videos:</h2><br>";
echo $vimeoVideo->getEmbedCode();
echo $vimeoVideo->getEmbedCode();
echo $vimeoVideo->getEmbedCode();
echo $vimeoVideo->getEmbedCode();
echo $vimeoVideo->getEmbedCode();