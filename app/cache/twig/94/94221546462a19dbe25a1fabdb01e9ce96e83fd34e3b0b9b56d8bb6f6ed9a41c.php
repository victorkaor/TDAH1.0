<?php

/* default/layout/welcome_to_course.tpl */
class __TwigTemplate_fa71c113098d0a16565d741aba6d8c6349e6ccda7f3de22edc9246776500a950 extends Twig_Template
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
        echo "<div class=\"normal-message\">
  ";
        // line 2
        echo sprintf(get_lang("HelloXAsYouCanSeeYourCourseListIsEmpty"), $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array()));
        echo "

";
        // line 4
        if (((isset($context["count_courses"]) ? $context["count_courses"] : null) == 0)) {
            // line 5
            echo "    ";
            echo get_lang("PleaseAllowUsALittleTimeToSubscribeYouToOneOfOurCourses");
            echo "
";
        } else {
            // line 7
            echo "
    ";
            // line 8
            if ((api_get_setting("allow_students_to_browse_courses") == "true")) {
                // line 9
                echo "        
        ";
                // line 10
                echo sprintf(get_lang("GoAheadAndBrowseOurCourseCatalogXOnceRegisteredYouWillSeeTheCourseHereX"), (isset($context["course_catalog_link"]) ? $context["course_catalog_link"] : null), (isset($context["course_list_link"]) ? $context["course_list_link"] : null));
                echo "
        
        <a class=\"btn btn-primary btn-large\" href=\"";
                // line 12
                echo (isset($context["course_catalog_url"]) ? $context["course_catalog_url"] : null);
                echo "\">
            ";
                // line 13
                echo get_lang("CourseCatalog");
                echo "
        </a>
    ";
            } else {
                // line 16
                echo "        ";
                echo get_lang("PleaseAllowUsALittleTimeToSubscribeYouToOneOfOurCourses");
                echo "
    ";
            }
            // line 18
            echo "
";
        }
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "default/layout/welcome_to_course.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  64 => 18,  58 => 16,  52 => 13,  48 => 12,  43 => 10,  40 => 9,  38 => 8,  35 => 7,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="normal-message">*/
/*   {{ "HelloXAsYouCanSeeYourCourseListIsEmpty"|get_lang | format(_u.complete_name) }}*/
/* */
/* {% if count_courses  == 0 %}*/
/*     {{ "PleaseAllowUsALittleTimeToSubscribeYouToOneOfOurCourses"|get_lang }}*/
/* {% else %}*/
/* */
/*     {% if "allow_students_to_browse_courses"|get_setting  == 'true' %}*/
/*         */
/*         {{ "GoAheadAndBrowseOurCourseCatalogXOnceRegisteredYouWillSeeTheCourseHereX"|get_lang|format(course_catalog_link, course_list_link) }}*/
/*         */
/*         <a class="btn btn-primary btn-large" href="{{ course_catalog_url }}">*/
/*             {{ "CourseCatalog"|get_lang }}*/
/*         </a>*/
/*     {% else %}*/
/*         {{ "PleaseAllowUsALittleTimeToSubscribeYouToOneOfOurCourses"|get_lang }}*/
/*     {% endif %}*/
/* */
/* {% endif %}*/
/* </div>*/
