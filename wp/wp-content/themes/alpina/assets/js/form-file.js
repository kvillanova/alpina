jQuery('.form-holder input[type=file]')
.hide()
.parent().append(`<button type="button" id="file-manager">Anexar currículo <img class="seta" src="${formvars.seta}"></button>`);

jQuery('#file-manager').on("click", function(){
    jQuery(".form-holder input[type=file]").trigger("click");
})