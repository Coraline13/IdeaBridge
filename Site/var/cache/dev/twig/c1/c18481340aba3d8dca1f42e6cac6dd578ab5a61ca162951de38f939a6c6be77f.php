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
        $__internal_c367d1b5d9a83d7f2114ddfff016903b60742d03eec7a4c83719c5c60ff9aef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c367d1b5d9a83d7f2114ddfff016903b60742d03eec7a4c83719c5c60ff9aef7->enter($__internal_c367d1b5d9a83d7f2114ddfff016903b60742d03eec7a4c83719c5c60ff9aef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_5af81b8c9aa4debb1882031f3ba21371b4282a9203c2c3e5347ce5e0ef496d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af81b8c9aa4debb1882031f3ba21371b4282a9203c2c3e5347ce5e0ef496d40->enter($__internal_5af81b8c9aa4debb1882031f3ba21371b4282a9203c2c3e5347ce5e0ef496d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c367d1b5d9a83d7f2114ddfff016903b60742d03eec7a4c83719c5c60ff9aef7->leave($__internal_c367d1b5d9a83d7f2114ddfff016903b60742d03eec7a4c83719c5c60ff9aef7_prof);

        
        $__internal_5af81b8c9aa4debb1882031f3ba21371b4282a9203c2c3e5347ce5e0ef496d40->leave($__internal_5af81b8c9aa4debb1882031f3ba21371b4282a9203c2c3e5347ce5e0ef496d40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36eec1558e7d6d4e40593a862b5c55f99620f94dee000b90dbe171943df3f9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36eec1558e7d6d4e40593a862b5c55f99620f94dee000b90dbe171943df3f9c2->enter($__internal_36eec1558e7d6d4e40593a862b5c55f99620f94dee000b90dbe171943df3f9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c755e4755921360c409e2fb2060a197c1cde4287e54d50ee62499274b841ed5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c755e4755921360c409e2fb2060a197c1cde4287e54d50ee62499274b841ed5d->enter($__internal_c755e4755921360c409e2fb2060a197c1cde4287e54d50ee62499274b841ed5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <aside id=\"sidebar\">
        <h2>2nd Content Area</h2>
        <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
    </aside>
    <section id=\"content\">
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
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
        
        $__internal_c755e4755921360c409e2fb2060a197c1cde4287e54d50ee62499274b841ed5d->leave($__internal_c755e4755921360c409e2fb2060a197c1cde4287e54d50ee62499274b841ed5d_prof);

        
        $__internal_36eec1558e7d6d4e40593a862b5c55f99620f94dee000b90dbe171943df3f9c2->leave($__internal_36eec1558e7d6d4e40593a862b5c55f99620f94dee000b90dbe171943df3f9c2_prof);

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
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <aside id=\"sidebar\">
        <h2>2nd Content Area</h2>
        <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
    </aside>
    <section id=\"content\">
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
        </div>
        <div class=\"idea\">
            <h2>Facem si noi o groapa?</h2>
            <p>Da, da facem</p>
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
