<h1>Git f&uuml;r Anf&auml;nger</h1>

<h2>Was ist Git?</h2>
<p>Git ist ein verteiltes Versionierungssystem. Doch was bedeutet das? Wikipedia sagt dazu:
<blockquote>Eine Versionsverwaltung ist ein System, das zur Erfassung von &Auml;nderungen an Dokumenten oder Dateien verwendet wird. Alle Versionen werden in einem Archiv mit Zeitstempel und Benutzerkennung gesichert und k&ouml;nnen sp&auml;ter wieder hergestellt werden. Versionsverwaltungssysteme werden typischerweise in der Softwareentwicklung eingesetzt um Quelltexte zu verwalten. Versionsverwaltung kommt auch bei B&uuml;roanwendungen oder Content-Management-Systemen zum Einsatz.</blockquote>
</p>
<h2>Was kann Git?</h2>
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
In der Praxis kommt es recht selten zu Konflikten, da die Aufgaben im Team nicht die gleichen sind. Der eine k&uuml;mmert sich um ein spezielles Modul, &auml;ndert in der entsprechenden Datei etwas oder f&uuml;gt ein oder mehrere neue Dateien hinzu. Vielleicht &auml;ndert er auch im zentralen Stylesheet etwas, oder f&uuml;gt Klassen oder ID's hinzu. Die Wahrscheinlichkeit dass jemand die gleichen Klassen hinzuf&uuml;gt oder genau die gleiche Datei neu anlegt ist recht gering. Jemand anderes k&uuml;mmert sich um die &Uuml;berarbeitung der Bilder und wieder jemand anderes k&uuml;mmert sich um Textkorrekturen.
</p>
<h4>Wiederholung</h4>
<p>Noch mal Zusammengefasst. Git verwaltet &Auml;nderungen an Dateien. Neue Versionen einer Datei werden bei einem 'Commit' angelegt. Will ich mit mehreren Personen zusammenarbeiten, brauche ich einen zentralen Git-Server. Um meine &Auml;nderungen auf diesen Server zu &uuml;bertragen, mache ich einen 'Push'. M&ouml;chte ich &Auml;nderungen die andere gemacht haben, vom Server abrufen, mache ich einen 'Pull'. Ein 'Pull' macht automatisch einen 'Merge' mit den Dateien auf meiner Festplatte, f&uuml;hrt also den Stand auf dem Server mit dem auf meiner Festplatte zusammen.
</p>
<h2>Der Start</h2>
<h3>Die Installation</h3>
Um mit Git zu beginnen, m&uuml;ssen wir es erst einmal installieren. Die M&ouml;glichkeiten dies zu tun, sind von Betriebsystem zu Betriebsystem unterschiedlich.
<h4>Mac OS X</h4>
<p><a href="http://help.github.com/mac-git-installation/">http://help.github.com/mac-git-installation/</a></p> 
<p>F&uuml;r Mac OS X 10.4 und darunter muss Git &uuml;ber MacPorts oder Fink installiert werden, oder aus dem Sourcecode selbst kompiliert werden. F&uuml;r OS X 10.5 und dar&uuml;ber gibt es mehrere M&ouml;glichkeiten: Entweder man nutzt Fink/MacPorts, Homebrew oder den git-osx-installer. Die entsprechenden Links mit weiterf&uuml;hrenden Instruktionen findet ihr auf der oben verlinkten Seite.
</p>
<h4>Windows</h4>
Unter Windows gibt es zwei M&ouml;glichkeiten. Entweder man nutzt Git &uuml;ber die Linux-Emulation <a href="http://www.cygwin.com">Cygwin</a>, nutzt 
<a href="http://code.google.com/p/msysgit/">msysGit</a> oder nutzt <a href="http://code.google.com/p/tortoisegit/">TortoiseGit</a>.
<h4>Linux</h4>
<p>Entweder ihr compiliert euch Git selbst oder nutzt das Paket-Verwaltungs-System eurer Distribution. Unter Debian w&auml;re das z.B. "apt-get install git".</p>
<h3>Einstellungen</h3>
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
Diese Einstellungen sind global und gelten f&uuml;r alle eure Repositorys. Solltet ihr in einem speziellen Repository andere Einstellungen haben wollen, lasst das '--global' weg.
</p>

<h3>Unser erstes Repository</h3>
<p>Ich werde in diesem Tutorial nicht auf GUI-Programme f&uuml;r Git eingehen, denn sie unterscheiden sich teilweise ganz bedeutend. Wenn ihr die Grundz&uuml;ge von Git versteht, werdet ihr euch aber auch in den entsprechenden GUI-Programmen zurecht finden. F&uuml;r dieses Tutorial werde ich die Git-Bash nutzen, die es sowohl unter Linux, Windows und auch Mac OS X gibt.
</p>
<p>
Mit dem <code>cd</code>-Befehl wechseln wir in das gew&uuml;nschte Verzeichnis. In meinem Fall habe ich mit dem Befehl <code>mkdir /Users/julius/Daten/websites/git_tutorial</code> den Ordner git_tutorial in dem Ordner in dem meine ganzen Webprojekte liegen, angelegt. In diesen Ordner habe ich auch eine HTML-Datei kopiert, mit der wir f&uuml;r den Anfang arbeiten werden.
</p>
<p>
Ein Git-Repository besteht aus einem Ordner namens '.git'. Der Punkt vor dem Ordnernamen versteckt diesen in unixoiden Betriebssystemen wie Linux, Unix oder Mac OS X. Git legt nicht, wie z.B. SVN in jedem Verzeichnis einen Ordner an, sondern lediglich im Hauptordner des Repositorys. M&ouml;chtet ihr das Repository l&ouml;schen, l&ouml;scht einfach den Ordner '.git' und alles ist weg. :)
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
#   (use "git add &lt;file&gt;..." to include in what will be committed)
#
#	index.html
nothing added to commit but untracked files present (use "git add" to track)
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
#   (use "git rm --cached &lt;file&gt;..." to unstage)
#
#	new file:   index.html
#
</em>
</code>
<p>
Ein erneuter 'status' zeigt uns an, dass nun eine neue Datei namens index.html vorhanden ist. Diese werden wir als n&auml;chstes committen.
</p>
<h4>Der erste Commit</h4>
<code>
<em>zeidlos:git_tutorial julius$</em> git commit -m 'index.html hinzugefuegt.'
<em>[master (root-commit) 0e3fc88] index.html hinzugefuegt.
warning: LF will be replaced by CRLF in index.html
 1 files changed, 8 insertions(+), 0 deletions(-)
 create mode 100644 index.html
