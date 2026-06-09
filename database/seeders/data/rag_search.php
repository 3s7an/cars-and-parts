<?php

/**
 * Kurátorované dáta pre RAG testovanie — autá a diely s odkazmi na kategórie cez slug.
 * Číselníky: rag_car_categories.php, rag_part_categories.php
 */
return array (
  0 => 
  array (
    'name' => 'Škoda Octavia Combi 2.0 TDI',
    'registration_number' => 'BA123456',
    'is_registered' => true,
    'description' => 'Rodinné kombi s dvojlitrovým turbodieselom. Nízka spotreba na diaľnici, veľký batožinový priestor. Ideálne na dlhé trasy a ťahanie prívesu. Servisná história kompletná u autorizovaného servisu Škoda.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Brzdové platničky predné',
        'serial_number' => 'BRKPL001',
        'description' => 'Predné brzdové platničky (brake pads) pre Octaviu. Keramický materiál, nízky prach, vhodné do mesta. Výmena každých 40–50 tisíc km. Súvisí s kotúčmi a brzdovou kvapalinou DOT 4.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'bezpecnost',
        ),
      ),
      1 => 
      array (
        'name' => 'Olejový filter motor',
        'serial_number' => 'OILFL002',
        'description' => 'Filter motorového oleja 2.0 TDI. Odporúčaná výmena pri každom servise oleja 5W-30 LL. Zabraňuje abrázii vstrekovacej sústavy common rail.',
        'category_slugs' => 
        array (
          0 => 'motor-engine',
          1 => 'filtre-kvapaliny',
        ),
      ),
      2 => 
      array (
        'name' => 'Svetlomet ľavý LED',
        'serial_number' => 'LEDHL003',
        'description' => 'Ľavý predný LED svetlomet s denným svietením DRL. Kompatibilný s adaptívnym tempomatom. Oprava po kolízii — homologizácia ECE R112.',
        'category_slugs' => 
        array (
          0 => 'osvetlenie',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'kombi-station-wagon',
      1 => 'diesel-tdi',
      2 => 'rodinne-auto',
    ),
  ),
  1 => 
  array (
    'name' => 'BMW 320i xDrive Touring',
    'registration_number' => 'KE987654',
    'is_registered' => true,
    'description' => 'Športové kombi s benzínovým turbo motorom B48 a pohonom všetkých kolies xDrive. Dynamická jazda, pohon 4x4 v zime na snehu. Premium interiér, iDrive infotainment.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Alternátor 150A',
        'serial_number' => 'ALTGN004',
        'description' => 'Alternátor 150 ampérov pre nabíjanie AGM batérie. Problémy so štartovaním môžu súvisieť s opotrebením regulátora napätia. Diagnostika cez ISTA.',
        'category_slugs' => 
        array (
          0 => 'elektricky-system',
          1 => 'nabijanie-start',
        ),
      ),
      1 => 
      array (
        'name' => 'Tlmivka zadná ľavá',
        'serial_number' => 'SHOCK005',
        'description' => 'Plynová tlmivka (shock absorber) zadnej nápravy. Odporúča sa vymeniť v páre pre vyváženú geometriu. Súvisí s pružinami a silentblokmi.',
        'category_slugs' => 
        array (
          0 => 'podvozok',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'premium-touring',
      1 => 'benzin-turbo',
      2 => 'pohon-4x4',
    ),
  ),
  2 => 
  array (
    'name' => 'Tesla Model 3 Long Range',
    'registration_number' => NULL,
    'is_registered' => false,
    'description' => 'Elektrické sedan s dojazdom okolo 500 km WLTP. Bez spaľovacieho motora — údržba brzd kvapaliny, chladiacej zmesi batérie a pneumatík. Autopilot hardware HW3.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'HV batériový modul 75 kWh',
        'serial_number' => 'HVBT006',
        'description' => 'Vysokonapäťový lítiový modul 75 kWh. Teplotný management cez chladiacu kvapalinu. Recyklácia batérie podľa EU nariadenia. Nie je vhodný do spaľovacích áut.',
        'category_slugs' => 
        array (
          0 => 'trakcna-bateria',
          1 => 'elektricky-pohon',
        ),
      ),
      1 => 
      array (
        'name' => 'Palubná nabíjačka onboard charger',
        'serial_number' => 'OBCG007',
        'description' => 'On-board charger 11 kW AC pre domácu Wallbox nabíjačku Type 2. DC rýchlonabíjanie cez samostatný port CCS. Overenie kábla a ističa 3×16 A.',
        'category_slugs' => 
        array (
          0 => 'nabijanie-ac-dc',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'sedan',
    ),
  ),
  3 => 
  array (
    'name' => 'Ford Transit Custom L2H1',
    'registration_number' => 'TN445566',
    'is_registered' => true,
    'description' => 'Úžitkový van na prepravu tovaru, dvojlitrový diesel Euro 6. Vysoká nosnosť, posuvné bočné dvere. Časté použitie v kuriérskych službách a stavebníctve.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Spojková sada heavy duty',
        'serial_number' => 'CLTCH008',
        'description' => 'Ťažká spojka pre vysoké zaťaženie a časté rozjazdy v meste. Výmena pri cukaní a preklzávaní. Súvisí s dvojhmotovým zotrvačníkom DMF.',
        'category_slugs' => 
        array (
          0 => 'prevodovka-manual',
        ),
      ),
      1 => 
      array (
        'name' => 'Zadné brzdové bubny',
        'serial_number' => 'DRMBR009',
        'description' => 'Brzdové bubny zadnej nápravy úžitkového vozu. Iný typ ako kotúčové brzdy — často sa zanedbáva servis. Kontrola čelistí a bŕzdovej páky ručnej.',
        'category_slugs' => 
        array (
          0 => 'brzdy-bubny',
          1 => 'brzdovy-system',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'uzitkove-vozidlo',
      1 => 'dodavka-fleet',
    ),
  ),
  4 => 
  array (
    'name' => 'Volkswagen Golf VIII GTI',
    'registration_number' => 'ZA112233',
    'is_registered' => true,
    'description' => 'Horúci hatchback s motorom EA888 evo 245 koní. Krátky wheelbase, agilná jazda na okruhu aj v meste. Výfuk Akrapovič voliteľný, diferenciál XDS.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Turbocharger IS20',
        'serial_number' => 'TRBIS010',
        'description' => 'Turbo IS20 pre 2.0 TSI GTI. Pri úniku oleja skontrolovať ventiláciu kľuky. Častá téma: chirping, wastegate, mapovanie Stage 1.',
        'category_slugs' => 
        array (
          0 => 'turbo-plnenie',
          1 => 'motor-vykon',
        ),
      ),
      1 => 
      array (
        'name' => 'Športové sedadlá Alcantara',
        'serial_number' => 'SEAT011',
        'description' => 'Predné sedadlá s bočnicami Alcantara, vyhrievanie a masáž nie sú. Komfort vs. držanie v zákrutách. Čalúnenie interiér — upholstery.',
        'category_slugs' => 
        array (
          0 => 'interier-cabin',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hot-hatch',
      1 => 'sportova-jazda',
    ),
  ),
  5 => 
  array (
    'name' => 'Toyota Prius Hybrid',
    'registration_number' => 'NR778899',
    'is_registered' => true,
    'description' => 'Hybridný hatchback — benzín Atkinson + elektromotor. Nízka spotreba v meste, regeneratívne brzdenie. Ni-MH alebo Li-ion batéria podľa generácie.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Hybridná invertorová jednotka',
        'serial_number' => 'INVHY012',
        'description' => 'Power control unit prepája motor, generátor a batériu. Chyby P0A80 často súvisia s HV batériou. Špeciálna diagnostika Toyota Techstream.',
        'category_slugs' => 
        array (
          0 => 'hybridny-pohon',
          1 => 'elektricky-system',
        ),
      ),
      1 => 
      array (
        'name' => 'Regeneratívne brzdy zadné',
        'serial_number' => 'REGBR013',
        'description' => 'Zadné brzdy s prioritou rekuperácie energie. Pri servise skontrolovať aj klasické platničky. Brzdový dojem môže byť iný ako u čisto spaľovacieho auta.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'rekuperacia',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'ekologicka-jazda',
    ),
  ),
  6 => 
  array (
    'name' => 'Land Rover Defender 110',
    'registration_number' => 'BB334455',
    'is_registered' => true,
    'description' => 'Off-road SUV s rámovou konštrukciou, uzamykateľnými diferenciálmi a brodením vodou. Diesel mild-hybrid Ingenium. Terén, bahno, kamenie — ground clearance.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Redukčná prevodovka transfer case',
        'serial_number' => 'TFCASE14',
        'description' => 'Rozvodovka s redukciou low range pre strmé kopce. Olej v transfer case vymeniť podľa servisného plánu. Hlučnosť pri zaradení 4LO.',
        'category_slugs' => 
        array (
          0 => 'pohon-4x4',
          1 => 'prevodovka-drivetrain',
        ),
      ),
      1 => 
      array (
        'name' => 'Snorkel vzduchový prívod',
        'serial_number' => 'SNORK015',
        'description' => 'Vyvýšený prívod vzduchu pri brodení rieky. Chráni motor pred vodou do sania. Často inštalovaný aftermarket na Defender a Wrangler.',
        'category_slugs' => 
        array (
          0 => 'offroad-vybava',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'offroad-suv',
      1 => 'dobrodruzstvo',
    ),
  ),
  7 => 
  array (
    'name' => 'Peugeot 208 PureTech 100',
    'registration_number' => NULL,
    'is_registered' => false,
    'description' => 'Malé mestské auto s trojvalcom 1.2 PureTech. Kompaktné parkovanie, nízke emisie. Pozor na rozvodový remeň — servisná kampaň výrobcu.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Rozvodový remeň s vodnou pumpou',
        'serial_number' => 'TMBLT016',
        'description' => 'Sada rozvodu PureTech — remeň, kladky, pumpa. Kritická výmena podľa km, nie oleja. Prevencia kontaktu ventilov s piestami pri pretrhnutí.',
        'category_slugs' => 
        array (
          0 => 'motor-engine',
          1 => 'rozvod-timing',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'mestske-auto',
      1 => 'benzin-3valcec',
    ),
  ),
  8 => 
  array (
    'name' => 'Mercedes-Benz Sprinter 316 CDI',
    'registration_number' => 'TT667788',
    'is_registered' => true,
    'description' => 'Veľká dodávka na prepravu osôb alebo nákladu, diesel CDI, vysoká stavba H2. AdBlue SCR, DPF filter. Servis flotily — fleet management.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'DPF filter pevných častíc',
        'serial_number' => 'DPFFL017',
        'description' => 'Diesel particulate filter — regenerácia na diaľnici alebo nútená v servise. Soot, PM2.5, emisná norma Euro 6. Súvisí s AdBlue a lambda sondou.',
        'category_slugs' => 
        array (
          0 => 'emisna-technika',
          1 => 'diesel-emisie',
        ),
      ),
      1 => 
      array (
        'name' => 'AdBlue nádrž a čerpadlo',
        'serial_number' => 'ADBLU018',
        'description' => 'Systém SCR s kvapalinou AdBlue (DEF). Varovanie na palubnej doske pri nízkej hladine. Zimné skladovanie — kryštalizácia močoviny.',
        'category_slugs' => 
        array (
          0 => 'emisna-technika',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'uzitkove-vozidlo',
      1 => 'flotila',
    ),
  ),
  9 => 
  array (
    'name' => 'Honda Civic Type R FK8',
    'registration_number' => 'SC990011',
    'is_registered' => true,
    'description' => 'Predokolka s turbo 2.0 VTEC Turbo 320 hp. Nürburgring setup, Brembo brzdy, wing spoiler. Track tool — okruh, časová jazda, +R mode.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Brembo brzdové kotúče predné',
        'serial_number' => 'BRMBO019',
        'description' => 'Ventrilované kotúče 350 mm predná náprava. Vysokoteplotná odolnosť pri track dňoch. Platničky musia byť kompatibilné — brake fade minimalizácia.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'sport-brzdy',
        ),
      ),
      1 => 
      array (
        'name' => 'Vzduchový filter sport K&N',
        'serial_number' => 'KNFLTR20',
        'description' => 'Športový vzduchový filter s vyšším prietokom. Možný mierny nárast výkonu, pravidelné čistenie olejom K&N. Nie je HEPA — cabin filter je iný diel.',
        'category_slugs' => 
        array (
          0 => 'motor-engine',
          1 => 'tuning-aftermarket',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hot-hatch',
      1 => 'track-day',
    ),
  ),
  10 => 
  array (
    'name' => 'Audi A4 Avant 40 TDI quattro',
    'registration_number' => 'BL556677',
    'is_registered' => true,
    'description' => 'Prémiové kombi s quattro pohonom a dvojlitrovým dieselom. Virtual Cockpit, Matrix LED. Vhodné na diaľničné kilometry aj zimnú jazdu — AWD traction.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Quattro rozdielový most predný',
        'serial_number' => 'RAG021',
        'description' => 'Predný diferenciál quattro s viskóznou spojkou. Hlučnosť pri ostrých zákrutách môže signalizovať opotrebenie. Servis oleja Haldex každých 60 tisíc km.',
        'category_slugs' => 
        array (
          0 => 'pohon-4x4',
          1 => 'prevodovka-drivetrain',
        ),
      ),
      1 => 
      array (
        'name' => 'Kabínový filter HEPA',
        'serial_number' => 'RAG022',
        'description' => 'Filter vzduchu v interiéri (cabin air filter) s uhlíkovou vrstvou proti alergénom. Nie je to vzduchový filter motora — často sa mýli pri objednávke dielov.',
        'category_slugs' => 
        array (
          0 => 'filtre-kvapaliny',
          1 => 'interier-cabin',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'kombi-station-wagon',
      1 => 'premium-touring',
      2 => 'diesel-tdi',
    ),
  ),
  11 => 
  array (
    'name' => 'Hyundai Kona Electric 64 kWh',
    'registration_number' => 'PO778812',
    'is_registered' => true,
    'description' => 'Kompaktné crossover EV s dojazdom okolo 400 km. Jednoplodochodový pohon, rekuperácia pri brzdení. Ideálne mestské elektromobil — city EV crossover.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Chladiaca zmes batérie EV',
        'serial_number' => 'RAG023',
        'description' => 'Špeciálna kvapalina pre chladenie trakčnej batérie lithium-ion. Teplotný management pred degradáciou pri rýchlom DC nabíjaní. Nie je to motorový antifreeze.',
        'category_slugs' => 
        array (
          0 => 'trakcna-bateria',
          1 => 'elektricky-pohon',
        ),
      ),
      1 => 
      array (
        'name' => 'Brzdové platničky zadné keramické',
        'serial_number' => 'RAG024',
        'description' => 'Zadné brzdové platničky (rear brake pads) pre Kona EV. Pri EV sa zadné brzdy opotrebúvajú pomalšie kvôli rekuperácii — stále treba kontrolovať hrúbku.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'crossover-kona',
    ),
  ),
  12 => 
  array (
    'name' => 'Kia Sportage 1.6 T-GDI AWD',
    'registration_number' => 'KI334421',
    'is_registered' => true,
    'description' => 'Rodinné SUV s turbobenzínom a pohonom oboch náprav. Veľký displej, asistenčné systémy ADAS. Stredná trieda SUV — family crossover segment.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Lambda sonda predkatalyzátor',
        'serial_number' => 'RAG025',
        'description' => 'Oxygen sensor (lambda probe) pred katalyzátorom. Chyba P0130, zvýšená spotreba, nevyrovnaný voľnobeh. Diagnostika OBD-II emisná technika.',
        'category_slugs' => 
        array (
          0 => 'emisna-technika',
          1 => 'motor-engine',
        ),
      ),
      1 => 
      array (
        'name' => 'Predné brzdové kotúče ventilované',
        'serial_number' => 'RAG026',
        'description' => 'Brzdové kotúče (brake discs) predná náprava Sportage. Vibrácie volantu pri brzdení = nerovnomerné opotrebenie. Súvisí s platničkami a brzdovou kvapalinou.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'crossover-kona',
      1 => 'benzin-turbo',
      2 => 'pohon-4x4',
    ),
  ),
  13 => 
  array (
    'name' => 'Mazda CX-5 2.2 Skyactiv-D',
    'registration_number' => 'MA889901',
    'is_registered' => true,
    'description' => 'Japonské SUV s dieselom Skyactiv-D 150 koní. Kuro dizajn, jemná jazda, nízke emisie vďaka vysokému kompresnému pomeru. Diesel SUV daily driver.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Palivový filter diesel',
        'serial_number' => 'RAG027',
        'description' => 'Filter naftového paliva (fuel filter) pre common rail systém. Voda v nafte môže poškodiť vstrekováče — pravidelná výmena každých 60 tisíc km.',
        'category_slugs' => 
        array (
          0 => 'filtre-kvapaliny',
          1 => 'motor-engine',
        ),
      ),
      1 => 
      array (
        'name' => 'Silentblok predného ramena',
        'serial_number' => 'RAG028',
        'description' => 'Gumový silentblok (control arm bushing) predného ramena. Klepanie cez nerovnosti, nepresná geometria kolies. Podvozok suspension wear item.',
        'category_slugs' => 
        array (
          0 => 'podvozok',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'crossover-kona',
      1 => 'diesel-tdi',
    ),
  ),
  14 => 
  array (
    'name' => 'Nissan Qashqai e-POWER',
    'registration_number' => 'NI112244',
    'is_registered' => true,
    'description' => 'Sériový hybrid — benzínový motor generuje elektrinu, pohon len elektromotor. Žiadna zástrčka, nízka spotreba v meste. e-POWER series hybrid technology.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Invertor e-POWER',
        'serial_number' => 'RAG029',
        'description' => 'Power inverter mení DC z batérie na AC pre traction motor. Špecifický diel pre e-POWER architektúru — nie je kompatibilný s Leaf ani klasickým hybridom.',
        'category_slugs' => 
        array (
          0 => 'hybridny-pohon',
          1 => 'elektricky-system',
        ),
      ),
      1 => 
      array (
        'name' => 'Vstrekováč AdBlue systém',
        'serial_number' => 'RAG030',
        'description' => 'Dávkovač AdBlue pre SCR katalyzátor. Chyba emisného systému, obmedzenie výkonu. Súvisí s DPF a lambda sondou — diesel emisná technika.',
        'category_slugs' => 
        array (
          0 => 'emisna-technika',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'crossover-kona',
    ),
  ),
  15 => 
  array (
    'name' => 'Volvo XC60 Recharge T8',
    'registration_number' => 'VO556688',
    'is_registered' => true,
    'description' => 'Plug-in hybrid SUV s kombinovaným výkonom 455 koní. Bezpečnostné systémy City Safety, kožený interiér. PHEV premium family SUV — dojazd na elektrinu cca 50 km.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'PHEV nabíjací port Type 2',
        'serial_number' => 'RAG031',
        'description' => 'Konektor AC nabíjania na ľavom prednom blatníku. Poškodenie po zime alebo nečistote kontaktov — nabíjanie nezačne. Wallbox kompatibilita 11 kW.',
        'category_slugs' => 
        array (
          0 => 'nabijanie-ac-dc',
        ),
      ),
      1 => 
      array (
        'name' => 'Brzdové platničky predné Akebono',
        'serial_number' => 'RAG032',
        'description' => 'Originálne predné brzdové platničky (front brake pads) Volvo XC60. Pri PHEV hmotnosti sa opotrebúvajú rýchlejšie — kontrola hrúbky každých 15 tisíc km.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'bezpecnost',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'premium-touring',
      2 => 'crossover-kona',
    ),
  ),
  16 => 
  array (
    'name' => 'Renault Clio E-Tech Hybrid',
    'registration_number' => 'RN223344',
    'is_registered' => true,
    'description' => 'Malé hybridné hatchback s technológiou E-Tech — multi-mode gearbox bez spojky. Mestská jazda bez spotreby na krátke trasy. B segment hybrid city car.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Hybridná 48V batéria',
        'serial_number' => 'RAG033',
        'description' => 'Lithium-ion batéria 48V pre E-Tech systém. Chyba hybridného režimu, reštart motora pri jazde. Nie je to trakčná HV batéria EV — nižšie napätie.',
        'category_slugs' => 
        array (
          0 => 'hybridny-pohon',
          1 => 'elektricky-system',
        ),
      ),
      1 => 
      array (
        'name' => 'Spojler zadný Clio RS Line',
        'serial_number' => 'RAG034',
        'description' => 'Zadný difúzor a spojler karosérie RS Line. Karosársky diel (body panel) — oprava po parkovacej kolízii. Nie je mechanický komponent pohonu.',
        'category_slugs' => 
        array (
          0 => 'karoseria-spojler',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'mestske-auto',
    ),
  ),
  17 => 
  array (
    'name' => 'Fiat 500e',
    'registration_number' => NULL,
    'is_registered' => false,
    'description' => 'Retro mestské elektromobil s dojazdom 320 km WLTP. Kompaktné rozmery pre parkovanie v centre. Iconic Italian city EV — zero emission urban driving.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Elektromotor 87 kW',
        'serial_number' => 'RAG035',
        'description' => 'Permanent magnet synchronous motor (PMSM) 87 kW. Tichý chod, okamžitý krútiaci moment. Servis zriedkavý — kontrola ložísk a chladenia.',
        'category_slugs' => 
        array (
          0 => 'elektricky-pohon',
        ),
      ),
      1 => 
      array (
        'name' => 'Pneumatika 205/55 R16 letná',
        'serial_number' => 'RAG036',
        'description' => 'Letná pneumatika pre Fiat 500e — nízky valivý odpor pre dojazd EV. Rotácia každých 10 tisíc km, kontrola tlaku 2.5 bar. Tires tyres gumy.',
        'category_slugs' => 
        array (
          0 => 'pneumatiky-500e',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'mestske-auto',
    ),
  ),
  18 => 
  array (
    'name' => 'Opel Corsa Electric',
    'registration_number' => 'OP445566',
    'is_registered' => true,
    'description' => 'Elektrická verzia Corsy na platforme CMP. Dojazd 357 km, 100 kW DC rýchlonabíjanie. Nemecká značka, francúzska platforma — compact EV hatchback.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'CCS rýchlonabíjací kábel',
        'serial_number' => 'RAG037',
        'description' => 'Kábel CCS Combo 2 pre DC nabíjanie do 100 kW. Overenie kontaktov, poškodenie po zime. Charging cable infrastructure — nie je Wallbox.',
        'category_slugs' => 
        array (
          0 => 'nabijanie-ac-dc',
        ),
      ),
      1 => 
      array (
        'name' => 'Brzdová kvapalina DOT 4 LV',
        'serial_number' => 'RAG038',
        'description' => 'Brzdová kvapalina (brake fluid) s nízkou viskozitou pre ABS a ESP. Výmena každé 2 roky — aj pri EV, hydraulické brzdy zostávajú. DOT 4 brake fluid.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'filtre-kvapaliny',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'mestske-auto',
    ),
  ),
  19 => 
  array (
    'name' => 'Jeep Wrangler Rubicon 2.0 Turbo',
    'registration_number' => 'JE667788',
    'is_registered' => true,
    'description' => 'Legendárny off-road s uzamykateľnými mostami, redukciou a odnímateľnými dverami. Rock crawling, brodenie, trail driving. 4x4 adventure icon.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Predný most Dana 44',
        'serial_number' => 'RAG039',
        'description' => 'Robustný predný most (front axle) Dana 44 s uzamykateľným diferenciálom. Servis oleja mostov po brodení vode. Off-road drivetrain component.',
        'category_slugs' => 
        array (
          0 => 'pohon-4x4',
          1 => 'offroad-vybava',
        ),
      ),
      1 => 
      array (
        'name' => 'Bull bar oceľový A-bar',
        'serial_number' => 'RAG040',
        'description' => 'Oceľový nárazník (bull bar) pre ochranu pri off-road jazde. Aftermarket accessory — homologizácia airbag senzora. Karosárska ochrana predná.',
        'category_slugs' => 
        array (
          0 => 'offroad-vybava',
          1 => 'karoseria-spojler',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'offroad-suv',
      1 => 'dobrodruzstvo',
      2 => 'benzin-turbo',
    ),
  ),
  20 => 
  array (
    'name' => 'Subaru Outback 2.5i AWD',
    'registration_number' => 'SU889900',
    'is_registered' => true,
    'description' => 'Estate crossover so symetrickým pohonom AWD a boxer motorom. Vynikajúca trakcia na snehu a blate. EyeSight asistenčné systémy. Wagon adventure vehicle.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Rozvodový remeň boxer',
        'serial_number' => 'RAG041',
        'description' => 'Rozvodový remeň (timing belt) pre horizontálny boxer motor 2.5i. Kritická výmena každých 100 tisíc km — pri pretrhnutí ventily narazia na piesty.',
        'category_slugs' => 
        array (
          0 => 'rozvod-timing',
          1 => 'motor-engine',
        ),
      ),
      1 => 
      array (
        'name' => 'Kardanový hriadeľ AWD',
        'serial_number' => 'RAG042',
        'description' => 'Kardan (driveshaft) medzi prevodovkou a zadným mostom. Vibrácie pri akcelerácii = opotrebené križové kĺby. Symetrický AWD pohon Subaru.',
        'category_slugs' => 
        array (
          0 => 'prevodovka-drivetrain',
          1 => 'pohon-4x4',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'kombi-station-wagon',
      1 => 'pohon-4x4',
      2 => 'dobrodruzstvo',
    ),
  ),
  21 => 
  array (
    'name' => 'Mitsubishi Outlander PHEV',
    'registration_number' => 'MI334455',
    'is_registered' => true,
    'description' => 'Rodinné SUV plug-in hybrid s dvoma elektromotormi a Super All-Wheel Control. Dojazd na elektrinu 80 km. Twin motor PHEV SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Predný elektromotor 60 kW',
        'serial_number' => 'RAG043',
        'description' => 'Traction motor prednej nápravy Outlander PHEV. Tichý pohon v EV režime. Chyba P1B00 — diagnostika cez MUT-III. Electric drive unit front.',
        'category_slugs' => 
        array (
          0 => 'elektricky-pohon',
          1 => 'hybridny-pohon',
        ),
      ),
      1 => 
      array (
        'name' => 'Klimatizačný kompresor PHEV',
        'serial_number' => 'RAG044',
        'description' => 'Elektrický AC kompresor pre klimatizáciu v EV režime bez bežiaceho motora. Klimatizácia air conditioning HVAC — odlišný od kompresora spaľovacieho auta.',
        'category_slugs' => 
        array (
          0 => 'klima-kompresor',
          1 => 'interier-cabin',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'crossover-kona',
      2 => 'pohon-4x4',
    ),
  ),
  22 => 
  array (
    'name' => 'Lexus RX 450h F Sport',
    'registration_number' => 'LE112233',
    'is_registered' => true,
    'description' => 'Luxusné hybridné SUV s Atkinson motorom 3.5 V6 a e-CVT. Tichá jazda, vysoká spoľahlivosść Toyota hybrid platform. Premium hybrid luxury SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Hybridná transmisná batéria Ni-MH',
        'serial_number' => 'RAG045',
        'description' => 'Nickel-metal hydride batéria (HV battery pack) pre Lexus hybrid. Rekondicionovanie po 200 tisíc km. Chyby P0A80, P3000 — hybrid battery health.',
        'category_slugs' => 
        array (
          0 => 'hybridny-pohon',
          1 => 'trakcna-bateria',
        ),
      ),
      1 => 
      array (
        'name' => 'Adaptívne tlmiče AVS',
        'serial_number' => 'RAG046',
        'description' => 'Adaptívne tlmiče (adaptive dampers) F Sport s elektronickým riadením tuhosti. Sport vs. Comfort režim. Podvozok suspension premium.',
        'category_slugs' => 
        array (
          0 => 'podvozok',
          1 => 'sport-brzdy',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'premium-touring',
      2 => 'crossover-kona',
    ),
  ),
  23 => 
  array (
    'name' => 'Mini Cooper S JCW',
    'registration_number' => 'MN445566',
    'is_registered' => true,
    'description' => 'Kompaktné hot hatch John Cooper Works 231 koní. Go-kart handling, bristol zelená voliteľná. Britská ikona — performance mini hatchback.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Turbocharger twin scroll JCW',
        'serial_number' => 'RAG047',
        'description' => 'Twin-scroll turbo pre 2.0 Mini Cooper S JCW. Boost pressure, wastegate rattle. Tuning Stage 1 mapovanie — forced induction performance.',
        'category_slugs' => 
        array (
          0 => 'turbo-plnenie',
          1 => 'tuning-aftermarket',
        ),
      ),
      1 => 
      array (
        'name' => 'Brzdové platničky JCW sport',
        'serial_number' => 'RAG048',
        'description' => 'Predné brzdové platničky (brake pads) JCW s vysokým koeficientom trenia. Kratšia životnosť pri agresívnej jazde. Brembo upgrade kompatibilita.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'sport-brzdy',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hot-hatch',
      1 => 'benzin-turbo',
      2 => 'sportova-jazda',
    ),
  ),
  24 => 
  array (
    'name' => 'Suzuki Vitara 1.4 Boosterjet',
    'registration_number' => 'SZ778899',
    'is_registered' => true,
    'description' => 'Kompaktné SUV s turbobenzínom Boosterjet a pohonom AllGrip. Nízka hmotnosť, dobrá spotreba. Japonská jednoduchosť — budget friendly crossover.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Intercooler Boosterjet',
        'serial_number' => 'RAG049',
        'description' => 'Medzichladič (intercooler) pre turbobenzín Boosterjet. Únik boostu, poškodenie po kamienkoch z cesty. Turbo cooling charge air cooler.',
        'category_slugs' => 
        array (
          0 => 'turbo-plnenie',
          1 => 'motor-engine',
        ),
      ),
      1 => 
      array (
        'name' => 'Palivová pumpa v nádrži',
        'serial_number' => 'RAG050',
        'description' => 'Elektrická palivová pumpa (fuel pump) v nádrži. Problémy so štartovaním, motor zhasne pri jazde. Fuel delivery system component.',
        'category_slugs' => 
        array (
          0 => 'motor-engine',
          1 => 'elektricky-system',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'crossover-kona',
      1 => 'benzin-turbo',
    ),
  ),
  25 => 
  array (
    'name' => 'Dacia Duster 1.0 TCe 4x4',
    'registration_number' => 'DC990011',
    'is_registered' => true,
    'description' => 'Dostupné SUV s pohonom 4x4 a jednoduchou konštrukciou. Robustné plasty, vysoký ground clearance. Budget off-roader — value SUV segment.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Spojka Duster 4x4',
        'serial_number' => 'RAG051',
        'description' => 'Spojková sada (clutch kit) pre manuálnu prevodovku Duster 4x4. Cukanie pri rozjazdoch, preklzávanie pri ťahaní prívesu. Manual transmission clutch.',
        'category_slugs' => 
        array (
          0 => 'prevodovka-manual',
        ),
      ),
      1 => 
      array (
        'name' => 'Predný nárazník plastový',
        'serial_number' => 'RAG052',
        'description' => 'Plastový predný nárazník (front bumper) Dacia Duster. Lacný náhradný diel po off-road škrabancoch. Body panel karoséria — nie mechanika.',
        'category_slugs' => 
        array (
          0 => 'karoseria-spojler',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'crossover-kona',
      1 => 'offroad-suv',
      2 => 'benzin-turbo',
    ),
  ),
  26 => 
  array (
    'name' => 'MG4 Electric Long Range',
    'registration_number' => NULL,
    'is_registered' => false,
    'description' => 'Čínske elektrické hatchback s dojazdom 450 km a zadným pohonom. Agresívna cena, dobré jazdné vlastnosti. Value EV segment challenger.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Zadný elektromotor 150 kW',
        'serial_number' => 'RAG053',
        'description' => 'Rear wheel drive electric motor 150 kW MG4. Tichý, okamžitá odozva plynového pedála. RWD EV powertrain — nie je to predokolka.',
        'category_slugs' => 
        array (
          0 => 'elektricky-pohon',
        ),
      ),
      1 => 
      array (
        'name' => 'Batéria 77 kWh LFP',
        'serial_number' => 'RAG054',
        'description' => 'Lithium iron phosphate batéria 77 kWh — odolnejšia voči cyklom ako NMC. Nabíjanie do 80 % za 35 min DC. Traction battery LFP chemistry.',
        'category_slugs' => 
        array (
          0 => 'trakcna-bateria',
          1 => 'nabijanie-ac-dc',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'mestske-auto',
    ),
  ),
  27 => 
  array (
    'name' => 'Cupra Formentor VZ 2.0 TSI',
    'registration_number' => 'CU223344',
    'is_registered' => true,
    'description' => 'Športové crossover coupé s 310 koňmi a DSG prevodovkou. Agresívny dizajn, výfukový systém Akrapovič. Performance SUV coupe — VZ maximum.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'DSG prevodovka DQ381',
        'serial_number' => 'RAG055',
        'description' => '7-stupňová DSG dual clutch prevodovka DQ381 pre Formentor VZ. Servis oleja každých 60 tisíc km. Trhanie pri rozjazdoch = opotrebenie spojky.',
        'category_slugs' => 
        array (
          0 => 'dsg-dq381',
          1 => 'prevodovka-drivetrain',
        ),
      ),
      1 => 
      array (
        'name' => 'Výfukový systém Akrapovič',
        'serial_number' => 'RAG056',
        'description' => 'Titanový výfuk (exhaust system) Akrapovič pre Formentor VZ. Hlbší zvuk, mierne zníženie spätného tlaku. Aftermarket performance exhaust.',
        'category_slugs' => 
        array (
          0 => 'tuning-aftermarket',
          1 => 'emisna-technika',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hot-hatch',
      1 => 'crossover-kona',
      2 => 'benzin-turbo',
    ),
  ),
  28 => 
  array (
    'name' => 'Porsche Cayenne E-Hybrid Coupe',
    'registration_number' => 'PZ556677',
    'is_registered' => true,
    'description' => 'Luxusné SUV coupé s plug-in hybridom V6 turbo a 463 koňmi. PASM podvozok, keramické brzdy voliteľné. Premium PHEV performance SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Keramické brzdy PCCB predné',
        'serial_number' => 'RAG057',
        'description' => 'Porsche Ceramic Composite Brake (PCCB) predné kotúče a platničky. Ľahšie, odolnejšie voči fade pri track dňoch. Premium braking system.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'sport-brzdy',
        ),
      ),
      1 => 
      array (
        'name' => 'Air suspension kompresor',
        'serial_number' => 'RAG058',
        'description' => 'Kompresor vzduchového podvozku (air suspension compressor) PASM. Auto sa nezníži pri štarte — chyba nivelácie. Suspension pneumatic system.',
        'category_slugs' => 
        array (
          0 => 'podvozok',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'premium-touring',
      2 => 'crossover-kona',
    ),
  ),
  29 => 
  array (
    'name' => 'Audi e-tron GT quattro',
    'registration_number' => 'AU889912',
    'is_registered' => true,
    'description' => 'Elektrické gran turismo s dvoma motormi a 476 koňmi. 800V architektúra, rýchlonabíjanie 270 kW. Premium EV sports sedan — quattro electric.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => '800V invertor predný',
        'serial_number' => 'RAG059',
        'description' => 'Silicon carbide invertor pre 800V architektúru e-tron GT. Vyššia účinnosť pri rýchlom DC nabíjaní. High voltage power electronics.',
        'category_slugs' => 
        array (
          0 => 'elektricky-pohon',
          1 => 'nabijanie-ac-dc',
        ),
      ),
      1 => 
      array (
        'name' => 'Regeneratívne brzdy e-tron',
        'serial_number' => 'RAG060',
        'description' => 'Elektrohydraulické brzdy s maximálnou rekuperáciou pri One Pedal Drive. Zadné platničky sa opotrebúvajú minimálne. EV braking system.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'rekuperacia',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'premium-touring',
      2 => 'sportova-jazda',
    ),
  ),
  30 => 
  array (
    'name' => 'Škoda Enyaq 80 iV',
    'registration_number' => 'SK445566',
    'is_registered' => true,
    'description' => 'Elektrické SUV na MEB platforme s dojazdom 510 km. Veľký batožinový priestor, Simply Clever riešenia. České EV rodinné auto — MEB electric SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Brzdové platničky predné Enyaq',
        'serial_number' => 'RAG061',
        'description' => 'Predné brzdové platničky (front brake pads) Škoda Enyaq iV. Pri EV hmotnosti 2.2 tony rýchlejšie opotrebenie. Výmena každých 40 tisíc km.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
        ),
      ),
      1 => 
      array (
        'name' => 'Matrix LED svetlomet pravý',
        'serial_number' => 'RAG062',
        'description' => 'Pravý Matrix LED svetlomet s adaptívnym diaľkovým svetlom. Oprava po kamienku — homologizácia ECE. Osvetlenie lighting headlight.',
        'category_slugs' => 
        array (
          0 => 'osvetlenie',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'crossover-kona',
      2 => 'rodinne-auto',
    ),
  ),
  31 => 
  array (
    'name' => 'BMW i4 M50 xDrive',
    'registration_number' => 'BM778811',
    'is_registered' => true,
    'description' => 'Elektrický gran coupé s 544 koňmi a pohonom oboch náprav. M Sport balík, adaptívne tlmiče. EV performance sedan — Tesla Model 3 rival.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Predný elektromotor i4 M50',
        'serial_number' => 'RAG063',
        'description' => 'Synchronný elektromotor prednej nápravy BMW i4 M50 xDrive. Kombinovaný výkon s zadným motorom 544 hp. Electric drive unit BMW.',
        'category_slugs' => 
        array (
          0 => 'elektricky-pohon',
          1 => 'pohon-4x4',
        ),
      ),
      1 => 
      array (
        'name' => 'M Performance brzdové kotúče',
        'serial_number' => 'RAG064',
        'description' => 'Modré lakované M Performance brzdové kotúče (brake discs) predná náprava. Vysoký výkon EV vyžaduje silnejšie brzdy — brake upgrade.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'tuning-aftermarket',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'premium-touring',
      2 => 'sportova-jazda',
    ),
  ),
  32 => 
  array (
    'name' => 'Mercedes EQS 450+',
    'registration_number' => 'MB990022',
    'is_registered' => true,
    'description' => 'Luxusný elektrický sedan s Hyperscreen a dojazdom 780 km. Tichá jazda, MBUX infotainment. Flagship EV limousine — electric S-Class alternative.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Hyperscreen displej jednotka',
        'serial_number' => 'RAG065',
        'description' => '56-palcový MBUX Hyperscreen (infotainment display) cez celú palubnú dosku. Prasklina, dotykové problémy — drahá oprava elektroniky. Not a mechanical part.',
        'category_slugs' => 
        array (
          0 => 'hyperscreen-eqs',
          1 => 'interier-cabin',
        ),
      ),
      1 => 
      array (
        'name' => 'Batéria 107.8 kWh EQS',
        'serial_number' => 'RAG066',
        'description' => 'Vysokonapäťová trakčná batéria 107.8 kWh pre maximálny dojazd EQS 450+. 8 rokov záruka na batériu. Traction battery high capacity.',
        'category_slugs' => 
        array (
          0 => 'trakcna-bateria',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'premium-touring',
      2 => 'sedan',
    ),
  ),
  33 => 
  array (
    'name' => 'Volkswagen ID.4 Pro',
    'registration_number' => 'VW334488',
    'is_registered' => true,
    'description' => 'Elektrické rodinné SUV na MEB s dojazdom 520 km. Prostor pre deti, psa a batožinu. VW electric family SUV — mainstream EV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Tepelné čerpadlo ID.4',
        'serial_number' => 'RAG067',
        'description' => 'Heat pump (tepelné čerpadlo) pre efektívne kúrenie v zime bez straty dojazdu. Kľúčové pre EV winter range. HVAC heating system efficiency.',
        'category_slugs' => 
        array (
          0 => 'klima-kompresor',
          1 => 'elektricky-pohon',
        ),
      ),
      1 => 
      array (
        'name' => 'Zadný stabilizátor nápravy',
        'serial_number' => 'RAG068',
        'description' => 'Stabilizačná tyč (sway bar) zadnej nápravy ID.4. Klepanie v zákrutách = opotrebené silentbloky. Podvozok suspension anti-roll bar.',
        'category_slugs' => 
        array (
          0 => 'podvozok',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'crossover-kona',
      2 => 'rodinne-auto',
    ),
  ),
  34 => 
  array (
    'name' => 'Ford Mustang Mach-E GT',
    'registration_number' => 'FO667799',
    'is_registered' => true,
    'description' => 'Elektrický performance SUV s 487 koňmi a MagneRide tlmičmi. Mustang DNA v EV balení. American electric muscle crossover.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'MagneRide tlmiče GT',
        'serial_number' => 'RAG069',
        'description' => 'Magnetorheological dampers (MagneRide) s elektronickou reguláciou. Okamžitá zmena tuhosti pri Track režime. Adaptive suspension performance.',
        'category_slugs' => 
        array (
          0 => 'podvozok',
          1 => 'sport-brzdy',
        ),
      ),
      1 => 
      array (
        'name' => 'Brembo brzdy zadné Mach-E',
        'serial_number' => 'RAG070',
        'description' => 'Zadné brzdové kotúče a platničky Brembo pre Mach-E GT. Vysoký výkon EV = vysoké tepelné zaťaženie bŕzd. Rear brake system performance.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'hot-hatch',
      2 => 'crossover-kona',
    ),
  ),
  35 => 
  array (
    'name' => 'Toyota Yaris Cross Hybrid',
    'registration_number' => 'TY112255',
    'is_registered' => true,
    'description' => 'Kompaktné hybridné crossover s pohonom AWD-i. Spotreba pod 5 l/100 km, vhodné do mesta. Toyota hybrid reliability — mini SUV eco.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Hybridný pohon AWD-i',
        'serial_number' => 'RAG071',
        'description' => 'Elektrický motor na zadnej náprave AWD-i — aktivuje sa len pri pošmyknutí. Nie je to mechanický kardan. Toyota hybrid all wheel drive system.',
        'category_slugs' => 
        array (
          0 => 'hybridny-pohon',
          1 => 'pohon-4x4',
        ),
      ),
      1 => 
      array (
        'name' => 'Olejový filter hybrid 1.5',
        'serial_number' => 'RAG072',
        'description' => 'Filter motorového oleja 0W-16 pre hybridný motor 1.5 Dynamic Force. Servis každých 15 tisíc km. Engine maintenance oil filter.',
        'category_slugs' => 
        array (
          0 => 'filtre-kvapaliny',
          1 => 'motor-engine',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'crossover-kona',
      2 => 'ekologicka-jazda',
    ),
  ),
  36 => 
  array (
    'name' => 'Honda HR-V e:HEV',
    'registration_number' => 'HO334466',
    'is_registered' => true,
    'description' => 'Hybridné crossover s technológiou e:HEV a Magic Seats. Dva elektromotory, Atkinson 2.0. Japonská praktickosť — compact hybrid SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'e:HEV power control unit',
        'serial_number' => 'RAG073',
        'description' => 'Riadiaca jednotka hybridného pohonu e:HEV prepája motor, generátor a traction motor. Chyby P0A78, P1E00 — Honda diagnostic HDS.',
        'category_slugs' => 
        array (
          0 => 'hybridny-pohon',
          1 => 'elektricky-system',
        ),
      ),
      1 => 
      array (
        'name' => 'Vzduchový filter HR-V',
        'serial_number' => 'RAG074',
        'description' => 'Vzduchový filter motora (air filter) Honda HR-V 2.0 e:HEV. Prach, peľ — pravidelná výmena každých 20 tisíc km. Engine air intake filter.',
        'category_slugs' => 
        array (
          0 => 'filtre-kvapaliny',
          1 => 'motor-engine',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'crossover-kona',
    ),
  ),
  37 => 
  array (
    'name' => 'Seat Leon FR 1.5 TSI 150',
    'registration_number' => 'SE556644',
    'is_registered' => true,
    'description' => 'Športový hatchback FR s turbobenzínom 1.5 TSI evo. Dynamický dizajn, DSG voliteľná. Španielsky hot hatch — VW Group compact.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Vstrekováč TSI 1.5',
        'serial_number' => 'RAG075',
        'description' => 'Priamy vstrekováč (fuel injector) pre 1.5 TSI evo s Miller cyklom. Karbon na sacích ventiloch — walnut blasting servis. Direct injection.',
        'category_slugs' => 
        array (
          0 => 'motor-engine',
          1 => 'motor-vykon',
        ),
      ),
      1 => 
      array (
        'name' => 'Predné brzdové platničky FR',
        'serial_number' => 'RAG076',
        'description' => 'Brzdové platničky (brake pads) Seat Leon FR — väčší kotúče ako základná verzia. Piskanie pri vlhku = indikátor opotrebenia. Front brakes.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hot-hatch',
      1 => 'benzin-turbo',
    ),
  ),
  38 => 
  array (
    'name' => 'Alfa Romeo Giulia 2.0 Veloce',
    'registration_number' => 'AR778833',
    'is_registered' => true,
    'description' => 'Taliansky sportový sedan s turbo benzínom 280 koní a pohonom zadných kolies. Emocionálna jazda, karbónové prvky. RWD performance sedan.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Carbon fiber driveshaft',
        'serial_number' => 'RAG077',
        'description' => 'Karbonový kardanový hriadeľ (carbon fiber driveshaft) pre zníženie hmotnosti rotujúcich dielov. RWD Giulia Q4 nie je kompatibilný. Lightweight drivetrain.',
        'category_slugs' => 
        array (
          0 => 'prevodovka-drivetrain',
          1 => 'tuning-aftermarket',
        ),
      ),
      1 => 
      array (
        'name' => 'Brzdové platničky Brembo Giulia',
        'serial_number' => 'RAG078',
        'description' => 'Originálne Brembo brzdové platničky (brake pads) predná náprava Giulia Veloce. Červené strmen — ikonický Alfa dizajn. Performance braking.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'sport-brzdy',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'premium-touring',
      1 => 'benzin-turbo',
      2 => 'sportova-jazda',
    ),
  ),
  39 => 
  array (
    'name' => 'Citroën C5 Aircross Hybrid 225',
    'registration_number' => 'CI990044',
    'is_registered' => true,
    'description' => 'Pohodlné SUV s plug-in hybridom a Advanced Comfort sedadlami. Mäkký podvozok, tichá jazda. French comfort PHEV crossover.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Advanced Comfort tlmiče',
        'serial_number' => 'RAG079',
        'description' => 'Progresívne hydraulické tlmiče (Progressive Hydraulic Cushions) Citroën. Mäkší nábeh cez nerovnosti — unique suspension technology.',
        'category_slugs' => 
        array (
          0 => 'podvozok',
        ),
      ),
      1 => 
      array (
        'name' => 'PHEV hybridná batéria 13.2 kWh',
        'serial_number' => 'RAG080',
        'description' => 'Plug-in hybrid batéria 13.2 kWh pre dojazd 50 km na elektrinu. Nabíjanie cez Type 2 port. Nie je to plnohodnotná EV batéria — menšia kapacita.',
        'category_slugs' => 
        array (
          0 => 'hybridny-pohon',
          1 => 'nabijanie-ac-dc',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'crossover-kona',
    ),
  ),
  40 => 
  array (
    'name' => 'Volkswagen Passat Variant 2.0 TDI',
    'registration_number' => 'VW112266',
    'is_registered' => true,
    'description' => 'Obchodné kombi s dvojlitrovým dieselom a DSG. Veľký kufor pre firemné flotily. Fleet wagon — business travel diesel.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'EGR ventil Passat TDI',
        'serial_number' => 'RAG081',
        'description' => 'EGR ventil (exhaust gas recirculation) pre 2.0 TDI. Ucpanie sadzou, chyba P0401, nevyrovnaný voľnobeh. Emisná technika diesel.',
        'category_slugs' => 
        array (
          0 => 'emisna-technika',
          1 => 'motor-engine',
        ),
      ),
      1 => 
      array (
        'name' => 'Alternátor 180A Passat',
        'serial_number' => 'RAG082',
        'description' => 'Alternátor 180 ampérov pre Passat s veľkou výbavou a start-stop. Slabé nabíjanie batérie, pískanie ložísk. Charging system electrical.',
        'category_slugs' => 
        array (
          0 => 'elektricky-system',
          1 => 'nabijanie-start',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'kombi-station-wagon',
      1 => 'diesel-tdi',
      2 => 'flotila',
    ),
  ),
  41 => 
  array (
    'name' => 'BMW X5 xDrive45e',
    'registration_number' => 'BX445577',
    'is_registered' => true,
    'description' => 'Veľké plug-in hybridné SUV s 394 koňmi a dojazdom 100 km na elektrinu. Luxusný interiér, air suspension. Premium PHEV large SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'PHEV batéria 24 kWh X5',
        'serial_number' => 'RAG083',
        'description' => 'High voltage batéria 24 kWh pre BMW X5 xDrive45e. Wallbox nabíjanie 7.4 kW AC. Hybrid battery pack — nie plnohodnotná EV batéria.',
        'category_slugs' => 
        array (
          0 => 'hybridny-pohon',
          1 => 'trakcna-bateria',
        ),
      ),
      1 => 
      array (
        'name' => 'Brzdové platničky predné X5',
        'serial_number' => 'RAG084',
        'description' => 'Predné brzdové platničky (front brake pads) BMW X5 — ťažké SUV opotrebuje brzdy rýchlo. Kontrola hrúbky každých 10 tisíc km pri mestskej jazde.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'crossover-kona',
      2 => 'premium-touring',
    ),
  ),
  42 => 
  array (
    'name' => 'Mercedes GLE 350de 4MATIC',
    'registration_number' => 'MG667788',
    'is_registered' => true,
    'description' => 'Diesel plug-in hybrid s dojazdom 100 km na elektrinu a 320 koňmi. Unikátna kombinácia diesel + PHEV. Premium diesel hybrid SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'AdBlue nádrž GLE 350de',
        'serial_number' => 'RAG085',
        'description' => 'AdBlue nádrž a čerpadlo pre SCR systém diesel PHEV. Varovanie pri 1500 km do vyprázdnenia. Emisná technika DEF fluid system.',
        'category_slugs' => 
        array (
          0 => 'emisna-technika',
        ),
      ),
      1 => 
      array (
        'name' => 'DPF filter GLE diesel',
        'serial_number' => 'RAG086',
        'description' => 'Diesel particulate filter (DPF) pre GLE 350de. Regenerácia pri diaľničnej jazde alebo servis. Soot filter Euro 6 diesel emissions.',
        'category_slugs' => 
        array (
          0 => 'emisna-technika',
          1 => 'diesel-emisie',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'diesel-tdi',
      2 => 'premium-touring',
    ),
  ),
  43 => 
  array (
    'name' => 'Škoda Kodiaq RS 2.0 TSI',
    'registration_number' => 'SK889911',
    'is_registered' => true,
    'description' => 'Najväčšie Škoda SUV s 245 koňmi a DSG. Sedem miest, sportový charakter RS. Rodinné performance SUV — seven seater hot SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Turbo IS38 Kodiaq RS',
        'serial_number' => 'RAG087',
        'description' => 'Turbocharger IS38 pre 2.0 TSI Kodiaq RS 245 hp. Chirping pri akcelerácii, kontrola wastegate. Forced induction turbo boost.',
        'category_slugs' => 
        array (
          0 => 'turbo-plnenie',
          1 => 'motor-vykon',
        ),
      ),
      1 => 
      array (
        'name' => 'Brzdové kotúče predné Kodiaq RS',
        'serial_number' => 'RAG088',
        'description' => 'Ventilované brzdové kotúče (brake discs) 340 mm predná náprava Kodiaq RS. Ťažké auto = vysoké zaťaženie bŕzd pri plnom obsadení.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'crossover-kona',
      1 => 'hot-hatch',
      2 => 'rodinne-auto',
    ),
  ),
  44 => 
  array (
    'name' => 'Audi Q7 55 TFSI e quattro',
    'registration_number' => 'AQ223355',
    'is_registered' => true,
    'description' => 'Veľké luxusné SUV s plug-in hybridom V6 a siedmimi sedadlami. Quattro pohon, air suspension. Large premium PHEV family SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Quattro rozdielový most zadný Q7',
        'serial_number' => 'RAG089',
        'description' => 'Zadný diferenciál quattro pre Q7 TFSI e. Servis oleja mostu každých 60 tisíc km. AWD drivetrain rear differential.',
        'category_slugs' => 
        array (
          0 => 'pohon-4x4',
          1 => 'prevodovka-drivetrain',
        ),
      ),
      1 => 
      array (
        'name' => 'Vzduchový filter Q7',
        'serial_number' => 'RAG090',
        'description' => 'Vzduchový filter motora (engine air filter) Audi Q7 3.0 TFSI. Prachová cesta off-road — častejšia výmena. Air intake filtration.',
        'category_slugs' => 
        array (
          0 => 'filtre-kvapaliny',
          1 => 'motor-engine',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'hybrid-hev',
      1 => 'premium-touring',
      2 => 'crossover-kona',
    ),
  ),
  45 => 
  array (
    'name' => 'Ford Ranger Raptor 3.0 V6',
    'registration_number' => 'FR556677',
    'is_registered' => true,
    'description' => 'Extrémny pickup s twin-turbo V6 292 koňmi a FOX tlmičmi. Off-road pickup truck — desert racing DNA. Baja inspired performance truck.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'FOX tlmiče predné Ranger Raptor',
        'serial_number' => 'RAG091',
        'description' => 'FOX Live Valve tlmiče (shock absorbers) s elektronickou reguláciou pre Ranger Raptor. Off-road suspension performance — unikátne pre pickup.',
        'category_slugs' => 
        array (
          0 => 'podvozok',
          1 => 'offroad-vybava',
        ),
      ),
      1 => 
      array (
        'name' => 'Ochrana predného difera',
        'serial_number' => 'RAG092',
        'description' => 'Oceľový štít (skid plate) pod motorom a predným diferenciálom. Ochrana pri jazde cez kamene a blato. Underbody protection off-road.',
        'category_slugs' => 
        array (
          0 => 'offroad-vybava',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'offroad-suv',
      1 => 'dobrodruzstvo',
      2 => 'benzin-turbo',
    ),
  ),
  46 => 
  array (
    'name' => 'Toyota Land Cruiser 300 3.3 D',
    'registration_number' => 'TL778899',
    'is_registered' => true,
    'description' => 'Legendárny off-road SUV s dieselom 3.3 V6 twin-turbo a rámovou konštrukciou. Brodenie, ťahanie, extrémny terén. LC300 indestructible.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Redukčná prevodovka LC300',
        'serial_number' => 'RAG093',
        'description' => 'Transfer case (redukčná prevodovka) s režimami 4H a 4L pre Land Cruiser 300. Olej vymeniť každých 40 tisíc km. Low range off-road gearing.',
        'category_slugs' => 
        array (
          0 => 'pohon-4x4',
          1 => 'prevodovka-drivetrain',
        ),
      ),
      1 => 
      array (
        'name' => 'Palivový filter diesel LC300',
        'serial_number' => 'RAG094',
        'description' => 'Palivový filter (fuel filter) pre 3.3 D twin-turbo. Kvalitná nafta kritická pre vstrekováče — voda v palive poškodí motor. Diesel fuel filtration.',
        'category_slugs' => 
        array (
          0 => 'filtre-kvapaliny',
          1 => 'motor-engine',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'offroad-suv',
      1 => 'diesel-tdi',
      2 => 'dobrodruzstvo',
    ),
  ),
  47 => 
  array (
    'name' => 'Nissan Leaf e+ 62 kWh',
    'registration_number' => 'NL990011',
    'is_registered' => true,
    'description' => 'Jeden z prvých masových elektromobilov, verzia e+ s dojazdom 385 km. CHAdeMO nabíjanie, e-Pedal. Pioneer EV hatchback — affordable electric.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Batéria 62 kWh Leaf e+',
        'serial_number' => 'RAG095',
        'description' => 'Lithium-ion batéria 62 kWh pre Leaf e+. Battery health bar na palubnej doske — SOH monitoring. Traction battery degradation over time.',
        'category_slugs' => 
        array (
          0 => 'trakcna-bateria',
        ),
      ),
      1 => 
      array (
        'name' => 'Brzdové platničky Leaf predné',
        'serial_number' => 'RAG096',
        'description' => 'Predné brzdové platničky (front brake pads) Nissan Leaf. e-Pedal rekuperácia znižuje opotrebenie — stále treba kontrolovať. EV brake maintenance.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'rekuperacia',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'mestske-auto',
      2 => 'ekologicka-jazda',
    ),
  ),
  48 => 
  array (
    'name' => 'Hyundai Ioniq 5 AWD',
    'registration_number' => 'HY334422',
    'is_registered' => true,
    'description' => 'Retro-futuristické EV s 800V nabíjaním a dojazdom 430 km. V2L zásuvka pre napájanie zariadení. Design icon electric crossover.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => '800V DC nabíjací modul',
        'serial_number' => 'RAG097',
        'description' => 'Ultra-rýchlonabíjací modul 800V pre Ioniq 5 — 10-80 % za 18 min pri 350 kW. Charging infrastructure high voltage. Nie je to onboard AC charger.',
        'category_slugs' => 
        array (
          0 => 'nabijanie-ac-dc',
          1 => 'elektricky-pohon',
        ),
      ),
      1 => 
      array (
        'name' => 'V2L adaptér Ioniq 5',
        'serial_number' => 'RAG098',
        'description' => 'Vehicle-to-Load adaptér (V2L) pre napájanie kempingového vybavenia, notebooku alebo elektrického grilu z auta. 3.6 kW AC výstup. EV power outlet.',
        'category_slugs' => 
        array (
          0 => 'nabijanie-ac-dc',
          1 => 'hyperscreen-eqs',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'crossover-kona',
    ),
  ),
  49 => 
  array (
    'name' => 'Kia EV6 GT',
    'registration_number' => 'KE556688',
    'is_registered' => true,
    'description' => 'Elektrické GT s 585 koňmi, drift režimom a 800V architektúrou. Najrýchlejšie Kia v histórii. Performance EV gran turismo — electric supercar SUV.',
    'parts' => 
    array (
      0 => 
      array (
        'name' => 'Predný elektromotor EV6 GT 160 kW',
        'serial_number' => 'RAG099',
        'description' => 'Predný traction motor 160 kW pre AWD EV6 GT. Drift režim deaktivuje prednú nápravu. Dual motor electric performance drivetrain.',
        'category_slugs' => 
        array (
          0 => 'elektricky-pohon',
          1 => 'pohon-4x4',
        ),
      ),
      1 => 
      array (
        'name' => 'Brzdové platničky EV6 GT sport',
        'serial_number' => 'RAG100',
        'description' => 'Vysokoperformance brzdové platničky (brake pads) pre EV6 GT 585 hp. Green Brembo strmen, rýchle opotrebenie pri track dňoch. Sport braking EV.',
        'category_slugs' => 
        array (
          0 => 'brzdovy-system',
          1 => 'sport-brzdy',
        ),
      ),
    ),
    'category_slugs' => 
    array (
      0 => 'elektromobil-ev',
      1 => 'hot-hatch',
      2 => 'sportova-jazda',
    ),
  ),
);
