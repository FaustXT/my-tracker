<?php

/* comments-form.tpl.php */
class __TwigTemplate_2ec6c964025c4f9f65e0c545c00518dc95fedd4f1a69375c3988a53ee70e0a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("torrent-details.tpl.php", "comments-form.tpl.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "torrent-details.tpl.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<form class=\"w3-container\" action=\"?comments/create/\" method=\"post\" >
<label class=\"w3-label w3-text-teal\"><b>First Name</b></label>
<input class=\"w3-input w3-border w3-light-grey\" type=\"textarea\" name=\"comment\">
<input type=\"hidden\" name=\"torrentid\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
<button class=\"w3-btn w3-blue-grey\">And Commet<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</form>
";
    }

    public function getTemplateName()
    {
        return "comments-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"torrent-details.tpl.php\" %}
{% block content %}
<form class=\"w3-container\" action=\"?comments/create/\" method=\"post\" >
<label class=\"w3-label w3-text-teal\"><b>First Name</b></label>
<input class=\"w3-input w3-border w3-light-grey\" type=\"textarea\" name=\"comment\">
<input type=\"hidden\" name=\"torrentid\" value=\"{{id}}\">
<button class=\"w3-btn w3-blue-grey\">And Commet<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</form>
{% endblock %}
", "comments-form.tpl.php", "C:\\Users\\Faust\\Desktop\\PHP\\tracker_4.1\\app\\views\\comments-form.tpl.php");
    }
}
