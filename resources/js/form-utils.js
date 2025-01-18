document.addEventListener('DOMContentLoaded', function () {
    // Function to toggle password visibility
    function togglePasswordVisibility(passwordInput, eyeOn, eyeOff) {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeOn.classList.add('hidden');
            eyeOff.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            eyeOn.classList.remove('hidden');
            eyeOff.classList.add('hidden');
        }
    }

    // Handle the main password field
    const passwordInput = document.getElementById('password');
    const passwordAddon = document.getElementById('password-addon');
    const passwordEyeOn = document.querySelector('#password-addon .password-eye-on');
    const passwordEyeOff = document.querySelector('#password-addon .password-eye-off');

    if (passwordInput && passwordAddon && passwordEyeOn && passwordEyeOff) {
        passwordAddon.addEventListener('click', function () {
            togglePasswordVisibility(passwordInput, passwordEyeOn, passwordEyeOff);
        });
    } else {
        console.error('Main password field or toggle button not found!');
    }

    // Handle the password confirmation field
    const passwordConfirmationInput = document.getElementById('password_confirmation');
    const passwordConfirmationAddon = document.getElementById('password-confirmation-addon');
    const passwordConfirmationEyeOn = document.querySelector('#password-confirmation-addon .password-eye-on');
    const passwordConfirmationEyeOff = document.querySelector('#password-confirmation-addon .password-eye-off');

    if (passwordConfirmationInput && passwordConfirmationAddon && passwordConfirmationEyeOn && passwordConfirmationEyeOff) {
        passwordConfirmationAddon.addEventListener('click', function () {
            togglePasswordVisibility(passwordConfirmationInput, passwordConfirmationEyeOn, passwordConfirmationEyeOff);
        });
    } else {
        console.error('Password confirmation field or toggle button not found!');
    }
});