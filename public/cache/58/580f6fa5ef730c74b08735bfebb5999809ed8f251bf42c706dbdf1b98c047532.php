<?php

/* torrent-details.tpl.php */
class __TwigTemplate_a4184ac796865df8c43d26d5be8918be54be499dc0109388676355acafdfdac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrent-details.tpl.php", 1);
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
        echo "<p><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "file", array()), "html", null, true);
        echo "\">torrent file</a> </p>
<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "image", array()));
        echo "\" alt=\"\" />
<p>
  Name: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "name", array()));
        echo "</p>
  <p>Type: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "type", array()));
        echo "</p>
  <p> Gen: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "gen", array()));
        echo "</p>
   <div class=\"w3-container\">
     <h3>Description</h3>
      <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "description", array()), "html", null, true);
        echo "</p>
    </div>
</p>
";
        // line 14
        if (($context["IfLogin"] ?? null)) {
            // line 15
            echo "<table class=\"w3-table-all w3-centered\">
  ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 17
                echo "<tr>
  <th>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "usernikname", array()));
                echo "  date";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()));
                echo "</th>
</tr>
<tr>
  <td>same avatar</td>
  <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()));
                echo "</td>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</tr>
</table>
  <form class=\"w3-container\" action=\"?comments/create/\" method=\"post\" >
  <label class=\"w3-label w3-text-teal\"><b>First Name</b></label>
  <input class=\"w3-input w3-border w3-light-grey\" type=\"textarea\" name=\"comment\">
<input type=\"hidden\" name=\"torrentid\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
  <button class=\"w3-btn w3-blue-grey\">And Commet<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</form>

";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "torrent-details.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  97 => 29,  90 => 24,  82 => 22,  73 => 18,  70 => 17,  66 => 16,  63 => 15,  61 => 14,  55 => 11,  49 => 8,  45 => 7,  41 => 6,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
<p><a href=\"{{torrent.file}}\">torrent file</a> </p>
<img src=\"{{ torrent.image|e }}\" alt=\"\" />
<p>
  Name: {{ torrent.name|e }}</p>
  <p>Type: {{ torrent.type|e }}</p>
  <p> Gen: {{ torrent.gen|e}}</p>
   <div class=\"w3-container\">
     <h3>Description</h3>
      <p>{{ torrent.description }}</p>
    </div>
</p>
{% if IfLogin %}
<table class=\"w3-table-all w3-centered\">
  {% for comment in comments %}
<tr>
  <th>{{comment.usernikname|e}}  date{{comment.date|e}}</th>
</tr>
<tr>
  <td>same avatar</td>
  <td>{{comment.text|e}}</td>
  {% endfor %}
</tr>
</table>
  <form class=\"w3-container\" action=\"?comments/create/\" method=\"post\" >
  <label class=\"w3-label w3-text-teal\"><b>First Name</b></label>
  <input class=\"w3-input w3-border w3-light-grey\" type=\"textarea\" name=\"comment\">
<input type=\"hidden\" name=\"torrentid\" value=\"{{id}}\">
  <button class=\"w3-btn w3-blue-grey\">And Commet<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</form>

{% endif %}

{% endblock %}
", "torrent-details.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/torrent-details.tpl.php");
    }
}
