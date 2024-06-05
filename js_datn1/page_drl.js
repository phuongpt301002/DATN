document.addEventListener('DOMContentLoaded', (event) => {
    // Select the list item by its ID
    const listItem = document.getElementById('danhgiarenluyen');

    // Add a click event listener to the list item
    listItem.addEventListener('click', () => {
        // Change the location to the target directory path
        window.location.href = '../page_datn1/page_sv/danhgiarenluyen/page_drl.php'; // Replace with your target directory path
    });
});
