<?php

/* user-details.tpl.php */
class __TwigTemplate_15d3ab859a357b1c6b532a228ab99e387044b264495d4fbf81dfdb58da5d6372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "user-details.tpl.php", 1);
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
<table class=\"w3-table w3-bordered\">
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




";
    }

    public function getTemplateName()
    {
        return "user-details.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  52 => 16,  46 => 13,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
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
<table class=\"w3-table w3-bordered\">
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




{% endblock %}
", "user-details.tpl.php", "C:\\Users\\Faust\\Desktop\\PHP\\tracker_4.1\\app\\views\\user-details.tpl.php");
    }
}
