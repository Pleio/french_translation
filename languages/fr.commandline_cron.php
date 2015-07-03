<?php
$language = array (
  'commandline_cron:settings:disable_url' => 'CRON basé sur URL désactivé',
  'commandline_cron:install:title' => 'Instructions d\'installation',
  'commandline_cron:install:description' => 'Afin de configurer votre site Elgg pour utiliser  la ligne de commande votre hébergeur doit vous autoriser à exécuter PHP  sur la lige de commande.<br>
Ce plugin est utile dans deux situations:<br>
1. Votre hébergeur ne l\'autorise pas (w),<br>
ou 2. vous souhaitez prévenir d\'autres utilisateurs du déclenchement du cron.',
  'commandline_cron:install:commandline' => 'Ci-dessous vous trouverez un exemple de ligne de commande pour une installation Elgg.',
  'commandline_cron:install:options' => 'Il y a différentes options de ligne de commande que vous pouvez configurer:<br>
<b>secret (requis):</b> Ceci est requis et est généré par le système pour votre installation Elgg<br>
<b>intervalle (requise):</b> l\'intervalle cron, les options autorisées sont %s<br>
<b>host:</b> l\'hote HTTP de votre installation Elgg<br>
<b>https:</b> que votre site soit sécurisé ou non<br>
<b>memory_limit:</b> la mémoire  maximale autorisée pour PHP à utiliser<br>',
  'commandline_cron:cli:error:secret' => 'Secret non valide, veuillez contrôler les paramètres du plugin',
);
add_translation("fr", $language);
