<?php

namespace AntiMattr\GoogleBundle\Twig;

class TwigVariableExtension extends \Twig_Extension
{

	public function getFilters()
	{
		return [
			new \Twig_SimpleFilter('twig_variable', [$this, 'twigVariableFilter'], [
				'needs_environment' => true,
				'needs_context' => true,
			]),
		];
	}

	public function twigVariableFilter(\Twig_Environment $env, $context, $string)
	{
		$clonedEnv = clone $env;
		$loader = new \Twig_Loader_String();
		$clonedEnv->setLoader($loader);

		return $clonedEnv->loadTemplate("{{ $string }}")->render($context);
	}

	public function getName()
	{
		return 'eval_extension';
	}
}
