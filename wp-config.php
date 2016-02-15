<?php
/**
 * Temeljna konfiguracija WordPressa.
 *
 * wp-config.php instalacijska skripta koristi ovaj zapis tijekom instalacije.
 * Ne morate koristiti web stranicu, samo kopirajte i preimenujte ovaj zapis
 * u "wp-config.php" datoteku i popunite tražene vrijednosti.
 *
 * Ovaj zapis sadrži sljedeće konfiguracije:
 *
 * * MySQL postavke
 * * Tajne ključeve
 * * Prefiks tablica baze podataka
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL postavke - Informacije možete dobiti od vašeg web hosta ** //
/** Ime baze podataka za WordPress */
define('DB_NAME', 'burzaideja');

/** MySQL korisničko ime baze podataka */
define('DB_USER', 'root');

/** MySQL lozinka baze podataka */
define('DB_PASSWORD', '');

/** MySQL naziv hosta */
define('DB_HOST', 'localhost');

/** Kodna tablica koja će se koristiti u kreiranju tablica baze podataka. */
define('DB_CHARSET', 'utf8mb4');

/** Tip sortiranja (collate) baze podataka. Ne mijenjate ako ne znate što radite. */
define('DB_COLLATE', '');

/**#@+
 * Jedinstveni Autentifikacijski ključevi (Authentication Unique Keys and Salts).
 *
 * Promijenite ovo u vaše jedinstvene fraze!
 * Ključeve možete generirati pomoću {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org tajni-ključ servis}
 * Ključeve možete promijeniti bilo kada s tim da će se svi korisnici morati ponovo prijaviti jer kolačići (cookies) neće više važiti nakon izmjene ključeva.
 *
 * @od inačice 2.6.0
 */
define('AUTH_KEY',         '0dV/.H]83M.]%49|R_FX,|k:g(5k6<bMoj-tCbZzd147 ;|e@?9K}uY* ia2|}M9');
define('SECURE_AUTH_KEY',  'tpNsEhQ8tpmhhohv85}ogE!V#[tl8RQVj*m6e^K p&hdsJn2T-5/-kj-0lo.sB74');
define('LOGGED_IN_KEY',    '/x--:FsR<y/J$CB|4HqU$b:/C[a?0QciS]!3axLQ~I)+4z[.LXO6sipe(RSivNWT');
define('NONCE_KEY',        '~Ig^+AGPCIS/>=xyunJ35}#`No9F~v8dd;Fpx9-b`cvyZh,chW5IIxeF1IHLiBRN');
define('AUTH_SALT',        'Z%)>%)e#D$GF/eH7^fAs<7TZO/@dAzwJ$Gu!tnFx.)s+b%L<le#p1e?]Fer^rsWf');
define('SECURE_AUTH_SALT', 'lggZK9/F|U-G7RUOnz]%=WoEh_) gAq6h=N|n+F{OW<17ki@94M(vXuz-U1cM>CP');
define('LOGGED_IN_SALT',   ']FRdYN<fkBVaG:(f}ex7a9ovygzeQM,*=YmATq&>=T-RdX$gb,+i^mxwJ~7(wuwJ');
define('NONCE_SALT',       '&`84<S}{yO)Qp%h3FY,Sq027TYzCpAR.IuVG]=]x+f*7dGy!5fNA2`OdEoZtW0-|');

/**#@-*/

/**
 * Prefix WordPress tablica baze podataka.
 *
 * Možete imati više instalacija unutar jedne baze ukoliko svakoj dodjelite
 * jedinstveni prefiks. Koristite samo brojeve, slova, i donju crticu!
 */
$table_prefix  = 'bid_';

/**
 * Za programere: WordPress debugging mode.
 *
 * Promijenit ovo u true kako bi omogućili prikazivanje poruka tijekom razvoja.
 * Izrazito preporučujemo da razvojni programeri dodataka (plugin) i tema
 * koriste WP_DEBUG u njihovom razvojnom okružju.
 *
 * Za informacije o deugim konstantama koje se mogu koristiti za debugging,
 * posjetite Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To je sve, ne morate više ništa mijenjati! Sretno bloganje. */

/** WordPress apsolutna putanja do WordPress mape. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Postavke za WordPress varijable i već uključene zapise. */
require_once(ABSPATH . 'wp-settings.php');
