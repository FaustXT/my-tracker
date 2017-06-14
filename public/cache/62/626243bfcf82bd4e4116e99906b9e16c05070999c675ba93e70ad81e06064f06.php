<?php

/* header.tpl.php */
class __TwigTemplate_d709cb55007f634582f9c9bcbe79f62f252e256005225db5337d41a3879c4f2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"w3-sidenav w3-white w3-card-2\" style=\"display:none\" id=\"mySidenav\">
  <a href=\"javascript:void(0)\" onclick=\"w3_close()\"
  class=\"w3-closenav w3-large\">Close &times;</a>
  <a href=\"?mytracker/home\">Home</a>
  ";
        // line 5
        if (($context["IfLogin"] ?? null)) {
            // line 6
            echo "  <a href=\"?user/profile\">Account About</a>
  <a href=\"?torrent/create\">Torrent Upload</a>
  <a href=\"?torrent/list\">Torrents</a>
  <a href=\"?user/list\">Users</a>

  ";
        } else {
            // line 12
            echo "  <a href=\"?user/login\">Log IN</a>
  <a href=\"?user/create\">Log UP</a>
    ";
        }
        // line 15
        echo "  <a href=\"?games/list\">Some games</a>
</nav>
<nav  >
  <div class=\"w3-container\" style=\"float:right;\">
    <form  name=\"LangForm\" method=\"post\" action=\"app/bootstrap.php\" >
    <Select name=\"language\" onchange=\"LangForm.submit()\">
            <option value=\"\">select</option>
        <option value=\"eng\">eng</option>
        <option value=\"ro\">ro</option>
        <option value=\"ru\">ru</option>
      </select>
    </form>

  </div>
  ";
        // line 29
        if (($context["IfLogin"] ?? null)) {
            // line 30
            echo "
  <div class=\"w3-container\" style=\"float:right; margin:7px;\">
    <br>
    <ul class=\"w3-navbar w3-light-grey\">
  <li><a href=\"?user/logout\">Logout</a></li>
  </ul>
</div>
  ";
        }
        // line 38
        echo "</nav>

<header class=\"w3-container w3-teal\">
  <span class=\"w3-opennav w3-xlarge\" onclick=\"w3_open()\">&#9776;</span>
  <h1><a href=\"?mytracker/home\" style=\"text-decoration: none;\">My Tracker</a></h1>
</header>

<script>
function w3_open() {
    document.getElementById(\"mySidenav\").style.display = \"block\";
}
function w3_close() {
    document.getElementById(\"mySidenav\").style.display = \"none\";
}
function submitform()
{
  document.LangForm.submit();
}
</script>
";
    }

    public function getTemplateName()
    {
        return "header.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 38,  58 => 30,  56 => 29,  40 => 15,  35 => 12,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"w3-sidenav w3-white w3-card-2\" style=\"display:none\" id=\"mySidenav\">
  <a href=\"javascript:void(0)\" onclick=\"w3_close()\"
  class=\"w3-closenav w3-large\">Close &times;</a>
  <a href=\"?mytracker/home\">Home</a>
  {% if IfLogin %}
  <a href=\"?user/profile\">Account About</a>
  <a href=\"?torrent/create\">Torrent Upload</a>
  <a href=\"?torrent/list\">Torrents</a>
  <a href=\"?user/list\">Users</a>

  {% else %}
  <a href=\"?user/login\">Log IN</a>
  <a href=\"?user/create\">Log UP</a>
    {% endif %}
  <a href=\"?games/list\">Some games</a>
</nav>
<nav  >
  <div class=\"w3-container\" style=\"float:right;\">
    <form  name=\"LangForm\" method=\"post\" action=\"app/bootstrap.php\" >
    <Select name=\"language\" onchange=\"LangForm.submit()\">
            <option value=\"\">select</option>
        <option value=\"eng\">eng</option>
        <option value=\"ro\">ro</option>
        <option value=\"ru\">ru</option>
      </select>
    </form>

  </div>
  {% if IfLogin %}

  <div class=\"w3-container\" style=\"float:right; margin:7px;\">
    <br>
    <ul class=\"w3-navbar w3-light-grey\">
  <li><a href=\"?user/logout\">Logout</a></li>
  </ul>
</div>
  {% endif %}
</nav>

<header class=\"w3-container w3-teal\">
  <span class=\"w3-opennav w3-xlarge\" onclick=\"w3_open()\">&#9776;</span>
  <h1><a href=\"?mytracker/home\" style=\"text-decoration: none;\">My Tracker</a></h1>
</header>

<script>
function w3_open() {
    document.getElementById(\"mySidenav\").style.display = \"block\";
}
function w3_close() {
    document.getElementById(\"mySidenav\").style.display = \"none\";
}
function submitform()
{
  document.LangForm.submit();
}
</script>
", "header.tpl.php", "D:\\disck_drive\\PHP\\tracker_4.1\\app\\views\\header.tpl.php");
    }
}
