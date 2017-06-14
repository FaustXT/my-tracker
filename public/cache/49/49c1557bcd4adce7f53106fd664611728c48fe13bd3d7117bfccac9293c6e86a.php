<?php

/* torrent-details.tpl.php */
class __TwigTemplate_16f68f29596a4d1db31abca6678cbb55dc75f4da2ff46018a53a93247a458dab extends Twig_Template
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
        echo "<table class=\"w3-table w3-bordered \">
  <tr><td>
    <div class=\"container w3-center\">
    ";
        // line 6
        if ($this->getAttribute(($context["torrent"] ?? null), "block", array())) {
            // line 7
            echo "       <h1>This torrent is blocked</h1>
    ";
        } else {
            // line 9
            echo "
       <h1><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "file", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "name", array()));
            echo "</a></h1>
    </div>
    ";
        }
        // line 13
        echo "  </td></tr>
  <tr>
      <td>
        <div class=\"w3-container w3-center\">
<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "image", array()));
        echo "\" alt=\"\" />
        </div>
      </td>
  </tr>
  <tr>
    <td>
      <div class=\"w3-container w3-center\">
<p> Name: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "name", array()));
        echo "</p>
  <p>Type: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "type", array()));
        echo "</p>
  <p> Gen: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "gen", array()));
        echo "</p>
      <div>
  </td>
     </tr>
     <tr>
       <td>
   <div class=\"w3-container w3-center\">
     <h3>Description</h3>
      <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "description", array()), "html", null, true);
        echo "</p>
    </div>
  </tr>
    </td>
    <tr> <td>
       <div class=\"w3-container w3-center\">
<p>Uploud by</p>
      </div>
    </tr> </td>
  </table>
";
        // line 44
        if (($context["IfLogin"] ?? null)) {
            // line 46
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 47
                echo "  <div class=\"w3-container\">
    <div class=\"w3-card-4\">
      <header class=\"w3-container w3-dark-grey\">
        <p>By ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "usernikname", array()));
                echo "  on date";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()));
                echo "<p>
      </header>
      <div class=\"w3-container\">
        <img src=\"public/images/avatar_616633_2.gif\" alt=\"Avatar\" class=\"w3-left  w3-margin-right\" >
        <p>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()));
                echo "</p><br>
      </div>
    </div>
  </div>
  <br>
  <br>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "<div class=\"w3-container w3-large\">
<form class=\"w3-container\" action=\"?comments/create/\" method=\"post\" >
<label class=\"w3-label w3-text-teal\"><b>Write a comment</b></label>
<!--<input class=\"w3-input w3-border w3-light-grey\" type=\"textarea\" name=\"comment\">-->
<textarea class=\"w3-input w3-border\" style=\"resize:none\"></textarea>
<input type=\"hidden\" name=\"torrentid\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
<button class=\"w3-btn w3-blue-grey\">And Commet<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</form>
</div>

";
        }
        // line 73
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
        return array (  151 => 73,  142 => 67,  135 => 62,  122 => 54,  113 => 50,  108 => 47,  103 => 46,  101 => 44,  88 => 34,  77 => 26,  73 => 25,  69 => 24,  59 => 17,  53 => 13,  45 => 10,  42 => 9,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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
<table class=\"w3-table w3-bordered \">
  <tr><td>
    <div class=\"container w3-center\">
    {% if torrent.block %}
       <h1>This torrent is blocked</h1>
    {% else %}

       <h1><a href=\"{{torrent.file}}\">{{ torrent.name|e }}</a></h1>
    </div>
    {% endif %}
  </td></tr>
  <tr>
      <td>
        <div class=\"w3-container w3-center\">
<img src=\"{{ torrent.image|e }}\" alt=\"\" />
        </div>
      </td>
  </tr>
  <tr>
    <td>
      <div class=\"w3-container w3-center\">
<p> Name: {{ torrent.name|e }}</p>
  <p>Type: {{ torrent.type|e }}</p>
  <p> Gen: {{ torrent.gen|e}}</p>
      <div>
  </td>
     </tr>
     <tr>
       <td>
   <div class=\"w3-container w3-center\">
     <h3>Description</h3>
      <p>{{ torrent.description }}</p>
    </div>
  </tr>
    </td>
    <tr> <td>
       <div class=\"w3-container w3-center\">
<p>Uploud by</p>
      </div>
    </tr> </td>
  </table>
{% if IfLogin %}
{#                  coments table                      #}
  {% for comment in comments %}
  <div class=\"w3-container\">
    <div class=\"w3-card-4\">
      <header class=\"w3-container w3-dark-grey\">
        <p>By {{comment.usernikname|e}}  on date{{comment.date|e}}<p>
      </header>
      <div class=\"w3-container\">
        <img src=\"public/images/avatar_616633_2.gif\" alt=\"Avatar\" class=\"w3-left  w3-margin-right\" >
        <p>{{comment.text|e}}</p><br>
      </div>
    </div>
  </div>
  <br>
  <br>
{% endfor %}
{#                  coments form                      #}
<div class=\"w3-container w3-large\">
<form class=\"w3-container\" action=\"?comments/create/\" method=\"post\" >
<label class=\"w3-label w3-text-teal\"><b>Write a comment</b></label>
<!--<input class=\"w3-input w3-border w3-light-grey\" type=\"textarea\" name=\"comment\">-->
<textarea class=\"w3-input w3-border\" style=\"resize:none\"></textarea>
<input type=\"hidden\" name=\"torrentid\" value=\"{{id}}\">
<button class=\"w3-btn w3-blue-grey\">And Commet<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</form>
</div>

{% endif %}

{% endblock %}
", "torrent-details.tpl.php", "C:\\Users\\Faust\\Desktop\\PHP\\tracker_4.1\\app\\views\\torrent-details.tpl.php");
    }
}
