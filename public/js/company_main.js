// Counter Animation Function
function animateCounter(elementId, endValue, duration) {
    let startValue = 0;
    let startTime = null;

    function count(timestamp) {
        if (!startTime) startTime = timestamp;
        let progress = timestamp - startTime;
        let currentValue = Math.min(Math.floor(progress / duration * endValue), endValue);

        document.getElementById(elementId).textContent = currentValue;

        if (progress < duration) {
            requestAnimationFrame(count);
        } else {
            document.getElementById(elementId).textContent = endValue;
        }
    }

    requestAnimationFrame(count);
}

// Start the counters when the page loads
window.onload = function() {
    animateCounter('counter-trusted', 123, 2000); // Count to 123 over 2 seconds
    animateCounter('counter-leaders', 1234, 2000); // Count to 1234 over 2 seconds
    animateCounter('counter-clients', 12345, 2000); // Count to 12345 over 2 seconds
};
