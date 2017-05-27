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
        $__internal_223a5a6159a21a8af3f3b6f16d689cf481f4664cb971356b20f94abd4175c17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223a5a6159a21a8af3f3b6f16d689cf481f4664cb971356b20f94abd4175c17e->enter($__internal_223a5a6159a21a8af3f3b6f16d689cf481f4664cb971356b20f94abd4175c17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_3592b1451bf521e8b711fc5e5ded29d37ac61c4851d83f48227c00055a7e89a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3592b1451bf521e8b711fc5e5ded29d37ac61c4851d83f48227c00055a7e89a9->enter($__internal_3592b1451bf521e8b711fc5e5ded29d37ac61c4851d83f48227c00055a7e89a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_223a5a6159a21a8af3f3b6f16d689cf481f4664cb971356b20f94abd4175c17e->leave($__internal_223a5a6159a21a8af3f3b6f16d689cf481f4664cb971356b20f94abd4175c17e_prof);

        
        $__internal_3592b1451bf521e8b711fc5e5ded29d37ac61c4851d83f48227c00055a7e89a9->leave($__internal_3592b1451bf521e8b711fc5e5ded29d37ac61c4851d83f48227c00055a7e89a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_870f3405ab5d62984edc25d94748201ad0d40af4651efc66e3e35922411b27b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870f3405ab5d62984edc25d94748201ad0d40af4651efc66e3e35922411b27b4->enter($__internal_870f3405ab5d62984edc25d94748201ad0d40af4651efc66e3e35922411b27b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dde8a5c263e3a678f2b8068f44b0e81ebf9f8e6c820346bf2a35cdcc677e835b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde8a5c263e3a678f2b8068f44b0e81ebf9f8e6c820346bf2a35cdcc677e835b->enter($__internal_dde8a5c263e3a678f2b8068f44b0e81ebf9f8e6c820346bf2a35cdcc677e835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"section group\">
            <div class=\"col span_1_of_3\">
                <h2>Nume idee</h2><span class=\".status\">ACCEPTAT</span>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus.</p>
            </div>
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
            </div>
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
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
        
        $__internal_dde8a5c263e3a678f2b8068f44b0e81ebf9f8e6c820346bf2a35cdcc677e835b->leave($__internal_dde8a5c263e3a678f2b8068f44b0e81ebf9f8e6c820346bf2a35cdcc677e835b_prof);

        
        $__internal_870f3405ab5d62984edc25d94748201ad0d40af4651efc66e3e35922411b27b4->leave($__internal_870f3405ab5d62984edc25d94748201ad0d40af4651efc66e3e35922411b27b4_prof);

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
        <div class=\"section group\">
            <div class=\"col span_1_of_3\">
                <h2>Nume idee</h2><span class=\".status\">ACCEPTAT</span>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus.</p>
            </div>
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
            </div>
            <div class=\"col span_1_of_3\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id porttitor metus. Praesent ligula orci, tincidunt in ex porttitor, maximus lacinia
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
