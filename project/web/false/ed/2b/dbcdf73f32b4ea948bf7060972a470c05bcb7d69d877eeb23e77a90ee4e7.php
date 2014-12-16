<?php

/* login.twig */
class __TwigTemplate_ed2bdbcdf73f32b4ea948bf7060972a470c05bcb7d69d877eeb23e77a90ee4e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'form_radio' => array($this, 'block_form_radio'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "
";
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">
</head>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<body>
    ";
        // line 10
        $this->displayBlock('form_radio', $context, $blocks);
        // line 19
        echo "
</body>
</html>
";
    }

    // line 10
    public function block_form_radio($context, array $blocks = array())
    {
        // line 11
        echo "        <form action=\"\" method=\"post\">
            <input type=\"text\" name=\"login\">
            <input type=\"password\" name=\"pwd\">
            <input type=\"submit\">
        </form>
        <form action=\"\" method=\"post\"><input type=\"submit\" name=\"logout\" value=\"logout\"></form>

    ";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  58 => 10,  51 => 19,  49 => 10,  46 => 9,  43 => 8,  34 => 2,  31 => 1,  26 => 23,  24 => 8,  22 => 1,);
    }
}
