/**
            * reportingmodelCtrl
            * Generated by devups
            * on 2021/04/05
            */


model.sendmail = function (el, id) {
    var email = $("#email-" + id).val();
    model.init("reportingmodel");
    model.addLoader($(el))
    model.request("reportingmodel.testmail&id=" + id + '&email=' + email).get((response) => {
        console.log(response);
        model.removeLoader()
        alert(response.detail)
    })
}

function saveToFile(el, id) {
    model.addLoader($(el))
    Drequest.init(__env+"admin/api/reportingmodel.save-content?id="+id)
        .get((response) => {
            model.removeLoader()
            if (response.success)
                editor.setValue(response.content)
            else{
                alert(response.detail)
            }
        })
}