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
    window.location.href = "/approvals-reject/" + id;
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

function userUpdate(id){
    $('.tbl').attr('style', 'display: none;');
    $('#view').load('/users-update/'+id);
}

function userDelete(id){
    $('.tbl').attr('style', 'display: none;');
    $('#view').load('/users-delete/'+id);
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
        $("a[href='/"+ pathname +"']").parent().parent().parent().addClass("menu-is-opening");
        $("a[href='/"+ pathname +"']").parent().parent().parent().addClass("menu-open");
        $("a[href='/"+ pathname +"']").attr("style", "width: 93%;")
        break;
    }



    $(".wrapper").removeAttr("style");
});