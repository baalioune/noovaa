<?php
 namespace MailPoetVendor\Doctrine\ORM\Query\AST\Functions; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\ORM\Query\Lexer; use MailPoetVendor\Doctrine\ORM\Query\Parser; use MailPoetVendor\Doctrine\ORM\Query\SqlWalker; class CurrentDateFunction extends \MailPoetVendor\Doctrine\ORM\Query\AST\Functions\FunctionNode { public function getSql(\MailPoetVendor\Doctrine\ORM\Query\SqlWalker $sqlWalker) { return $sqlWalker->getConnection()->getDatabasePlatform()->getCurrentDateSQL(); } public function parse(\MailPoetVendor\Doctrine\ORM\Query\Parser $parser) { $parser->match(\MailPoetVendor\Doctrine\ORM\Query\Lexer::T_IDENTIFIER); $parser->match(\MailPoetVendor\Doctrine\ORM\Query\Lexer::T_OPEN_PARENTHESIS); $parser->match(\MailPoetVendor\Doctrine\ORM\Query\Lexer::T_CLOSE_PARENTHESIS); } } 