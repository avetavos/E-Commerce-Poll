var flag_1 = 0;
var flag_2 = 0;
var flag_3 = 0;
var flag_4 = 0;
var flag_5 = 0;

function check_1(radio) {
    if (radio.checked == true) {
        flag_1 = 1;
    }
    if (flag_1 == 1 && flag_2 == 1 && flag_3 == 1 && flag_4 == 1 && flag_5 == 1) {
        $(".sentData").show();
    }
}

function check_2(radio) {
    if (radio.checked == true) {
        flag_2 = 1;
    }
    if (flag_1 == 1 && flag_2 == 1 && flag_3 == 1 && flag_4 == 1 && flag_5 == 1) {
        $(".sentData").show();
    }
}

function check_3(checkbox) {
    if (checkbox.checked == true) {
        flag_3 = 1;
    }
    if (flag_1 == 1 && flag_2 == 1 && flag_3 == 1 && flag_4 == 1 && flag_5 == 1) {
        $(".sentData").show();
    }
}

function check_4(checkbox) {
    if (checkbox.checked == true) {
        flag_4 = 1;
    }
    if (flag_1 == 1 && flag_2 == 1 && flag_3 == 1 && flag_4 == 1 && flag_5 == 1) {
        $(".sentData").show();
    }
}

function check_5(checkbox) {
    if (checkbox.checked == true) {
        flag_5 = 1;
    }
    if (flag_1 == 1 && flag_2 == 1 && flag_3 == 1 && flag_4 == 1 && flag_5 == 1) {
        $(".sentData").show();
    }
}
