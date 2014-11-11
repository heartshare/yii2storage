<?php
namespace kak\storage;

class UploadAssets extends \yii\web\AssetBundle
{
	public $sourcePath = '@kak/storage/assets';

	public $js = [
		'fileupload/vendor/jquery.ui.widget.js',
		'fileupload/jquery.iframe-transport.js',
		'fileupload/jquery.fileupload.js',
		'fileupload/jquery.fileupload-process.js',
		'fileupload/jquery.fileupload-image.js',
		'fileupload/jquery.fileupload-audio.js',
		'fileupload/jquery.fileupload-video.js',
		'fileupload/jquery.fileupload-validate.js',
		'fileupload/jquery.fileupload-ui.js',
	];
	public $css = [
		'storage.css',
	];

	public $depends = [
		'yii\jui\CoreAsset',
	];
}