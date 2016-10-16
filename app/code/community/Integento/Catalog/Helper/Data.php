<?php
/**
 * This file is part of Integento_Catalog for Magento.
 *
 * @license MIT
 * @author Darklg <darklg.blog@gmail.com> <@Darklg>
 * @category Integento
 * @package Integento_Catalog
 * @copyright Copyright (c) 2016 Integento (http://github.com/InteGento)
 */
class Integento_Catalog_Helper_Data extends Mage_Core_Helper_Abstract {
    /**
     * Get HTML for Product item
     * @param  object $_product     Magento Product item
     * @param  string $block_type   Block type
     * @param  string $template     Custom template
     * @return string               HTML to display
     */
    public function getProductHTML($_product, $block_type = 'catalog/product_list', $template = 'integento_catalog/product-item.phtml') {
        return $this->getLayout()
            ->createBlock($block_type)
            ->setProduct($_product)
            ->setTemplate($template)
            ->toHtml();
    }
}
