
<!-- Floating Bar Start -->
<div class="floating-form-on-all-pages">
    <form id="quick-advice-form" action="{{ route('send.quick.advice') }}" method="POST">
        @csrf <!-- CSRF token for security -->
        <input type="text" name="name" placeholder="Name" class="input-field" required />
        <input type="text" name="mobile" placeholder="Mobile" class="input-field" id="mobile-input" required />
        <input type="email" name="email" placeholder="Email" class="input-field" required />
        <button type="submit" class="apply-button" id="submit-button">Schedule Meeting</button>
    </form>
</div>

<!-- Popup Message -->
<div id="popup-message" style="display: none; position: fixed; top: 20px; right: 20px; background: green; color: white; padding: 10px; border-radius: 5px;">
    Meeting is scheduled. Check your email.
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Restrict mobile input to 10 digits
        $('#mobile-input').on('input', function() {
            this.value = this.value.replace(/\D/g, '').substring(0, 10); // Allow only digits and limit to 10
        });

        // Form submission handler
        $('#quick-advice-form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Disable the submit button to prevent multiple submissions
            $('#submit-button').prop('disabled', true).text('Scheduling...');

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // Show the popup message
                    $('#popup-message').fadeIn().delay(3000).fadeOut();

                    // Reset the form fields
                    $('#quick-advice-form')[0].reset();

                    // Re-enable the submit button
                    $('#submit-button').prop('disabled', false).text('Schedule Meeting');
                },
                error: function(xhr) {
                    alert('An error occurred. Please try again.');

                    // Re-enable the submit button on error
                    $('#submit-button').prop('disabled', false).text('Schedule Meeting');
                }
            });
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#quick-advice-form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // Show the popup message
                    $('#popup-message').fadeIn().delay(3000).fadeOut();

                    // Optionally, reset the form fields
                    $('#quick-advice-form')[0].reset();
                },
                error: function(xhr) {
                    alert('An error occurred. Please try again.');
                }
            });
        });
    });
</script>

<style>
    /* Floating Bar Styling */
    .floating-form-on-all-pages {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        display: flex;
        background: linear-gradient(to right, #d4af37, rgb(242, 216, 138), #d4af37);
        padding: 10px 20px; /* Added padding left & right 20px */
        box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        flex-wrap: wrap;
        justify-content: center;
        z-index: 1000;
    }

    .floating-form-on-all-pages form {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 1400px; /* Keeps content centered */
        margin: auto;
    }

    /* Input Fields */
    .floating-form-on-all-pages .input-field {
        flex: 1rem;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
        min-width: 300px;
        font-size: 1rem;
    }

    /* Button */
    .floating-form-on-all-pages .apply-button {
        padding: 10px 20px;
        background: #d4af37;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        min-width: 200px;
        margin: 0;
    }

    .floating-form-on-all-pages .apply-button:hover {
        background: #b8962e;
    }

    /* Hide Floating Bar on Mobile Screens */
    @media (max-width: 768px) {
        .floating-form-on-all-pages {
            display: none;
        }
    }
</style>