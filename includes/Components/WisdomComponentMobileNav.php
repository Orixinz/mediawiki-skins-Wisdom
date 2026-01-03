<?php

declare( strict_types=1 );

namespace MediaWiki\Skins\Wisdom\Components;

use MediaWiki\Skins\Wisdom\Components\WisdomComponentMobileNavItem;
use MediaWiki\Parser\Sanitizer;
use MessageLocalizer;

/**
 * WisdomComponentFooter component
 */
class WisdomComponentMobileNav implements WisdomComponent {

	public function __construct(
		private readonly MessageLocalizer $localizer,
	) {
	}

	public function getTemplateData(): array {
		$localizer = $this->localizer;
		$listItems = [];

		$message = $this->localizer->msg( 'Mobilenav' )->text();
		$lines = explode('*', $message);

		foreach ($lines as $line) {
			if (strlen($line) == 0) {
				continue;
			}

			# properties[0] is image and properties [1] is link
			$properties = explode('|', trim($message, '* '), 2);

			$link = Sanitizer::escapeIdForAttribute( $properties[1] );
			$img = Sanitizer::escapeIdForAttribute( $properties[0] );

			$listItem = new WisdomComponentMobileNavItem("mbnav-$link", $img, $link);
			$listItems[] = $listItem->getTemplateData();
		}

		return [
			'array-list-items' => $listItems
		];
	}
}
