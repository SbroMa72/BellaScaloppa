//is logged function
function isLogged() {
    if (isset($_SESSION['user'])) {
            return true;
    }
}

//load form function
window.onload = function() {
    fetch('check_login.php')
    .then(response => response.text())
    .then(data => {
        if(data == 'true'){
            window.location.href = '../pages/profile.php';
        }
    });
}
