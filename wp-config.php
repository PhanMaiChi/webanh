<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'webanh' );

/** Username của database */
define( 'DB_USER', 'quantri' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'mật khẩu' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B@g%]<v3Vs6lRVr=%/Yh]N Qf)`tN %>QsW$1YgIP!(ac|{^K^lmxwfhI.X:4tvf' );
define( 'SECURE_AUTH_KEY',  '>@G$*a1dI*s@EtLSY}6S9$z.}25>f/WjH.3i;HI${;`lI[.hbw~lf&X>1+/I{Bv{' );
define( 'LOGGED_IN_KEY',    '(dSx&BnC*$cp&aI%@WHo}16*qM:a`M-6gQ*iKrKVz90ykK(8d}n/:;hB/][)$Mbs' );
define( 'NONCE_KEY',        '|P}M 2$qNT-V:V8-/%N&#+par=AU?]}vde;ZW[6;cfq*#u>RJG|4%aB_l+_MZr5q' );
define( 'AUTH_SALT',        ' :A`|ZERU8}|fJF-#rWhb+2TU:Dwy3l=O/PHW57tT<)%mxtc~vR..0y SnG;Z~.3' );
define( 'SECURE_AUTH_SALT', 'Fk[*z^#:>_/QY|yEvDxS@qwTWMP(X&.!BxkXJkgC/=:TEIxrm])g4fEz([/HzMB|' );
define( 'LOGGED_IN_SALT',   '(6tWYX>[DEM#Sbx(k/5lg*=o.c hG-C!Ni0IU6U)9+Z_CYdJml,.FnT[4iN#lw@Q' );
define( 'NONCE_SALT',       '@_<,Eks^|@jn]!.O8<8.acDrwlPG3d^vgdB:nU2k[nx:v%s|=Qx2X<;S=vee~]Ro' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
