// Update Profile
$('.profile').on('click',function(){
    $('.header-card-profile-right').html('');
    $('.ubah_password').removeAttr('id');
    $('.browser-session').removeAttr('id');
    $('.profile').attr('id','li-active-profile');
    onUpdateProfile();
})

function onUpdateProfile(){
    $('.header-card-profile-right').append(`
        <h2>Profil Saya</h2>
        <p>Kelola informasi profil Anda, isi dengan data yang valid sesuai data anda.</p>
    `);
    $('#form-update-password').attr('class', 'row d-none');
    $('#form-browser-session').attr('class','row d-none');
    $('#form-update-profile').attr('class','row');
}

// Update Password
$('.ubah_password').on('click',function(){
    $('.header-card-profile-right').html('');
    $('.profile').removeAttr('id');
    $('.browser-session').removeAttr('id');
    $('.ubah_password').attr('id','li-active-profile');
    updatePasswordForm();
    onFormUpdatePassword();
});

function updatePasswordForm(){
    $('.header-card-profile-right').append(`
              <h2>Ubah Password</h2>
              <p>Pastikan masukan password yang sesuai.</p>
    `);
}

function onFormUpdatePassword(){
    $('#form-update-profile').attr('class','row d-none');
    $('#form-browser-session').attr('class','row d-none');
    $('#form-update-password').attr('class', 'row');
}


// Browser session
$('.browser-session').on('click',function(){
    $('.header-card-profile-right').html('');
    $('.profile').removeAttr('id');
    $('.ubah_password').removeAttr('id');
    $('.browser-session').attr('id','li-active-profile');
    onFormBrowserSession();
})

function onFormBrowserSession(){
    $('.header-card-profile-right').append(`
        <h2>Browser Session</h2>
        <p>Browser dimana saja tempat anda login.</p>
    `);
    $('#form-update-password').attr('class', 'row d-none');
    $('#form-update-profile').attr('class','row d-none');
    $('#form-browser-session').attr('class','row');
}
