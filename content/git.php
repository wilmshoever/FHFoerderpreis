<h2>Git f&uuml;r Anf&auml;nger</h2>

<h3>Was ist Git?</h3>
<p>Git ist ein verteiltes Versionierungssystem. Doch was bedeutet das? Wikipedia sagt dazu:
<blockquote>Eine Versionsverwaltung ist ein System, das zur Erfassung von &Auml;nderungen an Dokumenten oder Dateien verwendet wird. Alle Versionen werden in einem Archiv mit Zeitstempel und Benutzerkennung gesichert und k&ouml;nnen sp&auml;ter wieder hergestellt werden. Versionsverwaltungssysteme werden typischerweise in der Softwareentwicklung eingesetzt um Quelltexte zu verwalten. Versionsverwaltung kommt auch bei B&uuml;roanwendungen oder Content-Management-Systemen zum Einsatz.</blockquote>
</p>
<h3>Was kann Git?</h3>
<p>
Git ist also ein System um verschiedene Versionen von Dateien zu verwalten. Doch Git kann noch viel mehr: Git kann die Versionen von Dateien verschiedener Nutzer verwalten. Git kann auch Dateien vergleichen und sie zusammenf&uuml;hren.
</p>	
<p>
Das ist nat&uuml;rlich nicht alles was Git kann, aber f&uuml;r den Anfang reicht das erstmal. Hier nun ein Praxisbeispiel:
</p>
<p>
Ich habe eine HTML-Datei und &auml;ndere diese auf meiner Festplatte. Git merkt dies und kann die &Auml;nderungen die ich gemacht habe nachvollziehen. In meinem Repository, also meiner Datenbank von Dateien und deren &Auml;nderungen, steht nun die ge&auml;nderte Datei und in der Datenbank steht die &Auml;nderung die ich gemacht habe. Ich kann also jederzeit zum alten Stand der Datei zur&uuml;ckkehren.
Wichtig zu wissen ist, dass die alte Datei nicht aufgehoben wird, sondern lediglich die &Auml;nderungen in einem so genannten Diff aufgehoben werden. Ein Git Repository ist auch im Vergleich zu anderen Versionsverwaltungssystemen recht klein.
</p>
<p>
Wof&uuml;r ist das sinnvoll? Wenn ich fr&uuml;her eine Datei ge&auml;ndert habe, wollte ich gern den alten Stand behalten, weil ich nur etwas ausprobieren wollte, oder mir nicht sicher war ob man die &Auml;nderungen hinterher so &uuml;bernehmen kann. Ohne Versionsverwaltungssystem hat man die Datei kopiert und ihr einen anderen Namen gegeben. Das ist aber nicht wirklich zielf&uuml;hrend und wenig &uuml;bersichtlich.
</p>
<p>
Git denkt in so genannten Commits. Ein Commit ist die &Uuml;bergabe von &Auml;nderungen an die Versionskontrolle. Es f&uuml;hrt also nicht jedes Speichern einer Datei zu einer neuen Version im System, sondern lediglich ein Commit. Ein Commit braucht immer zwingend eine Nachricht, bzw. einen Hinweistext. Das ist sinnvoll damit man wei&szlig; was und aus welchem Grund man etwas ge&auml;ndert hat.
</p>
<p>
Ich sehe also f&uuml;r jeden Commit was ich ge&auml;ndert habe und aus welchem Grund das war (z.B.: Farbe auf Kundenwunsch ge&auml;ndert). So kann ich im weiteren Verlauf sehen, wann ich die Farbe ge&auml;ndert habe, wo ich die &Auml;nderugen gemacht habe, und aus welchem Grund ich das ge&auml;ndert habe.
</p>
<p>
Das tolle und besondere an Git ist, dass das alles auf meiner Festplatte stattfindet. Ich brauche daf&uuml;r keinen speziellen Server wie das bei vielen anderen Systemen der Fall ist.
Das tolle an Versionsverwaltungssystemen ist allerdings, dass man durch sie in die Lage versetzt wird, mit anderen zusammen zu arbeiten. Und zwar gleichzeitig ohne Absprachen treffen zu m&uuml;ssen, und das Ganze an den gleichen Dateien.
</p>
<p>
Wie funktioniert das Ganze? Ich habe meine Dateien auf meiner Festplatte, arbeite daran und &auml;ndere Dinge. Jemand anderes &auml;ndert in genau der gleichen Datei etwas, jedoch auf seiner Festplatte. Ich &auml;ndere die Farbangabe f&uuml;r die CSS Klasse .header und mein Kollege &auml;ndert die Farbangabe in der Klasse .footer. Wir commiten die &Auml;nderung in unser lokales Git Repository und laden die &Auml;nderungen auf den Server, unser Kollege macht das gleiche. Nun &uuml;berschreibt er nicht unsere &Auml;nderung mit seiner Datei, sondern l&auml;d lediglich seine &Auml;nderung hoch (Das macht Git auch extrem schnell. Es wird nicht die Komplette Datei sondern lediglich die &Auml;nderung &uuml;bertragen).
</p>
<p>
Frage ich nun den Server nach &Auml;nderungen, schickt er mir die &Auml;nderung die mein Kollege gemacht hat und pflegt sie automatisch in meine Datei ein. Er f&uuml;hrt also meine Version mit der Version auf dem Server zusammen. Das nennt man einen Merge. Mein Kollege bekommt meine &Auml;nderung genau auf dem gleichen Weg.
</p>
<p>
&Auml;ndert mein Kollege nun in der gleichen Zeile meiner Datei etwas, kommt es zu einem Fehler. Er k&ouml;nnte meine &Auml;nderung &uuml;berschrieben haben. Es kommt zu einem Konflikt, den ich selbst l&ouml;sen muss. Entweder ich &uuml;bernehme seine oder meine Version.
</p>
<p>
Gibt es keine Konflikte, &uuml;bernimmt Git die &Auml;nderungen ganz einfach ohne gro&szlig;artige Nachrichten. Erinnert ihr euch an den Kommentar beim Committen? Diese Kommentare werden auch mit &uuml;bertragen. Bekomme ich also &Auml;nderungen vom Server, kann ich anhand der Commit-Message sehen, was genau mein Kollege ge&auml;ndert hat und was er sich dabei gedacht hat. Arbeite ich mit mehreren Leuten am gleichen Projekt, sehe ich auch wer die &Auml;nderungen gemacht hat.
</p>
<p>
In der Praxis kommt es recht selten zu Konflikten, da die Aufgaben im Team nicht die gleichen sind. Der eine k&uuml;mmert sich um ein spezielles Modul, &auml;ndert in der entsprechenden Datei etwas oder f&uuml;gt ein oder mehrere neue Dateien hinzu. Vielleicht &auml;ndert er auch im zentralen Stylesheet etwas, oder f&uuml;gt Klassen oder ID&#x27;s hinzu. Die Wahrscheinlichkeit dass jemand die gleichen Klassen hinzuf&uuml;gt oder genau die gleiche Datei neu anlegt ist recht gering. Jemand anderes k&uuml;mmert sich um die &Uuml;berarbeitung der Bilder und wieder jemand anderes k&uuml;mmert sich um Textkorrekturen.
</p>
<h4>Wiederholung</h4>
<p>Noch mal Zusammengefasst. Git verwaltet &Auml;nderungen an Dateien. Neue Versionen einer Datei werden bei einem &#x27;Commit&#x27; angelegt. Will ich mit mehreren Personen zusammenarbeiten, brauche ich einen zentralen Git-Server. Um meine &Auml;nderungen auf diesen Server zu &uuml;bertragen, mache ich einen &#x27;Push&#x27;. M&ouml;chte ich &Auml;nderungen die andere gemacht haben, vom Server abrufen, mache ich einen &#x27;Pull&#x27;. Ein &#x27;Pull&#x27; macht automatisch einen &#x27;Merge&#x27; mit den Dateien auf meiner Festplatte, f&uuml;hrt also den Stand auf dem Server mit dem auf meiner Festplatte zusammen.
</p>
<h3>Der Start</h3>
<h4>Die Installation</h4>
Um mit Git zu beginnen, m&uuml;ssen wir es erst einmal installieren. Die M&ouml;glichkeiten dies zu tun, sind von Betriebsystem zu Betriebsystem unterschiedlich.
<h5>Mac OS X</h5>
<p><a href="http://help.github.com/mac-git-installation/">http://help.github.com/mac-git-installation/</a></p> 
<p>F&uuml;r Mac OS X 10.4 und darunter muss Git &uuml;ber MacPorts oder Fink installiert werden, oder aus dem Sourcecode selbst kompiliert werden. F&uuml;r alle drei M&ouml;glichkeiten braucht man die OS X Developer Tools. F&uuml;r OS X 10.5 und dar&uuml;ber gibt es mehrere M&ouml;glichkeiten: Entweder man nutzt Fink/MacPorts, Homebrew oder den git-osx-installer. Die entsprechenden Links mit weiterf&uuml;hrenden Instruktionen findet ihr auf der oben verlinkten Seite.
</p>
<h5>Windows</h5>
Unter Windows gibt es zwei M&ouml;glichkeiten. Entweder man nutzt Git &uuml;ber die Linux-Emulation <a href="http://www.cygwin.com">Cygwin</a>, nutzt 
<a href="http://code.google.com/p/msysgit/">msysGit</a> oder nutzt <a href="http://code.google.com/p/tortoisegit/">TortoiseGit</a>.
<h5>Linux</h5>
<p>Entweder ihr compiliert euch Git selbst oder nutzt das Paket-Verwaltungs-System eurer Distribution. Unter Debian w&auml;re das z.B. &quot;apt-get install git&quot;.</p>
<h4>Einstellungen</h4>
<p>
Bevor wir mit irgendetwas anfangen, werden wir einige Einstellungen vornehmen. Dies geht nat&uuml;rlich auch in der Git-Bash:
</p>
<code>
git config --global user.name = benutzername
</code>
<p>
Globalen Git Benutzernamen setzen.	
</p>
<code>
git config --global user.email=julius@zeidlos.de
</code>
<p>
Globale E-Mail Adresse setzen. (Username und E-Mail identifizieren den Benutzer gegen&uuml;ber dem System)
</p>
<code>
git config --global user.signingkey=julius@zeidlos.de
</code>
<p>
Ich m&ouml;chte meine Tags (kommt sp&auml;ter) mit GnuPG signieren. Also muss ich festlegen, welcher Schl&uuml;ssel zu nutzen ist. Wahrscheinlich m&ouml;chtet ihr das nicht nutzen, oder braucht es nicht.
</p>
<code>
git config --global color.diff=auto
git config --global color.status=auto
git config --global color.branch=auto
</code>
<p>
Diese Einstellunge werde ich nicht weiter erkl&auml;ren. Ich glaube es sind sogar voreingestellte Werte.
</p>
<code>
git config --global core.autocrlf=true
</code>
<p>
Da einige Windows-Clients nicht mit LF als Zeilenendzeichen umgehen k&ouml;nnen, passen wir uns alle an Windows an und nutzen alle CRLF. Andernfalls werden alle Dateien immer als &Auml;nderung durchgegeben, sobald ein Client die Zeilenenden angepasst hat.
</p>
<code>
git config --global core.editor=mate -w
</code>
</code>
<p>
Hier setze ich Textmate als meinen Editor f&uuml;r Commits oder &Auml;hnliches. Ihr k&ouml;nnt diese Option ignorieren oder den Editor eurer Wahl eintragen.
</p>
<p>
Diese Einstellungen sind global und gelten f&uuml;r alle eure Repositorys. Solltet ihr in einem speziellen Repository andere Einstellungen haben wollen, lasst das &#x27;--global&#x27; weg.
</p>

