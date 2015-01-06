<?php

/* tag.twig */
class __TwigTemplate_bd51b1c5e1452af6fef29e40d09349d16905d4e7fd5c4090b7971e769f0c5d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'frm_radio' => array($this, 'block_frm_radio'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 8
        $this->displayBlock('frm_radio', $context, $blocks);
        // line 17
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
    public function block_frm_radio($context, array $blocks = array())
    {
        // line 9
        echo "
<form action=\"\" method=\"post\">
TAGS MAKER: <input type=\"text\" placeholder=\"new tag name\" name=\"tag_name\">
    <input type=\"submit\" value=\"ADD TAG\" >
</form>


    ";
    }

    public function getTemplateName()
    {
        return "tag.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  42 => 8,  33 => 2,  30 => 1,  25 => 17,  23 => 8,  21 => 1,);
    }
}
