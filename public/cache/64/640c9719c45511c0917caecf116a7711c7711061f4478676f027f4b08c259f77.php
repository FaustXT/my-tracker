<?php

/* torrent-list.tpl.php */
class __TwigTemplate_9a14b7c6a117d42fda540bb03a4cbde4a8b52c5e3c57b6af9b66d140ddee6b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrent-list.tpl.php", 1);
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
<div class=\"w3-container w3-center\">
  <h2>Torrent list</h2>
</div>
<div class=\"w3-container\">
  <table class=\"w3-table-all w3-hoverable\">
     <tr class=\"w3-Green\">
       </a>
       <th>Name</th>
       <th>Type</th>
       <th>Gen</th>
     </tr>

";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["torrents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["torrent"]) {
            // line 17
            echo "<tr>
<td><a href=\"?torrent/details/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "id", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "name", array()));
            echo "</a></td>
  <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "type", array()));
            echo "</td>
  <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "gen", array()));
            echo "</td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torrent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</table>
</div>

";
    }

    public function getTemplateName()
    {
        return "torrent-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  63 => 20,  59 => 19,  53 => 18,  50 => 17,  46 => 16,  31 => 3,  28 => 2,  11 => 1,);
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

<div class=\"w3-container w3-center\">
  <h2>Torrent list</h2>
</div>
<div class=\"w3-container\">
  <table class=\"w3-table-all w3-hoverable\">
     <tr class=\"w3-Green\">
       </a>
       <th>Name</th>
       <th>Type</th>
       <th>Gen</th>
     </tr>

{% for torrent in torrents %}
<tr>
<td><a href=\"?torrent/details/{{torrent.id|e}}\">{{ torrent.name|e }}</a></td>
  <td>{{ torrent.type|e }}</td>
  <td>{{ torrent.gen|e }}</td>
  </tr>
{% endfor %}

</table>
</div>

{% endblock %}
", "torrent-list.tpl.php", "D:\\disck_drive\\PHP\\tracker_4.1\\app\\views\\torrent-list.tpl.php");
    }
}
