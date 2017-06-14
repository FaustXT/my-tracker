{% extends "layout.tpl.php" %}
{% block content %}
<div class="w3-container">

</div>
<table class="w3-table w3-bordered ">
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
<div class="w3-container">
  <form class="" action="?user/profile" method="post" enctype="multipart/form-data" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
    <div class="w3-row w3-section">
         <div class="w3-col" style="width:50px"><i class="w3-xxlarge 	fa fa-file"></i></div>
    <label>Put Image File here</label>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="photo" type="file">
        <input type="hidden" name="userid" value="{{user.id|e}}">
      </div>
      <button class="w3-button w3-teal">Upload<input style="visibility: hidden"  type="submit"></button>

      <br>
      {% if error_img %}
      <div class="w3-red" > {{error_img}}</div>
      {% endif %}
      <br>
    </div>
  </form>
</div>

<div class="w3-container">
  <h2>Change password </h2>
  <form class="" action="?user/profile" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<!--  Curent password -->
<div class="w3-row w3-section">
     <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
  <div class="w3-rest">
    <input class="w3-input w3-border" name="old_password" type="password" placeholder="Current password">
  </div>
</div>
<!-- Cheange passwrd1-->

<div class="w3-row w3-section">
     <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
  <div class="w3-rest">
    <input class="w3-input w3-border" name="password1" type="password" placeholder="New password">
  </div>
</div>
<!--Cheange password2 -->
<div class="w3-row w3-section">
     <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
  <div class="w3-rest">
    <input class="w3-input w3-border" name="password2" type="password" placeholder="Confirm new password">
  </div>
</div>
<!-- Submit Butten-->
<div class="w3-rest">
<button class="w3-button w3-teal">Change<input style="visibility: hidden"  type="submit" value="Create!"></button>
</div>
{% if error_pass %}
<div class="w3-red" > {{error_pass}}</div>
{% endif %}
{% if change_pass %}
<div class="w3-green" > {{change_pass}}!</div>
{% endif %}
  </form>
</div>
{% endblock %}
