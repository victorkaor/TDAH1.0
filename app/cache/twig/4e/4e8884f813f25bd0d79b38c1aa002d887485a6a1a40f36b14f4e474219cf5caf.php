<?php

/* default/layout/course_navigation.tpl */
class __TwigTemplate_5b0cdfce1f69fdbce206eda409e40558c3a6c70f31716f29c8f66c497ee1f22a extends Twig_Template
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
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 3
            echo "
    ";
            // line 4
            if ( !(null === (isset($context["show_course_shortcut"]) ? $context["show_course_shortcut"] : null))) {
                // line 5
                echo "        <div class=\"col-md-12\">
            ";
                // line 6
                echo (isset($context["show_course_shortcut"]) ? $context["show_course_shortcut"] : null);
                echo "
        </div>
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if ( !(null === (isset($context["show_course_navigation_menu"]) ? $context["show_course_navigation_menu"] : null))) {
                // line 11
                echo "        <script>
            \$(document).ready( function() {
                if (readCookie('menu_state') == 0) {
                    swap_menu();
                }
            });
            function createCookie(name, value, days) {
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime()+(days*24*60*60*1000));
                    var expires = \"; expires=\"+date.toGMTString();
                }
                else var expires = \"\";
                document.cookie = name+\"=\"+value+expires+\"; path=/\";
            }
            function readCookie(name) {
                var nameEQ = name + \"=\";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++)
                {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                }
                return null;
            }
            function swap_menu() {
                toolnavlist_el = document.getElementById('toolnav');
                center_el = document.getElementById('center');
                swap_menu_link_el = document.getElementById('swap_menu_link');

                if (toolnavlist_el.style.display == 'none') {
                    toolnavlist_el.style.display = '';
                    if (center_el) {
                        center_el.style.margin = '0 190px 0 0';
                    }
                    swap_menu_link_el.innerHTML = '";
                // line 47
                echo get_lang("Hide");
                echo "';
                    createCookie('menu_state',1,10);
                } else {
                    toolnavlist_el.style.display = 'none';
                    if (center_el) {
                        center_el.style.margin = '0 0 0 0';
                    }
                    swap_menu_link_el.innerHTML = '";
                // line 54
                echo get_lang("Show");
                echo "';
                    createCookie('menu_state',0,10);
                }
            }
            document.write('<div class=\"col-md-12 pull-right\"> <a class=\"btn btn-default\" href=\"javascript: void(0);\" id=\"swap_menu_link\" onclick=\"javascript: swap_menu();\">";
                // line 58
                echo get_lang("Hide");
                echo "<\\/a></div>');
        </script>
    ";
                // line 60
                echo (isset($context["show_course_navigation_menu"]) ? $context["show_course_navigation_menu"] : null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/layout/course_navigation.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 60,  95 => 58,  88 => 54,  78 => 47,  40 => 11,  38 => 10,  35 => 9,  29 => 6,  26 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }
}
/* {# Course navigation icons - these are two optional features that have to be enabled through admin settings #}*/
/* {% if show_header == true %}*/
/* */
/*     {% if show_course_shortcut is not null %}*/
/*         <div class="col-md-12">*/
/*             {{ show_course_shortcut }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if show_course_navigation_menu is not null %}*/
/*         <script>*/
/*             $(document).ready( function() {*/
/*                 if (readCookie('menu_state') == 0) {*/
/*                     swap_menu();*/
/*                 }*/
/*             });*/
/*             function createCookie(name, value, days) {*/
/*                 if (days) {*/
/*                     var date = new Date();*/
/*                     date.setTime(date.getTime()+(days*24*60*60*1000));*/
/*                     var expires = "; expires="+date.toGMTString();*/
/*                 }*/
/*                 else var expires = "";*/
/*                 document.cookie = name+"="+value+expires+"; path=/";*/
/*             }*/
/*             function readCookie(name) {*/
/*                 var nameEQ = name + "=";*/
/*                 var ca = document.cookie.split(';');*/
/*                 for (var i = 0; i < ca.length; i++)*/
/*                 {*/
/*                     var c = ca[i];*/
/*                     while (c.charAt(0)==' ') c = c.substring(1,c.length);*/
/*                     if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);*/
/*                 }*/
/*                 return null;*/
/*             }*/
/*             function swap_menu() {*/
/*                 toolnavlist_el = document.getElementById('toolnav');*/
/*                 center_el = document.getElementById('center');*/
/*                 swap_menu_link_el = document.getElementById('swap_menu_link');*/
/* */
/*                 if (toolnavlist_el.style.display == 'none') {*/
/*                     toolnavlist_el.style.display = '';*/
/*                     if (center_el) {*/
/*                         center_el.style.margin = '0 190px 0 0';*/
/*                     }*/
/*                     swap_menu_link_el.innerHTML = '{{'Hide'|get_lang}}';*/
/*                     createCookie('menu_state',1,10);*/
/*                 } else {*/
/*                     toolnavlist_el.style.display = 'none';*/
/*                     if (center_el) {*/
/*                         center_el.style.margin = '0 0 0 0';*/
/*                     }*/
/*                     swap_menu_link_el.innerHTML = '{{'Show'|get_lang}}';*/
/*                     createCookie('menu_state',0,10);*/
/*                 }*/
/*             }*/
/*             document.write('<div class="col-md-12 pull-right"> <a class="btn btn-default" href="javascript: void(0);" id="swap_menu_link" onclick="javascript: swap_menu();">{{'Hide'|get_lang}}<\/a></div>');*/
/*         </script>*/
/*     {{ show_course_navigation_menu }}*/
/*     {% endif %}*/
/* {% endif %}*/
/* */
