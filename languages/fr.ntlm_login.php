<?php
$language = array (
  'admin:administer_utilities:ntlm_login' => 'Configuration de la vérification de la connexion NTLM',
  'ntlm_login:admin:verify' => 'Vérifiez la configuration',
  'ntlm_login:admin:verify:ntlm' => 'Défi NTLM',
  'ntlm_login:admin:verify:ntlm:description' => 'Votre navigateur est configuré pour NTLM et nous avons les informations suivantes à propos de vous.

S\'il existait une fenêtre vous demandant vos identifiants, veuillez vous assurer que ce site Internet est ajouté à la zone Intranet pour Internet Explorer et les URI crédibles pour Firefox. Contrôlez avec votre administrateur de système pour plus d\'informations.',
  'ntlm_login:admin:verify:ntlm:name' => 'Nom',
  'ntlm_login:admin:verify:ntlm:value' => 'Valeur',
  'ntlm_login:admin:verify:ntlm:username' => 'Nom d\'utilisateur',
  'ntlm_login:admin:verify:ntlm:workstation' => 'Nom de la station de travail',
  'ntlm_login:admin:verify:ntlm:ip' => 'Votre adresse IP',
  'ntlm_login:admin:verify:ntlm:fail' => 'L\'entreprise NTLM n\'a pas été couronnée de succès, veuillez vous assurer que votre  navigateur soutient NTLM et que l\'URL de ce site Internet est ajouté à la zone Intranet pour Internet Explorer et les URLS de confiance pour Firefox. Contrôlez votre administrateur de système pour plus d\'informations.',
  'ntlm_login:admin:verify:organisation' => 'Organisations configuées',
  'ntlm_login:admin:verify:organisation:description' => 'Les organisations suivantes sont configurées pour votre adresse IP (%s).',
  'ntlm_login:admin:verify:organisation:fail' => 'Aucune organisation n\'est configurée pour votre adresse IP%s. si vous souhaitez ajouter une organisation pour cette adresse IP, veuillez aller à la page des paramètres.',
  'ntlm_login:admin:verify:match' => 'Organisations adaptées',
  'ntlm_login:admin:verify:match:description' => 'Les organisations suivantes peuvent être adaptées à vous en tant qu\'utilisateur.',
  'ntlm_login:admin:verify:match:fail' => 'Aucune organisation n\'est adaptée à vous en qualité d\'utilisateur sur votre adresse I actuelle.',
  'ntlm_login:admin:verify:user' => 'Utilisateurs adaptés',
  'ntlm_login:admin:verify:user:fail' => 'Aucun utilisateur ne pouvait être adapté à %s.',
  'ntlm_login:admin:verify:user:description' => 'L\'utilisateur %s pourrait être adapté à %s. Cet utilisateur peut se connecter automatiquement au site sur cette station de travail.',
  'ntlm_login:login_extend:link' => 'Lier le compte de cet ordinateur (%s)  à mon compte %s',
  'ntlm_login:settings:organisations' => 'Configuration de l\'organisation',
  'ntlm_login:settings:organisation:name' => 'Nom',
  'ntlm_login:settings:organisation:domain' => 'Nom de domaine',
  'ntlm_login:settings:organisation:ip' => 'Adresses IP',
  'ntlm_login:settings:required' => 'Champs marqués avec une  * sont requis',
  'ntlm_login:settings:ip:description' => 'Les adresses IP doivent être configurés une par ligne dans une des versions suivantes:
1. Version Wildcard: 1.2.3.*
2. Version CIDR : 1.2.3/24 OR 1.2.3.4/255.255.255.0
3. Version Start-End IP: 1.2.3.0-1.2.3.255',
  'ntlm_login:usersettings:not_connected:description' => 'Votre compte n\'est pas déjà lié à tous comptes d\' ordinateur/de domaine',
  'ntlm_login:usersettings:connected:description' => 'Votre compte est lié à un ou plusieurs comptes de domaine/de l\'ordinateur. Vous trouverez ci-dessous une liste des comptes de l\'ordinateur/du domaine,',
  'ntlm_login:action:settings:organisation' => 'Il y eu une erreur de configuration d\'une des organisations, veuillez contrôler tous les champs  (nom: %s, domaine: %s, adresses IP : %s)',
  'ntlm_login:action:unlink:error:hashes' => 'L\'utilisateur fourni n\'a',
  'ntlm_login:action:unlink:error:notfound' => 'Le lien NTLM fourni n\'existe pas avec l\'utilisateur fourni.',
  'ntlm_login:action:unlink:success' => 'Le lien NTLM  a été supprimé',
);
add_translation("fr", $language);
