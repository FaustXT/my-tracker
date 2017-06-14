<?php

/* admin-login.tpl.php */
class __TwigTemplate_26b14fc26743fc6af7dbe2261ba9ed054d3153caec797d8b4cc11f0d25c91cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout-admin.tpl.php", "admin-login.tpl.php", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"row\">
  <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
    <div class=\"login-panel panel panel-default\">
      <div class=\"panel-heading\">Log in</div>
      <div class=\"panel-body\">
        <form action=\"?admin/login\" method=\"post\">
          <fieldset>
            <div class=\"form-group\">
              <input class=\"form-control\" placeholder=\"Username\" name=\"username\" type=\"text\" autofocus=\"\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" placeholder=\"Password\" name=\"password1\" type=\"password\" value=\"\">
            </div>
            <div class=\"checkbox\">
              <label>
                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
              </label>
            </div>
            <input class=\"btn btn-primary\"  type=\"submit\" value=\"Login!\">
            ";
        // line 23
        if (($context["error"] ?? null)) {
            // line 24
            echo "
            <div style=\"color:red;\" > ";
            // line 25
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 27
        echo "            ";
        if (($context["error_login"] ?? null)) {
            // line 28
            echo "            <div class=\"\">


            <img class=\"w3-left-align\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["error_login"] ?? null), "html", null, true);
            echo "\" alt=\"\" />

            <input class=\"w3-input w3-border \" style=\"width: 25%\" type=\"text\" name=\"captcha\" placeholder=\"Text from picture\" >
            </div>
            ";
        }
        // line 36
        echo "

          </fieldset>
        </form>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->


<script src=\"js/jquery-1.11.1.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/chart.min.js\"></script>
<script src=\"js/chart-data.js\"></script>
<script src=\"js/easypiechart.js\"></script>
<script src=\"js/easypiechart-data.js\"></script>
<script src=\"js/bootstrap-datepicker.js\"></script>
<script>
  !function (\$) {
    \$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){
      \$(this).find('em:first').toggleClass(\"glyphicon-minus\");
    });
    \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
  }(window.jQuery);

  \$(window).on('resize', function () {
    if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
  })
  \$(window).on('resize', function () {
    if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
  })
</script>
";
    }

    public function getTemplateName()
    {
        return "admin-login.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 36,  71 => 31,  66 => 28,  63 => 27,  58 => 25,  55 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout-admin.tpl.php\" %}
{% block content %}

<div class=\"row\">
  <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
    <div class=\"login-panel panel panel-default\">
      <div class=\"panel-heading\">Log in</div>
      <div class=\"panel-body\">
        <form action=\"?admin/login\" method=\"post\">
          <fieldset>
            <div class=\"form-group\">
              <input class=\"form-control\" placeholder=\"Username\" name=\"username\" type=\"text\" autofocus=\"\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" placeholder=\"Password\" name=\"password1\" type=\"password\" value=\"\">
            </div>
            <div class=\"checkbox\">
              <label>
                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
              </label>
            </div>
            <input class=\"btn btn-primary\"  type=\"submit\" value=\"Login!\">
            {% if error %}

            <div style=\"color:red;\" > {{error}}</div>
            {% endif %}
            {% if error_login %}
            <div class=\"\">


            <img class=\"w3-left-align\" src=\"{{error_login}}\" alt=\"\" />

            <input class=\"w3-input w3-border \" style=\"width: 25%\" type=\"text\" name=\"captcha\" placeholder=\"Text from picture\" >
            </div>
            {% endif %}


          </fieldset>
        </form>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->


<script src=\"js/jquery-1.11.1.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/chart.min.js\"></script>
<script src=\"js/chart-data.js\"></script>
<script src=\"js/easypiechart.js\"></script>
<script src=\"js/easypiechart-data.js\"></script>
<script src=\"js/bootstrap-datepicker.js\"></script>
<script>
  !function (\$) {
    \$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){
      \$(this).find('em:first').toggleClass(\"glyphicon-minus\");
    });
    \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
  }(window.jQuery);

  \$(window).on('resize', function () {
    if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
  })
  \$(window).on('resize', function () {
    if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
  })
</script>
{% endblock %}
", "admin-login.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/admin-login.tpl.php");
    }
}
