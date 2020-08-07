<?php

return [

    'company' => [
        'name'              => 'Naam',
        'email'             => 'E-mail',
        'phone'             => 'Telefoonnummer',
        'address'           => 'Adres',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => 'Lokalisatie',
        'date' => [
            'format'        => 'Datum formaat',
            'separator'     => 'Datumscheidingsteken',
            'dash'          => 'Streepje (-)',
            'dot'           => 'Punt (.)',
            'comma'         => 'Komma (,)',
            'slash'         => 'Slash (/)',
            'space'         => 'Spatie ( ) ',
        ],
        'timezone'          => 'Tijdzone',
        'percent' => [
            'title'         => 'Procent (%) Positie',
            'before'        => 'Voor aantal',
            'after'         => 'Na aantal',
        ],
    ],
    'invoice' => [
        'tab'               => 'Factuur',
        'prefix'            => 'Nummer voorvoegsel',
        'digit'             => 'Aantal cijfers',
        'next'              => 'Volgende nummer',
        'logo'              => 'Logo',
    ],
    'default' => [
        'tab'               => 'Standaardwaarden',
        'account'           => 'Standaard account',
        'currency'          => 'Standaard Valuta',
        'tax'               => 'Standaard BTW-tarief',
        'payment'           => 'Standaard betalingsmethode',
        'language'          => 'Standaard Taal',
    ],
    'email' => [
        'protocol'          => 'Protocol',
        'php'               => 'PHP mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP host',
            'port'          => 'SMTP-poort',
            'username'      => 'SMTP gebruikersnaam',
            'password'      => 'SMTP wachtwoord',
            'encryption'    => 'SMTP beveiliging',
            'none'          => 'Geen',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail pad',
        'log'               => 'E-mail logs',
    ],
    'scheduling' => [
        'tab'               => 'Schema',
        'send_invoice'      => 'Factuur herinnering sturen',
        'invoice_days'      => 'Aantal dagen na vervaldatum sturen',
        'send_bill'         => 'Factuur herinnering sturen',
        'bill_days'         => 'Aantal dagen voor vervaldatum sturen',
        'cron_command'      => 'Cron opdracht',
        'schedule_time'     => 'Uren duurtijd',
    ],
    'appearance' => [
        'tab'               => 'Opmaak',
        'theme'             => 'Thema',
        'light'             => 'Licht',
        'dark'              => 'Donker',
        'list_limit'        => 'Resultaten per pagina',
        'use_gravatar'      => 'Gebruik Gravatar',
    ],
    'system' => [
        'tab'               => 'Systeem',
        'session' => [
            'lifetime'      => 'Sessie levensduur (minuten)',
            'handler'       => 'Sessie Beheerder',
            'file'          => 'Bestand',
            'database'      => 'Database',
        ],
        'file_size'         => 'Maximale bestandsgrootte (MB)',
        'file_types'        => 'Toegestane bestandstypes',
    ],

];