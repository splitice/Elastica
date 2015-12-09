<?php

namespace Elastica\Filter;

/**
 * geo_shape filter
 *
 * Filter pre-indexed shape definitions
 *
 * @category Xodoa
 * @package Elastica
 * @author Bennie Krijger <benniekrijger@gmail.com>
 * @link http://www.elasticsearch.org/guide/reference/query-dsl/geo-shape-filter/
 */
abstract class AbstractGeoShape extends AbstractFilter
{
    const RELATION_INTERSECT    = 'intersects';
    const RELATION_DISJOINT     = 'disjoint';
    const RELATION_CONTAINS     = 'within';

    /**
     * @var string $_path
     *
     * elasticsearch path of the pre-indexed shape
     */
    protected $_path;

    /**
     * @var string $_relation
     *
     * the relation of the 2 shaped: intersects, disjoint, within
     */
    protected $_relation = self::RELATION_INTERSECT;

    /**
     * @param  string $relation
     * @return $this
     */
    public function setRelation($relation)
    {
        $this->_relation = $relation;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelation()
    {
        return $this->_relation;
    }
}
