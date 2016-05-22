<?php

/* default/layout/page_body.tpl */
class __TwigTemplate_3a7fd7a9665cf15a1578ae9885a94b6ed29e2d87004291125d3b949e9f5c2d2d extends Twig_Template
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
        // line 2
        if (((isset($context["actions"]) ? $context["actions"] : null) != "")) {
            // line 3
            echo "    <div class=\"actions\">
        ";
            // line 4
            echo (isset($context["actions"]) ? $context["actions"] : null);
            echo "
    </div>
";
        }
        // line 7
        echo "
";
        // line 8
        echo (isset($context["flash_messages"]) ? $context["flash_messages"] : null);
        echo "
<span id=\"js_alerts\"></span>

";
        // line 12
        if (((isset($context["header"]) ? $context["header"] : null) != "")) {
            // line 13
            echo "    <div class=\"section-page\">
        <div class=\"page-header\">
            <h3>";
            // line 15
            echo (isset($context["header"]) ? $context["header"] : null);
            echo "</h3>
        </div>
    </div>
";
        }
        // line 19
        echo "
";
        // line 21
        if (((isset($context["message"]) ? $context["message"] : null) != "")) {
            // line 22
            echo "    <section id=\"messages\">
        ";
            // line 23
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/page_body.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  57 => 22,  55 => 21,  52 => 19,  45 => 15,  41 => 13,  39 => 12,  33 => 8,  30 => 7,  24 => 4,  21 => 3,  19 => 2,);
    }
}
/* {#  Actions  #}*/
/* {% if actions != '' %}*/
/*     <div class="actions">*/
/*         {{ actions }}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {{ flash_messages }}*/
/* <span id="js_alerts"></span>*/
/* */
/* {#  Page header #}*/
/* {% if header != '' %}*/
/*     <div class="section-page">*/
/*         <div class="page-header">*/
/*             <h3>{{ header }}</h3>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {#  Show messages #}*/
/* {% if message != '' %}*/
/*     <section id="messages">*/
/*         {{ message}}*/
/*     </section>*/
/* {% endif %}*/
/* */
