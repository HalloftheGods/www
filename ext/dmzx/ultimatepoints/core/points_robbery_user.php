<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2016 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\ultimatepoints\core;

class points_robbery_user
{
	/** @var \dmzx\ultimatepoints\core\functions_points */
	protected $functions_points;

	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \phpbb\notification\manager */
	protected $notification_manager;

	/** @var string */
	protected $php_ext;

	/** @var string phpBB root path */
	protected $root_path;

	/**
	* The database tables
	*
	* @var string
	*/

	protected $points_config_table;

	protected $points_values_table;

	protected $points_log_table;

	/**
	* Constructor
	*
	* @param \phpbb\template\template		 	$template
	* @param \phpbb\user						$user
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\request\request		 		$request
	* @param \phpbb\config\config				$config
	* @param \phpbb\controller\helper		 	$helper
	* @param string								$php_ext
	* @param string								$root_path
	* @param string 							$points_config_table
	* @param string 							$points_values_table
	* @param string								$points_log_table
	*
	*/
	public function __construct(
		\dmzx\ultimatepoints\core\functions_points $functions_points,
		\phpbb\auth\auth $auth,
		\phpbb\template\template $template,
		\phpbb\user $user,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\request\request $request,
		\phpbb\config\config $config,
		\phpbb\controller\helper $helper,
		\phpbb\notification\manager $notification_manager,
		$php_ext,
		$root_path,
		$points_config_table,
		$points_values_table,
		$points_log_table
	)
	{
		$this->functions_points		= $functions_points;
		$this->auth					= $auth;
		$this->template 			= $template;
		$this->user 				= $user;
		$this->db 					= $db;
		$this->request 				= $request;
		$this->config 				= $config;
		$this->helper 				= $helper;
		$this->notification_manager = $notification_manager;
		$this->php_ext 				= $php_ext;
		$this->root_path 			= $root_path;
		$this->points_config_table 	= $points_config_table;
		$this->points_values_table 	= $points_values_table;
		$this->points_log_table		= $points_log_table;
	}

	var $u_action;

