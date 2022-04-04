<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace JMC\ProductNameSuffix\Plugin\Frontend\Magento\Catalog\Model;

class Product
{

    /**
     * Append suffix to product name
     *
     * @param \Magento\Catalog\Model\Product $subject
     * @param string $name
     * @return string
     */
    public function afterGetName(
        \Magento\Catalog\Model\Product $subject,
        $name
    ) {
        $suffix = $subject->getAttributeText('jmc_suffix');
        if (!empty($suffix)) {
            $name .= $suffix;
        }

        return $name;
    }
}
