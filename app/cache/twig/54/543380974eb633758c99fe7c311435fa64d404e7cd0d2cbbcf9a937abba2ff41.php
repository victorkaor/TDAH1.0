<?php

/* default/javascript/editor/ckeditor/config_js.tpl */
class __TwigTemplate_19d6240d1e8fdfc82d5ba12491ad25819fa32ca0b66408f0209cde17f725a7b7 extends Twig_Template
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
        echo "/* Ckeditor global configuration file */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here.
    // For complete reference see:
    // http://docs.ckeditor.com/#!/api/CKEDITOR.config

    // Remove some buttons provided by the standard plugins, which are
    // not needed in the Standard(s) toolbar.
    //config.removeButtons = 'Underline,Subscript,Superscript';

    // Set the most common block elements.
    config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre';

    // Simplify the dialog windows.
    config.removeDialogTabs = 'image:advanced;link:advanced';

    config.templates_files  = [
        '";
        // line 19
        echo ($this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array()) . "inc/lib/elfinder/templates.php");
        echo "'
    ];

    ";
        // line 22
        if ((isset($context["moreButtonsInMaximizedMode"]) ? $context["moreButtonsInMaximizedMode"] : null)) {
            // line 23
            echo "        config.toolbar = 'minToolbar';
        config.smallToolbar = 'minToolbar';
        config.maximizedToolbar = 'maxToolbar';
    ";
        }
        // line 27
        echo "
    // File manager (elFinder)
    config.filebrowserBrowseUrl = '";
        // line 29
        echo ($this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_lib", array()) . "elfinder/filemanager.php");
        echo "';

    // Allows to use \"class\" attribute inside divs and spans.
    config.allowedContent = true;

    config.customConfig = '";
        // line 34
        echo ($this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array()) . "inc/lib/javascript/ckeditor/config_js.php");
        echo "';
};
";
    }

    public function getTemplateName()
    {
        return "default/javascript/editor/ckeditor/config_js.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 34,  57 => 29,  53 => 27,  47 => 23,  45 => 22,  39 => 19,  19 => 1,);
    }
}
/* /* Ckeditor global configuration file *//* */
/* */
/* CKEDITOR.editorConfig = function (config) {*/
/*     // Define changes to default configuration here.*/
/*     // For complete reference see:*/
/*     // http://docs.ckeditor.com/#!/api/CKEDITOR.config*/
/* */
/*     // Remove some buttons provided by the standard plugins, which are*/
/*     // not needed in the Standard(s) toolbar.*/
/*     //config.removeButtons = 'Underline,Subscript,Superscript';*/
/* */
/*     // Set the most common block elements.*/
/*     config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre';*/
/* */
/*     // Simplify the dialog windows.*/
/*     config.removeDialogTabs = 'image:advanced;link:advanced';*/
/* */
/*     config.templates_files  = [*/
/*         '{{ _p.web_main ~ 'inc/lib/elfinder/templates.php'}}'*/
/*     ];*/
/* */
/*     {% if moreButtonsInMaximizedMode %}*/
/*         config.toolbar = 'minToolbar';*/
/*         config.smallToolbar = 'minToolbar';*/
/*         config.maximizedToolbar = 'maxToolbar';*/
/*     {% endif %}*/
/* */
/*     // File manager (elFinder)*/
/*     config.filebrowserBrowseUrl = '{{ _p.web_lib ~ 'elfinder/filemanager.php' }}';*/
/* */
/*     // Allows to use "class" attribute inside divs and spans.*/
/*     config.allowedContent = true;*/
/* */
/*     config.customConfig = '{{ _p.web_main ~ 'inc/lib/javascript/ckeditor/config_js.php'}}';*/
/* };*/
/* */
