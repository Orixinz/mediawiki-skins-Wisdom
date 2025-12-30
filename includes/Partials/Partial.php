<?php

declare( strict_types=1 );

namespace MediaWiki\Skins\Wisdom\Partials;

use MediaWiki\Output\OutputPage;
use MediaWiki\Skins\Wisdom\GetConfigTrait;
use MediaWiki\Skins\Wisdom\SkinWisdom;
use MediaWiki\Title\Title;
use MediaWiki\User\User;

/**
 * The base class for all skin partials
 * TODO: Use SkinComponentRegistryContext
 */
abstract class Partial {

	use GetConfigTrait;

	protected OutputPage $out;

	protected ?Title $title;

	protected User $user;

	public function __construct(
		protected readonly SkinWisdom $skin
	) {
		$this->out = $skin->getOutput();
		$this->title = $this->out->getTitle();
		$this->user = $this->out->getUser();
	}
}
