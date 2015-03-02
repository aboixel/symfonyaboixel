<?php

/* ABSiteBundle::layout.html.twig */
class __TwigTemplate_0e84b1b7f8fac3f1cca9f59f1b07ca5d559f69f8b3ba449eb1507ee5d21c5946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'absite_body' => array($this, 'block_absite_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  Pages - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
  <hr>

  ";
        // line 13
        echo "  ";
        $this->displayBlock('absite_body', $context, $blocks);
        // line 15
        echo "
";
    }

    // line 13
    public function block_absite_body($context, array $blocks = array())
    {
        // line 14
        echo "  ";
    }

    public function getTemplateName()
    {
        return "ABSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  64 => 13,  59 => 15,  56 => 13,  51 => 9,  48 => 8,  41 => 5,  38 => 4,  11 => 2,);
    }
}
