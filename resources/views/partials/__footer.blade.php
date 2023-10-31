</body>
<script>
    // displaying errors
    const passwordInput = document.getElementById('password');
    const passwordError = document.getElementById('password-error');
    passwordInput.addEventListener('input', function() {
        const password = passwordInput.value;
        const strongPasswordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W_]).{8,}$/;
        if (!strongPasswordRegex.test(password)) {
            passwordError.style.display = 'block';
        } else {
            passwordError.style.display = 'none';
        }
    });
    // end diplay of errors
</script>

<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function() {
        sidebar.classList.toggle('active');
    };
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById("sidebtn");
        const sidebar = document.getElementById("logo-sidebar");

        toggleButton.addEventListener("click", function() {
            // Toggle the 'hidden' class to show/hide the sidebar
            sidebar.classList.toggle("translate-x-0");
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('user-menu-button');
        const dropdown = document.getElementById('user-dropdown');

        button.addEventListener('click', function() {
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            } else {
                dropdown.style.display = 'block';
            }
        });

        // Close the dropdown when clicking outside of it
        document.addEventListener('click', function(event) {
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.style.display = 'none';
            }
        });
    });
</script>

<script>
    // Initialization for ES Users
    import {
        Modal,
        Ripple,
        initTE,
    } from "tw-elements";

    initTE({
        Modal,
        Ripple
    });
</script>


</html>
