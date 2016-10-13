{% extends "base.volt" %}
{% block content %}
    <h2>Newest messages</h2>
    {% include 'common/message_list.volt' %}
    
    <div>
        <a href="{{ url(['for':'board']) }}">
           See all
        </a>
            
    </div>
{% endblock %}