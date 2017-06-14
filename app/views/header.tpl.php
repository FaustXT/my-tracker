<nav class="w3-sidenav w3-white w3-card-2" style="display:none" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-closenav w3-large">Close &times;</a>
  <a href="?mytracker/home">Home</a>
  {% if IfLogin %}
  <a href="?user/profile">Account About</a>
  <a href="?torrent/create">Torrent Upload</a>
  <a href="?torrent/list">Torrents</a>
  <a href="?user/list">Users</a>

  {% else %}
  <a href="?user/login">Log IN</a>
  <a href="?user/create">Log UP</a>
    {% endif %}
  <a href="?games/list">Some games</a>
</nav>
<nav  >
  <div class="w3-container" style="float:right;">
    <form  name="LangForm" method="post" action="app/bootstrap.php" >
    <Select name="language" onchange="LangForm.submit()">
            <option value="">select</option>
        <option value="eng">eng</option>
        <option value="ro">ro</option>
        <option value="ru">ru</option>
      </select>
    </form>

  </div>
  {% if IfLogin %}

  <div class="w3-container" style="float:right; margin:7px;">
    <br>
    <ul class="w3-navbar w3-light-grey">
  <li><a href="?user/logout">Logout</a></li>
  </ul>
</div>
  {% endif %}
</nav>

<header class="w3-container w3-teal">
  <span class="w3-opennav w3-xlarge" onclick="w3_open()">&#9776;</span>
  <h1><a href="?mytracker/home" style="text-decoration: none;">My Tracker</a></h1>
</header>

<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
function submitform()
{
  document.LangForm.submit();
}
</script>
