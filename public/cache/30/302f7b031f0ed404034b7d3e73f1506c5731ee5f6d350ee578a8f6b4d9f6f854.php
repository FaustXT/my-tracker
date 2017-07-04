<?php

/* admin-header.tpl.php */
class __TwigTemplate_5163c973d3a1b50053d9874bd5dd982d05d8a219cbfd8522d38bc4398b850593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><span>Lumino</span>Admin</a>
\t\t\t\t<ul class=\"user-menu\">
\t\t\t\t\t<li class=\"dropdown pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> User <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Settings</a></li>
\t\t\t\t\t\t\t<li><a href=\"?admin/logout\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> Logout</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div><!-- /.container-fluid -->
\t</nav>

\t<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
\t\t<form role=\"search\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t</div>
\t\t</form>
\t\t<ul class=\"nav menu\">
\t\t\t<li class=\"active\"><a href=\"?admin/index\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></use></svg> Home</a></li>
\t\t\t<li><a href=\"?user/details\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></use></svg> Accaunt About</a></li>
\t\t\t<li><a href=\"?torrent/create\"><svg class=\"glyph stroked upload\"><use xlink:href=\"#stroked-upload\"/></use></svg> Torrent Upload</a></li>
\t\t\t<li><a href=\"?torrent/list\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Torrents</a></li>
      <li><a href=\"?admin/user/list\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Users</a></li>
\t\t\t<li class=\"parent \">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<span data-toggle=\"collapse\" href=\"#sub-item-1\"><svg class=\"glyph stroked chevron-down\"><use xlink:href=\"#stroked-chevron-down\"></use></svg></span> Dropdown
\t\t\t\t</a>
\t\t\t\t<ul class=\"children collapse\" id=\"sub-item-1\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 1
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 2
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 3
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t</ul>
\t\t<div class=\"attribution\">Template by <a href=\"http://www.medialoot.com/item/lumino-admin-bootstrap-template/\">Medialoot</a><br/><a href=\"http://www.glyphs.co\" style=\"color: #333;\">Icons by Glyphs</a></div>
\t</div><!--/.sidebar-->
\t<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
\t\t<div class=\"row\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li><a href=\"?admin/index\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
\t\t\t\t<li class=\"active\">Icons</li>
\t\t\t</ol>
\t\t</div><!--/.row-->
";
    }

    public function getTemplateName()
    {
        return "admin-header.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><span>Lumino</span>Admin</a>
\t\t\t\t<ul class=\"user-menu\">
\t\t\t\t\t<li class=\"dropdown pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> User <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Settings</a></li>
\t\t\t\t\t\t\t<li><a href=\"?admin/logout\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> Logout</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div><!-- /.container-fluid -->
\t</nav>

\t<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
\t\t<form role=\"search\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t</div>
\t\t</form>
\t\t<ul class=\"nav menu\">
\t\t\t<li class=\"active\"><a href=\"?admin/index\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"/></use></svg> Home</a></li>
\t\t\t<li><a href=\"?user/details\"><svg class=\"glyph stroked male user \"><use xlink:href=\"#stroked-male-user\"/></use></svg> Accaunt About</a></li>
\t\t\t<li><a href=\"?torrent/create\"><svg class=\"glyph stroked upload\"><use xlink:href=\"#stroked-upload\"/></use></svg> Torrent Upload</a></li>
\t\t\t<li><a href=\"?torrent/list\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Torrents</a></li>
      <li><a href=\"?admin/user/list\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Users</a></li>
\t\t\t<li class=\"parent \">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<span data-toggle=\"collapse\" href=\"#sub-item-1\"><svg class=\"glyph stroked chevron-down\"><use xlink:href=\"#stroked-chevron-down\"></use></svg></span> Dropdown
\t\t\t\t</a>
\t\t\t\t<ul class=\"children collapse\" id=\"sub-item-1\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 1
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 2
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 3
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t</ul>
\t\t<div class=\"attribution\">Template by <a href=\"http://www.medialoot.com/item/lumino-admin-bootstrap-template/\">Medialoot</a><br/><a href=\"http://www.glyphs.co\" style=\"color: #333;\">Icons by Glyphs</a></div>
\t</div><!--/.sidebar-->
\t<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
\t\t<div class=\"row\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li><a href=\"?admin/index\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
\t\t\t\t<li class=\"active\">Icons</li>
\t\t\t</ol>
\t\t</div><!--/.row-->
", "admin-header.tpl.php", "D:\\Git\\my-tracker\\my-tracker\\app\\views\\admin-header.tpl.php");
    }
}
