

function login(){
    $("#blur").addClass("blur");
    $(".signup-form").css("visibility", "hidden");
    $(".signin-form").css("visibility", "visible");
}





function loginClose(){
    $(".signin-form").css("visibility", "hidden");
    $("#blur").removeClass("blur");
}

function signup(){
    $(".signin-form").css("visibility", "hidden");
    $(".signup-form").css("visibility", "visible");
    $("#blur").addClass("blur");
}

function signupClose(){
    $(".signup-form").css("visibility", "hidden");
    $("#blur").removeClass("blur");
}   



