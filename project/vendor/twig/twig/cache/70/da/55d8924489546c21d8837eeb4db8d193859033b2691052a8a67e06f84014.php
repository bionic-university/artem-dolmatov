<?php

/* note.twig */
class __TwigTemplate_70da55d8924489546c21d8837eeb4db8d193859033b2691052a8a67e06f84014 extends Twig_Template
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
        // line 50
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
        // line 47
        echo "</body>
</html>
";
    }

    // line 11
    public function block_form_radio($context, array $blocks = array())
    {
        // line 12
        echo "

        ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["go"]) ? $context["go"] : null), "html", null, true);
        echo "
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["the"]) ? $context["the"] : null), "kkk", array()), "username", array()), "html", null, true);
        echo "
        <form action=\"\" method=\"post\" >
    <select name=\"tag\" onchange=\"this.form.submit()\">
        <option selected disabled>attach tag</option>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 20
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
            echo "</option>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <input type=\"submit\" value=\"Attach\">
        </form>
</select>
        SELECTED TAGS:
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selected"]) ? $context["selected"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 28
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        <form action=\"\" method=\"post\">
        <input type=\"submit\" name=\"clearPreviousTag\" value=\"<<<\">
        </form>
        <form action=\"\" method=\"post\">
            <input type=\"submit\" name=\"clearTags\" value=\"Clear\">
        </form>


        <form action=\"\" method=\"post\">
        <textarea name=\"body\"></textarea>
            <input type=\"submit\" value=\"add note\">

            <input type=\"text\" value=\"tag\">
        <input type=\"submit\" value=\"add tag\">
        </form>

    ";
    }

    public function getTemplateName()
    {
        return "note.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  102 => 28,  98 => 27,  92 => 23,  80 => 20,  76 => 19,  69 => 15,  65 => 14,  61 => 12,  58 => 11,  52 => 47,  50 => 11,  46 => 9,  43 => 8,  34 => 2,  31 => 1,  26 => 50,  24 => 8,  22 => 1,);
    }
}
