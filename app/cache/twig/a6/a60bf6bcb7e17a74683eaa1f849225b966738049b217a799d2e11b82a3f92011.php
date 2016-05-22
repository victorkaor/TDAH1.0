<?php

/* default/social/home.tpl */
class __TwigTemplate_8495437c87016e217eb45b3b381af972f254672b7c8d08e658b00afef3225551 extends Twig_Template
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
        return $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/layout_1_col.tpl"), "default/social/home.tpl", 1);
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
        <div class=\"col-md-3\">
            ";
        // line 6
        echo (isset($context["social_avatar_block"]) ? $context["social_avatar_block"] : null);
        echo "

            <div class=\"social-network-menu\">
            ";
        // line 9
        echo (isset($context["social_menu_block"]) ? $context["social_menu_block"] : null);
        echo "
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 13
        echo (isset($context["social_search_block"]) ? $context["social_search_block"] : null);
        echo "
            ";
        // line 14
        echo (isset($context["social_skill_block"]) ? $context["social_skill_block"] : null);
        echo "
            ";
        // line 15
        echo (isset($context["social_group_block"]) ? $context["social_group_block"] : null);
        echo "
            ";
        // line 16
        echo (isset($context["social_right_content"]) ? $context["social_right_content"] : null);
        echo "
            <div id=\"message_ajax_reponse\" class=\"\"></div>
            <div id=\"display_response_id\"></div>
            ";
        // line 19
        echo (isset($context["social_auto_extend_link"]) ? $context["social_auto_extend_link"] : null);
        echo "
        </div>
        <div class=\"col-md-3\">
        <!-- Block chat list -->    
            <div class=\"chat-friends\">
                <div class=\"panel-group\" id=\"blocklistFriends\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#blocklistFriends\" href=\"#listFriends\" aria-expanded=\"true\" aria-controls=\"listFriends\">
                                    ";
        // line 29
        echo get_lang("SocialFriend");
        echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"listFriends\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body\">
                                ";
        // line 35
        echo (isset($context["social_friend_block"]) ? $context["social_friend_block"] : null);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
         <!-- Block session list -->
        ";
        // line 43
        if (((isset($context["sessionList"]) ? $context["sessionList"] : null) != null)) {
            // line 44
            echo "        <div class=\"panel-group\" id=\"session-block\" role=\"tablist\" aria-multiselectable=\"true\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#session-block\" href=\"#sessionList\" aria-expanded=\"true\" aria-controls=\"sessionList\">
                           ";
            // line 49
            echo get_lang("MySessions");
            echo "
                        </a>
                    </h4>
                </div>
                <div id=\"sessionList\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                    <div class=\"panel-body\">
                        <ul class=\"list-group\">
                            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sessionList"]) ? $context["sessionList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 57
                echo "                            <li id=\"session_";
                echo $this->getAttribute($context["session"], "id", array());
                echo "\" class=\"list-group-item\" style=\"min-height:65px;\">
                                <img class=\"img-session\" src=\"";
                // line 58
                echo $this->getAttribute($context["session"], "image", array());
                echo "\"/>
                                <span class=\"title\">";
                // line 59
                echo $this->getAttribute($context["session"], "name", array());
                echo "</span>
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                        </ul>
                    </div>
                </div>
            </div>
         </div>
         ";
        }
        // line 68
        echo "         
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/social/home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 68,  139 => 62,  130 => 59,  126 => 58,  121 => 57,  117 => 56,  107 => 49,  100 => 44,  98 => 43,  87 => 35,  78 => 29,  65 => 19,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  40 => 9,  34 => 6,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends template ~ "/layout/layout_1_col.tpl" %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-md-3">*/
/*             {{ social_avatar_block }}*/
/* */
/*             <div class="social-network-menu">*/
/*             {{ social_menu_block }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {{ social_search_block }}*/
/*             {{ social_skill_block }}*/
/*             {{ social_group_block }}*/
/*             {{ social_right_content }}*/
/*             <div id="message_ajax_reponse" class=""></div>*/
/*             <div id="display_response_id"></div>*/
/*             {{ social_auto_extend_link }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*         <!-- Block chat list -->    */
/*             <div class="chat-friends">*/
/*                 <div class="panel-group" id="blocklistFriends" role="tablist" aria-multiselectable="true">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading" role="tab" id="headingOne">*/
/*                             <h4 class="panel-title">*/
/*                                 <a role="button" data-toggle="collapse" data-parent="#blocklistFriends" href="#listFriends" aria-expanded="true" aria-controls="listFriends">*/
/*                                     {{ "SocialFriend" | get_lang }}*/
/*                                 </a>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <div id="listFriends" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">*/
/*                             <div class="panel-body">*/
/*                                 {{ social_friend_block }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*        */
/*          <!-- Block session list -->*/
/*         {% if sessionList != null %}*/
/*         <div class="panel-group" id="session-block" role="tablist" aria-multiselectable="true">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading" role="tab" id="headingOne">*/
/*                     <h4 class="panel-title">*/
/*                         <a role="button" data-toggle="collapse" data-parent="#session-block" href="#sessionList" aria-expanded="true" aria-controls="sessionList">*/
/*                            {{ "MySessions" | get_lang }}*/
/*                         </a>*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div id="sessionList" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">*/
/*                     <div class="panel-body">*/
/*                         <ul class="list-group">*/
/*                             {% for session in sessionList %}*/
/*                             <li id="session_{{ session.id }}" class="list-group-item" style="min-height:65px;">*/
/*                                 <img class="img-session" src="{{ session.image }}"/>*/
/*                                 <span class="title">{{ session.name }}</span>*/
/*                             </li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*          </div>*/
/*          {% endif %}*/
/*          */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
