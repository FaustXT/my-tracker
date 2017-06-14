<?php

/* user-details.tpl.php */
class __TwigTemplate_c8e7faee2443e54d1e1623af1b17bf1cbad3c8bbc2aa1de322918d877fb3153e extends Twig_Template
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
        echo "
<p>Type: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nikname", array()));
        echo "</p>
<p> Gen: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()));
        echo "</p>




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
        return array (  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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

<p>Type: {{ user.nikname|e }}</p>
<p> Gen: {{ user.email|e}}</p>




{% endblock %}
", "user-details.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/user-details.tpl.php");
    }
}
