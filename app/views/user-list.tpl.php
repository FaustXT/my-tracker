{% extends "layout.tpl.php" %}
{% block content %}
<div class="w3-container w3-center w3-green">
  <h2>Users list</h2>
</div>
<div class="w3-container">
  <table class="w3-table-all">
     <tr class="w3-blue"></a><th>Name</th> </tr>
{%  for user in users %}
    <tr> <th><a href="?user/details/{{user.id|e}}">{{ user.nikname|e }}</a></th>  </tr>
{% endfor %}
  </table>
</div>

{% endblock %}
