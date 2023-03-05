function login(type, form_data_object){
    //var username = form_data_object.querySelector('[name="username"]').value;
    //var password = form_data_object.querySelector('[name="password"]').value;

    var form_data = new FormData(form_data_object);

    var requset = new XMLHttpRequest();

    requset.onreadystatechange = function(){
        if (requset.readyState === XMLHttpRequest.DONE){
            if (requset.status === 200){
                console.log(this.responseText);
            }else {
                console.error('Error: ' + this.status)
            }
        }
    };

    requset.open('POST', '../includes/student_login.php');
    requset.send(form_data);
}