<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\opiniopedia/themes/opiniopedia/pages/home.htm */
class __TwigTemplate_2022cfaa9263ab1caeade7602a6a75f2d4aaeb70502f6bcad4af6f58b7683cb8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "Mohol by si pls skapat?";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\opiniopedia/themes/opiniopedia/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Mohol by si pls skapat?", "C:\\xampp\\htdocs\\opiniopedia/themes/opiniopedia/pages/home.htm", "");
    }
}
