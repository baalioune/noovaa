<?php
 namespace MailPoetVendor\Doctrine\ORM\Mapping; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform; class AnsiQuoteStrategy implements \MailPoetVendor\Doctrine\ORM\Mapping\QuoteStrategy { public function getColumnName($fieldName, \MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata $class, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $class->fieldMappings[$fieldName]['columnName']; } public function getTableName(\MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata $class, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $class->table['name']; } public function getSequenceName(array $definition, \MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata $class, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $definition['sequenceName']; } public function getJoinColumnName(array $joinColumn, \MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata $class, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $joinColumn['name']; } public function getReferencedJoinColumnName(array $joinColumn, \MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata $class, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $joinColumn['referencedColumnName']; } public function getJoinTableName(array $association, \MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata $class, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $association['joinTable']['name']; } public function getIdentifierColumnNames(\MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata $class, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $class->identifier; } public function getColumnAlias($columnName, $counter, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform, ?\MailPoetVendor\Doctrine\ORM\Mapping\ClassMetadata $class = null) { return $platform->getSQLResultCasing($columnName . '_' . $counter); } } 