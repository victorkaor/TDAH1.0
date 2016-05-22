<?php

/* default/layout/layout_2_col.tpl */
class __TwigTemplate_efb368c64ffd2d87931a07cd3b995ea3964ad6a27cd0ecbf546418ab304f925d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'login_form' => array($this, 'block_login_form'),
            'page_body' => array($this, 'block_page_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/main.tpl"), "default/layout/layout_2_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        if ((isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null)) {
            // line 8
            echo "        <div id=\"plugin_main_top\" class=\"col-md-12\">
            ";
            // line 9
            echo (isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null);
            echo "
        </div>
    ";
        }
        // line 12
        echo "
\t";
        // line 14
        echo "\t<div class=\"col-md-3 menu-column\">
        ";
        // line 15
        if ((isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null)) {
            // line 16
            echo "            <div id=\"plugin_menu_top\">
                ";
            // line 17
            echo (isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null);
            echo "
            </div>
        ";
        }
        // line 20
        echo "
\t    ";
        // line 22
        echo "        ";
        $this->displayBlock('login_form', $context, $blocks);
        // line 27
        echo "
\t\t";
        // line 29
        echo "        ";
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 1)) {
            // line 30
            echo "            ";
            echo (isset($context["user_image_block"]) ? $context["user_image_block"] : null);
            echo "
        ";
        }
        // line 32
        echo "        ";
        // line 33
        echo "\t\t";
        echo (isset($context["profile_block"]) ? $context["profile_block"] : null);
        echo "


        ";
        // line 37
        echo "\t\t";
        echo (isset($context["course_block"]) ? $context["course_block"] : null);
        echo "

        ";
        // line 40
        echo "\t\t";
        echo (isset($context["teacher_block"]) ? $context["teacher_block"] : null);
        echo "

        ";
        // line 43
        echo "        ";
        echo (isset($context["skills_block"]) ? $context["skills_block"] : null);
        echo "

        ";
        // line 46
        echo "        ";
        echo (isset($context["certificates_search_block"]) ? $context["certificates_search_block"] : null);
        echo "

\t\t";
        // line 49
        echo "\t\t";
        echo (isset($context["notice_block"]) ? $context["notice_block"] : null);
        echo "

        ";
        // line 52
        echo "\t\t";
        echo (isset($context["help_block"]) ? $context["help_block"] : null);
        echo "

\t\t";
        // line 55
        echo "\t\t";
        echo (isset($context["navigation_course_links"]) ? $context["navigation_course_links"] : null);
        echo "

\t\t";
        // line 58
        echo "\t\t";
        echo (isset($context["search_block"]) ? $context["search_block"] : null);
        echo "

\t\t";
        // line 61
        echo "\t\t";
        echo (isset($context["classes_block"]) ? $context["classes_block"] : null);
        echo "

\t\t";
        // line 64
        echo "        ";
        // line 65
        echo "
        ";
        // line 66
        if ((isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null)) {
            // line 67
            echo "            <div id=\"plugin_menu_bottom\">
                ";
            // line 68
            echo (isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null);
            echo "
            </div>
        ";
        }
        // line 71
        echo "\t</div>

\t<div class=\"col-md-9\">
        ";
        // line 75
        echo "        ";
        if ((isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)) {
            // line 76
            echo "            <div id=\"plugin_content_top\">
                ";
            // line 77
            echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
            echo "
            </div>
        ";
        }
        // line 80
        echo "
\t\t";
        // line 82
        echo "        ";
        if ((isset($context["home_page_block"]) ? $context["home_page_block"] : null)) {
            // line 83
            echo "            <section id=\"homepage-home\">
                ";
            // line 84
            echo (isset($context["home_page_block"]) ? $context["home_page_block"] : null);
            echo "
            </section>
        ";
        }
        // line 87
        echo "
\t\t";
        // line 89
        echo "\t\t";
        echo (isset($context["sniff_notification"]) ? $context["sniff_notification"] : null);
        echo "

        ";
        // line 91
        $this->displayBlock('page_body', $context, $blocks);
        // line 94
        echo "
        ";
        // line 96
        echo "        ";
        if ((isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null)) {
            // line 97
            echo "            <section id=\"homepage-course\">
            ";
            // line 98
            echo (isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null);
            echo "
            </section>
        ";
        }
        // line 101
        echo "
        ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 109
        echo "
