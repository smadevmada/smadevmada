<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/include/general.php');
// require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/include/connexion_bdd.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/page/classe/MailContact.php');

function escape_string($text)
{
	// $text = $GLOBALS['DATABASE']->quote($text);
	return $text;
}

# Récupération des données envoyées
$nom_contact = $_POST['nom'];
$email_contact = $_POST['email'];
$objet_contact = $_POST['objet'];
$msg_contact = $_POST['msg'];

if (!empty($nom_contact) && !empty($email_contact) && !empty($objet_contact) && !empty($msg_contact))
{
	$sql_insert_contact = "
		INSERT INTO
			contact_client
		SET
			date_cc = NOW(),
			nom_cc = '".escape_string($nom_contact)."',
			email_cc = '".escape_string($email_contact)."',
			objet_cc = '".escape_string($objet_contact)."',
			message_cc = '".escape_string($msg_contact)."'
	";
	// $GLOBALS['DATABASE']->query($sql_insert_contact);

	$mail_contact = new MailContact;

	$mail_contact->add_nom($nom_contact);
	$mail_contact->add_destinataire($email_contact);
	$mail_contact->add_objet($objet_contact);
	$mail_contact->add_message($msg_contact);

	$mail_contact->envoie();
}
?>
