<?php

namespace Scalr\Service\Azure\Services\Compute\DataType;

use Scalr\Service\Azure\DataType\AbstractListDataType;

/**
 * AvailabilitySetList
 *
 * @author    Vlad Dobrovolskiy   <v.dobrovolskiy@scalr.com>
 * @since     5.6.8
 *
 */
class AvailabilitySetList extends AbstractListDataType
{
    /**
     * {@inheritdoc}
     * @see Scalr\Service\Azure\DataType.AbstractListDataType::getClass()
     */
    public function getClass()
    {
        return __NAMESPACE__ . '\\AvailabilitySetData';
    }

}