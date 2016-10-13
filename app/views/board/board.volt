{% extends "base.volt" %}
{% block content %}
    
    <table class="table-bordered" style="width: 100%">
        <tbody>
            {% for m in messages %}
                <tr>
                    <td>{{m.uname}}</td><td>{{ m.text }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
        
    <br />
    <br />
    
    <form method="POST">
        {% for m in form.getMessages() %}
            {{m}}
        {% endfor %}
        {{form.render("uname")}}
        {{form.render("text")}}
        <button type="submit">Send</button>
    </form>
{% endblock %}