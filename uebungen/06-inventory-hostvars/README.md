# Übung 06

Host Vars

## Details

In dieser Übung erstellen wir Host Variablen (Host Vars).

Dazu definieren wir Variablen im Inventory die für Hosts gültig sind, und aktualisieren dann die Webanwendung.
Dazu wird eine Variable dem Host hinzugefügt.

## Vorbereitung

Für diese Übungen befindest du dich im Hauptverzeichnis des Repositories.

Zusätzlich muss das inventory um die Variable erweitert werden:

```
sed -i 's/^\(host2.*\)/\1 year=2049/' inventory
```

## Durchführung

```
ansible-playbook uebungen/06-inventory-hostvars/main.yml
```
