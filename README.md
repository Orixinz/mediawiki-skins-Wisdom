## Wisdom
A fork of Citizen but with different navigation.

### Installation
Currently not recommended to install in production wikis, wait for some sort of release first.

1. [https://github.com/Orixinz/mediawiki-skins-Wisdom/archive/main.zip](Download) the skin and place the files in a *Wisdom* directory in your *Skins* folder.
2. Add `wfLoadSkin( 'Wisdom' );` to [https://www.mediawiki.org/wiki/Manual:LocalSettings.php](LocalSettings.php).
3. You're done!

### Configuration
See: https://www.mediawiki.org/wiki/Skin:Citizen#Configuration
*Wisdom replaces `Citizen` in configuration flags with `Wisdom`.*

#### Mobile Navigation
**Wisdom** uses a customisable icon-based navigation bar on mobile. You can edit this in `MediaWiki:Mobilenav`.

**Example**
Mobile navigation currently uses an image *url* for it's icon. This may change in the future.
```
* www.example.com/image.png|Page Name
* www.example.com/anotherimg.png|Another Page
```
