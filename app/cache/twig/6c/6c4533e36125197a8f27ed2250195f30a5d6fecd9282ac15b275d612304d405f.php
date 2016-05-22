<?php

/* default/layout/menu.tpl */
class __TwigTemplate_9905813aa3aa4858c0642e931d0d2b4da8b3a34d7ad2fac8a7ebf7155012b89a extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#menuone\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"menuone\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 15
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
            </ul>
           ";
        // line 17
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 1)) {
            // line 18
            echo "           <ul class=\"nav navbar-nav navbar-right\">
               ";
            // line 19
            if ( !(null === (isset($context["user_notifications"]) ? $context["user_notifications"] : null))) {
                // line 20
                echo "               <li><a href=\"";
                echo (isset($context["message_url"]) ? $context["message_url"] : null);
                echo "\">";
                echo (isset($context["user_notifications"]) ? $context["user_notifications"] : null);
                echo "</a></li>
               ";
            }
            // line 22
            echo "               ";
            if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "status", array()) != 6)) {
                // line 23
                echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                        ";
                // line 25
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo " <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            ";
                // line 29
                echo (isset($context["profile_link"]) ? $context["profile_link"] : null);
                echo "
                            ";
                // line 30
                echo (isset($context["message_link"]) ? $context["message_link"] : null);
                echo "
                        </li>
                    </ul>
                </li>
               ";
                // line 34
                if ( !(null === (isset($context["logout_link"]) ? $context["logout_link"] : null))) {
                    // line 35
                    echo "               <li>
                   <a id=\"logout_button\" title=\"";
                    // line 36
                    echo get_lang("Logout");
                    echo "\" href=\"";
                    echo (isset($context["logout_link"]) ? $context["logout_link"] : null);
                    echo "\" >
                       <em class=\"fa fa-sign-out\"></em> ";
                    // line 37
                    echo get_lang("Logout");
                    echo "
                   </a>
               </li>
               ";
                }
                // line 41
                echo "               ";
            }
            // line 42
            echo "            </ul>
            ";
        }
        // line 44
        echo "        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
";
    }

    public function getTemplateName()
    {
        return "default/layout/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  101 => 42,  98 => 41,  91 => 37,  85 => 36,  82 => 35,  80 => 34,  73 => 30,  69 => 29,  62 => 25,  58 => 23,  55 => 22,  47 => 20,  45 => 19,  42 => 18,  40 => 17,  35 => 15,  19 => 1,);
    }
}
/* <nav class="navbar navbar-default">*/
/*     <div class="container">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuone" aria-expanded="false">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*         </div>*/
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="menuone">*/
/*             <ul class="nav navbar-nav">*/
/*                 {{ menu }}*/
/*             </ul>*/
/*            {% if _u.logged == 1 %}*/
/*            <ul class="nav navbar-nav navbar-right">*/
/*                {% if user_notifications is not null %}*/
/*                <li><a href="{{ message_url }}">{{ user_notifications }}</a></li>*/
/*                {% endif %}*/
/*                {% if _u.status != 6 %}*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">*/
/*                         {{ _u.complete_name }} <span class="caret"></span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu" role="menu">*/
/*                         <li>*/
/*                             {{ profile_link }}*/
/*                             {{ message_link }}*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                {% if logout_link is not null %}*/
/*                <li>*/
/*                    <a id="logout_button" title="{{ "Logout"|get_lang }}" href="{{ logout_link }}" >*/
/*                        <em class="fa fa-sign-out"></em> {{ "Logout"|get_lang }}*/
/*                    </a>*/
/*                </li>*/
/*                {% endif %}*/
/*                {% endif %}*/
/*             </ul>*/
/*             {% endif %}*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
