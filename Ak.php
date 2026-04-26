<?php
// مسار التخزين على الهارد ديسك الخارجي F
$filePath = "F:/database_records.txt";

// 1. استقبال بيانات تسجيل الدخول من login.html
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $time = date("Y-m-d H:i:s");

    $content = "--- دخول جديد ---\nالوقت: $time\nالمستخدم: $user\nكلمة المرور: $pass\n-----------------\n";
    
    file_put_contents($filePath, $content, FILE_APPEND);
    
    echo "تم تسجيل بيانات الدخول في الهارد ديسك F. <a href='ar.html'>انتقل لصفحة القراءات</a>";
}

// 2. استقبال بيانات القراءات من ar.html
if (isset($_POST['clientName']) && isset($_POST['clientPhone']) && isset($_POST['humidity'])) {
    $name  = $_POST['clientName'];
    $phone = $_POST['clientPhone'];
    $hum   = $_POST['humidity'];
    $time  = date("Y-m-d H:i:s");

    $content = "--- قراءة جديدة ---\nالوقت: $time\nالعميل: $name\nالهاتف: $phone\nالرطوبة: $hum%\n-----------------\n";
    
    file_put_contents($filePath, $content, FILE_APPEND);
    
    echo "تم حفظ القراءة بنجاح في الهارد ديسك F. <a href='ar.html'>إرسال قراءة أخرى</a>";
}
?>