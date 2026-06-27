function handleCredentialResponse(response){

    console.log(response);

    // Token JWT que devuelve Google
    const token = response.credential;

    alert("Inicio de sesión exitoso");

    // Redireccionar a otra página
    window.location.href = "inicio.php";
}