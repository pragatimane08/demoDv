document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const toggleButton = document.querySelector('.password-toggle');

    toggleButton.addEventListener('click', () => {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleButton.textContent = 'hide';
        } else {
            passwordInput.type = 'password';
            toggleButton.textContent = 'show';
        }
    });
});
