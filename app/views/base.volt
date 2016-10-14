<html>
    <head>

        <title>
            {% block title %}
                Phalcon forum
            {% endblock %}
        </title>
        {% block javascripts %}
            <script src="vendor/jquery/dist/jquery.min.js"></script>
            <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        {% endblock %}

        {% block stylesheets %}
            <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css" />
            <link rel="stylesheet" href="css/style.css" />
        {% endblock %}

    </head>
    <body>
        {% block header %}
            <header>
            {% if auth.getUser().isAuthenticated() %}
                
                Current user {{auth.getUser().username}} <a href="{{ url(['for':'logout']) }}">Logout</a>
                
            {% else %}
                Anonymous <a href="{{ url(['for':'login']) }}">Login</a>
            {% endif %}
            </header>
        {% endblock %}
        {% block content %}

        {% endblock %}
    </body>
</html>