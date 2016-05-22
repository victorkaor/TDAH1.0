<?php

/* default/layout/topbar.tpl */
class __TwigTemplate_31de3c9e4aac328f325cff26a39b655caec305c7c15eb9dc429b8d42f32e4df7 extends Twig_Template
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
        echo "<!-- Topbar -->
";
        // line 2
        if (((isset($context["show_toolbar"]) ? $context["show_toolbar"] : null) == 1)) {
            // line 3
            echo "    <nav id=\"toolbar-admin\" class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container-fluid\">

            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#toolbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
            // line 13
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
            echo "\">
                    ";
            // line 14
            echo api_get_setting("siteName");
            echo "
                </a>
            </div>

            ";
            // line 18
            if ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array())) {
                // line 19
                echo "                <div class=\"collapse navbar-collapse\" id=\"toolbar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
                // line 21
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
                echo "user_portal.php\"> ";
                echo get_lang("MyCourses");
                echo "</a></li>
                        ";
                // line 31
                echo "                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 32
                echo get_lang("Tracking");
                echo "<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
                // line 34
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "mySpace/\">";
                echo get_lang("CoursesReporting");
                echo "</a></li>
                                <li><a href=\"";
                // line 35
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "mySpace/index.php?view=admin\">";
                echo get_lang("AdminReports");
                echo "</a></li>
                                <li><a href=\"";
                // line 36
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "tracking/exams.php\">";
                echo get_lang("ExamsReporting");
                echo "</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
                // line 38
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "dashboard/\">";
                echo get_lang("Dashboard");
                echo "</a></li>
                            </ul>
                        </li>
                        ";
                // line 41
                if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin", array()) == 1)) {
                    // line 42
                    echo "                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 43
                    echo get_lang("Administration");
                    echo "<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
                    // line 45
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/\">";
                    echo get_lang("Home");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 46
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/user_list.php\">";
                    echo get_lang("UserList");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 47
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/course_list.php\">";
                    echo get_lang("CourseList");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 48
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "session/session_list.php\">";
                    echo get_lang("SessionList");
                    echo "</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
                    // line 50
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/settings.php\">";
                    echo get_lang("Settings");
                    echo "</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
                    // line 52
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/settings.php?category=Plugins\">";
                    echo get_lang("Plugins");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 53
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/settings.php?category=Regions\">";
                    echo get_lang("Regions");
                    echo "</a></li>
                            </ul>
                        </li>

                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 58
                    echo get_lang("Add");
                    echo "<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
                    // line 60
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/user_add.php\">";
                    echo get_lang("User");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 61
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/course_add.php\">";
                    echo get_lang("Course");
                    echo "</a></li>
                                <li><a href=\"";
                    // line 62
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "session/session_add.php\">";
                    echo get_lang("Session");
                    echo "</a></li>
                            </ul>
                        </li>
                        ";
                }
                // line 66
                echo "                    </ul>

                    ";
                // line 68
                if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin", array()) == 1)) {
                    // line 69
                    echo "                    <form class=\"navbar-form navbar-left\" role=\"search\" action=\"";
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                    echo "admin/user_list.php\" method=\"get\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
                    // line 70
                    echo get_lang("SearchUsers");
                    echo "\" name=\"keyword\">
                    </form>
                    ";
                }
                // line 73
                echo "
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
                // line 75
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "social/home.php\"><img src=\"";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_small", array());
                echo "\"/></a></li>
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"  href=\"#\">";
                // line 77
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo "<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
                // line 79
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "social/home.php\">";
                echo get_lang("Profile");
                echo "</a></li>
                                <li><a href=\"";
                // line 80
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "calendar/agenda_js.php?type=personal\">";
                echo get_lang("MyAgenda");
                echo "</a></li>
                                <li><a href=\"";
                // line 81
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "messages/inbox.php\">";
                echo get_lang("Inbox");
                echo "</a></li>
                                <li><a href=\"";
                // line 82
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "auth/my_progress.php\">";
                echo get_lang("MyReporting");
                echo "</a></li>
                                <!--<li class=\"divider\"></li>
                                <li><a href=\"";
                // line 84
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
                echo "social/invitations.php\">";
                echo get_lang("PendingInvitations");
                echo "</a></li> -->
                            </ul>
                        </li>
                        <li><a href=\"";
                // line 87
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
                echo "index.php?logout=logout&uid=";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "user_id", array());
                echo "\">";
                echo get_lang("Logout");
                echo "</a></li>
                    </ul>
                </div> <!-- /nav collapse -->
            ";
            }
            // line 91
            echo "        </div> <!-- /container-->
    </nav><!-- /topbar -->
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/topbar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 91,  244 => 87,  236 => 84,  229 => 82,  223 => 81,  217 => 80,  211 => 79,  206 => 77,  199 => 75,  195 => 73,  189 => 70,  184 => 69,  182 => 68,  178 => 66,  169 => 62,  163 => 61,  157 => 60,  152 => 58,  142 => 53,  136 => 52,  129 => 50,  122 => 48,  116 => 47,  110 => 46,  104 => 45,  99 => 43,  96 => 42,  94 => 41,  86 => 38,  79 => 36,  73 => 35,  67 => 34,  62 => 32,  59 => 31,  53 => 21,  49 => 19,  47 => 18,  40 => 14,  36 => 13,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- Topbar -->*/
/* {% if show_toolbar == 1 %}*/
/*     <nav id="toolbar-admin" class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container-fluid">*/
/* */
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toolbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{ _p.web }}">*/
/*                     {{ "siteName" | get_setting }}*/
/*                 </a>*/
/*             </div>*/
/* */
/*             {% if _u.logged %}*/
/*                 <div class="collapse navbar-collapse" id="toolbar">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="{{ _p.web }}user_portal.php"> {{ "MyCourses"|get_lang }}</a></li>*/
/*                         {#*/
/*                         <li class="dropdown">*/
/*                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{'Teaching'|get_lang }}<b class="caret"></b></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ _p.web_main }}create_course/add_course.php">{{ "AddCourse"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}auth/courses.php">{{ "Catalog"|get_lang }}</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         #}*/
/*                         <li class="dropdown">*/
/*                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{'Tracking'|get_lang }}<b class="caret"></b></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ _p.web_main }}mySpace/">{{ "CoursesReporting"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}mySpace/index.php?view=admin">{{ "AdminReports"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}tracking/exams.php">{{ "ExamsReporting"|get_lang }}</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="{{ _p.web_main }}dashboard/">{{ "Dashboard"|get_lang }}</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         {% if _u.is_admin == 1 %}*/
/*                         <li class="dropdown">*/
/*                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{'Administration'|get_lang }}<b class="caret"></b></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ _p.web_main }}admin/">{{ "Home"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}admin/user_list.php">{{ "UserList"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}admin/course_list.php">{{ "CourseList"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}session/session_list.php">{{ "SessionList"|get_lang }}</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="{{ _p.web_main }}admin/settings.php">{{ "Settings"|get_lang }}</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="{{ _p.web_main }}admin/settings.php?category=Plugins">{{ "Plugins"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}admin/settings.php?category=Regions">{{ "Regions"|get_lang }}</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li class="dropdown">*/
/*                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ 'Add'|get_lang }}<b class="caret"></b></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ _p.web_main }}admin/user_add.php">{{ "User"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}admin/course_add.php">{{ "Course"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}session/session_add.php">{{ "Session"|get_lang }}</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/* */
/*                     {% if _u.is_admin == 1 %}*/
/*                     <form class="navbar-form navbar-left" role="search" action="{{ _p.web_main }}admin/user_list.php" method="get">*/
/*                         <input type="text" class="form-control" placeholder="{{'SearchUsers'|get_lang }}" name="keyword">*/
/*                     </form>*/
/*                     {% endif %}*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="{{ _p.web_main }}social/home.php"><img src="{{ _u.avatar_small }}"/></a></li>*/
/*                         <li class="dropdown">*/
/*                             <a class="dropdown-toggle" data-toggle="dropdown"  href="#">{{ _u.complete_name }}<b class="caret"></b></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ _p.web_main }}social/home.php">{{ "Profile"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}calendar/agenda_js.php?type=personal">{{ "MyAgenda"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}messages/inbox.php">{{ "Inbox"|get_lang }}</a></li>*/
/*                                 <li><a href="{{ _p.web_main }}auth/my_progress.php">{{ "MyReporting"|get_lang }}</a></li>*/
/*                                 <!--<li class="divider"></li>*/
/*                                 <li><a href="{{ _p.web_main }}social/invitations.php">{{ "PendingInvitations"|get_lang }}</a></li> -->*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li><a href="{{  _p.web }}index.php?logout=logout&uid={{_u.user_id}}">{{ "Logout"|get_lang }}</a></li>*/
/*                     </ul>*/
/*                 </div> <!-- /nav collapse -->*/
/*             {% endif %}*/
/*         </div> <!-- /container-->*/
/*     </nav><!-- /topbar -->*/
/* {% endif %}*/
/* */