<h4>Unser erstes Repository</h4>
<p>Ich werde in diesem Tutorial nicht auf GUI-Programme f&uuml;r Git eingehen, denn sie unterscheiden sich teilweise ganz bedeutend. Wenn ihr die Grundz&uuml;ge von Git versteht, werdet ihr euch aber auch in den entsprechenden GUI-Programmen zurecht finden. F&uuml;r dieses Tutorial werde ich die Git-Bash nutzen, die es sowohl unter Linux, Windows und auch Mac OS X gibt.
</p>
<p>
Mit dem <code>cd</code>-Befehl wechseln wir in das gew&uuml;nschte Verzeichnis. In meinem Fall habe ich mit dem Befehl <code>mkdir /Users/julius/Daten/websites/git_tutorial</code> den Ordner git_tutorial in dem Ordner in dem meine ganzen Webprojekte liegen, angelegt. In diesen Ordner habe ich auch eine HTML-Datei kopiert, mit der wir f&uuml;r den Anfang arbeiten werden.
</p>
<p>
Ein Git-Repository besteht aus einem Ordner namens &#x27;.git&#x27;. Der Punkt vor dem Ordnernamen versteckt diesen in unixoiden Betriebssystemen wie Linux, Unix oder Mac OS X. Git legt nicht, wie z.B. SVN in jedem Verzeichnis einen Ordner an, sondern lediglich im Hauptordner des Repositorys. M&ouml;chtet ihr das Repository l&ouml;schen, l&ouml;scht einfach den Ordner &#x27;.git&#x27; und alles ist weg. :)
</p>
<code>git init</code> 
<p>initialisiert uns ein neues Git-Repository in dem aktuellen Verzeichnis.
</p>
<code>
<em>zeidlos:git_tutorial julius$</em> git init
<em>Initialized empty Git repository in /Users/julius/Daten/websites/git_tutorial/.git/</em>
</code>
<p>
Unser erstes Git-Repository wurde initialisiert. Wir k&ouml;nnen es nun nutzen. \o/
</p>
<code>
<em>zeidlos:git_tutorial julius$</em> git status
<em># On branch master
#
# Initial commit
#
# Untracked files:
#   (use &quot;git add &lt;file&gt;...&quot; to include in what will be committed)
#
#	index.html
nothing added to commit but untracked files present (use &quot;git add&quot; to track)
</em>
</code>
<p>
Mit <code>git status</code> haben wir Git nach dem aktuellen Status gefragt. Git gibt uns zur&uuml;ck, dass die Datei index.html noch nicht in Git erfasst ist. Git sagt uns auch, dass wir mit dem Befehl <code>git add dateiname</code> die Datei zum Repository hinzuf&uuml;gen k&ouml;nnen. Alternativ k&ouml;nnen wir auch <code>git add .</code> nutzen um alle ungetrackten Dateien zu Git hinzuzuf&uuml;gen.</p>
<code>
<em>zeidlos:git_tutorial julius$</em> git add .
<em>warning: LF will be replaced by CRLF in index.html</em>
</code>
<p>
In diesem Falle meldet Git uns, dass die Zeilenendzeichen von LF auf CRLF (ihr erinnert euch?) ge&auml;ndert wurden.
</p>
<code>
<em>zeidlos:git_tutorial julius$</em> git status
<em># On branch master
#
# Initial commit
#
# Changes to be committed:
#   (use &quot;git rm --cached &lt;file&gt;...&quot; to unstage)
#
#	new file:   index.html
#
</em>
</code>
<p>
Ein erneuter &#x27;status&#x27; zeigt uns an, dass nun eine neue Datei namens index.html vorhanden ist. Diese werden wir als n&auml;chstes committen.
</p>
<h4>Der erste Commit</h4>
<code>
<em>zeidlos:git_tutorial julius$</em> git commit -m &#x27;index.html hinzugefuegt.&#x27;
<em>[master (root-commit) 0e3fc88] index.html hinzugefuegt.
warning: LF will be replaced by CRLF in index.html
 1 files changed, 8 insertions(+), 0 deletions(-)
 create mode 100644 index.html
