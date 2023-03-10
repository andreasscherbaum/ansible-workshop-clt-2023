# Übung 05

Group Vars

## Details

In dieser Übung erstellen wir Gruppenvariablen (Group Vars).

Dazu definieren wir Variablen im Inventory, die für Gruppen gültig sind, und aktualisieren dann die Webanwendung.
Dazu wird eine separate Datei mit dem Namen der Gruppe verwendet.

In der [Variable Precedence](https://docs.ansible.com/ansible/latest/playbook_guide/playbooks_variables.html#understanding-variable-precedence) stehen diese Variablen an 6. Stelle.

## Vorbereitung

Für diese Übungen befindest du dich im Hauptverzeichnis des Repositories.

Zusätzlich muss das Verzeichnis `group_vars` angelegt und die Datei `webservers.yml` dorthin kopiert werden:

```
mkdir group_vars
cp -a uebungen/05-inventory-groupvars/webservers.yml group_vars/webservers.yml
```

## Durchführung

```
ansible-playbook uebungen/05-inventory-groupvars/main.yml
```
