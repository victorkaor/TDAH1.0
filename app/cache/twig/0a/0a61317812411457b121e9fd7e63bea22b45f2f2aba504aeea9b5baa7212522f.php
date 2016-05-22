<?php

/* default/layout/layout_1_col.tpl */
class __TwigTemplate_e906f5d600088451bee4f0cecd7b14558c64f50ca9aa3877284c0633ec8b6531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/main.tpl"), "default/layout/layout_1_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        if ((isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null)) {
            // line 7
            echo "        <div id=\"plugin_main_top\" class=\"col-md-12\">
            ";
            // line 8
            echo (isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null);
            echo "
        </div>
    ";
        }
        // line 11
        echo "
    ";
        // line 13
        echo "    ";
        if ((isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)) {
            // line 14
            echo "        <div id=\"plugin_content_top\" class=\"col-md-12 movil\">
            ";
            // line 15
            echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
            echo "
        </div>
    ";
        }
        // line 18
        echo "
    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 20
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_body.tpl"), "default/layout/layout_1_col.tpl", 20)->display($context);
        // line 21
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "        &nbsp;
    </div>

    ";
        // line 32
        echo "    ";
        if ((isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)) {
            // line 33
            echo "        <div id=\"plugin_content_bottom\" class=\"col-md-12\">
            ";
            // line 34
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
        </div>
    ";
        }
        // line 37
        echo "
    ";
        // line 39
        echo "    ";
        if ((isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null)) {
            // line 40
            echo "        <div id=\"plugin_main_bottom\" class=\"col-md-12\">
            ";
            // line 41
            echo (isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null);
            echo "
        </div>
    ";
        }
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        if ( !(null === (isset($context["content"]) ? $context["content"] : null))) {
            // line 23
            echo "                <section id=\"main_content\">
                ";
            // line 24
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
                </section>
            ";
        }
        // line 27
        echo "        ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_1_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 27,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  95 => 41,  92 => 40,  89 => 39,  86 => 37,  80 => 34,  77 => 33,  74 => 32,  69 => 28,  66 => 21,  64 => 20,  60 => 18,  54 => 15,  51 => 14,  48 => 13,  45 => 11,  39 => 8,  36 => 7,  33 => 6,  31 => 5,  28 => 4,  19 => 1,);
    }
}
/* {% extends template ~ "/layout/main.tpl" %}*/
/* */
/* {#  1 column  #}*/
/* {% block body %}*/
/*     {# Plugin main top #}*/
/*     {% if plugin_main_top %}*/
/*         <div id="plugin_main_top" class="col-md-12">*/
/*             {{ plugin_main_top }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {#  Plugin top  #}*/
/*     {% if plugin_content_top %}*/
/*         <div id="plugin_content_top" class="col-md-12 movil">*/
/*             {{ plugin_content_top }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="col-xs-12 col-md-12">*/
/*         {% include template ~ "/layout/page_body.tpl" %}*/
/*         {% block content %}*/
/*             {% if content is not null %}*/
/*                 <section id="main_content">*/
/*                 {{ content }}*/
/*                 </section>*/
/*             {% endif %}*/
/*         {% endblock %}*/
/*         &nbsp;*/
/*     </div>*/
/* */
/*     {#  Plugin bottom  #}*/
/*     {% if plugin_content_bottom %}*/
/*         <div id="plugin_content_bottom" class="col-md-12">*/
/*             {{ plugin_content_bottom }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {# Plugin main bottom #}*/
/*     {% if plugin_main_bottom %}*/
/*         <div id="plugin_main_bottom" class="col-md-12">*/
/*             {{ plugin_main_bottom }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
