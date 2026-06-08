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
    [
        'name' => 'Audi A4 Avant 40 TDI quattro',
        'registration_number' => 'BL556677',
        'is_registered' => true,
        'description' => 'Prémiové kombi s quattro pohonom a dvojlitrovým dieselom. Virtual Cockpit, Matrix LED. Vhodné na diaľničné kilometry aj zimnú jazdu — AWD traction.',
        'categories' => [
            ['name' => 'Kombi / station wagon', 'slug' => 'kombi-audi-avant'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-audi'],
            ['name' => 'Diesel — turbodiesel TDI', 'slug' => 'diesel-audi-tdi'],
        ],
        'parts' => [
            [
                'name' => 'Quattro rozdielový most predný',
                'serial_number' => 'RAG021',
                'description' => 'Predný diferenciál quattro s viskóznou spojkou. Hlučnosť pri ostrých zákrutách môže signalizovať opotrebenie. Servis oleja Haldex každých 60 tisíc km.',
                'categories' => [
                    ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'quattro-awd'],
                    ['name' => 'Prevodovka — transmission drivetrain', 'slug' => 'prevodovka-quattro'],
                ],
            ],
            [
                'name' => 'Kabínový filter HEPA',
                'serial_number' => 'RAG022',
                'description' => 'Filter vzduchu v interiéri (cabin air filter) s uhlíkovou vrstvou proti alergénom. Nie je to vzduchový filter motora — často sa mýli pri objednávke dielov.',
                'categories' => [
                    ['name' => 'Filtre a kvapaliny', 'slug' => 'filtre-kabin'],
                    ['name' => 'Interiér — cabin trim', 'slug' => 'interier-klima'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Hyundai Kona Electric 64 kWh',
        'registration_number' => 'PO778812',
        'is_registered' => true,
        'description' => 'Kompaktné crossover EV s dojazdom okolo 400 km. Jednoplodochodový pohon, rekuperácia pri brzdení. Ideálne mestské elektromobil — city EV crossover.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-kona'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'crossover-kona'],
        ],
        'parts' => [
            [
                'name' => 'Chladiaca zmes batérie EV',
                'serial_number' => 'RAG023',
                'description' => 'Špeciálna kvapalina pre chladenie trakčnej batérie lithium-ion. Teplotný management pred degradáciou pri rýchlom DC nabíjaní. Nie je to motorový antifreeze.',
                'categories' => [
                    ['name' => 'Trakčná batéria — traction battery', 'slug' => 'bateria-chladenie'],
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'ev-chladenie'],
                ],
            ],
            [
                'name' => 'Brzdové platničky zadné keramické',
                'serial_number' => 'RAG024',
                'description' => 'Zadné brzdové platničky (rear brake pads) pre Kona EV. Pri EV sa zadné brzdy opotrebúvajú pomalšie kvôli rekuperácii — stále treba kontrolovať hrúbku.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-ev-zadne'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Kia Sportage 1.6 T-GDI AWD',
        'registration_number' => 'KI334421',
        'is_registered' => true,
        'description' => 'Rodinné SUV s turbobenzínom a pohonom oboch náprav. Veľký displej, asistenčné systémy ADAS. Stredná trieda SUV — family crossover segment.',
        'categories' => [
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-sportage'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-t-gdi'],
            ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'awd-sportage'],
        ],
        'parts' => [
            [
                'name' => 'Lambda sonda predkatalyzátor',
                'serial_number' => 'RAG025',
                'description' => 'Oxygen sensor (lambda probe) pred katalyzátorom. Chyba P0130, zvýšená spotreba, nevyrovnaný voľnobeh. Diagnostika OBD-II emisná technika.',
                'categories' => [
                    ['name' => 'Emisná technika — emissions exhaust', 'slug' => 'lambda-sonda'],
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-emisie'],
                ],
            ],
            [
                'name' => 'Predné brzdové kotúče ventilované',
                'serial_number' => 'RAG026',
                'description' => 'Brzdové kotúče (brake discs) predná náprava Sportage. Vibrácie volantu pri brzdení = nerovnomerné opotrebenie. Súvisí s platničkami a brzdovou kvapalinou.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-kotuce-sportage'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Mazda CX-5 2.2 Skyactiv-D',
        'registration_number' => 'MA889901',
        'is_registered' => true,
        'description' => 'Japonské SUV s dieselom Skyactiv-D 150 koní. Kuro dizajn, jemná jazda, nízke emisie vďaka vysokému kompresnému pomeru. Diesel SUV daily driver.',
        'categories' => [
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-cx5'],
            ['name' => 'Diesel — turbodiesel TDI', 'slug' => 'diesel-skyactiv'],
        ],
        'parts' => [
            [
                'name' => 'Palivový filter diesel',
                'serial_number' => 'RAG027',
                'description' => 'Filter naftového paliva (fuel filter) pre common rail systém. Voda v nafte môže poškodiť vstrekováče — pravidelná výmena každých 60 tisíc km.',
                'categories' => [
                    ['name' => 'Filtre a kvapaliny', 'slug' => 'filter-nafta'],
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-diesel-filter'],
                ],
            ],
            [
                'name' => 'Silentblok predného ramena',
                'serial_number' => 'RAG028',
                'description' => 'Gumový silentblok (control arm bushing) predného ramena. Klepanie cez nerovnosti, nepresná geometria kolies. Podvozok suspension wear item.',
                'categories' => [
                    ['name' => 'Podvozok — suspension chassis', 'slug' => 'silentblok-cx5'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Nissan Qashqai e-POWER',
        'registration_number' => 'NI112244',
        'is_registered' => true,
        'description' => 'Sériový hybrid — benzínový motor generuje elektrinu, pohon len elektromotor. Žiadna zástrčka, nízka spotreba v meste. e-POWER series hybrid technology.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'hybrid-epower'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-qashqai'],
        ],
        'parts' => [
            [
                'name' => 'Invertor e-POWER',
                'serial_number' => 'RAG029',
                'description' => 'Power inverter mení DC z batérie na AC pre traction motor. Špecifický diel pre e-POWER architektúru — nie je kompatibilný s Leaf ani klasickým hybridom.',
                'categories' => [
                    ['name' => 'Hybridný pohon — hybrid powertrain', 'slug' => 'invertor-epower'],
                    ['name' => 'Elektrický systém — electrical', 'slug' => 'elektrika-epower'],
                ],
            ],
            [
                'name' => 'Vstrekováč AdBlue systém',
                'serial_number' => 'RAG030',
                'description' => 'Dávkovač AdBlue pre SCR katalyzátor. Chyba emisného systému, obmedzenie výkonu. Súvisí s DPF a lambda sondou — diesel emisná technika.',
                'categories' => [
                    ['name' => 'Emisná technika — emissions exhaust', 'slug' => 'adblue-davkovac'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Volvo XC60 Recharge T8',
        'registration_number' => 'VO556688',
        'is_registered' => true,
        'description' => 'Plug-in hybrid SUV s kombinovaným výkonom 455 koní. Bezpečnostné systémy City Safety, kožený interiér. PHEV premium family SUV — dojazd na elektrinu cca 50 km.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'phev-xc60'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-volvo'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-xc60'],
        ],
        'parts' => [
            [
                'name' => 'PHEV nabíjací port Type 2',
                'serial_number' => 'RAG031',
                'description' => 'Konektor AC nabíjania na ľavom prednom blatníku. Poškodenie po zime alebo nečistote kontaktov — nabíjanie nezačne. Wallbox kompatibilita 11 kW.',
                'categories' => [
                    ['name' => 'Nabíjanie AC/DC — charging infrastructure', 'slug' => 'nabijaci-port-phev'],
                ],
            ],
            [
                'name' => 'Brzdové platničky predné Akebono',
                'serial_number' => 'RAG032',
                'description' => 'Originálne predné brzdové platničky (front brake pads) Volvo XC60. Pri PHEV hmotnosti sa opotrebúvajú rýchlejšie — kontrola hrúbky každých 15 tisíc km.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-volvo-predne'],
                    ['name' => 'Bezpečnostné komponenty', 'slug' => 'bezpecnost-brzdy'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Renault Clio E-Tech Hybrid',
        'registration_number' => 'RN223344',
        'is_registered' => true,
        'description' => 'Malé hybridné hatchback s technológiou E-Tech — multi-mode gearbox bez spojky. Mestská jazda bez spotreby na krátke trasy. B segment hybrid city car.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'hybrid-clio'],
            ['name' => 'Mestské auto — city car B segment', 'slug' => 'mestske-clio'],
        ],
        'parts' => [
            [
                'name' => 'Hybridná 48V batéria',
                'serial_number' => 'RAG033',
                'description' => 'Lithium-ion batéria 48V pre E-Tech systém. Chyba hybridného režimu, reštart motora pri jazde. Nie je to trakčná HV batéria EV — nižšie napätie.',
                'categories' => [
                    ['name' => 'Hybridný pohon — hybrid powertrain', 'slug' => 'bateria-48v'],
                    ['name' => 'Elektrický systém — electrical', 'slug' => 'elektrika-hybrid'],
                ],
            ],
            [
                'name' => 'Spojler zadný Clio RS Line',
                'serial_number' => 'RAG034',
                'description' => 'Zadný difúzor a spojler karosérie RS Line. Karosársky diel (body panel) — oprava po parkovacej kolízii. Nie je mechanický komponent pohonu.',
                'categories' => [
                    ['name' => 'Karoséria — body exterior', 'slug' => 'karoseria-spojler'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Fiat 500e',
        'registration_number' => null,
        'is_registered' => false,
        'description' => 'Retro mestské elektromobil s dojazdom 320 km WLTP. Kompaktné rozmery pre parkovanie v centre. Iconic Italian city EV — zero emission urban driving.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-500e'],
            ['name' => 'Mestské auto — city car B segment', 'slug' => 'mestske-500e'],
        ],
        'parts' => [
            [
                'name' => 'Elektromotor 87 kW',
                'serial_number' => 'RAG035',
                'description' => 'Permanent magnet synchronous motor (PMSM) 87 kW. Tichý chod, okamžitý krútiaci moment. Servis zriedkavý — kontrola ložísk a chladenia.',
                'categories' => [
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'elektromotor-500e'],
                ],
            ],
            [
                'name' => 'Pneumatika 205/55 R16 letná',
                'serial_number' => 'RAG036',
                'description' => 'Letná pneumatika pre Fiat 500e — nízky valivý odpor pre dojazd EV. Rotácia každých 10 tisíc km, kontrola tlaku 2.5 bar. Tires tyres gumy.',
                'categories' => [
                    ['name' => 'Pneumatiky — tires wheels', 'slug' => 'pneumatiky-500e'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Opel Corsa Electric',
        'registration_number' => 'OP445566',
        'is_registered' => true,
        'description' => 'Elektrická verzia Corsy na platforme CMP. Dojazd 357 km, 100 kW DC rýchlonabíjanie. Nemecká značka, francúzska platforma — compact EV hatchback.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-corsa'],
            ['name' => 'Mestské auto — city car B segment', 'slug' => 'mestske-corsa'],
        ],
        'parts' => [
            [
                'name' => 'CCS rýchlonabíjací kábel',
                'serial_number' => 'RAG037',
                'description' => 'Kábel CCS Combo 2 pre DC nabíjanie do 100 kW. Overenie kontaktov, poškodenie po zime. Charging cable infrastructure — nie je Wallbox.',
                'categories' => [
                    ['name' => 'Nabíjanie AC/DC — charging infrastructure', 'slug' => 'kabel-ccs'],
                ],
            ],
            [
                'name' => 'Brzdová kvapalina DOT 4 LV',
                'serial_number' => 'RAG038',
                'description' => 'Brzdová kvapalina (brake fluid) s nízkou viskozitou pre ABS a ESP. Výmena každé 2 roky — aj pri EV, hydraulické brzdy zostávajú. DOT 4 brake fluid.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdova-kvapalina'],
                    ['name' => 'Filtre a kvapaliny', 'slug' => 'kvapaliny-servis'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Jeep Wrangler Rubicon 2.0 Turbo',
        'registration_number' => 'JE667788',
        'is_registered' => true,
        'description' => 'Legendárny off-road s uzamykateľnými mostami, redukciou a odnímateľnými dverami. Rock crawling, brodenie, trail driving. 4x4 adventure icon.',
        'categories' => [
            ['name' => 'Off-road SUV — 4x4 terrain', 'slug' => 'offroad-wrangler'],
            ['name' => 'Dobrodružstvo — adventure overlanding', 'slug' => 'dobrodruzstvo-wrangler'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-wrangler'],
        ],
        'parts' => [
            [
                'name' => 'Predný most Dana 44',
                'serial_number' => 'RAG039',
                'description' => 'Robustný predný most (front axle) Dana 44 s uzamykateľným diferenciálom. Servis oleja mostov po brodení vode. Off-road drivetrain component.',
                'categories' => [
                    ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'most-dana44'],
                    ['name' => 'Off-road výbava — overlanding accessories', 'slug' => 'offroad-most'],
                ],
            ],
            [
                'name' => 'Bull bar oceľový A-bar',
                'serial_number' => 'RAG040',
                'description' => 'Oceľový nárazník (bull bar) pre ochranu pri off-road jazde. Aftermarket accessory — homologizácia airbag senzora. Karosárska ochrana predná.',
                'categories' => [
                    ['name' => 'Off-road výbava — overlanding accessories', 'slug' => 'bull-bar'],
                    ['name' => 'Karoséria — body exterior', 'slug' => 'karoseria-bullbar'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Subaru Outback 2.5i AWD',
        'registration_number' => 'SU889900',
        'is_registered' => true,
        'description' => 'Estate crossover so symetrickým pohonom AWD a boxer motorom. Vynikajúca trakcia na snehu a blate. EyeSight asistenčné systémy. Wagon adventure vehicle.',
        'categories' => [
            ['name' => 'Kombi / station wagon', 'slug' => 'kombi-outback'],
            ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'awd-subaru'],
            ['name' => 'Dobrodružstvo — adventure overlanding', 'slug' => 'dobrodruzstvo-outback'],
        ],
        'parts' => [
            [
                'name' => 'Rozvodový remeň boxer',
                'serial_number' => 'RAG041',
                'description' => 'Rozvodový remeň (timing belt) pre horizontálny boxer motor 2.5i. Kritická výmena každých 100 tisíc km — pri pretrhnutí ventily narazia na piesty.',
                'categories' => [
                    ['name' => 'Rozvod — timing belt chain', 'slug' => 'rozvod-subaru'],
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-subaru'],
                ],
            ],
            [
                'name' => 'Kardanový hriadeľ AWD',
                'serial_number' => 'RAG042',
                'description' => 'Kardan (driveshaft) medzi prevodovkou a zadným mostom. Vibrácie pri akcelerácii = opotrebené križové kĺby. Symetrický AWD pohon Subaru.',
                'categories' => [
                    ['name' => 'Prevodovka — transmission drivetrain', 'slug' => 'kardan-subaru'],
                    ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'pohon-subaru-kardan'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Mitsubishi Outlander PHEV',
        'registration_number' => 'MI334455',
        'is_registered' => true,
        'description' => 'Rodinné SUV plug-in hybrid s dvoma elektromotormi a Super All-Wheel Control. Dojazd na elektrinu 80 km. Twin motor PHEV SUV.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'phev-outlander'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-outlander'],
            ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'awd-outlander'],
        ],
        'parts' => [
            [
                'name' => 'Predný elektromotor 60 kW',
                'serial_number' => 'RAG043',
                'description' => 'Traction motor prednej nápravy Outlander PHEV. Tichý pohon v EV režime. Chyba P1B00 — diagnostika cez MUT-III. Electric drive unit front.',
                'categories' => [
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'motor-phev-predny'],
                    ['name' => 'Hybridný pohon — hybrid powertrain', 'slug' => 'hybrid-motor'],
                ],
            ],
            [
                'name' => 'Klimatizačný kompresor PHEV',
                'serial_number' => 'RAG044',
                'description' => 'Elektrický AC kompresor pre klimatizáciu v EV režime bez bežiaceho motora. Klimatizácia air conditioning HVAC — odlišný od kompresora spaľovacieho auta.',
                'categories' => [
                    ['name' => 'Klimatizácia — HVAC air conditioning', 'slug' => 'klima-kompresor'],
                    ['name' => 'Interiér — cabin trim', 'slug' => 'interier-klima-phev'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Lexus RX 450h F Sport',
        'registration_number' => 'LE112233',
        'is_registered' => true,
        'description' => 'Luxusné hybridné SUV s Atkinson motorom 3.5 V6 a e-CVT. Tichá jazda, vysoká spoľahlivosść Toyota hybrid platform. Premium hybrid luxury SUV.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'hybrid-lexus-rx'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-lexus'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-lexus-rx'],
        ],
        'parts' => [
            [
                'name' => 'Hybridná transmisná batéria Ni-MH',
                'serial_number' => 'RAG045',
                'description' => 'Nickel-metal hydride batéria (HV battery pack) pre Lexus hybrid. Rekondicionovanie po 200 tisíc km. Chyby P0A80, P3000 — hybrid battery health.',
                'categories' => [
                    ['name' => 'Hybridný pohon — hybrid powertrain', 'slug' => 'bateria-nimh'],
                    ['name' => 'Trakčná batéria — traction battery', 'slug' => 'hv-bateria-hybrid'],
                ],
            ],
            [
                'name' => 'Adaptívne tlmiče AVS',
                'serial_number' => 'RAG046',
                'description' => 'Adaptívne tlmiče (adaptive dampers) F Sport s elektronickým riadením tuhosti. Sport vs. Comfort režim. Podvozok suspension premium.',
                'categories' => [
                    ['name' => 'Podvozok — suspension chassis', 'slug' => 'tlmiče-adaptivne'],
                    ['name' => 'Športová jazda — track day', 'slug' => 'sport-podvozok'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Mini Cooper S JCW',
        'registration_number' => 'MN445566',
        'is_registered' => true,
        'description' => 'Kompaktné hot hatch John Cooper Works 231 koní. Go-kart handling, bristol zelená voliteľná. Britská ikona — performance mini hatchback.',
        'categories' => [
            ['name' => 'Hot hatch — performance compact', 'slug' => 'hot-hatch-mini'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-mini-jcw'],
            ['name' => 'Športová jazda — track day', 'slug' => 'sport-mini'],
        ],
        'parts' => [
            [
                'name' => 'Turbocharger twin scroll JCW',
                'serial_number' => 'RAG047',
                'description' => 'Twin-scroll turbo pre 2.0 Mini Cooper S JCW. Boost pressure, wastegate rattle. Tuning Stage 1 mapovanie — forced induction performance.',
                'categories' => [
                    ['name' => 'Turbo a plnenie — forced induction', 'slug' => 'turbo-mini-jcw'],
                    ['name' => 'Tuning — aftermarket performance', 'slug' => 'tuning-mini'],
                ],
            ],
            [
                'name' => 'Brzdové platničky JCW sport',
                'serial_number' => 'RAG048',
                'description' => 'Predné brzdové platničky (brake pads) JCW s vysokým koeficientom trenia. Kratšia životnosť pri agresívnej jazde. Brembo upgrade kompatibilita.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-mini-jcw'],
                    ['name' => 'Športová jazda — track day', 'slug' => 'sport-brzdy-mini'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Suzuki Vitara 1.4 Boosterjet',
        'registration_number' => 'SZ778899',
        'is_registered' => true,
        'description' => 'Kompaktné SUV s turbobenzínom Boosterjet a pohonom AllGrip. Nízka hmotnosť, dobrá spotreba. Japonská jednoduchosť — budget friendly crossover.',
        'categories' => [
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-vitara'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-boosterjet'],
        ],
        'parts' => [
            [
                'name' => 'Intercooler Boosterjet',
                'serial_number' => 'RAG049',
                'description' => 'Medzichladič (intercooler) pre turbobenzín Boosterjet. Únik boostu, poškodenie po kamienkoch z cesty. Turbo cooling charge air cooler.',
                'categories' => [
                    ['name' => 'Turbo a plnenie — forced induction', 'slug' => 'intercooler-vitara'],
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-chladenie-vitara'],
                ],
            ],
            [
                'name' => 'Palivová pumpa v nádrži',
                'serial_number' => 'RAG050',
                'description' => 'Elektrická palivová pumpa (fuel pump) v nádrži. Problémy so štartovaním, motor zhasne pri jazde. Fuel delivery system component.',
                'categories' => [
                    ['name' => 'Motor — engine maintenance', 'slug' => 'palivova-pumpa'],
                    ['name' => 'Elektrický systém — electrical', 'slug' => 'elektrika-pumpa'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Dacia Duster 1.0 TCe 4x4',
        'registration_number' => 'DC990011',
        'is_registered' => true,
        'description' => 'Dostupné SUV s pohonom 4x4 a jednoduchou konštrukciou. Robustné plasty, vysoký ground clearance. Budget off-roader — value SUV segment.',
        'categories' => [
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-duster'],
            ['name' => 'Off-road SUV — 4x4 terrain', 'slug' => 'offroad-duster'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-duster'],
        ],
        'parts' => [
            [
                'name' => 'Spojka Duster 4x4',
                'serial_number' => 'RAG051',
                'description' => 'Spojková sada (clutch kit) pre manuálnu prevodovku Duster 4x4. Cukanie pri rozjazdoch, preklzávanie pri ťahaní prívesu. Manual transmission clutch.',
                'categories' => [
                    ['name' => 'Prevodovka manuál — manual transmission', 'slug' => 'spojka-duster'],
                ],
            ],
            [
                'name' => 'Predný nárazník plastový',
                'serial_number' => 'RAG052',
                'description' => 'Plastový predný nárazník (front bumper) Dacia Duster. Lacný náhradný diel po off-road škrabancoch. Body panel karoséria — nie mechanika.',
                'categories' => [
                    ['name' => 'Karoséria — body exterior', 'slug' => 'naraznik-duster'],
                ],
            ],
        ],
    ],
    [
        'name' => 'MG4 Electric Long Range',
        'registration_number' => null,
        'is_registered' => false,
        'description' => 'Čínske elektrické hatchback s dojazdom 450 km a zadným pohonom. Agresívna cena, dobré jazdné vlastnosti. Value EV segment challenger.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-mg4'],
            ['name' => 'Mestské auto — city car B segment', 'slug' => 'mestske-mg4'],
        ],
        'parts' => [
            [
                'name' => 'Zadný elektromotor 150 kW',
                'serial_number' => 'RAG053',
                'description' => 'Rear wheel drive electric motor 150 kW MG4. Tichý, okamžitá odozva plynového pedála. RWD EV powertrain — nie je to predokolka.',
                'categories' => [
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'motor-mg4-zadny'],
                ],
            ],
            [
                'name' => 'Batéria 77 kWh LFP',
                'serial_number' => 'RAG054',
                'description' => 'Lithium iron phosphate batéria 77 kWh — odolnejšia voči cyklom ako NMC. Nabíjanie do 80 % za 35 min DC. Traction battery LFP chemistry.',
                'categories' => [
                    ['name' => 'Trakčná batéria — traction battery', 'slug' => 'bateria-lfp-mg4'],
                    ['name' => 'Nabíjanie AC/DC — charging infrastructure', 'slug' => 'nabijanie-mg4'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Cupra Formentor VZ 2.0 TSI',
        'registration_number' => 'CU223344',
        'is_registered' => true,
        'description' => 'Športové crossover coupé s 310 koňmi a DSG prevodovkou. Agresívny dizajn, výfukový systém Akrapovič. Performance SUV coupe — VZ maximum.',
        'categories' => [
            ['name' => 'Hot hatch — performance compact', 'slug' => 'hot-hatch-formentor'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-formentor'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-formentor-vz'],
        ],
        'parts' => [
            [
                'name' => 'DSG prevodovka DQ381',
                'serial_number' => 'RAG055',
                'description' => '7-stupňová DSG dual clutch prevodovka DQ381 pre Formentor VZ. Servis oleja každých 60 tisíc km. Trhanie pri rozjazdoch = opotrebenie spojky.',
                'categories' => [
                    ['name' => 'Prevodovka automat — automatic transmission', 'slug' => 'dsg-dq381'],
                    ['name' => 'Prevodovka — transmission drivetrain', 'slug' => 'prevodovka-dsg'],
                ],
            ],
            [
                'name' => 'Výfukový systém Akrapovič',
                'serial_number' => 'RAG056',
                'description' => 'Titanový výfuk (exhaust system) Akrapovič pre Formentor VZ. Hlbší zvuk, mierne zníženie spätného tlaku. Aftermarket performance exhaust.',
                'categories' => [
                    ['name' => 'Tuning — aftermarket performance', 'slug' => 'vyfuk-akrapovic'],
                    ['name' => 'Emisná technika — emissions exhaust', 'slug' => 'vyfuk-system'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Porsche Cayenne E-Hybrid Coupe',
        'registration_number' => 'PZ556677',
        'is_registered' => true,
        'description' => 'Luxusné SUV coupé s plug-in hybridom V6 turbo a 463 koňmi. PASM podvozok, keramické brzdy voliteľné. Premium PHEV performance SUV.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'phev-cayenne'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-porsche'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-cayenne'],
        ],
        'parts' => [
            [
                'name' => 'Keramické brzdy PCCB predné',
                'serial_number' => 'RAG057',
                'description' => 'Porsche Ceramic Composite Brake (PCCB) predné kotúče a platničky. Ľahšie, odolnejšie voči fade pri track dňoch. Premium braking system.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-keramicke-porsche'],
                    ['name' => 'Športová jazda — track day', 'slug' => 'sport-brzdy-porsche'],
                ],
            ],
            [
                'name' => 'Air suspension kompresor',
                'serial_number' => 'RAG058',
                'description' => 'Kompresor vzduchového podvozku (air suspension compressor) PASM. Auto sa nezníži pri štarte — chyba nivelácie. Suspension pneumatic system.',
                'categories' => [
                    ['name' => 'Podvozok — suspension chassis', 'slug' => 'vzduchovy-podvozok'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Audi e-tron GT quattro',
        'registration_number' => 'AU889912',
        'is_registered' => true,
        'description' => 'Elektrické gran turismo s dvoma motormi a 476 koňmi. 800V architektúra, rýchlonabíjanie 270 kW. Premium EV sports sedan — quattro electric.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-etron-gt'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-etron-gt'],
            ['name' => 'Športová jazda — track day', 'slug' => 'sport-etron-gt'],
        ],
        'parts' => [
            [
                'name' => '800V invertor predný',
                'serial_number' => 'RAG059',
                'description' => 'Silicon carbide invertor pre 800V architektúru e-tron GT. Vyššia účinnosť pri rýchlom DC nabíjaní. High voltage power electronics.',
                'categories' => [
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'invertor-800v'],
                    ['name' => 'Nabíjanie AC/DC — charging infrastructure', 'slug' => 'nabijanie-800v'],
                ],
            ],
            [
                'name' => 'Regeneratívne brzdy e-tron',
                'serial_number' => 'RAG060',
                'description' => 'Elektrohydraulické brzdy s maximálnou rekuperáciou pri One Pedal Drive. Zadné platničky sa opotrebúvajú minimálne. EV braking system.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-etron-gt'],
                    ['name' => 'Rekuperácia — energy recovery', 'slug' => 'rekuperacia-etron'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Škoda Enyaq 80 iV',
        'registration_number' => 'SK445566',
        'is_registered' => true,
        'description' => 'Elektrické SUV na MEB platforme s dojazdom 510 km. Veľký batožinový priestor, Simply Clever riešenia. České EV rodinné auto — MEB electric SUV.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-enyaq'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-enyaq'],
            ['name' => 'Rodinné auto — daily driver', 'slug' => 'rodinne-enyaq'],
        ],
        'parts' => [
            [
                'name' => 'Brzdové platničky predné Enyaq',
                'serial_number' => 'RAG061',
                'description' => 'Predné brzdové platničky (front brake pads) Škoda Enyaq iV. Pri EV hmotnosti 2.2 tony rýchlejšie opotrebenie. Výmena každých 40 tisíc km.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-enyaq'],
                ],
            ],
            [
                'name' => 'Matrix LED svetlomet pravý',
                'serial_number' => 'RAG062',
                'description' => 'Pravý Matrix LED svetlomet s adaptívnym diaľkovým svetlom. Oprava po kamienku — homologizácia ECE. Osvetlenie lighting headlight.',
                'categories' => [
                    ['name' => 'Osvetlenie — lighting', 'slug' => 'svetlomet-enyaq'],
                ],
            ],
        ],
    ],
    [
        'name' => 'BMW i4 M50 xDrive',
        'registration_number' => 'BM778811',
        'is_registered' => true,
        'description' => 'Elektrický gran coupé s 544 koňmi a pohonom oboch náprav. M Sport balík, adaptívne tlmiče. EV performance sedan — Tesla Model 3 rival.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-i4-m50'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-i4'],
            ['name' => 'Športová jazda — track day', 'slug' => 'sport-i4'],
        ],
        'parts' => [
            [
                'name' => 'Predný elektromotor i4 M50',
                'serial_number' => 'RAG063',
                'description' => 'Synchronný elektromotor prednej nápravy BMW i4 M50 xDrive. Kombinovaný výkon s zadným motorom 544 hp. Electric drive unit BMW.',
                'categories' => [
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'motor-i4-predny'],
                    ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'xdrive-i4'],
                ],
            ],
            [
                'name' => 'M Performance brzdové kotúče',
                'serial_number' => 'RAG064',
                'description' => 'Modré lakované M Performance brzdové kotúče (brake discs) predná náprava. Vysoký výkon EV vyžaduje silnejšie brzdy — brake upgrade.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-i4-m50'],
                    ['name' => 'Tuning — aftermarket performance', 'slug' => 'tuning-brzdy-i4'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Mercedes EQS 450+',
        'registration_number' => 'MB990022',
        'is_registered' => true,
        'description' => 'Luxusný elektrický sedan s Hyperscreen a dojazdom 780 km. Tichá jazda, MBUX infotainment. Flagship EV limousine — electric S-Class alternative.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-eqs'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-eqs'],
            ['name' => 'Sedan — four door', 'slug' => 'sedan-eqs'],
        ],
        'parts' => [
            [
                'name' => 'Hyperscreen displej jednotka',
                'serial_number' => 'RAG065',
                'description' => '56-palcový MBUX Hyperscreen (infotainment display) cez celú palubnú dosku. Prasklina, dotykové problémy — drahá oprava elektroniky. Not a mechanical part.',
                'categories' => [
                    ['name' => 'Elektronika — electronics infotainment', 'slug' => 'hyperscreen-eqs'],
                    ['name' => 'Interiér — cabin trim', 'slug' => 'interier-eqs'],
                ],
            ],
            [
                'name' => 'Batéria 107.8 kWh EQS',
                'serial_number' => 'RAG066',
                'description' => 'Vysokonapäťová trakčná batéria 107.8 kWh pre maximálny dojazd EQS 450+. 8 rokov záruka na batériu. Traction battery high capacity.',
                'categories' => [
                    ['name' => 'Trakčná batéria — traction battery', 'slug' => 'bateria-eqs'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Volkswagen ID.4 Pro',
        'registration_number' => 'VW334488',
        'is_registered' => true,
        'description' => 'Elektrické rodinné SUV na MEB s dojazdom 520 km. Prostor pre deti, psa a batožinu. VW electric family SUV — mainstream EV.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-id4'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-id4'],
            ['name' => 'Rodinné auto — daily driver', 'slug' => 'rodinne-id4'],
        ],
        'parts' => [
            [
                'name' => 'Tepelné čerpadlo ID.4',
                'serial_number' => 'RAG067',
                'description' => 'Heat pump (tepelné čerpadlo) pre efektívne kúrenie v zime bez straty dojazdu. Kľúčové pre EV winter range. HVAC heating system efficiency.',
                'categories' => [
                    ['name' => 'Klimatizácia — HVAC air conditioning', 'slug' => 'tepelne-cerpadlo'],
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'ev-kurenie'],
                ],
            ],
            [
                'name' => 'Zadný stabilizátor nápravy',
                'serial_number' => 'RAG068',
                'description' => 'Stabilizačná tyč (sway bar) zadnej nápravy ID.4. Klepanie v zákrutách = opotrebené silentbloky. Podvozok suspension anti-roll bar.',
                'categories' => [
                    ['name' => 'Podvozok — suspension chassis', 'slug' => 'stabilizator-id4'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Ford Mustang Mach-E GT',
        'registration_number' => 'FO667799',
        'is_registered' => true,
        'description' => 'Elektrický performance SUV s 487 koňmi a MagneRide tlmičmi. Mustang DNA v EV balení. American electric muscle crossover.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-mach-e'],
            ['name' => 'Hot hatch — performance compact', 'slug' => 'hot-hatch-mach-e'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-mach-e'],
        ],
        'parts' => [
            [
                'name' => 'MagneRide tlmiče GT',
                'serial_number' => 'RAG069',
                'description' => 'Magnetorheological dampers (MagneRide) s elektronickou reguláciou. Okamžitá zmena tuhosti pri Track režime. Adaptive suspension performance.',
                'categories' => [
                    ['name' => 'Podvozok — suspension chassis', 'slug' => 'magneride-mach-e'],
                    ['name' => 'Športová jazda — track day', 'slug' => 'sport-tlmivky-mach-e'],
                ],
            ],
            [
                'name' => 'Brembo brzdy zadné Mach-E',
                'serial_number' => 'RAG070',
                'description' => 'Zadné brzdové kotúče a platničky Brembo pre Mach-E GT. Vysoký výkon EV = vysoké tepelné zaťaženie bŕzd. Rear brake system performance.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-mach-e-zadne'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Toyota Yaris Cross Hybrid',
        'registration_number' => 'TY112255',
        'is_registered' => true,
        'description' => 'Kompaktné hybridné crossover s pohonom AWD-i. Spotreba pod 5 l/100 km, vhodné do mesta. Toyota hybrid reliability — mini SUV eco.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'hybrid-yaris-cross'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-yaris-cross'],
            ['name' => 'Ekologická jazda — eco driving', 'slug' => 'eko-yaris-cross'],
        ],
        'parts' => [
            [
                'name' => 'Hybridný pohon AWD-i',
                'serial_number' => 'RAG071',
                'description' => 'Elektrický motor na zadnej náprave AWD-i — aktivuje sa len pri pošmyknutí. Nie je to mechanický kardan. Toyota hybrid all wheel drive system.',
                'categories' => [
                    ['name' => 'Hybridný pohon — hybrid powertrain', 'slug' => 'awd-i-yaris'],
                    ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'pohon-awd-i'],
                ],
            ],
            [
                'name' => 'Olejový filter hybrid 1.5',
                'serial_number' => 'RAG072',
                'description' => 'Filter motorového oleja 0W-16 pre hybridný motor 1.5 Dynamic Force. Servis každých 15 tisíc km. Engine maintenance oil filter.',
                'categories' => [
                    ['name' => 'Filtre a kvapaliny', 'slug' => 'filter-olej-yaris'],
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-yaris-cross'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Honda HR-V e:HEV',
        'registration_number' => 'HO334466',
        'is_registered' => true,
        'description' => 'Hybridné crossover s technológiou e:HEV a Magic Seats. Dva elektromotory, Atkinson 2.0. Japonská praktickosť — compact hybrid SUV.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'hybrid-hrv'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-hrv'],
        ],
        'parts' => [
            [
                'name' => 'e:HEV power control unit',
                'serial_number' => 'RAG073',
                'description' => 'Riadiaca jednotka hybridného pohonu e:HEV prepája motor, generátor a traction motor. Chyby P0A78, P1E00 — Honda diagnostic HDS.',
                'categories' => [
                    ['name' => 'Hybridný pohon — hybrid powertrain', 'slug' => 'pcu-hrv'],
                    ['name' => 'Elektrický systém — electrical', 'slug' => 'elektrika-hrv'],
                ],
            ],
            [
                'name' => 'Vzduchový filter HR-V',
                'serial_number' => 'RAG074',
                'description' => 'Vzduchový filter motora (air filter) Honda HR-V 2.0 e:HEV. Prach, peľ — pravidelná výmena každých 20 tisíc km. Engine air intake filter.',
                'categories' => [
                    ['name' => 'Filtre a kvapaliny', 'slug' => 'filter-vzduch-hrv'],
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-filter-hrv'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Seat Leon FR 1.5 TSI 150',
        'registration_number' => 'SE556644',
        'is_registered' => true,
        'description' => 'Športový hatchback FR s turbobenzínom 1.5 TSI evo. Dynamický dizajn, DSG voliteľná. Španielsky hot hatch — VW Group compact.',
        'categories' => [
            ['name' => 'Hot hatch — performance compact', 'slug' => 'hot-hatch-leon'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-leon-tsi'],
        ],
        'parts' => [
            [
                'name' => 'Vstrekováč TSI 1.5',
                'serial_number' => 'RAG075',
                'description' => 'Priamy vstrekováč (fuel injector) pre 1.5 TSI evo s Miller cyklom. Karbon na sacích ventiloch — walnut blasting servis. Direct injection.',
                'categories' => [
                    ['name' => 'Motor — engine maintenance', 'slug' => 'vstrekovac-leon'],
                    ['name' => 'Motor výkon — high performance engine', 'slug' => 'motor-tsi-leon'],
                ],
            ],
            [
                'name' => 'Predné brzdové platničky FR',
                'serial_number' => 'RAG076',
                'description' => 'Brzdové platničky (brake pads) Seat Leon FR — väčší kotúče ako základná verzia. Piskanie pri vlhku = indikátor opotrebenia. Front brakes.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-leon-fr'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Alfa Romeo Giulia 2.0 Veloce',
        'registration_number' => 'AR778833',
        'is_registered' => true,
        'description' => 'Taliansky sportový sedan s turbo benzínom 280 koní a pohonom zadných kolies. Emocionálna jazda, karbónové prvky. RWD performance sedan.',
        'categories' => [
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-giulia'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-giulia'],
            ['name' => 'Športová jazda — track day', 'slug' => 'sport-giulia'],
        ],
        'parts' => [
            [
                'name' => 'Carbon fiber driveshaft',
                'serial_number' => 'RAG077',
                'description' => 'Karbonový kardanový hriadeľ (carbon fiber driveshaft) pre zníženie hmotnosti rotujúcich dielov. RWD Giulia Q4 nie je kompatibilný. Lightweight drivetrain.',
                'categories' => [
                    ['name' => 'Prevodovka — transmission drivetrain', 'slug' => 'kardan-giulia'],
                    ['name' => 'Tuning — aftermarket performance', 'slug' => 'tuning-giulia'],
                ],
            ],
            [
                'name' => 'Brzdové platničky Brembo Giulia',
                'serial_number' => 'RAG078',
                'description' => 'Originálne Brembo brzdové platničky (brake pads) predná náprava Giulia Veloce. Červené strmen — ikonický Alfa dizajn. Performance braking.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-giulia-brembo'],
                    ['name' => 'Športová jazda — track day', 'slug' => 'sport-brzdy-giulia'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Citroën C5 Aircross Hybrid 225',
        'registration_number' => 'CI990044',
        'is_registered' => true,
        'description' => 'Pohodlné SUV s plug-in hybridom a Advanced Comfort sedadlami. Mäkký podvozok, tichá jazda. French comfort PHEV crossover.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'phev-c5-aircross'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-c5-aircross'],
        ],
        'parts' => [
            [
                'name' => 'Advanced Comfort tlmiče',
                'serial_number' => 'RAG079',
                'description' => 'Progresívne hydraulické tlmiče (Progressive Hydraulic Cushions) Citroën. Mäkší nábeh cez nerovnosti — unique suspension technology.',
                'categories' => [
                    ['name' => 'Podvozok — suspension chassis', 'slug' => 'tlmiče-citroen'],
                ],
            ],
            [
                'name' => 'PHEV hybridná batéria 13.2 kWh',
                'serial_number' => 'RAG080',
                'description' => 'Plug-in hybrid batéria 13.2 kWh pre dojazd 50 km na elektrinu. Nabíjanie cez Type 2 port. Nie je to plnohodnotná EV batéria — menšia kapacita.',
                'categories' => [
                    ['name' => 'Hybridný pohon — hybrid powertrain', 'slug' => 'bateria-phev-c5'],
                    ['name' => 'Nabíjanie AC/DC — charging infrastructure', 'slug' => 'nabijanie-c5-phev'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Volkswagen Passat Variant 2.0 TDI',
        'registration_number' => 'VW112266',
        'is_registered' => true,
        'description' => 'Obchodné kombi s dvojlitrovým dieselom a DSG. Veľký kufor pre firemné flotily. Fleet wagon — business travel diesel.',
        'categories' => [
            ['name' => 'Kombi / station wagon', 'slug' => 'kombi-passat'],
            ['name' => 'Diesel — turbodiesel TDI', 'slug' => 'diesel-passat'],
            ['name' => 'Flotila — fleet vehicle', 'slug' => 'flotila-passat'],
        ],
        'parts' => [
            [
                'name' => 'EGR ventil Passat TDI',
                'serial_number' => 'RAG081',
                'description' => 'EGR ventil (exhaust gas recirculation) pre 2.0 TDI. Ucpanie sadzou, chyba P0401, nevyrovnaný voľnobeh. Emisná technika diesel.',
                'categories' => [
                    ['name' => 'Emisná technika — emissions exhaust', 'slug' => 'egr-passat'],
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-egr'],
                ],
            ],
            [
                'name' => 'Alternátor 180A Passat',
                'serial_number' => 'RAG082',
                'description' => 'Alternátor 180 ampérov pre Passat s veľkou výbavou a start-stop. Slabé nabíjanie batérie, pískanie ložísk. Charging system electrical.',
                'categories' => [
                    ['name' => 'Elektrický systém — electrical', 'slug' => 'alternator-passat'],
                    ['name' => 'Nabíjanie a štartovanie', 'slug' => 'nabijanie-passat'],
                ],
            ],
        ],
    ],
    [
        'name' => 'BMW X5 xDrive45e',
        'registration_number' => 'BX445577',
        'is_registered' => true,
        'description' => 'Veľké plug-in hybridné SUV s 394 koňmi a dojazdom 100 km na elektrinu. Luxusný interiér, air suspension. Premium PHEV large SUV.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'phev-x5'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-x5'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-x5'],
        ],
        'parts' => [
            [
                'name' => 'PHEV batéria 24 kWh X5',
                'serial_number' => 'RAG083',
                'description' => 'High voltage batéria 24 kWh pre BMW X5 xDrive45e. Wallbox nabíjanie 7.4 kW AC. Hybrid battery pack — nie plnohodnotná EV batéria.',
                'categories' => [
                    ['name' => 'Hybridný pohon — hybrid powertrain', 'slug' => 'bateria-x5-phev'],
                    ['name' => 'Trakčná batéria — traction battery', 'slug' => 'hv-bateria-x5'],
                ],
            ],
            [
                'name' => 'Brzdové platničky predné X5',
                'serial_number' => 'RAG084',
                'description' => 'Predné brzdové platničky (front brake pads) BMW X5 — ťažké SUV opotrebuje brzdy rýchlo. Kontrola hrúbky každých 10 tisíc km pri mestskej jazde.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-x5-predne'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Mercedes GLE 350de 4MATIC',
        'registration_number' => 'MG667788',
        'is_registered' => true,
        'description' => 'Diesel plug-in hybrid s dojazdom 100 km na elektrinu a 320 koňmi. Unikátna kombinácia diesel + PHEV. Premium diesel hybrid SUV.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'phev-gle-diesel'],
            ['name' => 'Diesel — turbodiesel TDI', 'slug' => 'diesel-gle-phev'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-gle'],
        ],
        'parts' => [
            [
                'name' => 'AdBlue nádrž GLE 350de',
                'serial_number' => 'RAG085',
                'description' => 'AdBlue nádrž a čerpadlo pre SCR systém diesel PHEV. Varovanie pri 1500 km do vyprázdnenia. Emisná technika DEF fluid system.',
                'categories' => [
                    ['name' => 'Emisná technika — emissions exhaust', 'slug' => 'adblue-gle'],
                ],
            ],
            [
                'name' => 'DPF filter GLE diesel',
                'serial_number' => 'RAG086',
                'description' => 'Diesel particulate filter (DPF) pre GLE 350de. Regenerácia pri diaľničnej jazde alebo servis. Soot filter Euro 6 diesel emissions.',
                'categories' => [
                    ['name' => 'Emisná technika — emissions exhaust', 'slug' => 'dpf-gle'],
                    ['name' => 'Diesel — turbodiesel TDI', 'slug' => 'diesel-dpf-gle'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Škoda Kodiaq RS 2.0 TSI',
        'registration_number' => 'SK889911',
        'is_registered' => true,
        'description' => 'Najväčšie Škoda SUV s 245 koňmi a DSG. Sedem miest, sportový charakter RS. Rodinné performance SUV — seven seater hot SUV.',
        'categories' => [
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-kodiaq-rs'],
            ['name' => 'Hot hatch — performance compact', 'slug' => 'hot-hatch-kodiaq'],
            ['name' => 'Rodinné auto — daily driver', 'slug' => 'rodinne-kodiaq'],
        ],
        'parts' => [
            [
                'name' => 'Turbo IS38 Kodiaq RS',
                'serial_number' => 'RAG087',
                'description' => 'Turbocharger IS38 pre 2.0 TSI Kodiaq RS 245 hp. Chirping pri akcelerácii, kontrola wastegate. Forced induction turbo boost.',
                'categories' => [
                    ['name' => 'Turbo a plnenie — forced induction', 'slug' => 'turbo-kodiaq-rs'],
                    ['name' => 'Motor výkon — high performance engine', 'slug' => 'motor-kodiaq-rs'],
                ],
            ],
            [
                'name' => 'Brzdové kotúče predné Kodiaq RS',
                'serial_number' => 'RAG088',
                'description' => 'Ventilované brzdové kotúče (brake discs) 340 mm predná náprava Kodiaq RS. Ťažké auto = vysoké zaťaženie bŕzd pri plnom obsadení.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-kodiaq-rs'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Audi Q7 55 TFSI e quattro',
        'registration_number' => 'AQ223355',
        'is_registered' => true,
        'description' => 'Veľké luxusné SUV s plug-in hybridom V6 a siedmimi sedadlami. Quattro pohon, air suspension. Large premium PHEV family SUV.',
        'categories' => [
            ['name' => 'Hybrid HEV — gasoline electric', 'slug' => 'phev-q7'],
            ['name' => 'Premium sedan / touring', 'slug' => 'premium-q7'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-q7'],
        ],
        'parts' => [
            [
                'name' => 'Quattro rozdielový most zadný Q7',
                'serial_number' => 'RAG089',
                'description' => 'Zadný diferenciál quattro pre Q7 TFSI e. Servis oleja mostu každých 60 tisíc km. AWD drivetrain rear differential.',
                'categories' => [
                    ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'quattro-q7-zadny'],
                    ['name' => 'Prevodovka — transmission drivetrain', 'slug' => 'prevodovka-q7'],
                ],
            ],
            [
                'name' => 'Vzduchový filter Q7',
                'serial_number' => 'RAG090',
                'description' => 'Vzduchový filter motora (engine air filter) Audi Q7 3.0 TFSI. Prachová cesta off-road — častejšia výmena. Air intake filtration.',
                'categories' => [
                    ['name' => 'Filtre a kvapaliny', 'slug' => 'filter-vzduch-q7'],
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-filter-q7'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Ford Ranger Raptor 3.0 V6',
        'registration_number' => 'FR556677',
        'is_registered' => true,
        'description' => 'Extrémny pickup s twin-turbo V6 292 koňmi a FOX tlmičmi. Off-road pickup truck — desert racing DNA. Baja inspired performance truck.',
        'categories' => [
            ['name' => 'Off-road SUV — 4x4 terrain', 'slug' => 'offroad-ranger'],
            ['name' => 'Dobrodružstvo — adventure overlanding', 'slug' => 'dobrodruzstvo-ranger'],
            ['name' => 'Benzín turbo — petrol turbo', 'slug' => 'benzin-ranger-v6'],
        ],
        'parts' => [
            [
                'name' => 'FOX tlmiče predné Ranger Raptor',
                'serial_number' => 'RAG091',
                'description' => 'FOX Live Valve tlmiče (shock absorbers) s elektronickou reguláciou pre Ranger Raptor. Off-road suspension performance — unikátne pre pickup.',
                'categories' => [
                    ['name' => 'Podvozok — suspension chassis', 'slug' => 'fox-tlmivky-ranger'],
                    ['name' => 'Off-road výbava — overlanding accessories', 'slug' => 'offroad-tlmivky'],
                ],
            ],
            [
                'name' => 'Ochrana predného difera',
                'serial_number' => 'RAG092',
                'description' => 'Oceľový štít (skid plate) pod motorom a predným diferenciálom. Ochrana pri jazde cez kamene a blato. Underbody protection off-road.',
                'categories' => [
                    ['name' => 'Off-road výbava — overlanding accessories', 'slug' => 'skid-plate-ranger'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Toyota Land Cruiser 300 3.3 D',
        'registration_number' => 'TL778899',
        'is_registered' => true,
        'description' => 'Legendárny off-road SUV s dieselom 3.3 V6 twin-turbo a rámovou konštrukciou. Brodenie, ťahanie, extrémny terén. LC300 indestructible.',
        'categories' => [
            ['name' => 'Off-road SUV — 4x4 terrain', 'slug' => 'offroad-land-cruiser'],
            ['name' => 'Diesel — turbodiesel TDI', 'slug' => 'diesel-land-cruiser'],
            ['name' => 'Dobrodružstvo — adventure overlanding', 'slug' => 'dobrodruzstvo-lc300'],
        ],
        'parts' => [
            [
                'name' => 'Redukčná prevodovka LC300',
                'serial_number' => 'RAG093',
                'description' => 'Transfer case (redukčná prevodovka) s režimami 4H a 4L pre Land Cruiser 300. Olej vymeniť každých 40 tisíc km. Low range off-road gearing.',
                'categories' => [
                    ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'redukcia-lc300'],
                    ['name' => 'Prevodovka — transmission drivetrain', 'slug' => 'prevodovka-lc300'],
                ],
            ],
            [
                'name' => 'Palivový filter diesel LC300',
                'serial_number' => 'RAG094',
                'description' => 'Palivový filter (fuel filter) pre 3.3 D twin-turbo. Kvalitná nafta kritická pre vstrekováče — voda v palive poškodí motor. Diesel fuel filtration.',
                'categories' => [
                    ['name' => 'Filtre a kvapaliny', 'slug' => 'filter-nafta-lc300'],
                    ['name' => 'Motor — engine maintenance', 'slug' => 'motor-diesel-lc300'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Nissan Leaf e+ 62 kWh',
        'registration_number' => 'NL990011',
        'is_registered' => true,
        'description' => 'Jeden z prvých masových elektromobilov, verzia e+ s dojazdom 385 km. CHAdeMO nabíjanie, e-Pedal. Pioneer EV hatchback — affordable electric.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-leaf'],
            ['name' => 'Mestské auto — city car B segment', 'slug' => 'mestske-leaf'],
            ['name' => 'Ekologická jazda — eco driving', 'slug' => 'eko-leaf'],
        ],
        'parts' => [
            [
                'name' => 'Batéria 62 kWh Leaf e+',
                'serial_number' => 'RAG095',
                'description' => 'Lithium-ion batéria 62 kWh pre Leaf e+. Battery health bar na palubnej doske — SOH monitoring. Traction battery degradation over time.',
                'categories' => [
                    ['name' => 'Trakčná batéria — traction battery', 'slug' => 'bateria-leaf'],
                ],
            ],
            [
                'name' => 'Brzdové platničky Leaf predné',
                'serial_number' => 'RAG096',
                'description' => 'Predné brzdové platničky (front brake pads) Nissan Leaf. e-Pedal rekuperácia znižuje opotrebenie — stále treba kontrolovať. EV brake maintenance.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-leaf'],
                    ['name' => 'Rekuperácia — energy recovery', 'slug' => 'rekuperacia-leaf'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Hyundai Ioniq 5 AWD',
        'registration_number' => 'HY334422',
        'is_registered' => true,
        'description' => 'Retro-futuristické EV s 800V nabíjaním a dojazdom 430 km. V2L zásuvka pre napájanie zariadení. Design icon electric crossover.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-ioniq5'],
            ['name' => 'SUV crossover — compact SUV', 'slug' => 'suv-ioniq5'],
        ],
        'parts' => [
            [
                'name' => '800V DC nabíjací modul',
                'serial_number' => 'RAG097',
                'description' => 'Ultra-rýchlonabíjací modul 800V pre Ioniq 5 — 10-80 % za 18 min pri 350 kW. Charging infrastructure high voltage. Nie je to onboard AC charger.',
                'categories' => [
                    ['name' => 'Nabíjanie AC/DC — charging infrastructure', 'slug' => 'nabijanie-ioniq5-800v'],
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'ev-nabijanie-ioniq5'],
                ],
            ],
            [
                'name' => 'V2L adaptér Ioniq 5',
                'serial_number' => 'RAG098',
                'description' => 'Vehicle-to-Load adaptér (V2L) pre napájanie kempingového vybavenia, notebooku alebo elektrického grilu z auta. 3.6 kW AC výstup. EV power outlet.',
                'categories' => [
                    ['name' => 'Nabíjanie AC/DC — charging infrastructure', 'slug' => 'v2l-ioniq5'],
                    ['name' => 'Elektronika — electronics infotainment', 'slug' => 'elektronika-v2l'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Kia EV6 GT',
        'registration_number' => 'KE556688',
        'is_registered' => true,
        'description' => 'Elektrické GT s 585 koňmi, drift režimom a 800V architektúrou. Najrýchlejšie Kia v histórii. Performance EV gran turismo — electric supercar SUV.',
        'categories' => [
            ['name' => 'Elektromobil — EV electric vehicle', 'slug' => 'ev-ev6-gt'],
            ['name' => 'Hot hatch — performance compact', 'slug' => 'hot-hatch-ev6'],
            ['name' => 'Športová jazda — track day', 'slug' => 'sport-ev6-gt'],
        ],
        'parts' => [
            [
                'name' => 'Predný elektromotor EV6 GT 160 kW',
                'serial_number' => 'RAG099',
                'description' => 'Predný traction motor 160 kW pre AWD EV6 GT. Drift režim deaktivuje prednú nápravu. Dual motor electric performance drivetrain.',
                'categories' => [
                    ['name' => 'Elektrický pohon — powertrain EV', 'slug' => 'motor-ev6-gt-predny'],
                    ['name' => 'Pohon 4x4 — all-wheel drive', 'slug' => 'awd-ev6-gt'],
                ],
            ],
            [
                'name' => 'Brzdové platničky EV6 GT sport',
                'serial_number' => 'RAG100',
                'description' => 'Vysokoperformance brzdové platničky (brake pads) pre EV6 GT 585 hp. Green Brembo strmen, rýchle opotrebenie pri track dňoch. Sport braking EV.',
                'categories' => [
                    ['name' => 'Brzdový systém — braking', 'slug' => 'brzdy-ev6-gt'],
                    ['name' => 'Športová jazda — track day', 'slug' => 'sport-brzdy-ev6'],
                ],
            ],
        ],
    ],
];
