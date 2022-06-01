let akun = localStorage.getItem("akun") || [];

function daftar(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let repassword = document.getElementById("repassword").value;

    if (password != repassword){
        alert("Password tidak sama");
    }
    else if (username == "" || password == "" || repassword == ""){
        const kosong = document.getElementById("salahpass");

        kosong.innerHTML = "Form tidak boleh kosong";
        kosong.style.color = "red";
        kosong.style.fontSize = "12px";
        kosong.style.marginBottom = "-18.5px";
    }
    // else{
    //     let bikinakun = {username: username, password: password};
    //     let tempakun = akun;
    //     if(tempakun.length == 0){
    //         tempakun.push(bikinakun);
    //         localStorage.setItem("akun", JSON.stringify(tempakun));
    //         alert("Berhasil mendaftar");
    //     }
    //     else{
    //         tempakun = JSON.parse(tempakun);
    //         tempakun.push(bikinakun);
    //         localStorage.setItem("akun", JSON.stringify(tempakun));
    //         akun = localStorage.getItem("akun") || [];
    //         console.log(akun);
    //         alert("Berhasil mendaftar");
    //     }
    // }
};

function masuk(){
    // let username = document.getElementById("loginusername").value;
    // let password = document.getElementById("loginpassword").value;
    // let tempakun = akun;
    // if(tempakun.length == 0){
    //     alert("Belum ada akun");
    // }
    // else 
    if (username == "" || password == ""){
        alert("Username dan password tidak boleh kosong");
    }
    // else{
    //     tempakun = JSON.parse(tempakun);
    //     for(let i = 0; i < tempakun.length; i++){
    //         if(tempakun[i].username == username && tempakun[i].password == password){
    //             window.location.replace("homepage.html");  
    //             return;
    //         }
    //     }
    //     alert("Gagal masuk");
    // }
}