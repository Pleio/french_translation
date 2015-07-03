<?php
$language = array (
  'security_tools' => 'Outils de sécurité',
  'security_tools:settings:secure_upgrade' => 'Mise à jour sécurisée.php',
  'security_tools:settings:secure_upgrade:description' => 'Avec une mise à jour sécurisée. php. identifiée dans les administrateurs du site peut exécuter une mise à jour.php ou vous aurez besoin d\'un code spécial (voir lien dessous)',
  'security_tools:settings:mails' => 'Mails de sécurité',
  'security_tools:settings:mails_admin_admins' => 'Prévenir les administrateurs sur l\'admini défaite',
  'security_tools:settings:mails_admin_admins:description' => 'Prévenir tous les autres administrateurs s\'il y a un utilisateur qui a été nommé admin ou a ses droits  d\'administrateurs supprimés.',
  'security_tools:settings:mails_admin_user' => 'Prévenir l\'utilisateur sur l\'administration défaite',
  'security_tools:settings:mails_admin_user:description' => 'Prévenir l\'utilisateur lorsque son rôle est ajouté ou retiré',
  'security_tools:settings:mails_password_change' => 'Prévenir l\'utilisateur sur le changement de mot de passe',
  'security_tools:settings:mails_password_change:description' => 'Prévenir l\'utilisateur si le mot de passe a changé via la page des paramètres',
  'security_tools:settings:mails_banned' => 'Prévenir l\'utilisateur sur le (dé)banissement',
  'security_tools:settings:mails_banned:description' => 'Prévenir l\'utilisateur s\'il/elle est (dé)bannie par quelqu\'un',
  'security_tools:settings:mails_verify_email_change' => 'Vérifiez le changement d\'adresse email',
  'security_tools:settings:mails_verify_email_change:description' => 'Si un utilisateur change son adresse email, la nouvelle adresse devrait d\'abord être vérifiée  avant que le changement soit appliqué. Un mail avec un lien de vérification sera envoyée à la nouvelle adresse. L\'utilisateur également recevra  une note à l\'ancienne adresse email sur un changement réussi.',
  'security_tools:settings:other' => 'Autre',
  'security_tools:settings:disable_autocomplete_on_password_fields' => 'Désactiver semi-automatique sur les champs de mot de passe',
  'security_tools:settings:disable_autocomplete_on_password_fields:description' => 'Les données entrées dans ces champs seront cachées par le navigateur. Un agresseur qui  peut accéder au navigateur de la victime pourrait voler ces informations. Ceci est spécialement important si l\'application utilisée dans les ordinateurs partagés tels que les cyber cafés ou terminaux d\'aéroport. Si vous désactivez ceci, les outils de gestion du mot de passe ne peuvent plus remplir ces champs. Le support pour l\'attribut autocomplet peut être un navigateur spécifique.',
  'security_tools:site_secret:warning' => 'Après vous générez le secret du site, <a href="%s">veuillez contrôler</a>la nouvelle mise à jour .code php dont vous aurez besoin.',
  'security_tools:usersettings:email:request' => 'Afin de compléter votre adresse email, changez le contrôle de votre %s  compte',
  'security_tools:email_change_confirmation:error:user' => 'Vous n’êtes pas l\'utilisateur qui a effectué cette requête.',
  'security_tools:email_change_confirmation:error:request' => 'Il n\'y a pas de changement d\'adresse email en attente',
  'security_tools:email_change_confirmation:error:code' => 'Le code de validation fourni est incorrect, veuillez contrôler votre message email.',
  'security_tools:notify_admins:make_admin:subject' => 'Un nouveau administrateur au site a été assigné pour %s',
  'security_tools:notify_admins:make_admin:message' => 'Bonjour,

L\'utilisateur % s\'est vu assigner un nouvel administrateur pour le site par %s.
Contrôlez le profil du nouvel administrateur du site ici %s..

Si vous croyez que ceci a été fait par erreur, veuillez vous connecter ici et annulez cette action',
  'security_tools:notify_admins:remove_admin:subject' => 'Un administrateur du site a été retiré de %s',
  'security_tools:notify_admins:remove_admin:message' => 'Bonjour,

L\'utilisateur %s n\'est plus un administrateur du site. Cette mesure a été prise par  %s.
Contrôlez le profil de l\'administrateur de l\'ancien site ici %s.

Si vous croyez que ceci a été fait par erreur, veuillez vous connecter  %s ici et annulez cette action',
  'security_tools:notify_user:make_admin:subject' => 'Vous avez conféré des droits à l\'administrateur du site sur %s',
  'security_tools:notify_user:make_admin:message' => 'Bonjour %s,
Vous avez affecté un administrateur au nouveau site par  %s.
Profitez des nouveaux droits que vous avez trouvés en vous connectant ici%',
  'security_tools:notify_user:remove_admin:subject' => 'Vos droits d\'administrateur du site pour  %s ont été supprimés',
  'security_tools:notify_user:remove_admin:message' => 'Bonjour %s,

Votre rôle en tant qu\'administrateur du site a été supprimé par %s.

Si vous croyez que ceci a été fait par erreur, veuillez contacter un des autres administrateurs du site.',
  'security_tools:notify_user:password:subject' => 'Votre mot de passe a été modifié',
  'security_tools:notify_user:password:message' => 'Bonjour %s,

Votre mot de passe pour %s a été modifié

Si vous n\'avez pas fait cela ou ne l\'avez pas demandé. Veuillez aller à %s et demander un nouveau mot de passe ou contactez l\'administrateur du site.',
  'security_tools:notify_user:email_change_request:subject' => 'Demande de modification d\'adresse email pour  %s',
  'security_tools:notify_user:email_change_request:message' => 'Bonjour %s,

Vous avez demandé à changer votre adresse email sur %s sur cette adresse email.

Afin de compléter le clic requis cliquez sur ce lien:
%s',
  'security_tools:notify_user:email_change:subject' => 'Adresse email changée pour %s',
  'security_tools:notify_user:email_change:message' => 'Bonjour %s,

Votre adresse email sur %s a été changée.

Si vous ne l\'avez pas fait ou avez réclamé ceci. Veuillez contacter l\'administrateur du site.',
  'security_tools:notify_user:ban:subject' => 'Vous avez été exclu de %s',
  'security_tools:notify_user:ban:message' => 'Bonjour %s,

Votre compte sur %s a été exclu, vous ne pouvez plus utiliser ce site.

Si vous croyez que cela a été fait par erreur, veuillez contacter un des administrateurs du site.',
  'security_tools:notify_user:unban:subject' => 'Vous n’etes plus exclu de%s',
  'security_tools:notify_user:unban:message' => 'Bonjour %s,

Votre compte sur %s n\'est plus exclu, vous pouvez commencer à utiliser le site à nouveau.
Pour connecter allez à %s.

Si vous croyez que ceci a été fait par erreur, veuillez contacter un des administrateurs du site.',
);
add_translation("fr", $language);