</em>
</code>
<p>
mit <code>git commit -m &#x27;Kommentar&#x27;</code> haben wir die gemachten &Auml;nderungen in unser Repository geschrieben. Lassen wir den Flag -m und den Kommentar (Eigentlich bedeutet der Flag &#x27;-m&#x27; Message. Der Verst&auml;ndlichkeit halber schreibe ich statt Nachricht jedoch Kommentar.) weg, &ouml;ffnet sich ein Texteditor (z.B. Vim) in den wir den Kommentar eintragen m&uuml;ssen. Ein Commit ohne Kommentar ist nicht m&ouml;glich.
</p>
<p>
Git meldet uns nun, dass &#x27;index.html&#x27; hinzugef&uuml;gt wurde. Die ID des Commits ist 0e3fc88, und LF wurde durch CRLF ersetzt. Es wurde eine Datei ge&auml;ndert, 8 Zeilen hinzugef&uuml;gt, 0 gel&ouml;scht.
</p>
<p>
Ein erneutes <code>git status</code> zeigt uns, dass wir uns im branch master befinden und es keine &Auml;nderungen gibt.
</p>
<code><em>
# On branch master
nothing to commit (working directory clean)
</em></code>
<h4>&Auml;nderungen</h4>
<p>
Wir haben nun unseren ersten Commit hinter uns und m&uuml;ssen in der Datei &#x27;index.html&#x27; etwas &auml;ndern. Ausserdem legen wir die Datei style.css an. Nach der &Auml;nderung machen fragen wir Git ein weiteres Mal nach einem Status:
</p>
<code>
<em>
# On branch master
# Changed but not updated:
#   (use &quot;git add &lt;file&gt;...&quot; to update what will be committed)
#   (use &quot;git checkout -- &lt;file&gt;...&quot; to discard changes in working directory)
#
#	modified:   index.html
#
# Untracked files:
#   (use &quot;git add &lt;file&gt;...&quot; to include in what will be committed)
#
#	style.css
no changes added to commit (use &quot;git add&quot; and/or &quot;git commit -a&quot;)
</em>
</code>
<p>
Git zeigt uns, dass wir &Auml;nderungen in der index.html haben, und die style.css eine neue Datei ist. Soweit so gut. Machen wir nun einen Commit, passiert genau gar nichts. In der so genannten Staging-Area befindet sich nichts.
</p>
<h4>Die Staging-Area</h4>
<p>Die Staging-Area k&ouml;nnt ihr euch als Briefumschlag vorstellen, das Repository als Archiv. Macht ihr ein Commit, ist das, als wenn ihr einen Briefumschlag voller &Auml;nderungen per Hauspost an den Archivar schickt. Daf&uuml;r m&uuml;sst ihr allerdings die &Auml;nderungen vorher in den Briefumschlag stecken. Das mag sich jetzt vielleicht etwas umst&auml;ndlich anh&ouml;ren, aber ihr wollt vielleicht nicht alle &Auml;nderungen die ihr gemacht habt, auf einmal committen oder einige &Auml;nderungen auch erst einmal gar nicht.
</p>
<p>Mit <code>git add index.html</code> stecke ich die &Auml;nderungen der Datei &#x27;index.html&#x27; in den Briefumschlag um ihn an den Archivar schicken zu k&ouml;nnen. In diesem Falle m&ouml;chte ich aber auch die style.css committen. Nun habe ich zwei M&ouml;glichkeiten: Entweder ich nutze <code>git add .</code> um alle Dateien die ich ge&auml;ndert oder hinzugef&uuml;gt habe, in den Briefumschlag zu stecken, oder ich nutze <code>git commit -am &#x27;Kommentar&#x27;</code>. Das zus&auml;tzliche &#x27;a&#x27; in den Flags legt automatisch die &Auml;nderungen aller bekannten Dateien in den Briefumschlag. Anders als <code>git add .</code> bleibt die style.css hiervon unber&uuml;hrt, da sich &#x27;-a&#x27; lediglich die bereits bekannten Dateien bezieht. Allerdings l&ouml;scht die Option &#x27;-a&#x27; auch Dateien, die bereits getrackt werden, jedoch von euch per Hand gel&ouml;scht wurden.
</p>
<p>
M&ouml;chten wir also die &Auml;nderungen der index.html als auch die neue style.css committen, m&uuml;ssen wir erst mit <code>git add style.css</code> die style.css hinzuf&uuml;gen und dann mit <code>git commit -am &#x27;Kommentar&#x27;</code> den Commit machen, wobei die bisher nicht in den Briefumschlag gelegten &Auml;nderungen der index.html automatisch (wegen dem Flag -a) committet werden.
</p>
<p>
Wir h&auml;tten statt <code>gitt add style.css</code> auch <code>git add .</code> schreiben k&ouml;nnen. Dies h&auml;tte jedoch dazu gef&uuml;hrt, dass wir wirklich jede, bisher noch nicht im Repository erfasste Datei, also z.B. auch meine passwoerter.html, commitet worden w&auml;re.
</p>
<h3>Die History</h3>
<p>Was w&auml;re eine Versionsverwaltung ohne die M&ouml;glichkeit in die Vergangenheit zu gucken? Richtig: Ganz gro&szlig;er M&uuml;ll. :)</p>
<p>Das Kommando <code>git log</code> zeigt uns die letzten Commits in unserem Repository an. Haben andere Leute mitgemacht, so werden auch die Commits von diesen angezeigt.</p>
<code>
<em>zeidlos:git_tutorial julius$</em> git log
<em>commit 5e174a552f7ca353cf5a365e99263d26124411ed
Author: zeidlos &lt;julius@zeidlos.de&gt;
Date:   Wed Jan 27 01:04:48 2010 +0100

    style.css hinzugefuegt

