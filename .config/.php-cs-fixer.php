<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__)
    ->notPath(['.env.php']) // files
    ->exclude(['translations']); // dirs

$config = new Config();

return $config
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules([
        '@PSR2'                                      => true,
        '@PHP71Migration'                            => true,
        '@PHPUnit75Migration:risky'                  => true,
        '@PhpCsFixer'                                => true,
        '@PhpCsFixer:risky'                          => true,
        'single_quote'                               => true,
        'no_unused_imports'                          => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'self_accessor'                              => true,
        'fully_qualified_strict_types'               => true,
        'no_blank_lines_after_class_opening'         => true,
        'no_leading_namespace_whitespace'            => true,
        'blank_line_after_namespace'                 => true,
        'combine_consecutive_issets'                 => true,
        'combine_consecutive_unsets'                 => true,
        'include'                                    => true,
        'no_trailing_comma_in_singleline'            => true,
        'explicit_string_variable'                   => true,
        'simple_to_complex_string_variable'          => true,
        'escape_implicit_backslashes'                => false,
        'no_superfluous_phpdoc_tags'                 => true,
        'native_function_invocation'                 => true,
        'native_constant_invocation'                 => [
            'exclude' => [
                'null',
                'false',
                'true',
                'CONNECTION_TIMEOUT',
            ],
        ],
        'no_alternative_syntax'                    => false,
        'phpdoc_no_alias_tag'                      => false,
        'new_with_parentheses'                     => false,
        'phpdoc_no_package'                        => false,
        'phpdoc_summary'                           => false,
        'strict_comparison'                        => false,
        'strict_param'                             => false,
        'phpdoc_to_comment'                        => false,
        'php_unit_internal_class'                  => false,
        'php_unit_test_class_requires_covers'      => false,
        'mb_str_functions'                         => true,
        'array_push'                               => true,
        'combine_nested_dirname'                   => true,
        'dir_constant'                             => true,
        'modernize_types_casting'                  => true,
        'return_assignment'                        => true,
        'set_type_to_cast'                         => true,
        'single_line_after_imports'                => true,
        'single_line_comment_style'                => false,
        'single_line_empty_body'                   => true,
        'assign_null_coalescing_to_coalesce_equal' => true,
        'use_arrow_functions'                      => true,
        'class_attributes_separation'              => [
            'elements' => [
                'const'        => 'one',
                'method'       => 'one',
                'property'     => 'one',
                'trait_import' => 'none',
                'case'         => 'none',
            ],
        ],
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'comment_to_phpdoc' => [
            'ignored_tags' => [
                'todo',
            ],
        ],
        'operator_linebreak' => [
            'position'      => 'beginning',
            'only_booleans' => true,
        ],
        'phpdoc_tag_type' => [
            'tags' => [
                'inheritdoc' => 'annotation',
            ],
        ],
        'yoda_style' => [
            'equal'            => false,
            'identical'        => false,
            'less_and_greater' => false,
        ],
        'global_namespace_import' => [
            'import_classes'   => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'binary_operator_spaces' => [
            'default' => 'align_single_space_minimal',
        ],
        'fopen_flags' => [
            'b_mode' => true,
        ],
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
            'imports_order'  => [
                'class',
                'const',
                'function',
            ],
        ],
        'concat_space' => [
            'spacing' => 'one',
        ],
        'blank_line_before_statement' => [
            'statements' => [
                'break',
                'case',
                'continue',
                'declare',
                'default',
                'do',
                'exit',
                'for',
                'foreach',
                'goto',
                'if',
                'include',
                'include_once',
                'phpdoc',
                'require',
                'require_once',
                'return',
                'switch',
                'throw',
                'try',
                'while',
                'yield',
                'yield_from',
            ],
        ],
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
    ]);
