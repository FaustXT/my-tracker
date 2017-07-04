<?php

/* torrentin-form.tpl.php */
class __TwigTemplate_a5174f35c30ec91f36fb65daa5f89b3ea68d94edc2e698e3f59fa50b11f956c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrentin-form.tpl.php", 1);
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
        echo "<form action=\"?torrent/create\" method=\"post\" enctype=\"multipart/form-data\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Torrent Uplaod</h2>
<!-- //////////////////////////name /////////// -->
";
        // line 6
        if (($context["id"] ?? null)) {
            echo "<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
        }
        // line 7
        echo "  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-sticky-note\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"name\" type=\"text\" placeholder=\"Name\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "name", array()));
        echo "\">
    </div>
</div>
";
        // line 13
        if (($context["error_un"] ?? null)) {
            // line 14
            echo "<div class=\"w3-red\" > ";
            echo twig_escape_filter($this->env, ($context["error_un"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 16
        echo "<!--  //////////////////////////// gen /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-stop-circle\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"type\" type=\"text\" placeholder=\"Type\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "type", array()));
        echo "\">
    </div>
</div>
<!--  ///////////////////////////// type /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-clipboard\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"gen\" type=\"text\" placeholder=\"Gen\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "gen", array()));
        echo "\">
    </div>
  </div>

  <!--//////////////////////////////// Description ////////// -->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-comment-o\"></i></div>
    <div class=\"w3-rest\">
      <textarea class=\"w3-input\" name=\"description\" rows=\"5\" cols=\"20\" placeholder=\"Describe your torrent in maximum 150 characters\" >";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "description", array()));
        echo "</textarea>
    </div>
  </div>
 <!--////////////////////////////// Upload File //// -->
 <div class=\"w3-row w3-section\">
      <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file\"></i></div>
 <label>Put torrent File here</label>
   <div class=\"w3-rest\">
     <input class=\"w3-input w3-border\" name=\"torrent\" type=\"file\">
   </div>
 </div>
 <!--////////////////////////////// Upload image //// -->
 <div class=\"w3-row w3-section\">
      <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file-image-o\"></i></div>
 <label>Put Image here</label>
   <div class=\"w3-rest\">
     <input class=\"w3-input w3-border\" name=\"photo\" type=\"file\" >
   </div>
 </div>
 <!--////////////////////////////// Submit button ///////// -->

  <button class=\"w3-btn-block w3-blue w3-input\"><i class=\"fa fa-upload\"></i><input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
";
        // line 58
        if (($context["error"] ?? null)) {
            // line 59
            echo "<div style=\"color:red;\" > ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 61
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "torrentin-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 61,  116 => 59,  114 => 58,  88 => 35,  77 => 27,  67 => 20,  61 => 16,  55 => 14,  53 => 13,  47 => 10,  42 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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
<form action=\"?torrent/create\" method=\"post\" enctype=\"multipart/form-data\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Torrent Uplaod</h2>
<!-- //////////////////////////name /////////// -->
{% if id %}<input type=\"hidden\" name=\"id\" value=\"{{id}}\">{% endif %}
  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-sticky-note\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"name\" type=\"text\" placeholder=\"Name\" value=\"{{torrent.name|e}}\">
    </div>
</div>
{% if error_un %}
<div class=\"w3-red\" > {{error_un}}</div>
{% endif %}
<!--  //////////////////////////// gen /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-stop-circle\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"type\" type=\"text\" placeholder=\"Type\" value=\"{{torrent.type|e}}\">
    </div>
</div>
<!--  ///////////////////////////// type /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-clipboard\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"gen\" type=\"text\" placeholder=\"Gen\" value=\"{{torrent.gen|e}}\">
    </div>
  </div>

  <!--//////////////////////////////// Description ////////// -->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-comment-o\"></i></div>
    <div class=\"w3-rest\">
      <textarea class=\"w3-input\" name=\"description\" rows=\"5\" cols=\"20\" placeholder=\"Describe your torrent in maximum 150 characters\" >{{torrent.description|e}}</textarea>
    </div>
  </div>
 <!--////////////////////////////// Upload File //// -->
 <div class=\"w3-row w3-section\">
      <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file\"></i></div>
 <label>Put torrent File here</label>
   <div class=\"w3-rest\">
     <input class=\"w3-input w3-border\" name=\"torrent\" type=\"file\">
   </div>
 </div>
 <!--////////////////////////////// Upload image //// -->
 <div class=\"w3-row w3-section\">
      <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file-image-o\"></i></div>
 <label>Put Image here</label>
   <div class=\"w3-rest\">
     <input class=\"w3-input w3-border\" name=\"photo\" type=\"file\" >
   </div>
 </div>
 <!--////////////////////////////// Submit button ///////// -->

  <button class=\"w3-btn-block w3-blue w3-input\"><i class=\"fa fa-upload\"></i><input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
{% if error %}
<div style=\"color:red;\" > {{error}}</div>
{% endif %}
</form>
{% endblock %}
", "torrentin-form.tpl.php", "D:\\Git\\my-tracker\\my-tracker\\app\\views\\torrentin-form.tpl.php");
    }
}
