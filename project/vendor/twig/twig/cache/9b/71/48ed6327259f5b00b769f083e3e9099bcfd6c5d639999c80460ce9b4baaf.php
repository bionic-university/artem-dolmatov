<?php

/* main.twig */
class __TwigTemplate_9b7148ed6327259f5b00b769f083e3e9099bcfd6c5d639999c80460ce9b4baaf extends Twig_Template
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
        // line 25
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
        // line 11
        $this->displayBlock('form_radio', $context, $blocks);
        // line 21
        echo "
</body>
</html>
";
    }

    // line 11
    public function block_form_radio($context, array $blocks = array())
    {
        // line 12
        echo "
        <form action=\"\" method=\"post\">

            <input type=\"submit\" name=\"addnote\" value=\"add note\">

        <input type=\"submit\" name=\"addbook\" value=\"add book\">
        <input type=\"submit\" name=\"addtag\" value=\"add tag\"></form>

    ";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  59 => 11,  52 => 21,  50 => 11,  46 => 9,  43 => 8,  34 => 2,  31 => 1,  26 => 25,  24 => 8,  22 => 1,);
    }
}
