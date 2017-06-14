{% extends "layout.tpl.php" %}
{% block content %}
<form action="?user/create" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
  <h2 class="w3-center"> Create an acaunt</h2>

<!-- //////////////////////////user name /////////// -->
  <div class="w3-row w3-section">
     <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="username" type="text" placeholder="Username">
    </div>
</div>
{% if error.name is defined %}
<div class="w3-text-red" > aafasf{{ error.name|e }}</div>
{% endif %}
<!--  ///////////////////////////// password1 /////////////-->
  <div class="w3-row w3-section">
       <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="password1" type="password" placeholder="Password">
    </div>
</div>
{% if error.password1 %}
<div class="w3-text-red" > {{ error.password1 }}</div>
{% endif %}
<!--  ///////////////////////////// password2 /////////////-->

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="password2" type="password" placeholder="Confirm password">
    </div>
</div>
{% if error.password2 %}
<div class="w3-text-red" > {{ error.password2|e }}</div>
{% endif %}
<!-- /////////////////// Email ///////////////-->
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>

    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
    </div>
</div>
{% if error.email %}
<div class="w3-text-red" > {{ error.email }}</div>
{% endif %}
<button class="w3-btn-block w3-teal w3-input">Button<input style="visibility: hidden"  type="submit" value="Create!"></button>
<br>
</form>
{% endblock %}
