<?php

$pages = array(
	'accueil' => array(
		'nom' => 'Accueil',
    	'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
    ),
    'membre' => array(
        'nom' => 'Mon compte',
        'elements' => array(
		    'membre_tags' => array(
		        'nom' => 'Tags',
		        'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
		    ),
		    'membre_oeuvres' => array(
		        'nom' => 'Oeuvres',
		        'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
		    ),
		    'membre_assemblee_generale' => array(
		        'nom' => 'Présence prochaine AG',
		        'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
		    ),
		    'membre_cotisation' => array(
		        'nom' => 'Ma cotisation',
		        'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
		    ),
		    'membre_coordonnees' => array(
		        'nom' => 'Mes coordonnées',
		        'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
		    ),
		    'membre_wiki' => array(
		        'nom' => 'Accès  wiki',
		        'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
		    ),
		),
    ),
    'membres' => array(
        'nom' => 'Membres',
        'elements' => array(
		    'personnes_physiques' => array(
		        'nom' => 'Personnes physiques',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'personnes_morales' => array(
		        'nom' => 'Personnes morales',
		    'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'relances' => array(
		        'nom' => 'Relances',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'statistiques' => array(
		        'nom' => 'Statistiques',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'mailing' => array(
		        'nom' => 'Mailing',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'assemblee_generale' => array(
		        'nom' => 'Assemblée générale',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
        ),
    ),
    'site' => array(
        'nom' => 'Site',
        'elements' => array(
		    'site_feuilles' => array(
		        'nom' => 'Feuilles',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
                'module' => 2,
            ),
		    'site_rubriques' => array(
		        'nom' => 'Rubriques',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
                'module' => 2,
            ),
		    'site_articles' => array(
		        'nom' => 'Articles',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
                'module' => 2,
            ),
        ),
    ),
    'rendez_vous' => array(
        'nom' => 'Rendez-vous',
        'elements' => array(
		    'rendez_vous' => array(
		        'nom' => 'Rendez-vous',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
        ),
    ),
    'forum' => array(
        'nom' => 'Forum',
        'elements' => array(
		    'forum_inscriptions' => array(
		        'nom' => 'Inscriptions',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'forum_facturation' => array(
		        'nom' => 'Factures',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'forum_projet' => array(
		        'nom' => 'Projet PHP',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'forum_sessions' => array(
		        'nom' => 'Sessions',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'forum_sessions_notees' => array(
		        'nom' => 'Vote des sessions',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'forum_conferenciers' => array(
		        'nom' => 'Conférenciers',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'forum_planning' => array(
		        'nom' => 'Planning',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'forum_planning_vote' => array(
		        'nom' => 'Vote Planning',
		        'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
		    ),
        ),
    ),
    'annuaire' => array(
        'nom' => 'Annuaire pro',
        'elements' => array(
		    'annuairepro_membres' => array(
		        'nom' => 'Membres',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
                'module' => 1,
            ),
        ),
    ),
    'trophee' => array(
        'nom' => 'Trophée',
        'elements' => array(
		    'trophee_projets' => array(
		        'nom' => 'Projets nominés',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
        ),
    ),
    'apero' => array(
        'nom' => 'Apéros PHP',
        'elements' => array(
		    'aperos' => array(
		        'nom' => 'Apéros',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
                'module' => 0,
            ),
		    'aperos_inscrits' => array(
		        'nom' => 'Inscrits',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
                'module' => 0,
            ),
        ),
    ),
    'planete' => array(
        'nom' => 'Planète PHP FR',
        'elements' => array(
		    'planete_flux' => array(
		        'nom' => 'Flux',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'planete_billet' => array(
		        'nom' => 'Billets',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
        ),
    ),
    'divers' => array(
        'nom' => 'Divers',
        'elements' => array(
		    'configuration' => array(
		        'nom' => 'Configuration',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'logs' => array(
		        'nom' => 'Logs',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
		    'logsvn' => array(
		        'nom' => 'Logs SVN',
		        'niveau' => AFUP_DROITS_NIVEAU_ADMINISTRATEUR,
		    ),
        ),
    ),
    'se_deconnecter' => array(
        'nom' => 'Se déconnecter',
        'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
    ),
    'connexion' => array(
        'nom' => 'Connexion',
    	'masquee' => true,
        'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
    ),
    'mot_de_passe_perdu' => array(
        'nom' => 'Mot de passe perdu',
    	'masquee' => true,
    	'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
    ),
    'message' => array(
        'nom' => 'Message',
    	'masquee' => true,
    	'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
    ),
	'inscription' => array(
	    'nom' => 'Inscription',
		'masquee' => true,
		'niveau' => AFUP_DROITS_NIVEAU_MEMBRE,
	),
);