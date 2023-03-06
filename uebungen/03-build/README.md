# Übung 03

Server vorinstallieren

## Details

In dieser Übung werden alle Installationen durchgeführt die im Anfänger Workshop durchgeführt werden. Wir bauen damit nahtlos auf den vorherigen Workshops auf.

Dafür wird ein Webserver und ein Datenbankserver installiert und konfiguriert.

Die Installation läuft automatisch. Für Details könnt ihr die vorherigen Workshops anschauen:


* [Ansible Workshop für die Chemnitzer Linux-Tage 2020](https://github.com/andreasscherbaum/ansible-workshop-clt-2020)
* [Ansible Workshop für die Chemnitzer Linux-Tage 2019](https://github.com/andreasscherbaum/ansible-workshop-clt-2019)
* [Ansible Workshop für die Chemnitzer Linux-Tage 2018](https://github.com/andreasscherbaum/ansible-workshop-clt-2018)


## Vorbereitung

Für diese Übungen befindest du dich im Hauptverzeichnis des Repositories.

## Durchführung

```
ansible-playbook uebungen/03-build/main.yml
```

## gewünschtes Ergebnis

```

PLAY [Set hostnames] ***************************************************

TASK [Gathering Facts] *************************************************
ok: [host1]
ok: [host2]

TASK [Set hostname] ****************************************************
ok: [host1]
ok: [host2]


TASK [debug] ***********************************************************
ok: [host2] => {
    "msg": "Die URL lautet: http://xxx.xxx.xxx.xxx/index.php"
}

PLAY RECAP *************************************************************
host1                      : ok=17   changed=1    unreachable=0    failed=0    skipped=0    rescued=0    ignored=0   
host2                      : ok=15   changed=1    unreachable=0    failed=0    skipped=0    rescued=0    ignored=0   

```
