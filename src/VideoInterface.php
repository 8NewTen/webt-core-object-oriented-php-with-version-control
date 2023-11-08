<?php
/* User Story 5 */

/*definiert ein PHP-Interface mit dem Namen "VideoInterface"
Interface = eine abstrakte Struktur, die definiert welche Methoden
 in Klassen implementiert werden müssen, die dieses Interface verwenden.*/

namespace Htlw3r\Composerdemo\one_Aufgabe;
interface VideoInterface
{
    /* PHP-Schnittstelle (Interface)
    drei Methoden sind deklariert: */
    public function getName(): string;

    public function getSource(): string;

    public function getEmbedCode(): string;
}