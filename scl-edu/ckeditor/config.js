/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	config.uiColor = '#a66d26';
	config.extraPlugins='serverpreview';
	config.serverPreview_Url='preview.php';
	config.font_names='����/����;����/����;����/����_GB2312;����/����_GB2312;����/����;��Բ/��Բ;΢���ź�/΢���ź�;'+ config.font_names;
};
