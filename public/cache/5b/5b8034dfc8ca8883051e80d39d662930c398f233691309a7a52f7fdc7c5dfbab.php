<?php

/* header.tpl.php */
class __TwigTemplate_4b8fb512f31babee114dcdcf89c6c02b18237ad804f9f316be284f2976f9cc3d extends Twig_Template
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
            echo "  <a href=\"?user/details\">Account About</a>
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
        echo "
  <a href=\"#\">About US</a>
</nav>
<nav  >
  ";
        // line 19
        if (($context["IfLogin"] ?? null)) {
            // line 20
            echo "  <div class=\"w3-container\" style=\"float:right; margin-top:7px;\">
    <ul class=\"w3-navbar w3-light-grey\">
  <li><a href=\"?user/logout\">Logout</a></li>
  </ul>
</div>
  ";
        }
        // line 26
        echo "</nav>

<header class=\"w3-container w3-teal\">
  <span class=\"w3-opennav w3-xlarge\" onclick=\"w3_open()\">&#9776;</span>
  <h1>My Tracker</h1>
</header>

<script>
function w3_open() {
    document.getElementById(\"mySidenav\").style.display = \"block\";
}
function w3_close() {
    document.getElementById(\"mySidenav\").style.display = \"none\";
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
        return array (  56 => 26,  48 => 20,  46 => 19,  40 => 15,  35 => 12,  27 => 6,  25 => 5,  19 => 1,);
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
  <a href=\"?user/details\">Account About</a>
  <a href=\"?torrent/create\">Torrent Upload</a>
  <a href=\"?torrent/list\">Torrents</a>
  <a href=\"?user/list\">Users</a>
  
  {% else %}
  <a href=\"?user/login\">Log IN</a>
  <a href=\"?user/create\">Log UP</a>
    {% endif %}

  <a href=\"#\">About US</a>
</nav>
<nav  >
  {% if IfLogin %}
  <div class=\"w3-container\" style=\"float:right; margin-top:7px;\">
    <ul class=\"w3-navbar w3-light-grey\">
  <li><a href=\"?user/logout\">Logout</a></li>
  </ul>
</div>
  {% endif %}
</nav>

<header class=\"w3-container w3-teal\">
  <span class=\"w3-opennav w3-xlarge\" onclick=\"w3_open()\">&#9776;</span>
  <h1>My Tracker</h1>
</header>

<script>
function w3_open() {
    document.getElementById(\"mySidenav\").style.display = \"block\";
}
function w3_close() {
    document.getElementById(\"mySidenav\").style.display = \"none\";
}
</script>
", "header.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/header.tpl.php");
    }
}
