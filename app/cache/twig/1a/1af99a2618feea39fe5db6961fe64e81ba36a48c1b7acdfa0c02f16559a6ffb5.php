<?php

/* default/layout/main_footer.tpl */
class __TwigTemplate_15da5c9b6ccdc35b0012f9e9c5b306a74b086c77f25b0e6dedad11cc2776bc34 extends Twig_Template
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
        if (((isset($context["show_footer"]) ? $context["show_footer"] : null) == true)) {
            // line 2
            echo "    ";
            $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/footer.tpl"), "default/layout/main_footer.tpl", 2)->display($context);
        }
        // line 4
        echo "
    ";
        // line 6
        echo "    <div class=\"modal fade\" id=\"global-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"global-modal-title\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 10
        echo get_lang("Close");
        echo "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"global-modal-title\">&nbsp;</h4>
                </div>
                <div class=\"modal-body\">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/layout/main_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  28 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if show_footer == true %}*/
/*     {% include template ~ "/layout/footer.tpl" %}*/
/* {% endif %}*/
/* */
/*     {# Global modal, load content by AJAX call to href attribute on anchor tag with 'ajax' class #}*/
/*     <div class="modal fade" id="global-modal" tabindex="-1" role="dialog" aria-labelledby="global-modal-title" aria-hidden="true">*/
/*         <div class="modal-dialog modal-lg">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="{{ "Close" | get_lang }}">*/
/*                         <span aria-hidden="true">&times;</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="global-modal-title">&nbsp;</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </body>*/
/* </html>*/
/* */
