<?php

/* default/layout/footer.tpl */
class __TwigTemplate_34b8b46e446e8884503fb3593f7f39ade500e8436779bd3905bbc94d7c2d38aa extends Twig_Template
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
        echo "<footer> <!-- start of #footer section -->
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"footer_left\" class=\"col-md-4\">
                ";
        // line 5
        if ( !(null === (isset($context["session_teachers"]) ? $context["session_teachers"] : null))) {
            // line 6
            echo "                    <div id=\"session_teachers\">
                        ";
            // line 7
            echo (isset($context["session_teachers"]) ? $context["session_teachers"] : null);
            echo "
                    </div>
                ";
        }
        // line 10
        echo "
                ";
        // line 11
        if ( !(null === (isset($context["teachers"]) ? $context["teachers"] : null))) {
            // line 12
            echo "                    <div id=\"teachers\">
                        ";
            // line 13
            echo (isset($context["teachers"]) ? $context["teachers"] : null);
            echo "
                    </div>
                ";
        }
        // line 16
        echo "
                ";
        // line 18
        echo "                ";
        if ( !(null === (isset($context["plugin_footer_left"]) ? $context["plugin_footer_left"] : null))) {
            // line 19
            echo "                    <div id=\"plugin_footer_left\">
                        ";
            // line 20
            echo (isset($context["plugin_footer_left"]) ? $context["plugin_footer_left"] : null);
            echo "
                    </div>
                ";
        }
        // line 23
        echo "                &nbsp;
            </div>

            <div id=\"footer_center\" class=\"col-md-4\">
                ";
        // line 28
        echo "                ";
        if ( !(null === (isset($context["plugin_footer_center"]) ? $context["plugin_footer_center"] : null))) {
            // line 29
            echo "                    <div id=\"plugin_footer_center\">
                        ";
            // line 30
            echo (isset($context["plugin_footer_center"]) ? $context["plugin_footer_center"] : null);
            echo "
                    </div>
                ";
        }
        // line 33
        echo "                &nbsp;
            </div>

            <div id=\"footer_right\" class=\"col-md-4\">
                ";
        // line 37
        if ( !(null === (isset($context["administrator_name"]) ? $context["administrator_name"] : null))) {
            // line 38
            echo "                    <div id=\"admin_name\">
                        ";
            // line 39
            echo (isset($context["administrator_name"]) ? $context["administrator_name"] : null);
            echo "
                    </div>
                ";
        }
        // line 42
        echo "
                <div id=\"software_name\">
\t                <a href=\"";
        // line 44
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
        echo "\" target=\"_blank\">";
        echo sprintf(get_lang("PoweredByX"), $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "software_name", array()));
        echo "</a>
                    &copy; ";
        // line 45
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "
                </div>
                ";
        // line 48
        echo "                ";
        if ( !(null === (isset($context["plugin_footer_right"]) ? $context["plugin_footer_right"] : null))) {
            // line 49
            echo "                    <div id=\"plugin_footer_right\">
                        ";
            // line 50
            echo (isset($context["plugin_footer_right"]) ? $context["plugin_footer_right"] : null);
            echo "
                    </div>
                ";
        }
        // line 53
        echo "                &nbsp;
            </div><!-- end of #footer_right -->
        </div><!-- end of #row -->
        <div class=\"extra-footer\">
            ";
        // line 57
        echo (isset($context["footer_extra_content"]) ? $context["footer_extra_content"] : null);
        echo "
        </div>
    </div><!-- end of #container -->
</footer>

<div class=\"modal fade\" id=\"expand-image-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"expand-image-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 66
        echo get_lang("Close");
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"expand-image-modal-title\">&nbsp;</h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>

";
        // line 75
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/footer.js.tpl"), "default/layout/footer.tpl", 75)->display($context);
        // line 76
        echo "
";
        // line 77
        echo (isset($context["execution_stats"]) ? $context["execution_stats"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 77,  159 => 76,  157 => 75,  145 => 66,  133 => 57,  127 => 53,  121 => 50,  118 => 49,  115 => 48,  110 => 45,  104 => 44,  100 => 42,  94 => 39,  91 => 38,  89 => 37,  83 => 33,  77 => 30,  74 => 29,  71 => 28,  65 => 23,  59 => 20,  56 => 19,  53 => 18,  50 => 16,  44 => 13,  41 => 12,  39 => 11,  36 => 10,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <footer> <!-- start of #footer section -->*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div id="footer_left" class="col-md-4">*/
/*                 {% if session_teachers is not null %}*/
/*                     <div id="session_teachers">*/
/*                         {{ session_teachers }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if teachers is not null %}*/
/*                     <div id="teachers">*/
/*                         {{ teachers }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {#  Plugins for footer section #}*/
/*                 {% if plugin_footer_left is not null %}*/
/*                     <div id="plugin_footer_left">*/
/*                         {{ plugin_footer_left }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 &nbsp;*/
/*             </div>*/
/* */
/*             <div id="footer_center" class="col-md-4">*/
/*                 {#   Plugins for footer section  #}*/
/*                 {% if plugin_footer_center is not null %}*/
/*                     <div id="plugin_footer_center">*/
/*                         {{ plugin_footer_center }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 &nbsp;*/
/*             </div>*/
/* */
/*             <div id="footer_right" class="col-md-4">*/
/*                 {% if administrator_name is not null %}*/
/*                     <div id="admin_name">*/
/*                         {{ administrator_name }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <div id="software_name">*/
/* 	                <a href="{{_p.web}}" target="_blank">{{ "PoweredByX" |get_lang | format(_s.software_name) }}</a>*/
/*                     &copy; {{ "now"|date("Y") }}*/
/*                 </div>*/
/*                 {#   Plugins for footer section  #}*/
/*                 {% if plugin_footer_right is not null %}*/
/*                     <div id="plugin_footer_right">*/
/*                         {{ plugin_footer_right }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 &nbsp;*/
/*             </div><!-- end of #footer_right -->*/
/*         </div><!-- end of #row -->*/
/*         <div class="extra-footer">*/
/*             {{ footer_extra_content }}*/
/*         </div>*/
/*     </div><!-- end of #container -->*/
/* </footer>*/
/* */
/* <div class="modal fade" id="expand-image-modal" tabindex="-1" role="dialog" aria-labelledby="expand-image-modal-title" aria-hidden="true">*/
/*     <div class="modal-dialog modal-lg">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="{{ "Close" | get_lang }}"><span aria-hidden="true">&times;</span></button>*/
/*                 <h4 class="modal-title" id="expand-image-modal-title">&nbsp;</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% include template ~ '/layout/footer.js.tpl' %}*/
/* */
/* {{ execution_stats }}*/
/* */
