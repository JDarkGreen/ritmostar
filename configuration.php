<?php
class JConfig {
	public $offline                 = '0';
	public $offline_message         = 'This site is down for maintenance.<br /> Please check back again soon.';
	public $display_offline_message = '1';
	public $offline_image           = '';
	public $sitename                = 'ritmo star';
	public $editor                  = 'jce';
	public $captcha                 = '0';
	public $list_limit              = '20';
	public $access                  = '1';
	public $debug                   = '0';
	public $debug_lang              = '0';
	public $dbtype                  = 'mysqli';
	public $host                    = 'localhost';
	
	/*public $user = 'ritmosta_joom936';
	public $password = 'i!K7.PSb78';
	public $db = 'ritmosta_joom936';*/

	public $user     = 'root';
	public $password = '';
	public $db       = 'ritmosta_joom936';
	
	public $dbprefix = 'op9_';
	public $live_site = '';
	//public $secret = 'c9cibz76sitseior';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '127.0.0.1';
	public $ftp_port = '21';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $mailonline = '1';
	public $mailer = 'mail';
	public $mailfrom = 'ritmostar@hotmail.com';
	public $fromname = 'ritmo star';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $MetaDesc = 'clases  de baile';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '1';
	public $sef_suffix = '1';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $log_path = '/home/ritmostar/public_html/logs';
	public $tmp_path = '/home/ritmostar/public_html/tmp';
	public $lifetime = '15';
	public $session_handler = 'database';
	public $memcache_persist = '1';
	public $memcache_compress = '0';
	public $memcache_server_host = 'localhost';
	public $memcache_server_port = '11211';
	public $memcached_persist = '1';
	public $memcached_compress = '0';
	public $memcached_server_host = 'localhost';
	public $memcached_server_port = '11211';
	public $redis_persist = '1';
	public $redis_server_host = 'localhost';
	public $redis_server_port = '6379';
	public $redis_server_auth = '';
	public $redis_server_db = '0';
	public $proxy_enable = '0';
	public $proxy_host = '';
	public $proxy_port = '';
	public $proxy_user = '';
	public $proxy_pass = '';
	public $massmailoff = '1';
	public $MetaRights = '';
	public $sitename_pagetitles = '2';
	public $force_ssl = '0';
	public $session_memcache_server_host = 'localhost';
	public $session_memcache_server_port = '11211';
	public $session_memcached_server_host = 'localhost';
	public $session_memcached_server_port = '11211';
	public $frontediting = '1';
	public $feed_email = 'author';
	public $cookie_domain = '';
	public $cookie_path = '';
	public $asset_id = '1';
}