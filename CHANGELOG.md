# ImageOptimize Changelog

## 1.2.6 - 2017.10.16
### Changed
* Moved the default variants to the `config.php` and Settings model, so they can be overriden

### Added
* Added the variant setting **Enforce Aspect Ratio** to allow for images with no fixed aspect ratio

## 1.2.5 - 2017.10.11
### Added
* Added the ability to automatically set the placeholder color to the image's dominant color
* Added the ability to extract the 5 dominant colors from an image

## 1.2.4 - 2017.10.10
### Added
* Added automatic generation of Instagram-style low resolution placeholder images for lazing loading

## 1.2.3 - 2017.09.16
### Added
* Added support for 2x and 3x retina images
* Added a `.src()` method to get the default responsive variant

### Changed
* Updated the README.md to be more descriptive

## 1.2.2 - 2017.09.11
### Changed
* Responsive Image Variants now default to `jpg` as a file format, for client-proofing purposes
* Fixed an issue where re-arranging to adding/deleting Responsive Image Variants could cause issues
* Fixed an issue with non-manipulatable images like `PDF`

## 1.2.1 - 2017.09.10
### Changed
* Fixed an issue that could leave stale image variants around
* Ensure that the optimized image variants are re-created if the image is edited
* Added logging to show the savings for image variants
* Fixed the way the Settings page is rendered
* Updated `README.md`

## 1.2.0 - 2017.09.08
### Added
* Added `OptimzedImages` Field
* Updated `README.md`

## 1.1.0 - 2017.08.07
### Added
* Added support for automatic `webp` image variant creation

## 1.0.10 - 2017.08.06
### Changed
* Fixed support for the `mozjpeg` image processor

## 1.0.9 - 2017.07.15
### Changed
* Craft 3 beta 20 compatibility

## 1.0.8 - 2017.04.20
### Changed
* Fixed the packagist.org package name to coincide with the plugin renaming
* Added debug `trace` logging in the event handler
* Updated `README.md`

## 1.0.7 - 2017.04.10
### Changed
* Renamed the plugin from `ImageOptim` to `ImageOptimize`
* Added `.webp` support

## 1.0.6 - 2017.04.08
### Changed
* Added `createSettingsModel()` to the main plugin class

## 1.0.5 - 2017.03.24
### Changed
* `hasSettings` -> `hasCpSettings` for Craft 3 beta 8 compatibility
* Added Craft 3 beta 8 compatible settings
* Modified config service calls for Craft 3 beta 8

## 1.0.4 - 2017.03.12
### Added
- Added code inspection typehinting for the plugin & services

### Changed
- Removed unused `resources/img`

## 1.0.3 - 2017.03.12
### Added
- Added support for `gif` images via `gifsicle`
- Added `craft/cms` as a composer dependency

### Changed
- Code refactor/cleanup

## 1.0.2 - 2017.03.11
### Added
- Added logging of the savings for each image optimization if `devMode` is on

## 1.0.1 - 2017.03.11
### Added
- Added `mikehaertl/php-shellcommand` as a dependency in `composer.json`

### Changed
- Updated `README.md` with more information

## 1.0.0 - 2017.03.11
### Added
- Initial release
