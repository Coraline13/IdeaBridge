<?php

/* base.html.twig */
class __TwigTemplate_8b9af363f79570f54baa8c6ff66ed3fd291fa90ae054c39ca27af4c2c64f332b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed044beb0b2d3f140c63977f45c918daca31b3fc2c9dc3383a8803acebb8ea99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed044beb0b2d3f140c63977f45c918daca31b3fc2c9dc3383a8803acebb8ea99->enter($__internal_ed044beb0b2d3f140c63977f45c918daca31b3fc2c9dc3383a8803acebb8ea99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2a7fa5420fd7707aa49f323fc759599f29c59a4881f47cb84332dcb5bd5bcde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7fa5420fd7707aa49f323fc759599f29c59a4881f47cb84332dcb5bd5bcde3->enter($__internal_2a7fa5420fd7707aa49f323fc759599f29c59a4881f47cb84332dcb5bd5bcde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_ed044beb0b2d3f140c63977f45c918daca31b3fc2c9dc3383a8803acebb8ea99->leave($__internal_ed044beb0b2d3f140c63977f45c918daca31b3fc2c9dc3383a8803acebb8ea99_prof);

        
        $__internal_2a7fa5420fd7707aa49f323fc759599f29c59a4881f47cb84332dcb5bd5bcde3->leave($__internal_2a7fa5420fd7707aa49f323fc759599f29c59a4881f47cb84332dcb5bd5bcde3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0e6ec7463441e9a08fae6065b9b2858a99b937807b328c09338bbcd65507fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e6ec7463441e9a08fae6065b9b2858a99b937807b328c09338bbcd65507fae->enter($__internal_a0e6ec7463441e9a08fae6065b9b2858a99b937807b328c09338bbcd65507fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34be675d69e94107aa1284fa96d1d872905198e0d6f064dc74fbdc1271f08d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34be675d69e94107aa1284fa96d1d872905198e0d6f064dc74fbdc1271f08d6c->enter($__internal_34be675d69e94107aa1284fa96d1d872905198e0d6f064dc74fbdc1271f08d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello";
        
        $__internal_34be675d69e94107aa1284fa96d1d872905198e0d6f064dc74fbdc1271f08d6c->leave($__internal_34be675d69e94107aa1284fa96d1d872905198e0d6f064dc74fbdc1271f08d6c_prof);

        
        $__internal_a0e6ec7463441e9a08fae6065b9b2858a99b937807b328c09338bbcd65507fae->leave($__internal_a0e6ec7463441e9a08fae6065b9b2858a99b937807b328c09338bbcd65507fae_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ba28b10e5221f5338fb71adee0b9c267f736d4447b32556f129953f12899caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba28b10e5221f5338fb71adee0b9c267f736d4447b32556f129953f12899caf->enter($__internal_7ba28b10e5221f5338fb71adee0b9c267f736d4447b32556f129953f12899caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c095be794e945fd172e6b818f3dfe21167b5fb2954aed13a87d44738f6304fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c095be794e945fd172e6b818f3dfe21167b5fb2954aed13a87d44738f6304fd1->enter($__internal_c095be794e945fd172e6b818f3dfe21167b5fb2954aed13a87d44738f6304fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c095be794e945fd172e6b818f3dfe21167b5fb2954aed13a87d44738f6304fd1->leave($__internal_c095be794e945fd172e6b818f3dfe21167b5fb2954aed13a87d44738f6304fd1_prof);

        
        $__internal_7ba28b10e5221f5338fb71adee0b9c267f736d4447b32556f129953f12899caf->leave($__internal_7ba28b10e5221f5338fb71adee0b9c267f736d4447b32556f129953f12899caf_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0a4017a1ac9bc72d41a70263fed735155af16ec556dc6909828608ad4a0f4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a4017a1ac9bc72d41a70263fed735155af16ec556dc6909828608ad4a0f4a2->enter($__internal_d0a4017a1ac9bc72d41a70263fed735155af16ec556dc6909828608ad4a0f4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1ee5b7bb48f18cd444d38d506ce2e0a165b88aa70ed5e81fc1072afcf2e3298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ee5b7bb48f18cd444d38d506ce2e0a165b88aa70ed5e81fc1072afcf2e3298->enter($__internal_a1ee5b7bb48f18cd444d38d506ce2e0a165b88aa70ed5e81fc1072afcf2e3298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a1ee5b7bb48f18cd444d38d506ce2e0a165b88aa70ed5e81fc1072afcf2e3298->leave($__internal_a1ee5b7bb48f18cd444d38d506ce2e0a165b88aa70ed5e81fc1072afcf2e3298_prof);

        
        $__internal_d0a4017a1ac9bc72d41a70263fed735155af16ec556dc6909828608ad4a0f4a2->leave($__internal_d0a4017a1ac9bc72d41a70263fed735155af16ec556dc6909828608ad4a0f4a2_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_687a8975b12ed29c6b08d64ff1affb7ca681b389fa5368e51611eef7b0326da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687a8975b12ed29c6b08d64ff1affb7ca681b389fa5368e51611eef7b0326da5->enter($__internal_687a8975b12ed29c6b08d64ff1affb7ca681b389fa5368e51611eef7b0326da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb613fb1aab79017c664fd6f19e497a0f5a8d9fc8f42927273d38129348f0c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb613fb1aab79017c664fd6f19e497a0f5a8d9fc8f42927273d38129348f0c15->enter($__internal_fb613fb1aab79017c664fd6f19e497a0f5a8d9fc8f42927273d38129348f0c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fb613fb1aab79017c664fd6f19e497a0f5a8d9fc8f42927273d38129348f0c15->leave($__internal_fb613fb1aab79017c664fd6f19e497a0f5a8d9fc8f42927273d38129348f0c15_prof);

        
        $__internal_687a8975b12ed29c6b08d64ff1affb7ca681b389fa5368e51611eef7b0326da5->leave($__internal_687a8975b12ed29c6b08d64ff1affb7ca681b389fa5368e51611eef7b0326da5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 17,  110 => 16,  93 => 8,  75 => 7,  63 => 18,  60 => 17,  58 => 16,  50 => 11,  46 => 10,  43 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <title>{% block title %}Hello{% endblock %}</title>
        {% block stylesheets %}{% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\IdeaBridge\\Site\\app\\Resources\\views\\base.html.twig");
    }
}
