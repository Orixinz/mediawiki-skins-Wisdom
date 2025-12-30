<?php

declare( strict_types=1 );

namespace MediaWiki\Skins\Wisdom\Components;

/**
 * CitizenComponentKeyboardHint component
 */
class CitizenComponentKeyboardHint implements CitizenComponent {

	public function __construct(
		private readonly string $label = '',
		private readonly string $key = ''
	) {
	}

	public function getTemplateData(): array {
		return [
			'label' => $this->label,
			'key' => $this->key,
		];
	}
}
