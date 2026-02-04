# HTML 版本部署说明

## 当前状态
已创建以下 HTML 文件（替代 PHP 模板）：
- `index.html` → 首页
- `contact.html` → 联系页面
- `affiliate.html` → 网站主页面
- `advertiser.html` → 广告主页面
- `help.html` → 帮助页面
- `register.html` → 注册页面
- `login.html` → 登录页面
- `msg.html` → 消息页面

## 方案一：后端配置（推荐）

### 需要修改的地方
在后端代码中找到模板加载逻辑（通常是 `TPL::display()` 函数），修改为优先加载 `.html` 文件。

### 示例代码修改
```php
// 原代码可能是这样：
TPL::display('index.contact'); // 加载 contact.tpl.php

// 修改为：
$html_file = 'contact.html';
if (file_exists($html_file)) {
    include $html_file;
} else {
    TPL::display('index.contact'); // 降级到 PHP 模板
}
```

### 路由映射
需要将以下路由映射到对应的 HTML 文件：
- `/` → `index.html`（根路径）
- `/index.php?e=index` → `index.html`
- `/index.php?e=index.contact` → `contact.html`
- `/index.php?e=index.affiliate` → `affiliate.html`
- `/index.php?e=index.advertiser` → `advertiser.html`
- `/index.php?e=index.help` → `help.html`
- `/index.php?e=index.register` → `register.html`
- `/index.php?e=index.login` → `login.html`
- `/index.php?e=index.msg&key=xxx` → `msg.html?key=xxx`

## 方案二：Web 服务器配置（无需改后端）

### Apache 配置 (.htaccess)
在 `templates/index/def/` 目录下创建 `.htaccess` 文件：

```apache
RewriteEngine On

# 首页
RewriteCond %{QUERY_STRING} ^$ [OR]
RewriteCond %{QUERY_STRING} ^e=index$ [OR]
RewriteCond %{QUERY_STRING} ^e=index\.index$
RewriteRule ^index\.php$ index.html [L]

# 联系页面
RewriteCond %{QUERY_STRING} ^e=index\.contact$
RewriteRule ^index\.php$ contact.html [L]

# 网站主页面
RewriteCond %{QUERY_STRING} ^e=index\.affiliate$
RewriteRule ^index\.php$ affiliate.html [L]

# 广告主页面
RewriteCond %{QUERY_STRING} ^e=index\.advertiser$
RewriteRule ^index\.php$ advertiser.html [L]

# 帮助页面
RewriteCond %{QUERY_STRING} ^e=index\.help$
RewriteRule ^index\.php$ help.html [L]

# 注册页面
RewriteCond %{QUERY_STRING} ^e=index\.register$
RewriteRule ^index\.php$ register.html [L]

# 登录页面
RewriteCond %{QUERY_STRING} ^e=index\.login$
RewriteRule ^index\.php$ login.html [L]

# 消息页面
RewriteCond %{QUERY_STRING} ^e=index\.msg
RewriteRule ^index\.php$ msg.html [L]
```

### Nginx 配置
在 Nginx 配置中添加：

```nginx
location /templates/index/def/ {
    # 首页
    if ($args = "") {
        rewrite ^/templates/index/def/index\.php$ /templates/index/def/index.html last;
    }
    if ($args = "e=index") {
        rewrite ^/templates/index/def/index\.php$ /templates/index/def/index.html last;
    }
    
    # 其他页面
    if ($args ~ "^e=index\.(contact|affiliate|advertiser|help|register|login|msg)") {
        set $page $1;
        rewrite ^/templates/index/def/index\.php$ /templates/index/def/$page.html last;
    }
}
```

## 注意事项

1. **静态资源路径**：所有 HTML 文件中的资源路径都是相对路径（如 `images/xxx.png`），确保部署时路径正确。

2. **动态内容**：HTML 文件中的动态内容（如验证码、表单提交）仍需要后端 PHP 支持。

3. **消息页面参数**：`msg.html` 需要通过 URL 参数 `key` 来显示不同消息，如：`msg.html?key=success`

4. **测试**：部署前请测试所有页面的链接和功能是否正常。

## 推荐方案

- **如果后端可以修改**：使用方案一，更灵活，可以逐步迁移
- **如果后端不能修改**：使用方案二，通过 Web 服务器重写规则实现
