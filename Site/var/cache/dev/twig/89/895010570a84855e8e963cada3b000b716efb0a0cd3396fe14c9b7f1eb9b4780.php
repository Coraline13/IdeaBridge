<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea04b0681df5be4f4372891dbf57cd265f736c45c771d50e480f083206011b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_489eb79c30949e2885f1afd5133a749474ceb85f4877caeb0d71207f58ec9221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489eb79c30949e2885f1afd5133a749474ceb85f4877caeb0d71207f58ec9221->enter($__internal_489eb79c30949e2885f1afd5133a749474ceb85f4877caeb0d71207f58ec9221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_428996c39d7a5188e53c43fead0f98858c39acaad4eb7b4d9c02e60f7ece73d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428996c39d7a5188e53c43fead0f98858c39acaad4eb7b4d9c02e60f7ece73d8->enter($__internal_428996c39d7a5188e53c43fead0f98858c39acaad4eb7b4d9c02e60f7ece73d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489eb79c30949e2885f1afd5133a749474ceb85f4877caeb0d71207f58ec9221->leave($__internal_489eb79c30949e2885f1afd5133a749474ceb85f4877caeb0d71207f58ec9221_prof);

        
        $__internal_428996c39d7a5188e53c43fead0f98858c39acaad4eb7b4d9c02e60f7ece73d8->leave($__internal_428996c39d7a5188e53c43fead0f98858c39acaad4eb7b4d9c02e60f7ece73d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ae9647e4ecf63a214bce619f922cfe0b7261b45ae0d42f78fc2a1090def1a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae9647e4ecf63a214bce619f922cfe0b7261b45ae0d42f78fc2a1090def1a88->enter($__internal_1ae9647e4ecf63a214bce619f922cfe0b7261b45ae0d42f78fc2a1090def1a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c1ec78e008654f7223dde07ec202670ec7e53724889fc435ce892d6d1b192b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1ec78e008654f7223dde07ec202670ec7e53724889fc435ce892d6d1b192b4->enter($__internal_4c1ec78e008654f7223dde07ec202670ec7e53724889fc435ce892d6d1b192b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4c1ec78e008654f7223dde07ec202670ec7e53724889fc435ce892d6d1b192b4->leave($__internal_4c1ec78e008654f7223dde07ec202670ec7e53724889fc435ce892d6d1b192b4_prof);

        
        $__internal_1ae9647e4ecf63a214bce619f922cfe0b7261b45ae0d42f78fc2a1090def1a88->leave($__internal_1ae9647e4ecf63a214bce619f922cfe0b7261b45ae0d42f78fc2a1090def1a88_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1dd6ab9a481a6dac0bb79e66106255a5098e67153f5dc2619c97ef6e99ccf657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd6ab9a481a6dac0bb79e66106255a5098e67153f5dc2619c97ef6e99ccf657->enter($__internal_1dd6ab9a481a6dac0bb79e66106255a5098e67153f5dc2619c97ef6e99ccf657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9c8ea2280612a35cef2b032ee27bd18937e3232df1dd1bba1bd40e3175e7280b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8ea2280612a35cef2b032ee27bd18937e3232df1dd1bba1bd40e3175e7280b->enter($__internal_9c8ea2280612a35cef2b032ee27bd18937e3232df1dd1bba1bd40e3175e7280b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9c8ea2280612a35cef2b032ee27bd18937e3232df1dd1bba1bd40e3175e7280b->leave($__internal_9c8ea2280612a35cef2b032ee27bd18937e3232df1dd1bba1bd40e3175e7280b_prof);

        
        $__internal_1dd6ab9a481a6dac0bb79e66106255a5098e67153f5dc2619c97ef6e99ccf657->leave($__internal_1dd6ab9a481a6dac0bb79e66106255a5098e67153f5dc2619c97ef6e99ccf657_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9816097267e78ca1acec51e58cd28f203d9a276392cd85c6ec9100f854d0a2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9816097267e78ca1acec51e58cd28f203d9a276392cd85c6ec9100f854d0a2ca->enter($__internal_9816097267e78ca1acec51e58cd28f203d9a276392cd85c6ec9100f854d0a2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ceab2c3a5bd477f36317ee3c916954688faa03711ea24f46f114eb02f4dc97d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceab2c3a5bd477f36317ee3c916954688faa03711ea24f46f114eb02f4dc97d8->enter($__internal_ceab2c3a5bd477f36317ee3c916954688faa03711ea24f46f114eb02f4dc97d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ceab2c3a5bd477f36317ee3c916954688faa03711ea24f46f114eb02f4dc97d8->leave($__internal_ceab2c3a5bd477f36317ee3c916954688faa03711ea24f46f114eb02f4dc97d8_prof);

        
        $__internal_9816097267e78ca1acec51e58cd28f203d9a276392cd85c6ec9100f854d0a2ca->leave($__internal_9816097267e78ca1acec51e58cd28f203d9a276392cd85c6ec9100f854d0a2ca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\IdeaBridge\\Site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
