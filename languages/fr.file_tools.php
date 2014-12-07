<?php 

	$french = array(
		'file_tools' => "Outils Fichiers",
		'file:uploadfailed:zip' => "Le fichier doit avoir l'extension suivante : zip",
	
		'file_tools:file:actions' => 'Actions',
	
		'file_tools:list:sort:type' => 'Type',
		'file_tools:list:sort:time_created' => 'Créé à',
		'file_tools:list:sort:asc' => 'croissant',
		'file_tools:list:sort:desc' => 'Décroissant',
	
		// object name
		'item:object:folder' => "Répertoire",
	
		// menu items
		'file_tools:menu:mine' => "Vos répertoires",
		'file_tools:menu:user' => "Les répertoires de %s",
		'file_tools:menu:group' => "Répertoires du groupe",
		
		// group tool option
		'file_tools:group_tool_option:structure_management' => "Autoriser la gestion des répertoires par les membres?",
		
		// views
		'file_tools:key' => "Les docs clés du site",
		
		// filters
		'file_tools:filters:key' => "Les docs clés du site",
		'file_tools:filters:all' => "Tous les fichiers",
		'file_tools:filters:mine' => "Mes fichiers",
		'file_tools:filters:friend' => "Les fichiers de mes contacts", 
		
		// object
		'file_tools:object:files' => "%s fichiers dans ce répertoire",
		'file_tools:object:no_files' => "Aucun fichier dans ce répertoire",
	
		// input - folder select
		'file_tools:input:folder_select:main' => "Principal",
	
		// list
		'file_tools:list:title' => "Liste des répertoires",
		
		'file_tools:list:folder:main' => "Principal",
		'file_tools:list:files:none' => "Aucun fichier dans ce répertoire",
		'file_tools:list:select_all' => 'Sélectionner tous',
		'file_tools:list:deselect_all' => 'Déselectionner tous',
		'file_tools:list:download_selected' => 'Télécharger la sélection',
		'file_tools:list:delete_selected' => 'Supprimer les fichiers sélectionnés',
		'file_tools:list:alert:not_all_deleted' => 'Tous les fichiers ne peuvent être supprimés',
		'file_tools:list:alert:none_selected' => 'Aucune sélection',
		'file_tools:file:edit' => 'Editer',
		
	
		'file_tools:list:tree:info' => "Le saviez-vous?",
		'file_tools:list:tree:info:1' => "Vous pouvez prendre et déposer les fichiers vers le bon répertoire pour les organiser",
		'file_tools:list:tree:info:2' => "Vous pouvez double cliquer sur un répertoire pour afficher tous ses sous-répertoires",
		'file_tools:list:tree:info:3' => "Vous pouvez ré-ordonner les répertoires en les déplaçants dans l'arborescence",
		'file_tools:list:tree:info:4' => "Vous pouvez complètement modifier la structure de vos fichiers!",
		'file_tools:list:tree:info:5' => "Lors de la suppression d'un répertoire, vous pouvez choisir de supprimer l'ensemble des fichiers qu'il contient!",
		'file_tools:list:tree:info:6' => "Lorsque vous supprimez un répertoire, tous les sous-répertoires le seront également!",
		'file_tools:list:tree:info:7' => "Message aléatoire!",
		'file_tools:list:tree:info:8' => "Lorsque vous supprimez un répertoire mais pas son contenu, les fichiers apparaissent à la racine!",
		'file_tools:list:tree:info:9' => "Un nouveau dossier peut être placé directement dans un sous-répertoire!",
		'file_tools:list:tree:info:10' => "Vous pouvez choisir le répertoire dans lequel vous souhaitez ajouter un fichier!",
		'file_tools:list:tree:info:11' => "Le déplacement des fichier est seulement disponible dans la liste et non dans la gallerie!",
		'file_tools:list:tree:info:12' => "Vous pouvez personnaliser les droits d'accès aux fichiers et aux répertoires!",

	
		'file_tools:list:files:options:sort_title' => 'Tri',
		'file_tools:list:files:options:view_title' => 'Vue',
	
		'file_tools:usersettings:time' => 'Affichage de l\'heure',
		'file_tools:usersettings:time:description' => 'Change l\'affichage de l\'heure',
		'file_tools:usersettings:time:default' => 'Affichage de l\'heure par défaut',
		'file_tools:usersettings:time:date' => 'Date',
		'file_tools:usersettings:time:days' => 'il y a',
		
		// new/edit
		'file_tools:new:title' => "Nouveau répertoire",
		'file_tools:edit:title' => "modifier le répertoire",
		'file_tools:forms:edit:title' => "Titre",
		'file_tools:forms:edit:description' => "Description",
		'file_tools:forms:edit:parent' => "Selectionnez un répertoire parent",
		'file_tools:forms:edit:change_children_access' => "Mettre à jour les droits d'accès sur tous les sous répertoires",
		'file_tools:forms:edit:change_files_access' => "Mettre à jour les droits d'accès sur tous fichiers et sous répertoires",
		'file_tools:forms:browse' => 'Naviguer..',
		'file_tools:forms:empty_queue' => 'Vider la file d\'attente',
		'file_tools:forms:isakey' => 'Ce fichier est un "Doc clé" du site',
		
		'file_tools:folder:delete:confirm_files' => "Souhaitez-vous aussi supprimer tous les fichiers de ces répertoires",
	
		// actions
		// edit
		'file_tools:action:edit:error:input' => "Incorrect input to create/edit a file folder",
		'file_tools:action:edit:error:owner' => "Could not find the owner of the file folder",
		'file_tools:action:edit:error:folder' => "No folder to create/edit",
		'file_tools:action:edit:error:parent_guid' => "Répertoire parent incorrect, ce ne peut être le répertoire lui-même",
		'file_tools:action:edit:error:save' => "Unknown error occured while saving the file folder",
		'file_tools:action:edit:success' => "Répertoire mis à jour",
	
		'file_tools:action:move:parent_error' => "On ne peut déplacer un répertoire sur lui même",
		
		// delete
		'file_tools:actions:delete:error:input' => "Invalid input to delete a file folder",
		'file_tools:actions:delete:error:entity' => "The given GUID could not be found",
		'file_tools:actions:delete:error:subtype' => "The given GUID is not a file folder",
		'file_tools:actions:delete:error:delete' => "An unknown error occured while deleting the file folder",
		'file_tools:actions:delete:success' => "Le répertoire a été supprimé",
	
		'file_tools:upload:new' => 'Charger un fichier ZIP',
		'file_tools:upload:form:choose' => 'Choisissez le fichier',
		'file_tools:upload:form:choose:zip' => 'Choisissez le fichier zip',
		'file_tools:upload:form:info' => 'Cliquez "Choisissez un fichier" pour charger un fichier',
		'file_tools:upload:form:zip:info' => "Vous pouvez charger un fichier ZIP. Il sera extrait et chaque fichier sera importé séparément. Si votre ZIP contient des répertoires, ils seront également importés. Les types de fichiers non autorisés ne seront pas importés.",
	
		//errors
		'file_tools:error:pageowner' => 'Erreur.',
		'file_tools:error:nofilesextracted' => 'Aucun fichier autorisé à télécharger.',
		'file_tools:error:cantopenfile' => 'Le fichier Zip ne peut pas être ouvert (Vérifiez s\'il s\'agit bien d\'un fichier zip).',
		'file_tools:error:nozipfilefound' => 'Le fichier n\'est pas un .zip',
		'file_tools:error:nofilefound' => 'Choisissez un fichier à charger.',
	
		//messages
		'file_tools:error:fileuploadsuccess' => 'Le fichier Zip a été chargé et extrait.',
		
		// move
		'file_tools:action:move:success:file' => "Le fichier a été déplacé",
		'file_tools:action:move:success:folder' => "Le répertoire a été déplacé",
		
		// buld delete
		'file_tools:action:bulk_delete:success:files' => "%s fichiers ont été supprimés",
		'file_tools:action:bulk_delete:error:files' => "Erreur lors de la suppression",
		'file_tools:action:bulk_delete:success:folders' => "%s répertoires supprimés",
		'file_tools:action:bulk_delete:error:folders' => "Erreur lors de la suppression",
		
		// reorder
		'file_tools:action:folder:reorder:success' => "Répertoires reclassés",
		
		//settings
		'file_tools:settings:allowed_extensions' => 'Extensions autorisées (séparées par des VIRGULES)',
		'file_tools:settings:user_folder_structure' => 'Utiliser les répertoires',
		'file_tools:settings:sort:default' => 'Ordre de tri par défaut',
		'file_tools:settings:key' => 'Activer les "Docs clés"',
		'file_tools:settings:webdav_url' => 'Lien WEBDAV',
	
		'file:type:application' => 'Application',
		'file:type:text' => 'Texte',

		// widgets
		// file tree
		'widgets:file_tree:title' => "Répertoires",
		'widgets:file_tree:description' => "Présentez vos répertoires",
		
		'widgets:file_tree:edit:select' => "Sélectionnez les répertoires à présenter",
		'widgets:file_tree:edit:show_content' => "Montrer le contenu des répertoires",
		'widgets:file_tree:no_folders' => "Aucun répertoire configuré",
		'widgets:file_tree:no_files' => "Aucun fichier configuré",
		'widgets:file_tree:more' => "+ de répertoires",
	
		'widget:file:edit:show_only_featured' => 'Montrer seulement les fichiers',
		
		'widget:file_tools:show_file' => 'Fichier à présenter (widget)',
		'widget:file_tools:hide_file' => 'Fichier à ne plus présenter',
	
		'widgets:file_tools:more_files' => '+ de fichiers',
		
		// Group files
		'widgets:group_files:description' => "Voir les derniers fichiers du groupe",
		
		// index_file
		'widgets:index_file:description' => "Voir les derniers fichiers",
	
	);
	
	add_translation("fr", $french);
	