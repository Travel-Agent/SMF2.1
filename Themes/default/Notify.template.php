<?php
/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines
 * @copyright 2013 Simple Machines and individual contributors
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.1 Alpha 1
 */

function template_main()
{
	global $context, $settings, $options, $txt, $scripturl;

	echo '
		<div class="cat_bar">
			<h3 class="catbg">
				<img src="', $settings['images_url'], '/email_sm.png" alt="" class="icon" />', $txt['notify'], '
			</h3>
		</div>
		<div class="roundframe centertext">
			<p>', $context['notification_set'] ? $txt['notify_deactivate'] : $txt['notify_request'], '</p>
			<p>
				<strong><a href="', $scripturl, '?action=notify;sa=', $context['notification_set'] ? 'off' : 'on', ';topic=', $context['current_topic'], '.', $context['start'], ';', $context['session_var'], '=', $context['session_id'], '">', $txt['yes'], '</a> - <a href="', $context['topic_href'], '">', $txt['no'], '</a></strong>
			</p>
		</div>';
}

function template_notify_board()
{
	global $context, $settings, $options, $txt, $scripturl;

	echo '
		<div class="cat_bar">
			<h3 class="catbg">
				<img src="', $settings['images_url'], '/email_sm.png" alt="" class="icon" />', $txt['notify'], '
			</h3>
		</div>
		<div class="roundframe centertext">
			<p>', $context['notification_set'] ? $txt['notifyboard_turnoff'] : $txt['notifyboard_turnon'], '</p>
			<p>
				<strong><a href="', $scripturl, '?action=notifyboard;sa=', $context['notification_set'] ? 'off' : 'on', ';board=', $context['current_board'], '.', $context['start'], ';', $context['session_var'], '=', $context['session_id'], '">', $txt['yes'], '</a> - <a href="', $context['board_href'], '">', $txt['no'], '</a></strong>
			</p>
		</div>';
}

?>