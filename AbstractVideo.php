<?php
/* User Story 6 */

/*Das hier ist eine abstrakte PHP-Klasse "AbstractVideo",
die das zuvor erstellte "VideoInterface" implementiert
abstract" = dass diese Klasse nicht direkt instanziiert
werden kann, sondern als Vorlage für andere konkrete
Klassen dient, die von ihr vererben.*/

/*Unterschied zwischen protected private und public
variablen = protected-Elemente sind vor Zugriffen von außen
geschützt, können aber von abgeleiteten Klassen verwendet werden.
Die public-Elemente schließlich bilden die für alle sichtbaren Teile
einer Klassendefinition und können daher als ihre Schnittstelle
angesehen werden.*/

require_once "./VideoInterface.php";
abstract class AbstractVideo implements VideoInterface
{
    /*drei geschützte (protected) Eigenschaften
    (speichern die Informationen) */
    protected $title;
    protected $source;
    /*protected $embedCode;*/

    /*Konstruktor der Klasse wird definiert
    Er initialisiert die entsprechenden Eigenschaften mit den übergebenen Werten.*/
    public function __construct($title, $source)
    {
        $this->title = $title;
        $this->source = $source;
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

    /*public function getEmbedCode(): string
    {
        return $this->embedCode;
    }*/
}