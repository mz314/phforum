{% extends "base.volt" %}
{% block content %}
    <h2>
        All messages
    </h2>
   {% include 'common/message_list.volt' %}
        
    <br />
    <br />
    
    <form method="POST">
        {% for m in form.getMessages() %}
            {{m}}
        {% endfor %}
        {{form.render("title")}}
        {{form.render("text")}}
        <button type="submit">Send</button>
    </form>
{% endblock %}