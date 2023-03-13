// Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 200px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTo({ top: 0, behavior: "smooth" });
    document.documentElement.scrollTo({ top: 0, behavior: "smooth" });
}
