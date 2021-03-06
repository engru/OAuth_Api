<?php

/* OAuthServerBundle:User:index.html.twig */
class __TwigTemplate_09508ea9e62e96e41286c136889cefbce28018219d6fda93399e51d8af603d92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>User profile page</h1>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a><br>
    <p>
        Id: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo "
    </p>
    <p>
        Username: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "
    </p>
    <p>
        Email: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "email"), "html", null, true);
        echo "
    </p>
    <p>
        DOB: ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "dob"), "d-m-Y"), "html", null, true);
        echo "
    </p>
    <div>
        Available Client:
        <ul>
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 22
            echo "                <li>
                    <a href=";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_oauth_server_client", array("clientID" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "ID"))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "name"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </ul>

    </div>
    ";
        // line 29
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 30
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            <button>Logout</button>
        </a>
    ";
        } else {
            // line 34
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
            <button>Login</button>
        </a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OAuthServerBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  65 => 21,  70 => 19,  53 => 5,  153 => 65,  34 => 5,  23 => 1,  100 => 27,  81 => 24,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 59,  132 => 55,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 60,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 20,  63 => 16,  59 => 14,  38 => 8,  94 => 28,  89 => 30,  85 => 25,  75 => 23,  68 => 18,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 29,  88 => 29,  78 => 23,  46 => 11,  27 => 5,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 57,  121 => 46,  117 => 43,  105 => 38,  91 => 27,  62 => 19,  49 => 19,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 23,  69 => 22,  47 => 12,  40 => 11,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 61,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 41,  108 => 36,  101 => 32,  98 => 34,  96 => 31,  83 => 26,  74 => 14,  66 => 20,  55 => 10,  52 => 21,  50 => 10,  43 => 7,  41 => 9,  35 => 7,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 28,  99 => 31,  95 => 28,  92 => 21,  86 => 29,  82 => 28,  80 => 19,  73 => 19,  64 => 10,  60 => 16,  57 => 16,  54 => 16,  51 => 13,  48 => 11,  45 => 10,  42 => 10,  39 => 7,  36 => 7,  33 => 6,  30 => 3,);
    }
}
