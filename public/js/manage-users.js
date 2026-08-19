document.addEventListener("DOMContentLoaded", function () {
    // Auto-hide success/error alerts after 4 seconds
    let alerts = document.querySelectorAll(".alert");
    alerts.forEach((alert) => {
        setTimeout(() => {
            let bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 4000);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".user-time").forEach(el => {
        const utcTime = el.getAttribute("data-utc");
        if (utcTime) {
            const localTime = new Date(utcTime);
            el.textContent = localTime.toLocaleString([], { 
                year: 'numeric', month: 'short', day: '2-digit',
                hour: '2-digit', minute: '2-digit', second: '2-digit',
                hour12: true
            });
        }
    });
});
