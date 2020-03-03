$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
}

jQuery(document).ready(function() {

    //console.log($.urlParam('save')); 

    var status_save = $.urlParam('save')
    if (status_save == 'success')
    {   
        toastr.success("Data successfully saved", "DATA SAVED");
    }
    else if (status_save == 'failed')
    {
        toastr.error("Something went wrong! Your data can't be saved", "Failed to Save"); // something went wrong
    }
    else if (status_save == 'update')
    {
        $('.initial-data').addClass('d-none');
        $('.dummies-data').removeClass('d-none');

        toastr.success("Data successfully updated", "TRANSACTION UPDATED");
    }
    else if (status_save == 'add')
    {
        toastr.success("Data successfully added", "DATA ADDED");
    }
    else if (status_save == 'sync')
    {
        toastr.success("Data successfully synchronize", "DATA REFRESHED");
    }

    var status_save = $.urlParam('status')
    if (status_save == 'send')
    {
        toastr.success("Success Send Push Notification", "SEND");
    }
    else if (status_save == 'failed')
    {
        toastr.error("Something went wrong! Your data can't be send", "Failed to Send"); 
    }

    var status_otp = $.urlParam('otp')
    if (status_otp == 'found')
    {   
        $('#searchResult').show();
        toastr.success("Search successful, OTP found", "FOUND");
    }
    else if (status_otp == 'notfound')
    {
        $('#searchResult').hide();
        toastr.error("Something went wrong! Search unsuccessful, OTP not found", "NOT FOUND"); // something went wrong
    }

    $('#m_btn_delete').click(function () {
        //closeBulkAction(); //jika ingin begitu click langsung close actionnya
        toastr.success("Success delete selected", "DELETE SUCCESS");
    });

    $('#m_btn_apply').click(function () {
        //closeBulkAction(); //jika ingin begitu click langsung close actionnya
        toastr.success("Cluster has been Updated", "SUCCESS");
    });

    $('#m_btn_bulk').click(function () {
        //closeBulkAction(); //jika ingin begitu click langsung close actionnya
        toastr.success("Data has been Updated", "UPDATED");
    });

    $('#m_push_notification').click(function () {
        //closeBulkAction(); //jika ingin begitu click langsung close actionnya
        toastr.success("Success Send Push Notification", "SEND");
    });
});