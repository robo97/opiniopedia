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

/* C:\xampp\htdocs\opiniopedia/themes/opiniopedia/partials/header.htm */
class __TwigTemplate_fa06023c1fc2411298ca5334c19c8d2c26ebd471ecf627de3e415dc432e06f37 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<nav class=\"navbar navbar-expand-sm nav\">
        <a class=\"navbar-brand \" href=\"/\">Opiniopedia</a>
        <button class=\"navbar-toggler navbarbtn\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon togglerbtn\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle katbtn\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Categories
              </a>
              <div class=\"dropdown-menu kategorie\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Politika</a>
                <a class=\"dropdown-item\" href=\"#\">Kultura</a>
                <a class=\"dropdown-item\" href=\"#\">Sport</a>
                <a class=\"dropdown-item\" href=\"#\">Halova16</a>
                <a class=\"dropdown-item\" href=\"#\">technologie</a>
              </div>
            </li>
            <li class=\"nav-item\">

              ";
        // line 25
        if (($context["user"] ?? null)) {
            // line 26
            echo "              <a class=\"nav-item nav-link\" data-request=\"onLogout\" data-request-data=\"\">Logout</a>
              ";
        } else {
            // line 28
            echo "              <a class=\"nav-item nav-link\" href=\"account\" >Login/Register</a>
              ";
        }
        // line 30
        echo "
            </li>
          </ul>

          <form class=\"form-inline my-2 my-sm-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0 searchbtn\" type=\"submit\">Search</button>
          </form>
        </div>
      </nav>





      <!-- <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
              </a>
              <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
              </div>
            </li>
            <li class=\"nav-item\">

              ";
        // line 72
        if (($context["user"] ?? null)) {
            // line 73
            echo "              <a class=\"nav-item nav-link\" data-request=\"onLogout\" data-request-data=\"\">Logout</a>
              ";
        } else {
            // line 75
            echo "              <a class=\"nav-item nav-link\" href=\"account\" >Login/Register</a>
              ";
        }
        // line 77
        echo "
            </li>
          </ul>
          <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
          </form>
        </div>
      </nav> -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\opiniopedia/themes/opiniopedia/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 77,  126 => 75,  122 => 73,  120 => 72,  76 => 30,  72 => 28,  68 => 26,  66 => 25,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}

<nav class=\"navbar navbar-expand-sm nav\">
        <a class=\"navbar-brand \" href=\"/\">Opiniopedia</a>
        <button class=\"navbar-toggler navbarbtn\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon togglerbtn\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle katbtn\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Categories
              </a>
              <div class=\"dropdown-menu kategorie\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Politika</a>
                <a class=\"dropdown-item\" href=\"#\">Kultura</a>
                <a class=\"dropdown-item\" href=\"#\">Sport</a>
                <a class=\"dropdown-item\" href=\"#\">Halova16</a>
                <a class=\"dropdown-item\" href=\"#\">technologie</a>
              </div>
            </li>
            <li class=\"nav-item\">

              {% if user %}
              <a class=\"nav-item nav-link\" data-request=\"onLogout\" data-request-data=\"\">Logout</a>
              {% else %}
              <a class=\"nav-item nav-link\" href=\"account\" >Login/Register</a>
              {% endif %}

            </li>
          </ul>

          <form class=\"form-inline my-2 my-sm-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0 searchbtn\" type=\"submit\">Search</button>
          </form>
        </div>
      </nav>





      <!-- <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
              </a>
              <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
              </div>
            </li>
            <li class=\"nav-item\">

              {% if user %}
              <a class=\"nav-item nav-link\" data-request=\"onLogout\" data-request-data=\"\">Logout</a>
              {% else %}
              <a class=\"nav-item nav-link\" href=\"account\" >Login/Register</a>
              {% endif %}

            </li>
          </ul>
          <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
          </form>
        </div>
      </nav> -->", "C:\\xampp\\htdocs\\opiniopedia/themes/opiniopedia/partials/header.htm", "");
    }
}
