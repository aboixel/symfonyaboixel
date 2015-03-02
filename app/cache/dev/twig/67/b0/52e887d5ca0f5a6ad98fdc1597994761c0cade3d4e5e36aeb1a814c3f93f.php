<?php

/* ABSiteBundle:Default:add.html.twig */
class __TwigTemplate_67b052e887d5ca0f5a6ad98fdc1597994761c0cade3d4e5e36aeb1a814c3f93f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("ABHelloBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'abhello_body' => array($this, 'block_abhello_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ABHelloBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  contact 2 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_abhello_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "ABSiteBundle:Advert:form.html.twig");
        echo "

  <p>
    Formulaire de contact bien reçu!
\tje vous remercie
  </p>


";
    }

    public function getTemplateName()
    {
        return "ABSiteBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