commit 7ee0aef65df250ae319b27d2c6edb18beac5d504
Author: zeidlos &lt;julius@zeidlos.de&gt;
Date:   Tue Jan 26 23:19:25 2010 +0100

    test

commit 0e3fc88c4cca00078414244680ea26ca7494d64f
Author: zeidlos &lt;julius@zeidlos.de&gt;
Date:   Tue Jan 26 22:50:02 2010 +0100

    index.html hinzugefuegt.
</em>
</code>
<p>Das Log zeigt uns drei Commits an. Diese wurden alle vom Author &#x27;zeidlos&#x27;, also mir gemacht. Bei jedem Commit steht der Kommentar sowie eine eindeutige ID. Git nutzt keine fortlaufende Nummerierung sondern Hash-Werte als Identifizierungsmerkmal. Anhand dieser hexadezimalen Strings lassen sich die Commits auch sp&auml;ter noch eindeutig identifizieren und referenzieren.
</p>
<p>
Mit <code>git log -p</code> bekommen wir ein paar mehr Informationen:
</p>
<code><em>commit 7ee0aef65df250ae319b27d2c6edb18beac5d504
Author: zeidlos &lt;julius@zeidlos.de&gt;
Date:   Tue Jan 26 23:19:25 2010 +0100

    test

diff --git a/index.html b/index.html
index efa96eb..b36c7ff 100644
--- a/index.html
+++ b/index.html
@@ -1,8 +1,9 @@
 &lt;html&gt;
 &lt;head&gt;
 &lt;title&gt;Git Test Repository&lt;/title&gt;
