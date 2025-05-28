// Function to show content based on the selected tab
function showContent(id) {
    const sections = document.querySelectorAll('.details-section');
    sections.forEach(section => {
        section.style.display = section.id === id ? 'block' : 'none';
    });

    const buttons = document.querySelectorAll('.tab-button');
    buttons.forEach(button => {
        button.classList.toggle('active', button.getAttribute('onclick').includes(id));
    });
}

// Function to show the registration form modal
function openModal() {
    document.getElementById('registrationModal').style.display = 'flex';
}

// Function to close the registration form modal
function closeModal() {
    document.getElementById('registrationModal').style.display = 'none';
}

// Event listener for DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    // Default to showing the 'Current' section on page load
    showContent('current');

    const participateBtns = document.querySelectorAll('.card button');
    const modal = document.getElementById('registrationModal');
    const closeBtn = document.querySelector('.modal-content .close');

    // Open the registration modal when any participate button is clicked
    participateBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            openModal();
        });
    });

    // Close the registration modal when the close button is clicked
    closeBtn.addEventListener('click', () => {
        closeModal();
    });

    // Close the registration modal when clicking outside of the modal content
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });
});
