window.addEventListener('load', () => {
    
    let button = document.getElementById('login_form');
    let user = document.getElementById('username');
    let password = document.getElementById('password');
    let aviso = document.getElementById('alert');


    function data(){
        let datos = new FormData();
        datos.append("username", user.value);
        datos.append("password", password.value);
            fetch('../handlers/login.php',{
                method: 'POST',
                body: datos
            }).then(Response => Response.json())
                .then(({success})=>{
                    console.log(success);
                    switch(success){
                        case 1 :  1
                        location.href = 'admin_index.html';
                        break;
                        case 2 : 2
                        location.href = 'index.html';
                        break;
                        default : alerta();
                        break;
                    }
                });
    };
    button.addEventListener('submit',(e)=>{
        e.preventDefault();
    
        data();
    });


    function alerta(){
        aviso.innerHTML = `
        <div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
        Los datos ingresados no corresponden a un usuario registrado.
    </div>
    </div>
    `;
    }
});

    
