<?php

/* themes/breeze/templates/page.html.twig */
class __TwigTemplate_7315dc45147370459932b5ea9af2d6a79ba10146650563e75ae45e1a78f98272 extends Twig_Template
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
        $tags = array("if" => 66, "set" => 82);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo "<div class=\"layout-container\">
\t<div class=\"container\">
  \t<header role=\"banner\" class=\"section-header\">
  \t\t<div class=\"row\">
\t\t  \t<div class=\"logo col-md-6 col-sm-6 col-xs-12\">
\t\t    \t";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"header-right col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right", array()), "html", null, true));
        echo "
\t\t\t\t</div>
\t\t\t</div>
  \t</header>
  \t<div class=\"navigation-wrapper\">
\t\t\t<div class=\"navigation\">
\t\t\t\t";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 66
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array())) {
            // line 67
            echo "\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
\t\t";
        }
        // line 69
        echo "
\t\t";
        // line 70
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 71
            echo "  \t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
  \t";
        }
        // line 73
        echo "
    ";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 75
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
    ";
        }
        // line 77
        echo "
\t\t";
        // line 78
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 79
            echo "  \t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
  \t";
        }
        // line 81
        echo "
\t\t";
        // line 82
        $context["sidebarClass"] = "col-md-12";
        // line 83
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 84
            echo "\t\t\t\t";
            $context["sidebarClass"] = "col-md-8 col-sm-8";
            // line 85
            echo "\t\t\t";
        }
        // line 86
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 87
            echo "\t\t\t\t";
            $context["sidebarClass"] = "col-md-8 col-sm-8";
            // line 88
            echo "\t\t\t";
        }
        // line 89
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 90
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 91
                echo "\t\t\t  \t";
                $context["sidebarClass"] = "col-md-4 col-sm-4";
                // line 92
                echo "\t\t\t\t";
            }
            // line 93
            echo "\t\t\t";
        }
        // line 94
        echo "
  \t<main role=\"main\">
    
      <div class=\"row\">

\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 100
        echo "
\t    \t<div class=\"layout-content ";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarClass"]) ? $context["sidebarClass"] : null), "html", null, true));
        echo "\">
\t      \t";
        // line 102
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
\t    \t</div>";
        // line 104
        echo "
\t    \t";
        // line 105
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 106
            echo "\t      \t<aside class=\"layout-sidebar-first col-md-4 col-sm-4\" role=\"complementary\">
\t        \t";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
\t      \t</aside>
\t    \t";
        }
        // line 110
        echo "
\t    \t";
        // line 111
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 112
            echo "\t      \t<aside class=\"layout-sidebar-second col-md-4 col-sm-4\" role=\"complementary\">
\t        \t";
            // line 113
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
\t      \t</aside>
\t    \t";
        }
        // line 116
        echo "\t\t\t</div>
  \t</main>
\t\t<div class=\"content-bottom row\">
\t\t\t<div class=\"content-bottom-1 col-md-4 col-sm-4\">";
        // line 119
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom1", array()), "html", null, true));
        echo "</div>
\t\t\t<div class=\"content-bottom-2 col-md-4 col-sm-4\">";
        // line 120
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom2", array()), "html", null, true));
        echo "</div>
\t\t\t<div class=\"content-bottom-3 col-md-4 col-sm-4\">";
        // line 121
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom3", array()), "html", null, true));
        echo "</div>
\t\t</div>

