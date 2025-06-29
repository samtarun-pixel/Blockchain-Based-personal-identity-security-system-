document.getElementById('userForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const username = document.getElementById('username').value;

    const salt = crypto.getRandomValues(new Uint8Array(16));
    const saltHex = Array.from(new Uint8Array(salt), byte => byte.toString(16).padStart(2, '0')).join('');

    const dataToHash = username + saltHex;

    crypto.subtle.digest('SHA-256', new TextEncoder().encode(dataToHash)).then(function(hashBuffer) {
        const hashArray = Array.from(new Uint8Array(hashBuffer));
        const sha256Hash = hashArray.map(byte => byte.toString(16).padStart(2, '0')).join('');

        document.getElementById('userData').textContent = username;
        document.getElementById('salt').textContent = saltHex;
        document.getElementById('sha256Hash').textContent = sha256Hash;

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'usernameregistration.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                alert('Data inserted successfully!');
            }
        };
        xhr.send('username=' + encodeURIComponent(username) + '&salt=' + encodeURIComponent(saltHex) + '&hash=' + encodeURIComponent(sha256Hash));
    });
});