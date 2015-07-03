<?php
$language = array (
  'simplesaml:error:loggedin' => 'Cette action ne peut pas être exécutée lorsque vous vous connecté',
  'simplesaml:error:no_source' => 'Pas de source d\'authentification définie',
  'simplesaml:error:source_not_enabled' => 'La source d\'authentification fournie n\'est pas active sur ce site',
  'simplesaml:error:source_mismatch' => 'La source d\'authentification fournie ne correspond pas à la connexion au serveur',
  'simplesaml:error:class' => 'Erreur lors de l\'obtention de la configuration de la source d\'authentification :  %s',
  'simplesaml:error:attribute_validation' => 'L\'administrateur du site a configuré des lois d\'authentification supplémentaires qui vous empêche d\'utiliser %s en tant que source d\'authentification.',
  'simplesaml:source:type:unknown' => 'Inconnu',
  'simplesaml:source:type:saml' => 'SAML',
  'simplesaml:source:type:cas' => 'CAS',
  'simplesaml:no_linked_account:title' => 'Aucun compte lié à la source d\'authentification: %s',
  'simplesaml:no_linked_account:description' => 'Nous n\'avons pas pu trouver un compte qui est lié à votre compte externe de %s. Vous pouvez lier votre compte de site avec votre compte externe lorsque vous vous connectez ou vous enregistrez ci-dessous.',
  'simplesaml:forms:register:description' => 'Si vous n\'avez pas de compte sur ce site déjà, vous pouvez enregistrer un compte en cliquant sur le bouton d\'enregistrement. Il peut être nécessaire de fournir certaines informations additionnelles.',
  'simplesaml:no_linked_account:login' => 'Cliquez ici si vous avez déjà un compte sur ce site.',
  'simplesaml:settings:simplesamlphp_path' => 'Voie vers la librairie SimpleSAMLPHP',
  'simplesaml:settings:simplesamlphp_path:description' => 'La voie entière vers SimpleSAMLPHP(http://simplesamlphp.org) Librairie sans barre oblique',
  'simplesaml:settings:simplesamlphp_directory' => 'Répertoire virtuel de la librairie SAMLPHP Simple',
  'simplesaml:settings:simplesamlphp_directory:description' => 'Le répertoire dans lequel la librairie SAMLPHPSimple est située sans barre oblique (/). Par exemple si la voie entière est %ssimplesamlphp/, veuillez entrer simplesamlphp',
  'simplesaml:settings:sources' => 'Configuration de fournisseur de services',
  'simplesaml:settings:sources:name' => 'Source d\'authentification',
  'simplesaml:settings:sources:type' => 'Type',
  'simplesaml:settings:sources:allow_registration' => 'Autorisez enregistrement',
  'simplesaml:settings:sources:auto_create_accounts' => 'Crée automatiquement des comptes',
  'simplesaml:settings:sources:save_attributes' => 'Sauvegarde des attributs d\'authentification',
  'simplesaml:settings:sources:force_authentication' => 'Forcer une authentification',
  'simplesaml:settings:sources:configuration:title' => 'Paramètres de configuration pour: %s',
  'simplesaml:settings:sources:configuration:icon' => 'URL à un icone pour cette connexion (optionnelle)',
  'simplesaml:settings:sources:configuration:icon:description' => 'Vous pouvez fournir un URL à icone pour cette connexion. Il sera utilisé sur l\'écran de connexion et la page paramètres de l\'utilisateur',
  'simplesaml:settings:sources:configuration:external_id' => 'Champ avec un identifiant d\'utilisateur unique de la connexion SAML (optionnel)',
  'simplesaml:settings:sources:configuration:external_id:description' => 'Si vous ne pouvez pas avoir l\'utilisateur unique id des attributs, vous pouvez fournir un champ de  AuthData qui contient l\'identifiant de l\'utilisateur',
  'simplesaml:settings:sources:configuration:auto_link' => 'Effectue un lien automatique avec les comptes existants basés sur les informations de profil  (optionnel)',
  'simplesaml:settings:sources:configuration:auto_link:description' => 'Si la source d\'authentification externe fournit des informations de profile configuré, les deux comptes seront liés automatiquement.',
  'simplesaml:settings:sources:configuration:auto_link:none' => 'N\'autorisez pas le lien automatique',
  'simplesaml:settings:sources:configuration:access' => 'Options d\'accès avancées',
  'simplesaml:settings:sources:configuration:access:description' => 'Vous pouvez restreindre plus avant l\'accès des utilisateurs autorisés SAML en ajoutant un filtre supplémentaire ci-dessous. Vous pouvez autoriser explicitement l\'utilisateur qui correspond aux paramètres ou refuser les utilisateurs qui correspondent aux paramètres.  L\'alignement contrôle toutes les valeurs du champ configuré (par exemple les valeurs de groupe multiple) si une des valeurs correspondant à l\'utilisateur est autorisée ou refusée.Si le nom de champ ou la valeur est vide, aucune validation additionnelle ne sera appliquée.',
  'simplesaml:settings:sources:configuration:access_type:allow' => 'Autorisez l\'accès',
  'simplesaml:settings:sources:configuration:access_type:deny' => 'Dénier l\'accès',
  'simplesaml:settings:sources:configuration:access_matching:exact' => 'Match exact',
  'simplesaml:settings:sources:configuration:access_matching:regex' => 'Match Regex',
  'simplesaml:settings:sources:configuration:access_field' => 'Nom de champ SAML',
  'simplesaml:settings:sources:configuration:access_field:description' => 'Pour contrôler les champs  disponibles, connectez-vous au site Internet  simplesamlphp  et utilisez le lien de source d\'authentification test',
  'simplesaml:settings:sources:configuration:access_value' => 'Valeur SAML',
  'simplesaml:settings:sources:configuration:access_value:description' => 'Ceci peut être une valeur exacte ou une valeur regex selon les paramètres ci-dessus. Pour de l\'aide avec la correspondance regex, contrôlez svp  http://php.net/manual/en/function.preg-match.php',
  'simplesaml:settings:warning:configuration:sources' => 'Aucune source d\'authentification n\'a déjà été configurée.',
  'simplesaml:settings:warning:configuration:simplesamlphp' => 'Veuillez fournir un parcours à la librairie SimpleSAMLPHP pour les options de configurations supplémentaires',
  'simplesaml:settings:idp' => 'Paramètres du fournisseur d\'identité  pour: %s',
  'simplesaml:settings:idp:description' => 'Vous pouvez configurer ici quelles informations de profil sont fournies dans le processus d\'authentification du SAML',
  'simplesaml:settings:idp:show_attributes' => 'Montrez les champs d\'informations de profil configurable',
  'simplesaml:settings:idp:profile_field' => 'Champ profil',
  'simplesaml:settings:idp:attribute' => 'Nom attribut SAML',
  'simplesaml:settings:idp:attribute:description' => 'Lorsqu\'un nom d\'attribut est laissé vide, il ne sera pas fourni dans le processus authentification SAML.',
  'simplesaml:usersettings:connected' => 'Votre compte est connecté avec la source d\'authentification externe %s. Vous pouvez vous connecter à ce site avec votre compte externe si vous désirez.',
  'simplesaml:usersettings:unlink_url' => 'Cliquez ici pour retirer la connexion.',
  'simplesaml:usersettings:unlink_confirm' => 'Etes-vous certain de vouloir interrompre la connexion avec %s',
  'simplesaml:usersettings:toggle_attributes' => 'Montrez les attributs d\'authentification sauvegardés',
  'simplesaml:usersettings:attributes:name' => 'Nom',
  'simplesaml:usersettings:attributes:value' => 'Valeur',
  'simplesaml:usersettings:not_connected' => 'Votre compte n\'est pas connecté avec la source d\'authentification externe%s. Si vous souhaitez vous connecter sur ce site avec votre compte externe, veuillez lier les deux comptes.',
  'simplesaml:usersettings:link_url' => 'Cliquez ici pour lier les deux comptes',
  'simplesaml:usersettings:no_sources' => 'Aucune source d\'authentification externe n\'est disponible, veuillez demander à votre administrateur de configurer ceci.',
  'simplesaml:widget:description' => 'Montrez un widget de connexion avec des sources externes d\'authentification.',
  'simplesaml:widget:select_source' => 'Veuillez sélectionner la source d\'authentification à montrer dans le widget',
  'simplesaml:widget:logged_in' => '<b>%s</b> bienvenue sur <b>%s</b> la communauté',
  'simplesaml:login:no_linked_account' => 'Aucun compte n\'est connecté à la source d\'authentification %s',
  'simplesaml:authorize:error:attributes' => 'Aucun attribut n\'a pu être trouvé à partir de la source d\'authentification, veuillez essayer à nouveau ou contactez l\'administrateur du site',
  'simplesaml:authorize:error:external_id' => 'Aucun identifiant unique n\'a pu être trouvé à partir de la source d\'authentification %s,  veuillez essayer à nouveau ou contactez l\'administrateur de votre site',
  'simplesaml:authorize:error:link' => 'Une erreur inconnue est apparue lors de la connexion avec la source d\'authentification %s',
  'simplesaml:authorize:success' => 'Vous vous êtes connecté avec succès avec votre compte avec la source d\'authentification %s',
  'simplesaml:action:register:error:displayname' => 'Aucun nom d\'affichage a été fournie, veuillez remplir dans votre nom',
  'simplesaml:action:unlink:error' => 'Une erreur inconnue est apparue lors de la suppression du lien avec la source d\'authentification %s',
  'simplesaml:action:unlink:success' => 'Vous avez supprimé avec succès le lien avec la source d\'authentification %s',
);
add_translation("fr", $language);
