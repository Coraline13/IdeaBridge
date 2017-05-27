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
        $__internal_66f396968b9a22417d87531e23102c57db487803108592e0233586ad9d4d7cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f396968b9a22417d87531e23102c57db487803108592e0233586ad9d4d7cc0->enter($__internal_66f396968b9a22417d87531e23102c57db487803108592e0233586ad9d4d7cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_b06e8603df4b1f65407a2497ab9253614e47acc8ee0fa8db26b5ed05a8c8f30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06e8603df4b1f65407a2497ab9253614e47acc8ee0fa8db26b5ed05a8c8f30c->enter($__internal_b06e8603df4b1f65407a2497ab9253614e47acc8ee0fa8db26b5ed05a8c8f30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f396968b9a22417d87531e23102c57db487803108592e0233586ad9d4d7cc0->leave($__internal_66f396968b9a22417d87531e23102c57db487803108592e0233586ad9d4d7cc0_prof);

        
        $__internal_b06e8603df4b1f65407a2497ab9253614e47acc8ee0fa8db26b5ed05a8c8f30c->leave($__internal_b06e8603df4b1f65407a2497ab9253614e47acc8ee0fa8db26b5ed05a8c8f30c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e11de1c67a92177d08329ab116b2525a8b55533a80c9f5dc9f969c03d60ed671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11de1c67a92177d08329ab116b2525a8b55533a80c9f5dc9f969c03d60ed671->enter($__internal_e11de1c67a92177d08329ab116b2525a8b55533a80c9f5dc9f969c03d60ed671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee55dc839838f461e721a10f70e000ab36730aae7eae4cd862e93ab9c1f5fdf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee55dc839838f461e721a10f70e000ab36730aae7eae4cd862e93ab9c1f5fdf4->enter($__internal_ee55dc839838f461e721a10f70e000ab36730aae7eae4cd862e93ab9c1f5fdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <hr/>
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/success.png"), "html", null, true);
        echo "\"/>
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
        
        $__internal_ee55dc839838f461e721a10f70e000ab36730aae7eae4cd862e93ab9c1f5fdf4->leave($__internal_ee55dc839838f461e721a10f70e000ab36730aae7eae4cd862e93ab9c1f5fdf4_prof);

        
        $__internal_e11de1c67a92177d08329ab116b2525a8b55533a80c9f5dc9f969c03d60ed671->leave($__internal_e11de1c67a92177d08329ab116b2525a8b55533a80c9f5dc9f969c03d60ed671_prof);

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
                <hr/>
                <img src=\"{{ asset('images/success.png') }}\"/>
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
