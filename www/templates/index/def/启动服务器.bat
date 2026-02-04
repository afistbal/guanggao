@echo off
chcp 65001 >nul
echo ========================================
echo PHP服务器启动脚本
echo ========================================
echo.

REM 检查PHP是否可用
where php >nul 2>&1
if %errorlevel% neq 0 (
    echo [错误] 未找到PHP！
    echo.
    echo 请先安装PHP：
    echo 1. 下载XAMPP: https://www.apachefriends.org/zh_cn/index.html
    echo 2. 或下载PHP: https://windows.php.net/download/
    echo 3. 将PHP添加到系统PATH环境变量
    echo.
    pause
    exit /b 1
)

echo [信息] 找到PHP，正在启动服务器...
echo.
echo 服务器地址: http://localhost:8000
echo 登录页面: http://localhost:8000/login.tpl.php
echo.
echo 按 Ctrl+C 停止服务器
echo ========================================
echo.

REM 切换到脚本所在目录
cd /d "%~dp0"

REM 启动PHP内置服务器
php -S localhost:8000

pause
