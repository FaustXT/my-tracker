<?php

/* user-list.tpl.php */
class __TwigTemplate_ff1bf29bcc1c2de6f869cad55293e9f9e0f78014eba70e11e89da4ab0d2a1249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "user-list.tpl.php", 1);
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
        echo "<div class=\"w3-container w3-center w3-green\">
  <h2>Users list</h2>
</div>
<div class=\"w3-container\">
  <table class=\"w3-table-all\">
     <tr class=\"w3-blue\"></a><th>Name</th> </tr>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 10
            echo "    <tr> <th><a href=\"?user/details/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nikname", array()));
            echo "</a></th>  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </table>
</div>

";
    }

    public function getTemplateName()
    {
        return "user-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  43 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
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
<div class=\"w3-container w3-center w3-green\">
  <h2>Users list</h2>
</div>
<div class=\"w3-container\">
  <table class=\"w3-table-all\">
     <tr class=\"w3-blue\"></a><th>Name</th> </tr>
{%  for user in users %}
    <tr> <th><a href=\"?user/details/{{user.id|e}}\">{{ user.nikname|e }}</a></th>  </tr>
{% endfor %}
  </table>
</div>

{% endblock %}
", "user-list.tpl.php", "D:\\Git\\my-tracker\\my-tracker\\app\\views\\user-list.tpl.php");
    }
}
