<?php

/* default/social/avatar_block.tpl */
class __TwigTemplate_8e41454775b9b552c9521386e5b8fd5a16d5d271ebf3775d14610702c7515395 extends Twig_Template
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
        echo "<div class=\"social-profile text-center\">
    ";
        // line 2
        if ((isset($context["show_group"]) ? $context["show_group"] : null)) {
            // line 3
            echo "        <img src=\"";
            echo $this->getAttribute((isset($context["user_group_image"]) ? $context["user_group_image"] : null), "file", array());
            echo "\" class=\"img-profile img-responsive img-circle\">
        <div class=\"caption\">
            <h4 class=\"group-title\">
                <a href=\"";
            // line 6
            echo (($this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array()) . "social/group_view.php?id=") . (isset($context["group_id"]) ? $context["group_id"] : null));
            echo "\">";
            echo $this->getAttribute((isset($context["user_group"]) ? $context["user_group"] : null), "name", array());
            echo "</a>
            </h4>
            <p class=\"group-description\">";
            // line 8
            echo $this->getAttribute((isset($context["user_group"]) ? $context["user_group"] : null), "description", array());
            echo "</p>
            ";
            // line 9
            if ((isset($context["user_is_group_admin"]) ? $context["user_is_group_admin"] : null)) {
                // line 10
                echo "                <div id=\"edit_image\">
                    <a class=\"btn btn-default\" href=\"";
                // line 11
                echo (($this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array()) . "social/group_edit.php?id=") . (isset($context["group_id"]) ? $context["group_id"] : null));
                echo "\">
                        ";
                // line 12
                echo get_lang("EditGroup");
                echo "
                    </a>
                </div>
            ";
            }
            // line 16
            echo "        </div>
    ";
        } elseif (        // line 17
(isset($context["show_user"]) ? $context["show_user"] : null)) {
            // line 18
            echo "        <a href=\"";
            echo $this->getAttribute((isset($context["user_image"]) ? $context["user_image"] : null), "big", array());
            echo "\" class=\"expand-image\">
            <img class=\"img-responsive img-circle\" src=\"";
            // line 19
            echo $this->getAttribute((isset($context["user_image"]) ? $context["user_image"] : null), "normal", array());
            echo "\">
        </a>
    ";
        }
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/social/avatar_block.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  68 => 19,  63 => 18,  61 => 17,  58 => 16,  51 => 12,  47 => 11,  44 => 10,  42 => 9,  38 => 8,  31 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="social-profile text-center">*/
/*     {% if show_group %}*/
/*         <img src="{{ user_group_image.file }}" class="img-profile img-responsive img-circle">*/
/*         <div class="caption">*/
/*             <h4 class="group-title">*/
/*                 <a href="{{ _p.web_main ~ 'social/group_view.php?id=' ~ group_id }}">{{ user_group.name }}</a>*/
/*             </h4>*/
/*             <p class="group-description">{{ user_group.description }}</p>*/
/*             {% if user_is_group_admin %}*/
/*                 <div id="edit_image">*/
/*                     <a class="btn btn-default" href="{{ _p.web_main ~ 'social/group_edit.php?id=' ~ group_id }}">*/
/*                         {{ 'EditGroup'|get_lang }}*/
/*                     </a>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% elseif show_user %}*/
/*         <a href="{{ user_image.big }}" class="expand-image">*/
/*             <img class="img-responsive img-circle" src="{{ user_image.normal }}">*/
/*         </a>*/
/*     {% endif %}*/
/* </div>*/
/* */
