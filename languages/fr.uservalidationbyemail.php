<?php
$language = array (
  'admin:users:unvalidated' => 'Invalidé',
  'email:validate:subject' => '%s Veuillez confirmer votre adresse email pour %s!',
  'email:validate:body' => '%s,

Avant de pouvoir commencer  %s, vous devez confirmez votre adresse email .

Veuillez confirmer votre adresse email en cliquant sur le lien ci-dessous:

%s

Si vous ne pouvez pas cliquer sur le lien, copiez et plaquez le sur votre navigateur automatiquement.

%s
%s',
  'email:confirm:success' => 'Vous avez confirmé votre adresse email!',
  'email:confirm:fail' => 'Votre adresse email n\'a pas pu être vérifiée...',
  'uservalidationbyemail:registerok' => 'Pour activer votre compte, veuillez confirmer votre adresse email en cliquant sur le lien que nous venons de vous envoyer.',
  'uservalidationbyemail:login:fail' => 'Votre compte n\'est pas validé donc la tentative d\'identification a échoué. Un autre mail de validation a été envoyé.',
  'uservalidationbyemail:admin:no_unvalidated_users' => 'Pas d\'utilisateurs invalidés',
  'uservalidationbyemail:admin:unvalidated' => 'Invalidé',
  'uservalidationbyemail:admin:user_created' => 'Enregistré%s',
  'uservalidationbyemail:admin:resend_validation' => 'Validation renvoyé',
  'uservalidationbyemail:admin:validate' => 'Valider',
  'uservalidationbyemail:admin:delete' => 'Effacer',
  'uservalidationbyemail:confirm_validate_user' => 'Valider %s?',
  'uservalidationbyemail:confirm_resend_validation' => 'Renvoyer un mail de validation à %s?',
  'uservalidationbyemail:confirm_delete' => 'Effacer %s?',
  'uservalidationbyemail:confirm_validate_checked' => 'Valider les utilisateurs contrôlés?',
  'uservalidationbyemail:confirm_resend_validation_checked' => 'Renvoyez validation aux utilisateurs controlés?',
  'uservalidationbyemail:confirm_delete_checked' => 'Supprimez les utilisateurs controlés',
  'uservalidationbyemail:check_all' => 'Tout',
  'uservalidationbyemail:errors:unknown_users' => 'les utilisateurs inconnus',
  'uservalidationbyemail:errors:could_not_validate_user' => 'Ne pouvait pas valider l\'utilisateur',
  'uservalidationbyemail:errors:could_not_validate_users' => 'Ne pouvait pas valider tous les utilisateurs controlés',
  'uservalidationbyemail:errors:could_not_delete_user' => 'Ne pouvait pas supprimer l\'utilisateur',
  'uservalidationbyemail:errors:could_not_delete_users' => 'Ne pouvait pas supprimer tous les utilisateurs controlés',
  'uservalidationbyemail:errors:could_not_resend_validation' => 'Ne pouvait pas renvoyer une requête de validation',
  'uservalidationbyemail:errors:could_not_resend_validations' => 'Ne pouvait pas renvoyer des requêtes de validation aux utilisateurs controlés',
  'uservalidationbyemail:messages:validated_user' => 'Utilisateur validé',
  'uservalidationbyemail:messages:validated_users' => 'Tous les utilisateurs contrôlés validés.',
  'uservalidationbyemail:messages:deleted_user' => 'Utilisateur effacé',
  'uservalidationbyemail:messages:deleted_users' => 'Tous les utilisateurs effacés contrôlés.',
  'uservalidationbyemail:messages:resent_validation' => 'Requetle de validation renvoyée',
  'uservalidationbyemail:messages:resent_validations' => 'Requêtes de validation renvoyées à tous les utilisateurs contrôlés.',
);
add_translation("fr", $language);
