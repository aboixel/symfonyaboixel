<?php

/* ABSiteBundle:Default:contactEmail.txt.twig */
class __TwigTemplate_d4e7c8e76987c3aa5e9dc8fb7bade174d701bb7fdcb84aab5c33c9c8af746f21 extends Twig_Template
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
        echo "Message envoyé  par ";
        echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array());
        echo " le ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Bonjour,

J'ai bien reçu votre message.
Je reviens vers vous au plus vite.

Cordialement,

Audrey Boixel
06.61.09.73.91";
    }

    public function getTemplateName()
    {
        return "ABSiteBundle:Default:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
