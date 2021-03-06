<?php

namespace Dalee\CodeStyle;

use PhpCsFixer\Config as BaseConfig;

/**
 * Class Config.
 *
 * @package Dalee\CodeStyle
 */
class Config extends BaseConfig {

	/**
	 * @inheritdoc
	 */
	public function __construct($name = 'default') {
		parent::__construct($name);

		$this->setRiskyAllowed(false);
	}

	/**
	 * @inheritdoc
	 */
	public function getRules() {
		return [
			'blank_line_after_namespace' => true,
			'blank_line_after_opening_tag' => true,
			'combine_consecutive_unsets' => true,
			'line_ending' => true,
			'no_closing_tag' => true,
			'no_empty_comment' => true,
			'no_empty_phpdoc' => true,
			'no_empty_statement' => true,
			'no_leading_import_slash' => true,
			'linebreak_after_opening_tag' => true,
			'combine_consecutive_issets' => true,
			'no_trailing_whitespace' => true,
			'no_trailing_whitespace_in_comment' => true,
			'no_unused_imports' => true,
			'no_useless_else' => true,
			'no_useless_return' => true,
			'encoding' => true,
			'full_opening_tag' => true,
			'yoda_style' => false,
			'lowercase_constants' => true,
			'lowercase_keywords' => true,
			'new_with_braces' => true,
			'no_leading_namespace_whitespace' => true,
			'no_multiline_whitespace_before_semicolons' => true,
			'no_short_bool_cast' => true,
			'no_singleline_whitespace_before_semicolons' => true,
			'no_spaces_after_function_name' => true,
			'no_unneeded_final_method' => true,
			'no_whitespace_in_blank_line' => true,
			'semicolon_after_instruction' => true,
			'single_blank_line_at_eof' => true,
			'single_blank_line_before_namespace' => true,
			'single_line_after_imports' => true,
			'standardize_not_equals' => true,
			'switch_case_space' => true,
			'array_syntax' => [
				'syntax' => 'short'
			]
		];
	}

}
