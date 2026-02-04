# PHP服务器启动脚本 (PowerShell版本)
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "PHP服务器启动脚本" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# 检查PHP是否可用
$phpPath = Get-Command php -ErrorAction SilentlyContinue

if (-not $phpPath) {
    Write-Host "[错误] 未找到PHP！" -ForegroundColor Red
    Write-Host ""
    Write-Host "请先安装PHP：" -ForegroundColor Yellow
    Write-Host "1. 下载XAMPP: https://www.apachefriends.org/zh_cn/index.html"
    Write-Host "2. 或下载PHP: https://windows.php.net/download/"
    Write-Host "3. 将PHP添加到系统PATH环境变量"
    Write-Host ""
    Read-Host "按回车键退出"
    exit 1
}

Write-Host "[信息] 找到PHP，正在启动服务器..." -ForegroundColor Green
Write-Host ""
Write-Host "服务器地址: http://localhost:8000" -ForegroundColor Yellow
Write-Host "登录页面: http://localhost:8000/login.tpl.php" -ForegroundColor Yellow
Write-Host ""
Write-Host "按 Ctrl+C 停止服务器" -ForegroundColor Yellow
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# 切换到脚本所在目录
Set-Location $PSScriptRoot

# 启动PHP内置服务器
php -S localhost:8000
