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
	'ACP_BAN_EMAIL'		=> 'Bannir l’adresse e-mail des membres',
	'ACP_BAN_IP'		=> 'Bannir l’adresse IP des membres',
	'ACP_BAN_IP_EXPLAIN'	=> '<strong>Information :</strong> la plupart des membres qui possèdent une adresse IP dynamique ont seulement besoin de redémarrer leur routeur / modem pour en obtenir une nouvelle. Il se peut qu’un jour un membre légitime sur le forum se voit attribué une adresse IP bannie. Les spammeurs utilisent également des serveurs proxy ou TOR pour protéger leur anonymat ce qui rend le bannissement d’adresses IP inutile.',

	'ACP_DEL_AVATAR'	=> 'Supprimer l’avatar des membres',
	'ACP_DEL_PRIVMSGS'	=> 'Supprimer les messages privés des membres',
	'ACP_DEL_POSTS'		=> 'Supprimer les messages des membres',
	'ACP_DEL_PROFILE'	=> 'Supprimer les champs du profil des membres',
	'ACP_DEL_SIGNATURE'	=> 'Supprimer la signature des membres',

	'ACP_GROUP_MISSING'	=> 'Le groupe « %s » n’existe pas.', // %s is the group name.

	'ACP_MOVE_GROUP'			=> 'Déplacer dans le groupe',
	'ACP_MOVE_GROUP_EXPLAIN'	=> 'Permet de saisir le nom du groupe dans lequel les membres bannis seront déplacés. Ce groupe devient celui par défaut.<br /><strong>Si aucun choix n’est proposé dans le menu déroulant hormis : <em>« Aucun groupe n’a été indiqué. »</em>, c’est qu’il est nécessaire de créer un groupe supplémentaire pour accueillir les membres bannis.</strong>',
	'BAN_LENGTH_EXPLAIN'	=> 'Permet de bannir le membre suivant la durée paramétrée et si l’une des options ci-dessus est activée. La durée peut aussi être déterminée lors du bannissement massif.',
	'SETTINGS_ERROR'		=> 'Une erreur s’est produite lors de l’enregistrement des paramètres. Merci de soumettre le rapport d’erreur.',
	'SFS_API_KEY'			=> 'Clé de l’API du service « Stop Forum Spam »',
	'SFS_API_KEY_EXPLAIN'	=> 'Permet de signaler automatiquement les spammeurs au service « Stop Forum Spam ». Pour cela une clé de l’API est nécessaire et disponible depuis la page : <a href="http://www.stopforumspam.com/signup">http://www.stopforumspam.com/signup</a>.',
	'SFS_NEEDS_CURL'		=> '<span style="color:red;">Votre serveur a besoin que la librairie « cURL » soit installée pour utiliser le service anti-spam sur le forum.</span>',
));
