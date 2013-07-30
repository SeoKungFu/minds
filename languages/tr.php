<?php
/**
 * T&#252;rk&#231;e Dili
 *
 * @paket Elgg.Core
 * @altpaket Languages.Turkish
 */

$turkish = array(
/**
 * Sites
 */

	'item:site' => 'Siteler',

/**
 * Sessions
 */

	'login' => "Giri&#351;",
	'loginok' => "Giri&#351; yapt&#305;n&#305;z.",
	'loginerror' => "Giri&#351; ba&#351;ar&#305;s&#305;z. L&#252;tfen bilgilerinizi kontrol edin ve tekrar deneyin.",
	'login:empty' => "Kullan&#305;c&#305; ad&#305;/e-posta ve &#351;ifre gerekli.",
	'login:baduser' => "Kullan&#305;c&#305; hesab&#305;n&#305;z y&#252;klenemiyor.",
	'auth:nopams' => "&#304;&#231; hata. Hi&#231; bir kullan&#305;c&#305; kimlik do&#287;rulama metodu y&#252;klenmedi.",

	'logout' => "&#199;&#305;k&#305;&#351;",
	'logoutok' => "&#199;&#305;k&#305;&#351; yapt&#305;n&#305;z.",
	'logouterror' => "&#199;&#305;k&#305;&#351; yap&#305;lam&#305;yor. L&#252;tfen tekrar deneyin.",

	'loggedinrequired' => "Bu sayfay&#305; g&#246;r&#252;nt&#252;leyebilmek i&#231;in giri&#351; yapmal&#305;s&#305;n&#305;z.",
	'adminrequired' => "Bu sayfay&#305; g&#246;r&#252;nt&#252;leyebilmek i&#231;in y&#246;netici olmal&#305;s&#305;n&#305;z.",
	'membershiprequired' => "Bu sayfay&#305; g&#246;r&#252;nt&#252;leyebilmek i&#231;in bu grubun bir &#252;yesi olmal&#305;s&#305;n&#305;z.",


/**
 * Errors
 */
	'exception:title' => "&#214;nemli Hata.",
	'exception:contact_admin' => 'Giderilemeyen bir hata meydana geldi ve kaydedildi. A&#351;a&#287;&#305;daki bilgiler ile sistem y&#246;neticisiyle ileti&#351;ime ge&#231;in:',

	'actionundefined' => "&#304;stenen eylem (%s) sistemde tan&#305;ml&#305; de&#287;il.",
	'actionnotfound' => "%s i&#231;in eylem dosyas&#305; bulunamad&#305;.",
	'actionloggedout' => "&#220;zg&#252;n&#252;z, &#231;&#305;k&#305;&#351; yapt&#305;&#287;&#305;n&#305;z i&#231;in bu eylemi ger&#231;ekle&#351;tiremezsiniz.",
	'actionunauthorized' => 'Bu eylemi ger&#231;ekle&#351;tirmek i&#231;in yetkiniz yok',

	'InstallationException:SiteNotInstalled' => 'Bu istek i&#351;lenemiyor. Bu site '
		. ' yap&#305;land&#305;r&#305;lmam&#305;&#351; ya da veritaban&#305; &#231;&#246;km&#252;&#351; olabilir.',
	'InstallationException:MissingLibrary' => '%s y&#252;klenemiyor',
	'InstallationException:CannotLoadSettings' => 'Elgg ayarlar (settings) dosyas&#305;n&#305; y&#252;kleyemedi. Bu dosya hen&#252;z olu&#351;turulmam&#305;&#351; ya da eri&#351;im izin problemleri olabilir.',

	'SecurityException:Codeblock' => "&#214;ncelikli bir kod blo&#287;u &#231;al&#305;&#351;t&#305;rmak i&#231;in eri&#351;im engellendi",
	'DatabaseException:WrongCredentials' => "Elgg verilen bilgilerle veritaban&#305;na ba&#287;lanam&#305;yor. Ayarlar (settings) dosyas&#305;n&#305; kontrol edin.",
	'DatabaseException:NoConnect' => "Elgg '%s' veritaban&#305;n&#305; se&#231;emedi, l&#252;tfen veritaban&#305;n&#305;n olu&#351;turuldu&#287;unu ve eri&#351;im hakk&#305;n&#305;z olup olmad&#305;&#287;&#305;n&#305; kontrol edin.",
	'SecurityException:FunctionDenied' => "'%s' &#246;ncelikli fonksiyonuna eri&#351;im engellendi.",
	'DatabaseException:DBSetupIssues' => "Bir ka&#231; sorun olu&#351;tu: ",
	'DatabaseException:ScriptNotFound' => "Elgg %s'de istenilen veritaban&#305; komutunu bulamad&#305;.",
	'DatabaseException:InvalidQuery' => "Ge&#231;ersiz sorgu",

	'IOException:FailedToLoadGUID' => "GUID:%d'den yeni %s y&#252;kleme ba&#351;ar&#305;s&#305;z",
	'InvalidParameterException:NonElggObject' => "non-ElggObject'den ElggObject yap&#305;c&#305;ya ge&#231;i&#351;!",
	'InvalidParameterException:UnrecognisedValue' => "Tan&#305;mlanamayan de&#287;er yap&#305;c&#305;ya ge&#231;ti",

	'InvalidClassException:NotValidElggStar' => "GUID:%d ge&#231;erli bir %s de&#287;il",

	'PluginException:MisconfiguredPlugin' => "%s (guid: %s) yanl&#305;&#351; yap&#305;land&#305;r&#305;lm&#305;&#351; bir eklentidir. Bu y&#252;zden devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;. Muhtemel nedenler i&#231;in l&#252;tfen Elgg Wiki'yi inceleyin (http://docs.elgg.org/wiki/).",
	'PluginException:CannotStart' => '%s (guid: %s) ba&#351;lat&#305;lam&#305;yor ve bu y&#252;zden devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;.  Nedeni: %s',
	'PluginException:InvalidID' => "%s ge&#231;ersiz bir eklenti kimli&#287;idir (ID).",
	'PluginException:InvalidPath' => "%s ge&#231;ersiz bir eklenti dizin yoludur.",
	'PluginException:InvalidManifest' => '%s eklentisi i&#231;in ge&#231;ersiz bildirim dosyas&#305;',
	'PluginException:InvalidPlugin' => '%s ge&#231;erli bir eklenti de&#287;il.',
	'PluginException:InvalidPlugin:Details' => '%s ge&#231;erli bir eklenti de&#287;il: %s',
	'PluginException:NullInstantiated' => 'ElggPlugin bo&#351; &#246;rneklendirilmi&#351; olamaz. Bir GUID, eklenti kimli&#287;i (ID), ya da tam dizin yolunu girmelisiniz.',

	'ElggPlugin:MissingID' => 'Eklenti kimli&#287;i (ID) yok (guid %s)',
	'ElggPlugin:NoPluginPackagePackage' => '%s eklenti kimli&#287;i (ID) i&#231;in ElggPluginPackage yok (guid %s)',

	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Pakette %s dosyas&#305; eksik',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Ge&#231;ersiz ba&#287;&#305;ml&#305;l&#305;k t&#252;r&#252; "%s"',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Ge&#231;ersiz sa&#287;lau&#305;c&#305; t&#252;r&#252; "%s"',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Ge&#231;ersiz %s ba&#287;&#305;ml&#305;l&#305;&#287;&#305; "%s" %s eklentisinde bulundu.  Eklentiler &#231;ak&#305;&#351;amazlar ya da sa&#287;lad&#305;klar&#305; bir &#351;ey gerektirirler!',

	'ElggPlugin:Exception:CannotIncludeFile' => '%s %s eklentisi i&#231;in (guid: %s) %s\'de i&#231;erilemeze.',
	'ElggPlugin:Exception:CannotRegisterViews' => '%s eklentisi i&#231;in (guid: %s) %s\'de g&#246;r&#252;nt&#252;leme dizini a&#231;&#305;lam&#305;yor.',
	'ElggPlugin:Exception:CannotRegisterLanguages' => '%s eklentisi i&#231;in(guid: %s) %s\'de dil kayd&#305; yap&#305;lam&#305;yor.',
	'ElggPlugin:Exception:NoID' => 'Guid %s eklentisi i&#231;in kimlik (ID) yok!',

	'PluginException:ParserError' => 'API versiyonu %s ile %s eklentisinde hata ayr&#305;&#351;t&#305;rma bildirimi.',
	'PluginException:NoAvailableParser' => 'API versiyonu %s bildirimi i&#231;in %s eklentisinde ayr&#305;&#351;t&#305;r&#305;c&#305; y&#252;klenemiyor.',
	'PluginException:ParserErrorMissingRequiredAttribute' => "Gerekli '%s' niteli&#287;i %s eklentisi i&#231;in bildirimde eksik.",

	'ElggPlugin:Dependencies:Requires' => 'Gereklilik',
	'ElggPlugin:Dependencies:Suggests' => '&#214;nerilen',
	'ElggPlugin:Dependencies:Conflicts' => '&#199;eli&#351;kiler',
	'ElggPlugin:Dependencies:Conflicted' => '&#199;eli&#351;ti',
	'ElggPlugin:Dependencies:Provides' => 'Sa&#287;lay&#305;c&#305;',
	'ElggPlugin:Dependencies:Priority' => '&#214;ncelik',

	'ElggPlugin:Dependencies:Elgg' => 'Elgg versiyonu',
	'ElggPlugin:Dependencies:PhpExtension' => 'PHP uzant&#305;s&#305;: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'PHP ini ayar&#305;: %s',
	'ElggPlugin:Dependencies:Plugin' => 'Eklenti: %s',
	'ElggPlugin:Dependencies:Priority:After' => '%s\'den sonra',
	'ElggPlugin:Dependencies:Priority:Before' => '%s\'den &#246;nce',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s kurulmad&#305;',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Eksik',

	'ElggPlugin:InvalidAndDeactivated' => '%s ge&#231;ersiz bir eklenti ve bu y&#252;zden devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;.',

	'InvalidParameterException:NonElggUser' => "non-ElggUser'dan ElggUser yap&#305;c&#305;ya ge&#231;i&#351;!",

	'InvalidParameterException:NonElggSite' => "non-ElggSite'den ElggSite yap&#305;c&#305;ya ge&#231;i&#351;!",

	'InvalidParameterException:NonElggGroup' => "non-ElggGroup'dan ElggGroup yap&#305;c&#305;ya ge&#231;i&#351;!",

	'IOException:UnableToSaveNew' => "Yeni %s kaydedilemiyor",

	'InvalidParameterException:GUIDNotForExport' => "GUID d&#305;&#351;a aktar&#305;m s&#305;ras&#305;nda belirtilmedi, bu durum asla olmamal&#305;.",
	'InvalidParameterException:NonArrayReturnValue' => "Varl&#305;k serile&#351;tirme fonksiyonu s&#305;ras&#305;z bir returnvalue parametresine d&#246;n&#252;&#351;t&#252;",

	'ConfigurationException:NoCachePath' => "&#214;nbellek yolu ayarlanmad&#305;!",
	'IOException:NotDirectory' => "%s bir dizin de&#287;il.",

	'IOException:BaseEntitySaveFailed' => "Yeni nesnenin temel &#246;&#287;e bilgisi kaydedilemiyor!",
	'InvalidParameterException:UnexpectedODDClass' => "i&#231;e aktar&#305;m() beklenmeyen bir ODD s&#305;n&#305;f&#305;na d&#246;n&#252;&#351;t&#252;",
	'InvalidParameterException:EntityTypeNotSet' => "Varl&#305;k t&#252;r&#252; ayarlanmal&#305;d&#305;r.",

	'ClassException:ClassnameNotClass' => "%s bir %s de&#287;il.",
	'ClassNotFoundException:MissingClass' => "'%s' s&#305;n&#305;f&#305; bulunamad&#305;, eklenti eksik olabilir mi?",
	'InstallationException:TypeNotSupported' => "%s t&#252;r&#252; desteklenmiyor. Bu kurulumda hata olu&#351;turuyor, bunun nedeni b&#252;y&#252;k ihtimalle tamamlanmayan bir g&#252;ncelleme i&#351;lemidir.",

	'ImportException:ImportFailed' => "%d &#246;&#287;esi i&#231;e aktar&#305;lam&#305;yor",
	'ImportException:ProblemSaving' => "%s kaydedilirken hata meydana geldi",
	'ImportException:NoGUID' => "Yeni varl&#305;k olu&#351;turuldu fakat hi&#231; GUID'e sahip de&#287;il, bu durum asla olmamal&#305;.",

	'ImportException:GUIDNotFound' => "'%d' varl&#305;&#287;&#305; bulunamad&#305;.",
	'ImportException:ProblemUpdatingMeta' => "'%s' '%d' varl&#305;&#287;&#305;nda g&#252;ncellenirken hata meydana geldi",

	'ExportException:NoSuchEntity' => "B&#246;yle bir varl&#305;k GUID:%d yok",

	'ImportException:NoODDElements' => "&#304;&#231;e aktar&#305;m verisinde hi&#231; OpenDD &#246;&#287;esi yok, i&#231;e aktar&#305;m ba&#351;ar&#305;s&#305;z.",
	'ImportException:NotAllImported' => "T&#252;m &#246;&#287;eler i&#231;eri aktar&#305;lamad&#305;.",

	'InvalidParameterException:UnrecognisedFileMode' => "Tan&#305;mlanamayan dosya modu '%s'",
	'InvalidParameterException:MissingOwner' => "Dosya %s (file guid:%d) (owner guid:%d) i&#231;in sahip yok!",
	'IOException:CouldNotMake' => "%s yap&#305;lam&#305;yor",
	'IOException:MissingFileName' => "Dosyay&#305; a&#231;madan &#246;nce bir isim belirtmelisiniz.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "Dosya deposu %s %u dosyas&#305; i&#231;in y&#252;klenmemiyor",
	'NotificationException:NoNotificationMethod' => "Hi&#231; bildirim metodu belirtilmedi.",
	'NotificationException:NoHandlerFound' => "'%s' i&#231;in i&#351;leyici bulunamad&#305; ya da &#231;a&#287;&#305;r&#305;labilir nitelikte de&#287;il.",
	'NotificationException:ErrorNotifyingGuid' => "%d bildirilirken hata meydana geldi",
	'NotificationException:NoEmailAddress' => "GUID:%d i&#231;in e-posta adresi al&#305;nam&#305;yor",
	'NotificationException:MissingParameter' => "Gerekli bir parametre eksik, '%s'",

	'DatabaseException:WhereSetNonQuery' => "Where set contains non WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "Stil se&#231;me sorgusunda alanlar eksik",
	'DatabaseException:UnspecifiedQueryType' => "Tan&#305;mlanamayan ya da belirtilmemi&#351; sorgu t&#252;r&#252;.",
	'DatabaseException:NoTablesSpecified' => "Sorgu i&#231;in hi&#231; tablo belirtilmedi.",
	'DatabaseException:NoACL' => "Sorguda eri&#351;im kontrol&#252; sa&#287;lanmad&#305;",

	'InvalidParameterException:NoEntityFound' => "Varl&#305;k bulunamad&#305;, mevcut de&#287;il ya da eri&#351;iminiz yok.",

	'InvalidParameterException:GUIDNotFound' => "GUID:%s bulunamad&#305;, ya da ona eri&#351;emiyorsunuz.",
	'InvalidParameterException:IdNotExistForGUID' => "&#220;zg&#252;n&#252;z, '%s' guid:%d i&#231;in mevcut de&#287;il",
	'InvalidParameterException:CanNotExportType' => "&#220;zg&#252;n&#252;z, '%s' nas&#305;l d&#305;&#351;a aktar&#305;l&#305;r bilmiyorum",
	'InvalidParameterException:NoDataFound' => "Hi&#231; veri bulunamad&#305;.",
	'InvalidParameterException:DoesNotBelong' => "Varl&#305;&#287;a ba&#287;l&#305; de&#287;il.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "Varl&#305;&#287;a ait de&#287;il ya da varl&#305;&#287;a de&#287;inmiyor.",
	'InvalidParameterException:MissingParameter' => "Parametre eksik, bir GUID sa&#287;lamal&#305;s&#305;n&#305;z.",
	'InvalidParameterException:LibraryNotRegistered' => '%s kay&#305;tl&#305; bir k&#252;t&#252;phane de&#287;il',
	'InvalidParameterException:LibraryNotFound' => '%s k&#252;t&#252;phanesi %s\'den y&#252;klenemiyor',

	'APIException:ApiResultUnknown' => "API Sonucu bilinmeyen bir t&#252;rde, bu asla olmamal&#305;.",
	'ConfigurationException:NoSiteID' => "Hi&#231; site kimli&#287;i (ID) belirtilmedi.",
	'SecurityException:APIAccessDenied' => "&#220;zg&#252;n&#252;z, API eri&#351;imi y&#246;netici taraf&#305;ndan devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;.",
	'SecurityException:NoAuthMethods' => "Bu API talebini do&#287;rulayacak kimlik do&#287;rulama metodu bulunamad&#305;.",
	'SecurityException:ForwardFailedToRedirect' => '&#220;stbilgiler &#231;oktan g&#246;nderildi&#287;i i&#231;in y&#246;nlendirme yay&#305;nlanamad&#305;. G&#252;venlik i&#231;in uygulama durduruluyor. Daha fazla bilgi i&#231;in http://docs.elgg.org/ adresini ziyaret edin.',
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "expose_method() &#231;a&#287;r&#305;da metod ya da fonksiyon ayarlanmad&#305;",
	'InvalidParameterException:APIParametersArrayStructure' => "'%s' metodunu ortaya &#231;&#305;karacak &#231;a&#287;r&#305; i&#231;in parametre dizi yap&#305;s&#305; yanl&#305;&#351;",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Tan&#305;mlanamayan http metodu %s: '%s' api metodu i&#231;in",
	'APIException:MissingParameterInMethod' => "%s parametresi %s metodunda eksik",
	'APIException:ParameterNotArray' => "%s bir varl&#305;km&#305;&#351; gibi g&#246;r&#252;nm&#252;yor.",
	'APIException:UnrecognisedTypeCast' => "%s d&#246;k&#252;m&#252;nde '%s' de&#287;i&#351;keni i&#231;in tan&#305;mlanamayan t&#252;r ('%s' metodunda)",
	'APIException:InvalidParameter' => "'%s' i&#231;in '%s' metodunda ge&#231;ersiz parametre bulundu.",
	'APIException:FunctionParseError' => "%s(%s) ayr&#305;&#351;t&#305;rma hatas&#305;na sahip.",
	'APIException:FunctionNoReturn' => "%s(%s) de&#287;er d&#246;nd&#252;rmedi.",
	'APIException:APIAuthenticationFailed' => "Metod &#231;a&#287;r&#305;s&#305; API Kimlik Do&#287;rulamas&#305;n&#305; ba&#351;ar&#305;s&#305;zl&#305;&#287;a u&#287;ratt&#305;",
	'APIException:UserAuthenticationFailed' => "Metod &#231;a&#287;r&#305;s&#305; Kullan&#305;c&#305; Kimlik Do&#287;rulamas&#305;n&#305; ba&#351;ar&#305;s&#305;zl&#305;&#287;a u&#287;ratt&#305;",
	'SecurityException:AuthTokenExpired' => "Kimlik do&#287;rulama belirteci, eksik, ge&#231;ersiz veya s&#252;resi dolmu&#351;.",
	'CallException:InvalidCallMethod' => "%s '%s' kullan&#305;larak &#231;a&#287;&#305;r&#305;lmal&#305;",
	'APIException:MethodCallNotImplemented' => "Metod &#231;a&#287;r&#305;s&#305; '%s' uygulanmad&#305;.",
	'APIException:FunctionDoesNotExist' => "'%s' metodu i&#231;in fonksiyon &#231;a&#287;&#305;r&#305;labilir de&#287;il",
	'APIException:AlgorithmNotSupported' => "Algoritma '%s' desteklenmiyor ya da devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;.",
	'ConfigurationException:CacheDirNotSet' => "&#214;nbellek dizini 'cache_path' ayarlanmad&#305;.",
	'APIException:NotGetOrPost' => "&#304;stek y&#246;ntemi GET veya POST olmal&#305;",
	'APIException:MissingAPIKey' => "API anahtar&#305; (API key) eksik",
	'APIException:BadAPIKey' => "Bozuk API anahtar&#305; (API key)",
	'APIException:MissingHmac' => "X-Elgg-hmac ba&#351;l&#305;&#287;&#305; eksik",
	'APIException:MissingHmacAlgo' => "X-Elgg-hmac-algo ba&#351;l&#305;&#287;&#305; eksik",
	'APIException:MissingTime' => "X-Elgg-time ba&#351;l&#305;&#287;&#305; eksik",
	'APIException:MissingNonce' => "X-Elgg-nonce ba&#351;l&#305;&#287;&#305; eksik",
	'APIException:TemporalDrift' => "X-Elgg-time geride ya da ileride &#231;ok uzaklarda. Devir ba&#351;ar&#305;s&#305;z.",
	'APIException:NoQueryString' => "Sorgu dizesinde veri yok",
	'APIException:MissingPOSTHash' => "X Elgg-posthash ba&#351;l&#305;&#287;&#305; eksik",
	'APIException:MissingPOSTAlgo' => "X Elgg-posthash_algo ba&#351;l&#305;&#287;&#305; eksik",
	'APIException:MissingContentType' => "Post verisi i&#231;in i&#231;erik t&#252;r&#252; eksik",
	'SecurityException:InvalidPostHash' => "POST veri karmas&#305; ge&#231;ersiz - Beklenen %s fakat olan %s.",
	'SecurityException:DupePacket' => "Paket imza zaten g&#246;r&#252;ld&#252;.",
	'SecurityException:InvalidAPIKey' => "Ge&#231;ersiz ya da eksik API Anahtar&#305; (API Key).",
	'NotImplementedException:CallMethodNotImplemented' => "&#199;a&#287;r&#305; metodu '%s' &#351;u anda desteklenmiyor.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC metod &#231;a&#287;r&#305;s&#305; '%s' uygulanmad&#305;.",
	'InvalidParameterException:UnexpectedReturnFormat' => "'%s' metoduna &#231;a&#287;r&#305; beklenmeyen bir sonuca d&#246;nd&#252;.",
	'CallException:NotRPCCall' => "&#199;a&#287;r&#305; ge&#231;erli bir XML-RPC &#231;a&#287;r&#305;s&#305; gibi g&#246;r&#252;nm&#252;yor",

	'PluginException:NoPluginName' => "Eklenti ismi bulunamad&#305;",

	'SecurityException:authenticationfailed' => "Kullan&#305;c&#305; kimli&#287;i do&#287;rulanamad&#305;",

	'CronException:unknownperiod' => '%s tan&#305;mlanabilen bir d&#246;nem de&#287;il.',

	'SecurityException:deletedisablecurrentsite' => '&#350;u anda g&#246;r&#252;nt&#252;ledi&#287;iniz siteyi silebilir ya da kapatabilirsiniz!',

	'RegistrationException:EmptyPassword' => '&#350;ifre alanlar&#305; bo&#351; b&#305;rak&#305;lamaz',
	'RegistrationException:PasswordMismatch' => '&#350;ifreler ayn&#305; olmal&#305;',
	'LoginException:BannedUser' => 'Bu siteden yasakland&#305;n&#305;z ve giri&#351; yapamazs&#305;n&#305;z',
	'LoginException:UsernameFailure' => 'Giri&#351; yap&#305;lam&#305;yor. L&#252;tfen kullan&#305;c&#305;ad&#305;/e-posta ve &#351;ifrenizi kontrol ediniz.',
	'LoginException:PasswordFailure' => 'Giri&#351; yap&#305;lam&#305;yor. L&#252;tfen kullan&#305;c&#305;ad&#305;/e-posta ve &#351;ifrenizi kontrol ediniz.',
	'LoginException:AccountLocked' => '&#199;ok fazla giri&#351; hatas&#305; y&#252;z&#252;nden hesab&#305;n&#305;z kilitlendi.',
	'LoginException:ChangePasswordFailure' => '&#350;u anki &#351;ifre kontrol&#252; ba&#351;ar&#305;s&#305;z.',

	'memcache:notinstalled' => 'PHP memcache mod&#252;l&#252; kurulu de&#287;il, php5-memcache mod&#252;l&#252;n&#252; kurmal&#305;s&#305;n&#305;z',
	'memcache:noservers' => 'Hi&#231; memcache sunucusu tan&#305;mlanmad&#305;, L&#252;tfen $CONFIG->memcache_servers de&#287;i&#351;kenini doldurunuz',
	'memcache:versiontoolow' => 'Memcache &#231;al&#305;&#351;mak i&#231;in en az %s versiyonuna ihtiya&#231; duyuyor, siz %s versiyonu &#231;al&#305;&#351;t&#305;r&#305;yorsunuz',
	'memcache:noaddserver' => '&#199;oklu sunucu deste&#287;i devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;, PECL memcache k&#252;t&#252;phanesini g&#252;ncellemeniz gerekiyor olabilir',

	'deprecatedfunction' => 'Uyar&#305;: Bu kod &#246;nerilmeyen \'%s\' fonksiyonunu kullan&#305;yor ve bu Elgg versiyonuyla uyumlu de&#287;il',

	'pageownerunavailable' => 'Uyar&#305;: Sayfa sahibi %d eri&#351;ilebilir de&#287;il!',
	'viewfailure' => '%s g&#246;r&#252;nt&#252;lemesinde i&#231; sunucu hatas&#305; oldu',
	'changebookmark' => 'L&#252;tfen bu sayfa i&#231;in ba&#287;lant&#305; iminizi de&#287;i&#351;tirin',
	'noaccess' => 'Bu i&#231;erik kald&#305;r&#305;ld&#305;, ge&#231;ersiz ya da g&#246;r&#252;nt&#252;lemek i&#231;in yetkiniz yok.',
	'error:missing_data' => 'Talebinizde veri eksikli&#287;i mevcut',

	'error:default' => 'Oops...bir &#351;eyler yanl&#305;&#351; gitti.',
	'error:404' => '&#220;zg&#252;n&#252;z. Arad&#305;&#287;&#305;n&#305;z sayfa bulunamad&#305;.',

/**
 * API
 */
	'system.api.list' => "Sistemdeki t&#252;m mevcut API &#231;a&#287;r&#305;lar&#305;n&#305; listele.",
	'auth.gettoken' => "Bu API &#231;a&#287;r&#305;s&#305; kullan&#305;c&#305;ya gelecekteki API &#231;a&#287;r&#305;lar&#305; kimlik do&#287;rulamas&#305; i&#231;in kullan&#305;lacak kullan&#305;c&#305; kimlik do&#287;rulamas&#305; belirteci elde etmesini sa&#287;lar. auth_token parametresi olarak b&#305;rak&#305;n",

/**
 * User details
 */

	'name' => "G&#246;r&#252;n&#252;r isim",
	'email' => "E-Posta adresi",
	'username' => "Kullan&#305;c&#305; ad&#305;",
	'loginusername' => "Kullan&#305;c&#305; ad&#305; ya da e-posta",
	'password' => "&#350;ifre",
	'passwordagain' => "&#350;ifre (do&#287;rulama i&#231;in tekrar)",
	'admin_option' => "Bu kullan&#305;c&#305; y&#246;netici olsun mu?",

/**
 * Access
 */

	'PRIVATE' => "&#214;zel",
	'LOGGED_IN' => "Giri&#351; yapm&#305;&#351; kullan&#305;c&#305;lar",
	'PUBLIC' => "Herkes",
	'access:friends:label' => "Arkada&#351;lar",
	'access' => "Eri&#351;im",
	'access:limited:label' => "S&#305;n&#305;rl&#305;",
	'access:help' => "Eri&#351;im seviyesi",

/**
 * Dashboard and widgets
 */

	'dashboard' => "Kontrol Paneli",
	'dashboard:nowidgets' => "Kontrol paneliniz bu sitedeki sizi ilgilendiren aktiviteleri ve i&#231;erikleri incelemenizi sa&#287;lar.",

	'widgets:add' => 'Ara&#231; ekle',
	'widgets:add:description' => "Sayfaya eklemek istedi&#287;iniz herhangi bir ara&#231; d&#252;&#287;mesine t&#305;klay&#305;n.",
	'widgets:position:fixed' => '(Sayfadaki sabit konum)',
	'widget:unavailable' => 'Bu arac&#305; zaten eklediniz',
	'widget:numbertodisplay' => 'G&#246;sterilecek &#246;&#287;e say&#305;s&#305;',

	'widget:delete' => '%s\' kald&#305;r',
	'widget:edit' => 'Bu arac&#305; d&#252;zenle',

	'widgets' => "Ara&#231;lar",
	'widget' => "Ara&#231;",
	'item:object:widget' => "Ara&#231;lar",
	'widgets:save:success' => "Ara&#231; ba&#351;ar&#305;yla kaydedildi.",
	'widgets:save:failure' => "Ara&#231; kaydedilemedi. L&#252;tfen tekrar deneyin.",
	'widgets:add:success' => "Ara&#231; ba&#351;ar&#305;yla eklendi.",
	'widgets:add:failure' => "Ara&#231; eklenemedi.",
	'widgets:move:failure' => "Yeni ara&#231; konumu kaydedilemedi.",
	'widgets:remove:failure' => "Bu ara&#231; kald&#305;r&#305;lam&#305;yor",

/**
 * Groups
 */

	'group' => "Grup",
	'item:group' => "Gruplar",

/**
 * Users
 */

	'user' => "Kullan&#305;c&#305;",
	'item:user' => "Kullan&#305;c&#305;lar",

/**
 * Friends
 */

	'friends' => "Arkada&#351;lar",
	'friends:yours' => "Arkada&#351;lar&#305;n",
	'friends:owned' => "%s'in arkada&#351;lar&#305;",
	'friend:add' => "Arkada&#351; ekle",
	'friend:remove' => "Arkada&#351;&#305; kald&#305;r",

	'friends:add:successful' => "%s arkada&#351; olarak eklendi.",
	'friends:add:failure' => "%s arkada&#351; olarak eklenemedi. L&#252;tfen tekrar deneyin.",

	'friends:remove:successful' => "%s art&#305;k arkada&#351;&#305;n de&#287;il.",
	'friends:remove:failure' => "%s arkada&#351;lar&#305;ndan kald&#305;r&#305;lamad&#305;. L&#252;tfen tekrar deneyin.",

	'friends:none' => "Bu kullan&#305;c&#305; hen&#252;z kimseyi arkada&#351; olarak eklemedi.",
	'friends:none:you' => "Hen&#252;z hi&#231; arkada&#351;&#305;n yok.",

	'friends:none:found' => "Hi&#231; arkada&#351; bulunamad&#305;.",

	'friends:of:none' => "Hen&#252;z kimse bu kullan&#305;c&#305;y&#305; arkada&#351; olarak eklemedi.",
	'friends:of:none:you' => "Kimse seni arkada&#351; olarak eklemedi. &#304;nsanlar&#305;n seni bulabilmesi i&#231;in profilini d&#252;zenle ve i&#231;erik eklemeye ba&#351;la!",

	'friends:of:owned' => "%s'i arkada&#351; olarak ekleyenler",

	'friends:of' => "Arkada&#351;&#305;",
	'friends:collections' => "Arkada&#351; toplulu&#287;u",
	'collections:add' => "Yeni topluluk",
	'friends:collections:add' => "Yeni arkada&#351; toplulu&#287;u",
	'friends:addfriends' => "Arkada&#351; se&#231;",
	'friends:collectionname' => "Topluluk ismi",
	'friends:collectionfriends' => "Topluluktaki arkada&#351;lar",
	'friends:collectionedit' => "Bu toplulu&#287;u d&#252;zenle",
	'friends:nocollections' => "Hen&#252;z bir topluluk olu&#351;turmad&#305;n&#305;z.",
	'friends:collectiondeleted' => "Topluluk silindi.",
	'friends:collectiondeletefailed' => "Topluluk silinemedi. Yetkiniz yok ya da ba&#351;ka bir problem meydana gelmi&#351; olabilir.",
	'friends:collectionadded' => "Topluluk ba&#351;ar&#305;yla olu&#351;turuldu",
	'friends:nocollectionname' => "Toplulu&#287;unuzu olu&#351;turmadan &#246;nce bir isim belirlemelisiniz.",
	'friends:collections:members' => "Topluluk &#252;yeleri",
	'friends:collections:edit' => "Toplulu&#287;u d&#252;zenle",
	'friends:collections:edited' => "Topluluk kaydedildi",
	'friends:collection:edit_failed' => 'Topluluk kaydedilemedi.',

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

	'avatar' => 'Profil Resmi',
	'avatar:create' => 'Profil Resmi olu&#351;tur',
	'avatar:edit' => 'Profil Resmini d&#252;zenle',
	'avatar:preview' => '&#214;nizleme',
	'avatar:upload' => 'Yeni profil resmi y&#252;kle',
	'avatar:current' => '&#350;u anki profil resmi',
	'avatar:revert' => 'Profil resmini varsay&#305;lan ikona d&#246;n&#252;&#351;t&#252;r',
	'avatar:crop:title' => 'Profil resmi k&#305;rpma arac&#305;',
	'avatar:upload:instructions' => "Profil reminiz t&#252;m site ziyaret&#231;ileri taraf&#305;ndan g&#246;r&#252;nt&#252;lenebilir. &#304;stedi&#287;iniz s&#305;kl&#305;kta de&#287;i&#351;tirebilirsiniz. (Kabul edilebilir resim formatlar&#305;: GIF, JPG or PNG)",
	'avatar:create:instructions' => 'T&#305;klay&#305;n ve profil resminizi ne kadar k&#305;rpmak istiyorsan&#305;z o kadar s&#252;r&#252;kleyin. Sa&#287;daki kutuda &#246;nizleme g&#246;r&#252;nt&#252;lenecek. Memnun kald&#305;&#287;&#305;n&#305;z zaman, \'Profil resmi olu&#351;tur\'a t&#305;klay&#305;n. Bu k&#305;rp&#305;lm&#305;&#351; resim sitede profil resminiz olarak kullan&#305;lacak.',
	'avatar:upload:success' => 'Profil resmi ba&#351;ar&#305;yla y&#252;klendi',
	'avatar:upload:fail' => 'Profil resmi y&#252;kleme ba&#351;ar&#305;s&#305;z',
	'avatar:resize:fail' => 'Profil resmi yeniden boyutland&#305;rma ba&#351;ar&#305;s&#305;z',
	'avatar:crop:success' => 'Profil resmi k&#305;rpma ba&#351;ar&#305;l&#305;',
	'avatar:crop:fail' => 'Profil resmi k&#305;rpma ba&#351;ar&#305;s&#305;z',
	'avatar:revert:success' => 'Profil resmi d&#246;nd&#252;rme ba&#351;ar&#305;l&#305;',
	'avatar:revert:fail' => 'Profil resmi d&#246;nd&#252;rme ba&#351;ar&#305;s&#305;z',

	'profile:edit' => 'Profil d&#252;zenle',
	'profile:aboutme' => "Hakk&#305;mda",
	'profile:description' => "Hakk&#305;mda",
	'profile:briefdescription' => "K&#305;sa a&#231;&#305;klama",
	'profile:location' => "Konum",
	'profile:skills' => "Beceriler",
	'profile:interests' => "&#304;lgiler",
	'profile:contactemail' => "&#304;leti&#351;im e-posta adresi",
	'profile:phone' => "Telefon",
	'profile:mobile' => "Cep telefonu",
	'profile:website' => "Website",
	'profile:twitter' => "Twitter kullan&#305;c&#305; ad&#305;",
	'profile:saved' => "Profil bilgileriniz ba&#351;ar&#305;yla kaydedildi.",

	'profile:field:text' => 'K&#305;sa metin',
	'profile:field:longtext' => 'Geni&#351; metin alan&#305;',
	'profile:field:tags' => 'Etiketler',
	'profile:field:url' => 'Web adresi',
	'profile:field:email' => 'E-Posta adresi',
	'profile:field:location' => 'Konum',
	'profile:field:date' => 'Tarih',

	'admin:appearance:profile_fields' => 'Profil alanlar&#305;n&#305; d&#252;zenle',
	'profile:edit:default' => 'Profil alanlar&#305;n&#305; d&#252;zenle',
	'profile:label' => "Profil etiketi",
	'profile:type' => "Profil t&#252;r&#252;",
	'profile:editdefault:delete:fail' => 'Varsay&#305;lan profil alan&#305;n&#305; kald&#305;rma ba&#351;ar&#305;s&#305;z',
	'profile:editdefault:delete:success' => 'Profil alan&#305; silindi',
	'profile:defaultprofile:reset' => 'Profil alan&#305; sistem varsay&#305;lan&#305;na s&#305;f&#305;rlan&#305;yor',
	'profile:resetdefault' => 'Varsay&#305;lan profili s&#305;f&#305;rla',
	'profile:explainchangefields' => "Varolan profil alanlar&#305;n&#305; a&#351;a&#287;&#305;daki formu kullanarak de&#287;i&#351;tirebilirsiniz. \n\n Yeni profil alan&#305;na bir isim verin, &#246;rne&#287;in, 'Favori tak&#305;m', sonra alan t&#252;r&#252;n&#252; se&#231;in (&#246;r. metin (text), url, etiketler (tags)), ve 'Ekle' d&#252;&#287;mesine t&#305;klay&#305;n. S&#252;r&#252;kle b&#305;rak y&#246;ntemiyle alanlar&#305;n s&#305;ras&#305;n&#305; de&#287;i&#351;tirebilirsiniz. Bir alan&#305;n ismini de&#287;i&#351;tirmek i&#231;in - o alan&#305;n ismine d&#252;zenlenebilir yapmak i&#231;in t&#305;klay&#305;n. \n\n &#304;stedi&#287;iniz zaman varsay&#305;lan profil alanlar&#305;na d&#246;n&#252;&#351; yapabilirsiniz, ancak olu&#351;turmu&#351; oldu&#287;unuz t&#252;m profil alanlar&#305; kaybedersiniz.",
	'profile:editdefault:success' => 'Yeni profil alan&#305; eklendi',
	'profile:editdefault:fail' => 'Varsay&#305;lan profil kaydedilemedi',


/**
 * Feeds
 */
	'feed:rss' => 'Bu sayfa i&#231;in RSS beslemesi',
/**
 * Links
 */
	'link:view' => 'ba&#287;lant&#305;y&#305; g&#246;r&#252;nt&#252;le',
	'link:view:all' => 'T&#252;m&#252;n&#252; g&#246;r&#252;nt&#252;le',


/**
 * River
 */
	'river' => "River",
	'river:friend:user:default' => "%s art&#305;k %s ile arkada&#351;",
	'river:update:user:avatar' => '%s yeni bir profil remi y&#252;kledi',
	'river:update:user:profile' => '%s profilini g&#252;ncelledi',
	'river:noaccess' => 'Bu &#246;&#287;eyi g&#246;r&#252;nt&#252;lemek i&#231;in yetkiniz yok.',
	'river:posted:generic' => '%s g&#246;nderdi',
	'riveritem:single:user' => 'bir kullan&#305;c&#305;',
	'riveritem:plural:user' => 'baz&#305; kullan&#305;c&#305;lar',
	'river:ingroup' => '%s grubunda',
	'river:none' => 'Aktivite yok',
	'river:update' => '%s i&#231;in g&#252;ncelle&#351;tirme',

	'river:widget:title' => "Aktivite",
	'river:widget:description' => "Son aktiviteleri g&#246;ster",
	'river:widget:type' => "Aktivite t&#252;r&#252;",
	'river:widgets:friends' => 'Arkada&#351;lar&#305;n aktiviteleri',
	'river:widgets:all' => 'T&#252;m site aktiviteleri',

/**
 * Notifications
 */
	'notifications:usersettings' => "Bildirim ayarlar&#305;",
	'notifications:methods' => "L&#252;tfen hangi metoda izin verdi&#287;inizi belirtin.",
	'notification:method:email' => 'E-Posta',

	'notifications:usersettings:save:ok' => "Bildirim ayarlar&#305;n&#305;z ba&#351;ar&#305;yla kaydedildi.",
	'notifications:usersettings:save:fail' => "Bildirim ayarlar&#305;n&#305;z kaydedilirken hata meydana geldi.",

	'user.notification.get' => 'Belirli bir kullan&#305;c&#305; i&#231;in bildirim ayarlar&#305;n&#305; geri d&#246;nd&#252;r&#252;n',
	'user.notification.set' => 'Belirli bir kullan&#305;c&#305; i&#231;in bildirim ayarlar&#305;n&#305; yap&#305;n.',
/**
 * Search
 */

	'search' => "Ara",
	'searchtitle' => "Ara: %s",
	'users:searchtitle' => "Kullan&#305;c&#305;lar aran&#305;yor: %s",
	'groups:searchtitle' => "Gruplar aran&#305;yor: %s",
	'advancedsearchtitle' => "%s %s ile e&#351;le&#351;en sonu&#231;lar",
	'notfound' => "Sonu&#231; bulunamad&#305;.",
	'next' => "Sonraki",
	'previous' => "&#214;nceki",

	'viewtype:change' => "Liste t&#252;r&#252;n&#252; de&#287;i&#351;tir",
	'viewtype:list' => "Liste g&#246;r&#252;n&#252;m&#252;",
	'viewtype:gallery' => "Galeri",

	'tag:search:startblurb' => "'%s' etiketleri ile e&#351;le&#351;en &#246;&#287;eler:",

	'user:search:startblurb' => "'%s' ile e&#351;le&#351;en kullan&#305;c&#305;lar:",
	'user:search:finishblurb' => "Daha fazla g&#246;r&#252;nt&#252;lemek i&#231;in, buraya t&#305;klay&#305;n.",

	'group:search:startblurb' => "'%s' ile e&#351;le&#351;en gruplar:",
	'group:search:finishblurb' => "Daha fazla g&#246;r&#252;nt&#252;lemek i&#231;in, buraya t&#305;klay&#305;n.",
	'search:go' => 'Git',
	'userpicker:only_friends' => 'Yaln&#305;zca arkada&#351;lar',

/**
 * Account
 */

	'account' => "Hesap",
	'settings' => "Ayarlar",
	'tools' => "Ara&#231;lar",
	'settings:edit' => 'Ayarlar&#305; d&#252;zenle',

	'register' => "Kaydol",
	'registerok' => "%s i&#231;in ba&#351;ar&#305;yla kaydoldunuz.",
	'registerbad' => "Kayd&#305;n&#305;z bilinmeyen bir hata nedeniyle ba&#351;ar&#305;s&#305;z.",
	'registerdisabled' => "Kay&#305;t sistem y&#246;neticisi taraf&#305;ndan devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;",
	'register:fields' => 'T&#252;m alanlar gerekli',

	'registration:notemail' => 'Verdi&#287;iniz e-posta adresi ge&#231;erli bir e-posta adresi gibi g&#246;r&#252;nm&#252;yor.',
	'registration:userexists' => 'Bu kullan&#305;c&#305; ad&#305; daha &#246;nce kullan&#305;lm&#305;&#351;',
	'registration:usernametooshort' => 'Kullan&#305;c&#305; ad&#305;n&#305;z en az %u karakterden olu&#351;mal&#305;d&#305;r.',
	'registration:passwordtooshort' => '&#350;ifre en az %u karakterden olu&#351;mal&#305;d&#305;r.',
	'registration:dupeemail' => 'Bu e-posta adresi daha &#246;nce kaydedilmi&#351;.',
	'registration:invalidchars' => '&#220;zg&#252;n&#252;z, kullan&#305;c&#305; ad&#305;n&#305;z ge&#231;ersiz olan %s karakter(ler)ini i&#231;eriyor. &#350;u karakterler ge&#231;ersizdir: %s',
	'registration:emailnotvalid' => '&#220;zg&#252;n&#252;z, girdi&#287;iniz e-posta adresi sistemde ge&#231;ersiz',
	'registration:passwordnotvalid' => '&#220;zg&#252;n&#252;z, girdi&#287;iniz &#351;ifre sistemde ge&#231;ersiz',
	'registration:usernamenotvalid' => '&#220;zg&#252;n&#252;z, girdi&#287;iniz kullan&#305;c&#305; ad&#305; sistemde ge&#231;ersiz',

	'adduser' => "Kullan&#305;c&#305; Ekle",
	'adduser:ok' => "Ba&#351;ar&#305;yla yeni bir kullan&#305;c&#305; eklediniz.",
	'adduser:bad' => "Yeni kullan&#305;c&#305; olu&#351;turulam&#305;yor.",

	'user:set:name' => "Hesap ismi ayarlar&#305;",
	'user:name:label' => "G&#246;r&#252;n&#252;r ismim",
	'user:name:success' => "Sistemdeki isminiz ba&#351;ar&#305;yla de&#287;i&#351;tirildi.",
	'user:name:fail' => "Sistemdeki isminiz de&#287;i&#351;tirilemiyor.  &#304;sminizin &#231;ok uzun olmad&#305;&#287;&#305;ndan emin olun ve tekrar deneyin.",

	'user:set:password' => "Hesap &#351;ifresi",
	'user:current_password:label' => 'Mevcut &#351;ifre',
	'user:password:label' => "Yeni &#351;ifreniz",
	'user:password2:label' => "Yeni &#351;ifreniz tekrar",
	'user:password:success' => "&#350;ifre de&#287;i&#351;tirildi",
	'user:password:fail' => "Sistemdeki &#351;ifreniz de&#287;i&#351;tirilemiyor.",
	'user:password:fail:notsame' => "&#304;ki &#351;ifre ayn&#305; de&#287;il!",
	'user:password:fail:tooshort' => "&#350;ifre &#231;ok k&#305;sa!",
	'user:password:fail:incorrect_current_password' => 'Girdi&#287;iniz mevcut &#351;ifre yanl&#305;&#351;.',
	'user:resetpassword:unknown_user' => 'Ge&#231;ersiz kullan&#305;c&#305;.',
	'user:resetpassword:reset_password_confirm' => '&#350;ifre s&#305;f&#305;rlama kay&#305;tl&#305; e-posta adresinize yeni bir &#351;ifre g&#246;nderecek.',

	'user:set:language' => "Dil ayarlar&#305;",
	'user:language:label' => "Diliniz",
	'user:language:success' => "Dil ayarlar&#305;n&#305;z g&#252;ncellendi.",
	'user:language:fail' => "Dil ayarlar&#305;n&#305;z kaydedilemiyor.",

	'user:username:notfound' => 'Kullan&#305;c&#305; ad&#305; %s bulunamad&#305;.',

	'user:password:lost' => 'Kay&#305;p &#351;ifre',
	'user:password:resetreq:success' => 'Yeni &#351;ifre talep edildi, e-posta g&#246;nderildi',
	'user:password:resetreq:fail' => 'Yeni &#351;ifre talep edilemiyor.',

	'user:password:text' => 'Yeni &#351;ifre talep etmek i&#231;in, a&#351;a&#287;&#305;ya kullan&#305;c&#305; ad&#305;n&#305;z&#305; ya da e-posta adresinizi yazn&#305; ve Talep Et butonuna t&#305;klay&#305;n.',

	'user:persistent' => 'Beni hat&#305;rla',

	'walled_garden:welcome' => 'Ho&#351;geldiniz',

/**
 * Administration
 */
	'menu:page:header:administer' => 'Y&#246;netim',
	'menu:page:header:configure' => 'Yap&#305;land&#305;rma',
	'menu:page:header:develop' => 'Geli&#351;tirme',
	'menu:page:header:default' => 'Di&#287;er',

	'admin:view_site' => 'Siteyi g&#246;ster',
	'admin:loggedin' => '%s olarak giri&#351; yap&#305;ld&#305;',
	'admin:menu' => 'Men&#252;',

	'admin:configuration:success' => "Ayarlar&#305;n&#305;z kaydedildi.",
	'admin:configuration:fail' => "Ayarlar&#305;n&#305;z kaydedilemedi.",
	'admin:configuration:dataroot:relative_path' => '"%s" veri klas&#246;r&#252; olarak kaydedilemedi. &#199;&#252;nk&#252; tam bir dizin yolu de&#287;il.',

	'admin:unknown_section' => 'Ge&#231;ersiz Y&#246;netici B&#246;l&#252;m&#252;.',

	'admin' => "Y&#246;netim",
	'admin:description' => "Y&#246;netim paneli kullan&#305;c&#305; y&#246;netiminden eklentilere kadar sistemi t&#252;m y&#246;nleriyle kontrol etmenizi sa&#287;lar. Ba&#351;lamak i&#231;in a&#351;a&#287;&#305;dan bir se&#231;enek se&#231;in.",

	'admin:statistics' => "&#304;statistikler",
	'admin:statistics:overview' => 'Genel Bak&#305;&#351;',
	'admin:statistics:server' => 'Sunucu Bilgisi',

	'admin:appearance' => 'G&#246;r&#252;n&#252;m',
	'admin:administer_utilities' => 'Hizmetler',
	'admin:develop_utilities' => 'Hizmetler',

	'admin:users' => "Kullan&#305;c&#305;lar",
	'admin:users:online' => '&#350;u anda &#199;evrimi&#231;i',
	'admin:users:newest' => 'En Yeni',
	'admin:users:add' => 'Yeni Kullan&#305;c&#305; Ekle',
	'admin:users:description' => "Bu y&#246;netim paneli siteniz i&#231;in kullan&#305;c&#305; ayarlar&#305;n&#305; kontrol etmenizi sa&#287;lar. Ba&#351;lamak i&#231;in a&#351;a&#287;&#305;dan bir se&#231;enek se&#231;in.",
	'admin:users:adduser:label' => "Yeni kullan&#305;c&#305; eklemek i&#231;in buraya t&#305;klay&#305;n...",
	'admin:users:opt:linktext' => "Kullan&#305;c&#305;lar&#305; yap&#305;land&#305;r...",
	'admin:users:opt:description' => "Kullan&#305;c&#305;lar&#305; ve hesap bilgisini yap&#305;land&#305;r. ",
	'admin:users:find' => 'Bul',

	'admin:settings' => 'Ayarlar',
	'admin:settings:basic' => 'Temel Ayarlar',
	'admin:settings:advanced' => 'Geli&#351;mi&#351; Ayarlar',
	'admin:site:description' => "Bu y&#246;netim paneli siteniz i&#231;in evrensel ayarlar&#305; kontrol etmenizi sa&#287;lar. Ba&#351;lamak i&#231;in a&#351;a&#287;&#305;dan bir se&#231;enek se&#231;in.",
	'admin:site:opt:linktext' => "Siteyi yap&#305;land&#305;r...",
	'admin:site:access:warning' => "Eri&#351;im ayarlar&#305;n&#305; de&#287;i&#351;tirmek yaln&#305;zca bundan sonra eklenecek i&#231;erikleri etkileyecektir.",

	'admin:dashboard' => 'Kontrol Paneli',
	'admin:widget:online_users' => '&#199;evrimi&#231;i kullan&#305;c&#305;lar',
	'admin:widget:online_users:help' => '&#350;u anda sitede olan kullan&#305;c&#305;lar&#305; listele',
	'admin:widget:new_users' => 'Yeni kullan&#305;c&#305;lar',
	'admin:widget:new_users:help' => 'Yeni kullan&#305;c&#305;lar&#305; listele',
	'admin:widget:content_stats' => '&#304;&#231;erik istatistikleri',
	'admin:widget:content_stats:help' => 'Kullan&#305;c&#305;lar taraf&#305;ndan olu&#351;turulan i&#231;erikleri takip edin',
	'widget:content_stats:type' => '&#304;&#231;erik t&#252;r&#252;',
	'widget:content_stats:number' => 'Say&#305;',

	'admin:widget:admin_welcome' => 'Ho&#351;geldiniz',
	'admin:widget:admin_welcome:help' => "Elgg y&#246;netim alan&#305;n&#305;n k&#305;sa bir tan&#305;t&#305;m&#305;",
	'admin:widget:admin_welcome:intro' =>
'Elgg sistemine ho&#351;geldiniz! &#350;u anda y&#246;netim kontrol panelindesiniz. Sitede neler olup bitti&#287;ini izlemek i&#231;in kullan&#305;&#351;l&#305; bir aland&#305;r.',

	'admin:widget:admin_welcome:admin_overview' =>
"Y&#246;netim alan&#305; navigasyonu sa&#287; tarafta bulunur. &#220;&#231; b&#246;l&#252;me"
. " ayr&#305;lm&#305;&#351;t&#305;r:
	<dl>
		<dt>Y&#246;netim</dt><dd>&#350;ikayet edilen i&#231;erikleri inceleme, kimlerin &#231;evrimi&#231;i oldu&#287;unu g&#246;r&#252;nt&#252;leme ve istatistikleri g&#246;r&#252;nt&#252;leme gibi g&#252;nl&#252;k g&#246;revleri i&#231;erir.</dd>
		<dt>Yap&#305;land&#305;rma</dt><dd>Site ismini ayarlama ve eklenti etkinle&#351;tirme gibi daha az s&#305;kl&#305;kla kullanaca&#287;&#305;n&#305;z g&#246;revleri i&#231;erir.</dd>
		<dt>Geli&#351;tirme</dt><dd>Eklenti ve tema geli&#351;tiren geli&#351;tiriciler i&#231;indir. (Geli&#351;tirici eklentisini gerektirir.)</dd>
	</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />Alt men&#252;de belirtilen kaynaklar&#305; incelemeyi unutmay&#305;n. Elgg kulland&#305;&#287;&#305;n&#305;z i&#231;in te&#351;ekk&#252;rler!',

	'admin:widget:control_panel' => 'Kontrol Paneli',
	'admin:widget:control_panel:help' => "Genel kontrollere kolay eri&#351;im sa&#287;lar",

	'admin:cache:flush' => '&#214;nbelle&#287;i bo&#351;alt',
	'admin:cache:flushed' => "&#214;nbellek bo&#351;alt&#305;ld&#305;",

	'admin:footer:faq' => 'Y&#246;netim SSS',
	'admin:footer:manual' => 'Y&#246;netim Kullan&#305;m K&#305;lavuzu',
	'admin:footer:community_forums' => 'Elgg Topluluk Forumlar&#305;',
	'admin:footer:blog' => 'Elgg Blog',

	'admin:plugins:category:all' => 'T&#252;m Eklentiler',
	'admin:plugins:category:active' => 'Etkin Eklentiler',
	'admin:plugins:category:inactive' => 'Etkin olmayan Eklentiler',
	'admin:plugins:category:admin' => 'Y&#246;netici',
	'admin:plugins:category:bundled' => 'Paketlenmi&#351;',
	'admin:plugins:category:nonbundled' => 'Paketlenmemi&#351;',
	'admin:plugins:category:content' => '&#304;&#231;erik',
	'admin:plugins:category:development' => 'Geli&#351;mi&#351;',
	'admin:plugins:category:enhancement' => 'De&#287;erlenmi&#351;',
	'admin:plugins:category:api' => 'Servis/API',
	'admin:plugins:category:communication' => '&#304;leti&#351;im',
	'admin:plugins:category:security' => 'G&#252;venlik ve Spam',
	'admin:plugins:category:social' => 'Sosyal',
	'admin:plugins:category:multimedia' => 'Multimedya',
	'admin:plugins:category:theme' => 'Temalar',
	'admin:plugins:category:widget' => 'Ara&#231;lar',
	'admin:plugins:category:utility' => 'Hizmetler',

	'admin:plugins:sort:priority' => '&#214;ncelik',
	'admin:plugins:sort:alpha' => 'Alfabetik',
	'admin:plugins:sort:date' => 'En Yeni',

	'admin:plugins:markdown:unknown_plugin' => 'Bilinmeyen eklenti.',
	'admin:plugins:markdown:unknown_file' => 'Bilinmeyen dosya.',


	'admin:notices:could_not_delete' => 'Uyar&#305; silinemiyor.',

	'admin:options' => 'Y&#246;netici se&#231;enekleri',


/**
 * Plugins
 */
	'plugins:disabled' => 'Eklentiler y&#252;kleniyor, &#231;&#252;nk&#252; mod dizininde bir dosya ismi "devre d&#305;&#351;&#305; b&#305;rakl&#305;ld&#305;".',
	'plugins:settings:save:ok' => "%s eklenti ayarlar&#305; ba&#351;ar&#305;yla kaydedildi.",
	'plugins:settings:save:fail' => "%s eklenti ayarlar&#305; kaydedilirken hata meydana geldi.",
	'plugins:usersettings:save:ok' => "%s eklentisi kullan&#305;c&#305; ayarlar&#305; ba&#351;ar&#305;yla kaydedildi.",
	'plugins:usersettings:save:fail' => "%s eklentisi kullan&#305;c&#305; ayarlar&#305; kaydedilirken hata meydana geldi.",
	'item:object:plugin' => 'Eklentiler',

	'admin:plugins' => "Eklentiler",
	'admin:plugins:activate_all' => 'T&#252;m&#252;n&#252; Etkinle&#351;tir',
	'admin:plugins:deactivate_all' => 'T&#252;m&#252;n&#252; Devre D&#305;&#351;&#305; B&#305;rak',
	'admin:plugins:activate' => 'Etkinle&#351;tir',
	'admin:plugins:deactivate' => 'Devre D&#305;&#351;&#305; B&#305;rak',
	'admin:plugins:description' => "Bu y&#246;netim paneli sitenizde kurulmu&#351; ara&#231;lar&#305; kontrol etmenizi ve yap&#305;land&#305;rman&#305;z&#305; sa&#287;lar.",
	'admin:plugins:opt:linktext' => "Ara&#231;lar&#305; yap&#305;land&#305;r...",
	'admin:plugins:opt:description' => "Sitede y&#252;klenmi&#351; ara&#231;lar&#305; yap&#305;land&#305;r. ",
	'admin:plugins:label:author' => "Olu&#351;turan",
	'admin:plugins:label:copyright' => "Telif hakk&#305;",
	'admin:plugins:label:categories' => 'Kategoriler',
	'admin:plugins:label:licence' => "Lisans",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:moreinfo' => 'Daha fazla bilgi',
	'admin:plugins:label:version' => 'Versiyon',
	'admin:plugins:label:location' => 'Konum',
	'admin:plugins:label:dependencies' => 'Ba&#287;&#305;ml&#305;l&#305;klar',

	'admin:plugins:warning:elgg_version_unknown' => 'Bu eklenti eski bir bildirim dosyas&#305; kullan&#305;yor ve uyumlu bir Elgg s&#252;r&#252;m&#252; belirtmiyor. Muhtemelen &#231;al&#305;&#351;mayacak!',
	'admin:plugins:warning:unmet_dependencies' => 'Bu eklenti kar&#351;&#305;lanmayan ba&#287;&#305;ml&#305;l&#305;klara sahip ve etkinle&#351;tirilemiyor. Daha fazla bilgi alt&#305;ndaki ba&#287;&#305;ml&#305;l&#305;klar&#305; denetleyin.',
	'admin:plugins:warning:invalid' => '%s ge&#231;erli bir Elgg eklentisi de&#287;il.  Sorun giderme ipu&#231;lar&#305; i&#231;in <a href="http://docs.elgg.org/Invalid_Plugin">Elgg Kullan&#305;m K&#305;lavuzunu</a> kontrol edin.',
	'admin:plugins:cannot_activate' => 'etkinle&#351;tirilemiyor',

	'admin:plugins:set_priority:yes' => "%s s&#305;raland&#305;.",
	'admin:plugins:set_priority:no' => "%s s&#305;ralanam&#305;yor.",
	'admin:plugins:set_priority:no_with_msg' => "%s s&#305;ralanam&#305;yor. Hata: %s",
	'admin:plugins:deactivate:yes' => "%s devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;.",
	'admin:plugins:deactivate:no' => "%s devre d&#305;&#351;&#305; b&#305;rak&#305;lamad&#305;.",
	'admin:plugins:deactivate:no_with_msg' => "%s devre d&#305;&#351;&#305; b&#305;rak&#305;lamad&#305;. Hata: %s",
	'admin:plugins:activate:yes' => "%s etkinle&#351;tirildi.",
	'admin:plugins:activate:no' => "%s etkinle&#351;tirilemedi.",
	'admin:plugins:activate:no_with_msg' => "%s etkinle&#351;tirilemedi. Hata: %s",
	'admin:plugins:categories:all' => 'T&#252;m kategoriler',
	'admin:plugins:plugin_website' => 'Eklenti websitesi',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Versiyon %s',
	'admin:plugin_settings' => 'Eklenti Ayarlar&#305;',
	'admin:plugins:warning:unmet_dependencies_active' => 'Bu eklenti etkin ancak kar&#351;&#305;lanamayan ba&#287;&#305;ml&#305;l&#305;klar&#305; var. Sorunlarla kar&#351;&#305;la&#351;abilirsiniz. Ayr&#305;nt&#305;lar i&#231;in a&#351;a&#287;&#305;daki "daha fazla bilgi" b&#246;l&#252;m&#252;n&#252; inceleyin.',

	'admin:plugins:dependencies:type' => 'T&#252;r',
	'admin:plugins:dependencies:name' => '&#304;sim',
	'admin:plugins:dependencies:expected_value' => 'Beklenen De&#287;er',
	'admin:plugins:dependencies:local_value' => 'Ger&#231;ek De&#287;er',
	'admin:plugins:dependencies:comment' => 'Yorum',

	'admin:statistics:description' => "Bu sitenizdeki istatistiklerin genel bir bak&#305;&#351;&#305; niteli&#287;indedir. E&#287;er daha ayr&#305;nt&#305;l&#305; istatistikler gerekiyorsa, profesyonel bir y&#246;netim &#246;zelli&#287;i mevcuttur.",
	'admin:statistics:opt:description' => "Sitenizdeki kullan&#305;c&#305;lar ve nesneler hakk&#305;nda istatistiki bilgileri g&#246;ster.",
	'admin:statistics:opt:linktext' => "&#304;statistikleri g&#246;ster...",
	'admin:statistics:label:basic' => "Temel site istatistikleri",
	'admin:statistics:label:numentities' => "Sitedeki varl&#305;klar",
	'admin:statistics:label:numusers' => "Kullan&#305;c&#305; say&#305;s&#305;",
	'admin:statistics:label:numonline' => "&#199;evrimi&#231;i kullan&#305;c&#305; say&#305;s&#305;",
	'admin:statistics:label:onlineusers' => "&#350;u anda &#231;evrimi&#231;i olan kullan&#305;c&#305;lar",
	'admin:statistics:label:version' => "Elgg versiyonu",
	'admin:statistics:label:version:release' => "S&#252;r&#252;m",
	'admin:statistics:label:version:version' => "Versiyon",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => 'Web Sunucu',
	'admin:server:label:server' => 'Sunucu',
	'admin:server:label:log_location' => 'Log Konumu',
	'admin:server:label:php_version' => 'PHP versiyonu',
	'admin:server:label:php_ini' => 'PHP ini dosyas&#305; konumu',
	'admin:server:label:php_log' => 'PHP Log',
	'admin:server:label:mem_avail' => 'Kullan&#305;labilir Bellek',
	'admin:server:label:mem_used' => 'Kullan&#305;lan bellek',
	'admin:server:error_log' => "Web sunucusunun hata logu",

	'admin:user:label:search' => "Kullan&#305;c&#305; bul:",
	'admin:user:label:searchbutton' => "Ara",

	'admin:user:ban:no' => "Kullan&#305;c&#305; yasaklanam&#305;yor",
	'admin:user:ban:yes' => "Kullan&#305;c&#305; yasakland&#305;.",
	'admin:user:self:ban:no' => "Kendinizi yasaklayamazs&#305;n&#305;z",
	'admin:user:unban:no' => "Kullan&#305;c&#305; yasa&#287;&#305; kald&#305;r&#305;lam&#305;yor",
	'admin:user:unban:yes' => "Kullan&#305;c&#305; yasa&#287;&#305; kald&#305;r&#305;ld&#305;.",
	'admin:user:delete:no' => "Kullan&#305;c&#305; silinemiyor",
	'admin:user:delete:yes' => "Kullan&#305;c&#305; %s silindi",
	'admin:user:self:delete:no' => "Kendinizi silemezsiniz",

	'admin:user:resetpassword:yes' => "&#350;ifre s&#305;f&#305;rland&#305;, kullan&#305;c&#305; bilgilendirildi.",
	'admin:user:resetpassword:no' => "&#350;ifre s&#305;f&#305;rlanam&#305;yor.",

	'admin:user:makeadmin:yes' => "Kullan&#305;c&#305; art&#305;k y&#246;netici.",
	'admin:user:makeadmin:no' => "Bu kullan&#305;c&#305; y&#246;netici yap&#305;lam&#305;yor.",

	'admin:user:removeadmin:yes' => "Kullan&#305;c&#305; art&#305;k y&#246;netici de&#287;il.",
	'admin:user:removeadmin:no' => "Bu kullan&#305;c&#305;n&#305;n y&#246;netici haklar&#305; kald&#305;r&#305;lam&#305;oyr.",
	'admin:user:self:removeadmin:no' => "Kendi y&#246;netici haklar&#305;n&#305;z&#305; kald&#305;ramazs&#305;n&#305;z.",

	'admin:appearance:menu_items' => 'Men&#252; &#214;&#287;eleri',
	'admin:menu_items:configure' => 'Ana men&#252; &#246;&#287;elerini yap&#305;land&#305;r',
	'admin:menu_items:description' => 'Se&#231;kin ba&#287;lant&#305; olarak g&#246;stermek i&#231;in istedi&#287;iniz men&#252; &#246;&#287;elerini se&#231;in.  Kullan&#305;lmayan &#246;&#287;eler "Daha Fazla" men&#252;s&#252; alt&#305;nda listelenecek.',
	'admin:menu_items:hide_toolbar_entries' => 'Ba&#287;lant&#305;lar ara&#231; &#231;ubu&#287;u men&#252;s&#252;nden kald&#305;r&#305;ls&#305;n m&#305;?',
	'admin:menu_items:saved' => 'Men&#252; &#246;&#287;eleri kaydedildi.',
	'admin:add_menu_item' => '&#214;zel bir men&#252; &#246;&#287;esi ekle',
	'admin:add_menu_item:description' => 'Navigasyon men&#252;s&#252;ne &#246;zel &#246;&#287;e eklemek i&#231;in G&#246;r&#252;n&#252;r isim ve URL yaz&#305;n.',

	'admin:appearance:default_widgets' => 'Varsay&#305;lan Ara&#231;lar',
	'admin:default_widgets:unknown_type' => 'Bilinmeyen ara&#231; t&#252;r&#252;',
	'admin:default_widgets:instructions' => 'Se&#231;ilen ara&#231; sayfas&#305; i&#231;in varsay&#305;lan ara&#231;lar&#305; ekle, kald&#305;r, pozisyon belirt ve yap&#305;land&#305;r.'
		. '  Bu de&#287;i&#351;iklikler siteye yeni kaydolan kullan&#305;c&#305;lar&#305; etkileyecek.',

/**
 * User settings
 */
	'usersettings:description' => "Kullan&#305;c&#305; ayarlar&#305; paneli kullan&#305;c&#305; y&#246;netiminden eklentilere kadar t&#252;m ki&#351;isel ayarlar&#305;n&#305;z&#305; kontrol etmenize izin verir. Ba&#351;lamak i&#231;in a&#351;a&#287;&#305;dan bir se&#231;enek se&#231;in.",

	'usersettings:statistics' => "&#304;statistikleriniz",
	'usersettings:statistics:opt:description' => "Sitedeki kullan&#305;c&#305;lar ve nesneler hakk&#305;nda istatistiksel bilgileri g&#246;ster.",
	'usersettings:statistics:opt:linktext' => "Hesap istatistikleri",

	'usersettings:user' => "Ayarlar&#305;n&#305;z",
	'usersettings:user:opt:description' => "Bu kullan&#305;c&#305; ayarlar&#305;n&#305; kontrol etmenizi sa&#287;lar.",
	'usersettings:user:opt:linktext' => "Ayarlar&#305;n&#305;z&#305; de&#287;i&#351;tirin",

	'usersettings:plugins' => "Ara&#231;lar",
	'usersettings:plugins:opt:description' => "E&#287;er varsa aktif ara&#231;lar&#305;n&#305;z i&#231;in ayarlar&#305; yap&#305;land&#305;r&#305;n.",
	'usersettings:plugins:opt:linktext' => "Ara&#231;lar&#305;n&#305;z&#305; yap&#305;land&#305;r&#305;n",

	'usersettings:plugins:description' => "Bu panel y&#246;netici taraf&#305;ndan kurulmu&#351; ara&#231;lar&#305; i&#231;in ki&#351;isel ayarlar&#305;n&#305;z&#305; kontrol etmenizi ve yap&#305;land&#305;rman&#305;z&#305; sa&#287;lar.",
	'usersettings:statistics:label:numentities' => "&#304;&#231;eri&#287;iniz",

	'usersettings:statistics:yourdetails' => "Ayr&#305;nt&#305;lar&#305;n&#305;z",
	'usersettings:statistics:label:name' => "Tam isim",
	'usersettings:statistics:label:email' => "E-Posta",
	'usersettings:statistics:label:membersince' => "&#220;yelik ba&#351;lang&#305;c&#305;",
	'usersettings:statistics:label:lastlogin' => "Son giri&#351;",

/**
 * Activity river
 */
	'river:all' => 'T&#252;m Site aktiviteleri',
	'river:mine' => 'Benim Aktivitelerim',
	'river:friends' => 'Arkada&#351;lar&#305;m&#305;n aktiviteleri',
	'river:select' => '%s g&#246;ster',
	'river:comments:more' => '+%u daha fazla',
	'river:generic_comment' => '%s hakk&#305;nda yorum yapt&#305; %s',

	'friends:widget:description' => "Arkada&#351;lar&#305;n&#305;n bir ka&#231;&#305;n&#305; g&#246;ster.",
	'friends:num_display' => "G&#246;sterilecek arkada&#351; say&#305;s&#305;",
	'friends:icon_size' => "&#304;kon boyutu",
	'friends:tiny' => "minicik",
	'friends:small' => "k&#252;&#231;&#252;k",

/**
 * Generic action words
 */

	'save' => "Kaydet",
	'reset' => 'S&#305;f&#305;rla',
	'publish' => "Yay&#305;nla",
	'cancel' => "&#304;ptal",
	'saving' => "Kaydediyor ...",
	'update' => "G&#252;ncelle",
	'preview' => "&#214;nizle",
	'edit' => "D&#252;zenle",
	'delete' => "Sil",
	'accept' => "Kabul Et",
	'load' => "Y&#252;kle",
	'upload' => "Bilgisayardan Y&#252;kle",
	'ban' => "Yasakla",
	'unban' => "Yasa&#287;&#305; Kald&#305;r",
	'banned' => "Yasakland&#305;",
	'enable' => "Etkinle&#351;tir",
	'disable' => "Devre D&#305;&#351;&#305; B&#305;rak",
	'request' => "Talep Et",
	'complete' => "Tamam",
	'open' => 'A&#231;',
	'close' => 'Kapat',
	'reply' => "Yan&#305;tla",
	'more' => 'Daha Fazla',
	'comments' => 'Yorumlar',
	'import' => '&#304;&#231;eri Aktar',
	'export' => 'D&#305;&#351;ar&#305; Aktar',
	'untitled' => 'Ba&#351;l&#305;ks&#305;z',
	'help' => 'Yard&#305;m',
	'send' => 'G&#246;nder',
	'post' => 'Postala',
	'submit' => 'Onayla',
	'comment' => 'Yorum',
	'upgrade' => 'Y&#252;kselt',
	'sort' => 'S&#305;rala',
	'filter' => 'Filtrele',
	'new' => 'Yeni',
	'add' => 'Ekle',
	'create' => 'Olu&#351;tur',
	'revert' => 'D&#246;n&#252;&#351;t&#252;r',

	'site' => 'Site',
	'activity' => 'Aktivite',
	'members' => '&#220;yeler',

	'up' => 'Yukar&#305;',
	'down' => 'A&#351;a&#287;&#305;',
	'top' => 'En &#252;ste',
	'bottom' => 'En alta',

	'invite' => "Davet Et",

	'resetpassword' => "&#350;ifre s&#305;f&#305;rla",
	'makeadmin' => "Y&#246;netici yap",
	'removeadmin' => "Y&#246;netici kald&#305;r",

	'option:yes' => "Evet",
	'option:no' => "Hay&#305;r",

	'unknown' => 'Bilinmeyen',

	'active' => 'Etkin',
	'total' => 'Toplam',

	'learnmore' => "Daha fazlas&#305;n&#305; &#246;&#287;renmek i&#231;in buraya t&#305;klay&#305;n.",

	'content' => "i&#231;erik",
	'content:latest' => 'En son aktiviteler',
	'content:latest:blurb' => 'Alternatif olarak, sitedeki en son i&#231;erikleri g&#246;r&#252;nt&#252;lemek i&#231;in buraya t&#305;klay&#305;n.',

	'link:text' => 'ba&#287;lant&#305;y&#305; g&#246;ster',
/**
 * Generic questions
 */

	'question:areyousure' => 'Emin misiniz?',

/**
 * Generic data words
 */

	'title' => "Ba&#351;l&#305;k",
	'description' => "A&#231;&#305;klama",
	'tags' => "Etiketler",
	'spotlight' => "Sahne &#305;&#351;&#305;&#287;&#305;",
	'all' => "T&#252;m&#252;",
	'mine' => "Ben",

	'by' => 'taraf&#305;ndan',
	'none' => 'hi&#231;biri',

	'annotations' => "A&#231;&#305;klamalar",
	'relationships' => "&#304;li&#351;kiler",
	'metadata' => "Metaveri",
	'tagcloud' => "Etiket bulutu",
	'tagcloud:allsitetags' => "T&#252;m site etiketleri",

	'on' => 'A&#231;&#305;k',
	'off' => 'Kapal&#305;',

/**
 * Entity actions
 */
	'edit:this' => 'Bunu d&#252;zenle',
	'delete:this' => 'Bunu sil',
	'comment:this' => 'Bunu yorumla',

/**
 * Input / output strings
 */

	'deleteconfirm' => "Bu &#246;&#287;eyi silmek istedi&#287;inizden emin misiniz?",
	'fileexists' => "Dosya zaten y&#252;klendi. De&#287;i&#351;tirmek i&#231;in a&#351;a&#287;&#305;dan se&#231;in:",

/**
 * User add
 */

	'useradd:subject' => 'Kullan&#305;c&#305; hesab&#305; olu&#351;turuldu',
	'useradd:body' => '
%s,

%s sitesinde sizin i&#231;in bir kullan&#305;c&#305; hesab&#305; olu&#351;turuldu. Giri&#351; yapmak i&#231;in, ziyaret edin:

%s

Ve a&#351;a&#287;&#305;daki bilgileri kullanbarak giri&#351; yap&#305;n:

Kullan&#305;c&#305; ad&#305;: %s
&#350;ifre: %s

Giri&#351; yapt&#305;&#287;&#305;n&#305;zda, mutlaka &#351;ifrenizi de&#287;i&#351;tirmenizi &#246;neririz.
',

/**
 * System messages
 **/

	'systemmessages:dismiss' => "reddetmek i&#231;in t&#305;klay&#305;n",


/**
 * Import / export
 */
	'importsuccess' => "Veri i&#231;e aktarma ba&#351;ar&#305;l&#305;",
	'importfail' => "Veri i&#231;e aktarma ba&#351;ar&#305;s&#305;z.",

/**
 * Time
 */

	'friendlytime:justnow' => "hen&#252;z",
	'friendlytime:minutes' => "%s dakika &#246;nce",
	'friendlytime:minutes:singular' => "bir dakika &#246;nce",
	'friendlytime:hours' => "%s saat &#246;nce",
	'friendlytime:hours:singular' => "bir saat &#246;nce",
	'friendlytime:days' => "%s g&#252;n &#246;nce",
	'friendlytime:days:singular' => "d&#252;n",
	'friendlytime:date_format' => 'j F Y @ g:ia',

	'date:month:01' => 'Ocak %s',
	'date:month:02' => '&#350;ubat %s',
	'date:month:03' => 'Mart %s',
	'date:month:04' => 'Nisan %s',
	'date:month:05' => 'May&#305;s %s',
	'date:month:06' => 'Haziran %s',
	'date:month:07' => 'Temmuz %s',
	'date:month:08' => 'A&#287;ustos %s',
	'date:month:09' => 'Eyl&#252;l %s',
	'date:month:10' => 'Ekim %s',
	'date:month:11' => 'Kas&#305;m %s',
	'date:month:12' => 'Aral&#305;k %s',


/**
 * System settings
 */

	'installation:sitename' => "Sitenizin ismi:",
	'installation:sitedescription' => "Sitenizin k&#305;sa tan&#305;m&#305; (iste&#287;e ba&#287;l&#305;):",
	'installation:wwwroot' => "Site URL:",
	'installation:path' => "Elgg kurulum klas&#246;r&#252;n&#252;n tam yolu:",
	'installation:dataroot' => "Elgg veri klas&#246;r&#252;n&#252;n tam yolu:",
	'installation:dataroot:warning' => "Bu klas&#246;r&#252; kuruluma ba&#351;lamadan &#246;nce olu&#351;turmal&#305;s&#305;n&#305;z. Bu klas&#246;r Elgg kurulum klas&#246;r&#252;n&#252;n d&#305;&#351;&#305;nda olmal&#305;d&#305;r.",
	'installation:sitepermissions' => "Varsay&#305;lan eri&#351;im yetkileri:",
	'installation:language' => "Sitenizin varsay&#305;lan dili:",
	'installation:debug' => "Onar&#305;m modu hatalar&#305; te&#351;his etmek i&#231;in kullan&#305;labilecek ek bilgi sa&#287;lar. Ancak, sistemin yava&#351;lamas&#305;na neden olur. Bu y&#252;zden sorun ya&#351;&#305;yorsan&#305;z kullan&#305;n:",
	'installation:debug:none' => 'Onar&#305;m modunu kapat (&#246;nerilen)',
	'installation:debug:error' => 'Yaln&#305;zca &#246;nemli hatalar&#305; g&#246;ster',
	'installation:debug:warning' => 'Hatalr&#305; ve uyar&#305;lar&#305; g&#246;ster',
	'installation:debug:notice' => 'T&#252;m hatalar&#305;, uyar&#305;lar&#305; ve bildirimleri kaydet',

	// Walled Garden support
	'installation:registration:description' => 'Kullan&#305;c&#305; kayd&#305; varsay&#305;lan olarak etkinle&#351;tirildi. E&#287;er yeni kullan&#305;c&#305;lar&#305;n kendi ba&#351;lar&#305;na kay&#305;t olmalar&#305;n&#305; istemiyorsan&#305;z bunu kapat&#305;n.',
	'installation:registration:label' => 'Yeni kullan&#305;c&#305;lar&#305;n kay&#305;t olmalar&#305;na izin ver',
	'installation:walled_garden:description' => 'Sitenin &#246;zel bir a&#287; olarak &#231;al&#305;&#351;mas&#305;na izin ver. Herkes olarak eri&#351;im izni belirlenmi&#351; olan i&#231;erikler d&#305;&#351;&#305;ndaki t&#252;m i&#231;erikler giri&#351; yapmam&#305;&#351; kullan&#305;c&#305;lara g&#246;sterilmeyecek.',
	'installation:walled_garden:label' => 'Sayfalar&#305; giri&#351; yapm&#305;&#351; kullan&#305;c&#305;lara s&#305;n&#305;rla',

	'installation:httpslogin' => "HTTPS &#252;zerinden kullan&#305;c&#305; giri&#351;i i&#231;in bunu etkinle&#351;tirin. Bunu kullanabilmeniz i&#231;in sunucunuzda HTTPS &#246;zelli&#287;i etkinle&#351;tirilmi&#351; olmal&#305;d&#305;r.",
	'installation:httpslogin:label' => "HTTPS giri&#351;lerini etkinle&#351;tir",
	'installation:view' => "Siteniz i&#231;in varsay&#305;lan olarak kullan&#305;lacak g&#246;r&#252;n&#252;m&#252; girin veya varsay&#305;lan g&#246;r&#252;n&#252;m i&#231;in bu b&#246;l&#252;m&#252; bo&#351; b&#305;rak&#305;n (ne yapaca&#287;&#305;n&#305;z&#305; bilmiyorsan&#305;z, varsay&#305;lan olarak b&#305;rak&#305;n):",

	'installation:siteemail' => "Site e-posta adresi (sistem e-postalar&#305; g&#246;nderilirken kullan&#305;l&#305;r):",

	'installation:disableapi' => "Elgg web servisleri geli&#351;tirmek i&#231;in bir API sa&#287;lar, b&#246;ylelikle uzak uygulamalar sitenizle etkile&#351;ime girebilir.",
	'installation:disableapi:label' => "Elgg web servisleri API etkinle&#351;tir",

	'installation:allow_user_default_access:description' => "E&#287;er i&#351;aretlenirse, bireysel kullan&#305;c&#305;lar sistem eri&#351;im seviyesini a&#351;arak kendi eri&#351;im seviyelerini belirleyebilirler.",
	'installation:allow_user_default_access:label' => "Varsay&#305;lan kullan&#305;c&#305; eri&#351;imine izin ver",

	'installation:simplecache:description' => "Basit &#246;nbellek statik i&#231;erik dahil olmak &#252;zere baz&#305; CSS ve JavaScript dosyalar&#305; &#246;nbelle&#287;e alarak performans&#305; art&#305;r&#305;r. Normalde bunu isteyebilirsiniz.",
	'installation:simplecache:label' => "Basit &#246;nbellek kullan (&#246;nerilen)",

	'installation:viewpathcache:description' => "G&#246;r&#252;n&#252;m dosya yolu &#246;nbelle&#287;i, eklentilerin g&#246;r&#252;n&#252;m konumlar&#305;n&#305; &#246;nbelle&#287;e alarak y&#252;klenme zamanlar&#305;n&#305; d&#252;&#351;&#252;r&#252;r.",
	'installation:viewpathcache:label' => "G&#246;r&#252;n&#252;m dosya yolu &#246;nbelle&#287;ini kullan (&#246;nerilen)",

	'upgrading' => 'Y&#252;kseltiliyor...',
	'upgrade:db' => 'Veritaban&#305;n&#305;z y&#252;kseltildi.',
	'upgrade:core' => 'Elgg kurulumunuz y&#252;kseltildi.',
	'upgrade:unable_to_upgrade' => 'Y&#252;kseltilemiyor.',
	'upgrade:unable_to_upgrade_info' =>
		'Bu kurulum y&#252;kseltilemiyor &#231;&#252;nk&#252; Elgg &#231;ekirdek g&#246;r&#252;n&#252;m dizininde
		kal&#305;nt&#305;lar tespit edildi. Bu kalnt&#305;lara kar&#351;&#305; &#231;&#305;k&#305;ld&#305; ve Elgg\'in do&#287;ru bir
		&#351;ekilde &#231;al&#305;&#351;mas&#305; i&#231;in kald&#305;r&#305;lmas&#305; gerekiyor. Elgg &#231;ekirde&#287;inde de&#287;i&#351;iklik yapmad&#305;ysan&#305;z, yaln&#305;zca
		g&#246;r&#252;n&#252;m dizinini silip <a href="http://elgg.org">elgg.org</a>.<br /><br /> adresinden indirdi&#287;iniz
		son Elgg kurulum paketindekini buraya yap&#305;&#351;t&#305;r&#305;n&#305;z.

		Daha ayr&#305;nt&#305;l&#305; bilgi i&#231;in, l&#252;tfen <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Elgg Y&#252;kseltme K&#305;lavuzu</a>nu ziyaret edin.  E&#287;er yard&#305;ma ihtiya&#231; duyuyorsan&#305;z, l&#252;tfen
		<a href="http://community.elgg.org/pg/groups/discussion/">Topluluk Destek Forumlar&#305;na</a> yaz&#305;n.',

	'update:twitter_api:deactivated' => 'Twitter API (ya da Twitter Service) y&#252;kseltme s&#305;ras&#305;nda devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;. E&#287;er gerekliyse el ile etkinle&#351;tiriniz.',
	'update:oauth_api:deactivated' => 'OAuth API (ya da OAuth Lib) y&#252;kseltme s&#305;ras&#305;nda devre d&#305;&#351;&#305; b&#305;rak&#305;ld&#305;.  E&#287;er gerekliyse el ile etkinle&#351;tiriniz.',

	'deprecated:function' => '%s() %s() taraf&#305;ndan &#246;nerilmemektedir',

/**
 * Welcome
 */

	'welcome' => "Ho&#351;geldiniz",
	'welcome:user' => 'Ho&#351;geldiniz %s',

/**
 * Emails
 */
	'email:settings' => "E-Posta ayarlar&#305;",
	'email:address:label' => "E-Posta adresiniz",

	'email:save:success' => "Yeni e-posta adresi kaydedildi. Do&#287;rulama iste&#287;inde bulunuldu.",
	'email:save:fail' => "Yeni e-posta adresiniz kaydedilemedi.",

	'friend:newfriend:subject' => "%s seni arkada&#351; olarak ekledi!",
	'friend:newfriend:body' => "%s seni arkada&#351; olarak ekledi!

Profilini g&#246;rmek i&#231;in, buraya t&#305;klay&#305;n:

%s

Bu e-postay&#305; yan&#305;tlamay&#305;n&#305;z.",



	'email:resetpassword:subject' => "&#350;ifre s&#305;f&#305;rlama!",
	'email:resetpassword:body' => "Merhaba %s,

&#350;ifreniz s&#305;f&#305;rland&#305;: %s",


	'email:resetreq:subject' => "Yeni &#351;ifre iste.",
	'email:resetreq:body' => "Merhaba %s,

Biri (%s IP adresinden) hesab&#305; i&#231;in yeni bir &#351;ifre istedi.

E&#287;er bunu siz istediyseniz, a&#351;a&#287;&#305;daki ba&#287;lant&#305;ya t&#305;klay&#305;n. Aksi halde bu mesaj&#305; g&#246;rmezden gelin.

%s
",

/**
 * user default access
 */

	'default_access:settings' => "Varsay&#305;lan eri&#351;im seviyeniz",
	'default_access:label' => "Varsay&#305;lan eri&#351;im",
	'user:default_access:success' => "Yeni varsay&#305;lan eri&#351;im seviyeniz kaydedildi.",
	'user:default_access:failure' => "Yeni varsay&#305;lan eri&#351;im seviyeniz kaydedilemedi.",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"Eksik veri giri&#351;i",

/**
 * Comments
 */

	'comments:count' => "%s yorum",

	'riveraction:annotation:generic_comment' => '%s %s hakk&#305;nda yorum yapt&#305;',

	'generic_comments:add' => "Yorum b&#305;rak",
	'generic_comments:post' => "Yorum yaz",
	'generic_comments:text' => "Yorum",
	'generic_comments:latest' => "Son yorumlar",
	'generic_comment:posted' => "Yorum ba&#351;ar&#305;yla g&#246;nderildi.",
	'generic_comment:deleted' => "Yorum ba&#351;ar&#305;yla silindi.",
	'generic_comment:blank' => "&#220;zg&#252;n&#252;z, kaydetmeden &#246;nce yorumunuza bir&#351;eyler yazmal&#305;s&#305;n&#305;z.",
	'generic_comment:notfound' => "&#220;zg&#252;n&#252;z, belirtilen &#246;&#287;e bulunamad&#305;.",
	'generic_comment:notdeleted' => "Sorry, bu yorum silinemedi.",
	'generic_comment:failure' => "Yorumunuz eklenirken beklenmeyen bir hata meydana geldi. L&#252;tfen tekrar deneyin.",
	'generic_comment:none' => 'Yorum yok',
	'generic_comment:title' => '%s taraf&#305;ndan yorum',

	'generic_comment:email:subject' => 'Yeni bir yorumunuz var!',
	'generic_comment:email:body' => "\"%s\" hakk&#305;nda %s taraf&#305;ndan yeni bir yorum yap&#305;ld&#305;:


%s


G&#246;r&#252;nt&#252;lemek ya da yan&#305;tlamak i&#231;in, buraya t&#305;klay&#305;n:

%s

%s'in profilini g&#246;r&#252;nt&#252;lemek i&#231;in, buraya t&#305;klay&#305;n:

%s

Bu e-postay&#305; yan&#305;tlamay&#305;n&#305;z.",

/**
 * Entities
 */
	'byline' => '%s taraf&#305;ndan',
	'entity:default:strapline' => '%s %s taraf&#305;ndan olu&#351;turuldu',
	'entity:default:missingsupport:popup' => 'Bu varl&#305;k do&#287;ru bir &#351;ekilde g&#246;r&#252;nt&#252;lenemiyor. Bunun nedeni sistemde etkinle&#351;tirilmemi&#351; bir eklentiye ihtiya&#231; duymas&#305; olabilir.',

	'entity:delete:success' => '%s varl&#305;&#287;&#305; silindi',
	'entity:delete:fail' => '%s varl&#305;&#287;&#305; silinemedi',


/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields' => 'Formda __token ya da __ts alanlar&#305; eksik',
	'actiongatekeeper:tokeninvalid' => "Bir hata ile kar&#351;&#305;la&#351;t&#305;k (belirte&#231; uyumsuzlu&#287;u). Bu kulland&#305;&#287;&#305;n&#305;z sayfan&#305;n zaman a&#351;&#305;m&#305;na u&#287;rad&#305;&#287;&#305; anlam&#305;na gelebilir. L&#252;tfen tekrar deneyin.",
	'actiongatekeeper:timeerror' => 'Kulland&#305;&#287;&#305;n&#305;z sayfa zaman a&#351;&#305;m&#305;na u&#287;rad&#305;. L&#252;tfen yenileyin ve tekrar deneyin.',
	'actiongatekeeper:pluginprevents' => 'Bir bile&#351;en bu formun onaylanmas&#305;n&#305; engelledi.',


/**
 * Word blacklists
 */
	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

/**
 * Tag labels
 */

	'tag_names:tags' => 'Etiketler',
	'tags:site_cloud' => 'Site Etiket Bulutu',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => '%s ile ileti&#351;im sa&#287;lanam&#305;yor. &#304;&#231;eri&#287;i kaydederken sorun ya&#351;ayabilirsiniz.',
	'js:security:token_refreshed' => '%s ile ba&#287;lant&#305; sa&#287;land&#305;!',

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afarca",
	"ab" => "Abhazca",
	"af" => "Afrikaanca",
	"am" => "Amhari&#231;&#231;e",
	"ar" => "Arap&#231;a",
	"as" => "Assamca",
	"ay" => "Aymaraca",
	"az" => "Azerice",
	"ba" => "Ba&#351;kurt&#231;a",
	"be" => "Belarus&#231;a",
	"bg" => "Bulgarca",
	"bh" => "Biharca",
	"bi" => "Bislamaca",
	"bn" => "Bengalce",
	"bo" => "Tibet&#231;e",
	"br" => "Bretonca",
	"ca" => "Katalanca",
	"co" => "Korsikaca",
	"cs" => "&#199;ek&#231;e",
	"cy" => "Gallerce",
	"da" => "Danimarkaca",
	"de" => "Almanca",
	"dz" => "Butanca",
	"el" => "Yunanca",
	"en" => "&#304;ngilizce",
	"eo" => "Esperanto dili",
	"es" => "&#304;spanyolca",
	"et" => "Estonca",
	"eu" => "Bask&#231;a",
	"fa" => "Fars&#231;a",
	"fi" => "Fince",
	"fj" => "Fiji",
	"fo" => "Fayro Dili",
	"fr" => "Frans&#305;zca",
	"fy" => "Frizce",
	"ga" => "&#304;rlandaca",
	"gd" => "&#304;sko&#231; &#304;ngilizcesi",
	"gl" => "Gali&#231;yaca",
	"gn" => "Goranice",
	"gu" => "Gujarati Dili",
	"he" => "&#304;branice",
	"ha" => "Hausa Dili",
	"hi" => "Hint&#231;e",
	"hr" => "H&#305;rvat&#231;a",
	"hu" => "Macarca",
	"hy" => "Ermenice",
	"ia" => "Interlingua",
	"id" => "Endonezyaca",
	"ie" => "Evrenseldil",
	"ik" => "&#304;nupiak&#231;a",
	//"in" => "Indonesian",
	"is" => "&#304;zlandaca",
	"it" => "&#304;talyanca",
	"iu" => "Inuktitut Dili",
	"iw" => "&#304;branice (eski)",
	"ja" => "Japanese",
	"ji" => "Eskenazi dili (eski)",
	"jw" => "Cava dili",
	"ka" => "G&#252;rc&#252;ce",
	"kk" => "Kazak&#231;a",
	"kl" => "Gr&#246;nlandca",
	"km" => "Kambo&#231;yaca",
	"kn" => "Kanada Dili",
	"ko" => "Korece",
	"ks" => "Ke&#351;mirce",
	"ku" => "K&#252;rt&#231;e",
	"ky" => "K&#305;rg&#305;zca",
	"la" => "Latince",
	"ln" => "Lingalaca",
	"lo" => "Laos&#231;a",
	"lt" => "Litvanca",
	"lv" => "Letonca",
	"mg" => "Madagaskar dili",
	"mi" => "Maori dili",
	"mk" => "Makedonca",
	"ml" => "Malayalam dili",
	"mn" => "Mo&#287;olca",
	"mo" => "Moldavca",
	"mr" => "Marathi Dili",
	"ms" => "Malayca",
	"mt" => "Maltaca",
	"my" => "Birmanca",
	"na" => "Nauru",
	"ne" => "Nepalce",
	"nl" => "Flemenk&#231;e",
	"no" => "Norve&#231;&#231;e",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Leh&#231;e",
	"ps" => "Pashto / Pushto",
	"pt" => "Portekizce",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romence",
	"ru" => "Rus&#231;a",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit&#231;e",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "Slovak&#231;a",
	"sl" => "Slovence",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Arnavut&#231;a",
	"sr" => "S&#305;rp&#231;a",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "&#304;sve&#231;&#231;e",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "T&#252;rkmence",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "T&#252;rk&#231;e",
	"ts" => "Tsonga",
	"tt" => "Tatarca",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukraynaca",
	"ur" => "&#220;rd&#252;ce",
	"uz" => "&#214;zbek&#231;e",
	"vi" => "Vietnam dili",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "&#199;ince",
	"zu" => "Zulu",
);

add_translation("tr",$turkish);
