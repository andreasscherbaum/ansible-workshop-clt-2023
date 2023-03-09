<!DOCTYPE html>
<html>
<head>
    <title>Ansible Workshop - Jinja2 Beispiel2</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Ansible Workshop  - Jinja2 Beispiel2</h1>
    <p>
        Workshop: <a href="https://chemnitzer.linux-tage.de/{{ workshop_year }}/de/programm/beitrag/{{ workshop_id }}">{{ workshop_name }}</a>
    </p>

    <p>
        {{ template_fullpath }} -> {{ template_destpath }}, {{ template_run_date }}
    </p>

    <h3>Nicht gesetzte Variable - Default Wert</h3>
    Variable: {{ unknownvar | default('Default Wert') }}

    <h3>Liste ausgeben</h3>
{% for le in list_example %}
{%- if loop.first -%}
    <ul>
{%- endif -%}
        <li>{{ le }}</li>
{%- if loop.last -%}
    </ul>
{%- endif -%}
{% endfor %}

    <h3>Dictionary ausgeben</h3>
{% for de in dict_example %}
{%- if loop.first -%}
    <ul>
{%- endif -%}
        <li>{{ de }} -&gt; {{ dict_example[de] }}</li>
{%- if loop.last -%}
    </ul>
{%- endif -%}
{% endfor %}

    <h3>Dictionary Element ausgeben</h3>
    entry2 -&gt; {{ dict_example['entry2'] }}

    <h3>Variable Typ</h3>
    Variable Typ: {{ list_example | type_debug }}

    <h3>Variable als JSON</h3>
    Variable: <pre>{{ list_example | to_nice_json }}</pre>

    <h3>Variable als YAML</h3>
    Variable: <pre>{{ list_example | to_nice_yaml }}</pre>

    <h3>if-elif-else</h3>
{% if uebungnr == "09" %}
    &Uuml;bung 09
{% elif uebungnr == "10" %}
    &Uuml;bung 10
{% else %}
    unbekannte &Uuml;bung: {{ uebungnr }}
{% endif %}


</body>

</html>
