let container = document.getElementById('container')
    toggle = () => {
    container.classList.toggle('sign-in')
    container.classList.toggle('sign-up')
    }

    setTimeout(() => {
	container.classList.add('sign-in')
    }, 200)
function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('errorMessage');

    // Username length must be at least 6 characters
    if (username.length < 6) {
        errorMessage.innerHTML = 'Username must be at least 6 characters';
        return false;
    }

    // Password length must be greater than 6 characters
    if (password.length < 6) {
        errorMessage.innerHTML = 'Password must be at least 6 characters';
        return false;
    }

    // Password must contain at least one uppercase letter
    if (!/[A-Z]/.test(password)) {
        errorMessage.innerHTML = 'Password must contain at least one uppercase letter';
        return false;
    }

    // Password must contain at least one lowercase letter
    if (!/[a-z]/.test(password)) {
        errorMessage.innerHTML = 'Password must contain at least one lowercase letter';
        return false;
    }

    // Password must contain at least one number
    if (!/\d/.test(password)) {
        errorMessage.innerHTML = 'Password must contain at least one number';
        return false;
    }

    // Clear any previous error messages
    errorMessage.innerHTML = '';

    // If everything is valid, allow the form submission
    return true;
}
