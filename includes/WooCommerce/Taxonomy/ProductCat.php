<?php
namespace AsasVirtuaisWP\V2_0_4\WooCommerce\Taxonomy;

use AsasVirtuaisWP\V2_0_4\Taxonomy\AbstractTerm;

class ProductCat extends AbstractTerm {

    final static function get_taxonomy() {
        return 'product_cat';
    }

}