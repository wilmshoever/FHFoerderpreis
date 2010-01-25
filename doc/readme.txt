README:

_Konventionen_

* Dateinamen, CSS-Klassen oder Variablen möglichst immer klein schreiben und mit Unterstrichen trennen. Bitte mit einigermaßen sinnvollen und nachvollziehbaren Namen arbeiten. Bilder die nicht direkt von uns stammen bilden hier die einzige Ausnahme. Alles was aber irgendwie mit Code o.ä. zu tun hat bitte kleinschreiben.

* Bilder werden in einer sinnvollen Ordnerstruktur abgelegt. Alle Grafiken die die Website selbst betreffen, liegen im Ordner "img/ui", Bilder die eher zum Inhalt gehören, liegen im Ordner "content" ggf. noch auf weitere Unterordner verteilt.

* Dateien die nicht mehr benötigt werden, bzw. keine Funktionalität mehr haben, werden gelöscht oder mit einem old_ als Prefix versehen.

* Währnend der Entwic
klung sollten ausreichend Kommentare verwendet werden. Wir müssen hier keine höchstperformante Website bauen. :)

* In jedem Ordner liegt eine index.html um bei falsch konfiguriertem Server (Directorylisting an) ein Zugriff auf die PHP-Dateien zu verhindern.


_Anleitung/Wissenswertes_

Die index.php bildet die Grundstruktur der Seite und bindet Dateien aus dem Ordner "modules" ein, die z.T. tatsächliche Funktionalitäten haben oder erst einmal nur dummy-HTML beeinhalten. Wenn ihr einen neuen Layoutbaustein baut, schreibt diesen bitte in eine eigene Datei, so dass man ihn bei Bedarf laden kann, aber nicht muss.

Im Ordner "content" befinden sich momentan drei Dateien. Die index.php, welche HTML-Code für die Startseite beeinhaltet. Dieser Text wird im Bereich #content ausgegeben. Die Sidebar für eine entsprechende Seite findet man in der entsprechenden Datei. Diese hat ein "_sidebar" an den Namen der Seite angehängt. Existiert keine Sidebar für die entsprechende Seite, wird die "index_sidebar.php" genutzt. Die Benennung Sidebar ist etwas verwirrend. Es wird nur der Text in der Sidebar ausgetauscht. Das Logo und ggf. zusätzlich verwendete Module werden von dieser Datei nicht beeinflusst.