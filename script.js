function validateForm() {
    // Get form field values
    const name = document.getElementById("name").value.trim();
    const address = document.getElementById("address").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const agree = document.getElementById("agree").checked;

    // Get error message elements
    const nameError = document.getElementById("name-error");
    const addressError = document.getElementById("address-error");
    const emailError = document.getElementById("email-error");
    const passwordError = document.getElementById("password-error");
    const subjectError = document.getElementById("subject-error");
    const agreeError = document.getElementById("agree-error");

    // Clear previous errors
    nameError.textContent = "";
    addressError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";
    subjectError.textContent = "";
    agreeError.textContent = "";

    let isValid = true;

    // Validate Name
    if (name === "" || /\d/.test(name)) {
        nameError.textContent = "Please enter your name properly.";
        isValid = false;
    }

    // Validate Address
    if (address === "") {
        addressError.textContent = "Please enter your address.";
        isValid = false;
    }

    // Validate Email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "" || !emailPattern.test(email)) {
        emailError.textContent = "Please enter a valid email address.";
        isValid = false;
    }

    // Validate Password
    if (password === "" || password.length < 6) {
        passwordError.textContent = "Please enter a password with at least 6 characters.";
        isValid = false;
    }

    // Validate Subject
    if (subject === "") {
        subjectError.textContent = "Please select your course.";
        isValid = false;
    }

    // Validate Agreement Checkbox
    if (!agree) {
        agreeError.textContent = "Please agree to the terms.";
        isValid = false;
    }

    return isValid;
}
