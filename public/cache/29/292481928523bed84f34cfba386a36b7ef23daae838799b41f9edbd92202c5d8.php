<?php

/* user-profile.tpl.php */
class __TwigTemplate_614d0faa039685d828757a7daec53289e0de7f4e3f45cfc3243c11204f87bd09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "user-profile.tpl.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.tpl.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"w3-container\">

</div>
<table class=\"w3-table w3-bordered \">
  <tr>
    <td>
      <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nikname", array()));
        echo " </h2>
    </td>
  </tr>
  <tr>
    <td><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "avatar", array()));
        echo "\" alt=\"avatar\"></td>
  </tr>
  <tr>
    <td> <p>Email: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()));
        echo "</p></td>
  </tr>
  <tr>
    <td><p>User type: \"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "role", array()));
        echo "\"</p> </td>
  </tr>
</table>
</div>
<div class=\"w3-container\">
  <form class=\"\" action=\"?user/profile\" method=\"post\" enctype=\"multipart/form-data\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
    <div class=\"w3-row w3-section\">
         <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file\"></i></div>
    <label>Put Image File here</label>
      <div class=\"w3-rest\">
        <input class=\"w3-input w3-border\" name=\"photo\" type=\"file\">
        <input type=\"hidden\" name=\"userid\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()));
        echo "\">
      </div>
      <button class=\"w3-button w3-teal\">Upload<input style=\"visibility: hidden\"  type=\"submit\"></button>

      <br>
      ";
        // line 35
        if (($context["error_img"] ?? null)) {
            // line 36
            echo "      <div class=\"w3-red\" > ";
            echo twig_escape_filter($this->env, ($context["error_img"] ?? null), "html", null, true);
            echo "</div>
      ";
        }
        // line 38
        echo "      <br>
    </div>
  </form>
</div>

<div class=\"w3-container\">
  <h2>Change password </h2>
  <form class=\"\" action=\"?user/profile\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
<!--  Curent password -->
<div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
  <div class=\"w3-rest\">
    <input class=\"w3-input w3-border\" name=\"old_password\" type=\"password\" placeholder=\"Current password\">
  </div>
</div>
<!-- Cheange passwrd1-->

<div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
  <div class=\"w3-rest\">
    <input class=\"w3-input w3-border\" name=\"password1\" type=\"password\" placeholder=\"New password\">
  </div>
</div>
<!--Cheange password2 -->
<div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
  <div class=\"w3-rest\">
    <input class=\"w3-input w3-border\" name=\"password2\" type=\"password\" placeholder=\"Confirm new password\">
  </div>
</div>
<!-- Submit Butten-->
<div class=\"w3-rest\">
<button class=\"w3-button w3-teal\">Change<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</div>
";
        // line 72
        if (($context["error_pass"] ?? null)) {
            // line 73
            echo "<div class=\"w3-red\" > ";
            echo twig_escape_filter($this->env, ($context["error_pass"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 75
        if (($context["change_pass"] ?? null)) {
            // line 76
            echo "<div class=\"w3-green\" > ";
            echo twig_escape_filter($this->env, ($context["change_pass"] ?? null), "html", null, true);
            echo "!</div>
";
        }
        // line 78
        echo "  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "user-profile.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 78,  134 => 76,  132 => 75,  126 => 73,  124 => 72,  88 => 38,  82 => 36,  80 => 35,  72 => 30,  58 => 19,  52 => 16,  46 => 13,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.tpl.php\" %}
{% block content %}
<div class=\"w3-container\">

</div>
<table class=\"w3-table w3-bordered \">
  <tr>
    <td>
      <h2>{{ user.nikname|e }} </h2>
    </td>
  </tr>
  <tr>
    <td><img src=\"{{user.avatar|e}}\" alt=\"avatar\"></td>
  </tr>
  <tr>
    <td> <p>Email: {{ user.email|e}}</p></td>
  </tr>
  <tr>
    <td><p>User type: \"{{user.role|e}}\"</p> </td>
  </tr>
</table>
</div>
<div class=\"w3-container\">
  <form class=\"\" action=\"?user/profile\" method=\"post\" enctype=\"multipart/form-data\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
    <div class=\"w3-row w3-section\">
         <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file\"></i></div>
    <label>Put Image File here</label>
      <div class=\"w3-rest\">
        <input class=\"w3-input w3-border\" name=\"photo\" type=\"file\">
        <input type=\"hidden\" name=\"userid\" value=\"{{user.id|e}}\">
      </div>
      <button class=\"w3-button w3-teal\">Upload<input style=\"visibility: hidden\"  type=\"submit\"></button>

      <br>
      {% if error_img %}
      <div class=\"w3-red\" > {{error_img}}</div>
      {% endif %}
      <br>
    </div>
  </form>
</div>

<div class=\"w3-container\">
  <h2>Change password </h2>
  <form class=\"\" action=\"?user/profile\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
<!--  Curent password -->
<div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
  <div class=\"w3-rest\">
    <input class=\"w3-input w3-border\" name=\"old_password\" type=\"password\" placeholder=\"Current password\">
  </div>
</div>
<!-- Cheange passwrd1-->

<div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
  <div class=\"w3-rest\">
    <input class=\"w3-input w3-border\" name=\"password1\" type=\"password\" placeholder=\"New password\">
  </div>
</div>
<!--Cheange password2 -->
<div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
  <div class=\"w3-rest\">
    <input class=\"w3-input w3-border\" name=\"password2\" type=\"password\" placeholder=\"Confirm new password\">
  </div>
</div>
<!-- Submit Butten-->
<div class=\"w3-rest\">
<button class=\"w3-button w3-teal\">Change<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</div>
{% if error_pass %}
<div class=\"w3-red\" > {{error_pass}}</div>
{% endif %}
{% if change_pass %}
<div class=\"w3-green\" > {{change_pass}}!</div>
{% endif %}
  </form>
</div>
{% endblock %}
", "user-profile.tpl.php", "D:\\disck_drive\\PHP\\tracker_4.1\\app\\views\\user-profile.tpl.php");
    }
}
