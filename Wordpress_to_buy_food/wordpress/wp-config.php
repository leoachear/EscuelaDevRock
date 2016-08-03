<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'Wordpress_to_buy_food');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '@&6Jott+aE6}[f~{BO+).6iPZD9K-=<[CJ>c74S3q}b.`L(+>R?:|S[2LPW)wHn*');
define('SECURE_AUTH_KEY', 'ix@zX2Du|}],1snpW1{C iEr!jE&s)=Gi$=$=ZmX/bidzo2DkEmg4rIR<guq+PG~');
define('LOGGED_IN_KEY', '%Y]AoW$O5[1pIWCidLkr>{/AO+m0&j1YcCfDqQE UaY;5?u%)sbect#_o[5x9[!7');
define('NONCE_KEY', 'qg/V6-]dsp<`vD{h=3bju9$J<U~B(B&aT+c~&kCXOpCc#ZnmPMavN*Ks4I+XHc@x');
define('AUTH_SALT', '7.(_m&p@y5Jf!k2z0w[b9a2UNvtSpjxSa]~N*b:RJWTKwL[%|)~kB@VQE`o[%w#U');
define('SECURE_AUTH_SALT', 'TdQz4mJA75#F(HF-8N*/A_N}=.^Kgh9ec9a6:&3=m` +m*yD$HSK3dW4LoQ~_[m#');
define('LOGGED_IN_SALT', '|StTF[$|{Zm&OH#kI.6 of--H|Bb|m=(.|4UNh-VS(jPNj%PG~mR2)I*ivg~0/RG');
define('NONCE_SALT', 'xF0-YnQ$<PQW~Vs/{*I^]Huoe%DWUU^czqt[$|:q{IKk|@@)O7$vn/7L}uGSn7Ji');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_x_food_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

