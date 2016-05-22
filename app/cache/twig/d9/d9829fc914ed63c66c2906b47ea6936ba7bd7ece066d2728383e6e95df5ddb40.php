<?php

/* default/layout/show_footer.tpl */
class __TwigTemplate_39b5f830404f9be4c1522d7ce157e5514f1ea992ce3f20ba12a0feeda25dc992 extends Twig_Template
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
        // line 7
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 8
            echo "    </section>
</div>
";
        }
        // line 11
        echo "
";
        // line 13
        if ( !(null === (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null))) {
            // line 14
            echo "    <div id=\"plugin_content_bottom\" class=\"col-md-12\">
        ";
            // line 15
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
    </div>
";
        }
        // line 18
        echo "
";
        // line 19
        if (((isset($context["show_footer"]) ? $context["show_footer"] : null) == true)) {
            // line 20
            echo "    </div> <!-- end of #col\" -->
    </div> <!-- end of #row\" -->
    </div> <!-- end of #container\" -->

";
        }
        // line 25
        echo "
";
        // line 26
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/main_footer.tpl"), "default/layout/show_footer.tpl", 26)->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/show_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 26,  52 => 25,  45 => 20,  43 => 19,  40 => 18,  34 => 15,  31 => 14,  29 => 13,  26 => 11,  21 => 8,  19 => 7,);
    }
}
/* {#*/
/*     show_header and show_footer templates are only called when using the*/
/*     Display::display_header and Display::display_footer*/
/*     for backward compatibility we suppose that the default layout is one column*/
/*     which means using a div with class span12*/
/* #}*/
/* {% if show_header == true %}*/
/*     </section>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {# Plugin bottom  #}*/
/* {% if plugin_content_bottom is not null %}*/
/*     <div id="plugin_content_bottom" class="col-md-12">*/
/*         {{ plugin_content_bottom}}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {% if show_footer == true %}*/
/*     </div> <!-- end of #col" -->*/
/*     </div> <!-- end of #row" -->*/
/*     </div> <!-- end of #container" -->*/
/* */
/* {% endif %}*/
/* */
/* {% include template ~ "/layout/main_footer.tpl" %}*/
/* */
