<?php

return [

    'company' => [
        'name'              => 'Nom',
        'email'             => 'Email',
        'phone'             => 'Téléphone',
        'address'           => 'Adresse',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => 'Localisation',
        'date' => [
            'format'        => 'Format de date',
            'separator'     => 'Séparateur de date',
            'dash'          => 'Tiret (-)',
            'dot'           => 'Point (.)',
            'comma'         => 'Virgule (,)',
            'slash'         => 'Slash (/)',
            'space'         => 'Espace ( )',
        ],
        'timezone'          => 'Fuseau horaire',
        'percent' => [
            'title'         => 'Position du signe "pourcentage" (%)',
            'before'        => 'Avant le nombre',
            'after'         => 'Après le nombre',
        ],
    ],
    'invoice' => [
        'tab'               => 'Facture',
        'prefix'            => 'Préfixe de numérotation',
        'digit'             => 'Nombre de chiffres',
        'next'              => 'Numéro suivant',
        'logo'              => 'Logo',
    ],
    'default' => [
        'tab'               => 'Par défaut',
        'account'           => 'Compte par défaut',
        'currency'          => 'Devise par défaut',
        'tax'               => 'Taux d’imposition par défaut',
        'payment'           => 'Mode de paiement par défaut',
        'language'          => 'Langue par défaut',
    ],
    'email' => [
        'protocol'          => 'Protocole',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'Hôte SMTP',
            'port'          => 'Port SMTP',
            'username'      => 'Utilisateur SMTP',
            'password'      => 'Mot de passe SMTP',
            'encryption'    => 'Sécurité SMTP',
            'none'          => 'Aucun',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Chemin d’accès de sendmail',
        'log'               => 'Journal des Emails',
    ],
    'scheduling' => [
        'tab'               => 'Planification',
        'send_invoice'      => 'Envoyer un rappel de facture',
        'invoice_days'      => 'Envoyer après les jours d\'échéance',
        'send_bill'         => 'Envoyer rappel de facture',
        'bill_days'         => 'Envoyer avant les jours d\'échéance',
        'cron_command'      => 'Commande Cron',
        'schedule_time'     => 'Heure de fonctionnement',
    ],
    'appearance' => [
        'tab'               => 'Apparence',
        'theme'             => 'Thème',
        'light'             => 'Clair',
        'dark'              => 'Foncé',
        'list_limit'        => 'Résultats par page',
        'use_gravatar'      => 'Utilisez Gravatar',
    ],
    'system' => [
        'tab'               => 'Système',
        'session' => [
            'lifetime'      => 'Durée de vie de session (Minutes)',
            'handler'       => 'Gestionnaire de session',
            'file'          => 'Fichier',
            'database'      => 'Base de données',
        ],
        'file_size'         => 'Taille de fichier maximale (MB)',
        'file_types'        => 'Types de fichier autorisés',
    ],

];
