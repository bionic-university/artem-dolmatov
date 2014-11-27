<?php

/* index.html */
class __TwigTemplate_74b37c2e8b718f0ac4ea41db1f233aef59427bc9312b3bc0ceed0ff0b1138a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title></title>
</head>
<body>
hello worlds
<div id=\"input\">
    <form method=\"post\" action=\"\" id=\"input_form\">
        <input type=\"text\">
        <input type=\"submit\" value=\"ok\">
    </form>
</div>
<div id=\"output\"></div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
