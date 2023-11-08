<?php
/*namespace =  eine Möglichkeit, verschiedene Gegenstände zu kapseln.
In einem Betriebssystem -> zusammengehörige Dateien zu gruppieren,
und dienen als Namespace für die beinhalteten Dateien

version control = zb GitHub verschiedene versionen
von einem Dokument hochladen und verwalten

Semantic: 1. Major, 2. Minor, 3. Patch
*/

/*Instanzen "YouTubeVideo" und "VimeoVideo" werden erstellt*/
require_once "./VimeoVideo.php";
require_once  "./YouTubeVideo.php";
require_once  "./AbstractVideo.php";

$youtubeVideo = new YouTubeVideo("The Falcon has landed | Recap of Falcon 9 launch and landing", "ANv5UfZsvZQ");
$vimeoVideo = new VimeoVideo("Vimeo Video Title", "867338027");

echo "<h2>YouTube Videos:</h2><br>";

/*Methode "getEmbedCode" für diese Instanzen aufrufen, um die Einbettungscodes für die Videos auszugeben.*/

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