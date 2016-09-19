<?php

/* layout.html */
class __TwigTemplate_d97af27f99918ac029637ec0085acdd65d5e7530cc1374817d40ff5632ffc80e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<header>header</header>

<content>
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "</content>
<footer>footer</footer>
</body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  41 => 11,  34 => 14,  32 => 11,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Title</title>*/
/* </head>*/
/* <body>*/
/* <header>header</header>*/
/* */
/* <content>*/
/*     {% block content %}*/
/* */
/*     {% endblock content %}*/
/* </content>*/
/* <footer>footer</footer>*/
/* </body>*/
/* </html>*/
