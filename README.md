# ansible-workshop-clt-2023

Advanced Ansible Workshop für die Chemnitzer Linux-Tage 2023

## Voraussetzungen

Ihr braucht grundlegende Ansible-Kentnisse. Dieser Workshop ist nicht für absolute Anfänger geeignet.

Weiterhin braucht ihr mindestens ein Ansible Version 2.12, ältere Ansible Versionen werden möglicherweise nicht funktionieren.

Falls notwendig, könnt ihr ein neueres Ansible in einem [Python venv](https://docs.python.org/3/library/venv.html) installieren:

```
virtualenv --python=python3 ansible-new
. ./ansible-new/bin/activate
pip install ansible==6.7.0

which ansible
ansible-workshop-clt-2023/ansible-new/bin/ansible

ansible --version
ansible [core 2.13.8]
  config file = /ansible-workshop-clt-2023/ansible.cfg
  configured module search path = ['.ansible/plugins/modules', '/usr/share/ansible/plugins/modules']
  ansible python module location = ansible-workshop-clt-2023/ansible-new/lib/python3.10/site-packages/ansible
  ansible collection location = .ansible/collections:/usr/share/ansible/collections
  executable location = ansible-workshop-clt-2023/ansible-new/bin/ansible
  python version = 3.10.7 (main, Nov 24 2022, 19:45:47) [GCC 12.2.0]
  jinja version = 3.1.2
  libyaml = True
```

## virtuelle Maschinen

Für die Dauer des Workshops werden wir euch pro Person zwei virtuelle Maschinen bereitstellen. Die Zugangsdaten erhaltet ihr im Laufe des Workshops.

Dies stellt sicher, dass jeder mit der gleichen Umgebung arbeitet. Niemand muss erst irgendeinen Hypervisor lokal installieren und virtuelle Maschinen hochfahren.

Der Zugang zu den virtuellen Maschinen ist auf die Dauer des Workshops begrenzt, die Zugangsdaten werden danach ungültig. Allerdings könnt ihr die Übungen natürlich auch daheim auf anderen Systemen ausprobieren.

Die Zugangsdaten kommen in einem Verzeichnis mit insgesamt 5 Dateien. Alle Dateien werden in das Hauptverzeichnis (dieses Verzeichnis hier) kopiert. Danach bitte noch folgende Befehle ausführen:

```
chmod 0600 key.pem
chmod 0700 connect-db.sh connect-web.sh
export ANSIBLE_CONFIG=$(pwd)
```

## Übungen

Das Verzeichnis [uebungen](./uebungen/) enthält die Übungen, die wir während des
Workshops durchführen werden. Diese Übungen bauen auf den vorherigen Ansible-Workshops auf:

* [Ansible Workshop für die Chemnitzer Linux-Tage 2021](https://github.com/andreasscherbaum/ansible-workshop-clt-2021)
* [Ansible Workshop für die Chemnitzer Linux-Tage 2020](https://github.com/andreasscherbaum/ansible-workshop-clt-2020)
* [Ansible Workshop für die Chemnitzer Linux-Tage 2019](https://github.com/andreasscherbaum/ansible-workshop-clt-2019)
* [Ansible Workshop für die Chemnitzer Linux-Tage 2018](https://github.com/andreasscherbaum/ansible-workshop-clt-2018)

Ihr solltet also mit den anderen Übungen vertraut sein bzw. grundlegende Ansible-Kentnisse mitbringen.

### Grundzustand

Die Übungen [01-ssh](uebungen/01-ssh) und [02-ping](uebungen/02-ping) sind zum Testen gedacht.

Die Übung [03-build](uebungen/03-build) erstellt den Zustand wie zum Abschluss der vorherigen Workshops.


## Konfiguration

### AWS Zugangsdaten

Dieses Repository benötigt AWS-Zugangsdaten, um virtuelle Maschinen zu erstellen.

Erstelle eine Datei _lab/awscreds.yml_ mit dem folgenden Befehl:

```
ansible-vault create awscreds.yml
```

Eine Beispieldatei ist verfügbar: _lab/awscreds-example.yml_ (diese Beispieldatei beinhaltet keine Zugangsdaten, ersetze die Platzhalter mit deinen eigenen Daten).

Die Datei, die du mit _ansible-vault_ erstellst, ist verschlüsselt. Vergiss das Passwort nicht!

Die Playbooks lesen das Passwort von der Datei _vault_pass.txt_ im Hauptverzeichnis dieses Repositorys. Stelle sicher, dass diese Datei nicht geteilt wird (zum Beispiel, wenn das Repository kopiert wird). Diese Datei ist bereits zu _.gitignore_ hinzugefügt und wird nicht in das Repository eingecheckt.

```
touch vault_pass.txt
chmod 0600 vault_pass.txt
<editor> vault_pass.txt
```


### AWS Konfiguration

Eine Beispielkonfiguration ist in _configuration-example.yml_ verfügbar. Kopiere diese Datei zu _configuration.yml_ und bearbeite diese mit einem Editor.

Ein Eintrag muss zwingend geändert werden: _infra_name_.

Dieser Eintrag wird als Tag verwendet, um alle Infrastruktur zu identifizieren, die dieses Playbook erzeugt. Wenn "make destroy" ausgeführt wird, werden sämtliche AWS-Ressourcen gelöscht, die dieses Tag verwenden. Stelle sicher, dass du einen eindeutigen Bezeichner verwendest.


### Server Konfiguration

Eine Beispielkonfiguration ist in _servers-example.yml_ verfügbar. Kopiere diese Datei zu _servers.yml_ und bearbeite diese mit einem Editor.

Diese Datei enthält Konfigurationsinformationen für die Serverinstanzen, die dieses Playbook erstellen wird. Jede Zeile startet zwei Instanzen.

Für jede Zeile können die Instanzgröße und die AWS-Region ausgewählt werden, wodurch Instanzen über mehrere Regionen verteilt werden können. AWS erlaubt nur eine begrenzte Anzahl von Instanzen in einer Region.


## Deployment

### Instanzen erstellen

Führe alle erforderlichen Konfigurationsschritte aus (siehe oben) und führe folgendes aus:

```
make deploy
```

Dadurch werden die in _servers.yml_ konfigurierten Instanzen erstellt, Unterverzeichnisse mit Instanzdetails erstellt (basierend auf _server_prefix_ und _servers_ + _name_). Jedes Unterverzeichnis enthält Shell-Skripte, die verwendet werden können, um sich direkt mit jedem Server zu verbinden. Dies erleichtert das Debuggen. Ebenfalls enthalten ist eine _ansible.cfg_ und eine Inventory-Datei.

Wenn dem Mix mehr Infrastruktur hinzugefügt werden soll, kann _servers.yml_ mit weiteren Einträgen versehen werden. Danach das Playbook erneut ausführen. Bereits bestehende Instanzen werden nicht angetastet (idempotent).

### Instanzen löschen

Folgender Befehl löscht alle Instanzen und weitere Infrastruktur, die mit dem _infra_name_ Tag versehen ist:

```
make destroy
```
