<?php

/* admin-torrents-list.tpl.php */
class __TwigTemplate_1c1534038a0f7f751593b35551f248f6e3b7d62e9b86b308d481444dc3e021a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout-admin.tpl.php", "admin-torrents-list.tpl.php", 2);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

";
        // line 6
        $this->loadTemplate("admin-header.tpl.php", "admin-torrents-list.tpl.php", 6)->display($context);
        // line 7
        echo "<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Tables</h1>
\t\t\t</div>
\t\t</div><!--/.row-->


\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">Advanced Table</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
\t\t\t\t\t\t    <thead>
\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t        <th >Name</th>
\t\t\t\t\t\t        <th  >Type</th>
\t\t\t\t\t\t        <th >Gen</th>
                    <th>Administrate</th>

\t\t\t\t\t\t    </tr>
                </thead>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["torrents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["torrent"]) {
            // line 30
            echo "                <tr>
                <td><a href=\"?torrent/details/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "id", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "name", array()));
            echo "</a></td>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "type", array()));
            echo "</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "gen", array()));
            echo "</td>
                  <td><a href=\"?torrent/edit/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "id", array()));
            echo "\">Edit </a><a href=\"?torrent/block/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "id", array()));
            echo "\">Block </a><a href=\"?torrent/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "id", array()));
            echo "\">Delete </a></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torrent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->

          <script>
              \$(function () {
                  \$('#hover, #striped, #condensed').click(function () {
                      var classes = 'table';

                      if (\$('#hover').prop('checked')) {
                          classes += ' table-hover';
                      }
                      if (\$('#condensed').prop('checked')) {
                          classes += ' table-condensed';
                      }
                      \$('#table-style').bootstrapTable('destroy')
                          .bootstrapTable({
                              classes: classes,
                              striped: \$('#striped').prop('checked')
                          });
                  });
              });

              function rowStyle(row, index) {
                  var classes = ['active', 'success', 'info', 'warning', 'danger'];

                  if (index % 2 === 0 && index / 2 < classes.length) {
                      return {
                          classes: classes[index / 2]
                      };
                  }
                  return {};
              }
          </script>
        </div>




<script src=\"public/admin/js/jquery-1.11.1.min.js\"></script>
<script src=\"public/admin/js/bootstrap.min.js\"></script>
<script src=\"public/admin/js/chart.min.js\"></script>
<script src=\"public/admin/js/chart-data.js\"></script>
<script src=\"public/admin/js/easypiechart.js\"></script>
<script src=\"public/admin/js/easypiechart-data.js\"></script>
<script src=\"public/admin/js/bootstrap-datepicker.js\"></script>
<script src=\"public/admin/js/bootstrap-table.js\"></script>
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
        return "admin-torrents-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 37,  82 => 34,  78 => 33,  74 => 32,  68 => 31,  65 => 30,  61 => 29,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layout-admin.tpl.php\" %}
{% block content %}


{% include 'admin-header.tpl.php' %}
<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Tables</h1>
\t\t\t</div>
\t\t</div><!--/.row-->


\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">Advanced Table</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
\t\t\t\t\t\t    <thead>
\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t        <th >Name</th>
\t\t\t\t\t\t        <th  >Type</th>
\t\t\t\t\t\t        <th >Gen</th>
                    <th>Administrate</th>

\t\t\t\t\t\t    </tr>
                </thead>
                {% for torrent in torrents %}
                <tr>
                <td><a href=\"?torrent/details/{{torrent.id|e}}\">{{ torrent.name|e }}</a></td>
                  <td>{{ torrent.type|e }}</td>
                  <td>{{ torrent.gen|e }}</td>
                  <td><a href=\"?torrent/edit/{{torrent.id|e}}\">Edit </a><a href=\"?torrent/block/{{torrent.id|e}}\">Block </a><a href=\"?torrent/delete/{{torrent.id|e}}\">Delete </a></td>
                  </tr>
                  {% endfor %}

\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->

          <script>
              \$(function () {
                  \$('#hover, #striped, #condensed').click(function () {
                      var classes = 'table';

                      if (\$('#hover').prop('checked')) {
                          classes += ' table-hover';
                      }
                      if (\$('#condensed').prop('checked')) {
                          classes += ' table-condensed';
                      }
                      \$('#table-style').bootstrapTable('destroy')
                          .bootstrapTable({
                              classes: classes,
                              striped: \$('#striped').prop('checked')
                          });
                  });
              });

              function rowStyle(row, index) {
                  var classes = ['active', 'success', 'info', 'warning', 'danger'];

                  if (index % 2 === 0 && index / 2 < classes.length) {
                      return {
                          classes: classes[index / 2]
                      };
                  }
                  return {};
              }
          </script>
        </div>




<script src=\"public/admin/js/jquery-1.11.1.min.js\"></script>
<script src=\"public/admin/js/bootstrap.min.js\"></script>
<script src=\"public/admin/js/chart.min.js\"></script>
<script src=\"public/admin/js/chart-data.js\"></script>
<script src=\"public/admin/js/easypiechart.js\"></script>
<script src=\"public/admin/js/easypiechart-data.js\"></script>
<script src=\"public/admin/js/bootstrap-datepicker.js\"></script>
<script src=\"public/admin/js/bootstrap-table.js\"></script>
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
", "admin-torrents-list.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/admin-torrents-list.tpl.php");
    }
}
