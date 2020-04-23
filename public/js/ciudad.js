function hello(){
    window.alert("Hello");
}

function openNav() {
    var e = document.getElementById("mySidenav"); //store mySidenav in e
    var f = document.getElementById("content-wrap"); //store main in f
    if (e.style.width=='250px'&& f.style.marginLeft=='250px') //check if both are expanded
    { //if expanded, revert to 0
        e.style.width='0px';
        f.style.marginLeft='0px';
    }
    else //if not expanded, expand to 250 px
    {
        e.style.width='250px';
        f.style.marginLeft='250px';
    }
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("content-wrap").style.marginLeft = "0";
}

//get page title
function myFunction() {
    var number = document.title;
    document.getElementById("myText").innerHTML = number;
}

//function to restrict character type to numbers
function validateNumber(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}

//function to restrict character type to only text
function validateText(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[A-Za-z- ]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}


//validate Contact Us Form
function validateForm() {
    //contact us form
    let flag = "F";
    const phoneField = document.forms["contact-us-form"]["contact-us-input-phone"].value;
    const nameField = document.forms["contact-us-form"]["contact-us-input-name"].value;
    const titleField = document.forms["contact-us-form"]["contact-us-input-title"].value;
    const textArea = document.forms["contact-us-form"]["contact-us-input-textArea"].value;

    if(phoneField.length < 10){
        document.getElementById("contact-us-input-phone").style.borderColor = "orange";
        document.getElementById("contact-us-input-phone").style.color = "orange";
        // window.alert("Please Enter A Valid 10 Digit Phone Number");
        flag = "phoneNumberErr"; //Error Flag
    }
    if (phoneField === "") {
        document.getElementById("contact-us-input-phone").style.borderColor = "red";
        document.getElementById("contact-us-input-phone").style.color = "red";
        // window.alert("Please Enter A Valid 10 Digit Phone Number");
        flag = "T";
    }

    if (nameField === "" ){
        document.getElementById("contact-us-input-name").style.borderColor = "red";
        document.getElementById("contact-us-input-name").style.color = "red";
        // window.alert("Please Enter Your Name");
        flag = "T"; //checks for failure if field empty
    }
    if (titleField === "" ){
        document.getElementById("contact-us-input-title").style.borderColor = "red";
        document.getElementById("contact-us-input-title").style.color = "red";
        // window.alert("Please enter a short title of your inquiry");
        flag = "T"; //checks for failure if field empty
    }
    if (textArea === "" ){
        document.getElementById("contact-us-input-textArea").style.borderColor = "red";
        document.getElementById("contact-us-input-textArea").style.color = "red";

        // window.alert("Please enter a short description of your inquiry");
        flag = "T"; //checks for failure if field empty
    }

    if(flag === "T"){
        window.alert("Please Fill in The Required Fields");
    }
    if(flag === "phoneNumberErr"){
        window.alert("Please input a vaild 10 digit Phone Number");
    }
    if(flag === "F"){
        document.forms["contact-us-form"].submit();
    }
}

//Login validations for login page
function validateForm_loginValidate(){
    const username = document.forms["loginValidateForm1"]["name"].value;
    const password = document.forms["loginValidateForm1"]["password"].value;
    const adminRadioButton = document.getElementById("action1");
    const userRadioButton = document.getElementById("action2");


    // let formFilled = true;
    // let userNameFilled = true;
    // let passwordFilled = true;
    // let radioFilled = true;

    let flag = "none";


    if(adminRadioButton.checked || userRadioButton.checked){

    }
    else{
        flag = "radioNotSelected";
    }
    if(password === ""){
        document.getElementById("loginValidate-input-password").style.cssText = "border-color: red; color: red;";
        // passwordFilled = false;
        flag = "passwordNotFilled";
    }
    if(username === ""){
        document.getElementById("loginValidate-input-username").style.cssText = "border-color: red; color: red;";
        // userNameFilled = false;
        flag = "userNameNotFilled";
    }


    if(flag == "userNameNotFilled" && flag == "passwordNotFilled" && flag == "radioNotSelected"){
        window.alert("Please fill in all required fields");
    }
    if(flag == "userNameNotFilled"){
        window.alert("Please fill in your username");
    }
    if(flag == "passwordNotFilled"){
        window.alert("Please fill in your password");
    }
    if(flag == "radioNotSelected"){
        window.alert("Please select login type");
    }

    //if flag value is none, clear all input fields
    if(flag == "none") {
        document.forms["loginValidateForm1"].submit();
    }
}

