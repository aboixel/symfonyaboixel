<?php

/* ::layout.html.twig */
class __TwigTemplate_93ae1be412ee78ce10edee65701b5f69a084fe4e7a3bc20cabb2773afe122c74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c734522_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c734522_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c734522_part_1_bootstrap-theme_1.css");
            // line 12
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
            // asset "c734522_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c734522_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c734522_part_1_bootstrap-theme.css_2.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
            // asset "c734522_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c734522_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c734522_part_1_bootstrap-theme.min_3.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
            // asset "c734522_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c734522_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c734522_part_1_bootstrap_4.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
            // asset "c734522_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c734522_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c734522_part_1_bootstrap.css_5.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
            // asset "c734522_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c734522_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c734522_part_1_bootstrap.min_6.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        } else {
            // asset "c734522"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c734522") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c734522.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
        // line 14
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Audrey Boixel</h1>
      <p>
        Developpeur Web Back-end PHP
      </p>
     
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ab_site_home");
        echo "\">A propos</a></li>
          <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("ab_site_contact");
        echo "\">me contacter</a></li>
        </ul>

       
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "      </div>
    </div>

    <hr>

    <footer>
    </footer>
  </div>

  ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "        ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "63a2f85_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63a2f85_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/63a2f85_part_1_bootstrap_1.js");
            // line 50
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "63a2f85_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63a2f85_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/63a2f85_part_1_bootstrap.min_2.js");
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "63a2f85_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63a2f85_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/63a2f85_part_1_npm_3.js");
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "63a2f85"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63a2f85") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/63a2f85.js");
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 52
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 52,  157 => 50,  152 => 49,  149 => 48,  145 => 38,  142 => 37,  136 => 9,  130 => 53,  128 => 48,  117 => 39,  115 => 37,  106 => 31,  102 => 30,  84 => 14,  40 => 12,  36 => 11,  31 => 9,  22 => 2,);
    }
}
