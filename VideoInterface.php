<?php
/* User Story 5 */

/*definiert ein PHP-Interface mit dem Namen "VideoInterface"
Interface = eine abstrakte Struktur, die definiert welche Methoden
 in Klassen implementiert werden müssen, die dieses Interface verwenden.
eine interface = bezeichnet eine Übergangsstelle
zwischen verschiedenen Komponenten eines IT-Systems,
über die der Datenaustausch oder die Datenverarbeitung
realisiert werden. Dies können Mensch-Computer-Schnittstellen
 oder Computer-Computer-Schnittstellen sein.
*/

interface VideoInterface
{
    /* PHP-Schnittstelle (Interface)
    drei Methoden sind deklariert: */
    public function getName(): string;

    public function getSource(): string;

    public function getEmbedCode(): string;
}