<span style="color:green">+&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;</span>
 &lt;/head&gt;
 &lt;body&gt;
<span style="color:red">-Dies ist ein kleines Tutorial f&uuml;r euch.</span>
<span style="color:green">+Dies ist ein kleines Tutorial f&uuml;r euch.</span>
 &lt;/body&gt;
 &lt;/html&gt;
</em>
</code>
<p>
Die Option -p generiert einen Patch. Ein Patch ist nichts anderes als eine Textdatei mit dem Inhalt der Datei und den entsprechenden &Auml;nderungen. Ein &#x27;-&#x27; am Zeilenanfang und die rote Hervorhebung zeigt an, dass die Zeile gel&ouml;scht wurde. Gleich hinterher steht die Zeile mit einem &#x27;+&#x27; davor in gr&uuml;n hervorgehoben; sie ist also hinzugekommen.
</p>
<h3>Branchen</h3>
<p>Branchen, nicht brunchen. Ein Branch ist kurz gesagt eine Kopie eures Repositorys. Allerdings wird nicht einfach das Repository kopiert, sondern es wird lediglich eine Art virtuelle Kopie erstellt. Die Dateien liegen also nicht doppelt auf eurer Festplatte, sondern es werden hier wieder lediglich die &Auml;nderungen gespeichert. Das mag bei kleinen Projekten nicht so das Problem sein. Geht es jedoch um gr&ouml;&szlig;ere Projekte die vielleicht auch gro&szlig;e Bilder beeinhalten, ist man froh &uuml;ber jedes MB das man sparen kann.</p>
<p>
Wof&uuml;r ist dass denn gut, fragt ihr euch bestimmt gerade. Nehmen wir an, wir wollen in unserer Website eine gr&ouml;&szlig;ere &Auml;nderung vornehmen von der wir jedoch nicht wissen ob der Kunde sie so &uuml;berhaupt haben will, oder wir den Ansatz weiterverfolgen sollen. Die zu machenden &Auml;nderungen sind so gravierend, dass der aktuelle Code nicht mehr l&auml;uft, sobald wir anfangen unsere &Auml;nderungen zu machen. Wir oder Kollegen von uns wollen aber weiterhin eine Lauff&auml;hige Version des Codes haben, weil sie vielleicht an anderer Stelle etwas machen m&uuml;ssen. Also arbeiten wir einfach in einer Kopie weiter. Von der Kopie k&ouml;nnen wir im weiteren Verlauf noch eine Kopie machen um noch etwas anderes, basierend auf dem neuen Code auszuprobieren. Oder wir machen einen weiteren Branch vom Original weil wir einen alternativen L&ouml;sungsansatz verfolgen wollen.
</p>
<p>
Hier macht Git es uns ganz einfach: <code>git branch test</code> kopiert das aktuelle Repository in einen neuen Branch mit dem Namen test. Vergesst nicht, dass es keine tats&auml;chliche Kopie ist, sondern lediglich eine virtuelle Kopie mit den &Auml;nderungen bzw. Unterschieden zum Urspr&uuml;nglichen. Der zus&auml;tzlich verbrauchte Speicherplatz ist also sehr gering und wir k&ouml;nnen nahezu beliebig viele Branches machen (Irgendwann werden euch jedoch sinnvolle Namen ausgehen).
</p>
<p>
<code>git branch</code> gibt euch eine Liste mit euren Branches aus. Der Branch in dem ihr euch aktuell befindet ist mit einem * (Sternchen) markiert. Mit <code>git checkout test</code> wechselt ihr in den Branch mit dem Namen test. Nun lasst uns im Branch test etwas &auml;ndern. Wir f&uuml;gen ein Bild hinzu und binden das in die HTML-Datei ein.
</p>
<p>
Nun haben wir eine &Auml;nderung an der index.html gemacht sowie ein Bild im Verzeichnis liegen. Das Directorylisting sieht nun folgenderma&szlig;en aus:
</p>
<code><em>
zeidlos:git_tutorial julius$</em> ls -al
<em>total 32
drwxr-xr-x   6 julius  staff   204 27 Jan 01:38 .
drwxr-xr-x  22 julius  staff   748 26 Jan 21:42 ..
drwxr-xr-x  13 julius  staff   442 27 Jan 01:39 .git
-rw-r--r--   1 julius  staff   215 27 Jan 01:38 index.html
-rw-r--r--   1 julius  staff  5278 17 M&auml;r  2009 learn.github.png
-rw-r--r--   1 julius  staff    50 26 Jan 23:06 style.css
</em></code>
<p>Wechseln wir nun aber mit <code>git checkout master</code> zur&uuml;ck zum Branch &#x27;master&#x27; und machen ein erneutes Directorylisting, sehen wir, dass die Datei learn.github.png nicht mehr da ist. W&uuml;rden wir die index.html &ouml;ffnen, w&uuml;rden wir sehen, dass auch das Bild gar nicht eingebaut ist, sondern der Code sich noch genauso ist wie vor dem Branchen.</p>
<p>Soweit so gut. Wir haben einen Branch erstellt und in ihm gearbeitet. Nun m&ouml;chten wir unsere &Auml;nderungen, die auch funktionieren und lauff&auml;higen Code ergeben, wieder zur&uuml;ck in den Branch master spielen. Denn das ist der Branch in dem der stabile Code liegt. Das machen wir mit einem Merge.</p>
<h4>Mergen</h4>
<p>Wir wechseln mit <code>git checkout master</code> zur&uuml;ck in den Branch &#x27;master&#x27;. F&uuml;hren wir nun den Befehl <code>git merge test</code> aus, bekommen wir folgendes Ergebnis:</p>
<code><em>Updating bfda6dc..c24f5c1
Fast-forward
 index.html       |    1 +
 learn.github.png |  Bin 0 -&gt; 5278 bytes
 2 files changed, 1 insertions(+), 0 deletions(-)
 create mode 100644 learn.github.png
