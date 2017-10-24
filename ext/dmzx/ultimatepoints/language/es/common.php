<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2016 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_POINTS'						=> 'Puntos Finales',
	'ACP_POINTS_BANK_TITLE'				=> 'Ajustes del Banco',
	'ACP_POINTS_FORUM_TITLE'			=> 'Ajustes de Puntos del Foro',
	'ACP_POINTS_INDEX_TITLE'			=> 'Ajustes de Puntos',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Ajustes de Lotería',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Ajustes de Robo',
	'ACP_POINTS_USERGUIDE_TITLE'		=> 'Guía de Usuario',

	'BANK_ACCOUNT_OPENING'				=> 'Abrir una cuenta',
	'BANK_ACCOUNT_OPENED'				=> 'Inició una cuenta bancaria en',
	'BANK_ACTIONS'						=> 'Acciones',
	'BANK_BACK_TO_BANK'					=> '%sClic aquí para volver al Banco%s',
	'BANK_BACK_TO_INDEX'				=> '%sClic aquí para volver al Índice%s',
	'BANK_BALANCE'						=> 'Balance',
	'BANK_BUTTON_DEPOSIT'				=> 'Depositar',
	'BANK_BUTTON_WITHDRAW'				=> 'Retirar',
	'BANK_COST'							=> 'Costes por período de cuentas',
	'BANK_DEPOSIT_SMALL_AMOUNT'			=> 'La cantidad más pequeña que puede depositar es %s %s.',
	'BANK_DEPOSIT_WITHDRAW'				=> 'Depositar y Retirar',
	'BANK_DESCRIPTION'					=> 'Usted está aquí en nuestro banco. Sólo contamos con costes bajos para pagos, pero también pagamos dinero con una tasa de interés definida. Si usted abre una cuenta, puede salvar su dinero de ser robado. Así que vale la pena pensar en ello.<br /><br />',
	'BANK_DISABLED'						=> 'El Banco está deshabilitado',
	'BANK_ERROR_DEPOSIT'				=> 'Ha especificado un importe de depósito incorrecto, o no válido',
	'BANK_ERROR_NOT_ENOUGH_DEPOSIT'		=> 'No tiene suficiente %1$s para depositar esa cantidad',
	'BANK_ERROR_NOT_ENOUGH_WITHDRAW'	=> 'Su cuenta no muestra suficiente %1$s para retirar esa cantidad',
	'BANK_ERROR_PAYOUTTIME_SHORT'		=> 'Debe especificar un tiempo de pago superior al <em>Cero</em> en la configuración del Banco',
	'BANK_ERROR_WITHDRAW'				=> 'Ha especificado una cantidad de retirada incorrecta, o no válida',
	'BANK_FROM_ACCOUNT'					=> 'de su cuenta bancaria',
	'BANK_HAVE_DEPOSIT'					=> 'Ha depositado',
	'BANK_HAVE_WITHDRAW'				=> 'Ha retirado',
	'BANK_HOLDING'						=> 'Valores en Total',
	'BANK_INFO'							=> 'Información del Banco',
	'BANK_INTEREST_PERIOD'				=> 'Período de pago de intereses',
	'BANK_INTEREST_RATE'				=> 'Tasa de interés',
	'BANK_LEAVE_WITH'					=> 'Dejándole con',
	'BANK_MAX_HOLD'						=> 'Valor máximo para los intereses',
	'BANK_MIN_DEPO'						=> 'Depósito mínimo',
	'BANK_MIN_WITH'						=> 'Retirada mínima',
	'BANK_NEW_BALANCE'					=> 'Su nuevo balance es',
	'BANK_NOW_HAVE'						=> 'Ahora tiene',
	'BANK_NO_ACCOUNT'					=> 'El usuario no tiene una cuenta en el %1$s',
	'BANK_NOBODY_IN_BANK'				=> 'Actualmente nadie ha depositado %1$s en el %2$s',
	'BANK_ON_HAND'						=> 'en mano',
	'BANK_OPEN_ACCOUNT'					=> '%sClic aquí para abrir una cuenta%s',
	'BANK_RICHEST_USER'					=> 'El banquero más rico',
	'BANK_START_BALANCE'				=> 'Su saldo inicial es 0.',
	'BANK_TITLE_MAIN'					=> 'Banco',
	'BANK_TOTAL_ACCOUNTS'				=> 'Total de cuentas abiertas',
	'BANK_TO_ACCOUNT'					=> 'En su cuenta bancaria',
	'BANK_USER_NO_ACCOUNT'				=> 'Todavía no tienes una cuenta con %1$s.',
	'BANK_WELCOME_BANK'					=> 'Bienvenido a el',
	'BANK_WITHDRAW_RATE'				=> 'Tasa de retirada',
	'BANK_WITHDRAW_SMALL_AMOUNT'		=> 'La cantidad más pequeña que puede retirar es %s %s.',
	'BANK_YOUR_ACCOUNT'					=> 'Ahora puede depositar y retirar de su cuenta',

	'EDIT_BANK_MODIFY'					=> 'Administración del Banco',
	'EDIT_NO_ID_SPECIFIED'				=> 'No ha especificado un nombre de usuario',
	'EDIT_POINTS_ADMIN'					=> 'Administración de Puntos',
	'EDIT_POINTS_MODIFY'				=> 'Adminsitarción de %s',
	'EDIT_POINTS_SET'					=> 'El %1$s de usuario ha sido actualizado.<br /><br />',
	'EDIT_P_BANK_TITLE'					=> 'Aquí puede modificar el banco de un usuario %s.',
	'EDIT_P_POINTS_TITLE'				=> 'Aquí puede modificar los %s del usuario.',
	'EDIT_P_RETURN_INDEX'				=> '%1$sClic aquí para volver al Índice.%2$s',
	'EDIT_P_RETURN_POST'				=> '%1$sClic aquí para volver al mensaje anterior.%2$s',
	'EDIT_SET_AMOUNT'					=> 'Nueva cantidad',
	'EDIT_ADD_AMOUNT'					=> 'Añadir cantidad',
	'EDIT_SUB_AMOUNT'					=> 'Sustraer cantidad',
	'EDIT_USER_NOT_EXIST'				=> 'Este usuario no existe.',

	'INFO_GENERAL_INFORMATIONS'			=> 'Información General',
	'INFO_ATTACH'						=> 'Puntos por archivo adjunto en un nuevo mensaje',
	'INFO_ADD_ATTACH'					=> 'Puntos por cada nuevo archivo adjunto',
	'INFO_BONUS_CHANCE'					=> 'Bonus de Puntos',
	'INFO_BONUS_CHANCE_EXPLAIN'			=> 'Actualmente tiene %1$s &#37; ocasión de obtener un incremento de bonificación de %2$s a %3$s %4$s',
	'INFO_NO_COST'						=> 'Actualmente no tienes que pagar ninguna %1$s para esto',
	'INFO_NO_POINTS'					=> 'Actualmente no recibirá ninguna %1$s para esto',
	'INFO_POLL'							=> 'Puntos por nuevas encuestas',
	'INFO_POLL_OPTION'					=> 'Puntos por opción en una nueva encuesta',
	'INFO_TOPIC_WORD'					=> 'Puntos por palabra en un nuevo tema',
	'INFO_TOPIC_CHARACTER'				=> 'Puntos por caracter en un nuevo tema',
	'INFO_POST_WORD'					=> 'Puntos por palabra en un nuevo mensaje',
	'INFO_POST_CHARACTER'				=> 'Puntos por caracter en un nuevo mensaje',
	'INFO_COST_DL_ATTACH'				=> 'Coste por descarga de un archivo adjunto',
	'INFO_COST_WARNING'					=> 'Coste por advertencia',
	'INFO_REG_BONUS'					=> 'Bonificación de puntos al registrarse',

	'LOGS_COMMENT'						=> 'Comentario',
	'LOGS_DATE'							=> 'Fecha',
	'LOGS_DESCRIPTION'					=> 'Aquí verá sus registros.<br />Verá una lista de todas las transferencias que ha enviado o que ha recibido.<br />Si está buscando una transferencia determinada, use la opción de ordenación.<br /><br />',
	'LOGS_REASON_NOLOGS'				=> 'No hay registros disponibles.',
	'LOGS_RECV'							=> 'Recibido',
	'LOGS_ROBBERY_LOST'					=> 'Robo perdido',
	'LOGS_ROBBERY_WON'					=> 'Robo ganado',
	'LOGS_SENT'							=> 'Enviado',
	'LOGS_SORT_COMMENT'					=> 'Comentario',
	'LOGS_SORT_DATE'					=> 'Fecha',
	'LOGS_SORT_FROMNAME'				=> 'De',
	'LOGS_SORT_TONAME'					=> 'Enviado a',
	'LOGS_SORT_TYPE'					=> 'Tipo',
	'LOGS_TITLE'						=> '%1$s Registros',
	'LOGS_TO'							=> 'Para',
	'LOGS_TYPE'							=> 'Tipo',
	'LOGS_WHO'							=> 'Quien',
	'LOTTERY_ACTIONS'					=> 'Acciones',
	'LOTTERY_BACK'						=> 'Volver a la página principal de Lotería',
	'LOTTERY_DATE'						=> 'Fecha',
	'LOTTERY_DESCRIPTION'				=> 'El valor de sus boletos comprados entrará en el Bote. El Bote ya tiene %1$s %2$s por ronda. Cuantos más jugadores tenga la ronda, mayor será el Bote. Después del período de sorteo, el ganador se selecciona al azar. Si nadie gana, el Bote crecerá aún más. ¡Las probabilidades pueden estar siempre a su favor!<br /><br />',
	'LOTTERY_DISABLED'					=> 'La Lotería está deshabilitada.',
	'LOTTERY_HISTORY'					=> 'Historia',
	'LOTTERY_INFO'						=> 'Información de Lotería',
	'LOTTERY_INVALID_INPUT'				=> 'Debe ingresar un número válido para comprar boletos.',
	'LOTTERY_JACKPOT'					=> 'Bote',
	'LOTTERY_LACK_FUNDS'				=> '¡Usted carece de fondos para hacer esa compra!',
	'LOTTERY_LAST_WINNER'				=> 'El último ganador de la lotería fue',
	'LOTTERY_MAX_TICKETS'				=> 'Número máximo de boletos por ronda y jugador',
	'LOTTERY_MAX_TICKETS_LEFT'			=> '¡Sólo quedan <strong>%1$s</strong> boletos, que se pueden comprar durante esta ronda!',
	'LOTTERY_MAX_TICKETS_REACH'			=> '¡No se le permite comprar más de <strong>%1$s</strong> tickets por ronda!',
	'LOTTERY_NEGATIVE_TICKETS'			=> '¡No puedes comprar boletos negativos o 0!<br />¡Así que necesitas comprar al menos 1 boleto!',
	'LOTTERY_NEVER_WON'					=> '¡Nunca ha ganado la Lotería!',
	'LOTTERY_NEXT_DRAWING'				=> 'El próximo sorteo estará en',
	'LOTTERY_NO_WINNER'					=> 'No hay ganador esta vez',
	'LOTTERY_NO_WINNERS'				=> 'Nadie ha ganado una lotería todavía.',
	'LOTTERY_PLAYERS'					=> 'Número de jugadores hasta ahora',
	'LOTTERY_PM_BODY'					=> '¡Felicitaciones! ¡Usted ha ganado %1$s en nuestra Lotería! %2$s',
	'LOTTERY_PM_CASH_ENABLED'			=> 'Sus ganancias se han depositado en su cuenta, ¡disfrútela! [i]La Administración de Lotería[/i]',
	'LOTTERY_PM_COMMISION'				=> 'La Administración de Lotería',
	'LOTTERY_PM_SUBJECT'				=> '¡Ha ganado la lotería!',
	'LOTTERY_PURCHASE_TICKET'			=> 'Comprar boleto',
	'LOTTERY_PURCHASE_TICKETS'			=> 'Comprar boletos',
	'LOTTERY_TICKETS'					=> 'Venta de boletos hasta ahora',
	'LOTTERY_TICKET_COST'				=> 'Coste del boleto',
	'LOTTERY_TICKET_PURCHASED'			=> '¡Su compra de boletos se ha completado!',
	'LOTTERY_TITLE_DESCRIPTION'			=> '¿Cuáles son las reglas para jugar?',
	'LOTTERY_TITLE_MAIN'				=> 'Lotería',
	'LOTTERY_TOTAL_WINNERS'				=> 'Ganadores Totales',
	'LOTTERY_VIEWER_TICKETS'			=> 'Boletos propios',
	'LOTTERY_VIEW_HISTORY'				=> 'Ver los ganadores anteriores',
	'LOTTERY_VIEW_SELF_HISTORY'			=> 'Vea su historial ganador',
	'LOTTERY_WINNINGS'					=> 'Cantidad ganada',
	'LOTTERY_WON'						=> 'Ganado por',
	'LOTTERY_WINNER_INDEX'				=> 'El último ganador de la Lotería: %1$s',

	'MAIN_BANK_HAVE'					=> 'En su cuenta bancaria tiene un adicional de %1$s %2$s.',
	'MAIN_HELLO_USERNAME'				=> '¡ Hola %1$s !',
	'MAIN_LOTTERIES_NONE'				=> 'Aún no hay ganadores...',
	'MAIN_LOTTERY_TICKETS'				=> 'Actualmente tiene %1$s boleto(s).',
	'MAIN_LOTTERIES_WON'				=> 'La mayoría de las loterías ganadas',
	'MAIN_MOST_DONATED'					=> 'La mayoría de los donantes',
	'MAIN_MOST_DONATED_NONE'			=> 'No se han hecho donaciones...',
	'MAIN_ON_HAND'						=> 'Actualmente tiene %1$s %2$s disponibles.',
	'MAIN_RICH_BANK'					=> 'Banquero más rico',
	'MAIN_RICH_BANK_NONE'				=> 'Nadie está bancario rico...',
	'MAIN_USERNAME_LOCKED'				=> 'Este usuario está bloqueado y no puede utilizar el sistema de puntos.',

	'NOTIFICATION_BANK_PAYOUT'			=> 'Su interés bancario ha sido pagado y agregado a su saldo',
	'NOTIFICATION_RANDOM_BONUS'			=> '¡Recibiste un bono al azar de %1$s %2$s!',
	'NOTIFICATION_ROBBERY_FAILED'		=> '¡Trató de robar, pero no!',
	'NOTIFICATION_ROBBERY_SUCCES'		=> '¡Ha robado %1$s %2$s suyos!',
	'NOTIFICATION_POINTS_UCP'			=> 'Recibir notificación sobre los puntos <em>(robo ganado/robo fallado, bonificación de puntos, etc.)</em>',

	'POINTS'							=> 'Puntos',
	'POINTS_ATTACHMENT_MINI_POSTS'		=> '¡Necesitas más %1$s para descargar este archivo adjunto!',
	'POINTS_BANK'						=> 'Banco',
	'POINTS_BPOINTS_TOTAL'				=> 'Total en el Banco: %1$s %2$s',
	'POINTS_BOT_GUEST'					=> '<strong>¡Si usted se hubiera registrado con nosotros, usted podría utilizar esta función!</strong>',
	'POINTS_BUPOINTS_TOTAL'				=> 'Cuentas Bancarias : %1$s',
	'POINTS_CASH_ON_HAND'				=> 'Cash on hand',
	'POINTS_COPYRIGHT'					=> 'Ultimate Points por <a href="http://die-muellers.org" onclick="window.open(this.href); return false">femu</a> &amp; <a href="http://www.spieleresidenz.de" onclick="window.open(this.href); return false">Wuerzi</a> v',
	'POINTS_COPYRIGHTS'					=> '&copy; 2016 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx &amp; posey</a>',
	'POINTS_DESCRIPTION'				=> 'Descripción',
	'POINTS_DISABLED'					=> 'Puntos Finales está actualmente deshabilitado.',
	'POINTS_DONATE'						=> '[Donar]',
	'POINTS_DOWNLOAD_COST'				=> 'Coste de Descarga',
	'POINTS_EXPLAIN'					=> 'Puntos Finales',
	'POINTS_INFO'						=> 'Información',
	'POINTS_INFO_DESCRIPTION'			=> 'Aquí encontrará información adicional sobre nuestra política de %1$s.<br /><br />Además de estos valores, puede recibir %1$s adicionales en determinados temas.<br /><br />¡Tenga en cuenta, que el propietario del foro tiene la capacidad de deshabilitar foros completos de obtener %1$s!',
	'POINTS_INSUFFICIENT_POST'			=> 'Usted no tiene suficiente %2$s para hacer un mensaje en este foro. El coste de hacer un mensaje en este foro es <strong>%1$s %2$s</strong>.',
	'POINTS_INSUFFICIENT_TOPIC'			=> 'Usted no tiene suficiente %2$s para hacer un tema en este foro. El coste de hacer un tema en este foro es <strong>%1$s %2$s</strong>.',
	'POINTS_LOCKED'						=> 'Cerrado',
	'POINTS_LOGS'						=> 'Registros',
	'POINTS_LOG_COUNT'	=> array(
		1 => '%d entrada',
		2 => '%d entradas',
	),
	'POINTS_LIST'						=> 'Lista de PF',
	'POINTS_LIST_DISABLE'				=> 'Lista de Puntos Finales deshabilitada',
	'POINTS_LIST_NO_USER'				=> 'No hay usuarios con puntos',
	'POINTS_LIST_TOTAL'					=> 'Lista de Puntos Finales',
	'POINTS_LIST_USER'					=> '1 usuario',
	'POINTS_LIST_USERS'					=> '%s usuarios',
	'POINTS_LOG_TOTAL'					=> 'Total',
	'POINTS_LOTTERY'					=> 'Lotería',
	'POINTS_LOTTERY_TIME'				=> 'Siguiente Lotería: %1$s',
	'POINTS_MODIFY'						=> '[Modificar]',
	'POINTS_MOST_RICH_CASH_USERS'		=> 'Usuarios con más efectivo',
	'POINTS_MOST_RICH_USERS'			=> 'Usuario más rico',
	'POINTS_MOST_RICH_USERS_DISABLED'	=> 'Esta página está deshabilitada por el Administrador',
	'POINTS_NO_USER'					=> 'Este nombre de usuario no es válido',
	'POINTS_NUMBER_FORMAT_EXPLAIN'		=> 'Sugerencia: Introduzca siempre valores sin el separador de miles y los decimales con un punto, es decir; 1000.50',
	'POINTS_OPTIONS'					=> 'Opciones',
	'POINTS_OVERVIEW'					=> 'Vista General',
	'POINTS_RECEIVED_EDIT_MESSAGE'		=> 'Ha recibido <strong>%1$s %2$s</strong> por editar el mensaje',
	'POINTS_RECEIVED_POST_MESSAGE'		=> 'Ha recibido <strong>%1$s %2$s</strong> por su nuevo tema',
	'POINTS_RECEIVED_REPLY_MESSAGE'		=> 'Ha recibido <strong>%1$s %2$s</strong> por su mensaje',
	'POINTS_RETURN_INDEX'				=> 'Clic aquí para volver al Índice',
	'POINTS_ROBBERY'					=> 'Robo',
	'POINTS_SEPARATOR_DECIMAL'			=> '.',
	'POINTS_SEPARATOR_THOUSANDS'		=> ',',
	'POINTS_STATISTICS'					=> 'Estadísticas de Puntos',
	'POINTS_TITLE_MAIN'					=> 'Panel de Control de %1$s',
	'POINTS_TOTAL'						=> 'Total de efectivo en mano: %1$s %2$s',
	'POINTS_TRANSFER'					=> 'Transferir',
	'POINTS_VIEWING'					=> 'Navegando en la consola de Puntos',
	'POINTS_TRANSFER_RECIEVED'			=> 'Donaciones recibidas',

	'ROBBERY_AMOUNT'					=> 'Cantidad',
	'ROBBERY_AMOUNTLOSE'				=> '¡Si no tiene éxito, perderá un <strong>%s por ciento</strong> del valor que quería robar!<br /><br />',
	'ROBBERY_BAD'						=> 'Lo siento ... ¡su robo ha fallado!',
	'ROBBERY_DATE'						=> 'Fecha del robo',
	'ROBBERY_CHANCE'					=> 'Aquí puede intentar robar a otro usuario. ¡Pero solo puede intentar robar <strong>%1$s por ciento</strong> del efectivo actual del usuario!<br /><br />Como en la vida real, el crimen no es realmente exitoso. Tu oportunidad de tener éxito con tu robo es del <strong>%2$s por ciento</strong>.',
	'ROBBERY_DISABLED'					=> 'El sistema de Robo está deshabilitado',
	'ROBBERY_MAX_ROB'					=> '¡No puede robar más de <strong>%1$s por ciento</strong> de la cantidad de dinero en efectivo del usuario a la vez!',
	'ROBBERY_NO_ID_SPECIFIED'			=> 'No ha especificado un nombre de usuario',
	'ROBBERY_SELF'						=> 'No puede robarse a si mismo.',
	'ROBBERY_SET_AMOUNTR'				=> 'La cantidad que le gustaría robar',
	'ROBBERY_SET_USERNAMES'				=> '¡Nombre de los miembros que le robaron!',
	'ROBBERY_SET_USERNAMER'				=> 'Nombre del usuario al que desea robar',
	'ROBBERY_START'						=> 'Comenzar Robo',
	'ROBBERY_SUCCESFUL'					=> '¡Ha conseguido un gran robo!',
	'ROBBERY_TOO_SMALL_AMOUNT'			=> '¡Tiene que robar un poco más!<br />El valor introducido es demasiado pequeño...',
	'ROBBERY_TO_MUCH'					=> 'Está tratando de robar demasiados puntos, si falla no podrá pagar el daño...',
	'ROBBERY_TO_MUCH_FROM_USER'			=> 'Está intentando robar más de lo que el usuario tiene.',
	'ROBBERY_USER'						=> '[Comenzar Robo]',
	'ROBBERY_TO_NAME'					=> 'Quiere robar unos <strong>%2$s</strong> de <strong>%1$s</strong>',

	'TRANSFER_AMOUNTS'					=> 'Cantidad',
	'TRANSFER_SET_USERNAMES'			=> '¡Nombre de los miembros que le donaron a usted!',
	'TRANSFER_DATE'						=> 'Transferencia recibida el',
	'TRANSFER_RECEIVED_DISABLED'		=> 'El sistema de transferencia está deshabilitado',
	'TRANSFER_RECEIVED'					=> '%1$s recibido',

	'TIME_DAY'							=> 'día',
	'TIME_DAYS'							=> 'días',
	'TIME_HOUR'							=> 'hora',
	'TIME_HOURS'						=> 'horas',
	'TIME_MINUTE'						=> 'minuto',
	'TIME_MINUTES'						=> 'minutos',
	'TIME_MONTH'						=> 'mes',
	'TIME_MONTHS'						=> 'meses',
	'TIME_SECOND'						=> 'segundo',
	'TIME_SECONDS'						=> 'segundos',
	'TIME_WEEK'							=> 'semana',
	'TIME_WEEKS'						=> 'semanas',
	'TIME_YEAR'							=> 'año',
	'TIME_YEARS'						=> 'años',
	'TRANSFER_AMOUNT'					=> 'Cantidad para transferir',
	'TRANSFER_COMMENT'					=> 'Comentario',
	'TRANSFER_DESCRIPTION'				=> 'Aquí puede transferir algunos %1$s. Simplemente agregue el nombre del receptor y la cantidad de puntos que le gustaría donar y haga clic en enviar. La transferencia se registrará en sus archivos de registro.',
	'TRANSFER_FEE'						=> 'Tarifa de transferencia',
	'TRANSFER_FEE_EXPLAIN'				=> 'Porcentaje que se retiene de su transferencia',
	'TRANSFER_NO_USER_RETURN'			=> '<strong>¡El nombre de usuario seleccionado no es válido!</strong>',
	'TRANSFER_PM_BODY'					=> 'Recibió una donación de %1$s %2$s con el siguiente comentario: [i]%3$s[/i]',
	'TRANSFER_PM_BODY_USER'				=> 'Recibió una donación de %1$s %2$s.',
	'TRANSFER_PM_SUBJECT'				=> '¡Ha recibido una donación!',
	'TRANSFER_REASON_MINPOINTS'			=> 'No tiene suficiente %1$s para transferir.',
	'TRANSFER_REASON_TRANSFER'			=> 'El Administrador ha deshabilitado la transferencia',
	'TRANSFER_REASON_TRANSUCC'			=> '¡Ha transferido correctamente <strong>%1$s %2$s</strong> a <strong>%3$s</strong>!',
	'TRANSFER_REASON_UNDERZERO'			=> 'No se puede transferir 0.00 %1$s.',
	'TRANSFER_REASON_YOURSELF'			=> '¡No puede transferir %1$s a usted mismo!',
	'TRANSFER_SET_USERNAME'				=> '<b>Nombre del usuario al que desea hacer una donación:</b>',
	'TRANSFER_TITLE'					=> 'Transferencia %1$s',
	'TRANSFER_TO_NAME'					=> 'Desea transferir algunos <strong>%2$s</strong> a <strong>%1$s</strong>',

	'UP_INSERT_FIRST_FILL'				=> 'Las tablas se llenaron correctamente con algunos datos básicos.',
	'UP_REMOVE_CONFIG_ENTRIES'			=> 'Las entradas de la tabla de configuración se eliminaron correctamente',
	'UP_REMOVE_FORUM_ENTRIES'			=> 'Las entradas de la tabla de foros se eliminaron correctamente',
	'UP_ULTIMATE_POINTS_NAME'			=> 'Puntos Finales',
	'UP_ULTIMATE_POINTS_NAME_EXPLAIN'	=> 'Con esta extensión le dará a sus usuarios la posibilidad de recoger y gastar puntos. Haga clic en las siguientes acciones para realizar, lo que desee hacer. Se recomienda habilitar <strong>Mostrar resultados completos</strong>.<br /><br />¡Que se divierta!',
	'UP_UPDATE_SUCCESFUL'				=> 'Las tablas se actualizaron correctamente',

	'ULTIMATEPOINTS_VERSION'			=> 'Versión',

	'WARN_USER_POINTS'					=> 'Además dedujimos %1$s %2$s de su cuenta!',
	'WARN_MOD_POINTS'					=> 'Además %1$s %2$s ha sido deducido de su cuenta %3$s!',
));