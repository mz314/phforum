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
        {% endblock %}

    </head>
    <body>
        {% block content %}

        {% endblock %}
    </body>
</html>