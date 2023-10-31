function enableButton(){
    let a = document.getElementById("loginName").value
    let b = document.getElementById("passwordName").value
    if ( a.length > 0 && b.length > 0){
        document.getElementById("login").disabled = false
    }
    else{
        document.getElementById("login").disabled = true
    }
}