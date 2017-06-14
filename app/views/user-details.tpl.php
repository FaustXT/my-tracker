{% extends "layout.tpl.php" %}
{% block content %}
<div class="w3-container">

</div>
<table class="w3-table w3-bordered">
  <tr>
    <td>
      <h2>{{ user.nikname|e }} </h2>
    </td>
  </tr>
  <tr>
    <td><img src="{{user.avatar|e}}" alt="avatar"></td>
  </tr>
  <tr>
    <td> <p>Email: {{ user.email|e}}</p></td>
  </tr>
  <tr>
    <td><p>User type: "{{user.role|e}}"</p> </td>
  </tr>
</table>
</div>




{% endblock %}
