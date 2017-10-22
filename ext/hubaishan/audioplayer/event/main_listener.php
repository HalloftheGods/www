<?php
/**
 *
 * Audio Attachment Player. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Hubaishan
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace hubaishan\audioplayer\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Audio Attachment Player Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.parse_attachments_modify_template_data'	=> 'add_audio_attachment',
		);
	}

	/**
	 * 
	 * adds new array key 'S_AUDIO' when file is mp3, m4a or ogg
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function add_audio_attachment($event)
	{
		if (!isset($event['block_array']['S_DENIED']))
		{
			if ($event['attachment']['extension']=='mp3' || $event['attachment']['extension']=='m4a'|| $event['attachment']['extension']=='ogg')
			{
				$block_array=$event['block_array'];
				$block_array += array(
					'S_AUDIO'	=> true,
					'U_VIEW_LINK'	=> $event['download_link'] . '&amp;mode=view', 
					);
				unset($block_array['S_FILE']);
				unset($block_array['S_IMAGE']);
				$event['block_array']=$block_array;
					
			}
		}
	}
}
