<!DOCTYPE html>
<html>
<head>
    <title>Ansible Workshop f&uuml;r die {{ event }} {{ year }}</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Ansible Workshop f&uuml;r die {{ event }} {{ year }}</h1>
    <p>
        <ul>
            <li><a href="database.php">Datenbank Test</a></li>
            <li><a href="phpinfo.php">PHP Info</a></li>
            <li><a href="roles-example.php">Beispiel f&uuml;r Roles</a></li>
            <li><a href="jinja2-example.php">Beispiel f&uuml;r Jinja2 Templates</a></li>
        </ul>
    </p>
    Finden statt in: {{ location }}
    <p>
        &Uuml;bung {{ uebungnr }}
    </p>
    <p>
        Workshop: <a href="https://chemnitzer.linux-tage.de/{{ workshop_year }}/de/programm/beitrag/{{ workshop_id }}">{{ workshop_name }}</a>
    </p>
</body>

</html>
