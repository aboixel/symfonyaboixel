<?php

/* ABSiteBundle:Default:index.html.twig */
class __TwigTemplate_f52ff06b89cbcea12757cd4e02e67b69008b4da1317652b8e255406ea6c4198f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ABSiteBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'absite_body' => array($this, 'block_absite_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ABSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_absite_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>A propos</h2>

<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t\t\t\t<article class=\"item\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/refonte.jpg"), "html", null, true);
        echo "\" alt=\"refonte\" width=\"128\" height=\"128\" />
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h3>Refonte de site </h3>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t<article class=\"item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"image fit\"><img src=\"images/devweb.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h3>Développement d'Aplication Web</h3>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "ABSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
