<?php
return array(
	//'配置项'=>'配置值'
    'name' => 'wheat',

    /* URL设置 */
    'URL_MODEL' => 2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式，提供最好的用户体验和SEO支持

    /* 扩展配置 */
    'LOAD_EXT_CONFIG' => 'mysql',

    /* 显示调试模式 */
//    'SHOW_PAGE_TRACE' => true,

    /* URL配置 */
    'URL_HTML_SUFFIX' => 'html|shtml',
);
?>