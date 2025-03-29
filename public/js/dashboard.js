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

function userHide(id){
    $('.tbl').removeAttr('style');
    $('#view').html('');
}

function userCreate(id){
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
    $('#view').load('/product-view/'+id);
}

function productHide(id){

}

function productUpdate(id){

}

function productDelete(id){

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

