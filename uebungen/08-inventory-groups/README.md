# Übung 08

Inventory Groups

## Details

In dieser Übung erstellen wir weitere Gruppen im Inventory.

Diese Gruppen sprechen wir dann in Ansible Ad-Hoc Befehlen an.

## Vorbereitung

Für diese Übungen befindest du dich im Hauptverzeichnis des Repositories.

Das Inventory muss um einige Eintrag erweitert werden:

```
echo "" >> inventory
echo "[workshop]" >> inventory
echo "[workshop:children]" >> inventory
echo "dbservers" >> inventory
echo "webservers" >> inventory
```

Hinweis: Das Jahr ist mit Absicht falsch und wird im weiteren Verlauf geändert.

## Durchführung

```
ansible -i inventory -m shell -a "uptime" workshop
ansible -i inventory -m shell -a "uptime" dbservers
ansible -i inventory -m shell -a "uptime" webservers
```
