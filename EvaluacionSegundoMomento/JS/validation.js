function validate()
{
    let name = document.getElementById('nameuser').value;
    let lastname = document.getElementById('lastname').value;
    let id_person = document.getElementById('identification').value;
    let birthday = document.getElementById('age').value;
    let city = document.getElementById('city').value;
    let place = document.getElementById('place').value;
    let phone = document.getElementById('phone').value;
    let reason = document.getElementById('reason').value;
    let date = document.getElementById('date').value;
    
    

    if(name === "")
    {
        alert("El campo de nombre es requerido");
        return false;
    }

    if(lastname === "")
    {
        alert("El campo de apellido es requerido");
        return false;
    }

    if(id_person === "")
    {
        alert("El campo identificación es requerido");
        return false;
    }
    

    if(birthday === "")
    {
        alert("El campo fecha de nacimiento es requerido");
        return false;
    }

    if(city === "")
    {
        alert("El campo de ciudad es requerido");
        return false;
    }

    if(place === "")
    {
        alert("El campo barrio es requerido");
        return false;
    }

    if(phone === "")
    {
        alert("El campo de telefono es requerido, máximo 10 digitos");
        return false;
    }

    if(isNaN(phone))
    {
       
        alert("El campo de telefono debe ser un número");
        return false;
    
    } 

    
    if(reason ==="")
    {
        alert("El Motivo de la consulta es requerido");
        return false;
    }

    if(date ==="")
    {
        alert("El campo de la fecha de la consulta es requerido");
        return false;
    }

}



