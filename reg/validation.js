function validateForm() {
let regName = /^[a-zA-Z]+$/;

var fname = document.getElementById('1').value;
if(!regName.test(fname)){
    alert('Invalid first name given.');
    return false;
}
var mname = document.getElementById('2').value;
if(!regName.test(mname)){
    alert('Invalid middle name given.');
    return false;
}
var lname = document.getElementById('3').value;
if(!regName.test(lname)){
    alert('Invalid last name given.');
    return false;
}


  }