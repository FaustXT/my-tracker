<?php

/* signin-form.tpl.php */
class __TwigTemplate_bc2d0668c8a98d2ca7c7781f4580c0c275c9593496cacd85a317f42880cbffbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "signin-form.tpl.php", 1);
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
        echo "<form action=\"?user/login\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Login</h2>

<!-- //////////////////////////user name /////////// -->
  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"username\" type=\"text\" placeholder=\"Username\">
    </div>
</div>


<!--  ///////////////////////////// passwords /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password1\" type=\"password\" placeholder=\"Password\">
    </div>
</div>
<div class=\"w3-rest\">
  <button class=\"w3-btn-block w3-teal w3-input\">Entere<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
</div>
";
        // line 26
        if (($context["error"] ?? null)) {
            // line 27
            echo "<div style=\"color:red;\" > ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 29
        if (($context["error_login"] ?? null)) {
            // line 30
            echo "<br>
<img class=\"w3-left-align\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["error_login"] ?? null), "html", null, true);
            echo "\" alt=\"\" />

<input class=\"w3-input w3-border \" style=\"width: 25%\" type=\"text\" name=\"captcha\" placeholder=\"Text from picture\" >
";
        }
        // line 35
        echo "

</form>


";
    }

    public function getTemplateName()
    {
        return "signin-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  69 => 31,  66 => 30,  64 => 29,  58 => 27,  56 => 26,  31 => 3,  28 => 2,  11 => 1,);
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
<form action=\"?user/login\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Login</h2>

<!-- //////////////////////////user name /////////// -->
  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"username\" type=\"text\" placeholder=\"Username\">
    </div>
</div>


<!--  ///////////////////////////// passwords /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password1\" type=\"password\" placeholder=\"Password\">
    </div>
</div>
<div class=\"w3-rest\">
  <button class=\"w3-btn-block w3-teal w3-input\">Entere<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
</div>
{% if error %}
<div style=\"color:red;\" > {{error}}</div>
{% endif %}
{% if error_login %}
<br>
<img class=\"w3-left-align\" src=\"{{error_login}}\" alt=\"\" />

<input class=\"w3-input w3-border \" style=\"width: 25%\" type=\"text\" name=\"captcha\" placeholder=\"Text from picture\" >
{% endif %}


</form>


{% endblock %}
", "signin-form.tpl.php", "C:\\Users\\Faust\\Desktop\\PHP\\tracker_4\\app\\views\\signin-form.tpl.php");
    }
}
