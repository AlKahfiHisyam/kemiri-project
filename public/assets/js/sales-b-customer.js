$(document).ready(function() {

    // Efek menu aktif pada navbar menu
    const menu = document.getElementById("customer-menu");
    menu.classList.add("active");

    // Datatable
    const customerTable = document.getElementById("customer-table");
    $(customerTable).DataTable();

    // Select2
    const selectComponent = document.getElementsByClassName("select-component");
    $(selectComponent).select2();

});