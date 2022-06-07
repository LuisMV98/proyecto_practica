console.log('activo');

document.querySelector('#boton').addEventListener('click', traerDatos);
document.querySelector('#boton').addEventListener('click', limpiar);

function traerDatos(){
    console.log('funcion1 activada');

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET', 'consulta.php?tipo=1', true);

    xhttp.send();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);

            let datos = JSON.parse(this.responseText);
            console.log(datos);

            let res = document.querySelector('#res');
            res.innerHTML = '';

            for(let item of datos){
                res.innerHTML += `
                    <div class="col s12 m4 l3">
                        <div class="card conte">
                            <div class="card-content">
                                <span class="card-title center-align green darken-2 white-text"><h5>Información de usuario</h5></span>
                                <h6>
                                <p><b>Nombre:&nbsp;</b>${item.nombre}</p>
                                <p><b>Edad:&nbsp;</b>${item.edad}</p>
                                <p><b>Fecha de nacimiento:&nbsp;</b>${item.nacimiento}</p>
                                <p><b>Correo:&nbsp;</b>${item.correo}</p>
                                <p><b>Tipo:&nbsp;</b>${item.tipo}</p>
                                </h6>
                            </div>
                            <div class="card-action">
                                <form action="editar.php?tipo=1" method="post">
                                    <input type="hidden" name="nombre" id="nombre" value="${item.nombre}">
                                    <input type="hidden" name="edad" id="edad" value="${item.edad}">
                                    <input type="hidden" name="nacimiento" id="nacimiento" value="${item.nacimiento}">
                                    <input type="hidden" name="correo" id="correo" value="${item.correo}">
                                    <button type="submit" class="btn-small blue white-text col s6">Editar</button>
                                </form>
                                <form action="eliminar.php?tipo=1" method="post">
                                <input type="hidden" name="correo" id="correo" value="${item.correo}">
                                    <button type="submit" class="btn-small red white-text col s6">Eliminar</button>
                                </form>
                            </div>
                            <br><br>
                        </div>
                    </div>
                `
            }
        }
    };
}

function limpiar(){
    console.log('funcion2 activada');
    document.getElementById("resAdmin").style.display = "none";
    document.getElementById("res").style.display = "block";
    document.getElementById("perf").style.display = "none";
    document.getElementById("crea").style.display = "none";
    document.getElementById("edit").style.display = "none";
}