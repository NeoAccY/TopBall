

function confirmacion(e) {
    if (confirm("¿Seguro que quieres borrar este registro?")) {
    return true;
}   else {
    e.preventDefault();
}
}

let linkDelete = document.querySelectorAll(".table__item__link");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
}