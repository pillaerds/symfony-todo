<?php

/* default/index.html.twig */
class __TwigTemplate_6d4141bc49805522f193aa4e0b709ffc5b33939cfd0b346160ebdd04f69c1508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Homepage.
    <h2>Todo details</h2>
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Todo"]) ? $context["Todo"] : $this->getContext($context, "Todo")), "name", array()), "html", null, true);
        echo "<br/>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Todo"]) ? $context["Todo"] : $this->getContext($context, "Todo")), "date", array()), "html", null, true);
        echo "
";
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
        return array (  47 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