</em>
</code>
<p>
mit <code>git commit -m 'Kommentar'</code> haben wir die gemachten &Auml;nderungen in unser Repository geschrieben. Lassen wir den Flag -m und den Kommentar (Eigentlich bedeutet der Flag '-m' Message. Der Verst&auml;ndlichkeit halber schreibe ich statt Nachricht jedoch Kommentar.) weg, &ouml;ffnet sich ein Texteditor (z.B. Vim) in den wir den Kommentar eintragen m&uuml;ssen. Ein Commit ohne Kommentar ist nicht m&ouml;glich.
</p>
<p>
Git meldet uns nun, dass 'index.html' hinzugef&uuml;gt wurde. Die ID des Commits ist 0e3fc88, und LF wurde durch CRLF ersetzt. Es wurde eine Datei ge&auml;ndert, 8 Zeilen hinzugef&uuml;gt, 0 gel&ouml;scht.
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
Wir haben nun unseren ersten Commit hinter uns und m&uuml;ssen in der Datei 'index.html' etwas &auml;ndern. Ausserdem legen wir die Datei style.css an. Nach der &Auml;nderung machen fragen wir Git ein weiteres Mal nach einem Status:
</p>
<code>
<em>
# On branch master
# Changed but not updated:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#	modified:   index.html
#
# Untracked files:
#   (use "git add <file>..." to include in what will be committed)
#
#	style.css
no changes added to commit (use "git add" and/or "git commit -a")
</em>
</code>
<p>
Git zeigt uns, dass wir &Auml;nderungen in der index.html haben, und die style.css eine neue Datei ist. Soweit so gut. Machen wir nun einen Commit, passiert genau gar nichts. In der so genannten Staging-Area befindet sich nichts.
</p>
<h4>Die Staging-Area</h4>
<p>Die Staging-Area k&ouml;nnt ihr euch als Briefumschlag vorstellen, das Repository als Archiv. Macht ihr ein Commit, ist das, als wenn ihr einen Briefumschlag voller &Auml;nderungen per Hauspost an den Archivar schickt. Daf&uuml;r m&uuml;sst ihr allerdings die &Auml;nderungen vorher in den Briefumschlag stecken. Das mag sich jetzt vielleicht etwas umst&auml;ndlich anh&ouml;ren, aber ihr wollt vielleicht nicht alle &Auml;nderungen die ihr gemacht habt, auf einmal committen oder einige &Auml;nderungen auch erst einmal gar nicht.
</p>
<p>Mit <code>git add index.html</code> stecke ich die &Auml;nderungen der Datei 'index.html' in den Briefumschlag um ihn an den Archivar schicken zu k&ouml;nnen. In diesem Falle m&ouml;chte ich aber auch die style.css committen. Nun habe ich zwei M&ouml;glichkeiten: Entweder ich nutze <code>git add .</code> um alle Dateien die ich ge&auml;ndert oder hinzugef&uuml;gt habe, in den Briefumschlag zu stecken, oder ich nutze <code>git commit -am 'Kommentar'</code>. Das zus&auml;tzliche 'a' in den Flags legt automatisch die &Auml;nderungen aller bekannten Dateien in den Briefumschlag. Anders als <code>git add .</code> bleibt die style.css hiervon unber&uuml;hrt, da sich '-a' lediglich die bereits bekannten Dateien bezieht. Allerdings l&ouml;scht die Option '-a' auch Dateien, die bereits getrackt werden, jedoch von euch per Hand gel&ouml;scht wurden.
</p>
<p>
M&ouml;chten wir also die &Auml;nderungen der index.html als auch die neue style.css committen, m&uuml;ssen wir erst mit <code>git add style.css</code> die style.css hinzuf&uuml;gen und dann mit <code>git commit -am 'Kommentar'</code> den Commit machen, wobei die bisher nicht in den Briefumschlag gelegten &Auml;nderungen der index.html automatisch (wegen dem Flag -a) committet werden.
</p>
<p>
Wir h&auml;tten statt <code>gitt add style.css</code> auch <code>git add .</code> schreiben k&ouml;nnen. Dies h&auml;tte jedoch dazu gef&uuml;hrt, dass wir wirklich jede, bisher noch nicht im Repository erfasste Datei, also z.B. auch meine passwoerter.html, commitet worden w&auml;re.
</p>
<h3>Die History</h3>
<p>Was w&auml;re eine Versionsverwaltung ohne die M&ouml;glichkeit in die Vergangenheit zu gucken? Richtig: Ganz gro&szlig;er M&uuml;ll. :)</p>