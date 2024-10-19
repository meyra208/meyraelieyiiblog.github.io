<?php
// Hata raporlamasını aç
error_reporting(E_ALL);
ini_set('display_errors', 1);

// POST isteğini kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['soru1'])) {
        // Anket sonuçları işlemi
        $name = htmlspecialchars($_POST['name']);
        $soru1 = htmlspecialchars($_POST['soru1']);
        $soru2 = htmlspecialchars($_POST['soru2']);
        $soru3 = htmlspecialchars($_POST['soru3']);
        $soru4 = htmlspecialchars($_POST['soru4']);
        $soru5 = htmlspecialchars($_POST['soru5']);
        $soru6 = htmlspecialchars($_POST['soru6']);
        $soru7 = htmlspecialchars($_POST['soru7']);

        $to = "meyra67e@gmail.com";
        $subject = "Yeni Anket Sonucu";
        $body = "Ad: $name\n\n1. $soru1\n2. $soru2\n3. $soru3\n4. $soru4\n5. $soru5\n6. $soru6\n7. $soru7";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($to, $subject, $body, $headers)) {
            echo "Anketiniz başarıyla gönderildi. Teşekkürler.";
        } else {
            echo "Anket gönderilirken bir hata oluştu.";
        }
    } elseif (isset($_POST['email'])) {
        // İletişim formu işlemi
        $name = htmlspecialchars($_POST['name']);
    
        $message = htmlspecialchars($_POST['message']);

        $to = "meyra67e@gmail.com";
        $subject = "Yeni İletişim Mesajı";
        $body = "Ad: $name\nMesaj: $message";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($to, $subject, $body, $headers)) {
            echo "Mesajınız başarıyla gönderildi. Teşekkürler.";
        } else {
            echo "Mesaj gönderilirken bir hata oluştu.";
        }
    }
}
?>
