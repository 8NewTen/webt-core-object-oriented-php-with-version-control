<?php
/* User Story 6 */

/*Das hiet ist eine abstrakte PHP-Klasse "AbstractVideo",
die das zuvor erstellte "VideoInterface" implementiert
abstract" = dass diese Klasse nicht direkt instanziiert
werden kann, sondern als Vorlage für andere konkrete
Klassen dient, die von ihr erben müssen.*/

namespace Htlw3r\Composerdemo\one_Aufgabe;

abstract class AbstractVideo implements VideoInterface
{
    /*drei geschützte (protected) Eigenschaften
    (speichern die Informationen) */
    protected $title;
    protected $source;
    protected $embedCode;

    /*Konstruktor der Klasse wird definiert
    Er initialisiert die entsprechenden Eigenschaften mit den übergebenen Werten.*/
    public function __construct($title, $source, $embedCode)
    {
        $this->title = $title;
        $this->source = $source;
        $this->embedCode = $embedCode;
    }

    /*hier ein paar Methoden
    diese implementieren die Schnittstellenmethoden aus dem "VideoInterface".
    Die Klasse erfüllt das Interface, da sie alle erforderlichen Methoden implementiert.*/
    public function getName(): string
    {
        return $this->title;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getEmbedCode(): string
    {
        return $this->embedCode;
    }
}