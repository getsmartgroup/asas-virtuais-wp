<?php
namespace AsasVirtuaisWP\WooCommerce\Taxonomy;

use \AsasVirtuaisWP\Taxonomy\AbstractTerm;

class ProductTag extends AbstractTerm {

    final static function get_taxonomy() {
        return 'product_tag';
    }

}