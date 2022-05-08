function validasi(){
    const loginusername = document.getElementById("loginusername").value;
    const loginpassword = document.getElementById("loginpassword").value;

    if (loginusername == "" || loginpassword == ""){
        const kosong = document.getElementById("salahpass");

        kosong.innerHTML = "Form tidak boleh kosong";
        kosong.style.color = "red";
        kosong.style.fontSize = "12px";
        kosong.style.marginBottom = "-18.5px";
    }
}