<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

$options = array(
    'ip_location_api_key',
    'ip_location_enable_log'
);

// 删除插件设置
foreach ($options as $option) {
    delete_option($option);
}

// 删除评论元数据
global $wpdb;
$wpdb->query("
    DELETE FROM $wpdb->commentmeta 
    WHERE meta_key = 'suiyi-IP-Location'
");

// 清理缓存 
$wpdb->query("
    DELETE FROM $wpdb->options 
    WHERE option_name LIKE '_transient_ip_cache_%' OR 
          option_name LIKE '_transient_timeout_ip_cache_%'
");
