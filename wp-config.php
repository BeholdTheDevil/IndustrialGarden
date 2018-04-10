<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'fabrikstradgarden');

/** MySQL-databasens användarnamn */
define('DB_USER', 'wp-user');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'wp-password');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z[o7R<nX>QI#X:2-8hLqCZ-VYlu9pSg]C1%a&|=P=&b5.+YaJRVSz_uLZ62Jfim`');
define('SECURE_AUTH_KEY',  'C~gStyl5?%t,nXN1nM$OC$7@~<^/gVgWpo>H!l.u,VDt|l5I*b&g@YIcD?4qM#HR');
define('LOGGED_IN_KEY',    'hBDQuu V2/[wvJX=&Dayw@L`}v(Nzl**<4{lKm`}EV.%<`JV)`q%pSyG`=s^<o+b');
define('NONCE_KEY',        'mg,n-LwrInW[+s=_PPf<L7U?|-exhn!(6Y1+?S 7ipaMgPK0::<emA{**.Zuw0?d');
define('AUTH_SALT',        'm>I?ghMIIlqh[=yNYl+v~[aZYc$Fp@sBl&>x~~*7451>_J=AXrW$o4BFCh;dWf|7');
define('SECURE_AUTH_SALT', 'r.(|oWok?+,z*O8sW=yY)g~8Lgejy,1G}nRTyGq6|3{}g=zDBa8>!,E:=iHyVp_/');
define('LOGGED_IN_SALT',   '.J~b[ hgK6oDF[J7qp[N$wjizW[T]8->Axv?aK?bIM=B,5I/Xj~`!2oQbckf.:pE');
define('NONCE_SALT',       ':>#L7YcH+|;iD7e!lHN>JM| jy m48}]UF0XG:YO-?&9<[kNK;_hRDz|#W=]jQ$;');
/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', true);

define('WP_HOME', 'http://83.219.220.198:65010');
define('WP_SITEURL', 'http://83.219.220.198:65010');

/* Det var allt, sluta redigera här! Blogga på. */

define('ABSPATH', 'https://83.219.220.198:65010');

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');
