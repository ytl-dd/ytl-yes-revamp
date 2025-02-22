<?php

// Add WhatsApp icon above footer using wp_footer hook
function add_whatsapp_icon_to_footer() {
    $whatsapp_number = '60183331138'; // Replace with your WhatsApp number
    $whatsapp_message = urlencode('Hello Sofia');
    $whatsapp_icon_url = get_site_url() . '/wp-content/uploads/2024/08/sofia-icon.png';
    ?>
    <style>
        /* Optional: CSS for styling the WhatsApp icon */
        .whatsapp-icon {
            position: fixed;
            bottom: 40px;
            /* top: 0px; */
            margin: 0;
            right: 20px;
            z-index: 9999;
            text-align: right;
            width: 100px;
            height: auto;
        }
        .close-need-help svg {
            height: 35px;
        }
        .close-need-help {
            width: 30px;
            height: 30px;
            background: #fff;
            color: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 16px rgba(0, 0, 0, 0.2);
           margin-left: auto;
           cursor: pointer;
        }
        .icon-textw {
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-radius: 12px;
            margin-top: 10px;
            width: 100%;
            padding: 8px 10px;
            box-shadow: 0 0 16px rgba(0, 0, 0, 0.2);
            max-height: 100px;
            height: auto;
        }
        .icon-textw p {
            margin-top: 0;
            margin-bottom: 7px;
            color: #000;
            font-size: 14px;
            text-align: center;
            font-weight: 500;
        }
        .icon-textw img {
            width: 40px; /* Adjust size as necessary */
        }
    </style>

<div class="whatsapp-icon" id="whatsapp-icon-container">
        <span class="close-need-help" id="close-whatsapp-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/>
            </svg>
        </span>
        
        <a href="https://api.whatsapp.com/send?phone=<?php echo esc_attr($whatsapp_number); ?>&text=<?php echo $whatsapp_message; ?>" target="_blank" rel="noopener">
            <div class="icon-textw">
                <p>Need Help?</p>
                <img src="<?php echo esc_url($whatsapp_icon_url); ?>" alt="WhatsApp">
            </div>
        </a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var closeButton = document.getElementById('close-whatsapp-icon');
            var whatsappIconContainer = document.getElementById('whatsapp-icon-container');

            if (closeButton && whatsappIconContainer) {
                closeButton.addEventListener('click', function() {
                    whatsappIconContainer.style.display = 'none';
                });
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'add_whatsapp_icon_to_footer');

?>
