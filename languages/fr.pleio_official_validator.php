<?php
$language = array (
  'admin:settings:official_validator_whitelist' => 'Gérez le domaine de la liste blanche',
  'pleio_official_validator:menu:official' => 'Requérir une validation officielle',
  'pleio_official_validator:profile:adminlinks:remove_status' => 'Retirez le statut officiel',
  'pleio_official_validator:whitelist:forms:add:description' => 'Vous pouvez ajouter ici un domaine à la liste blanche. Ceci permettra à un utilisateur d\'etre validé en tant que fonctionnaire au gouvernement.<br>Veuillez tout remplir  <b>après</b> le signe @ (exemple: pleio.nl). Les domaines reproduits sont automatiquement filtrés comme le sont les domaines invalides.',
  'pleio_official_validator:whitelist:forms:add:domain' => 'Vous pouvez remplir ici un nom de domaine',
  'pleio_official_validator:whitelist:forms:domains:description' => 'Voici les domaines déjà dans la liste blanche. Pour retirer un champ, cliquez sur celui-ci.',
  'pleio_official_validator:whitelist:forms:domains:no_domains' => 'Aucun champ sur la liste blanche déjà! Ajoutez-en certains',
  'pleio_official_validator:official:forms:add:description' => 'Remplissez une adresse email officielle ci-dessous pour démarrer le processus de validation. les adresses e-mail ne seront pas disponibles publiquement et vous ne recevrez pas pas communication à cette adresse e-mail autre qu’un email de vérification.',
  'pleio_official_validator:official:forms:add:email' => 'Entrez une adresse email officielle ici.',
  'pleio_official_validator:official:forms:pending:description' => 'Vous avez déjà demandé une validation de l\'adresse email: <b>%s</b>. Cette requête attend votre confirmation. Veuillez svp contrôler votre boîte de réception (ou le dossier spam) pour trouver un message demandant une confirmation. Cliquez sur le lien dans cet e-mail pour valider  votre adresse email.<br> Vous pouvez également demander que l\'email de validation soit renvoyé ou vous pouvez modifier l\'adresse email à laquelle envoyer l\'email de validation.',
  'pleio_official_validator:official:forms:pending:revalidate' => 'Renvoyez un mail de validation.',
  'pleio_official_validator:official:forms:pending:change' => 'Changez l\'adresse email.',
  'pleio_official_validator:validate:subject' => 'Pleio validation de l\'adresse email.',
  'pleio_official_validator:validate:message' => 'Cher %s,
Vous avez demandé à ce que cette adresse email soit validée pour autoriser l\'accès à un contenu officiel.

Veuillez cliquer sur le lien ci-dessous pour valider l\'adresse e-mail:
%s

Ceci est un message automatique , veuillez ne pas y répondre.',
  'pleio_official_validator:official:validated:user_email' => 'Vous avez été validé avec succès en tant qu\'officiel. La validation a été effectuée sur votre adresse email principale <b>%s</b>Puisque ceci fait partie d\'un processus automatique vous ne pouvez annuler votre statut jusqu\'à ce que vous ayez changé votre adresse email.',
  'pleio_official_validator:official:validated' => 'Vous avez été validé avec succès en tant qu\'officiel.  Vous avez utilisé <b>%s</b> en tant qu\'adresse email principale pour valider votre statut.',
  'pleio_official_validator:official_validated:cancel' => 'Pour annuler votre statut officiel, cliquez sur <a href="%s">ce lien</a>',
  'pleio_official_validator:action:official:error:input' => 'Entrée incorrecte pour procéder à la requête de validation.',
  'pleio_official_validator:action:official:error:domain' => 'Champ incorrect pour l\'adresse email',
  'pleio_official_validator:action:official:error:code' => 'Incapable de créer un code de validation, veuillez essayer à nouveau.',
  'pleio_official_validator:action:official:error:save' => 'Il y a une erreur inconnue, veuillez essayer à nouveau.',
  'pleio_official_validator:action:official:success' => 'Mail de validation envoyé avec succès. Veuillez contrôler votre mail.',
  'pleio_official_validator:action:revalidate:error:input' => 'Données insuffisantes pour renvoyer un mail de validation. Veuillez changer votre adresse email pour corriger le problème.',
  'pleio_official_validator:action:revalidate:error:save' => 'Il y a eu une erreur inconnue. Veuillez essayer à nouveau.',
  'pleio_official_validator:action:revalidate:success' => 'Un mail de validation a été renvoyé avec succès.',
  'pleio_official_validator:action:remove_status:error:user' => 'Aucun utilisateur n\'a été utilisé.',
  'pleio_official_validator:action:remove_status:error:save' => 'Une erreur inconnue est apparue lors du retrait de votre statut officiel, veuillez essayer à nouveau.',
  'pleio_official_validator:action:remove_status:success' => 'Votre statut officiel a été supprimé avec succès. Vous pouvez toujours demander à être validé en tant qu\'officiel.',
  'pleio_official_validator:procedures:validate:error:input' => 'Entrée incorrecte pour valider une adresse email.',
  'pleio_official_validator:procedures:validate:error:user' => 'Le GUID fourni n\'est pas un utilisateur.',
  'pleio_official_validator:procedures:validate:error:code' => 'Code de validation invalide. Vous pouvez demander un nouveau lien de validation aux paramètres-> Demande de validation officielle.',
  'pleio_official_validator:procedures:validate:error:save' => 'Il y a eu une erreur inconnue, veuillez essayer à nouveau.',
  'pleio_official_validator:procedures:validate:success' => 'L\'adresse email a été validée avec succès.',
);
add_translation("fr", $language);