	function main($checked_user)
	{
		// Get all values
		$points_values = $this->functions_points->points_all_values();

		// Get all configs
		$points_config = $this->functions_points->points_all_configs();

		// Check, if user is allowed to use the robbery
		if (!$this->auth->acl_get('u_use_robbery'))
		{
			$message = $this->user->lang['NOT_AUTHORISED'] . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
			trigger_error($message);
		}

		// Check, if robbery is enabled
		if (!$points_config['robbery_enable'])
		{
			$message = $this->user->lang['ROBBERY_DISABLED'] . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
			trigger_error($message);
		}

		// Add part to bar
		$this->template->assign_block_vars('navlinks', array(
			'U_VIEW_FORUM'	=> $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user')),
			'FORUM_NAME'	=> sprintf($this->user->lang['POINTS_ROBBERY'], $this->config['points_name']),
		));

		// Read out cash of current user
		$pointsa = $this->user->data['user_points'];

		$adm_points	= $this->request->variable('adm_points', false);
		$u_id 		= $this->request->variable('user_id', 0);
		$post_id	= $this->request->variable('post_id', 0);
		$method		= $this->request->variable('method', '');

		// Check key
		add_form_key('robbery_attack_user');

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			// Select the user_id of user to be robbed
			$sql_array = array(
				'SELECT'	=> 'user_id',
				'FROM'		=> array(
					USERS_TABLE => 'u',
				),
				'WHERE'		=> 'user_id = ' . (int) $u_id,
			);
			$sql = $this->db->sql_build_query('SELECT', $sql_array);
			$result = $this->db->sql_query($sql);
			$user_id = (int) $this->db->sql_fetchfield('user_id');
			$this->db->sql_freeresult($result);

			if (!check_form_key('robbery_attack_user'))
			{
				trigger_error('FORM_INVALID');
			}

			// Add all required informations
			$attacked_amount	= round($this->request->variable('attacked_amount', 0.00),2);

			if ($attacked_amount <= 0)
			{
				$message = $this->user->lang['ROBBERY_TOO_SMALL_AMOUNT'] . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
				trigger_error($message);
			}

			// Check, if user tries to rob himself
			if ($this->user->data['user_id'] == (int) $u_id)
			{
				$message = $this->user->lang['ROBBERY_SELF'] . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
				trigger_error($message);
			}

			// Check, if user is trying to rob to much cash
			if ($points_values['robbery_loose'] != 0)
			{
				if ($this->user->data['user_points'] < ($attacked_amount/100*$points_values['robbery_loose']))
				{
					$message = $this->user->lang['ROBBERY_TO_MUCH'] . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
					trigger_error($message);
				}
			}

			// If no matching user id is found
			if (!$user_id)
			{
				$message = $this->user->lang['POINTS_NO_USER'] . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
				trigger_error($message);
			}

			// If the robbed user doesn't have enough cash
			$sql_array = array(
				'SELECT'	=> 'user_points',
				'FROM'		=> array(
					USERS_TABLE => 'u',
				),
				'WHERE'		=> 'user_id = ' . (int) $user_id,
			);
			$sql = $this->db->sql_build_query('SELECT', $sql_array);
			$result = $this->db->sql_query($sql);
			$pointsa = $this->db->sql_fetchfield('user_points');
			$this->db->sql_freeresult($result);

			if ($attacked_amount > $pointsa)
			{
				$message = $this->user->lang['ROBBERY_TO_MUCH_FROM_USER'] . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
				trigger_error($message);
			}

			// Check, if user tries to rob more than x % of users cash
			if ($points_values['robbery_max_rob'] != 0)
			{
				if ($attacked_amount > ($pointsa/100*$points_values['robbery_max_rob']))
				{
					$message = sprintf($this->user->lang['ROBBERY_MAX_ROB'], $points_values['robbery_max_rob']) . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
					trigger_error($message);
				}
			}

			// Get some info about the robbed user
			$user_namepoints = get_username_string('full', $checked_user['user_id'], $checked_user['username'], $checked_user['user_colour']);

			// Genarate a random number
			$rand_base = $points_values['robbery_chance'];
			$rand_value = rand(0, 100);

			// If robbery was successful and notification is enabled, send notification
			if ($rand_value <= $rand_base)
			{
				$this->functions_points->add_points($this->user->data['user_id'], $attacked_amount);
				$this->functions_points->substract_points($user_id, $attacked_amount);

				// Add robbery to the log
				$sql = 'INSERT INTO ' . $this->points_log_table . ' ' . $this->db->sql_build_array('INSERT', array(
					'point_send'	=> (int) $this->user->data['user_id'],
					'point_recv'	=> $user_id,
					'point_amount'	=> $attacked_amount,
					'point_sendold'	=> $this->user->data['user_points'] ,
					'point_recvold'	=> $pointsa,
					'point_comment'	=> '',
					'point_type'	=> '3',
					'point_date'	=> time(),
				));
				$this->db->sql_query($sql);

				if ($points_config['robbery_notify'])
				{
					// Increase our notification sent counter
					$this->config->increment('points_notification_id', 1);

					// Store the notification data we will use in an array
					$data = array(
						'points_notify_id'		=> (int) $this->config['points_notification_id'],
						'points_notify_msg'		=> sprintf($this->user->lang['NOTIFICATION_ROBBERY_SUCCES'], $attacked_amount, $this->config['points_name']),
						'sender'				=> (int) $this->user->data['user_id'],
						'receiver'				=> (int) $user_id,
						'mode'					=> 'robbery',
					);

					// Create the notification
					$this->notification_manager->add_notifications('dmzx.ultimatepoints.notification.type.points', $data);
				}

				$message = $this->user->lang['ROBBERY_SUCCESFUL'] . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
				trigger_error($message);
			}
			// If robbery failed and notify user
			else
			{
				if ($points_values['robbery_loose'] != 0)
				{
					$lose = $attacked_amount/100*$points_values['robbery_loose'];
					$this->functions_points->substract_points($this->user->data['user_id'], $lose);

					if ($points_config['robbery_notify'])
					{
						// Increase our notification sent counter
						$this->config->increment('points_notification_id', 1);

						// Store the notification data we will use in an array
						$data = array(
							'points_notify_id'		=> (int) $this->config['points_notification_id'],
							'points_notify_msg'		=> $this->user->lang['NOTIFICATION_ROBBERY_FAILED'],
							'sender'				=> (int) $this->user->data['user_id'],
							'receiver'				=> (int) $user_id,
							'mode'					=> 'robbery',
						);

						// Create the notification
						$this->notification_manager->add_notifications('dmzx.ultimatepoints.notification.type.points', $data);
					}

					$message = $this->user->lang['ROBBERY_BAD'] . '<br /><br /><a href="' . $this->helper->route('dmzx_ultimatepoints_controller', array('mode' => 'robbery_user', 'user_id' => (int) $user_id)) . '">&laquo; ' . $this->user->lang['BACK_TO_PREV'] . '</a>';
					trigger_error($message);
				}
			}

			$this->template->assign_vars(array(
				'USER_NAME'				=> get_username_string('full', $checked_user['user_id'], $points_config['username'], $points_config['user_colour']),
				'U_ACTION'				=> $this->u_action,
				'S_HIDDEN_FIELDS'		=> $hidden_fields,
			));
		}

		// Select the user_id of user to be robbed
		 $sql_array = array(
			'SELECT'	=> '*',
			'FROM'		=> array(
				USERS_TABLE => 'u',
			),
			'WHERE'		=> 'user_id = ' . (int) $u_id,
		);
		$sql = $this->db->sql_build_query('SELECT', $sql_array);
		$result = $this->db->sql_query($sql);
		$opponent = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		$username_full = get_username_string('full', $opponent['user_id'], $opponent['username'], $opponent['user_colour']);

		$this->template->assign_vars(array(
			'USER_POINTS'			=> sprintf($this->functions_points->number_format_points($pointsa)),
			'POINTS_NAME'			=> $this->config['points_name'],
			'LOTTERY_NAME'			=> $points_values['lottery_name'],
			'BANK_NAME'				=> $points_values['bank_name'],
			'L_ROBBERY_CHANCE'		=> sprintf($this->user->lang['ROBBERY_CHANCE'], ($this->functions_points->number_format_points($points_values['robbery_max_rob'])), ($this->functions_points->number_format_points($points_values['robbery_chance']))),
			'L_ROBBERY_AMOUNTLOSE'	=> sprintf($this->user->lang['ROBBERY_AMOUNTLOSE'], ($this->functions_points->number_format_points($points_values['robbery_loose']))),
			'U_USE_ROBBERY'			=> $this->auth->acl_get('u_use_robbery'),
			'U_ROBBERY_NAME'		=> ($this->auth->acl_get('u_use_robbery')) ? sprintf($this->user->lang['ROBBERY_TO_NAME'], $username_full, $this->config['points_name']) : '',
		));

		// Generate the page
		page_header($this->user->lang['POINTS_ROBBERY']);

		// Generate the page template
		$this->template->set_filenames(array(
			'body'	=> 'points/points_robbery_user.html'
		));

		page_footer();
	}
}
