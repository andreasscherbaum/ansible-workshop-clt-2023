# Übung 09

Roles

## Details

In dieser Übung nutzen wir eine recht umfangreiche [Role](https://docs.ansible.com/ansible/latest/playbook_guide/playbooks_reuse_roles.html).

Die Role verwendet:

* Tasks
* Handlers
* Variables
* Defaults

Diese Übung kopiert die Datei `roles-example.php` aus `uebungen/09-roles/roles/php-anwendung/templates/` auf den Webserver. Dabei werden einige Variablen eingesetzt, von denen eine anfangs (Schritt 1) in `uebungen/09-roles/roles/php-anwendung/defaults/main.yml` gesetzt ist.

Wenn sich die Datei während des Uploads ändert, wird ein `notify` Handler ausgelöst, welcher am Ende den Webserver neu startet. Dies ist in `uebungen/09-roles/roles/php-anwendung/handlers/main.yml` definiert.

Die Datei `roles-example.php` wird hier nicht aus dem gemeinsamen `templates` Verzeichnis gezogen, sondern die Role sucht sich die Datei selbst. Dazu sucht Ansible in diversen [voreingestellten](https://docs.ansible.com/ansible/latest/playbook_guide/playbook_pathing.html#task-paths) Verzeichnissen nach dieser Datei. Die erste gefundene Datei wird gewählt.
In diesem Beispiel wird mittels der $template_fullpath Variable im Ergebnis gezeigt welche Datei Ansible ausgewählt hat.

In Schritt 2 wird dann der Wert der Variable `application_name` nicht mehr in den Defaults sondern in den Variablen der Role gesetzt. Dies überschreibt den Default Wert.

Testweise könnt ihr auch versuchen einen anderen Namen auf der Kommandozeile (siehe Übung 07) zu setzen.

## Vorbereitung

Für diese Übungen befindest du dich im Hauptverzeichnis des Repositories.

## Durchführung Schritt 1

```
ansible-playbook uebungen/09-roles/main.yml
```

Dies installiert die `example.php` und zieht die Variable `application_name` aus `uebungen/09-roles/roles/php-anwendung/defaults/main.yml`.

## Durchführung Schritt 2

Öffne die Datei `uebungen/09-roles/roles/php-anwendung/vars/main.yml` in einem Editor deiner Wahl.

Entferne den Kommentar vor der Variable `application_name`.

Führe das Playbook erneut aus:

```
ansible-playbook uebungen/09-roles/main.yml
```
