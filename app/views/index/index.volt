{% extends "base.volt" %}
{% block content %}
Some messages:<br />
{% for m in messages %}
    {{ m.id }} {{ m.text }} {{m.uname}}

{% endfor %}

{% endblock %}