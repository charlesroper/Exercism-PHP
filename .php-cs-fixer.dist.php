<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
	->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config
	->setRules([
		'@PER' => true,
		'@PHP80Migration:risky' => true,
		'@PhpCsFixer' => true,
		'array_indentation' => true,
		'array_syntax' => ['syntax' => 'short'],
		'concat_space' => ['spacing' => 'one'],
		'multiline_whitespace_before_semicolons' => true,
		'strict_param' => true,
	])
	->setRiskyAllowed(true)
	->setIndent("\t")
	->setFinder($finder);
