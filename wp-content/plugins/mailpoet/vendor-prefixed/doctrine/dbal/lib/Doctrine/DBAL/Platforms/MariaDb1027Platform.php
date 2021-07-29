<?php
 namespace MailPoetVendor\Doctrine\DBAL\Platforms; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\Types\Types; final class MariaDb1027Platform extends \MailPoetVendor\Doctrine\DBAL\Platforms\MySqlPlatform { public function getJsonTypeDeclarationSQL(array $column) : string { return 'LONGTEXT'; } protected function getReservedKeywordsClass() : string { return \MailPoetVendor\Doctrine\DBAL\Platforms\Keywords\MariaDb102Keywords::class; } protected function initializeDoctrineTypeMappings() : void { parent::initializeDoctrineTypeMappings(); $this->doctrineTypeMapping['json'] = \MailPoetVendor\Doctrine\DBAL\Types\Types::JSON; } } 