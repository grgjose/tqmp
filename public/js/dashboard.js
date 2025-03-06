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