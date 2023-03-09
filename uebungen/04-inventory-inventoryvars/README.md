# Übung 04

Inventory Vars

## Details

In dieser Übung erstellen wir Inventory Variablen (Inventory Vars).

Dazu definieren wir Variablen im Inventory die für Gruppen gültig sind, und aktualisieren dann die Webanwendung.
Dazu wird ein neuer Eintrag in das Inventory geschrieben.

In der [Variable Precedence](https://docs.ansible.com/ansible/latest/playbook_guide/playbooks_variables.html#understanding-variable-precedence) stehen diese Variablen an 3. Stelle.

## Vorbereitung

Für diese Übungen befindest du dich im Hauptverzeichnis des Repositories.

Das Inventory muss um einen Eintrag erweitert werden:

```
echo "" >> inventory
echo "[webservers:vars]" >> inventory
echo "year=2022" >> inventory
```

Hinweis: Das Jahr ist mit Absicht falsch und wird im weiteren Verlauf geändert.

## Durchführung

```
ansible-playbook uebungen/04-inventory-inventoryvars/main.yml
```
