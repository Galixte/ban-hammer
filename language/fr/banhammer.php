<?php
/**
 *
 * Ban Hammer. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017 phpBB Modders <https://phpbbmodders.net>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'BANNED_ERROR'		=> 'Des erreurs se sont produites !',
	'BANNED_SUCCESS'	=> 'Toutes les actions se sont effectuées avec succès !',

	'ERROR_BAN_EMAIL'	=> 'Échec lors du bannissement de l’adresse e-mail.',
	'ERROR_BAN_IP'		=> 'Échec lors du bannissement de l’adresse IP.',
	'ERROR_BAN_USER'	=> 'Échec lors du bannissement du nom d’utilisateur.',
	'ERROR_DEL_POSTS'	=> 'Échec lors de la suppression des messages du membre.',
	'ERROR_MOVE_GROUP'	=> 'Échec lors du déplacement du membre dans le groupe sélectionné.',
	'ERROR_SFS'			=> 'Erreur rencontrée lors de l’envoi du rapport à la base de données du service « Stop Forum Spam »',

	'BH_BAN_EMAIL'			=> 'Bannir l’adresse e-mail de ce membre',
	'BH_BAN_GIVE_REASON'	=> 'Raison affichée au membre banni',
	'BH_BAN_IP'				=> 'Bannir l’adresse IP de ce membre',
	'BH_BAN_IP_EXPLAIN'		=> '<strong>Information :</strong> la plupart des membres qui possèdent une adresse IP dynamique ont seulement besoin de redémarrer leur routeur / modem pour en obtenir une nouvelle. Il se peut qu’un jour un membre légitime sur le forum se voit attribué une adresse IP bannie. Les spammeurs utilisent également des serveurs proxy ou TOR pour protéger leur anonymat ce qui rend le bannissement d’adresse IP inutile.',
	'BH_BAN_LENGTH'			=> 'Bannir ce membre durant %s',
	'BH_BAN_REASON'			=> 'Raison interne pour ce bannissement',
	'BH_BAN_USER'			=> 'Bannir ce membre durant %s',
	'BH_BAN_USER_PERM'		=> 'Bannir ce nom d’utilisateur de manière permanente',
	'BH_BAN_EMAIL_PERM'		=> 'Bannir cette adresse e-mail de manière permanente',
	'BH_BAN_EMAIL_FOR'		=> 'Bannir cette adresse e-mail durant %s',
	'BH_BAN_IP_PERM'		=> 'Bannir cette adresse IP de manière permanente',
	'BH_BAN_IP_FOR'			=> 'Bannir cette adresse IP durant %s',
	'BH_BANNED'				=> 'Ce membre est banni',

	'BH_DEL_AVATAR'		=> 'Supprimer l’avatar de ce membre',
	'BH_DEL_PRIVMSGS'	=> 'Supprimer les messages privés de ce membre',
	'BH_DEL_POSTS'		=> 'Supprimer les messages de ce membre',
	'BH_DEL_PROFILE'	=> 'Supprimer les champs du profil de ce membre',
	'BH_DEL_SIGNATURE'	=> 'Supprimer la signature de ce membre',

	'BH_MOVE_GROUP'	=> 'Déplacer ce membre dans le groupe « %s »', // %s will be a group name

	'BH_REASON'		=> 'Raison interne : « %s »', // %s will be the reason
	'BH_REASON_USER'	=> 'Raison affichée au membre banni : « %s »', // %s will be the reason

	'BH_SUBMIT_SFS'	=> 'Soumettre l’interruption du spam sur le forum',

	'BH_THIS_USER'	=> 'Bannir massivement ce membre',

	'SFS_REPORT'	=> 'Signaler ce membre pour interrompre le spam sur le forum',
	'SURE_BAN'		=> 'Confirmer le bannissement de : <strong>%s</strong>.', // %s will be a username.

	'THIS_WILL'	=> 'Cela aura pour conséquence de',
));
