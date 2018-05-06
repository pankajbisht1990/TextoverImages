<?php

namespace Amasty\TextoverImages\Plugin\Minicart;

class Image
{
	public function afterGetImage($item, $result)
	{
			$result->setImageUrl("http://localhost/magento2demo/pub/static/version1516622480/frontend/Infortis/ultimo/en_US/images/logo.png");
		return $result;
	}
	public function aroundGetItemData($subject, $proceed, $item)
	{
		$result = $proceed($item);
		
			$result['product_image']['src'] = "http://localhost/magento2demo/pub/static/version1516622480/frontend/Infortis/ultimo/en_US/images/logo.png";
		
		return $result;
	}
}

