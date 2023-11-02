// Adding functionality to the page
document.addEventListener('DOMContentLoaded', function() {

    // Variables for each button
    let clearButton = document.getElementById("clear-button");
    let addPostButton = document.getElementById("addpost-button");
    let previewButton = document.getElementById("preview-button");
    let form = document.getElementById("addpost-form");

    // Add null checks before adding event listeners
    if (clearButton) {
        // When button is clicked
        clearButton.addEventListener("click", clearForm);
    }

    if (addPostButton) {
        // When form is submitted
        addPostButton.addEventListener("submit", validateForm); 
    }

    if (previewButton) {
        // When preview button is clicked
        previewButton.addEventListener("click", previewPost); 
    }

    function validateForm(e) {
        let title = document.getElementById("title");
        let content = document.getElementById("content");

        // If title field is empty
        if (title.value.trim() === '') { 
            // Set border color to red
            title.style.borderColor = "red"; 
            // Prevent form submission
            e.preventDefault(); 
        } else {
            // Set border color to default
            title.style.borderColor = ""; 
        }

        // If content field is empty
        if (content.value.trim() === '') { 
            // Set border color to red
            content.style.borderColor = "red"; 
            // Prevent form submission
            e.preventDefault(); 
        } else {
            // Set border color to default
            content.style.borderColor = ""; 
        }
    }

    // Pop up window to confirm
    function clearForm(e) { 
        if (confirm("Do you wish to clear all text?")) {
            document.getElementById("addpost-form").reset();
        }
    }

    // Preview page for blog before posting
    function previewPost(e) {
        let title = document.getElementById("title").value;
        let content = document.getElementById("content").value;

        // Create a new window with the preview content
        let previewWindow = window.open('', 'previewWindow');
        previewWindow.document.write('<html><head><title>Preview</title></head><body><h1>' + title + '</h1><p>' + content + '</p></body></html>');
    }
});
