document.getElementById('company-name').addEventListener('input', function(e) {
    // Update the workspace URL as company name is typed
    document.getElementById('workspace-url').textContent = `https://app.cardboardwm.com/${e.target.value}`;
    // TODO: Add AJAX call to check if the company name is available
});

document.getElementById('step-1-next').addEventListener('click', function() {
    // TODO: Add validation for logo file size and type
    // Fade out step 1 and fade in step 2
    document.getElementById('step-1').style.display = 'none';
    document.getElementById('step-2').style.display = 'block';
});

document.getElementById('step-2-next').addEventListener('click', function() {
    // TODO: Add password validation
    // Fade out step 2 and fade in step 3
    document.getElementById('step-2').style.display = 'none';
    document.getElementById('step-3').style.display = 'block';

    // Generate a random team URL
    const randomString = Math.random().toString(36).substring(2, 15);
    document.getElementById('team-url').textContent += randomString;
});

document.getElementById('final-submit').addEventListener('click', function() {
    // TODO: Collect all form data and make a final AJAX call to register the user
    // Redirect to the user's workspace
    window.location.href = document.getElementById('workspace-url').textContent;
});
