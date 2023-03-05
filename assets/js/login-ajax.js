function login(type, form_data_object){
    //var username = form_data_object.querySelector('[name="username"]').value;
    //var password = form_data_object.querySelector('[name="password"]').value;

    var form_data = new FormData(form_data_object);

    var requset = new XMLHttpRequest();

    requset.onreadystatechange = function(){
        if (requset.readyState === XMLHttpRequest.DONE){
            if (requset.status === 200){
                console.log(this.responseText);
                if (this.responseText == '1'){
                    alert('login sucess');
                    window.location.href = "../";
                } else{
                    alert('Your username or password incorrect');
                }
            }else {
                console.error('Error: ' + this.status);
            }
        }
    };

    if (type == 'admin'){
        requset.open('POST', './includes/admin_login.php');
    } else if(type == 'stu'){
        requset.open('POST', './includes/student_login.php');
    } else if(type == 'teacher'){
        requset.open('POST', './includes/teacher_login.php');
    } else if (type =='acc_officer'){
        requset.open('POST', './includes/academic_officer_login.php');
    }
    requset.send(form_data);
}