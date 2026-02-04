# 官网 API 接口文档

本文档列出了官网（`templates/index/def`）HTML 文件中使用的所有 PHP API 接口。这些接口在 HTML 版本中尚未实现，需要在后端开发时实现。

## 目录
- [登录相关接口](#登录相关接口)
- [注册相关接口](#注册相关接口)
- [页面路由](#页面路由)
- [数据获取接口](#数据获取接口)

---

## 登录相关接口

### 1. 用户登录
**接口地址：** `/index.php?e=index.postlogin`  
**请求方式：** POST  
**使用位置：** `login.html` (第72行表单action)  
**请求参数：**
```javascript
{
    username: string,      // 用户名，必填，最大长度20
    password: string,      // 密码，必填，最大长度20
    checkcode: string,     // 验证码，必填，最大长度10
    remember: number       // 记住密码，可选，值为1表示记住
}
```

**响应说明：**
- 登录成功：重定向到用户后台或首页
- 登录失败：重定向到 `/index.php?e=index.msg&key=login_username_password_error`
- 其他错误：重定向到对应的错误页面（见消息页面key列表）

**错误key列表：**
- `login_username_password_error` - 用户名和密码错误
- `login_username_lock` - 用户已被锁定
- `login_username_no_activation` - 用户名没有审核通过
- `login_username_email_activation` - 邮箱地址没有认证通过
- `login_timeout` - 登入超时
- `checkcode` - 验证码错误

---

### 2. 验证码图片
**接口地址：** `/index.php?e=index.codeimage`  
**请求方式：** GET  
**使用位置：** 
- `login.html` (第89行)
- `register.html` (第263行)

**请求参数：**
- `rand`: number (可选) - 随机数，用于刷新验证码

**响应说明：**
- 返回验证码图片（PNG/JPEG格式）
- 验证码应存储在session中，用于登录/注册时验证

**示例：**
```html
<img src="/index.php?e=index.codeimage" 
     onclick="this.src='/index.php?e=index.codeimage&rand='+Math.random();" />
```

---

## 注册相关接口

### 3. 用户注册
**接口地址：** `/index.php?e=index.post_register`  
**请求方式：** POST  
**使用位置：** `register.tpl.php` (第91行表单action)  
**请求参数：**
```javascript
{
    type: number,              // 账户类型，必填，1=站长，2=广告商
    username: string,           // 用户名称，必填，最小长度4，需通过remote_user验证
    password: string,           // 密码，必填
    passwordre: string,         // 确认密码，必填，需与password一致
    qq: string,                // Telegram，必填，格式：@英文（如：@username）
    bankname: string,           // 钱包类型，必填（仅站长type=1时）
    bankaccount: string,        // 钱包地址，必填（仅站长type=1时）
    serviceid: number,          // 选择的客服/商务ID，必填
    regcode: string            // 验证码，必填
}
```

**响应说明：**
- 注册成功：重定向到 `/index.php?e=index.msg&key=success`
- 注册失败：重定向到对应的错误页面

**错误key列表：**
- `u_p_null` - 必填选项不能为空
- `username_repeat_register` - 用户名称重复，无法注册
- `close_affiliate_register` - 已关闭站长注册
- `close_advertiser_register` - 已关闭广告商注册
- `close_repeat` - 已关闭注册
- `register_24_repeat` - 24小时内注册次数超限
- `ban_ip` - IP限制
- `checkcode` - 验证码错误
- `register_email_activation` - 注册成功，需要邮箱激活（如果启用邮箱激活）

---

### 4. 用户名重复检查（AJAX）
**接口地址：** `/index.php?e=index.remote_user?repeat=y`  
**请求方式：** POST  
**使用位置：** `register.tpl.php` (第382行，jQuery Validate remote验证)  
**请求参数：**
```javascript
{
    username: string  // 要检查的用户名
}
```

**响应说明：**
- 返回JSON格式
- 用户名已存在：返回 `false` 或错误信息
- 用户名可用：返回 `true`

**示例响应：**
```json
true   // 用户名可用
```
或
```json
false  // 用户名已存在
```

---

### 5. 获取银行列表
**接口地址：** `/index.php?e=index.get_banks`  
**请求方式：** GET  
**使用位置：** `register.html` (第472行，fetch请求)  
**响应格式：** JSON

**响应数据结构：**
```json
{
    "银行名称1": [银行代码, 是否启用],
    "银行名称2": [银行代码, 是否启用],
    ...
}
```

**示例响应：**
```json
{
    "USDT": ["usdt", 1],
    "BTC": ["btc", 1],
    "ETH": ["eth", 0]
}
```

**说明：**
- 第二个值为 `0` 或 `false` 的银行会被过滤掉（不显示在下拉框中）
- 用于注册页面钱包类型下拉框

---

### 6. 获取客服列表
**接口地址：** `/index.php?e=index.get_service_users`  
**请求方式：** GET  
**使用位置：** `register.html` (第503行，fetch请求)  
**响应格式：** JSON

**响应数据结构：**
```json
[
    {
        "uid": number,        // 用户ID
        "contact": string,     // 客服名称
        "qq": string,          // Telegram用户名（带@或不带@）
        "telegram": string     // Telegram用户名（备用字段）
    },
    ...
]
```

**示例响应：**
```json
[
    {
        "uid": 1,
        "contact": "蛋蛋",
        "qq": "dandan",
        "telegram": "dandan"
    },
    {
        "uid": 2,
        "contact": "豆豆",
        "qq": "doudou",
        "telegram": "doudou"
    }
]
```

**说明：**
- 用于站长注册时选择客服
- Telegram链接格式：`https://t.me/{qq或telegram字段}`

---

### 7. 获取商务列表
**接口地址：** `/index.php?e=index.get_commercial_users`  
**请求方式：** GET  
**使用位置：** `register.html` (第548行，fetch请求)  
**响应格式：** JSON

**响应数据结构：**
```json
[
    {
        "uid": number,        // 用户ID
        "contact": string,     // 商务名称
        "qq": string,          // Telegram用户名（带@或不带@）
        "telegram": string     // Telegram用户名（备用字段）
    },
    ...
]
```

**示例响应：**
```json
[
    {
        "uid": 10,
        "contact": "果果",
        "qq": "guoguo",
        "telegram": "guoguo"
    }
]
```

**说明：**
- 用于广告商注册时选择商务
- Telegram链接格式：`https://t.me/{qq或telegram字段}`

---

## 页面路由

### 8. 首页
**接口地址：** `/index.php?e=index`  
**请求方式：** GET  
**使用位置：** 导航链接  
**说明：** 显示官网首页

---

### 9. 注册页面
**接口地址：** `/index.php?e=index.register`  
**请求方式：** GET  
**使用位置：** 
- `login.tpl.php` (第71行)
- `index.tpl.php` (第79行、第139行)
- 导航链接

**说明：** 显示用户注册页面

---

### 10. 登录页面
**接口地址：** `/index.php?e=index.login`  
**请求方式：** GET  
**使用位置：** 导航链接  
**说明：** 显示用户登录页面

---

### 11. 网站主页面
**接口地址：** `/index.php?e=index.affiliate`  
**请求方式：** GET  
**使用位置：** 导航链接  
**说明：** 显示网站主介绍页面

---

### 12. 广告主页面
**接口地址：** `/index.php?e=index.advertiser`  
**请求方式：** GET  
**使用位置：** 导航链接  
**说明：** 显示广告主介绍页面

---

### 13. 帮助页面
**接口地址：** `/index.php?e=index.help`  
**请求方式：** GET  
**使用位置：** 导航链接  
**说明：** 显示常见问题帮助页面

---

### 14. 联系页面
**接口地址：** `/index.php?e=index.contact`  
**请求方式：** GET  
**使用位置：** 
- `msg.tpl.php` (第168行、第184行、第200行)
- 导航链接

**说明：** 显示联系联盟页面

---

### 15. 消息提示页面
**接口地址：** `/index.php?e=index.msg&key={key}`  
**请求方式：** GET  
**使用位置：** 各种操作后的重定向页面

**请求参数：**
- `key`: string - 消息类型key

**消息key列表：**

| key | 说明 | 使用场景 |
|-----|------|---------|
| `success` | 注册成功 | 注册成功后 |
| `u_p_null` | 必填选项不能为空 | 注册时必填项为空 |
| `system_error` | 未知信息 | 系统错误 |
| `activate_repeat` | 帐号已激活过 | 重复激活 |
| `activate_success` | 激活成功 | 邮箱激活成功 |
| `login_username_password_error` | 用户名和密码错误 | 登录失败 |
| `login_username_lock` | 用户已被锁定 | 用户被锁定 |
| `login_username_no_activation` | 用户名没有审核通过 | 等待审核 |
| `close_affiliate_register` | 已关闭注册 | 站长注册关闭 |
| `close_advertiser_register` | 已关闭注册 | 广告商注册关闭 |
| `username_repeat_register` | 用户名称重复 | 用户名已存在 |
| `login_username_email_activation` | 邮箱地址没有认证通过 | 需要邮箱激活 |
| `register_email_activation` | 注册成功，需要邮箱激活 | 注册后需激活 |
| `login_timeout` | 登入超时 | 会话超时 |
| `register_24_repeat` | 24小时只注册N次 | 注册频率限制 |
| `close_repeat` | 已关闭注册 | 注册功能关闭 |
| `ban_ip` | IP限制 | IP被限制 |
| `checkcode` | 验证码错误 | 验证码校验失败 |

**说明：**
- HTML版本 (`msg.html`) 使用JavaScript根据key参数显示对应的消息div
- PHP版本 (`msg.tpl.php`) 使用PHP条件判断显示对应消息

---

## 数据获取接口

### 11. 首页数据（可选）
**说明：** 如果首页需要动态数据（如统计数据），可能需要以下接口：

**统计数据显示：**
- 网站主数量：1583
- 广告主数量：215
- 用户好评数：266
- 总累计合作用户：851

**注意：** 当前HTML版本 (`index.html`) 中这些数据是硬编码的，如果需要在后端动态获取，需要添加相应的API接口。

---

## 接口实现注意事项

### 1. 验证码实现
- 验证码应存储在session中
- 验证码图片生成后，session中应存储验证码值
- 登录/注册时验证用户输入的验证码与session中的值是否一致
- 验证码应支持刷新（通过rand参数）

### 2. 用户名验证规则
- 最小长度：4个字符
- 格式：数字、26个英文字母或下划线组成
- 不能重复（通过remote_user接口检查）

### 3. Telegram格式验证
- 必须以 `@` 开头
- 只能包含英文字母、数字和下划线
- 最小长度：2个字符（@ + 至少1个字符）

### 4. 注册类型区分
- `type=1`: 站长（Affiliate），需要填写钱包信息，选择客服
- `type=2`: 广告商（Advertiser），需要选择商务

### 5. 错误处理
- 所有错误应重定向到 `/index.php?e=index.msg&key={错误key}`
- 注册/登录失败时，应清除或保留适当的session数据

### 6. Session管理
- 注册成功时，可能需要设置 `$_SESSION["register_username"]`
- 邮箱激活相关，可能需要设置 `$_SESSION["activation_email"]` 或 `$_SESSION["register_activation_email"]`

### 7. JSON响应格式
- 所有JSON接口应设置正确的Content-Type头：`Content-Type: application/json`
- 确保JSON编码正确，避免中文乱码

### 8. CORS处理（如果前后端分离）
- 如果前端和后端不在同一域名，需要设置CORS头
- 允许的请求头、方法等需要正确配置

---

## 文件对照表

| HTML文件 | PHP模板文件 | 主要使用的API |
|---------|------------|--------------|
| `login.html` | `login.tpl.php` | `index.postlogin`, `index.codeimage` |
| `register.html` | `register.tpl.php` | `index.post_register`, `index.codeimage`, `index.remote_user`, `index.get_banks`, `index.get_service_users`, `index.get_commercial_users` |
| `msg.html` | `msg.tpl.php` | `index.msg` (页面路由) |
| `index.html` | `index.tpl.php` | `index.register` (链接) |
| `affiliate.html` | `affiliate.tpl.php` | 无API调用（静态页面） |
| `advertiser.html` | `advertiser.tpl.php` | 无API调用（静态页面） |
| `help.html` | `help.tpl.php` | 无API调用（静态页面） |
| `contact.html` | `contact.tpl.php` | 无API调用（静态页面） |

---

## 开发建议

1. **统一错误处理：** 建议创建一个统一的错误处理机制，所有错误都通过 `index.msg` 页面显示
2. **接口版本管理：** 如果未来需要API版本管理，可以考虑在URL中添加版本号
3. **安全考虑：**
   - 验证码应设置过期时间
   - 登录/注册接口应防止暴力破解（限制请求频率）
   - 用户名检查接口也应限制请求频率
   - 所有用户输入都应进行安全过滤和验证
4. **日志记录：** 建议记录所有登录、注册操作的日志，便于问题排查和安全审计
5. **测试建议：** 每个接口都应编写单元测试和集成测试

---

**文档生成时间：** 2026-02-04  
**文档版本：** 1.0
