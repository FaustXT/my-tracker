{% extends "layout.tpl.php" %}
{% block content %}
<div class="w3-container w3-center">
   <h2>Game 2048</h2>
  <table align="center" border="1" >
 {% for x, row in map %}
 <tr>
   {% for y, col in row %}
   <td>{{ map[x][y] }}</td>
   {% endfor %}
 </tr>
 {% endfor %}
  </table>
  </div>
  <br>
  <div class="w3-container w3-center">
  <table align="center" >
    <tr>
      <td colspan="2">
        <a href="?game/up"><button class="w3-btn w3-white w3-border w3-border-green w3-round-large"><i class="fa fa-chevron-up" style="font-size:36px; color:Teal"></i></button></a>

      </td>
    </tr>
    <tr>
      <td >
        <a href="?game/left"><button class="w3-btn w3-white w3-border w3-border-green w3-round-large" style="width:100px" ><i class="fa fa-chevron-left" style="font-size:36px; color:Teal"></i></button></a>

      </td>
      <td>
        <a href="?game/right"><button class="w3-btn w3-white w3-border w3-border-green w3-round-large" style="width:100px"><i class="fa fa-chevron-right" style="font-size:36px; color:Teal"></i></button></a>

      </td>
    </tr>
    <tr>
      <td td colspan="2" >
        <a href="?game/down"><button class="w3-btn w3-white w3-border w3-border-green w3-round-large"><i class="fa fa-chevron-down" style="font-size:36px; color:Teal"></i></button></a>
      </td>
    </tr>
  </table>
  <a href="?game/newgame"><button class="w3-btn w3-white w3-border w3-border-green w3-round-large">New game</button></a>

</div>

{% endblock %}