</em>
</code>
<p>
Es wurde also die Datei &#x27;index.html&#x27; ge&auml;ndert (eine Zeile) und die Datei learn.github.png ge&auml;ndert (in diesem Falle hinzugef&uuml;gt). Bei dem PNG sieht man, dass Git dieses als Binary-File, also als Datei mit der man keine Vergleiche anstellen kann, da sie nicht aus Text besteht, erkannt hat.
</p>
<p>
Dies war ein einfacher Merge ohne Konflikte. Git hat alles automatisch f&uuml;r uns gemacht und wir brauchten uns um nichts k&uuml;mmern. Mit <code>git log -p</code> k&ouml;nnen wir wieder genau sehen, was ge&auml;ndert wurde. Nun werden wir einen Konflikt produzieren. Wir werden in beiden Branches in der gleichen Datei die gleiche Zeile editieren.
</p>
<p>
Ein anschlie&szlig;ender Merge beider Branches produziert folgenden Fehler:
</p>
<code><em>Auto-merging style.css
CONFLICT (content): Merge conflict in style.css
Automatic merge failed; fix conflicts and then commit the result.
</em></code>
<p>F&uuml;hren wir nun <code>git mergetool</code> aus, so k&ouml;nnen wir uns ein Programm aussuchen, dass uns die zueinander in Konflikt stehenden Dateien anzeigt. Nehmen wir die Option opendiff unter OS X so wird das Programm FileMerge ge&ouml;ffnet (wird mit den OS X Developer Tools mitinstalliert) und wir k&ouml;nnen das Problem l&ouml;sen. Wird das Programm geschlossen, schreibt git die neue Datei ins Dateisystem, und schreibt eine weitere Datei mit dem Suffix &#x27;.orig&#x27;. In dieser Datei sehen wir noch mal was das Problem verursacht hat und k&ouml;nnen ggf. noch einmal nachsteuern.</p>
<code><em>body {
  color:teal;
&lt;&lt;&lt;&lt;&lt;&lt;&lt; HEAD
  background-color:white;
=======
  background-color:gray;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; test
}
</em></code>
<p>Wichtig zu wissen ist, dass Git nach einem Merge automatisch ein Commit macht. Dies kann man mit einer speziellen Option verhindern. Welche Option das ist, muss man nicht wissen, man muss wie immer nur wissen, wo es steht. Unix/Linux-Systeme haben so genannte Man-Pages. Das sind ganz tolle Dinger die man sich auch in der Shell angucken kann. Tippt man <code>git merge --help</code> ein, so bekommt man die Hilfe Seite f&uuml;r den &#x27;git merge&#x27; Befehl mit all seinen Optionen, Varianten und sonstigen Beschreibungen. Das gleiche gilt funktioniert nat&uuml;rlich auch f&uuml;r <code>git --help</code> oder <code>git branch --help</code> usw. Navigieren tut man in diesen Man-Pages mit den Pfeil- bzw. Bildauf- und Bildab-Tasten. Verlassen kann man die Man-Pages mit einem Druck auf die Taste &#x27;q&#x27;.
</p>
<p>Das Ganze sieht sicherlich etwas gew&ouml;hnungsbed&uuml;rftig aus, ist aber ungemein hilfreich. - Nicht nur im Zusammenhang mit Git, sondern auch mit allen anderen Dingen die sich in einer Shell abspielen. Tippt doch Spa&szlig;enshalber mal <code>man say</code> ein.</p>

