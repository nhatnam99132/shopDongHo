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
define( 'DB_NAME', 'admin' );

/** Username của database */
define( 'DB_USER', 'admin' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'nhatnam00' );

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
define( 'AUTH_KEY',         'd_g4>=UQs$O?0 =LuZPH!5OhUY_rFgM4<zw,)8<iL>k_c0<YjGG*#TZj.tK/.w`U' );
define( 'SECURE_AUTH_KEY',  'NP7&<)i;N&]f_H7WF{TCkz2<3yq2QHc`;_*snXgESiI}F2XywDF+KKGkgf.-8Cz:' );
define( 'LOGGED_IN_KEY',    'BE},j6?w#S8|UN>m;<EibGH7I;lgob6~m,^6d{dWJJ7b~%/=6y$wDn{Ak2f~<}BI' );
define( 'NONCE_KEY',        '|s`qJ$BgOU:YhdSN(NDv4Of$SS<JL)a~s*eGI=jS3-yPC05Dh):W2g0Is^wcp1OD' );
define( 'AUTH_SALT',        'un}N/u-G**c#VrI/}Du`.2zaz+SFCr#HD28l?#$&_hi}sMgydR~E`^?r_O+358F+' );
define( 'SECURE_AUTH_SALT', 'i4@T7h.B[{dxdQYY<@|wUT*- DJHs+jU_q4mh950 Z$WDVI+Fl0Nqt[~m9l,GPRb' );
define( 'LOGGED_IN_SALT',   'eV<-U=gImEAmCrc4p*fL{/}s*f42/^[,Kq^r&~|``+$?1RM$u}k8lRyL/!7RlD!g' );
define( 'NONCE_SALT',       'Zd*(1}W]ysd)=_K6wJ5DqCGCYFfS6aIdN/x.v|F2Qx[X)H>L*~_B !KU1$am{cnd' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
