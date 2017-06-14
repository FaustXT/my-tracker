{% extends "layout.tpl.php" %}
{% block content %}

<div class="w3-container w3-center">
  <h2>Torrent list</h2>
</div>
<div class="w3-container">
  <table class="w3-table-all w3-hoverable">
     <tr class="w3-Green">
       </a>
       <th>Name</th>
       <th>Type</th>
       <th>Gen</th>
     </tr>

{% for torrent in torrents %}
<tr>
<td><a href="?torrent/details/{{torrent.id|e}}">{{ torrent.name|e }}</a></td>
  <td>{{ torrent.type|e }}</td>
  <td>{{ torrent.gen|e }}</td>
  </tr>
{% endfor %}

</table>
</div>

{% endblock %}
