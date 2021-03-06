<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envoi de useless',
	'heading' => 'Envoi du nouveau formulaire',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Coché',
		'checkbox_unchecked' => 'Non coché',
		'submitted_from' => 'Formulaire envoyé depuis le site web :%s',
		'submitted_by' => 'Adresse IP du visiteur :%s',
		'too_many_submissions' => 'Trop d\'envois effectués récemment à partir de cette adresse IP',
		'failed_to_send_email' => 'Echec de l\'envoi du courrier électronique',
		'invalid_reCAPTCHA_private_key' => 'Clé privée reCAPTCHA non valide',
		'invalid_reCAPTCHA2_private_key' => 'Clé privée reCAPTCHA 2.0 non valide.',
		'invalid_reCAPTCHA2_server_response' => 'Réponse du serveur à l\'outil reCAPTCHA 2.0 non valide.',
		'invalid_field_type' => 'Type de champ inconnu « %s »',
		'invalid_form_config' => 'Le champ « %s » a une configuration non valide.',
		'unknown_method' => 'Méthode de requête inconnue du serveur'
	),
	'email' => array(
		'from' => 'milic.steph@gmail.com',
		'to' => 'milic.steph@gmail.com'
	),
	'fields' => array(
		'custom_U1231' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Name » est obligatoire.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'E-mail',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « E-mail » est obligatoire.',
				'format' => 'Le champ « E-mail » contient une adresse électronique non valide.'
			)
		),
		'custom_U1239' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Pro E-mail',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Pro E-mail » est obligatoire.'
			)
		),
		'custom_U1258' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'City',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « City » est obligatoire.'
			)
		),
		'custom_U1250' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'State',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « State » est obligatoire.'
			)
		),
		'custom_U1245' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Zip Code',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Zip Code » est obligatoire.'
			)
		),
		'custom_U1235' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Country',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Country » est obligatoire.'
			)
		),
		'custom_U1227' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Message » est obligatoire.'
			)
		)
	)
);

process_form($form);
?>
