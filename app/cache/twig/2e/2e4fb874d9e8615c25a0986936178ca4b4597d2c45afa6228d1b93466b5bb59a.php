<?php

/* default/layout/show_header.tpl */
class __TwigTemplate_f1291ef01df7cb5c1ad8139b38d4f707cc4cbb16e8741a5e4ff12c500ce53a8d extends Twig_Template
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
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/main_header.tpl"), "default/layout/show_header.tpl", 1)->display($context);
        // line 8
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 9
            echo "    ";
            if ( !(null === (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null))) {
                // line 10
                echo "        <div id=\"plugin_content_top\" class=\"col-md-12\">
            ";
                // line 11
                echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
                echo "
        </div>
    ";
            }
            // line 14
            echo "    <div class=\"col-md-12\">
        ";
            // line 15
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_body.tpl"), "default/layout/show_header.tpl", 15)->display($context);
            // line 16
            echo "        <section id=\"main_content\">
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/show_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  38 => 15,  35 => 14,  29 => 11,  26 => 10,  23 => 9,  21 => 8,  19 => 1,);
    }
}
/* {% include template ~ "/layout/main_header.tpl" %}*/
/* {#*/
/*     show_header and show_footer templates are only called when using the*/
/*     Display::display_header and Display::display_footer*/
/*     for backward compatibility we suppose that the default layout is one column*/
/*     which means using a div with class span12*/
/* #}*/
/* {% if show_header == true %}*/
/*     {% if plugin_content_top is not null %}*/
/*         <div id="plugin_content_top" class="col-md-12">*/
/*             {{ plugin_content_top }}*/
/*         </div>*/
/*     {% endif %}*/
/*     <div class="col-md-12">*/
/*         {% include template ~ "/layout/page_body.tpl" %}*/
/*         <section id="main_content">*/
/* {% endif %}*/
/* */