\t\t<footer role=\"contentinfo\" class=\"footer\">
\t\t\t<div class=\"section-footer\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 127
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array())) {
            // line 128
            echo "\t\t    \t\t<div class=\"footer_one col-md-4 col-sm-4\">
\t\t      \t\t";
            // line 129
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 132
        echo "\t\t      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array())) {
            // line 133
            echo "\t\t\t\t\t\t<div class=\"footer_second col-md-4 col-sm-4\">
\t\t\t\t\t\t\t";
            // line 134
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array())) {
            // line 138
            echo "\t\t\t\t\t\t<div class=\"footer_third col-md-4 col-sm-4\">
\t\t\t\t\t\t\t";
            // line 139
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/breeze/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 142,  248 => 139,  245 => 138,  242 => 137,  236 => 134,  233 => 133,  230 => 132,  224 => 129,  221 => 128,  219 => 127,  210 => 121,  206 => 120,  202 => 119,  197 => 116,  191 => 113,  188 => 112,  186 => 111,  183 => 110,  177 => 107,  174 => 106,  172 => 105,  169 => 104,  165 => 102,  161 => 101,  158 => 100,  151 => 94,  148 => 93,  145 => 92,  142 => 91,  139 => 90,  136 => 89,  133 => 88,  130 => 87,  127 => 86,  124 => 85,  121 => 84,  118 => 83,  116 => 82,  113 => 81,  107 => 79,  105 => 78,  102 => 77,  96 => 75,  94 => 74,  91 => 73,  85 => 71,  83 => 70,  80 => 69,  74 => 67,  72 => 66,  65 => 62,  56 => 56,  50 => 53,  43 => 48,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="layout-container">*/
/* 	<div class="container">*/
/*   	<header role="banner" class="section-header">*/
/*   		<div class="row">*/
/* 		  	<div class="logo col-md-6 col-sm-6 col-xs-12">*/
/* 		    	{{ page.header }}*/
/* 				</div>*/
/* 				<div class="header-right col-md-6 col-sm-6 col-xs-12">*/
/* 					{{ page.header_right }}*/
/* 				</div>*/
/* 			</div>*/
/*   	</header>*/
/*   	<div class="navigation-wrapper">*/
/* 			<div class="navigation">*/
/* 				{{ page.navigation }}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{% if page.breadcrumb %}*/
/* 			{{ page.breadcrumb }}*/
/* 		{% endif %}*/
/* */
/* 		{% if page.highlighted %}*/
/*   		{{ page.highlighted }}*/
/*   	{% endif %}*/
/* */
/*     {% if page.banner %}*/
/*       {{ page.banner }}*/
/*     {% endif %}*/
/* */
/* 		{% if page.help %}*/
/*   		{{ page.help }}*/
/*   	{% endif %}*/
/* */
/* 		{% set sidebarClass = 'col-md-12' %}*/
/* 			{% if page.sidebar_first %}*/
/* 				{% set sidebarClass = 'col-md-8 col-sm-8' %}*/
/* 			{% endif %}*/
/* 			{% if page.sidebar_second %}*/
/* 				{% set sidebarClass = 'col-md-8 col-sm-8' %}*/
/* 			{% endif %}*/
/* 			{% if page.sidebar_second %}*/
/* 				{% if page.sidebar_first %}*/
/* 			  	{% set sidebarClass = 'col-md-4 col-sm-4' %}*/
/* 				{% endif %}*/
/* 			{% endif %}*/
/* */
/*   	<main role="main">*/
/*     */
/*       <div class="row">*/
/* */
/* 				<a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/* 	    	<div class="layout-content {{ sidebarClass }}">*/
/* 	      	{{ page.content }}*/
/* 	    	</div>{# /.layout-content #}*/
/* */
/* 	    	{% if page.sidebar_first %}*/
/* 	      	<aside class="layout-sidebar-first col-md-4 col-sm-4" role="complementary">*/
/* 	        	{{ page.sidebar_first }}*/
/* 	      	</aside>*/
/* 	    	{% endif %}*/
/* */
/* 	    	{% if page.sidebar_second %}*/
/* 	      	<aside class="layout-sidebar-second col-md-4 col-sm-4" role="complementary">*/
/* 	        	{{ page.sidebar_second }}*/
/* 	      	</aside>*/
/* 	    	{% endif %}*/
/* 			</div>*/
/*   	</main>*/
/* 		<div class="content-bottom row">*/
/* 			<div class="content-bottom-1 col-md-4 col-sm-4">{{ page.content_bottom1 }}</div>*/
/* 			<div class="content-bottom-2 col-md-4 col-sm-4">{{ page.content_bottom2 }}</div>*/
/* 			<div class="content-bottom-3 col-md-4 col-sm-4">{{ page.content_bottom3 }}</div>*/
/* 		</div>*/
/* */
/* 		<footer role="contentinfo" class="footer">*/
/* 			<div class="section-footer">*/
/* 				<div class="row">*/
/* 					{% if page.footer1 %}*/
/* 		    		<div class="footer_one col-md-4 col-sm-4">*/
/* 		      		{{ page.footer1 }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 		      {% if page.footer2 %}*/
/* 						<div class="footer_second col-md-4 col-sm-4">*/
/* 							{{ page.footer2 }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					{% if page.footer3 %}*/
/* 						<div class="footer_third col-md-4 col-sm-4">*/
/* 							{{ page.footer3 }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</footer>*/
/* 	</div>*/
/* </div>{# /.layout-container #}*/
/* */
