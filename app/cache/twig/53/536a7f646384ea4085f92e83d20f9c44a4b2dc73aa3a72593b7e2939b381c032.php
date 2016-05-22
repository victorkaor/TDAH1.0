<?php

/* default/social/user_block.tpl */
class __TwigTemplate_ad6588b63dddd19d70b504e2f8871726ede8914174a2bf5e45eb907662e919f1 extends Twig_Template
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
        echo "    <div class=\"sidebar-avatar\">
        <div class=\"panel-group\" id=\"sn-avatar\" role=\"tablist\" aria-multiselectable=\"true\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\" id=\"heading-sn\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#sn-avatar\" href=\"#sn-avatar-one\" aria-expanded=\"true\" aria-controls=\"sn-avatar-one\">
                        ";
        // line 7
        echo get_lang("Role");
        echo "
                        </a>
                    </h4>
                </div>
                <div id=\"sn-avatar-one\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading-sn\">
                    <div class=\"panel-body\">
                        
                        ";
        // line 14
        echo (isset($context["social_avatar_block"]) ? $context["social_avatar_block"] : null);
        echo "
                        
                        <ul class=\"list-user-data\">
                            <li class=\"item\">
                                ";
        // line 18
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "complete_name", array());
        echo "
                            </li>
                            ";
        // line 20
        if ((isset($context["vcard_user_link"]) ? $context["vcard_user_link"] : null)) {
            // line 21
            echo "                                <li class=\"item\">
                                    <a href=\"";
            // line 22
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
            echo "main/messages/new_message.php\">
                                    <img src=\"";
            // line 23
            echo Template::get_icon_path("instant_message.png");
            echo "\" alt=\"";
            echo get_lang("Email");
            echo "\">
                                    ";
            // line 24
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array());
            echo "
                                    </a>
                                </li>
                                <li class=\"item\">
                                    <a href=\"";
            // line 28
            echo (isset($context["vcard_user_link"]) ? $context["vcard_user_link"] : null);
            echo "\">
                                    <img src=\"";
            // line 29
            echo Template::get_icon_path("vcard.png", 16);
            echo "\" alt=\"";
            echo get_lang("BusinessCard");
            echo "\" width=\"16\" height=\"16\">
                                    ";
            // line 30
            echo get_lang("BusinessCard");
            echo "
                                    </a>
                                </li>
                            ";
        }
        // line 34
        echo "                        ";
        if (((isset($context["chat_enabled"]) ? $context["chat_enabled"] : null) == 1)) {
            // line 35
            echo "                            ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "user_is_online_in_chat", array()) != 0)) {
                // line 36
                echo "                                ";
                if (((isset($context["user_relation"]) ? $context["user_relation"] : null) == (isset($context["user_relation_type_friend"]) ? $context["user_relation_type_friend"] : null))) {
                    // line 37
                    echo "                                    <li class=\"item\">
                                        <a onclick=\"javascript:chatWith('";
                    // line 38
                    echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array());
                    echo "', '";
                    echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "complete_name", array());
                    echo "', '";
                    echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "user_is_online", array());
                    echo "','";
                    echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar_small", array());
                    echo "')\" href=\"javascript:void(0);\">
                                            <img src=\"";
                    // line 39
                    echo Template::get_icon_path("online.png");
                    echo "\" alt=\"";
                    echo get_lang("Online");
                    echo "\">
                                            ";
                    // line 40
                    echo get_lang("Chat");
                    echo " (";
                    echo get_lang("Online");
                    echo ")
                                        </a>
                                    </li>
                                ";
                    // line 44
                    echo "                                    ";
                    // line 45
                    echo "                                    ";
                    // line 46
                    echo "                                ";
                }
                // line 47
                echo "                            ";
            }
            // line 48
            echo "                        ";
        }
        // line 49
        echo "                        
                        ";
        // line 50
        if ( !twig_test_empty((isset($context["profile_edition_link"]) ? $context["profile_edition_link"] : null))) {
            // line 51
            echo "                        <li class=\"item\">
                            <a class=\"btn link btn-sm btn-block\" href=\"";
            // line 52
            echo (isset($context["profile_edition_link"]) ? $context["profile_edition_link"] : null);
            echo "\">
                            <em class=\"fa fa-edit\"></em>";
            // line 53
            echo get_lang("EditProfile");
            echo "
                            </a>
                        </li>
                        ";
        }
        // line 57
        echo "                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        