<h2>Das eingemachte &ndash; Es geht los!</h2>
<p>Wichtig f&uuml;r diesen Teil ist, dass ihr eure Git-Installation eingerichtet habt und das Tutorial bis hier hin durchgearbeitet habt, damit ihr soweit damit umgehen k&ouml;nnt. Ihr habt per <code>git config</code> eure globalen Einstellungen gemacht, habt die Option die LF auf CRLF &auml;ndert, gesetzt, und euch mit Commits auseinander gesetzt und es praktisch ausprobiert. Wenn nicht, geht die vorherigen Kapitel bitte noch einmal druch.</p>
<p>Nun legt den Ordner an in dem euer Repository liegen soll und initialisiert es mit <code>git init</code>. <code>git remote add origin git@github.com:zeidlos/FHFoerderpreis.git</code> f&uuml;gt eurem Repository den Git-Server hinzu mit dem wir arbeiten wollen. In diesem Falle Github. Statt &#x27;origin&#x27; k&ouml;nnt ihr auch etwas anderes nutzen (z.B. Github), dieser Begriff hat sich jedoch eingeb&uuml;rgert.</p>
<p>Das Kommando <code>pull</code> (pull = ziehen) holt etwas vom soeben eingestellten Server. <code>git pull origin master</code> downloaded (zieht) den Branch &#x27;master&#x27; von der Quelle &#x27;origin&#x27;. Der Master Branch ist immer derjenige in dem der stabile Code liegt. Hier sind keine Experimente oder halbfertige Module zu erwarten. Bitte arbeitet auch lokal nicht im Branch &#x27;master&#x27;, sondern legt euch mit <code>git branch euername</code> einen neuen Branch an in dem ihr arbeitet und wechselt in den Branch mit <code>git checkout euername</code>. Hier k&ouml;nnt ihr nun arbeiten, Dateien &auml;ndern, committen, und so weiter.</p>
<p>
M&ouml;chtet ihr nun eure &Auml;nderungen mit anderen Teilen, k&ouml;nnt ihr mit <code>git push origin euername</code> auf dem Gitserver einen neuen Branch auf dem Server anlegen. Diesen Branch k&ouml;nnen alle anderen sehen, und mit ihm mergen. Hast du also eine tolle &Auml;nderung gebaut, pushst du diese in deinen remote (auf dem Server liegenden) Branch.</p> 
<p>Wenn du zum Beispiel ein neues Modul gebaut, oder Texte ge&auml;ndert hast, also Dinge die niemand anderen st&ouml;ren, kannst du auch mit <code>git checkout master</code> und <code>git merge meinname</code> den Branch &#x27;master&#x27; mit deinen &Auml;nderungen erg&auml;nzen. Ein <code>git push origin master</code> l&auml;d die gemachten &Auml;nderungen nun auch in den remote Branch &#x27;master&#x27; hoch. Andernfalls kannst du auch jemanden, der sich daf&uuml;r verantwortlich f&uuml;hlt, z.B. mich, damit beauftragen, deine &Auml;nderungen in den Branch &#x27;master&#x27; zu mergen.</p>
<p>
Wenn Daniela eine &Auml;nderung gemacht hat, die jedoch noch nicht im remote Branch &#x27;master&#x27; steht, kann ich mit dem Befehl <code>git pull origin daniela</code> mir die &Auml;nderungen von Daniela (in der Annahme dass Danielas remote Branch &#x27;daniela&#x27; heisst) holen, und mit ihnen arbeiten.
</p>
<p>
Bevor ich anfange zu arbeiten, gucke ich, ob sich im remote Branch &#x27;master&#x27; etwas ge&auml;ndert habe und merge die &Auml;nderungen ggf. in meinen privaten Branch.</p>
<p>
Langsam wiederholt sich alles, aber ich erkl&auml;re noch einmal den Ablauf:
</p>
<code>git checkout master</code>
<p>In den lokalen Branch &#x27;master&#x27; wechseln</p>
<code>git pull origin master</code>
<p>Die &Auml;nderungen vom remote Branch &#x27;master&#x27; ziehen.</p>
<code>git checkout zeidlos</code>
<p>In den eigenen lokalen Branch wechseln.</p>
<code>git merge master</code>
<p>Den Branch &#x27;master&#x27; mit dem Branch vergleichen in dem man sich gerade befindet und eventuelle &Auml;nderungen vornehmen.</p>
<p>Diese Prozedur sollte man regelm&auml;&szlig;ig wiederholen. Je &ouml;fter alle ihre Daten auf dem Server aktualisieren, desto einfacher ist es, einen Merge zu machen.</p>
<p>
Wer nur kleine &Auml;nderungen macht die nichts kaputt machen, k&ouml;nnt ihr diese auch im Branch &#x27;master&#x27; durchf&uuml;hren. Will ich also einen Text erg&auml;nzen, oder die Rechtschreibung korrigieren, wechsle ich in den Branch &#x27;master&#x27;, &auml;ndere den Text, committe die &Auml;nderungen und pushe sie auf den Remote Branch. So muss ich keinen Merge mit meinem eigenen Branch machen in dem ich gerade an einem gro&szlig;en neuen, halbfertigen Feature arbeite und ich noch keine &Auml;nderungen davon in den Master mergen m&ouml;chte.
</p>
<p>
Das Ganze mag am Anfang etwas kompliziert, aufgeblasen und merkw&uuml;rdig klingen. Sobald ihr aber die ersten Gehversuche hinter euch habt, werdet ihr merken, dass dies der einzige und ultimative Weg ist, mit anderen an einem Projekt zusammen zu arbeiten. Ihr k&ouml;nnt sehen, wer was aus welchem Grund ge&auml;ndert hat, und wisst so, was ihr mit den &Auml;nderungen anfangen sollt. Ihr k&ouml;nnt die &Auml;nderungen auch direkt &uuml;bernehmen und braucht euch nicht darum k&uuml;mmern, die Dateien von euch mit den soeben auf einem USB-Stick erhaltenen per Hand zu vergleichen. Ihr braucht auch nicht tausende Kopien von dem Projektordner aufbewahren, nur um die alten St&auml;nde zu sichern. Um all das k&uuml;mmert sich Git!</p>
<p>
Zum Schluss noch ein paar Links um weiterf&uuml;hrende Dinge nachlesen zu k&ouml;nnen oder sie noch mal von jemand anderem beschrieben zu bekommen. :)

