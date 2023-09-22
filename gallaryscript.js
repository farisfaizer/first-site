document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector(".sidebar2");
    const menuButton = document.getElementById("menu");

    // Initially hide the sidebar
    sidebar.style.right = "-250px";

    menuButton.addEventListener("click", function () {
        if (sidebar.style.right === "-250px" || sidebar.style.right === "") {
            sidebar.style.right = "0px"; // Open the sidebar by moving it to the right
        } else {
            sidebar.style.right = "-250px"; // Close the sidebar by moving it back to the right
        }
    });
});
