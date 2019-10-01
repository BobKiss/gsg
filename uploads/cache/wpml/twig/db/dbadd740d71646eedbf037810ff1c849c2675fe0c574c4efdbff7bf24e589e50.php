<?php

/* /setup/footer.twig */
class __TwigTemplate_e4096e22648c540d72b09a9050055a3d79b006a60d297fde1bd38b05476b735f extends Twig_Template
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
        if (($context["has_handler"] ?? null)) {
            // line 2
            echo "    </form>
";
        }
        // line 4
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/setup/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/setup/footer.twig", "X:\\Work\\OSPanel\\domains\\gsg.coelix.live\\wp-content\\plugins\\woocommerce-multilingual\\templates\\setup\\footer.twig");
    }
}
