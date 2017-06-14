<?php

/* admin-details.tpl.php */
class __TwigTemplate_8482447c4b18c90cc6ef389fdfcde7da91f506029de018d42e7900de7802ce2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout-admin.tpl.php", "admin-details.tpl.php", 2);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("admin-header.tpl.php", "admin-details.tpl.php", 5)->display($context);
        // line 6
        echo "
<p>Type: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nikname", array()));
        echo "</p>
<p> Gen: ";
        // line 8
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
        return array (  43 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layout-admin.tpl.php\" %}
{% block content %}

{% include 'admin-header.tpl.php' %}

<p>Type: {{ user.nikname|e }}</p>
<p> Gen: {{ user.email|e}}</p>

{% endblock %}
", "admin-details.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/admin-details.tpl.php");
    }
}
