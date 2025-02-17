<?php
/**
 * Copyright 2021 Adobe
 * All Rights Reserved.
 */
namespace Magento2\Sniffs\Less;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

/**
 * Class CombinatorIndentationSniff
 *
 * Ensure that spaces are used before and after combinators
 *
 * @link https://devdocs.magento.com/guides/v2.4/coding-standards/code-standard-less.html#combinator-indents
 */
class CombinatorIndentationSniff implements Sniff
{
    /**
     * A list of tokenizers this sniff supports.
     *
     * @var array
     */
    public $supportedTokenizers = [TokenizerSymbolsInterface::TOKENIZER_CSS];

    /**
     * @inheritdoc
     */
    public function register()
    {
        return [T_PLUS];
    }

    /**
     * @inheritdoc
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        $prevPtr = $stackPtr - 1;
        $nextPtr = $stackPtr + 1;

        if (($tokens[$prevPtr]['code'] !== T_WHITESPACE) || ($tokens[$nextPtr]['code'] !== T_WHITESPACE)) {
            $phpcsFile->addError('Spaces should be before and after combinators', $stackPtr, 'NoSpaces');
        }
    }
}
