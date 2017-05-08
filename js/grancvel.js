function registrationValidation() {
    var form = $("#form")[0];
    var onlyLetter = /[a-zA-Z]+/;
    var name = form.name;
    var surname = form.surname;
    var keywords = form.keywords;
    var file = form.cv_file;
    var fail = "";
    if (name.value.length < 4 || !onlyLetter.test(name.value)) {
        fail = "Սխալ անուն  եք  գրել";
    }
    else if (surname.value.length < 4 || !onlyLetter.test(surname.value)) {
        fail = "Սխալ ազգանուն  եք  գրել";
    }
    else if (!file.files.length) {
        fail = "չի բեռնվել ֆայլը";
    }
    if (fail != "") {
        $('#message').html(fail + "<div class='clear'></div>");
        $('#message').show();

        return false;
    }
    return true;
}