<a href="http://learn.github.com">http://learn.github.com</a> (engl.) Tutorial f&uuml;r Einsteiger
<a href="http://help.github.com">http://help.github.com</a> (engl.) Hilfe bei Installation, SSH-Keys, uvm.
<a href="http://github.com/guides/home">http://github.com/guides/home</a> (engl.) Weiterf&uuml;hrendes
<a href="http://git-scm.com/documentation">http://git-scm.com/documentation</a> (engl.) Seite mit vielen Links zu diversen Themen.
<a href="http://github.com/guides/git-cheat-sheet">http://github.com/guides/git-cheat-sheet</a> (engl.) Cheat-Sheet
<a href="http://ktown.kde.org/%7Ezrusin/git/git-cheat-sheet-large.png">http://ktown.kde.org/%7Ezrusin/git/git-cheat-sheet-large.png</a> (engl.) Noch ein Cheat-Sheet.
<a href="http://progit.org/book/">Progit &ndash; Ein Buch &uuml;ber git.</a> (engl.)
<a href="http://hoth.entp.com/output/git_for_designers.html">Git f&uuml;r Designer. Noch ein Anf&auml;ngertutorial</a> (engl.)
<a href="http://www.kernel.org/pub/software/scm/git/docs/gittutorial.html">http://www.kernel.org/pub/software/scm/git/docs/gittutorial.html</a> (engl.) Offizielles Git Tutorial.
<a href="http://www.kernel.org/pub/software/scm/git/docs/everyday.html">http://www.kernel.org/pub/software/scm/git/docs/everyday.html</a> (engl.) Git in 20 Kommandos.
<a href="http://www.spheredev.org/wiki/Git_for_the_lazy">http://www.spheredev.org/wiki/Git_for_the_lazy</a> (engl.) Git f&uuml;r Faule. :)
<a href="http://de.gitready.com/">http://de.gitready.com/</a> (deutsch) Deutsche Seite mit Tipps und Hinweisen zum Thema Git.
