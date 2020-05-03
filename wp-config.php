<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'mpermperpisang' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'mpermperpisang' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '@Pisang3201' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<1ExFZ~VAK_g_7lD6he>O5q`$}h.%D I*%XfAhcF4n WaLi)+@fQq4:?~,5-5;fn' );
define( 'SECURE_AUTH_KEY',  '<6!k*t-gs+`D$FG;lgf`Ou8r9U)2:aHc3?J,ug5aN3qT8G/[E5iYOkX`$a;lk^X,' );
define( 'LOGGED_IN_KEY',    'mb,BB&J`hqw@Zi<6Rzmj{^U83?n9c>&M$-86@B>j>m/KL!ABPLf0eJ%T)DqK[+Mn' );
define( 'NONCE_KEY',        'c 5@_9mK/U].mczMoYoyrh^>;CVv1oF<U=MJ9kiRlSo#k{ps,k15yQ8Z_3N>=[-$' );
define( 'AUTH_SALT',        '4/FT.W4-bzO9DB%Km:FESPnl^IY1dqq,V]Df35[vLW_h9-iG~~6ES24.7J%H6N{+' );
define( 'SECURE_AUTH_SALT', ';.h=kZ3s<7f^?d%LraBUXBlSWcDR[!V|nF4]t62xy)ioa*#NFf*ooGo~NY|vtjU)' );
define( 'LOGGED_IN_SALT',   'u@&nrU6I.2[Z2pyT{LF#eT-(-uXe}[G:nf5<s=a-^X%Lnt^t<8KFARLOKx(eXD$Y' );
define( 'NONCE_SALT',       'QZqZ[{bmu>=`9vC,,2Ef;t($8}<]pbkYzDP&3K1;$RiOg}t_<E17_Wi4d=7dCs)X' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
