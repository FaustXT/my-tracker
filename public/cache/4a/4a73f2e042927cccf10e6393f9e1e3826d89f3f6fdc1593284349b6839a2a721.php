<?php

/* admin-index.tpl.php */
class __TwigTemplate_d368f3f8fb45949cd6efaa01ceab6810af86c7f1f89c56e72cdcae38e749e9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout-admin.tpl.php", "admin-index.tpl.php", 1);
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
";
        // line 4
        $this->loadTemplate("admin-header.tpl.php", "admin-index.tpl.php", 4)->display($context);
        // line 5
        echo "

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Dashboard</h1>
\t\t\t</div>
\t\t</div><!--/.row-->

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-blue panel-widget \">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked bag\"><use xlink:href=\"#stroked-bag\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 21
        echo twig_escape_filter($this->env, ($context["torrent"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Torrent</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-orange panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked empty-message\"><use xlink:href=\"#stroked-empty-message\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["coments"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Comments</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-teal panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">New Users</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-red panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked app-window-with-content\"><use xlink:href=\"#stroked-app-window-with-content\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">25.2k</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Page Views</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->



\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>New Orders</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\" ><span class=\"percent\">92%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Comments</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\" ><span class=\"percent\">65%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>New Users</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\" ><span class=\"percent\">56%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Visitors</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\" ><span class=\"percent\">27%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->



\t<script src=\"public/admin/js/jquery-1.11.1.min.js\"></script>
\t<script src=\"public/admin/js/bootstrap.min.js\"></script>
\t<script src=\"public/admin/js/chart.min.js\"></script>
\t<script src=\"public/admin/js/chart-data.js\"></script>
\t<script src=\"public/admin/js/easypiechart.js\"></script>
\t<script src=\"public/admin/js/easypiechart-data.js\"></script>
\t<script src=\"public/admin/js/bootstrap-datepicker.js\"></script>
\t<script>
\t\t\$('#calendar').datepicker({
\t\t});

\t\t!function (\$) {
\t\t    \$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){
\t\t        \$(this).find('em:first').toggleClass(\"glyphicon-minus\");
\t\t    });
\t\t    \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
\t\t}(window.jQuery);

\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
\t\t})
\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
\t\t})
\t</script>


";
    }

    public function getTemplateName()
    {
        return "admin-index.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 47,  70 => 34,  54 => 21,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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

{% include 'admin-header.tpl.php' %}


\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Dashboard</h1>
\t\t\t</div>
\t\t</div><!--/.row-->

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-blue panel-widget \">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked bag\"><use xlink:href=\"#stroked-bag\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">{{torrent}}</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Torrent</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-orange panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked empty-message\"><use xlink:href=\"#stroked-empty-message\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">{{coments}}</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Comments</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-teal panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">{{user}}</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">New Users</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-red panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked app-window-with-content\"><use xlink:href=\"#stroked-app-window-with-content\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">25.2k</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Page Views</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->



\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>New Orders</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\" ><span class=\"percent\">92%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Comments</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\" ><span class=\"percent\">65%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>New Users</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\" ><span class=\"percent\">56%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Visitors</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\" ><span class=\"percent\">27%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->



\t<script src=\"public/admin/js/jquery-1.11.1.min.js\"></script>
\t<script src=\"public/admin/js/bootstrap.min.js\"></script>
\t<script src=\"public/admin/js/chart.min.js\"></script>
\t<script src=\"public/admin/js/chart-data.js\"></script>
\t<script src=\"public/admin/js/easypiechart.js\"></script>
\t<script src=\"public/admin/js/easypiechart-data.js\"></script>
\t<script src=\"public/admin/js/bootstrap-datepicker.js\"></script>
\t<script>
\t\t\$('#calendar').datepicker({
\t\t});

\t\t!function (\$) {
\t\t    \$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){
\t\t        \$(this).find('em:first').toggleClass(\"glyphicon-minus\");
\t\t    });
\t\t    \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
\t\t}(window.jQuery);

\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
\t\t})
\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
\t\t})
\t</script>


{% endblock %}
", "admin-index.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/admin-index.tpl.php");
    }
}
