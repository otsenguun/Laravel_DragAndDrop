function _(el) {
    return document.getElementById(el);
}
function pictures() {
            var file = _("verborgen_file").files;
            var form_data = new FormData(_("upload_form"));
            var total_size = 0;
            for (var i = 0; i < file.length; i++) {
                total_size += file[i].size;
            }
            if (total_size < 104857600) {
                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener("progress", progressHandler);
                ajax.addEventListener("load", completeHandler);
                ajax.addEventListener("error", errorHandler);
                ajax.addEventListener("abort", abortHandler);
                ajax.open(_("upload_form").getAttribute('method'), _("upload_form").getAttribute('action'));
                ajax.send(form_data);
            }
            else {
                _("total_loaded").innerHTML = "Нийт 100 MB файл хуулах боломжтой. Таны файл " + (total_size / 1024 / 1024).toFixed(2) + " MB хэмжээтэй байна";
                _("status").innerHTML = "Файлын хэмжээ их байна.";
                _("progress_bar").style.width = "0px";
            }
}
function progressHandler(event) {
    _("total_loaded").innerHTML = "Хуулагдсан " + event.loaded + " bytes " + event.total;
    var percent = (event.loaded / event.total) * 100;
    _("progress_bar").style.width = Math.round(percent) + "%";
    _("status").innerHTML = Math.round(percent) + "% хуулагдсан байна ... түр хүлээнэ үү";
}
function completeHandler(event) {
    _("status").innerHTML = "Файл сонгох&hellip;";
    _("total_loaded").innerHTML = "Амжилттай боллоо";
    _("progress_bar").style.width = "0px";
    var json_data = JSON.parse(event.target.responseText);
    console.log(json_data.name);
     $('#pf_foto').css('background-image', 'url(/uploads/images/' + json_data.name + ')');
}
function errorHandler(event) {
    _("status").innerHTML = "Амжилтгүй боллоо";
}
function abortHandler(event) {
    _("status").innerHTML = "Файл хуулахыг цуцалж байна";
}