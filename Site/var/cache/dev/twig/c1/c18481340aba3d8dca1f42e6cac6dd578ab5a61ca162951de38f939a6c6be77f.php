<?php

/* default/index.html.twig */
class __TwigTemplate_a694d06dfc2713ce2ad0d33d8cb0f32ee1d79d8a1e2d37812dfc811d8ff907ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2c658f8dfde3ede3b0d92a84292b1240150104e352d5631166db30c1c6a3a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c658f8dfde3ede3b0d92a84292b1240150104e352d5631166db30c1c6a3a43->enter($__internal_f2c658f8dfde3ede3b0d92a84292b1240150104e352d5631166db30c1c6a3a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_47f758960fb0bdc072f4b25f3a01f2c00282f2a8bbf03cf8915e75a28b21c1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f758960fb0bdc072f4b25f3a01f2c00282f2a8bbf03cf8915e75a28b21c1d9->enter($__internal_47f758960fb0bdc072f4b25f3a01f2c00282f2a8bbf03cf8915e75a28b21c1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c658f8dfde3ede3b0d92a84292b1240150104e352d5631166db30c1c6a3a43->leave($__internal_f2c658f8dfde3ede3b0d92a84292b1240150104e352d5631166db30c1c6a3a43_prof);

        
        $__internal_47f758960fb0bdc072f4b25f3a01f2c00282f2a8bbf03cf8915e75a28b21c1d9->leave($__internal_47f758960fb0bdc072f4b25f3a01f2c00282f2a8bbf03cf8915e75a28b21c1d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_999c742f13bddd58e6bcd823d3d3f9eaaa86f2439a52f3d3545ad40d51ecf77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999c742f13bddd58e6bcd823d3d3f9eaaa86f2439a52f3d3545ad40d51ecf77c->enter($__internal_999c742f13bddd58e6bcd823d3d3f9eaaa86f2439a52f3d3545ad40d51ecf77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a863543bdb1bdce4fa448c728060d7688db31ed5a265fd7fde8d949631bf1d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a863543bdb1bdce4fa448c728060d7688db31ed5a265fd7fde8d949631bf1d82->enter($__internal_a863543bdb1bdce4fa448c728060d7688db31ed5a265fd7fde8d949631bf1d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"pagewrap\">
    <div id=\"logo\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Logo.png"), "html", null, true);
        echo "\"/>
    </div>
    <header>
        <h1>2 Column Responsive Layout</h1>
    </header>
    <section id=\"main\">
        <div class=\"section group\">
            <div class=\"col span_1_of_3\">
                <h2>Nume idee</h2><span class=\"status\">ACCEPTAT</span>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus.</p>

                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/success.png"), "html", null, true);
        echo "\"/> <span class=\"score\">112</span>
            </div>
            <div class=\"col span_1_of_3\">
                <h2>Nume idee</h2><span class=\"status\">ACCEPTAT</span>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus.</p>
            </div>
            <div class=\"col span_1_of_3\">
                <h2>Nume idee</h2><span class=\"status\">ACCEPTAT</span>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus.</p>
            </div>
        </div>
        <div class=\"section group\">
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
            </div>
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
            </div>
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
            </div>
        </div>
    </section>
    <!--       <footer>
            <h4>Footer</h4>
            <p>Footer text</p>
          </footer> -->
</div><!-- end-of-pagewrap -->
<footer>
    <h4>Footer</h4>
    <p>Footer text</p>
</footer>
";
        
        $__internal_a863543bdb1bdce4fa448c728060d7688db31ed5a265fd7fde8d949631bf1d82->leave($__internal_a863543bdb1bdce4fa448c728060d7688db31ed5a265fd7fde8d949631bf1d82_prof);

        
        $__internal_999c742f13bddd58e6bcd823d3d3f9eaaa86f2439a52f3d3545ad40d51ecf77c->leave($__internal_999c742f13bddd58e6bcd823d3d3f9eaaa86f2439a52f3d3545ad40d51ecf77c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div id=\"pagewrap\">
    <div id=\"logo\">
        <img src=\"{{ asset('images/Logo.png') }}\"/>
    </div>
    <header>
        <h1>2 Column Responsive Layout</h1>
    </header>
    <section id=\"main\">
        <div class=\"section group\">
            <div class=\"col span_1_of_3\">
                <h2>Nume idee</h2><span class=\"status\">ACCEPTAT</span>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus.</p>

                <img src=\"{{ asset('images/success.png') }}\"/> <span class=\"score\">112</span>
            </div>
            <div class=\"col span_1_of_3\">
                <h2>Nume idee</h2><span class=\"status\">ACCEPTAT</span>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus.</p>
            </div>
            <div class=\"col span_1_of_3\">
                <h2>Nume idee</h2><span class=\"status\">ACCEPTAT</span>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus.</p>
            </div>
        </div>
        <div class=\"section group\">
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
            </div>
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
            </div>
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
            </div>
        </div>
    </section>
    <!--       <footer>
            <h4>Footer</h4>
            <p>Footer text</p>
          </footer> -->
</div><!-- end-of-pagewrap -->
<footer>
    <h4>Footer</h4>
    <p>Footer text</p>
</footer>
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\IdeaBridge\\Site\\app\\Resources\\views\\default\\index.html.twig");
    }
}
