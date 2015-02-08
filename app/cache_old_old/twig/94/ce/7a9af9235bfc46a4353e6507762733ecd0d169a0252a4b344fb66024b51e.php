<?php

/* UekDemoBundle:Feed:feeds.html.twig */
class __TwigTemplate_94ce7a9af9235bfc46a4353e6507762733ecd0d169a0252a4b344fb66024b51e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UekDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UekDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"page-header\">
\t\t<h1>Hello <small>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</small></h1>
\t</div>
\t
\t
\t<ul class=\"list-group\">
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 11
            echo "\t\t<li>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "picture", array()), "html", null, true);
            echo "\" class=\"img-circle\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "about", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feed"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "\t\t\t\t\t\t\t<span class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "UekDemoBundle:Feed:feeds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  80 => 26,  71 => 23,  68 => 22,  64 => 21,  58 => 18,  51 => 14,  46 => 11,  42 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}
