<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL dasar situs Anda, dengan trailing slash.
|
*/
$config['base_url'] = 'http://localhost/kalkol/';

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Biasanya, file index.php digunakan sebagai controller utama. Anda bisa
| menghapus index.php ini dengan konfigurasi .htaccess yang benar.
|
*/
$config['index_page'] = 'index.php';

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| Protokol yang digunakan untuk menentukan URI yang diakses.
|
*/
$config['uri_protocol'] = 'REQUEST_URI';

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| Pengaturan bahasa default untuk aplikasi Anda.
|
*/
$config['language'] = 'english';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| Set karakter default yang digunakan untuk berinteraksi dengan pengguna.
|
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
|
| Opsi untuk mengaktifkan atau menonaktifkan hook sistem.
|
*/
$config['enable_hooks'] = FALSE;

/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| Prefix untuk ekstensi kelas yang dibuat pengguna.
|
*/
$config['subclass_prefix'] = 'MY_';

/*
|--------------------------------------------------------------------------
| Composer auto-loading
|--------------------------------------------------------------------------
|
| Jika Anda menggunakan Composer, pengaturan ini mengaktifkan autoload Composer.
|
*/
$config['composer_autoload'] = FALSE;

/*
|--------------------------------------------------------------------------
| Permitted URI Characters
|--------------------------------------------------------------------------
|
| Karakter yang diizinkan dalam URI.
|
*/
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| Pilihan untuk mengaktifkan string query.
|
*/
$config['allow_get_array'] = TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| Level pelaporan log error. Anda dapat menyesuaikannya sesuai kebutuhan.
|
*/
$config['log_threshold'] = 0;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Path tempat menyimpan file log error.
|
*/
$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Cache Path
|--------------------------------------------------------------------------
|
| Path tempat menyimpan file cache.
|
*/
$config['cache_path'] = '';

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| Kunci enkripsi untuk melindungi data sensitif.
|
*/
$config['encryption_key'] = '';

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
|
| Pengaturan session untuk aplikasi Anda.
|
*/
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| Pengaturan terkait cookie.
|
*/
$config['cookie_prefix']    = '';
$config['cookie_domain']    = '';
$config['cookie_path']      = '/';
$config['cookie_secure']    = FALSE;
$config['cookie_httponly']  = FALSE;

/*
|--------------------------------------------------------------------------
| Standardize newlines
|--------------------------------------------------------------------------
|
| Pilihan untuk standarisasi newline.
|
*/
$config['standardize_newlines'] = FALSE;

/*
|--------------------------------------------------------------------------
| Global XSS Filtering
|--------------------------------------------------------------------------
|
| Pilihan untuk mengaktifkan filter XSS global.
|
*/
$config['global_xss_filtering'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery
|--------------------------------------------------------------------------
|
| Pengaturan untuk melindungi dari serangan CSRF.
|
*/
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();

/*
|--------------------------------------------------------------------------
| Output Compression
|--------------------------------------------------------------------------
|
| Pilihan untuk mengaktifkan kompresi output.
|
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Time Reference
|--------------------------------------------------------------------------
|
| Referensi waktu untuk aplikasi Anda.
|
*/
$config['time_reference'] = 'local';

/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| Pilihan untuk mengubah tag PHP pendek ke tag penuh.
|
*/
$config['rewrite_short_tags'] = FALSE;

/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| Daftar IP proxy terbalik yang diizinkan.
|
*/
$config['proxy_ips'] = '';
 