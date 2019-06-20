<?php
/**
 *  @link https://thoulah.mr42.me/fontawesome
 *  @license https://github.com/Thoulah/yii2-fontawesome-inline/blob/master/LICENSE
 */

namespace thoulah\fontawesome\cs;

/**
 * Basic rules.
 */
class Config extends \PhpCsFixer\Config {
	/**
	 * {@inheritdoc}
	 */
	public function __construct($name = 'mr42-cs-config') {
		parent::__construct($name);

		$header = <<<'HEADER'
 @link https://thoulah.mr42.me/fontawesome
 @license https://github.com/Thoulah/yii2-fontawesome-inline/blob/master/LICENSE
HEADER;

		$this->setRiskyAllowed(true);

		$this->setRules([
			'@PSR2' => true,
			'array_syntax' => [
				'syntax' => 'short',
			],
			'binary_operator_spaces' => [
				'align_double_arrow' => false,
				'align_equals' => false,
			],
			'blank_line_after_opening_tag' => true,
			'braces' => [
				'allow_single_line_closure' => true,
				'position_after_functions_and_oop_constructs' => 'same',
			],
			'cast_spaces' => true,
			'concat_space' => [
				'spacing' => 'one',
			],
			'dir_constant' => true,
			'ereg_to_preg' => true,
			'function_typehint_space' => true,
			'hash_to_slash_comment' => true,
			'include' => true,
			'header_comment' => [
				'header' => $header,
				'commentType' => 'PHPDoc',
				'separate' => 'bottom',
			],
			'heredoc_to_nowdoc' => true,
			'is_null' => [
				'use_yoda_style' => false,
			],
			'linebreak_after_opening_tag' => true,
			'lowercase_cast' => true,
			'magic_constant_casing' => true,
			'mb_str_functions' => true,
			'method_separation' => true,
			'modernize_types_casting' => true,
			'native_function_casing' => true,
			'new_with_braces' => true,
			'no_alias_functions' => true,
			'no_alternative_syntax' => true,
			'no_blank_lines_after_class_opening' => true,
			'no_blank_lines_after_phpdoc' => true,
			'no_empty_comment' => true,
			'no_empty_phpdoc' => true,
			'no_empty_statement' => true,
			'no_extra_consecutive_blank_lines' => [
				'tokens' => [
					'break',
					'continue',
					'extra',
					'return',
					'throw',
					'use',
					'use_trait',
					'curly_brace_block',
					'parenthesis_brace_block',
					'square_brace_block',
				],
			],
			'no_leading_import_slash' => true,
			'no_leading_namespace_whitespace' => true,
			'no_mixed_echo_print' => true,
			'no_multiline_whitespace_around_double_arrow' => true,
			'no_multiline_whitespace_before_semicolons' => true,
			'no_php4_constructor' => true,
			'no_short_bool_cast' => true,
			'no_singleline_whitespace_before_semicolons' => true,
			'no_spaces_around_offset' => true,
			'no_trailing_comma_in_list_call' => true,
			'no_trailing_comma_in_singleline_array' => true,
			'no_unneeded_control_parentheses' => true,
			'no_unused_imports' => true,
			'no_useless_else' => true,
			'no_useless_return' => true,
			'no_whitespace_before_comma_in_array' => true,
			'no_whitespace_in_blank_line' => true,
			'non_printable_character' => true,
			'normalize_index_brace' => true,
			'object_operator_without_whitespace' => true,
			'ordered_class_elements' => [
				'order' => [
					'use_trait',
					'constant_private',
					'constant_protected',
					'constant_public',
					'property_private',
					'property_protected',
					'property_public',
					'construct',
					'destruct',
					'magic',
				],
			],
			'ordered_imports' => [
				'sortAlgorithm' => 'alpha',
				'importsOrder' => [
					'const',
					'function',
					'class',
				],
			],
			'php_unit_construct' => true,
			'php_unit_dedicate_assert' => true,
			'php_unit_fqcn_annotation' => true,
			'php_unit_strict' => true,
			'phpdoc_add_missing_param_annotation' => true,
			'phpdoc_indent' => true,
			'phpdoc_inline_tag' => true,
			'phpdoc_no_access' => true,
			'phpdoc_no_empty_return' => true,
			'phpdoc_no_package' => true,
			'phpdoc_no_useless_inheritdoc' => true,
			'phpdoc_order' => true,
			'phpdoc_scalar' => true,
			'phpdoc_single_line_var_spacing' => true,
			'phpdoc_summary' => true,
			'phpdoc_to_comment' => true,
			'phpdoc_trim' => true,
			'phpdoc_types' => true,
			'phpdoc_var_without_name' => true,
			'protected_to_private' => true,
			'psr4' => true,
			'self_accessor' => true,
			'short_scalar_cast' => true,
			'single_blank_line_before_namespace' => true,
			'single_import_per_statement' => false,
			'single_quote' => true,
			'standardize_not_equals' => true,
			'ternary_operator_spaces' => true,
			'trailing_comma_in_multiline_array' => true,
			'trim_array_spaces' => true,
			'unary_operator_spaces' => true,
			'void_return' => true,
			'whitespace_after_comma_in_array' => true,
		])
		->setIndent("\t");
	}
}