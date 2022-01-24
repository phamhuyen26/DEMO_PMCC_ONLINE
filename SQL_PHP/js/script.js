function validateForm(){
    let txtUser = document.getElementById('inputUser');
    let txtPass = document.getElementById('inputPassword');
    let erroruser = document.getElementById('errorinputuser');
    let errorpass = document.getElementById('errorinputpassword');
    if(txtUser.value == ''){
        // alert('Bạn chưa nhập Tên/Email');
        erroruser.textContent = 'Hãy nhập thông tin tài khoản!';
        erroruser.style.color = 'red';
        return false;
    } else if(txtUser.value != '' && txtPass.value ==''){
        erroruser.textContent = '';
        errorpass.textContent = 'Hãy nhập mật khẩu!';
        errorpass.style.color = 'red';
        return false;
    }else if(txtPass.value==''){
        errorpass.textContent = 'Hãy nhập mật khẩu!';
        errorpass.style.color = 'red';
        return false;
    }
}