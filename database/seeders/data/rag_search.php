<?php

/**
 * Kurátorované dáta pre RAG testovanie — rôzne synonymá, prekrývajúce sa termíny,
 * technické popisy, krátke vs. dlhé texty, SK/EN mix.
 */
return [
    [
        'name' => 'Škoda Octavia Combi 2.0 TDI',
        'registration_number' => 'BA123456',
        'is_registered' => true,
        'description' => 'Rodinné kombi s dvojlitrovým turbodieselom. Nízka spotreba na diaľnici, veľký batožinový priestor. Ideálne na dlhé trasy a ťahanie prívesu. Servisná história kompletná u autorizovaného servisu Škoda.',
        'categories' => [
            ['name' => 'Kombi / station wagon', 'slug' => 'kombi-station-wagon'],
            ['name' => 'Diesel — turbodiesel TDI', 'slug' => 'diesel-tdi'],
            ['name' => 'Rodinné auto — daily driver', 'slug' => 'rodinne-auto'],
        ],
        'parts' => [
            [
                'name' => 'Brzdové platničky predné',
                'serial_number' => 'BRKPL001',
                'description' => 'Predné brzdové platničky (brake pads) pre Octaviu. Keramický materiál, nízky prach, vhodné do mesta. Výmena každých 40–50 tisíc km. Súvisí s kotúčmi a brzdovou kvapalinou DOT 4.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdovy-system'],
                    ['name' => 'Bezpečnostné komponenty', 'slug' => 'bezpecnost'],
                ],
            ],
            [
                'name' => 'Olejový filter motor',
                'serial_number' => 'OILFL002',
                'description' => 'Filter motorového oleja 2.0 TDI. Odporúčaná výmena pri každom servise oleja 5W-30 LL. Zabraňuje abrázii vstrekovacej sústavy common rail.',
                'categories' => [
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-engine'],
                    ['name' => 'Filtre a kvapaliny', 'slug' => 'filtre-kvapaliny'],
                ],
            ],
            [
                'name' => 'Svetlomet ľavý LED',
                'serial_number' => 'LEDHL003',
                'description' => 'Ľavý predný LED svetlomet s denným svietením DRL. Kompatibilný s adaptívnym tempomatom. Oprava po kolízii — homologizácia ECE R112.',
                'categories' => [
                    ['name' => 'Osvetlenie — lighting', 'slug' => 'osvetlenie'],
                ],
            ],
        ],
    ],
    [
        'name' => 'BMW 320i xDrive Touring',
        'registration_number' => 'KE987654',
        'is_registered' => true,
        'description' => 'Športové kombi s benzínovým turbo motorom B48 a pohonom všetkých kolies xDrive. Dynamická jazda, pohon 4x4 v zime na snehu. Premium interiér, iDrive infotainment.',
        'categories' => [
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-touring'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-turbo'],
            ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'pohon-4x4'],
        ],
        'parts' => [
            [
                'name' => 'Alternátor 150A',
                'serial_number' => 'ALTGN004',
                'description' => 'Alternátor 150 ampérov pre nabíjanie AGM batérie. Problémy so štartovaním môžu súvisieť s opotrebením regulátora napätia. Diagnostika cez ISTA.',
                'categories' => [
                    ['name' => 'Elektrický systém — electrical', 'slug' => 'elektricky-system'],
                    ['name' => 'Nabíjanie a štartovanie', 'slug' => 'nabijanie-start'],
                ],
            ],
            [
                'name' => 'Tlmivka zadná ľavá',
                'serial_number' => 'SHOCK005',
                'description' => 'Plynová tlmivka (shock absorber) zadnej nápravy. Odporúča sa vymeniť v páre pre vyváženú geometriu. Súvisí s pružinami a silentblokmi.',
                'categories' => [
                    ['name' => 'Podvozok — suspension chassis', 'slug' => 'podvozok'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Tesla Model 3 Long Range',
        'registration_number' => null,
        'is_registered' => false,
        'description' => 'Elektrické sedan s dojazdom okolo 500 km WLTP. Bez spaľovacieho motora — údržba brzd kvapaliny, chladiacej zmesi batérie a pneumatík. Autopilot hardware HW3.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'elektromobil-ev'],
            ['name' => 'Sedan — four door', 'slug' => 'sedan'],
        ],
        'parts' => [
            [
                'name' => 'HV batériový modul 75 kWh',
                'serial_number' => 'HVBT006',
                'description' => 'Vysokonapäťový lítiový modul 75 kWh. Teplotný management cez chladiacu kvapalinu. Recyklácia batérie podľa EU nariadenia. Nie je vhodný do spaľovacích áut.',
                'categories' => [
                    ['name' => 'Trakčná batéria — traction battery', 'slug' => 'trakcna-bateria'],
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'elektricky-pohon'],
                ],
            ],
            [
                'name' => 'Palubná nabíjačka onboard charger',
                'serial_number' => 'OBCG007',
                'description' => 'On-board charger 11 kW AC pre domácu Wallbox nabíjačku Type 2. DC rýchlonabíjanie cez samostatný port CCS. Overenie kábla a ističa 3×16 A.',
                'categories' => [
                    ['name' => 'Nabíjanie AC/DC — charging infrastructure', 'slug' => 'nabijanie-ac-dc'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Ford Transit Custom L2H1',
        'registration_number' => 'TN445566',
        'is_registered' => true,
        'description' => 'Úžitkový van na prepravu tovaru, dvojlitrový diesel Euro 6. Vysoká nosnosť, posuvné bočné dvere. Časté použitie v kuriérskych službách a stavebníctve.',
        'categories' => [
            ['name' => 'Úžitkové vozidlo — commercial van', 'slug' => 'uzitkove-vozidlo'],
            ['name' => 'Dodávka — delivery fleet', 'slug' => 'dodavka-fleet'],
        ],
        'parts' => [
            [
                'name' => 'Spojková sada heavy duty',
                'serial_number' => 'CLTCH008',
                'description' => 'Ťažká spojka pre vysoké zaťaženie a časté rozjazdy v meste. Výmena pri cukaní a preklzávaní. Súvisí s dvojhmotovým zotrvačníkom DMF.',
                'categories' => [
                    ['name' => 'Prevodovka manuál — manual transmission', 'slug' => 'prevodovka-manual'],
                ],
            ],
            [
                'name' => 'Zadné brzdové bubny',
                'serial_number' => 'DRMBR009',
                'description' => 'Brzdové bubny zadnej nápravy úžitkového vozu. Iný typ ako kotúčové brzdy — často sa zanedbáva servis. Kontrola čelistí a bŕzdovej páky ručnej.',
                'categories' => [
                    ['name' => 'Brzdy bubnové — drum brakes', 'slug' => 'brzdy-bubny'],
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdovy-system'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Volkswagen Golf VIII GTI',
        'registration_number' => 'ZA112233',
        'is_registered' => true,
        'description' => 'Horúci hatchback s motorom EA888 evo 245 koní. Krátky wheelbase, agilná jazda na okruhu aj v meste. Výfuk Akrapovič voliteľný, diferenciál XDS.',
        'categories' => [
            ['name' => 'Hot hatch — performance compact', 'slug' => 'hot-hatch'],
            ['name' => 'Športová jazda — track day', 'slug' => 'sportova-jazda'],
        ],
        'parts' => [
            [
                'name' => 'Turbocharger IS20',
                'serial_number' => 'TRBIS010',
                'description' => 'Turbo IS20 pre 2.0 TSI GTI. Pri úniku oleja skontrolovať ventiláciu kľuky. Častá téma: chirping, wastegate, mapovanie Stage 1.',
                'categories' => [
                    ['name' => 'Turbo a plnenie — forced induction', 'slug' => 'turbo-plnenie'],
                    ['name' => 'Motor výkon — high performance engine', 'slug' => 'motor-vykon'],
                ],
            ],
            [
                'name' => 'Športové sedadlá Alcantara',
                'serial_number' => 'SEAT011',
                'description' => 'Predné sedadlá s bočnicami Alcantara, vyhrievanie a masáž nie sú. Komfort vs. držanie v zákrutách. Čalúnenie interiér — upholstery.',
                'categories' => [
                    ['name' => 'Interiér — cabin trim', 'slug' => 'interier-cabin'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Toyota Prius Hybrid',
        'registration_number' => 'NR778899',
        'is_registered' => true,
        'description' => 'Hybridný hatchback — benzín Atkinson + elektromotor. Nízka spotreba v meste, regeneratívne brzdenie. Ni-MH alebo Li-ion batéria podľa generácie.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'hybrid-hev'],
            ['name' => 'Ekologická jazda — eco driving', 'slug' => 'ekologicka-jazda'],
        ],
        'parts' => [
            [
                'name' => 'Hybridná invertorová jednotka',
                'serial_number' => 'INVHY012',
                'description' => 'Power control unit prepája motor, generátor a batériu. Chyby P0A80 často súvisia s HV batériou. Špeciálna diagnostika Toyota Techstream.',
                'categories' => [
                    ['name' => 'Hybridný pohon — hybrid powertrain', 'slug' => 'hybridny-pohon'],
                    ['name' => 'Elektrický systém — electrical', 'slug' => 'elektricky-system'],
                ],
            ],
            [
                'name' => 'Regeneratívne brzdy zadné',
                'serial_number' => 'REGBR013',
                'description' => 'Zadné brzdy s prioritou rekuperácie energie. Pri servise skontrolovať aj klasické platničky. Brzdový dojem môže byť iný ako u čisto spaľovacieho auta.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdovy-system'],
                    ['name' => 'Rekuperácia — energy recovery', 'slug' => 'rekuperacia'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Land Rover Defender 110',
        'registration_number' => 'BB334455',
        'is_registered' => true,
        'description' => 'Off-road SUV s rámovou konštrukciou, uzamykateľnými diferenciálmi a brodením vodou. Diesel mild-hybrid Ingenium. Terén, bahno, kamenie — ground clearance.',
        'categories' => [
            ['name' => 'Off-road SUV — 4x4 terrain', 'slug' => 'offroad-suv'],
            ['name' => 'Dobrodružstvo — adventure overlanding', 'slug' => 'dobrodruzstvo'],
        ],
        'parts' => [
            [
                'name' => 'Redukčná prevodovka transfer case',
                'serial_number' => 'TFCASE14',
                'description' => 'Rozvodovka s redukciou low range pre strmé kopce. Olej v transfer case vymeniť podľa servisného plánu. Hlučnosť pri zaradení 4LO.',
                'categories' => [
                    ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'pohon-4x4'],
                    ['name' => 'Prevodovka — transmission drivetrain', 'slug' => 'prevodovka-drivetrain'],
                ],
            ],
            [
                'name' => 'Snorkel vzduchový prívod',
                'serial_number' => 'SNORK015',
                'description' => 'Vyvýšený prívod vzduchu pri brodení rieky. Chráni motor pred vodou do sania. Často inštalovaný aftermarket na Defender a Wrangler.',
                'categories' => [
                    ['name' => 'Off-road výbava — overlanding accessories', 'slug' => 'offroad-vybava'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Peugeot 208 PureTech 100',
        'registration_number' => null,
        'is_registered' => false,
        'description' => 'Malé mestské auto s trojvalcom 1.2 PureTech. Kompaktné parkovanie, nízke emisie. Pozor na rozvodový remeň — servisná kampaň výrobcu.',
        'categories' => [
            ['name' => 'Mestské auto — city car B segment', 'slug' => 'mestske-auto'],
            ['name' => 'Benzín — petrol three cylinder', 'slug' => 'benzin-3valcec'],
        ],
        'parts' => [
            [
                'name' => 'Rozvodový remeň s vodnou pumpou',
                'serial_number' => 'TMBLT016',
                'description' => 'Sada rozvodu PureTech — remeň, kladky, pumpa. Kritická výmena podľa km, nie oleja. Prevencia kontaktu ventilov s piestami pri pretrhnutí.',
                'categories' => [
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-engine'],
                    ['name' => 'Rozvod — timing belt chain', 'slug' => 'rozvod-timing'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Mercedes-Benz Sprinter 316 CDI',
        'registration_number' => 'TT667788',
        'is_registered' => true,
        'description' => 'Veľká dodávka na prepravu osôb alebo nákladu, diesel CDI, vysoká stavba H2. AdBlue SCR, DPF filter. Servis flotily — fleet management.',
        'categories' => [
            ['name' => 'Úžitkové vozidlo — commercial van', 'slug' => 'uzitkove-vozidlo-sprinter'],
            ['name' => 'Flotila — fleet vehicle', 'slug' => 'flotila'],
        ],
        'parts' => [
            [
                'name' => 'DPF filter pevných častíc',
                'serial_number' => 'DPFFL017',
                'description' => 'Diesel particulate filter — regenerácia na diaľnici alebo nútená v servise. Soot, PM2.5, emisná norma Euro 6. Súvisí s AdBlue a lambda sondou.',
                'categories' => [
                    ['name' => 'Emisná technika — emissions exhaust', 'slug' => 'emisna-technika'],
                    ['name' => 'Diesel — turbodiesel TDI', 'slug' => 'diesel-emisie'],
                ],
            ],
            [
                'name' => 'AdBlue nádrž a čerpadlo',
                'serial_number' => 'ADBLU018',
                'description' => 'Systém SCR s kvapalinou AdBlue (DEF). Varovanie na palubnej doske pri nízkej hladine. Zimné skladovanie — kryštalizácia močoviny.',
                'categories' => [
                    ['name' => 'Emisná technika — emissions exhaust', 'slug' => 'emisna-technika-adblue'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Honda Civic Type R FK8',
        'registration_number' => 'SC990011',
        'is_registered' => true,
        'description' => 'Predokolka s turbo 2.0 VTEC Turbo 320 hp. Nürburgring setup, Brembo brzdy, wing spoiler. Track tool — okruh, časová jazda, +R mode.',
        'categories' => [
            ['name' => 'Hot hatch — performance compact', 'slug' => 'hot-hatch-civic'],
            ['name' => 'Track day — circuit racing', 'slug' => 'track-day'],
        ],
        'parts' => [
            [
                'name' => 'Brembo brzdové kotúče predné',
                'serial_number' => 'BRMBO019',
                'description' => 'Ventrilované kotúče 350 mm predná náprava. Vysokoteplotná odolnosť pri track dňoch. Platničky musia byť kompatibilné — brake fade minimalizácia.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdovy-system-brembo'],
                    ['name' => 'Športová jazda — track day', 'slug' => 'sport-brzdy'],
                ],
            ],
            [
                'name' => 'Vzduchový filter sport K&N',
                'serial_number' => 'KNFLTR20',
                'description' => 'Športový vzduchový filter s vyšším prietokom. Možný mierny nárast výkonu, pravidelné čistenie olejom K&N. Nie je HEPA — cabin filter je iný diel.',
                'categories' => [
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-sport-filter'],
                    ['name' => 'Tuning — aftermarket performance', 'slug' => 'tuning-aftermarket'],
                ],
            ],
        ],
    ],
];
