<?php
/**
*
* @package phpBB Extension - Timezone Clock
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\timezoneclock\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
    /** @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\user $user
	*/

	public function __construct(\phpbb\user $user)
	{
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.index_modify_page_title'   => 'main',
		);
	}

	public function main($event)
	{
		// add lang file
		$this->user->add_lang_ext('hifikabin/timezoneclock', 'common');
		
	}

}
