<?php
/**
 * Formatiert zwei Strings so, das sie in ein rex_form passen.
 * @param type $label Label
 * @param type $content Inhalt
 */
function raw_field($label, $content) {
	$formated_content = '<dl class="rex-form-group form-group">';
	$formated_content .= '<dt><label class="control-label" for="rex-375-group-gruppen-default-sender-name">'. $label .'</label></dt>';
	$formated_content .= '<dd style="padding-top: 7px;">'. $content .'</dd>';
	$formated_content .= '</dl>';

	return $formated_content;
}

echo rex_view::title($this->i18n('multinewsletter_addon_short_title'));

if (rex_config::get('d2u_helper', 'article_id_privacy_policy', 0) == 0 || rex_config::get('d2u_helper', 'article_id_impress', 0) == 0) {
	print rex_view::warning(rex_i18n::msg('d2u_helper_gdpr_warning'));
}

rex_be_controller::includeCurrentPageSubPath();