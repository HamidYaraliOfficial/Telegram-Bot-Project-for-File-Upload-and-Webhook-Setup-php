<?php
// Configuration
$TOKEN = "bot token";
$DOMAIN = "دامنه=اسم پوشه";
$AUTHOR_NAME = "Hamid Yarali";
$GITHUB_LINK = "https://github.com/HamidYaraliOfficial";
$INSTAGRAM_LINK = "https://www.instagram.com/hamidyaraliofficial?igsh=MWpxZjhhMHZuNnlpYQ==";

// Language translations
$LANGUAGES = [
    'fa' => [
        'select_lang' => 'لطفاً زبان خود را انتخاب کنید:',
        'what_project' => 'چه نوع پروژه‌ای داری؟',
        'delete_folder' => '🗂 لطفاً شماره پوشه‌ای که می‌خوای حذف بشه رو بفرست:',
        'folder_deleted' => '✅ پوشه %s حذف شد.',
        'folder_not_found' => '❌ پوشه‌ای با شماره %s پیدا نشد.',
        'send_web_source' => '📁 لطفاً سورس وب (ZIP یا HTML یا PHP) رو بفرست:',
        'send_bot_source' => '📁 لطفاً سورس رباتت رو بفرست (ZIP یا PHP):',
        'invalid_file_format' => '❌ فرمت فایل نامعتبر است! فقط %s مجاز است.',
        'file_download_error' => '❌ خطا در دریافت فایل!',
        'zip_extract_error' => '❌ خطا در استخراج فایل ZIP!',
        'send_start_file' => '📄 لطفاً نام فایل شروع رو وارد کن (مثلاً %s):',
        'invalid_filename' => '❌ نام فایل نامعتبر است! فقط حروف، اعداد، خط تیره و زیرخط مجاز است.',
        'file_not_found' => '❌ فایل <b>%s</b> پیدا نشد.',
        'web_launched' => '✅ وب اجرا شد:\n%s',
        'send_bot_token' => '🔑 لطفاً توکن ربات رو بفرست:',
        'webhook_set' => '✅ webhook ست شد:\n%s',
        'webhook_error' => '❌ خطا در webhook:\n%s',
        'invalid_command' => 'دستور نامعتبر دوباره /start',
        'footer' => "\n\nتوسعه‌دهنده: $AUTHOR_NAME\nگیت‌هاب: $GITHUB_LINK"
    ],
    'en' => [
        'select_lang' => 'Please select your language:',
        'what_project' => 'What type of project do you have?',
        'delete_folder' => '🗂 Please send the folder number you want to delete:',
        'folder_deleted' => '✅ Folder %s deleted.',
        'folder_not_found' => '❌ Folder with number %s not found.',
        'send_web_source' => '📁 Please send the web source (ZIP, HTML, or PHP):',
        'send_bot_source' => '📁 Please send your bot source (ZIP or PHP):',
        'invalid_file_format' => '❌ Invalid file format! Only %s allowed.',
        'file_download_error' => '❌ Error retrieving file!',
        'zip_extract_error' => '❌ Error extracting ZIP file!',
        'send_start_file' => '📄 Please enter the start file name (e.g., %s):',
        'invalid_filename' => '❌ Invalid filename! Only letters, numbers, hyphens, and underscores allowed.',
        'file_not_found' => '❌ File <b>%s</b> not found.',
        'web_launched' => '✅ Web launched:\n%s',
        'send_bot_token' => '🔑 Please send the bot token:',
        'webhook_set' => '✅ Webhook set:\n%s',
        'webhook_error' => '❌ Webhook error:\n%s',
        'invalid_command' => 'Invalid command, try /start again',
        'footer' => "\n\nDeveloped by: $AUTHOR_NAME\nGitHub: $GITHUB_LINK"
    ],
    'zh' => [
        'select_lang' => '请选择您的语言：',
        'what_project' => '您有什么类型的项目？',
        'delete_folder' => '🗂 请发送您想删除的文件夹编号：',
        'folder_deleted' => '✅ 文件夹 %s 已删除。',
        'folder_not_found' => '❌ 未找到编号为 %s 的文件夹。',
        'send_web_source' => '📁 请发送网页源文件（ZIP、HTML 或 PHP）：',
        'send_bot_source' => '📁 请发送您的机器人源文件（ZIP 或 PHP）：',
        'invalid_file_format' => '❌ 文件格式无效！仅允许 %s。',
        'file_download_error' => '❌ 获取文件时出错！',
        'zip_extract_error' => '❌ 解压 ZIP 文件时出错！',
        'send_start_file' => '📄 请输入起始文件名（例如 %s）：',
        'invalid_filename' => '❌ 文件名无效！仅允许字母、数字、连字符和下划线。',
        'file_not_found' => '❌ 未找到文件 <b>%s</b>。',
        'web_launched' => '✅ 网页已启动：\n%s',
        'send_bot_token' => '🔑 请发送机器人令牌：',
        'webhook_set' => '✅ Webhook 已设置：\n%s',
        'webhook_error' => '❌ Webhook 错误：\n%s',
        'invalid_command' => '无效命令，请再次尝试 /start',
        'footer' => "\n\n开发者：$AUTHOR_NAME\nGitHub: $GITHUB_LINK"
    ]
];

