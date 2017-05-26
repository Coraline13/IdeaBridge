<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0fd258d5cd90e6569d1ab61f7a8b5064101977573920a7e0c68993aed9a371c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91fee9d7c06aea6aada29a1c0bf6718abdab28f75297fd2870fbb799673723f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fee9d7c06aea6aada29a1c0bf6718abdab28f75297fd2870fbb799673723f9->enter($__internal_91fee9d7c06aea6aada29a1c0bf6718abdab28f75297fd2870fbb799673723f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7f50585698d15cb588906ba923b46c536ef017aaa96c296997572694ed3acd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f50585698d15cb588906ba923b46c536ef017aaa96c296997572694ed3acd63->enter($__internal_7f50585698d15cb588906ba923b46c536ef017aaa96c296997572694ed3acd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91fee9d7c06aea6aada29a1c0bf6718abdab28f75297fd2870fbb799673723f9->leave($__internal_91fee9d7c06aea6aada29a1c0bf6718abdab28f75297fd2870fbb799673723f9_prof);

        
        $__internal_7f50585698d15cb588906ba923b46c536ef017aaa96c296997572694ed3acd63->leave($__internal_7f50585698d15cb588906ba923b46c536ef017aaa96c296997572694ed3acd63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_edbd280e683f2b19e6961d33d6920df0d6f8bd1c8d02317c11ed0a21ba783fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbd280e683f2b19e6961d33d6920df0d6f8bd1c8d02317c11ed0a21ba783fb1->enter($__internal_edbd280e683f2b19e6961d33d6920df0d6f8bd1c8d02317c11ed0a21ba783fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_67d23d987d9c0c7947ed65c1763b825e4bc2aeb6916e7cbceabf53d41da2305e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d23d987d9c0c7947ed65c1763b825e4bc2aeb6916e7cbceabf53d41da2305e->enter($__internal_67d23d987d9c0c7947ed65c1763b825e4bc2aeb6916e7cbceabf53d41da2305e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67d23d987d9c0c7947ed65c1763b825e4bc2aeb6916e7cbceabf53d41da2305e->leave($__internal_67d23d987d9c0c7947ed65c1763b825e4bc2aeb6916e7cbceabf53d41da2305e_prof);

        
        $__internal_edbd280e683f2b19e6961d33d6920df0d6f8bd1c8d02317c11ed0a21ba783fb1->leave($__internal_edbd280e683f2b19e6961d33d6920df0d6f8bd1c8d02317c11ed0a21ba783fb1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e5c32b3b90582f76ba71430994d66e19075037c0f55d16948de62053b319094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e5c32b3b90582f76ba71430994d66e19075037c0f55d16948de62053b319094->enter($__internal_5e5c32b3b90582f76ba71430994d66e19075037c0f55d16948de62053b319094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68c8c7c21771c6fd383c94fbe6378ac664ab41c8ccad8e36ff21a5458956f599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c8c7c21771c6fd383c94fbe6378ac664ab41c8ccad8e36ff21a5458956f599->enter($__internal_68c8c7c21771c6fd383c94fbe6378ac664ab41c8ccad8e36ff21a5458956f599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68c8c7c21771c6fd383c94fbe6378ac664ab41c8ccad8e36ff21a5458956f599->leave($__internal_68c8c7c21771c6fd383c94fbe6378ac664ab41c8ccad8e36ff21a5458956f599_prof);

        
        $__internal_5e5c32b3b90582f76ba71430994d66e19075037c0f55d16948de62053b319094->leave($__internal_5e5c32b3b90582f76ba71430994d66e19075037c0f55d16948de62053b319094_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e799b5ac86167390a2e0b85e453b05ff63c34c4a00156137a93a4144fa7b6edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e799b5ac86167390a2e0b85e453b05ff63c34c4a00156137a93a4144fa7b6edf->enter($__internal_e799b5ac86167390a2e0b85e453b05ff63c34c4a00156137a93a4144fa7b6edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc3464d81adea0ff994544e6a4c2c4e45528ff425ba411214b20619cb96aaa72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3464d81adea0ff994544e6a4c2c4e45528ff425ba411214b20619cb96aaa72->enter($__internal_dc3464d81adea0ff994544e6a4c2c4e45528ff425ba411214b20619cb96aaa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc3464d81adea0ff994544e6a4c2c4e45528ff425ba411214b20619cb96aaa72->leave($__internal_dc3464d81adea0ff994544e6a4c2c4e45528ff425ba411214b20619cb96aaa72_prof);

        
        $__internal_e799b5ac86167390a2e0b85e453b05ff63c34c4a00156137a93a4144fa7b6edf->leave($__internal_e799b5ac86167390a2e0b85e453b05ff63c34c4a00156137a93a4144fa7b6edf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\IdeaBridge\\Site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