\t\t";
        // line 111
        echo "        ";
        if ((isset($context["announcements_block"]) ? $context["announcements_block"] : null)) {
            // line 112
            echo "            <section id=\"homepage-announcements\">
            ";
            // line 113
            echo (isset($context["announcements_block"]) ? $context["announcements_block"] : null);
            echo "
            </section>
        ";
        }
        // line 116
        echo "
        ";
        // line 118
        echo "        ";
        if ((isset($context["course_category_block"]) ? $context["course_category_block"] : null)) {
            // line 119
            echo "            <section id=\"homepage-course-category\">
                ";
            // line 120
            echo (isset($context["course_category_block"]) ? $context["course_category_block"] : null);
            echo "
            </section>
        ";
        }
        // line 123
        echo "
\t\t";
        // line 125
        echo "\t\t";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/hot_courses.tpl"), "default/layout/layout_2_col.tpl", 125)->display($context);
        // line 126
        echo "
        ";
        // line 128
        echo "        ";
        if ((isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)) {
            // line 129
            echo "            <div id=\"plugin_content_bottom\">
                ";
            // line 130
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
            </div>
        ";
        }
        // line 133
        echo "        &nbsp;
\t</div>

    ";
        // line 137
        echo "    ";
        if ((isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null)) {
            // line 138
            echo "        <div id=\"plugin_main_bottom\" class=\"col-md-12\">
            ";
            // line 139
            echo (isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null);
            echo "
        </div>
    ";
        }
        // line 142
        echo "
