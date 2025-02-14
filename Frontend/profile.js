function logout() {
    alert('You have been logged out.');
    window.location.href = 'index.html'; // Redirect to the home page or login page
}

function editProfile() {
    document.querySelector('.profile-container').classList.add('hidden');
    document.querySelector('.edit-profile-container').classList.remove('hidden');
}

function cancelEdit() {
    document.querySelector('.edit-profile-container').classList.add('hidden');
    document.querySelector('.profile-container').classList.remove('hidden');
}

document.getElementById('edit-profile-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Update the profile information
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    document.getElementById('user-name').innerText = name;
    document.getElementById('user-email').innerText = email;

    // Simulate saving the profile
    alert('Profile updated successfully!');
    cancelEdit(); // Return to the profile view
});

function logout() {
    alert('You have been logged out.');
    window.location.href = 'Bookly/index.html'; // Adjust this to your homepage
}

