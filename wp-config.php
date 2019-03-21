<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'konya_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'oldugukadar' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_KRl|V~n/cy,w}xF(_4.p} M;X.=PTamu)nvK}!EbhTPT2K>G}Z3Y+[tm1;Bz.[+' );
define( 'SECURE_AUTH_KEY',  'UZosbVqe@CC6P&osdod)d%J$^e}v2{A|{.H2/TCNGvpAc)N_z}b`Oz0EE|j(&bqJ' );
define( 'LOGGED_IN_KEY',    'OR&OCB&FqUi)Ep{E$(3)P~y&o]Vzzkv9P*.<vf{NiHrI0-md8Z}PiUgycw_`2K0I' );
define( 'NONCE_KEY',        'pTy04h#p]gU[)=26~{6snuzWb3R+2@4BuJ@P/xJ>Neo;!)R1h>!GepEMz`Xl]^M5' );
define( 'AUTH_SALT',        'Tr#En=8#3^JxS}N/l;-@yL5A<Lrv6`[iBV,qghcpqurW*qd=!>< ZmP<8PXk*wGW' );
define( 'SECURE_AUTH_SALT', 'yp?cKsqP7RfW>KP-_-jO!]4zx$i>bwgF&se`SDmW(0)_!aIgg=/%l^%_;/Q|jF<r' );
define( 'LOGGED_IN_SALT',   'i#$Ue?&;Khyz|ui^?D)2;C8 zt#&z)`n,Pe7stC]L30K,#I!3sj4@K:Fdtr:,lk9' );
define( 'NONCE_SALT',       'Bh`(_!Zw>?]uBM:8WN{VM-A10V|3hq(P|L{=)G0Z7M>o1e?,u(^zMxrBm)Dz4kcu' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
