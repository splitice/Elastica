<?php

namespace Elastica\Filter;

use Elastica\Exception\InvalidException;
use Elastica\Param;

/**
 * Abstract filter object. Should be extended by all filter types
 *
 * @category Xodoa
 * @package Elastica
 * @author Nicolas Ruflin <spam@ruflin.com>
 * @link http://www.elasticsearch.org/guide/reference/query-dsl/
 */
abstract class AbstractFilter extends Param
{
    /**
     * Sets the filter cache
     *
     * @param  boolean $cached Cached
     * @return $this
     */
    public function setCached($cached = true)
    {
        return $this->setParam('_cache', (bool) $cached);
    }

    /**
     * Sets the filter cache key
     *
     * @throws \Elastica\Exception\InvalidException If given key is empty
     *
     * @param  string $cacheKey Cache key
     * @return $this
     */
    public function setCacheKey($cacheKey)
    {
        $cacheKey = (string) $cacheKey;

        if (empty($cacheKey)) {
            throw new InvalidException('Invalid parameter. Has to be a non empty string');
        }

        return $this->setParam('_cache_key', (string) $cacheKey);
    }

    /**
     * Sets the filter name
     *
     * @param  string $name Name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setParam('_name', $name);
    }
}
