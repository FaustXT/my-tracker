<?php

/* layout.tpl.php */
class __TwigTemplate_979ce011428ba9244c43e3d96a7f7f6044d0296e8b19ffb19ed4cc16c9dc8c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
      <title>index</title>

      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
      <style >
      .w3-myfont {
      font-family: \"Comic Sans MS\", cursive, sans-serif;
      }
      </style>
    </head>
      <body>
    ";
        // line 16
        $this->loadTemplate("header.tpl.php", "layout.tpl.php", 16)->display($context);
        // line 17
        echo "
        <div id=\"content\">";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        <!-- Footer -->
  <footer class=\"w3-container w3-theme-dark w3-padding-16\">

    <img src=\"public/images/footer.png\" alt=\"\">
    </div>
  </footer>
    </body>
</html>
";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  39 => 17,  37 => 16,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
      <title>index</title>

      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
      <style >
      .w3-myfont {
      font-family: \"Comic Sans MS\", cursive, sans-serif;
      }
      </style>
    </head>
      <body>
    {% include 'header.tpl.php' %}

        <div id=\"content\">{% block content %}{% endblock %}</div>
        <!-- Footer -->
  <footer class=\"w3-container w3-theme-dark w3-padding-16\">

    <img src=\"public/images/footer.png\" alt=\"\">
    </div>
  </footer>
    </body>
</html>
", "layout.tpl.php", "C:\\Users\\Faust\\Desktop\\PHP\\tracker_4.1\\app\\views\\layout.tpl.php");
    }
}
