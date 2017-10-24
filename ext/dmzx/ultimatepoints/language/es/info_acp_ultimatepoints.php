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

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_POINTS'						=> 'Puntos Finales',
	'ACP_POINTS_BANK_EXPLAIN'			=> 'Aquí puede modificar la configuración del módulo del Banco',
	'ACP_POINTS_BANK_TITLE'				=> 'Ajustes del Banco',
	'ACP_POINTS_DEACTIVATED'			=> '¡Puntos Finales está actualmente deshabilitado!',
	'ACP_POINTS_FORUM_EXPLAIN'			=> 'Aquí puede establecer los Puntos de Foro predeterminados para todos los foros a la vez. Es lo ideal para sus primeros ajustes.<br />Tenga en cuenta que estos ajustes son para <strong>TODOS</strong> los foros. ¡Así que si cambia manualmente alguna de las configuraciones de sus Puntos de Foro con valores individuales, deberá volver a hacer esto después de usar esta opción.',
	'ACP_POINTS_FORUM_TITLE'			=> 'Ajustes de Puntos del Foro',
	'ACP_POINTS_INDEX_EXPLAIN'			=> 'Aquí puede cambiar los ajustes del módulo de Puntos Finales',
	'ACP_POINTS_INDEX_TITLE'			=> 'Ajustes de Puntos',
	'ACP_POINTS_LOTTERY_EXPLAIN'		=> 'Aquí puede cambiar los ajustes del módulo de Lotería',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Ajustes de Lotería',
	'ACP_POINTS_ROBBERY_EXPLAIN'		=> 'Aquí puede cambiar los ajustes del módulo de Robo',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Ajustes del Robo',
	'ACP_POINTS_VALUES_HINT'			=> '<strong>Consejo: </strong>Introduzca siempre valores sin el separador de miles<br />y decimales con un punto, es decir, 1000.50',
	'ACP_USER_POINTS_TITLE'				=> 'Ajustes de Puntos Finales',

	'BANK_COST'							=> 'El coste para mantener una cuenta bancaria',
	'BANK_COST_EXPLAIN'					=> 'Aquí se establece el precio, que los usuarios tienen que pagar cada período de tiempo, por su cuenta bancaria (establezca 0 para desactivar esta función)',
	'BANK_ENABLE'						=> 'Habilitar el módulo de Banco',
	'BANK_ENABLE_EXPLAIN'				=> 'Esto permitirá a los usuarios usar el módulo del Banco',
	'BANK_FEES'							=> 'Tarifas de retiradas',
	'BANK_FEES_ERROR'					=> '¡ Las tarifas de retirada no pueden ser superiores al 100% !',
	'BANK_FEES_EXPLAIN'					=> 'La cantidad en porcentaje (%) que los usuarios tendrán que pagar, cuando retiren del Banco',
	'BANK_INTEREST'						=> 'Tasa de interés',
	'BANK_INTERESTCUT'					=> 'Inhabilitar el interés en',
	'BANK_INTERESTCUTP'					=> '(establezca 0 para desactivar esta función)',
	'BANK_INTERESTCUT_EXPLAIN'			=> 'Esta es la cantidad máxima por la que un usuario obtendrá la tasa de interés. ¡Si poseen más, el valor establecido es el máximo! Establezca 0 para desactivar esta función.',
	'BANK_INTEREST_ERROR'				=> '¡ La tasa de interés no puede ser superior al 100% !',
	'BANK_INTEREST_EXPLAIN'				=> 'La cantidad en % del interés',
	'BANK_MINDEPOSIT'					=> 'Depósito mínimo',
	'BANK_MINDEPOSIT_EXPLAIN'			=> 'La cantidad mínima que los usuarios pueden depositar en el Banco',
	'BANK_MINWITHDRAW'					=> 'Retirada mínima',
	'BANK_MINWITHDRAW_EXPLAIN'			=> 'La cantidad mínima que los usuarios pueden retirar del Banco',
	'BANK_NAME'							=> 'Nombre de su Banco',
	'BANK_NAME_EXPLAIN'					=> 'Introduzca el nombre de su Banco, por ejemplo; Nuestro Banco del Foro',
	'BANK_OPTIONS'						=> 'Ajustes del Banco',
	'BANK_PAY'							=> 'Tiempo de pago de intereses',
	'BANK_PAY_EXPLAIN'					=> 'El período de tiempo entre los pagos bancarios',
	'BANK_TIME'							=> 'días',
	'BANK_VIEW'							=> 'Habilitar Banco de Puntos',
	'BANK_VIEW_EXPLAIN'					=> 'Esto permitirá habilitar el módulo del Banco',

	'FORUM_OPTIONS'						=> 'Puntos de Foro',
	'FORUM_PEREDIT'						=> 'Puntos por editar',
	'FORUM_PEREDIT_EXPLAIN'				=> 'Introduzca aquí, la cantidad de puntos que los usuarios recibirán por <strong>editar</strong> un mensaje. Por favor tenga cuidado, that they will also receive additional points, which you defined in the advanced points settings.<br />Establezca 0 para desactivar la recepción de puntos de este foro.',
	'FORUM_PERPOST'						=> 'Puntos por mensaje',
	'FORUM_PERPOST_EXPLAIN'				=> 'Introduzca aquí, la cantidad de puntos que los usuarios recibirán por escribir <strong>mensajes (respuestas)</strong>. Por favor tenga cuidado, that they will also receive additional points, which you defined in the advanced points settings.<br />Establezca 0 para desactivar la recepción de puntos de este foro. ¡De esta manera también los ajustes de puntos avanzados están desactivados para este foro!',
	'FORUM_PERTOPIC'					=> 'Puntos por tema',
	'FORUM_PERTOPIC_EXPLAIN'			=> 'Introduzca aquí, la cantidad de puntos que los usuarios recibirán por crear un <strong>nuevo tema</strong>. Por favor tenga cuidado, that they will also receive additional points, which you defined in the advanced points settings.<br />Establezca 0 para desactivar la recepción de puntos de este foro. ¡De esta manera también los ajustes de puntos avanzados están desactivados para este foro!',
	'FORUM_COST'						=> 'Puntos por archivo adjunto descargado',
	'FORUM_COST_EXPLAIN'				=> 'Introduzca aquí, cuántos puntos los usuarios tendrán que pagar por <strong>descargar un archivo adjunto</strong>.<br />Establezca 0 para desactivar esta función.',
	'FORUM_COST_TOPIC'					=> 'Puntos a pagar por nuevo tema',
	'FORUM_COST_TOPIC_EXPLAIN'			=> 'Introduzca aquí, cuánto puntos un usuario tiene que pagar para iniciar un nuevo tema en este foro',
	'FORUM_COST_POST'					=> 'Puntos a pagar por nuevos mensaje',
	'FORUM_COST_POST_EXPLAIN'			=> 'Introduce aquí, la cantidad de puntos que un usuario debe pagar para realizar un nuevo mensaje en este foro.',
	'FORUM_POINT_SETTINGS'				=> 'Ajustes de Puntos Finales',
	'FORUM_POINT_SETTINGS_EXPLAIN'		=> 'Aquí puede configurar, cuántos puntos obtendrán los usuarios para crear nuevos temas, nuevos mensajes (respuestas) y editar sus mensajes. Estos ajustes se realizan por foro. De esta manera puede hacerlo muy detallado, donde los usuarios obtendrán puntos y donde no.',
	'FORUM_POINT_SETTINGS_UPDATED'		=> 'Puntos globales del foro actualizados',
	'FORUM_POINT_UPDATE'				=> 'Actualizar puntos globales del foro',
	'FORUM_POINT_UPDATE_CONFIRM'		=> '<br />¿Está seguro de querer actualizar todos los puntos del foro con los valores dados?<br />¡Este paso sobrescribirá todos los ajustes actuales, este cambio no será reversible!',

	'LOG_GROUP_TRANSFER_ADD'			=> 'Transferir puntos a un grupo',
	'LOG_GROUP_TRANSFER_SET'			=> 'Establecer un nuevo valor de puntos para un grupo',
	'LOG_MOD_BANK'						=> '<strong>Puntos de Banco editados</strong><br />» %1$s',
	'LOG_MOD_POINTS'					=> '<strong>Puntos editados</strong><br />» %1$s',
	'LOG_MOD_POINTS_BANK'				=> '<strong>Ajustes del Banco editados</strong>',
	'LOG_MOD_POINTS_BANK_PAYS'			=> '<strong>Pagos de intereses bancarios</strong><br />» %1$s',
	'LOG_MOD_POINTS_FORUM'				=> '<strong>Ajustes de Puntos Globales del Foro editados</strong>',
	'LOG_MOD_POINTS_FORUM_SWITCH'		=> '<strong>Interruptores de Puntos del Foro editados</strong>',
	'LOG_MOD_POINTS_FORUM_VALUES'		=> '<strong>Valores de Puntos del Foro editados</strong>',
	'LOG_MOD_POINTS_LOTTERY'			=> '<strong>Ajustes de Lotería editados</strong>',
	'LOG_MOD_POINTS_RANDOM'				=> '<strong>Puntos aleatorios ganados por</strong><br />» %1$s',
	'LOG_MOD_POINTS_ROBBERY'			=> '<strong>Ajustes de Robo editados</strong>',
	'LOG_MOD_POINTS_SETTINGS'			=> '<strong>Ajustes de Puntos editados</strong>',
	'LOG_RESYNC_LOTTERY_HISTORY'		=> '<strong>El historial de lotería se restableció correctamente</strong>',
	'LOG_RESYNC_POINTSCOUNTS'			=> '<strong>Todos los puntos de los usuarios se restablecieron correctamente</strong>',
	'LOG_RESYNC_POINTSLOGSCOUNTS'		=> '<strong>Todos los registros de usuario se restablecieron correctamente</strong>',
	'LOTTERY_BASE_AMOUNT'				=> 'Bote base',
	'LOTTERY_BASE_AMOUNT_EXPLAIN'		=> 'El Bote comenzará inicialmente con esta cantidad. Si se sube durante un período de empate, se añadirán sumas adicionales al siguiente sorteo. El Bote no disminuirá si se baja.',
	'LOTTERY_CHANCE'					=> 'Posibilidad de ganar el Bote',
	'LOTTERY_CHANCE_ERROR'				=> '¡ La oportunidad de ganar no puede ser mayor que 100% !',
	'LOTTERY_CHANCE_EXPLAIN'			=> 'Aquí puede establecer el porcentaje para ganar el Bote (cuanto mayor sea el valor, mayor será la probabilidad de ganar).',
	'LOTTERY_DISPLAY_STATS'				=> 'Mostrar el tiempo para el siguiente sorteo en la página del índice',
	'LOTTERY_DISPLAY_STATS_EXPLAIN'		=> 'Esto mostrará el tiempo para el siguiente sorteo de la lotería en la página del índice.',
	'LOTTERY_DRAW_PERIOD'				=> 'Período de sorteo',
	'LOTTERY_DRAW_PERIOD_EXPLAIN'		=> 'Cantidad de tiempo en horas entre cada sorteo. Cambiar esto afectará al día/hora actual del sorteo. Establezca 0 para desactivar en sorteos, los boletos/bote actuales permanecerán.',
	'LOTTERY_DRAW_PERIOD_SHORT'			=> '¡El período de sorteo debe ser mayor que 0!',
	'LOTTERY_ENABLE'					=> 'Habilitar módulo de Lotería',
	'LOTTERY_ENABLE_EXPLAIN'			=> 'Esto permitirá a los usuarios usar el módulo de Lotería',
	'LOTTERY_MAX_TICKETS'				=> 'Número máximo de boletos',
	'LOTTERY_MAX_TICKETS_EXPLAIN'		=> 'Establecer el número máximo de boletos que un usuario puede comprar',
	'LOTTERY_MULTI_TICKETS'				=> 'Permitir múltiples boletos',
	'LOTTERY_MULTI_TICKETS_EXPLAIN'		=> 'Establezca esto en “Si” para permitir a los usuarios comprar más de un boleto',
	'LOTTERY_NAME'						=> 'Nombre de su Lotería',
	'LOTTERY_NAME_EXPLAIN'				=> 'Introduzca un nombre para su Lotería, por ejempolo; Su Lotería del Foro',
	'LOTTERY_OPTIONS'					=> 'Ajustes de Lotería',
	'LOTTERY_PM_ID'						=> 'ID de remitente',
	'LOTTERY_PM_ID_EXPLAIN'				=> 'Introduzca aquí el ID del usuario, que será utilizado como remitente del MP al afortunado ganador (0 = usa el ID del ganador).',
	'LOTTERY_TICKET_COST'				=> 'Coste de los boletos',
	'LOTTERY_VIEW'						=> 'Habilitar Puntos de Lotería',
	'LOTTERY_VIEW_EXPLAIN'				=> 'Esto permitirá el módulo de Lotería',

	'NO_RECIPIENT'						=> 'No se ha definido ningún destinatario.',

	'POINTS_ADV_OPTIONS'				=> 'Ajustes Avanzados de Puntos',
	'POINTS_ADV_OPTIONS_EXPLAIN'		=> 'Si los Puntos de Foro están establecidos en 0 (deshabilitado), no se calculan todos los ajustes de aquí.',
	'POINTS_ATTACHMENT'					=> 'Puntos generales para agregar adjuntos en un mensaje',
	'POINTS_ATTACHMENT_PER_FILE'		=> 'Puntos adicionales para cada archivo adjunto',
	'POINTS_BONUS_CHANCE'				=> 'Posibilidad de bonificación de Puntos',
	'POINTS_BONUS_CHANCE_EXPLAIN'		=> 'La posibilidad de que un usuario reciba puntos de bonificación por crear un nuevo tema, mensaje o edición.<br />La posibilidad está entre 0 y 100%, puede usar decimales.<br />Establezca <strong>0</strong> para desactivar esta función.',
	'POINTS_BONUS_VALUE'				=> 'Valor de Puntos de Bonificación',
	'POINTS_BONUS_VALUE_EXPLAIN'		=> 'Dar límites entre los cuales elegiremos una cantidad de bonificación al azar.<br />Si desea una cantidad fija, establezca los mismo en el mínimo y el máximo.',
	'POINTS_COMMENTS'					=> 'Permitir Comentarios',
	'POINTS_COMMENTS_EXPLAIN'			=> 'Permitir a los usuarios dejar comentarios con sus puntos de transferencia/donación',
	'POINTS_CONFIG_SUCCESS'				=> 'Los ajustes de Puntos Finales han sido guardados correctamente',
	'POINTS_DISABLEMSG'					=> 'Mensaje desactivado',
	'POINTS_DISABLEMSG_EXPLAIN'			=> 'Mensaje para mostrar, cuando el sistema de Puntos Finales está deshabilitado',
	'POINTS_ENABLE'						=> 'Habilitar Puntos',
	'POINTS_ENABLE_EXPLAIN'				=> 'Permite a los usuarios usar Puntos Finales',
	'POINTS_GROUP_TRANSFER'				=> 'Transferencia de grupo',
	'POINTS_GROUP_TRANSFER_ADD'			=> 'Añadir',
	'POINTS_GROUP_TRANSFER_EXPLAIN'		=> 'Aquí puede agregar, sustraer o establecer valores para un grupo determinado. También puede enviar un mensaje personal a cada miembro del grupo. Práctico, si le gusta enviar, por ejemplo, Saludos de Navidad con un pequeño regalo (puede usar smilies y BBCodes). Si no desea enviar un mensaje personal con su transferencia, simplemente deje los campos vacíos.',
	'POINTS_GROUP_TRANSFER_FUNCTION'	=> 'Función',
	'POINTS_GROUP_TRANSFER_PM_COMMENT'	=> 'Comentario para su mensaje personal',
	'POINTS_GROUP_TRANSFER_PM_ERROR'	=> '¡Necesita ingresar el Asunto <strong>Y</strong> el comentario para enviar un mensaje personal con su transferencia de grupo!',
	'POINTS_GROUP_TRANSFER_PM_SUCCESS'	=> 'La Transferencia de Grupo se procesó correctamente y<br />los miembros del grupo han recibido su mensaje personal.',
	'POINTS_GROUP_TRANSFER_PM_TITLE'	=> 'Asunto para el mensaje personal',
	'POINTS_GROUP_TRANSFER_SEL_ERROR'	=> '¡No puede hacer una transferencia de grupo a los grupos Robots e Invitados!',
	'POINTS_GROUP_TRANSFER_SET'			=> 'Establecer',
	'POINTS_GROUP_TRANSFER_SUBSTRACT'	=> 'Sustraer',
	'POINTS_GROUP_TRANSFER_SUCCESS'		=> 'La transferencia de grupo se procesó correctamente.',
	'POINTS_GROUP_TRANSFER_USER'		=> 'Grupo de usuario',
	'POINTS_GROUP_TRANSFER_VALUE'		=> 'Valor',
	'POINTS_IMAGES_MEMBERLIST'			=> 'Mostrar una imagen en lugar de puntos en el perfil',
	'POINTS_IMAGES_MEMBERLIST_EXPLAIN'	=> 'Mostrar una imagen en lugar del nombre de los puntos en los perfiles de usuario',
	'POINTS_IMAGES_TOPIC'				=> 'Mostrar una imagen en lugar de puntos',
	'POINTS_IMAGES_TOPIC_EXPLAIN'		=> 'Mostrar una imagen en los temas en lugar del nombre de los puntos',
	'POINTS_LOGS'						=> 'Habilitar Registro de Puntos',
	'POINTS_LOGS_EXPLAIN'				=> 'Permitir a los usuarios ver los registros de transferencia',
	'POINTS_MINIMUM'					=> '&nbsp;Mínimo', // &nbsp; is for alignment of input boxes for Points Bonus Value
	'POINTS_MAXIMUM'					=> 'Máximo',
	'POINTS_NAME'						=> 'Puntos',
	'POINTS_NAME_EXPLAIN'				=> 'El nombre que desea mostrar en lugar de la palabra <em>Puntos</em> en su foro',
	'POINTS_POLL'						=> 'Puntos por nueva encuesta',
	'POINTS_POLL_PER_OPTION'			=> 'Puntos por opción en una encuesta',
	'POINTS_POST_PER_CHARACTER'			=> 'Puntos por caracter en nuevos mensajes',
	'POINTS_POST_PER_WORD'				=> 'Puntos por palabra en nuevos mensajes',
	'POINTS_SHOW_PER_PAGE'				=> 'Número de entradas por página',
	'POINTS_SHOW_PER_PAGE_ERROR'		=> 'El número por página que se muestra debe ser de al menos 5 entradas.',
	'POINTS_SHOW_PER_PAGE_EXPLAIN'		=> 'Introduzca aquí el número de entradas que se deben mostrar por página en los registros y el historial de la lotería (mínimo 5)',
	'POINTS_SMILIES'					=> 'Smilies',
	'POINTS_STATS'						=> 'Mostrar estadísticas de puntos en el índice',
	'POINTS_STATS_EXPLAIN'				=> 'Mostrar estadísticas de puntos en la página principal del foro',
	'POINTS_TOPIC_PER_CHARACTER'		=> 'Puntos por caracter en nuevos temas',
	'POINTS_TOPIC_PER_WORD'				=> 'Puntos por palabra en nuevos temas',
	'POINTS_TRANSFER'					=> 'Permitir Transferencias',
	'POINTS_TRANSFER_EXPLAIN'			=> 'Permitir a los usuarios transferir/donar puntos entre sí',
	'POINTS_TRANSFER_FEE'				=> 'Tarifa de transferencia',
	'POINTS_TRANSFER_FEE_EXPLAIN'		=> 'Porcentaje retenido por transferencia',
	'POINTS_TRANSFER_FEE_ERROR'			=> 'La tarifa de transferencia no puede ser una 100% o más.',
	'POINTS_TRANSFER_PM'				=> 'Notificar al usuario por MP de una transferencia',
	'POINTS_TRANSFER_PM_EXPLAIN'		=> 'Permitir a los usuarios recibir una notificación por MP, cuando alguien les envía puntos',
	'POINTS_WARN'						=> 'Cantidad de puntos que se deben sustraer al usuario por cada advertencia (establezca 0 para desactivar esta función)',

	'REG_POINTS_BONUS'					=> 'Bonificación de Puntos por registro',
	'RESYNC_ATTENTION'					=> '¡No se pueden deshacer las siguientes acciones!',
	'RESYNC_DESC'						=> 'Restablecer puntos de usuario y registros',
	'RESYNC_LOTTERY_HISTORY'			=> 'Restablecer el historial de la lotería',
	'RESYNC_LOTTERY_HISTORY_CONFIRM'	=> '¿Está seguro de querer restabklecer el historial de Lotería?<br />Nota: ¡Esta acción no se puede deshacer!',
	'RESYNC_LOTTERY_HISTORY_EXPLAIN'	=> 'Esto reajustará el historial completo de la Lotería',
	'RESYNC_POINTS'						=> 'Restablecer puntos de usuario',
	'RESYNC_POINTSLOGS'					=> 'Restablecer registros de usuarios',
	'RESYNC_POINTSLOGS_CONFIRM'			=> '¿Está seguro de querer restablecer los registros de usuarios?<br />Nota: ¡Esta acción no se puede deshacer!',
	'RESYNC_POINTSLOGS_EXPLAIN'			=> 'Eliminar todos los registros de usuarios',
	'RESYNC_POINTS_CONFIRM'				=> '¿Está seguro de querer restablecer todos los puntos de usuarios?<br />Nota: ¡Esta acción no se puede deshacer!',
	'RESYNC_POINTS_EXPLAIN'				=> 'Restablecer las cuentas de todos los usuarios a cero',
	'ROBBERY_CHANCE'					=> 'Posibilidad de hacer un robo correctamente',
	'ROBBERY_CHANCE_ERROR'				=> '¡ La probabilidad de un robo correctamente no puede ser superior al 100% !',
	'ROBBERY_CHANCE_EXPLAIN'			=> 'Aquí puede establecer el porcentaje para hacer un robo correctamente (cuanto mayor sea el valor, mayor será la probabilidad de éxito).',
	'ROBBERY_CHANCE_MINIMUM'			=> '¡ La probabilidad de un robo correcto debe ser mayor que 0% !',
	'ROBBERY_ENABLE'					=> 'Habilitar módulo de Robo',
	'ROBBERY_ENABLE_EXPLAIN'			=> 'Esto permitirá a los usuarios usar el módulo de Robo',
	'ROBBERY_LOOSE'						=> 'Penalización por robo fallido',
	'ROBBERY_LOOSE_ERROR'				=> '¡ La penalización por robo no puede ser superior al 100% !',
	'ROBBERY_LOOSE_EXPLAIN'				=> 'Si un robo de usuario falla, el usuario que intentó robar a otra persona perderá x% del valor de robo deseado',
	'ROBBERY_LOOSE_MINIMUM'				=> 'La penalización por robo fallido no debe ser 0%. ¡ Deberías darle al ladrón una penalización de verdad !',
	'ROBBERY_MAX_ROB'					=> 'Porcentaje de robo máximo',
	'ROBBERY_MAX_ROB_ERROR'				=> '¡ No puede establecer un valor superior a 100% !!',
	'ROBBERY_MAX_ROB_EXPLAIN'			=> 'Este valor es el porcentaje de la cantidad de efectivo de los usuarios, que puede ser robada a la vez',
	'ROBBERY_MAX_ROB_MINIMUM'			=> 'El valor máximo para el Robo debe ser mayor que 0%. ¡De lo contrario esta opción no tiene sentido!',
	'ROBBERY_NOTIFY'					=> 'Enviar una notificación al usuario robado',
	'ROBBERY_NOTIFY_EXPLAIN'			=> 'Esto activará la opción de enviar una notificación a los usuarios atacados',
	'ROBBERY_OPTIONS'					=> 'Ajustes del Robo',

	'TOP_POINTS'						=> 'Número de Top miembros ricos para mostrar',
	'TOP_POINTS_EXPLAIN'				=> 'Aquí puede establecer el valor para mostrar los usuarios más ricos. Funciona en diferentes vistas',

	'UPLIST_ENABLE'						=> 'Habilitar Lista de Puntos Finales',
	'UPLIST_ENABLE_EXPLAIN'				=> 'Permite a los usuarios usar la Lista de Puntos Finales',
	'USER_POINTS'						=> 'Puntos del Usuario',
	'USER_POINTS_EXPLAIN'				=> 'Cantidad de puntos que el usuario posee',
));
