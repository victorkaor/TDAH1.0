<?php

/* default/layout/main.tpl */
class __TwigTemplate_12e1cbb22f7f9b0f70395427924c6e8c3bcbb80987df7886be22187d0404fc4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/main_header.tpl"), "default/layout/main.tpl", 2)->display($context);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if (((isset($context["show_sniff"]) ? $context["show_sniff"] : null) == 1)) {
            // line 7
            echo "\t \t";
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/sniff.tpl"), "default/layout/main.tpl", 7)->display($context);
            // line 8
            echo "\t";
        }
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        if (((isset($context["show_footer"]) ? $context["show_footer"] : null) == true)) {
            // line 14
            echo "        </div> <!-- end of #col\" -->
        </div> <!-- end of #row\" -->
        </div> <!-- end of #container\" -->
    ";
        }
        // line 18
        echo "    ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/main_footer.tpl"), "default/layout/main.tpl", 18)->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/main.tpl";
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  65 => 14,  62 => 13,  60 => 12,  57 => 11,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  39 => 2,  36 => 1,  32 => 11,  29 => 10,  27 => 5,  24 => 4,  22 => 1,);
    }
}
/* {% block header %}*/
/* {% include template ~ "/layout/main_header.tpl" %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{% if show_sniff == 1 %}*/
/* 	 	{% include template ~ "/layout/sniff.tpl" %}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     {#  Footer  #}*/
/*     {% if show_footer == true %}*/
/*         </div> <!-- end of #col" -->*/
/*         </div> <!-- end of #row" -->*/
/*         </div> <!-- end of #container" -->*/
/*     {% endif %}*/
/*     {% include template ~ "/layout/main_footer.tpl" %}*/
/* {% endblock %}*/
/* */
