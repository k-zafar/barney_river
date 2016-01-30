<?php

/* themes/zircon/templates/page.html.twig */
class __TwigTemplate_ad7eb23cf03d354c5d780ab2534cd008c90e9d1b57eccddb3b4a0c81622f85b8 extends Twig_Template
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
        $tags = array("if" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        echo "<div class=\"page\">
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
<div class=\"col-md-4\">   
     ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
</div>   
<div class=\"col-md-8\">  

  ";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 11
            echo "    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
  \t\t  <div class=\"collapse navbar-collapse\" id=\"main-menu-inner\">
            ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "\t
        </div>
    </nav>
  ";
        }
        // line 17
        echo "   
   <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

 
  </div>  
  </div>
</header>

  

  ";
        // line 32
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 33
            echo "    <section id=\"slideshow\" class=\"slideshow\">
      <div class=\"container-fluid\">
        ";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 41
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 47
        echo "
  ";
        // line 48
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 49
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 57
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 59
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 62
        echo "    

  <section id=\"main\" class=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
        ";
        // line 69
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 70
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 71
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 74
        echo "\t\t
        <div class=\"content col-lg-";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-md-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-sm-12 col-xs-12\">
          ";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

          ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
          ";
        // line 79
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 80
            echo "            <h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
          ";
        }
        // line 82
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

          ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
        echo "

          ";
        // line 86
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 87
            echo "            <nav class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</nav>
          ";
        }
        // line 89
        echo "
          ";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

          <!--";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "-->
        </div>

        ";
        // line 95
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 96
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 100
        echo "      </div>
    </div>
  </section>

  ";
        // line 104
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array())) {
            // line 105
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 115
        echo "    
  ";
        // line 116
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()))) {
            // line 117
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 121
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 124
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 127
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 130
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 136
        echo "  
  ";
        // line 137
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 138
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 140
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 144
        echo "  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>          

  ";
        // line 146
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 147
            echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 149
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 153
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 153,  325 => 149,  321 => 147,  319 => 146,  315 => 144,  308 => 140,  304 => 138,  302 => 137,  299 => 136,  290 => 130,  284 => 127,  278 => 124,  272 => 121,  266 => 117,  264 => 116,  261 => 115,  252 => 109,  246 => 105,  244 => 104,  238 => 100,  232 => 97,  229 => 96,  227 => 95,  221 => 92,  216 => 90,  213 => 89,  207 => 87,  205 => 86,  200 => 84,  194 => 82,  188 => 80,  186 => 79,  182 => 78,  177 => 76,  171 => 75,  168 => 74,  162 => 71,  159 => 70,  157 => 69,  148 => 62,  141 => 59,  137 => 57,  135 => 56,  132 => 55,  125 => 51,  121 => 49,  119 => 48,  116 => 47,  109 => 43,  105 => 41,  103 => 40,  100 => 39,  93 => 35,  89 => 33,  87 => 32,  70 => 17,  63 => 13,  59 => 11,  57 => 10,  50 => 6,  43 => 1,);
    }
}
/* <div class="page">*/
/* <a name="Top" id="Top"></a>*/
/* <header id="header" class="header" role="header">*/
/*   <div class="container">*/
/* <div class="col-md-4">   */
/*      {{ page.header }}*/
/* </div>   */
/* <div class="col-md-8">  */
/* */
/*   {% if page.main_menu %}*/
/*     <nav id="main-menu" class="navbar navbar-default" role="navigation">	*/
/*   		  <div class="collapse navbar-collapse" id="main-menu-inner">*/
/*             {{ page.main_menu }}	*/
/*         </div>*/
/*     </nav>*/
/*   {% endif %}*/
/*    */
/*    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-inner">*/
/*       <span class="sr-only">Toggle navigation</span>*/
/*       <span class="icon-bar"></span>*/
/*       <span class="icon-bar"></span>*/
/*       <span class="icon-bar"></span>*/
/*     </button>*/
/* */
/*  */
/*   </div>  */
/*   </div>*/
/* </header>*/
/* */
/*   */
/* */
/*   {% if page.slideshow %}*/
/*     <section id="slideshow" class="slideshow">*/
/*       <div class="container-fluid">*/
/*         {{ page.slideshow }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.featured %}*/
/*     <section id="featured" class="featured">*/
/*       <div class="container">*/
/*         {{ page.featured }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if messages %}*/
/*     <section id="messages" class="messages">*/
/*       <div class="container">*/
/*         {{ messages }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.help %}*/
/*     <section id="help" class="help">*/
/*       <div class="container">*/
/*         {{ page.help }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}    */
/* */
/*   <section id="main" class="main" role="main">*/
/*     <a id="main-content"></a>*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         */
/*         {% if page.sidebar_first %}*/
/*           <aside class="sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endif %}*/
/* 		*/
/*         <div class="content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12">*/
/*           {{ page.highlighted }}*/
/* */
/*           {{ title_prefix }}*/
/*           {% if title %}*/
/*             <h1>{{ title }}</h1>*/
/*           {% endif %}*/
/*           {{ title_suffix }}*/
/* */
/*           {{ tabs }}*/
/* */
/*           {% if action_links %}*/
/*             <nav class="action-links">{{ action_links }}</nav>*/
/*           {% endif %}*/
/* */
/*           {{ page.content }}*/
/* */
/*           <!--{{ feed_icons }}-->*/
/*         </div>*/
/* */
/*         {% if page.sidebar_second %}*/
/*           <aside class="sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </section>*/
/* */
/*   {% if page.panel_first_1 %}*/
/*     <section id="panel_first" class="panel_first">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">*/
/*             {{ page.panel_first_1 }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/*     */
/*   {% if page.panel_second_1 or page.panel_second_2 or page.panel_second_3 or page.panel_second_4 %}*/
/*     <section id="panel_second" class="panel_second">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_1 }}*/
/*           </div>*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_2 }}*/
/*           </div>*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_3 }}*/
/*           </div>*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_4 }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/*   */
/*   {% if breadcrumb %}*/
/*     <section id="breadcrumb" class="breadcrumb">*/
/*       <div class="container">*/
/*         {{ breadcrumb }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/*   <a href="#Top" class="btn-btt" title="Back to Top" style="display: block;"></a>          */
/* */
/*   {% if page.footer %}*/
/*     <footer id="footer" class="footer" role="contentinfo">*/
/*       <div class="container">*/
/*         {{ page.footer }}*/
/*       </div>*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
