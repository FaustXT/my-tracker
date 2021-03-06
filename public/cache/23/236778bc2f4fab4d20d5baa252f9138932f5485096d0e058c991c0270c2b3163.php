<?php

/* game-2048.tpl.php */
class __TwigTemplate_dc3f7950e095fed8edce268f199ceeba56f12ff099f24bcf726670839b1f6895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "game-2048.tpl.php", 1);
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
        echo "<div class=\"w3-container w3-center\">
   <h2>Game 2048</h2>
  <table align=\"center\" border=\"1\" >
 ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["map"] ?? null));
        foreach ($context['_seq'] as $context["x"] => $context["row"]) {
            // line 7
            echo " <tr>
   ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["y"] => $context["col"]) {
                // line 9
                echo "   <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["map"] ?? null), $context["x"], array(), "array"), $context["y"], array(), "array"), "html", null, true);
                echo "</td>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['y'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo " </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['x'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </table>
  </div>
  <br>
  <div class=\"w3-container w3-center\">
  <table align=\"center\" >
    <tr>
      <td colspan=\"2\">
        <a href=\"?game/up\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\"><i class=\"fa fa-chevron-up\" style=\"font-size:36px; color:Teal\"></i></button></a>

      </td>
    </tr>
    <tr>
      <td >
        <a href=\"?game/left\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\" style=\"width:100px\" ><i class=\"fa fa-chevron-left\" style=\"font-size:36px; color:Teal\"></i></button></a>

      </td>
      <td>
        <a href=\"?game/right\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\" style=\"width:100px\"><i class=\"fa fa-chevron-right\" style=\"font-size:36px; color:Teal\"></i></button></a>

      </td>
    </tr>
    <tr>
      <td td colspan=\"2\" >
        <a href=\"?game/down\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\"><i class=\"fa fa-chevron-down\" style=\"font-size:36px; color:Teal\"></i></button></a>
      </td>
    </tr>
  </table>
  <a href=\"?game/newgame\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\">New game</button></a>

</div>

";
    }

    public function getTemplateName()
    {
        return "game-2048.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  56 => 11,  47 => 9,  43 => 8,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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
   <h2>Game 2048</h2>
  <table align=\"center\" border=\"1\" >
 {% for x, row in map %}
 <tr>
   {% for y, col in row %}
   <td>{{ map[x][y] }}</td>
   {% endfor %}
 </tr>
 {% endfor %}
  </table>
  </div>
  <br>
  <div class=\"w3-container w3-center\">
  <table align=\"center\" >
    <tr>
      <td colspan=\"2\">
        <a href=\"?game/up\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\"><i class=\"fa fa-chevron-up\" style=\"font-size:36px; color:Teal\"></i></button></a>

      </td>
    </tr>
    <tr>
      <td >
        <a href=\"?game/left\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\" style=\"width:100px\" ><i class=\"fa fa-chevron-left\" style=\"font-size:36px; color:Teal\"></i></button></a>

      </td>
      <td>
        <a href=\"?game/right\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\" style=\"width:100px\"><i class=\"fa fa-chevron-right\" style=\"font-size:36px; color:Teal\"></i></button></a>

      </td>
    </tr>
    <tr>
      <td td colspan=\"2\" >
        <a href=\"?game/down\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\"><i class=\"fa fa-chevron-down\" style=\"font-size:36px; color:Teal\"></i></button></a>
      </td>
    </tr>
  </table>
  <a href=\"?game/newgame\"><button class=\"w3-btn w3-white w3-border w3-border-green w3-round-large\">New game</button></a>

</div>

{% endblock %}
", "game-2048.tpl.php", "D:\\disck_drive\\PHP\\tracker_4.1\\app\\views\\game-2048.tpl.php");
    }
}
