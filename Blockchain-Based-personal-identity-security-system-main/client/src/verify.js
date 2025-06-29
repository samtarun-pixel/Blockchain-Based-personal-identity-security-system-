document.getElementById('verifyForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;

    var formData = new URLSearchParams();
    formData.append('username', username);

    fetch('select.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: formData.toString(),
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === 'User not found!') {
            alert('Username not found in the database!');
        } else {
            document.getElementById('result').textContent = data;
        }
    });
});
