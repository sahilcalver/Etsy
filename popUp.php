<?php
session_start();

function displayMessage($sessionName, $variant)
{
    if (isset($_SESSION[$sessionName])) {
?>
        <div class='p-5 bottom-0 position-fixed flash-messages text-white' style="right:30%;transform: translateY(200%); opacity:0; transition: all 1s;">
            <div class='card p-4 position-relative' style='background-color: <?php
                                                                                if ($variant == 'red') {
                                                                                    echo "red";
                                                                                } else if ($variant == 'green') {
                                                                                    echo "green";
                                                                                }
                                                                                ?>'>
                <i class='bi bi-x button-close position-absolute end-0 top-0 fs-2 cursor-pointer'></i>
                <h4 class="text-white">Message</h4>
                <p class='text-white'>
                    <?php echo isset($_SESSION[$sessionName]) ? $_SESSION[$sessionName] : ''; ?>
                </p>
                <button class='btn btn-dark button-close'>Okay</button>
            </div>
        </div>
<?php
    }
    unset($_SESSION[$sessionName]);
}
?>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // Select elements
        let message = document.querySelector('.flash-messages');
        let close = document.querySelectorAll('.button-close');

        // Only proceed if the message element exists
        if (message) {
            // Apply initial styles
            setTimeout(() => {
                message.style.transform = 'translateY(-50%)';
                message.style.opacity = '1';
            }, 100);

            // Add event listeners only if the elements exist
            close.forEach((item, index) => {
                item.addEventListener('click', () => {
                    message.style.transform = 'translateY(-300%)';
                    message.style.opacity = '0';
                });
            });
        }
    });
</script>