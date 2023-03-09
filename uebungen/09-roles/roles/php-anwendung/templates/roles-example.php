<!DOCTYPE html>
<html>
<head>
    <title>Ansible Workshop - Role Beispiel</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Ansible Workshop  - Role Beispiel</h1>
    <p>
        Workshop: <a href="https://chemnitzer.linux-tage.de/{{ workshop_year }}/de/programm/beitrag/{{ workshop_id }}">{{ workshop_name }}</a>
    </p>

    <p>
        Anwendungsname: {{ application_name }}
    </p>

    <p>
        {{ template_fullpath }} -> {{ template_destpath }}, {{ template_run_date }}
    </p>
</body>

</html>
