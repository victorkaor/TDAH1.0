<?php

/* default/social/whoisonline.tpl */
class __TwigTemplate_74b558806a2e1866a0d88aa062d7b88ca9f41d8ee83b68871e3e768477dcce2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/layout_1_col.tpl"), "default/social/whoisonline.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"search-user\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        ";
        // line 9
        echo get_lang("SearchUsers");
        echo "
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 12
        echo (isset($context["social_search"]) ? $context["social_search"] : null);
        echo "
                    </div>
                </div>
            </div>
            <div id=\"whoisonline\">
                ";
        // line 17
        echo (isset($context["whoisonline"]) ? $context["whoisonline"] : null);
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/social/whoisonline.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  43 => 12,  37 => 9,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends template ~ "/layout/layout_1_col.tpl" %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="search-user">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         {{ 'SearchUsers' | get_lang}}*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         {{ social_search }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="whoisonline">*/
/*                 {{ whoisonline }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
