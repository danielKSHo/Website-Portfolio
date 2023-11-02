// Add event listener to each blogDiv
const blogDivs = document.querySelectorAll('.blogDiv');

// Checking if blogDiv exists
if(blogDivs) {

    // Creates an event listener for each blogDiv
    blogDivs.forEach(blogDiv => {
        blogDiv.addEventListener('click', () => {

            // Get blog ID and content
            const blogId = blogDiv.getAttribute('data-blogid');
            const blogContent = blogDiv.querySelector('.blogContent').textContent;

            // Display content in blogContent div
            document.getElementById('blogContent').innerHTML = `
            <h2>${blogDiv.querySelector('h2').textContent}</h2>
            <p>${blogId}</p>
            <p>${blogContent}</p>
            `;
        });
    });
}