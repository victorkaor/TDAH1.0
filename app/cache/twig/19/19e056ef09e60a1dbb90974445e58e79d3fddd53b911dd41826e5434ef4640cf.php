<?php

/* default/layout/footer.js.tpl */
class __TwigTemplate_722b42c21f89edcc68576cf105c7f8e3a227b882549eca9e0a8cf6acb2689838 extends Twig_Template
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
        echo "<script>
    \$(\"form\").on(\"click\", ' .advanced_parameters', function() {
        /*var id = \$(this).attr('id') + '_options';
         console.log(id);
         \$(\"#\"+id).toggleClass('active');
         var button = \$(this);
         \$(\"#\"+id).toggle(function() {
         \$(\"#\"+id).toggleClass('active');
         });*/
    });

    /* Makes row highlighting possible */
    \$(document).ready( function() {
        // Date time settings.
        moment.locale('";
        // line 15
        echo (isset($context["locale"]) ? $context["locale"] : null);
        echo "');
        \$.datepicker.setDefaults(\$.datepicker.regional[\"";
        // line 16
        echo (isset($context["locale"]) ? $context["locale"] : null);
        echo "\"]);
        \$.datepicker.regional[\"local\"] = \$.datepicker.regional[\"";
        // line 17
        echo (isset($context["locale"]) ? $context["locale"] : null);
        echo "\"];

        // Chosen select
        \$(\".chzn-select\").chosen({
            disable_search_threshold: 10,
            no_results_text: '";
        // line 22
        echo get_lang("SearchNoResultsFound");
        echo "',
            placeholder_text_multiple: '";
        // line 23
        echo get_lang("SelectSomeOptions");
        echo "',
            placeholder_text_single: '";
        // line 24
        echo get_lang("SelectAnOption");
        echo "',
            width: \"100%\"
        });

        // Bootstrap tabs.
        \$('.tab-wrapper a').click(function (e) {
            e.preventDefault();
            \$(this).tab('show');

            //\$('#tabs a:first').tab('show') // Select first tab
        });

        // Fixes bug when loading links inside a tab.
        \$('.tab-wrapper .tab-pane a').unbind();

        /**
         * Advanced options
         * Usage
         * <a id=\"link\" href=\"url\">Advanced</a>
         * <div id=\"link_options\">
         *     hidden content :)
         * </div>
         * */
        \$(\".advanced_options\").on(\"click\", function (event) {
            event.preventDefault();
            var id = \$(this).attr('id') + '_options';
            var button = \$(this);
            button.toggleClass('active');
            \$(\"#\" + id).toggle();
        });

        /**
         * <a class=\"advanced_options_open\" href=\"http://\" rel=\"div_id\">Open</a>
         * <a class=\"advanced_options_close\" href=\"http://\" rel=\"div_id\">Close</a>
         * <div id=\"div_id\">Div content</div>
         * */
        \$(\".advanced_options_open\").on(\"click\", function (event) {
            event.preventDefault();
            var id = \$(this).attr('rel');
            \$(\"#\" + id).show();
        });

        \$(\".advanced_options_close\").on(\"click\", function (event) {
            event.preventDefault();
            var id = \$(this).attr('rel');
            \$(\"#\" + id).hide();
        });

        // Adv multi-select search input.
        \$('.select_class_filter').on('focus', function () {
            var inputId = \$(this).attr('id');
            inputId = inputId.replace('-filter', '');
            \$(\"#\" + inputId).filterByText(\$(\"#\" + inputId + \"-filter\"));
        });

        \$(\".jp-jplayer audio\").addClass('skip');

        // Mediaelement
        if ( ";
        // line 82
        echo (isset($context["show_media_element"]) ? $context["show_media_element"] : null);
        echo " == 1) {
            jQuery('video:not(.skip), audio:not(.skip)').mediaelementplayer(/* Options */);
        }

        // Table highlight.
        \$(\"form .data_table input:checkbox\").click(function () {
            if (\$(this).is(\":checked\")) {
                \$(this).parentsUntil(\"tr\").parent().addClass(\"row_selected\");

            } else {
                \$(this).parentsUntil(\"tr\").parent().removeClass(\"row_selected\");
            }
        });

        /* For non HTML5 browsers */
        if (\$(\"#formLogin\".length > 1)) {
            \$(\"input[name=login]\").focus();
        }

        /* For IOS users */
        \$('.autocapitalize_off').attr('autocapitalize', 'off');

        // Tool tip (in exercises)
        var tip_options = {
            placement: 'right'
        };
        \$('.boot-tooltip').tooltip(tip_options);
    });



</script>
";
    }

    public function getTemplateName()
    {
        return "default/layout/footer.js.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 82,  59 => 24,  55 => 23,  51 => 22,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <script>*/
/*     $("form").on("click", ' .advanced_parameters', function() {*/
/*         /*var id = $(this).attr('id') + '_options';*/
/*          console.log(id);*/
/*          $("#"+id).toggleClass('active');*/
/*          var button = $(this);*/
/*          $("#"+id).toggle(function() {*/
/*          $("#"+id).toggleClass('active');*/
/*          });*//* */
/*     });*/
/* */
/*     /* Makes row highlighting possible *//* */
/*     $(document).ready( function() {*/
/*         // Date time settings.*/
/*         moment.locale('{{ locale }}');*/
/*         $.datepicker.setDefaults($.datepicker.regional["{{ locale }}"]);*/
/*         $.datepicker.regional["local"] = $.datepicker.regional["{{ locale }}"];*/
/* */
/*         // Chosen select*/
/*         $(".chzn-select").chosen({*/
/*             disable_search_threshold: 10,*/
/*             no_results_text: '{{ 'SearchNoResultsFound' | get_lang }}',*/
/*             placeholder_text_multiple: '{{ 'SelectSomeOptions' | get_lang }}',*/
/*             placeholder_text_single: '{{ 'SelectAnOption' | get_lang }}',*/
/*             width: "100%"*/
/*         });*/
/* */
/*         // Bootstrap tabs.*/
/*         $('.tab-wrapper a').click(function (e) {*/
/*             e.preventDefault();*/
/*             $(this).tab('show');*/
/* */
/*             //$('#tabs a:first').tab('show') // Select first tab*/
/*         });*/
/* */
/*         // Fixes bug when loading links inside a tab.*/
/*         $('.tab-wrapper .tab-pane a').unbind();*/
/* */
/*         /***/
/*          * Advanced options*/
/*          * Usage*/
/*          * <a id="link" href="url">Advanced</a>*/
/*          * <div id="link_options">*/
/*          *     hidden content :)*/
/*          * </div>*/
/*          * *//* */
/*         $(".advanced_options").on("click", function (event) {*/
/*             event.preventDefault();*/
/*             var id = $(this).attr('id') + '_options';*/
/*             var button = $(this);*/
/*             button.toggleClass('active');*/
/*             $("#" + id).toggle();*/
/*         });*/
/* */
/*         /***/
/*          * <a class="advanced_options_open" href="http://" rel="div_id">Open</a>*/
/*          * <a class="advanced_options_close" href="http://" rel="div_id">Close</a>*/
/*          * <div id="div_id">Div content</div>*/
/*          * *//* */
/*         $(".advanced_options_open").on("click", function (event) {*/
/*             event.preventDefault();*/
/*             var id = $(this).attr('rel');*/
/*             $("#" + id).show();*/
/*         });*/
/* */
/*         $(".advanced_options_close").on("click", function (event) {*/
/*             event.preventDefault();*/
/*             var id = $(this).attr('rel');*/
/*             $("#" + id).hide();*/
/*         });*/
/* */
/*         // Adv multi-select search input.*/
/*         $('.select_class_filter').on('focus', function () {*/
/*             var inputId = $(this).attr('id');*/
/*             inputId = inputId.replace('-filter', '');*/
/*             $("#" + inputId).filterByText($("#" + inputId + "-filter"));*/
/*         });*/
/* */
/*         $(".jp-jplayer audio").addClass('skip');*/
/* */
/*         // Mediaelement*/
/*         if ( {{ show_media_element }} == 1) {*/
/*             jQuery('video:not(.skip), audio:not(.skip)').mediaelementplayer(/* Options *//* );*/
/*         }*/
/* */
/*         // Table highlight.*/
/*         $("form .data_table input:checkbox").click(function () {*/
/*             if ($(this).is(":checked")) {*/
/*                 $(this).parentsUntil("tr").parent().addClass("row_selected");*/
/* */
/*             } else {*/
/*                 $(this).parentsUntil("tr").parent().removeClass("row_selected");*/
/*             }*/
/*         });*/
/* */
/*         /* For non HTML5 browsers *//* */
/*         if ($("#formLogin".length > 1)) {*/
/*             $("input[name=login]").focus();*/
/*         }*/
/* */
/*         /* For IOS users *//* */
/*         $('.autocapitalize_off').attr('autocapitalize', 'off');*/
/* */
/*         // Tool tip (in exercises)*/
/*         var tip_options = {*/
/*             placement: 'right'*/
/*         };*/
/*         $('.boot-tooltip').tooltip(tip_options);*/
/*     });*/
/* */
/* */
/* */
/* </script>*/
/* */
