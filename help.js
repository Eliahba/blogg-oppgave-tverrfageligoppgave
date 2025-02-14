document.addEventListener("DOMContentLoaded", function () {
    const faqToggle = document.getElementById("faq-toggle");
    const faqContent = document.getElementById("faq-content");

    faqToggle.addEventListener("click", function () {
        if (faqContent.style.display === "none") {
            faqContent.style.display = "block";
        } else {
            faqContent.style.display = "none";
        }
    });
});
