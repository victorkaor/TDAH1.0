<?php

/* default/layout/main_header.tpl */
class __TwigTemplate_e879e4ba41319cb2a82b261c960afcc1f22ae1ce17f23059dcc1a86cb9e13e59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'help_notifications' => array($this, 'block_help_notifications'),
            'topbar' => array($this, 'block_topbar'),
            'menu' => array($this, 'block_menu'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--><html lang=\"";
        // line 5
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "</head>
<body dir=\"";
        // line 11
        echo (isset($context["text_direction"]) ? $context["text_direction"] : null);
        echo "\" class=\"";
        echo (isset($context["section_name"]) ? $context["section_name"] : null);
        echo " ";
        echo (isset($context["login_class"]) ? $context["login_class"] : null);
        echo "\">
<noscript>";
        // line 12
        echo get_lang("NoJavascript");
        echo "</noscript>

<!-- Display the Chamilo Uses Cookies Warning Validation if needed -->
";
        // line 15
        if (((isset($context["displayCookieUsageWarning"]) ? $context["displayCookieUsageWarning"] : null) == true)) {
            // line 16
            echo "    <!-- If toolbar is displayed, we have to display this block bellow it -->
    ";
            // line 17
            if (((isset($context["toolBarDisplayed"]) ? $context["toolBarDisplayed"] : null) == true)) {
                // line 18
                echo "        <div class=\"displayUnderToolbar\" >&nbsp;</div>
    ";
            }
            // line 20
            echo "    <form onSubmit=\"\$(this).toggle('slow')\" action=\"\" method=\"post\">
        <input value=1 type=\"hidden\" name=\"acceptCookies\"/>
        <div class=\"cookieUsageValidation\">
            ";
            // line 23
            echo get_lang("YouAcceptCookies");
            echo "
            <span style=\"margin-left:20px;\" onclick=\"\$(this).next().toggle('slow'); \$(this).toggle('slow')\">
                (";
            // line 25
            echo get_lang("More");
            echo ")
            </span>
            <div style=\"display:none; margin:20px 0;\">
                ";
            // line 28
            echo get_lang("HelpCookieUsageValidation");
            echo "
            </div>
            <span style=\"margin-left:20px;\" onclick=\"\$(this).parent().parent().submit()\">
                (";
            // line 31
            echo get_lang("Accept");
            echo ")
            </span>
        </div>
    </form>
";
        }
        // line 36
        echo "

";
        // line 38
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 39
            echo "
<div id=\"page-wrap\"><!-- page section -->
    ";
            // line 42
            echo "    ";
            $this->displayBlock('help_notifications', $context, $blocks);
            // line 48
            echo "
    ";
            // line 50
            echo "    ";
            $this->displayBlock('topbar', $context, $blocks);
            // line 56
            echo "        <header>
            <div class=\"extra-header\">";
            // line 57
            echo (isset($context["header_extra_content"]) ? $context["header_extra_content"] : null);
            echo "</div>
            <section id=\"main\" class=\"container\">
                ";
            // line 59
            if ((isset($context["plugin_header_main"]) ? $context["plugin_header_main"] : null)) {
                // line 60
                echo "                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
                // line 62
                echo (isset($context["plugin_header_main"]) ? $context["plugin_header_main"] : null);
                echo "
                    </div>
                </div>
                ";
            }
            // line 66
            echo "                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"logo\">
                            ";
            // line 69
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "
                        </div>
                    </div>
                    <div class=\"col-lg-9\">
                        <div class=\"col-sm-4\">
                            ";
            // line 74
            if ( !(null === (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null))) {
                // line 75
                echo "                            <div id=\"plugin_header_left\">
                                ";
                // line 76
                echo (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null);
                echo "
                            </div>
                            ";
            }
            // line 79
            echo "                        </div>
                        <div class=\"col-sm-4\">
                            ";
            // line 81
            if ( !(null === (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null))) {
                // line 82
                echo "                            <div id=\"plugin_header_center\">
                                ";
                // line 83
                echo (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null);
                echo "
                            </div>
                            ";
            }
            // line 86
            echo "                        </div>
                        <div class=\"col-sm-4\">
                            ";
            // line 88
            if ( !(null === (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null))) {
                // line 89
                echo "                            <div id=\"plugin_header_right\">
                                ";
                // line 90
                echo (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null);
                echo "
                            </div>
                            ";
            }
            // line 93
            echo "                            <div class=\"section-notifications\">
                                <ul id=\"notifications\" class=\"nav nav-pills pull-right\">
                                    ";
            // line 95
            echo (isset($context["notification_menu"]) ? $context["notification_menu"] : null);
            echo "
                                </ul>
                            </div>
                            ";
            // line 98
            echo (isset($context["accessibility"]) ? $context["accessibility"] : null);
            echo "
                        </div>
                    </div>
                </div>
            </section>
            <section id=\"menu-bar\">
                ";
            // line 105
            echo "                ";
            $this->displayBlock('menu', $context, $blocks);
            // line 108
            echo "            </section>
            <section id=\"breadcrumb-bar\">
                <div class=\"container\">
                    ";
            // line 112
            echo "                    ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 115
            echo "                </div>
            </section>
        </header>
    <div id=\"top_main_content\" class=\"container\">
    <div class=\"row\">
    ";
            // line 121
            echo "    ";
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/course_navigation.tpl"), "default/layout/main_header.tpl", 121)->display($context);
        }
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/head.tpl"), "default/layout/main_header.tpl", 8)->display($context);
    }

    // line 42
    public function block_help_notifications($context, array $blocks = array())
    {
        // line 43
        echo "    <ul id=\"navigation\" class=\"notification-panel\">
        ";
        // line 44
        echo (isset($context["help_content"]) ? $context["help_content"] : null);
        echo "
        ";
        // line 45
        echo (isset($context["bug_notification_link"]) ? $context["bug_notification_link"] : null);
        echo "
    </ul>
    ";
    }

    // line 50
    public function block_topbar($context, array $blocks = array())
    {
        // line 51
        echo "        ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/topbar.tpl"), "default/layout/main_header.tpl", 51)->display($context);
        // line 52
        echo "        ";
        if (((isset($context["show_toolbar"]) ? $context["show_toolbar"] : null) == 1)) {
            // line 53
            echo "            <div class=\"clear-header\"></div>
        ";
        }
        // line 55
        echo "    ";
    }

    // line 105
    public function block_menu($context, array $blocks = array())
    {
        // line 106
        echo "                ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/menu.tpl"), "default/layout/main_header.tpl", 106)->display($context);
        // line 107
        echo "                ";
    }

    // line 112
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 113
        echo "                    ";
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "default/layout/main_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 113,  292 => 112,  288 => 107,  285 => 106,  282 => 105,  278 => 55,  274 => 53,  271 => 52,  268 => 51,  265 => 50,  258 => 45,  254 => 44,  251 => 43,  248 => 42,  244 => 8,  241 => 7,  235 => 121,  228 => 115,  225 => 112,  220 => 108,  217 => 105,  208 => 98,  202 => 95,  198 => 93,  192 => 90,  189 => 89,  187 => 88,  183 => 86,  177 => 83,  174 => 82,  172 => 81,  168 => 79,  162 => 76,  159 => 75,  157 => 74,  149 => 69,  144 => 66,  137 => 62,  133 => 60,  131 => 59,  126 => 57,  123 => 56,  120 => 50,  117 => 48,  114 => 42,  110 => 39,  108 => 38,  104 => 36,  96 => 31,  90 => 28,  84 => 25,  79 => 23,  74 => 20,  70 => 18,  68 => 17,  65 => 16,  63 => 15,  57 => 12,  49 => 11,  46 => 10,  44 => 7,  39 => 5,  35 => 4,  31 => 3,  27 => 2,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]> <html lang="{{ document_language }}" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>    <html lang="{{ document_language }}" class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>    <html lang="{{ document_language }}" class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--><html lang="{{ document_language }}" class="no-js"> <!--<![endif]-->*/
/* <head>*/
/* {% block head %}*/
/* {% include template ~ "/layout/head.tpl" %}*/
/* {% endblock %}*/
/* </head>*/
/* <body dir="{{ text_direction }}" class="{{ section_name }} {{ login_class }}">*/
/* <noscript>{{ "NoJavascript"|get_lang }}</noscript>*/
/* */
/* <!-- Display the Chamilo Uses Cookies Warning Validation if needed -->*/
/* {% if displayCookieUsageWarning == true %}*/
/*     <!-- If toolbar is displayed, we have to display this block bellow it -->*/
/*     {% if toolBarDisplayed == true %}*/
/*         <div class="displayUnderToolbar" >&nbsp;</div>*/
/*     {% endif %}*/
/*     <form onSubmit="$(this).toggle('slow')" action="" method="post">*/
/*         <input value=1 type="hidden" name="acceptCookies"/>*/
/*         <div class="cookieUsageValidation">*/
/*             {{ "YouAcceptCookies" | get_lang }}*/
/*             <span style="margin-left:20px;" onclick="$(this).next().toggle('slow'); $(this).toggle('slow')">*/
/*                 ({{"More" | get_lang }})*/
/*             </span>*/
/*             <div style="display:none; margin:20px 0;">*/
/*                 {{ "HelpCookieUsageValidation" | get_lang}}*/
/*             </div>*/
/*             <span style="margin-left:20px;" onclick="$(this).parent().parent().submit()">*/
/*                 ({{"Accept" | get_lang }})*/
/*             </span>*/
/*         </div>*/
/*     </form>*/
/* {% endif %}*/
/* */
/* */
/* {% if show_header == true %}*/
/* */
/* <div id="page-wrap"><!-- page section -->*/
/*     {# Bug and help notifications #}*/
/*     {% block help_notifications %}*/
/*     <ul id="navigation" class="notification-panel">*/
/*         {{ help_content }}*/
/*         {{ bug_notification_link }}*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
/*     {# topbar #}*/
/*     {% block topbar %}*/
/*         {% include template ~ "/layout/topbar.tpl" %}*/
/*         {% if show_toolbar == 1 %}*/
/*             <div class="clear-header"></div>*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*         <header>*/
/*             <div class="extra-header">{{ header_extra_content }}</div>*/
/*             <section id="main" class="container">*/
/*                 {% if plugin_header_main %}*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         {{ plugin_header_main }}*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <div class="row">*/
/*                     <div class="col-lg-3">*/
/*                         <div class="logo">*/
/*                             {{ logo }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-9">*/
/*                         <div class="col-sm-4">*/
/*                             {% if plugin_header_left is not null %}*/
/*                             <div id="plugin_header_left">*/
/*                                 {{ plugin_header_left }}*/
/*                             </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             {% if plugin_header_center is not null %}*/
/*                             <div id="plugin_header_center">*/
/*                                 {{ plugin_header_center }}*/
/*                             </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             {% if plugin_header_right is not null %}*/
/*                             <div id="plugin_header_right">*/
/*                                 {{ plugin_header_right }}*/
/*                             </div>*/
/*                             {% endif %}*/
/*                             <div class="section-notifications">*/
/*                                 <ul id="notifications" class="nav nav-pills pull-right">*/
/*                                     {{ notification_menu }}*/
/*                                 </ul>*/
/*                             </div>*/
/*                             {{ accessibility }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             <section id="menu-bar">*/
/*                 {# menu #}*/
/*                 {% block menu %}*/
/*                 {% include template ~ "/layout/menu.tpl" %}*/
/*                 {% endblock %}*/
/*             </section>*/
/*             <section id="breadcrumb-bar">*/
/*                 <div class="container">*/
/*                     {# breadcrumb #}*/
/*                     {% block breadcrumb %}*/
/*                     {{ breadcrumb }}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </section>*/
/*         </header>*/
/*     <div id="top_main_content" class="container">*/
/*     <div class="row">*/
/*     {# course navigation links/shortcuts need to be activated by the admin #}*/
/*     {% include template ~ "/layout/course_navigation.tpl" %}*/
/* {% endif %}*/
/* */
