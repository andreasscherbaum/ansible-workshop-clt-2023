# Übung 02

Erreichbarkeit der Maschine mittels Ansible überprüfen

## Vorbereitung

Für diese Übungen befindest du dich im Hauptverzeichnis des Repositories.

## Durchführung

```
ansible -m ping all
```

## gewünschtes Ergebnis

```
host2 | SUCCESS => {
    "changed": false, 
    "ping": "pong"
}
host1 | SUCCESS => {
    "changed": false, 
    "ping": "pong"
}
```
