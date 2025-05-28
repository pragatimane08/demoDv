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

window.onload = function() {
    animateCounter('counter-trusted', 560, 1000); 
    animateCounter('counter-clients', 125, 1000); 
     animateCounter('counter-leaders', 245, 1000); 
};