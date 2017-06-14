<?php

/* layout-admin.tpl.php */
class __TwigTemplate_1486fef03c9c0af562d6f0a12395cda439ea67bfa994d6952b6fdf83d1e340aa extends Twig_Template
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
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Forms</title>

<link href=\"public/admin/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"public/admin/css/datepicker3.css\" rel=\"stylesheet\">
<link href=\"public/admin/css/bootstrap-table.css\" rel=\"stylesheet\">
<link href=\"public/admin/css/styles.css\" rel=\"stylesheet\">

<script src=\"public/admin/js/lumino.glyphs.js\"></script>

<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->

</head>
<body>


      <div id=\"content\">";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        echo "</div>


    </body>

    </html>
";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-admin.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  45 => 24,  20 => 1,);
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
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Forms</title>

<link href=\"public/admin/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"public/admin/css/datepicker3.css\" rel=\"stylesheet\">
<link href=\"public/admin/css/bootstrap-table.css\" rel=\"stylesheet\">
<link href=\"public/admin/css/styles.css\" rel=\"stylesheet\">

<script src=\"public/admin/js/lumino.glyphs.js\"></script>

<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->

</head>
<body>


      <div id=\"content\">{% block content %}{% endblock %}</div>


    </body>

    </html>
", "layout-admin.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/layout-admin.tpl.php");
    }
}
