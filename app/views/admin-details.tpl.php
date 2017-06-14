{% extends "layout-admin.tpl.php" %}
{% block content %}

{% include 'admin-header.tpl.php' %}

<p>Type: {{ user.nikname|e }}</p>
<p> Gen: {{ user.email|e}}</p>

{% endblock %}
