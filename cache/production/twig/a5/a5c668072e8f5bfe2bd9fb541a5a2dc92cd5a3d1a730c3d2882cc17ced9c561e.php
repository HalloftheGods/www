<?php

/* navbar.html */
class __TwigTemplate_3c72a29645bd3fb89fa98327d4828fe9cc31190c89b9d5070d3f4713d101fb10 extends Twig_Template
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
        echo "<div class=\"navbar\"";
        if (( !($context["S_DISPLAY_SEARCH"] ?? null) || ($context["S_IN_SEARCH"] ?? null))) {
            echo " class=\"no-search\"";
        }
        echo ">
\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 3
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 4
        echo "\t\t";
        // line 5
        echo "
\t\t<li class=\"breadcrumbs\">
\t\t\t";
        // line 7
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 8
            echo "\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" itemprop=\"url\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></span>
\t\t\t";
        }
        // line 10
        echo "\t\t\t";
        // line 11
        echo "\t\t\t<span class=\"crumb\" ";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" itemprop=\"url\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>

\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 14
            echo "\t\t\t";
            // line 15
            echo "\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t";
            // line 16
            // line 17
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t";
        if (($context["S_VIEWTOPIC"] ?? null)) {
            echo "<span class=\"crumb crumb-topic\"><a href=\"";
            echo ($context["U_VIEW_TOPIC"] ?? null);
            echo "\">";
            echo ($context["TOPIC_TITLE"] ?? null);
            echo "</a></span>";
        }
        // line 19
        echo "\t\t\t";
        // line 20
        echo "\t\t</li>
\t\t";
        // line 21
        // line 22
        echo "\t\t";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 23
            echo "\t\t<li class=\"rightside responsive-search\">
\t\t\t<a href=\"";
            // line 24
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 29
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 29,  117 => 25,  111 => 24,  108 => 23,  105 => 22,  104 => 21,  101 => 20,  99 => 19,  90 => 18,  84 => 17,  83 => 16,  70 => 15,  68 => 14,  64 => 13,  50 => 11,  48 => 10,  38 => 8,  36 => 7,  32 => 5,  30 => 4,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar.html", "");
    }
}
