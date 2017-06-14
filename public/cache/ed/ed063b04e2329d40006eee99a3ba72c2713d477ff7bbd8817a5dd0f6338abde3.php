<?php

/* comments.tpl.php */
class __TwigTemplate_83acddb530b7f2412a64e468dbf2b3b95573f38b2f4776b6eada6b4506e7cba4 extends Twig_Template
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
        echo "<table class=\"w3-table-all w3-centered\">
<tr>
  <th>
    Usernikname
  </th>
</tr>
<tr>
  <td>
    <p>
      same avatar
    </p>
  </td>
  <td>
    <p>
      comments...........
    </p>
  </td>
</tr>
</table>
  <form class=\"w3-container\" action=\"?comments/details/\" method=\"post\" >
  <label class=\"w3-label w3-text-teal\"><b>First Name</b></label>

  <input class=\"w3-input w3-border w3-light-grey\" type=\"textarea\" name=\"comment\">



  <button class=\"w3-btn w3-blue-grey\">And Commet<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</form>
";
    }

    public function getTemplateName()
    {
        return "comments.tpl.php";
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
        return new Twig_Source("<table class=\"w3-table-all w3-centered\">
<tr>
  <th>
    Usernikname
  </th>
</tr>
<tr>
  <td>
    <p>
      same avatar
    </p>
  </td>
  <td>
    <p>
      comments...........
    </p>
  </td>
</tr>
</table>
  <form class=\"w3-container\" action=\"?comments/details/\" method=\"post\" >
  <label class=\"w3-label w3-text-teal\"><b>First Name</b></label>

  <input class=\"w3-input w3-border w3-light-grey\" type=\"textarea\" name=\"comment\">



  <button class=\"w3-btn w3-blue-grey\">And Commet<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
</form>
", "comments.tpl.php", "/home/student/PROJECTS/PHP/Viorel/tracker_4/app/views/comments.tpl.php");
    }
}
