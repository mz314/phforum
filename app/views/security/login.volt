{% extends "base.volt" %}
{% block content %}
      <form method="POST">
        {% for m in form.getMessages() %}
            {{m}}
        {% endfor %}
        {{form.render("username")}}
        {{form.render("password")}}
        <button type="submit">Login</button>
    </form>
{% endblock %}