";
    }

    public function getTemplateName()
    {
        return "default/social/user_block.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 57,  149 => 53,  145 => 52,  142 => 51,  140 => 50,  137 => 49,  134 => 48,  131 => 47,  128 => 46,  126 => 45,  124 => 44,  116 => 40,  110 => 39,  100 => 38,  97 => 37,  94 => 36,  91 => 35,  88 => 34,  81 => 30,  75 => 29,  71 => 28,  64 => 24,  58 => 23,  54 => 22,  51 => 21,  49 => 20,  44 => 18,  37 => 14,  27 => 7,  19 => 1,);
    }
}
/*     <div class="sidebar-avatar">*/
/*         <div class="panel-group" id="sn-avatar" role="tablist" aria-multiselectable="true">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading" role="tab" id="heading-sn">*/
/*                     <h4 class="panel-title">*/
/*                         <a role="button" data-toggle="collapse" data-parent="#sn-avatar" href="#sn-avatar-one" aria-expanded="true" aria-controls="sn-avatar-one">*/
/*                         {{ "Role" | get_lang }}*/
/*                         </a>*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div id="sn-avatar-one" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-sn">*/
/*                     <div class="panel-body">*/
/*                         */
/*                         {{ social_avatar_block }}*/
/*                         */
/*                         <ul class="list-user-data">*/
/*                             <li class="item">*/
/*                                 {{ user.complete_name }}*/
/*                             </li>*/
/*                             {% if vcard_user_link  %}*/
/*                                 <li class="item">*/
/*                                     <a href="{{ _p.web }}main/messages/new_message.php">*/
/*                                     <img src="{{ "instant_message.png" | icon }}" alt="{{ "Email" | get_lang }}">*/
/*                                     {{ user.email}}*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="item">*/
/*                                     <a href="{{ vcard_user_link }}">*/
/*                                     <img src="{{ "vcard.png" | icon(16) }}" alt="{{ "BusinessCard" | get_lang }}" width="16" height="16">*/
/*                                     {{ "BusinessCard" | get_lang }}*/
/*                                     </a>*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                         {% if chat_enabled == 1 %}*/
/*                             {% if user.user_is_online_in_chat != 0 %}*/
/*                                 {% if user_relation == user_relation_type_friend %}*/
/*                                     <li class="item">*/
/*                                         <a onclick="javascript:chatWith('{{ user.id }}', '{{ user.complete_name }}', '{{ user.user_is_online }}','{{ user.avatar_small }}')" href="javascript:void(0);">*/
/*                                             <img src="{{ "online.png" | icon }}" alt="{{ "Online" | get_lang }}">*/
/*                                             {{ "Chat" | get_lang }} ({{ "Online" | get_lang }})*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {# else #}*/
/*                                     {# <img src="{{ "offline.png" | icon }}" alt="{{ "Online" | get_lang }}"> #}*/
/*                                     {# {{ "Chat" | get_lang }} ({{ "Offline" | get_lang }}) #}*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                         */
/*                         {% if not profile_edition_link is empty %}*/
/*                         <li class="item">*/
/*                             <a class="btn link btn-sm btn-block" href="{{ profile_edition_link }}">*/
/*                             <em class="fa fa-edit"></em>{{ "EditProfile" | get_lang }}*/
/*                             </a>*/
/*                         </li>*/
/*                         {% endif %}*/
/*                         */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*                         */
/* */
/* */
