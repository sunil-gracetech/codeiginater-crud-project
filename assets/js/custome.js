var url="http://localhost/myciapp/";
function editcustomer(id){
   // console.log(id)
    $.post(url+"home/getcustomerbyid",{id:id},function(result){
        var data=JSON.parse(result)
        $("#frm_edit .id").val(data[0].id);
        $("#frm_edit .cname").val(data[0].name);
        $("#frm_edit .cemail").val(data[0].email);
        $("#frm_edit .cpass").val(data[0].password);
        $("#frm_edit .caddress").val(data[0].address);
        $("#myModal").modal("show")
    })
}

$("#frm_edit").submit(function(e){
    e.preventDefault()
    var data=getFormData($("#frm_edit"))
    console.log(data)
    $.post(url+"home/updatecustomer",data,function(result){
       var result=JSON.parse(result)
       $("#myModal").modal("hide")
       alert(result.message);
    })
})

function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}