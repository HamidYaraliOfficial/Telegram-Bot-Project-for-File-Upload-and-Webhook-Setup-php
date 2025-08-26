# Telegram Bot Project for File Upload and Webhook Setup

## English

### Overview
This project is a Telegram bot developed in PHP to handle file uploads for web and bot projects, supporting ZIP, HTML, and PHP files. It allows users to upload source files, set up webhooks for Telegram bots, and manage project folders. The bot supports three languages (English, Persian, and Chinese) and includes robust error handling, file validation, and a multilingual interface for improved user experience.

### Features
- **File Upload**: Users can upload web project files (ZIP, HTML, PHP) or bot source files (ZIP, PHP).
- **Webhook Setup**: Automatically sets up Telegram webhooks for uploaded bot files.
- **Folder Management**: Users can delete project folders by specifying their folder number.
- **Multilingual Support**: Interface available in English, Persian (Farsi), and Simplified Chinese.
- **Error Handling**: Comprehensive logging and user feedback for errors during file operations or webhook setup.
- **Security**: File name validation and secure directory creation.

### Prerequisites
- PHP 7.4 or higher
- cURL extension for PHP
- Telegram Bot Token (obtained from BotFather)
- A web server (e.g., Apache, Nginx) with a public URL for webhook functionality

### Installation
1. Install dependencies:
   - Ensure PHP and the cURL extension are installed on your server.
2. Configure the bot:
   - Replace `"bot token"` in the code with your actual Telegram Bot Token.
   - Update `$DOMAIN` with your server's public URL and folder name.
3. Deploy the script:
   - Place the PHP script in your web server’s directory.
   - Ensure the `_s` and `u` directories are writable by the server.

### Usage
- **Start the Bot**: Use the `/start` command to select a language and begin.
- **Language Selection**: Choose from English, Persian, or Chinese.
- **Project Types**:
  - **Web**: Upload ZIP, HTML, or PHP files, then specify the start file (e.g., `index.html`).
  - **Bot**: Upload ZIP or PHP files, provide a bot token, and specify the main bot file (e.g., `bot.php`) to set up a webhook.
  - **Delete Project**: Delete a project folder by entering its number.
- **Error Handling**: The bot provides clear error messages for invalid files, missing files, or webhook issues.

### File Structure
- `_s/`: Stores user state and language preference files.
- `u/$user_id/`: Stores uploaded project files for each user, organized by timestamped folders.
- `error.log`: Logs errors for debugging purposes.

