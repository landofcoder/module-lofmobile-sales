<?php

namespace Lofmobile\Sales\Api;

/**
 * Interface InvoiceRepositoryInterface
 * @package Lofmobile\Sales\Api
 * @api
 */
interface InvoiceRepositoryInterface
{
    /**
     * @param int $customerId
     * @param int $orderId
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Sales\Api\Data\InvoiceSearchResultInterface Invoice search result interface.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList($customerId, $orderId, \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
