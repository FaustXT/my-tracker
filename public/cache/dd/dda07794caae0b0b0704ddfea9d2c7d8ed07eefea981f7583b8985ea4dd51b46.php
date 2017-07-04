<?php

/* admin-details.tpl.php */
class __TwigTemplate_0493f27aedd22f2ab89a370ed811d97c52a7711e333c01d93e1440abf5f03700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout-admin.tpl.php", "admin-details.tpl.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-admin.tpl.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("admin-header.tpl.php", "admin-details.tpl.php", 4)->display($context);
        // line 5
        echo "
<p>Type: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nikname", array()));
        echo "</p>
<p> Gen: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()));
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "admin-details.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout-admin.tpl.php\" %}
{% block content %}

{% include 'admin-header.tpl.php' %}

<p>Type: {{ user.nikname|e }}</p>
<p> Gen: {{ user.email|e}}</p>

{% endblock %}
", "admin-details.tpl.php", "D:\\Git\\my-tracker\\my-tracker\\app\\views\\admin-details.tpl.php");
    }
}
