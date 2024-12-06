// Slider Login

// Ambil elemen tombol dan form
const loginButton = document.getElementById('login');
const registerButton = document.getElementById('register');
const signInForm = document.getElementById('signInForm');
const signUpForm = document.getElementById('signUpForm');

// Tambahkan event listener pada tombol Sign In
loginButton.addEventListener('click', () => {
    signInForm.style.display = 'block';
    signUpForm.style.display = 'none';
    loginButton.classList.add('active-btn');
    registerButton.classList.remove('active-btn');
});

// Tambahkan event listener pada tombol Sign Up
registerButton.addEventListener('click', () => {
    signUpForm.style.display = 'block';
    signInForm.style.display = 'none';
    registerButton.classList.add('active-btn');
    loginButton.classList.remove('active-btn');
});

// Atur tampilan awal, tampilkan Sign In dan sembunyikan Sign Up
window.onload = function() {
    signInForm.style.display = 'block';
    signUpForm.style.display = 'none';
    loginButton.classList.add('active-btn');
};





// View Password Functions

const logInputField = document.getElementById('logPassword');
const logInputIcon = document.getElementById('log-pass-icon');

const regInputField = document.getElementById('regPassword');
const regInputRepeatField = document.getElementById('regPasswordRepeat');
const regInputIcon = document.getElementById('reg-pass-icon');
const regInputRepeatIcon = document.getElementById('reg-pass-icon-repeat');


function myLogPassword() {
    if(logInputField.type === "password"){
        logInputField.type = "text";

        logInputIcon.name = "eye-off-outline";
        logInputIcon.style.cursor = "pointer";
    }
    else {
        logInputField.type = "password";

        logInputIcon.name = "eye-outline";
        logInputIcon.style.cursor = "pointer";
    }
}


function myRegPassword() {
    if(regInputField.type === "password"){
        regInputField.type = "text";

        regInputIcon.name = "eye-off-outline";
        regInputIcon.style.cursor = "pointer";
    }
    else {
        regInputField.type = "password";

        regInputIcon.name = "eye-outline";
        regInputIcon.style.cursor = "pointer";
    }
}

function myRegPasswordRepeat() {
    if(regInputRepeatField.type === "password"){
        regInputRepeatField.type = "text";

        regInputRepeatIcon.name = "eye-off-outline";
        regInputRepeatIcon.style.cursor = "pointer";
    }
    else {
        regInputRepeatField.type = "password";

        regInputRepeatIcon.name = "eye-outline";
        regInputRepeatIcon.style.cursor = "pointer";
    }
}


// change the icon when the user starts trying password

function changeIcon(value){
    if(value.length > 0){
        logInputIcon.name = "eye-outline";
        regInputIcon.name = "eye-outline";
        regInputRepeatField.name = "eye-outline";
    } else {
        logInputIcon.name - "lock-closed-outline";
        regInputIcon.name - "lock-closed-outline";
        regInputRepeatField.name = "lock-closed-outline";
    }
}

