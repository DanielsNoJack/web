<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Settings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used on the settings page.
    |
    */

    'settings' => 'Nastavení',

    'configuration' => 'Konfigurace',

    'update' => 'Uložit',

    'heatmap' => 'Tepelná mapa',

    'general' => 'Hlavní nastavení',

    'purchase' => 'Sledujte své aktivity kdekoliv na světě přes <b>Kerberos.cloud</b>, Cena <u>začíná</u> již od 1,49 €/měsíc!',

    'basic' => 'Jednoduché',

    'advanced' => 'Rozšířené',

    'name' => 'Jméno',

    'nameInfo' => 'Jméno kamery musí být unikátní, pokud používáte více instancí Kerberos.io.',

    'timezone' => 'Časová zóna',

    'timezoneInfo' => 'Časová zóna se používá pro konverzi časových razítek do vašeho lokálního času. Používá se ve strojovně i webovém rozhraní.',

    'camera' => 'Kamera',

    'usbcamera' => 'USB kamera',

    'usbcameraInfo' => 'Zvolte tuto volbu, pokud chcete použít USB kameru.',

    'rpicamera' => 'RPi kamera',

    'rpicameraInfo' => 'Pokud Kerberos.io běží na Raspberry Pi, Můžete použít kamerový modul pro RPi (v1 or v2).',

    'ipcamera' => 'IP kamera',

    'ipcameraInfo' => 'Zvolte tuto volbu, pokud chcete použít IP kameru. Kamera musí podporovat RTSP nebo MJPEG stream.',

    'surveillanceMode' => 'Dohled',

    'motion' => 'Pohyb',

    'motionInfo' => 'Chytrá detekce pohybu, která vyvolává ukládání snímků nebo videa a případně spouští další akce. Můžete určit oblast v obraze, kde se má pohyb sledovat.',

    'storage' => 'Úložiště',

    'storageInfo' => 'Použijte Kerberos.cloud pro sledování více Kerberos.io instancí odkudkoliv na světě.',

    'dontForget' => 'Nezapomeňte uložit změny v konfiguraci!',

    'update' => 'Uložit',

    'cancel' => 'Zrušit',

    'confirmAndSelect' => 'Povrdit a vybrat',


    // --------------
    // Camera

    'fpsRaspberryInfo' => 'Počet zpracovávaných snímků za sekundu a zároveň počet snímků pro nahrávání videa.',

    'width' => 'Šířka',

    'height' => 'Výška',

    'widthHeightInfo' => 'Rozlišení obrázků zachycených z kamery. Ujistěte se, že kamera toto rozlišení podporuje!',

    'delay' => 'zpoždění v sekundách',

    'delayInfo' => 'Zpoždění způsobí, že Kerberos.io čeká x sekund, mezi zachycením dvou snímků. Toto nastavení pomůže, pokud chcete redukovat počet zpracovávaných snímků za sekundu (například z výkonových důvodů).',

    'livestream' => 'počet snímků za sekundu pro živý obraz',

    'livestreamInfo' => 'Počet snímů za sekundu pro live stream je možné konfigurovat. Pokud zadáte nulu, živý obraz nebude k dispozici.',

    'rotate' => 'Klikněte na tento obrázek, pokud je obraz otočený. Například když je kamera namontovaná obráceně.',

    'url' => 'Zadejte url RTSP nebo MJPEG streamu vaší IP Kamery.',

    // ----------------
    // Motion

    'image' => 'Obrázek',

    'video' => 'Video',

    'step1' => 'Krok 1. Vyberte oblast',

    'step1Info' => 'Posunujte body pro výběru oblasti, která se má zachycovat. Dvojitým klikem se bod odstraní. Kliknutím na bílý bod se bod přidá.',

    'step2' => 'Krok  2. Konfigurace parametrů',

    'step2Info' => 'Změnou konfigurace změníte citlivost detekce pohybu.',

    'step3' => 'Krok 3. Vyberte jeden nebo více výstupů',

    'step3Info' => 'Jakmile je detkován pohyb, asynchroně se aktivuje jeden nebo více výstupů.',

    'sensitivity' => 'citlivost',

    'sensitivityInfo' => 'Posuvníkem zvýšíte nebo snížíte citlivost detekce pohybu.',

    'numberOfDetections' => 'Počet detekcí před spuštěním události',

    'numberOfDetectionsInfo' => 'Toto číslo představuje nutný počet detekcí předtím, než se vyvolá událost. Zvýšením hodnoty můžete eliminovat falešné detekce,  například osvětlení, mraky, atd.',

    // ------------------
    // Timestamp - Colors

    'noTimestamp' => 'bez časového razítka',

    'white' => 'bílá',

    'black' => 'černá',

    'red' => 'červená',

    'green' => 'zelená',

    'blue' => 'modrá',

    'drawTimestamp' => 'Vykreslovat časové razítko',

    'drawTimestampInfo' => 'Když se obrázek ukládá na disk, může se do něj vkládat datum a čas.',

    'drawTimestampInfoVideo' => 'Když se video ukládá na disk, může se do něj vkládat datum a čas.',

    'privacy' => 'skrytá oblast',

    'privacyInfo' => 'Povolením této volby bude viditelný pouze vybraný region z kroku 1. Všechny obrazové body mimo oblast budou začerněny.',

    'fps' => 'snímků za sekundu',

    'fpsInfo' => 'Počet snímků za sekundu pro uložený videoklip. Pozor na Raspberry Pi, zde může být nastaveno jen na omezenou hodnotu, například 7.',

    'secondsRecord' => 'Délka záznamu v sekundách',

    'secondsRecordInfo' => 'Délka záznamu v sekundách uloženého po detekci události',

    'webhookUrl' => 'url',

    'webhookUrlInfo' => 'Zadejte url, kam se má metodou POST odeslat JSON objekt.',

    'scriptPath' => 'cesta',

    'scriptPathInfo' => 'Cesta k bash skriptu, který bude vykonán. JSON objekt se odešle jako parametr.',

    'gpioPin' => 'pin',

    'gpioPinInfo' => 'Definujte pin na který se odešle pulz.',

    'gpioPeriod' => 'délka pulzu',

    'gpioPeriodInfo' => 'Počet mikrosekund, jak dlouho má pulz trvat.',

    'hardwareEncodingEnabled' => 'Pokud vaše zachytávací zařízení podporuje hardwarové kódování, můžete nastavit další parametry. Například časové razítko.
	Generované video bude mít stejné paramtry, které jste zvolili (například počet snímů za sekundu, ostrost, atd.',

    'secure' => 'zabezpečení',

    'secureInfo' => 'Povolit SSL/TLS. CA certifikát musí být ve složce /etc/ssl/certs/.',

    'verifycn' => 'ověřovat CN',

    'verifycnInfo' => 'Ověřovat CN  certifikátu (Common Name)',

    'mqttServer' => 'server',

    'mqttServerInfo' =>  'IP adresa MQTT brokeru.',

    'mqttPort' => 'port',

    'mqttPortInfo' =>  'Port MQTT brokeru.',

    'mqttTopic' => 'topic',

    'mqttTopicInfo' =>  'topic, se kterým se MQTT zprávy odesílají.',

    'mqttClientId' =>  'client_id',

    'mqttClientIdInfo' =>  'ClientId použité pro připojení na MQTT broker.',

    'mqttUsername' => 'uživatelské jméno',

    'mqttUsernameInfo' =>  'uživatelské jméno použité pro autorizaci na MQTT brokeru.',

    'mqttPassword' => 'heslo',

    'mqttPasswordInfo' =>  'Heslo použité pro autorizaci na MQTT brokeru.',

    'throttler' => 'omezení',

    'throttlerInfo' =>  'Použije se pro prevenci spamu. Například bude odesíláno maximálně jednou za 5 sekund.',

    // --------------
    // Cloud

    'whatIsThis' => 'O co jde',

    'whatIsthisInformation' => 'Kerberos.io má svou vlastní cloudovou aplikaci. Zaregistrováním k určitémů plánu, Můžete synchronizovat vaše snímky a videoklipy a prohlížet si je odkudkoliv na světě. Po registraci obdržíte přihlašovací údaje, které zde vyplníte. Po potvrzení a uložení nastavení se spustí automatická synchronizace. Příjemnou zábavu!',

    'subscribeNow' => 'Zaregistrujte se hned, pouze za  1,49 €',

    'verifyConnectivity' => 'Ověřit připojení',

    'cloudHurray' => 'Sláva, spojení funguje správně. Vaše média se nyní automaticky synchronizují do vašeho cloudového účtu.',

    'cloudWentWrong' => 'Něco je špatně, ověřte vaše přihlašovací údaje, jestli jsou zadané správně.',

    'cloudWentWrongMoreHelp' => 'Klikněte pro podporu.',

    'checkConnection' => 'Kontrola spojení',

    // ---------------
    // KiOS settings

    'forceNetwork' => 'Vynutit síťový režim',

    'forceNetworkInfo' => 'Pokud povolíte, OS se zrestartuje a nebude možné připojení na Internet. Toto je nezbytné, když používáte cloudovou aplikaci, ale máte nespolehlivé připojení.',

    'autoRemoval' => 'Automaticky odstraňovat média',

    'autoRemovalInfo' => 'Pokud je povoleno, média se automaticky odstraňují, když je disk téměř plný.'

);
