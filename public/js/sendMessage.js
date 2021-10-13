var h=(new Date()).getHours();
var m=(new Date()).getMinutes();
var s=(new Date()).getSeconds();
if (h >= 4 && h < 10){var waktu = "Selamat Pagi"};
if (h >= 10 && h < 15){var waktu = "Selamat Siang"};
if (h >= 15 && h < 18){var waktu = "Selamat Sore"};
if (h >= 18 || h < 4){var waktu = "Selamat Malam"};

function sendMessage()
{
    let walink = 'https://api.whatsapp.com/send',
    phone = '6287782987067',
    header = waktu+' Team ITINDOSOLUTION';

    /* Call Input Form */
    let name = $("#name").val(),
        email = $("#email").val(),
        subject = $("#subject").val(),
        message = $("#message").val();

       /* Final Whatsapp URL */
    var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + header + '%0A%0A' +
        'Name : ' + name + '%0A' +
        'Email Address : ' + email + '%0A' +
        'Subject : ' + subject + '%0A' +
        'Message : ' + message + '%0A';
    
       /* Whatsapp Window Open */
     return window.open(blanter_whatsapp,'_blank');

}