// Paths
$state_path = __DIR__ . "/_s";
$upload_path = __DIR__ . "/u/$user_id";
if (!is_dir($state_path)) mkdir($state_path, 0777, true);
if (!is_dir(__DIR__ . "/u")) mkdir(__DIR__ . "/u", 0777, true);
if (!is_dir($upload_path)) mkdir($upload_path, 0777, true);
$state_file = "$state_path/$user_id.txt";
$lang_file = "$state_path/$user_id.lang";

// Initialize language
$default_lang = 'fa';
$user_lang = file_exists($lang_file) ? file_get_contents($lang_file) : $default_lang;
if (!isset($LANGUAGES[$user_lang])) {
    $user_lang = $default_lang;
    file_put_contents($lang_file, $user_lang);
}

$update = json_decode(file_get_contents("php://input"), true);
$message = $update["message"] ?? [];
$chat_id = $message["chat"]["id"] ?? null;
$user_id = $message["from"]["id"] ?? null;
$text = $message["text"] ?? "";
$document = $message["document"] ?? null;

function sm($chat_id, $text_key, $params = [], $keyboard = null) {
    global $TOKEN, $user_lang, $LANGUAGES;
    $text = vsprintf($LANGUAGES[$user_lang][$text_key], $params) . $LANGUAGES[$user_lang]['footer'];
    $url = "https://api.telegram.org/bot$TOKEN/sendMessage";
    $post = [
        "chat_id" => $chat_id,
        "text" => $text,
        "parse_mode" => "HTML"
    ];
    if ($keyboard) {
        $post["reply_markup"] = json_encode(["keyboard" => $keyboard, "resize_keyboard" => true]);
    }
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if ($response === false) {
        logError("CURL Error in sendMessage: " . curl_error($ch));
    }
    curl_close($ch);
}

function getFileLink($file_id) {
    global $TOKEN;
    $url = "https://api.telegram.org/bot$TOKEN/getFile?file_id=$file_id";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $finfo = json_decode(curl_exec($ch), true);
    curl_close($ch);
    
    if (!$finfo["ok"]) {
        logError("Error getting file link: " . json_encode($finfo));
        return null;
    }
    return "https://api.telegram.org/file/bot$TOKEN/" . $finfo["result"]["file_path"];
}

function validateFileName($filename) {
    return preg_match('/^[a-zA-Z0-9_\-\.]+$/', $filename);
}

function logError($message) {
    error_log(date('[Y-m-d H:i:s] ') . $message . PHP_EOL, 3, __DIR__ . '/error.log');
}

// Handle language selection
if ($text === "/start") {
    file_put_contents($state_file, "lang");
    sm($chat_id, "select_lang", [], [
        ["🇮🇷 فارسی"], ["🇬🇧 English"], ["🇨🇳 简体中文"]
    ]);
    exit;
}

if ($state === "lang" && in_array($text, ["🇮🇷 فارسی", "🇬🇧 English", "🇨🇳 简体中文"])) {
    $lang_map = [
        "🇮🇷 فارسی" => "fa",
        "🇬🇧 English" => "en",
        "🇨🇳 简体中文" => "zh"
    ];
    $user_lang = $lang_map[$text];
    file_put_contents($lang_file, $user_lang);
    file_put_contents($state_file, "type");
    sm($chat_id, "what_project", [], [["🌐 وب"], ["🤖 ربات"], ["🗑 حذف پروژه"]]);
    exit;
}

if ($text === "🗑 حذف پروژه") {
    file_put_contents($state_file, "delfile");
    sm($chat_id, "delete_folder");
    exit;
}

if ($state === "delfile" && is_numeric($text)) {
    $folder = __DIR__ . "/u/$user_id/$text";
    if (is_dir($folder)) {
        array_map("unlink", glob("$folder/*"));
        @rmdir($folder);
        sm($chat_id, "folder_deleted", [$text]);
    } else {
        sm($chat_id, "folder_not_found", [$text]);
    }
    unlink($state_file);
    exit;
}

if ($text === "🌐 وب") {
    file_put_contents($state_file, "web2");
    sm($chat_id, "send_web_source");
    exit;
}

if ($text === "🤖 ربات") {
    file_put_contents($state_file, "bot2");
    sm($chat_id, "send_bot_source");
    exit;
}

