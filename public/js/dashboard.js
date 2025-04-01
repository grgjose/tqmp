// Approvals

function showDetails(id){
    $('.tbl').attr('style', 'display: none;');
    $('#view').load('/approvals-view/'+id);
}

function hideDetails(){
    $('.tbl').removeAttr('style');
    $('#view').html('');
}

function downloadFile(id){
    window.location.href = "/approvals-download/" + id;
}

function approve(id){
    window.location.href = "/approvals-approve/" + id;
}

function reject(id){
    $('#rejectForm').attr('action', '/approvals-reject/'+id);
}

// Users

function userShow(id){
    $('.tbl').attr('style', 'display: none;');
    $('#view').load('/users-view/'+id);
}

function userHide(){
    $('.tbl').removeAttr('style');
    $('#view').html('');
}

function userCreate(){
    $('.tbl').attr('style', 'display: none;');
    $('#view').load('/users-create/');
}

function userUpdate(id){
    $('.tbl').attr('style', 'display: none;');
    $('#view').load('/users-update/'+id);
}

function userDelete(id){
    $('#deleteForm').attr('action', '/users-destroy/'+id);
}

// Products
function productShow(id){
    $('.tbl').attr('style', 'display: none;');
    $('#view').load('/products-view/'+id);
}

function productHide(){
    $('.tbl').removeAttr('style');
    $('#view').html('');
}

function productCreate(){
    $('.tbl').attr('style', 'display: none;');
    $('#view').load('/products-create/');
}

function productUpdate(id){
    $('.tbl').attr('style', 'display: none;');
    $('#view').load('/products-edit/'+id);
}

function productDelete(id){
    $('#deleteForm').attr('action', '/products-destroy/'+id);
}

function toggleProductCheckbox(imageId) {
    var checkbox = document.getElementById("img-checkbox-" + imageId);
    var image = document.getElementById("img-" + imageId);
    var checkmark = document.getElementById("checkmark-" + imageId);

    // Toggle checkbox state
    checkbox.checked = !checkbox.checked;

    // Adjust image opacity and checkmark visibility based on the checkbox state
    if (checkbox.checked) {
        image.classList.add("selected");
        checkmark.style.opacity = '1';  // Show checkmark
        image.style.opacity = '0.5';   // Make image semi-transparent
    } else {
        image.classList.remove("selected");
        checkmark.style.opacity = '0';  // Hide checkmark
        image.style.opacity = '1';     // Reset image opacity
    }
}

// Active Navbar UI
$(document).ready(function(){
    var pathname = window.location.pathname;
    pathname = pathname.substring(1, pathname.length);

    $("a[href='/"+ pathname +"']").parent().addClass(" menu-open");
    $("a[href='/"+ pathname +"']").addClass(" active");

    switch(pathname){
        case "dashboard":
        case "inventory":
        case "order":
        case "consumer":
        case "approvals":
        case "users":
        case "products":
        case "product-categories":
        $("a[href='/"+ pathname +"']").parent().parent().parent().addClass("menu-is-opening");
        $("a[href='/"+ pathname +"']").parent().parent().parent().addClass("menu-open");
        $("a[href='/"+ pathname +"']").attr("style", "width: 93%;")
        break;
    }
    $(".wrapper").removeAttr("style");
    
});

