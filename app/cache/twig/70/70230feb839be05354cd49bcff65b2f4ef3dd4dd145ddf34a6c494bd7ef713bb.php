<?php

/* default/layout/head.tpl */
class __TwigTemplate_f3d7faae4bfcad4598fb405eab59fb612cc3f901e67da8f926f9d777e6fa3dc7 extends Twig_Template
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
        echo "<meta charset=\"";
        echo (isset($context["system_charset"]) ? $context["system_charset"] : null);
        echo "\" />
<link href=\"https://chamilo.org/chamilo-lms/\" rel=\"help\" />
<link href=\"https://chamilo.org/the-association/\" rel=\"author\" />
<link href=\"https://chamilo.org/the-association/\" rel=\"copyright\" />
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<![endif]-->

";
        // line 10
        echo (isset($context["prefetch"]) ? $context["prefetch"] : null);
        echo "
";
        // line 11
        echo (isset($context["favico"]) ? $context["favico"] : null);
        echo "
<link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
        echo "apple-touch-icon.png\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
<meta name=\"Generator\" content=\"";
        // line 14
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "software_name", array());
        echo " ";
        echo twig_slice($this->env, $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "system_version", array()), 0, 1);
        echo "\" />
";
        // line 17
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 18
        echo (isset($context["title_string"]) ? $context["title_string"] : null);
        echo "</title>
";
        // line 19
        echo (isset($context["social_meta"]) ? $context["social_meta"] : null);
        echo "
";
        // line 20
        echo (isset($context["css_static_file_to_string"]) ? $context["css_static_file_to_string"] : null);
        echo "
";
        // line 21
        echo (isset($context["js_file_to_string"]) ? $context["js_file_to_string"] : null);
        echo "
";
        // line 22
        echo (isset($context["extra_headers"]) ? $context["extra_headers"] : null);
        echo "
<script>

/* Global chat variables */
var ajax_url = '";
        // line 26
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_ajax", array());
        echo "chat.ajax.php';
var online_button = '";
        // line 27
        echo (isset($context["online_button"]) ? $context["online_button"] : null);
        echo "';
var offline_button = '";
        // line 28
        echo (isset($context["offline_button"]) ? $context["offline_button"] : null);
        echo "';
var connect_lang = '";
        // line 29
        echo get_lang("ChatConnected");
        echo "';
var disconnect_lang = '";
        // line 30
        echo get_lang("ChatDisconnected");
        echo "';
</script>

";
        // line 33
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/header.js.tpl"), "default/layout/head.tpl", 33)->display($context);
        // line 34
        echo "
";
        // line 35
        echo (isset($context["css_custom_file_to_string"]) ? $context["css_custom_file_to_string"] : null);
        echo "
";
        // line 36
        echo (isset($context["css_style_print"]) ? $context["css_style_print"] : null);
        echo "
";
        // line 38
        echo (isset($context["header_extra_content"]) ? $context["header_extra_content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/head.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  108 => 36,  104 => 35,  101 => 34,  99 => 33,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  54 => 18,  51 => 17,  45 => 14,  40 => 12,  36 => 11,  32 => 10,  19 => 1,);
    }
}
/* <meta charset="{{ system_charset }}" />*/
/* <link href="https://chamilo.org/chamilo-lms/" rel="help" />*/
/* <link href="https://chamilo.org/the-association/" rel="author" />*/
/* <link href="https://chamilo.org/the-association/" rel="copyright" />*/
/* <!-- Force latest IE rendering engine or ChromeFrame if installed -->*/
/* <!--[if IE]>*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/* <![endif]-->*/
/* */
/* {{ prefetch }}*/
/* {{ favico }}*/
/* <link rel="apple-touch-icon" href="{{ _p.web }}apple-touch-icon.png" />*/
/* <meta name="apple-mobile-web-app-capable" content="yes" />*/
/* <meta name="Generator" content="{{ _s.software_name }} {{ _s.system_version|slice(0,1) }}" />*/
/* {#  Use the latest engine in ie8/ie9 or use google chrome engine if available  #}*/
/* {#  Improve usability in portal devices #}*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <title>{{ title_string }}</title>*/
/* {{ social_meta }}*/
/* {{ css_static_file_to_string }}*/
/* {{ js_file_to_string }}*/
/* {{ extra_headers }}*/
/* <script>*/
/* */
/* /* Global chat variables *//* */
/* var ajax_url = '{{ _p.web_ajax }}chat.ajax.php';*/
/* var online_button = '{{ online_button }}';*/
/* var offline_button = '{{ offline_button }}';*/
/* var connect_lang = '{{ "ChatConnected"|get_lang }}';*/
/* var disconnect_lang = '{{ "ChatDisconnected"|get_lang }}';*/
/* </script>*/
/* */
/* {% include template ~ '/layout/header.js.tpl' %}*/
/* */
/* {{ css_custom_file_to_string }}*/
/* {{ css_style_print }}*/
/* {# Extra header configured in admin section, only shown to non-admins #}*/
/* {{ header_extra_content }}*/
/* */
