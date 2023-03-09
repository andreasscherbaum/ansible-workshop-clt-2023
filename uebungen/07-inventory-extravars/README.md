# Übung 07

Extra Vars

## Details

In dieser Übung erstellen wir Extra Variablen (Extra Vars).

Dazu definieren wir Variablen auf der Kommandozeile und aktualisieren dann die Webanwendung.

In der [Variable Precedence](https://docs.ansible.com/ansible/latest/playbook_guide/playbooks_variables.html#understanding-variable-precedence) stehen diese Variablen an 22. Stelle. Das ist die höchste Stelle und hat Vorrang vor allen anderen Definitionen.

## Vorbereitung

Für diese Übungen befindest du dich im Hauptverzeichnis des Repositories.

## Durchführung

```
ansible-playbook -e "year=2245" uebungen/07-inventory-extravars/main.yml
```
