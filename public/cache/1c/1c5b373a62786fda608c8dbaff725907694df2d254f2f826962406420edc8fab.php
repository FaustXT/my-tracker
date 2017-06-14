<?php

/* signup-form.tpl.php */
class __TwigTemplate_e6559570640ac43ef2a9e206cfd40613197847355e7404944e4ee28ac1a56c6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "signup-form.tpl.php", 1);
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
        echo "<form action=\"?user/create\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Create an acaunt</h2>

<!-- //////////////////////////user name /////////// -->
  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"username\" type=\"text\" placeholder=\"Username\">
    </div>
</div>
";
        // line 13
        if (($context["error_un"] ?? null)) {
            // line 14
            echo "<div class=\"w3-text-red\" > ";
            echo twig_escape_filter($this->env, ($context["error_un"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 16
        echo "<!--  ///////////////////////////// password1 /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password1\" type=\"password\" placeholder=\"Password\">
    </div>
</div>
";
        // line 23
        if (($context["error_pa1"] ?? null)) {
            // line 24
            echo "<div class=\"w3-text-red\" > ";
            echo twig_escape_filter($this->env, ($context["error_pa1"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 26
        echo "<!--  ///////////////////////////// password2 /////////////-->

<div class=\"w3-row w3-section\">
  <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password2\" type=\"password\" placeholder=\"Confirm password\">
    </div>
</div>
";
        // line 34
        if (($context["error_pa2"] ?? null)) {
            // line 35
            echo "<div class=\"w3-text-red\" > ";
            echo twig_escape_filter($this->env, ($context["error_pa2"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 37
        echo "<!-- /////////////////// Email ///////////////-->
<div class=\"w3-row w3-section\">
  <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-envelope-o\"></i></div>

    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"email\" type=\"text\" placeholder=\"Email\">
    </div>
</div>
";
        // line 45
        if (($context["error_em"] ?? null)) {
            // line 46
            echo "<div class=\"w3-text-red\" > ";
            echo twig_escape_filter($this->env, ($context["error_em"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 48
        echo "<button class=\"w3-btn-block w3-teal w3-input\">Button<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
</form>
";
    }

    public function getTemplateName()
    {
        return "signup-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 48,  98 => 46,  96 => 45,  86 => 37,  80 => 35,  78 => 34,  68 => 26,  62 => 24,  60 => 23,  51 => 16,  45 => 14,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
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
<form action=\"?user/create\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Create an acaunt</h2>

<!-- //////////////////////////user name /////////// -->
  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"username\" type=\"text\" placeholder=\"Username\">
    </div>
</div>
{% if error_un %}
<div class=\"w3-text-red\" > {{error_un}}</div>
{% endif %}
<!--  ///////////////////////////// password1 /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password1\" type=\"password\" placeholder=\"Password\">
    </div>
</div>
{% if error_pa1 %}
<div class=\"w3-text-red\" > {{error_pa1}}</div>
{% endif %}
<!--  ///////////////////////////// password2 /////////////-->

<div class=\"w3-row w3-section\">
  <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password2\" type=\"password\" placeholder=\"Confirm password\">
    </div>
</div>
{% if error_pa2 %}
<div class=\"w3-text-red\" > {{error_pa2}}</div>
{% endif %}
<!-- /////////////////// Email ///////////////-->
<div class=\"w3-row w3-section\">
  <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-envelope-o\"></i></div>

    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"email\" type=\"text\" placeholder=\"Email\">
    </div>
</div>
{% if error_em %}
<div class=\"w3-text-red\" > {{error_em}}</div>
{% endif %}
<button class=\"w3-btn-block w3-teal w3-input\">Button<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
</form>
{% endblock %}
", "signup-form.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/signup-form.tpl.php");
    }
}
