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
        $__internal_1c96ac80d448ae4c6d4e76808a33a5a2cf5542bf0b326591e777444c3db71c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c96ac80d448ae4c6d4e76808a33a5a2cf5542bf0b326591e777444c3db71c3a->enter($__internal_1c96ac80d448ae4c6d4e76808a33a5a2cf5542bf0b326591e777444c3db71c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_205c726a7f8debbff6eb7e1a93c511618e7858251bf8dff26f803e39b5e824d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205c726a7f8debbff6eb7e1a93c511618e7858251bf8dff26f803e39b5e824d1->enter($__internal_205c726a7f8debbff6eb7e1a93c511618e7858251bf8dff26f803e39b5e824d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/grid.css"), "html", null, true);
        echo "\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_1c96ac80d448ae4c6d4e76808a33a5a2cf5542bf0b326591e777444c3db71c3a->leave($__internal_1c96ac80d448ae4c6d4e76808a33a5a2cf5542bf0b326591e777444c3db71c3a_prof);

        
        $__internal_205c726a7f8debbff6eb7e1a93c511618e7858251bf8dff26f803e39b5e824d1->leave($__internal_205c726a7f8debbff6eb7e1a93c511618e7858251bf8dff26f803e39b5e824d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_736b3a4b08e50fa99e6b0b54d5c6df7fff6347fd2d0d8c36541dd2e17e496dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736b3a4b08e50fa99e6b0b54d5c6df7fff6347fd2d0d8c36541dd2e17e496dab->enter($__internal_736b3a4b08e50fa99e6b0b54d5c6df7fff6347fd2d0d8c36541dd2e17e496dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d575531a3816ca3aa1f7a4e7da28fb2b404c36055eabc67d15e078d0ceed7900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d575531a3816ca3aa1f7a4e7da28fb2b404c36055eabc67d15e078d0ceed7900->enter($__internal_d575531a3816ca3aa1f7a4e7da28fb2b404c36055eabc67d15e078d0ceed7900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello";
        
        $__internal_d575531a3816ca3aa1f7a4e7da28fb2b404c36055eabc67d15e078d0ceed7900->leave($__internal_d575531a3816ca3aa1f7a4e7da28fb2b404c36055eabc67d15e078d0ceed7900_prof);

        
        $__internal_736b3a4b08e50fa99e6b0b54d5c6df7fff6347fd2d0d8c36541dd2e17e496dab->leave($__internal_736b3a4b08e50fa99e6b0b54d5c6df7fff6347fd2d0d8c36541dd2e17e496dab_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac5930fcb6f6fee275c1829385d214827e7b9852a350283030dadcedda19b699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5930fcb6f6fee275c1829385d214827e7b9852a350283030dadcedda19b699->enter($__internal_ac5930fcb6f6fee275c1829385d214827e7b9852a350283030dadcedda19b699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8475974e4db89c67a5e157f17cf3d07fdf8d1cce714fd8372d70a260f44417eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8475974e4db89c67a5e157f17cf3d07fdf8d1cce714fd8372d70a260f44417eb->enter($__internal_8475974e4db89c67a5e157f17cf3d07fdf8d1cce714fd8372d70a260f44417eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8475974e4db89c67a5e157f17cf3d07fdf8d1cce714fd8372d70a260f44417eb->leave($__internal_8475974e4db89c67a5e157f17cf3d07fdf8d1cce714fd8372d70a260f44417eb_prof);

        
        $__internal_ac5930fcb6f6fee275c1829385d214827e7b9852a350283030dadcedda19b699->leave($__internal_ac5930fcb6f6fee275c1829385d214827e7b9852a350283030dadcedda19b699_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd5490f08a513398f10e044a6b9c3329495b46f68527443ec2e12acadbd6a2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5490f08a513398f10e044a6b9c3329495b46f68527443ec2e12acadbd6a2b5->enter($__internal_fd5490f08a513398f10e044a6b9c3329495b46f68527443ec2e12acadbd6a2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64deba740b044be982f34598b939c801887061b2f8cfc0d0969a2b17c1da926f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64deba740b044be982f34598b939c801887061b2f8cfc0d0969a2b17c1da926f->enter($__internal_64deba740b044be982f34598b939c801887061b2f8cfc0d0969a2b17c1da926f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64deba740b044be982f34598b939c801887061b2f8cfc0d0969a2b17c1da926f->leave($__internal_64deba740b044be982f34598b939c801887061b2f8cfc0d0969a2b17c1da926f_prof);

        
        $__internal_fd5490f08a513398f10e044a6b9c3329495b46f68527443ec2e12acadbd6a2b5->leave($__internal_fd5490f08a513398f10e044a6b9c3329495b46f68527443ec2e12acadbd6a2b5_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cef1580d9976ff03056d446f320d26a001bce6574f77bf4165cadef8e13c1846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef1580d9976ff03056d446f320d26a001bce6574f77bf4165cadef8e13c1846->enter($__internal_cef1580d9976ff03056d446f320d26a001bce6574f77bf4165cadef8e13c1846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_176d1269ab5111527522e294beb07c7623588888e043ee82fd95b57d85f63278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176d1269ab5111527522e294beb07c7623588888e043ee82fd95b57d85f63278->enter($__internal_176d1269ab5111527522e294beb07c7623588888e043ee82fd95b57d85f63278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_176d1269ab5111527522e294beb07c7623588888e043ee82fd95b57d85f63278->leave($__internal_176d1269ab5111527522e294beb07c7623588888e043ee82fd95b57d85f63278_prof);

        
        $__internal_cef1580d9976ff03056d446f320d26a001bce6574f77bf4165cadef8e13c1846->leave($__internal_cef1580d9976ff03056d446f320d26a001bce6574f77bf4165cadef8e13c1846_prof);

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
        return array (  131 => 18,  114 => 17,  97 => 8,  79 => 7,  67 => 19,  64 => 18,  62 => 17,  54 => 12,  50 => 11,  46 => 10,  43 => 9,  41 => 8,  37 => 7,  29 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/grid.css') }}\" />

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