";
    }

    // line 22
    public function block_login_form($context, array $blocks = array())
    {
        // line 23
        echo "\t\t";
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 0)) {
            // line 24
            echo "\t\t\t";
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/login_form.tpl"), "default/layout/layout_2_col.tpl", 24)->display($context);
            // line 25
            echo "\t\t";
        }
        // line 26
        echo "        ";
    }

    // line 91
    public function block_page_body($context, array $blocks = array())
    {
        // line 92
        echo "        ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_body.tpl"), "default/layout/layout_2_col.tpl", 92)->display($context);
        // line 93
        echo "        ";
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        // line 103
        echo "        ";
        if ( !(null === (isset($context["content"]) ? $context["content"] : null))) {
            // line 104
            echo "            <section id=\"page-content\" class=\"";
            echo (isset($context["course_history_page"]) ? $context["course_history_page"] : null);
            echo "\">
                ";
            // line 105
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
            </section>
        ";
        }
        // line 108
        echo "        ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 108,  337 => 105,  332 => 104,  329 => 103,  326 => 102,  322 => 93,  319 => 92,  316 => 91,  312 => 26,  309 => 25,  306 => 24,  303 => 23,  300 => 22,  295 => 142,  289 => 139,  286 => 138,  283 => 137,  278 => 133,  272 => 130,  269 => 129,  266 => 128,  263 => 126,  260 => 125,  257 => 123,  251 => 120,  248 => 119,  245 => 118,  242 => 116,  236 => 113,  233 => 112,  230 => 111,  227 => 109,  225 => 102,  222 => 101,  216 => 98,  213 => 97,  210 => 96,  207 => 94,  205 => 91,  199 => 89,  196 => 87,  190 => 84,  187 => 83,  184 => 82,  181 => 80,  175 => 77,  172 => 76,  169 => 75,  164 => 71,  158 => 68,  155 => 67,  153 => 66,  150 => 65,  148 => 64,  142 => 61,  136 => 58,  130 => 55,  124 => 52,  118 => 49,  112 => 46,  106 => 43,  100 => 40,  94 => 37,  87 => 33,  85 => 32,  79 => 30,  76 => 29,  73 => 27,  70 => 22,  67 => 20,  61 => 17,  58 => 16,  56 => 15,  53 => 14,  50 => 12,  44 => 9,  41 => 8,  38 => 7,  35 => 5,  33 => 4,  30 => 3,  21 => 1,);
    }
}
/* {% extends template ~ "/layout/main.tpl" %}*/
/* */
/* {% block body %}*/
/* 	{# Main content #}*/
/* */
/*     {# Plugin main top #}*/
/*     {% if plugin_main_top %}*/
/*         <div id="plugin_main_top" class="col-md-12">*/
/*             {{ plugin_main_top }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* 	{#  Right column #}*/
/* 	<div class="col-md-3 menu-column">*/
/*         {% if plugin_menu_top %}*/
/*             <div id="plugin_menu_top">*/
/*                 {{plugin_menu_top}}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/* 	    {# if user is not login show the login form #}*/
/*         {% block login_form %}*/
/* 		{% if _u.logged  == 0 %}*/
/* 			{% include template ~ "/layout/login_form.tpl" %}*/
/* 		{% endif %}*/
/*         {% endblock %}*/
/* */
/* 		{# User picture #}*/
/*         {% if _u.logged  == 1 %}*/
/*             {{ user_image_block }}*/
/*         {% endif %}*/
/*         {# User Profile links #}*/
/* 		{{ profile_block }}*/
/* */
/* */
/*         {# Course block - admin #}*/
/* 		{{ course_block }}*/
/* */
/*         {# Course block - teacher #}*/
/* 		{{ teacher_block }}*/
/* */
/*         {# Skills #}*/
/*         {{ skills_block }}*/
/* */
/*         {# Certificates search block #}*/
/*         {{ certificates_search_block }}*/
/* */
/* 		{# Notice #}*/
/* 		{{ notice_block }}*/
/* */
/*         {# Help #}*/
/* 		{{ help_block }}*/
/* */
/* 		{# Links that are not added in the tabs #}*/
/* 		{{ navigation_course_links }}*/
/* */
/* 		{# Search (xapian) #}*/
/* 		{{ search_block }}*/
/* */
/* 		{# Classes #}*/
/* 		{{ classes_block }}*/
/* */
/* 		{# Plugin courses sidebar #}*/
/*         {# Plugins for footer section #}*/
/* */
/*         {% if plugin_menu_bottom %}*/
/*             <div id="plugin_menu_bottom">*/
/*                 {{ plugin_menu_bottom }}*/
/*             </div>*/
/*         {% endif %}*/
/* 	</div>*/
/* */
/* 	<div class="col-md-9">*/
/*         {# Plugin bottom #}*/
/*         {% if plugin_content_top %}*/
/*             <div id="plugin_content_top">*/
/*                 {{ plugin_content_top }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/* 		{# Portal homepage #}*/
/*         {% if home_page_block %}*/
/*             <section id="homepage-home">*/
/*                 {{ home_page_block }}*/
/*             </section>*/
/*         {% endif %}*/
/* */
/* 		{#  ??  #}*/
/* 		{{ sniff_notification }}*/
/* */
/*         {% block page_body %}*/
/*         {% include template ~ "/layout/page_body.tpl" %}*/
/*         {% endblock %}*/
/* */
/*         {# Welcome to course block  #}*/
/*         {% if welcome_to_course_block %}*/
/*             <section id="homepage-course">*/
/*             {{ welcome_to_course_block }}*/
/*             </section>*/
/*         {% endif %}*/
/* */
/*         {% block content %}*/
/*         {% if content is not null %}*/
/*             <section id="page-content" class="{{ course_history_page }}">*/
/*                 {{ content }}*/
/*             </section>*/
/*         {% endif %}*/
/*         {% endblock %}*/
/* */
/* 		{# Announcements  #}*/
/*         {% if announcements_block %}*/
/*             <section id="homepage-announcements">*/
/*             {{ announcements_block }}*/
/*             </section>*/
/*         {% endif %}*/
/* */
/*         {# Course categories (must be turned on in the admin settings) #}*/
/*         {% if course_category_block %}*/
/*             <section id="homepage-course-category">*/
/*                 {{ course_category_block }}*/
/*             </section>*/
/*         {% endif %}*/
/* */
/* 		{# Hot courses template  #}*/
/* 		{% include template ~ "/layout/hot_courses.tpl" %}*/
/* */
/*         {# Content bottom  #}*/
/*         {% if plugin_content_bottom %}*/
/*             <div id="plugin_content_bottom">*/
/*                 {{plugin_content_bottom}}*/
/*             </div>*/
/*         {% endif %}*/
/*         &nbsp;*/
/* 	</div>*/
/* */
/*     {# Plugin main bottom #}*/
/*     {% if plugin_main_bottom %}*/
/*         <div id="plugin_main_bottom" class="col-md-12">*/
/*             {{ plugin_main_bottom }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