if ($document && $state === "web2") {
    $filename = $document["file_name"];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if (!in_array($ext, ['zip', 'html', 'php'])) {
        sm($chat_id, "invalid_file_format", ['ZIP, HTML, PHP']);
        exit;
    }
    
    $file_url = getFileLink($document["file_id"]);
    if (!$file_url) {
        sm($chat_id, "file_download_error");
        exit;
    }
    
    $folder = $upload_path . "/" . time();
    mkdir($folder, 0777, true);
    $full_path = "$folder/$filename";
    
    $ch = curl_init($file_url);
    $fp = fopen($full_path, 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $result = curl_exec($ch);
    if ($result === false) {
        sm($chat_id, "file_download_error");
        logError("Failed to download file: " . curl_error($ch));
        curl_close($ch);
        fclose($fp);
        exit;
    }
    curl_close($ch);
    fclose($fp);
    
    if ($ext === "zip") {
        $zip = new ZipArchive;
        if ($zip->open($full_path) === TRUE) {
            $zip->extractTo($folder);
            $zip->close();
            unlink($full_path);
        } else {
            sm($chat_id, "zip_extract_error");
            logError("Failed to extract ZIP file: $filename");
            unlink($full_path);
            exit;
        }
    }
    
    file_put_contents("$state_path/$user_id.folder", $folder);
    file_put_contents($state_file, "web2name");
    sm($chat_id, "send_start_file", ['index.html']);
    exit;
}

if ($state === "web2name") {
    $filename = trim($text);
    if (!validateFileName($filename)) {
        sm($chat_id, "invalid_filename");
        exit;
    }
    
    $folder = file_get_contents("$state_path/$user_id.folder");
    if (!file_exists("$folder/$filename")) {
        sm($chat_id, "file_not_found", [$filename]);
        exit;
    }
    
    $link = "$DOMAIN/u/$user_id/" . basename($folder) . "/$filename";
    sm($chat_id, "web_launched", [$link]);
    unlink($state_file);
    unlink("$state_path/$user_id.folder");
    exit;
}

if ($document && $state === "bot2") {
    $filename = $document["file_name"];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if (!in_array($ext, ['zip', 'php'])) {
        sm($chat_id, "invalid_file_format", ['ZIP, PHP']);
        exit;
    }
    
    $file_url = getFileLink($document["file_id"]);
    if (!$file_url) {
        sm($chat_id, "file_download_error");
        exit;
    }
    
    $folder = $upload_path . "/" . time();
    mkdir($folder, 0777, true);
    $full_path = "$folder/$filename";
    
    $ch = curl_init($file_url);
    $fp = fopen($full_path, 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $result = curl_exec($ch);
    if ($result === false) {
        sm($chat_id, "file_download_error");
        logError("Failed to download file: " . curl_error($ch));
        curl_close($ch);
        fclose($fp);
        exit;
    }
    curl_close($ch);
    fclose($fp);
    
    if ($ext === "zip") {
        $zip = new ZipArchive;
        if ($zip->open($full_path) === TRUE) {
            $zip->extractTo($folder);
            $zip->close();
            unlink($full_path);
        } else {
            sm($chat_id, "zip_extract_error");
            logError("Failed to extract ZIP file: $filename");
            unlink($full_path);
            exit;
        }
    }
    
    file_put_contents("$state_path/$user_id.folder", $folder);
    file_put_contents($state_file, "awaiting_token");
    sm($chat_id, "send_bot_token");
    exit;
}

if ($state === "awaiting_token" && preg_match("/^\d+:[\w-]{30,}$/", $text)) {
    file_put_contents("$state_path/$user_id.token", $text);
    file_put_contents($state_file, "bot2name");
    sm($chat_id, "send_start_file", ['bot.php']);
    exit;
}

if ($state === "bot2name") {
    $filename = trim($text);
    if (!validateFileName($filename)) {
        sm($chat_id, "invalid_filename");
        exit;
    }
    
    $folder = file_get_contents("$state_path/$user_id.folder");
    $token_target = file_get_contents("$state_path/$user_id.token");
    
    if (!file_exists("$folder/$filename")) {
        sm($chat_id, "file_not_found", [$filename]);
        exit;
    }
    
    $link = "$DOMAIN/u/$user_id/" . basename($folder) . "/$filename";
    $ch = curl_init("https://api.telegram.org/bot$token_target/setwebhook?url=" . urlencode($link));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    if ($res === false) {
        sm($chat_id, "webhook_error", ['خطای ناشناخته']);
        logError("Failed to set webhook: " . curl_error($ch));
        curl_close($ch);
        exit;
    }
    $r = json_decode($res, true);
    curl_close($ch);
    
    if ($r["ok"] ?? false) {
        sm($chat_id, "webhook_set", [$link]);
    } else {
        sm($chat_id, "webhook_error", [$r["description"] ?? 'خطای ناشناخته']);
    }
    
    unlink($state_file);
    unlink("$state_path/$user_id.folder");
    unlink("$state_path/$user_id.token");
    exit;
}

sm($chat_id, "invalid_command");
?>
<?php
// توسعه‌دهنده: حمید یارعلی
// گیت‌هاب: https://github.com/HamidYaraliOfficial
?>