### Developer
Developed by **Hamid Yarali**  
GitHub: [HamidYaraliOfficial](https://github.com/HamidYaraliOfficial)

---

## فارسی

### بررسی اجمالی
این پروژه یک ربات تلگرامی مبتنی بر PHP است که برای آپلود فایل‌های پروژه‌های وب و ربات طراحی شده و از فایل‌های ZIP، HTML و PHP پشتیبانی می‌کند. کاربران می‌توانند فایل‌های منبع را آپلود کنند، webhook برای ربات‌های تلگرامی تنظیم کنند و پوشه‌های پروژه را مدیریت کنند. این ربات از سه زبان (فارسی، انگلیسی و چینی) پشتیبانی می‌کند و شامل مدیریت خطای قوی، اعتبارسنجی فایل و رابط کاربری چندزبانه برای تجربه کاربری بهتر است.

### ویژگی‌ها
- **آپلود فایل**: کاربران می‌توانند فایل‌های پروژه وب (ZIP، HTML، PHP) یا فایل‌های منبع ربات (ZIP، PHP) را آپلود کنند.
- **تنظیم Webhook**: تنظیم خودکار webhook تلگرام برای فایل‌های ربات آپلودشده.
- **مدیریت پوشه‌ها**: کاربران می‌توانند با وارد کردن شماره پوشه، آن را حذف کنند.
- **پشتیبانی چندزبانه**: رابط کاربری در زبان‌های فارسی، انگلیسی و چینی ساده‌شده.
- **مدیریت خطا**: ثبت خطاها و ارائه بازخورد واضح به کاربر برای مشکلات مربوط به عملیات فایل یا تنظیم webhook.
- **امنیت**: اعتبارسنجی نام فایل و ایجاد امن پوشه‌ها.

### پیش‌نیازها
- PHP نسخه 7.4 یا بالاتر
- افزونه cURL برای PHP
- توکن ربات تلگرام (دریافت‌شده از BotFather)
- سرور وب (مانند Apache یا Nginx) با URL عمومی برای عملکرد webhook

### نصب
1. نصب وابستگی‌ها:
   - اطمینان حاصل کنید که PHP و افزونه cURL روی سرور شما نصب شده‌اند.
2. پیکربندی ربات:
   - مقدار `"bot token"` را در کد با توکن واقعی ربات تلگرام جایگزین کنید.
   - متغیر `$DOMAIN` را با URL عمومی سرور و نام پوشه به‌روزرسانی کنید.
3. استقرار اسکریپت:
   - فایل PHP را در پوشه سرور وب قرار دهید.
   - اطمینان حاصل کنید که پوشه‌های `_s` و `u` توسط سرور قابل نوشتن هستند.

### استفاده
- **شروع ربات**: از دستور `/start` برای انتخاب زبان و شروع استفاده کنید.
- **انتخاب زبان**: از بین فارسی، انگلیسی یا چینی انتخاب کنید.
- **انواع پروژه**:
  - **وب**: آپلود فایل‌های ZIP، HTML یا PHP و سپس مشخص کردن فایل شروع (مثلاً `index.html`).
  - **ربات**: آپلود فایل‌های ZIP یا PHP، ارائه توکن ربات و مشخص کردن فایل اصلی ربات (مثلاً `bot.php`) برای تنظیم webhook.
  - **حذف پروژه**: حذف یک پوشه پروژه با وارد کردن شماره آن.
- **مدیریت خطا**: ربات پیام‌های خطای واضحی برای فایل‌های نامعتبر، فایل‌های گمشده یا مشکلات webhook ارائه می‌دهد.

### ساختار فایل‌ها
- `_s/` : ذخیره فایل‌های حالت کاربر و تنظیمات زبان.
- `u/$user_id/` : ذخیره فایل‌های پروژه آپلودشده برای هر کاربر، سازمان‌دهی‌شده در پوشه‌های مبتنی بر زمان.
- `error.log` : ثبت خطاها برای اهداف دیباگ.

### توسعه‌دهنده
توسعه‌یافته توسط **حمید یارعلی**  
گیت‌هاب: [HamidYaraliOfficial](https://github.com/HamidYaraliOfficial)

---

## 简体中文

### 概述
本项目是一个基于 PHP 开发的 Telegram 机器人，用于处理网页和机器人项目的文件上传，支持 ZIP、HTML 和 PHP 文件。用户可以上传源文件，为 Telegram 机器人设置 webhook，并管理项目文件夹。该机器人支持三种语言（英语、波斯语和简体中文），并具有强大的错误处理、文件验证和多语言界面，以提升用户体验。

### 功能
- **文件上传**：用户可以上传网页项目文件（ZIP、HTML、PHP）或机器人源文件（ZIP、PHP）。
- **Webhook 设置**：为上传的机器人文件自动设置 Telegram webhook。
- **文件夹管理**：用户可以通过输入文件夹编号删除项目文件夹。
- **多语言支持**：界面支持英语、波斯语（波斯语）和简体中文。
- **错误处理**：对文件操作或 webhook 设置中的错误进行全面记录和用户反馈。
- **安全性**：文件名验证和安全目录创建。

### 前提条件
- PHP 7.4 或更高版本
- PHP 的 cURL 扩展
- Telegram 机器人令牌（通过 BotFather 获取）
- 具有公共 URL 的 Web 服务器（例如 Apache、Nginx）以支持 webhook 功能

### 安装
1. 安装依赖项：
   - 确保服务器上已安装 PHP 和 cURL 扩展。
2. 配置机器人：
   - 将代码中的 `"bot token"` 替换为您实际的 Telegram 机器人令牌。
   - 更新 `$DOMAIN` 为服务器的公共 URL 和文件夹名称。
3. 部署脚本：
   - 将 PHP 脚本放置在 Web 服务器的目录中。
   - 确保 `_s` 和 `u` 目录对服务器具有写权限。

### 使用
- **启动机器人**：使用 `/start` 命令选择语言并开始。
- **语言选择**：从英语、波斯语或简体中文中选择。
- **项目类型**：
  - **网页**：上传 ZIP、HTML 或 PHP 文件，然后指定起始文件（例如 `index.html`）。
  - **机器人**：上传 ZIP 或 PHP 文件，提供机器人令牌，并指定主机器人文件（例如 `bot.php`）以设置 webhook。
  - **删除项目**：通过输入文件夹编号删除项目文件夹。
- **错误处理**：机器人为无效文件、缺失文件或 webhook 问题提供清晰的错误消息。

### 文件结构
- `_s/`：存储用户状态和语言偏好文件。
- `u/$user_id/`：存储每个用户上传的项目文件，按时间戳文件夹组织。
- `error.log`：记录错误以便调试。

### 开发者
由 **Hamid Yarali** 开发  
GitHub: [HamidYaraliOfficial](https://github.com/HamidYaraliOfficial)