<?php
 namespace MailPoetVendor\Doctrine\ORM\Cache; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\ORM\Cache; class QueryCacheKey extends \MailPoetVendor\Doctrine\ORM\Cache\CacheKey { public $lifetime; public $cacheMode; public $timestampKey; public function __construct($hash, $lifetime = 0, $cacheMode = \MailPoetVendor\Doctrine\ORM\Cache::MODE_NORMAL, ?\MailPoetVendor\Doctrine\ORM\Cache\TimestampCacheKey $timestampKey = null) { $this->hash = $hash; $this->lifetime = $lifetime; $this->cacheMode = $cacheMode; $this->timestampKey = $timestampKey; } } 