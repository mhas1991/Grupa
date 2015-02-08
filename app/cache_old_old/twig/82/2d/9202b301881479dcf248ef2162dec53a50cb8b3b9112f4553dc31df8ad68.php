<?php

/* UekDemoBundle::layout.html.twig */
class __TwigTemplate_822d9202b301881479dcf248ef2162dec53a50cb8b3b9112f4553dc31df8ad68 extends Twig_Template
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
        echo "<html>
\t<head>
\t\t<!-- Latest compiled and minified CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\">

\t\t<!-- Optional theme -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css\">

\t\t<!-- Latest compiled and minified JavaScript -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>
\t</head>
\t<body>
\t\t<header>
\t\t\t";
        // line 14
        $this->env->loadTemplate("UekDemoBundle:partials:nav.html.twig")->display($context);
        // line 15
        echo "\t\t</header>
\t\t<section id=\"content\">
\t\t\t";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "\t\t</section>
\t\t<footer>
\t\t\tPowtarzalna stopka
\t\t</footer>
\t</body>
</html>";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "UekDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  52 => 17,  43 => 19,  41 => 17,  37 => 15,  35 => 14,  20 => 1,);
    }
}
