<?php

/* admin-user-list.tpl.php */
class __TwigTemplate_6c4e974086a6deef01b5307ba174b03ecc31690b63c39d89c4fec8d523163fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout-admin.tpl.php", "admin-user-list.tpl.php", 1);
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
        // line 5
        $this->loadTemplate("admin-header.tpl.php", "admin-user-list.tpl.php", 5)->display($context);
        // line 6
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
\t\t\t\t\t\t\t\t\t\t<th>Administrate</th>
\t\t\t\t\t\t    </tr>
                </thead>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "                <tr>
\t\t\t\t\t\t\t\t\t<td> <a href=\"?user/details/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nikname", array()));
            echo "</a></td>
\t\t\t\t\t\t\t\t\t<td><td><a href=\"?admin/torrent/block/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()));
            echo "\">";
            if (($this->getAttribute(($context["torrent"] ?? null), "block", array()) == false)) {
                echo "Block ";
            } else {
                echo " Unblock ";
            }
            echo "</a><a href=\"?admin/torrent/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()));
            echo "\"> Delete </a></td></td>
\t\t\t\t\t\t\t\t </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        return "admin-user-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  71 => 28,  65 => 27,  62 => 26,  58 => 25,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
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
\t\t\t\t\t\t\t\t\t\t<th>Administrate</th>
\t\t\t\t\t\t    </tr>
                </thead>
                {% for user in users %}
                <tr>
\t\t\t\t\t\t\t\t\t<td> <a href=\"?user/details/{{user.id|e}}\">{{ user.nikname|e }}</a></td>
\t\t\t\t\t\t\t\t\t<td><td><a href=\"?admin/torrent/block/{{user.id|e}}\">{% if torrent.block ==false %}Block {% else %} Unblock {% endif %}</a><a href=\"?admin/torrent/delete/{{user.id|e}}\"> Delete </a></td></td>
\t\t\t\t\t\t\t\t </tr>
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
", "admin-user-list.tpl.php", "D:\\Git\\my-tracker\\my-tracker\\app\\views\\admin-user-list.tpl.php");
    }
}
