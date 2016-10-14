{% extends "base.volt" %}
{% block content %}

    <h1>{{thread.title}}</h1>

    {% for reply in replies %}
        {{reply.text}}<br />
    {% endfor %}
{% endblock %}