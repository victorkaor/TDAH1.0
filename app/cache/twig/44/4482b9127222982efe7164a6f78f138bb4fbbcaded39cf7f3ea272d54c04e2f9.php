<?php

/* default/layout/login_form.tpl */
class __TwigTemplate_fafaba9a5dc04de4c48d8de5eae7a364be5b101e4df079f8a09c3fdfd12c1cb8 extends Twig_Template
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
        if ((isset($context["login_form"]) ? $context["login_form"] : null)) {
            // line 2
            echo "    <div id=\"login_block\" class=\"panel panel-default\">
        <div class=\"panel-body\">
        ";
            // line 4
            echo (isset($context["login_language_form"]) ? $context["login_language_form"] : null);
            echo "

        ";
            // line 6
            if ( !(null === (isset($context["plugin_login_top"]) ? $context["plugin_login_top"] : null))) {
                // line 7
                echo "            <div id=\"plugin_login_top\">
                ";
                // line 8
                echo (isset($context["plugin_login_top"]) ? $context["plugin_login_top"] : null);
                echo "
            </div>
        ";
            }
            // line 11
            echo "
        ";
            // line 12
            echo (isset($context["login_failed"]) ? $context["login_failed"] : null);
            echo "

        ";
            // line 14
            echo (isset($context["login_form"]) ? $context["login_form"] : null);
            echo "

        ";
            // line 16
            if (((api_get_setting("allow_lostpassword") == "true") || (api_get_setting("allow_registration") == "true"))) {
                // line 17
                echo "            <ul class=\"nav nav-pills nav-stacked\">
                ";
                // line 18
                if ((api_get_setting("allow_registration") != "false")) {
                    // line 19
                    echo "                    <li><a href=\"main/auth/inscription.php\"> ";
                    echo get_lang("SignUp");
                    echo " </a></li>
                ";
                }
                // line 21
                echo "
                ";
                // line 22
                if ((api_get_setting("allow_lostpassword") == "true")) {
                    // line 23
                    echo "                    <li><a href=\"main/auth/lostPassword.php\"> ";
                    echo get_lang("LostPassword");
                    echo " </a></li>
                ";
                }
                // line 25
                echo "            </ul>
        ";
            }
            // line 27
            echo "
        ";
            // line 28
            if ( !(null === (isset($context["plugin_login_bottom"]) ? $context["plugin_login_bottom"] : null))) {
                // line 29
                echo "            <div id=\"plugin_login_bottom\">
                ";
                // line 30
                echo (isset($context["plugin_login_bottom"]) ? $context["plugin_login_bottom"] : null);
                echo "
            </div>
        ";
            }
            // line 33
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/login_form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  90 => 30,  87 => 29,  85 => 28,  82 => 27,  78 => 25,  72 => 23,  70 => 22,  67 => 21,  61 => 19,  59 => 18,  56 => 17,  54 => 16,  49 => 14,  44 => 12,  41 => 11,  35 => 8,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if login_form %}*/
/*     <div id="login_block" class="panel panel-default">*/
/*         <div class="panel-body">*/
/*         {{ login_language_form }}*/
/* */
/*         {% if plugin_login_top is not null %}*/
/*             <div id="plugin_login_top">*/
/*                 {{ plugin_login_top }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {{ login_failed }}*/
/* */
/*         {{ login_form }}*/
/* */
/*         {% if "allow_lostpassword" | get_setting == 'true' or "allow_registration" | get_setting == 'true' %}*/
/*             <ul class="nav nav-pills nav-stacked">*/
/*                 {% if "allow_registration" | get_setting != 'false' %}*/
/*                     <li><a href="main/auth/inscription.php"> {{ 'SignUp' | get_lang }} </a></li>*/
/*                 {% endif %}*/
/* */
/*                 {% if "allow_lostpassword" | get_setting == 'true' %}*/
/*                     <li><a href="main/auth/lostPassword.php"> {{ 'LostPassword' | get_lang }} </a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         {% endif %}*/
/* */
/*         {% if plugin_login_bottom is not null %}*/
/*             <div id="plugin_login_bottom">*/
/*                 {{ plugin_login_bottom }}*/
/*             </div>*/
/*         {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* */
