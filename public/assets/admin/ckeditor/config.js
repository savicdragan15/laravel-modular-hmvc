/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	 config.language = 'en';
	// config.uiColor = '#AADC6E';
	//config.skin = 'office2013';

	config.extraPlugins = 'videoembed,embedbase,embed,notification,notificationaggregator,image2,lightbox';
	config.removeDialogTabs = 'link:upload;image2:Upload';
	config.extraAllowedContent = 'a[data-lightbox,data-title,data-lightbox-saved]';
	config.embed_provider = '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}';

};
