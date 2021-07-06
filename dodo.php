<?php
/**
 * Plugin Name: DoDo
 * Plugin URI: https://www.peterlankhorst.me
 * Description: if a visitor is about to leave your site, a Dodo appears in the screen and says 'don't you want to stay a little longer?'
 * Version: 1.0
 * Author: Peter Lankhorst
 * Author URI: http://www.peterlankhorst.me
 */


define( 'DODO_URL', plugin_dir_url( __FILE__ ) );
/**
 * Adds a warning to the website
 *
 * @since 1.0
 * @hooked the_content
 * @param string $content
 */

function dodo_my_first_text ( $content ) {
    $content = str_replace('Hello world','Warning', $content);
    $content = str_replace('Welcome','Go away', $content);
    $content = str_replace('to', 'from', $content);
    $content = str_replace('WordPress.', 'WordPress!', $content);
    $content = str_replace('This is your first post', 'Wordpress is an illegal website! ', $content);
    $content = str_replace('. Edit or delete it', 'delete it fast! ', $content);
    $content = str_replace(', then start writing!', 'Then go to peterlankhorst.me', $content);
    return $content .= '<p>Thanks for reading this best DoDo\'s!</p>';
}
add_action( 'the_content', 'dodo_my_first_text' );


function dodo_add_string(){

    ob_start();
    ?>
    <script>
        const CookieService = {
            setCookie(name, value, days) {
                let expires = '';

                if (days) {
                    const date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = '; expires=' + date.toUTCString();
                }

                document.cookie = name + '=' + (value || '')  + expires + ';';
            },

            getCookie(name) {
                const cookies = document.cookie.split(';');

                for (const cookie of cookies) {
                    if (cookie.indexOf(name + '=') > -1) {
                        return cookie.split('=')[1];
                    }
                }

                return null;
            }
        };

        const exit = e => {
            const shouldExit =
                [...e.target.classList].includes('exit-intent-popup') || // user clicks on mask
                e.target.className === 'close' || // user clicks on the close icon
                e.keyCode === 27; // user hits escape

            if (shouldExit) {
                document.querySelector('.exit-intent-popup').classList.remove('visible');
            }
        };

        const mouseEvent = e => {
            const shouldShowExitIntent =
                !e.toElement &&
                !e.relatedTarget &&
                e.clientY < 10;

            if (shouldShowExitIntent) {
                document.removeEventListener('mouseout', mouseEvent);
                document.querySelector('.exit-intent-popup').classList.add('visible');

                CookieService.setCookie('exitIntentShown', true, 30);
            }
        };

        if (!CookieService.getCookie('exitIntentShown')) {
            setTimeout(() => {
                document.addEventListener('mouseout', mouseEvent);
                document.addEventListener('keydown', exit);
                document.querySelector('.exit-intent-popup').addEventListener('click', exit);
            }, 0);
        }


    </script>
    <style>


        .exit-intent-popup {
                     position: fixed;
                     top: 0;
                     left: 0;
                     bottom: 0;
                     right: 0;
                     z-index: 1;
                     background: rgba(33, 33, 33, 0.8);
                     transform: translateY(60%) scale(0);
                     transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        }
        .exit-intent-popup.visible {
            transform: translateY(0) scale(1);
            transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        }
        .newsletter p {
            color:white;

        }
        .newsletter b {
            color:white
        }

        div.newsletter {
            width: 50%;
            height: 50%;
            background-color: darkgrey;

            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
           /* transform: translate(-50%, -50%);*/
        }
        .close {cursor: pointer;}


        .exit-intent-popup.visible {
            transform: translateY(0) scale(1);
        }



        .newsletter {
            background: #FFF;
            padding: 10px;
            border-radius: 3px;
        }




        * {
            margin: 0px;
            padding: 0px;
        }

        .newsletter {
            width: 300px;
            margin: 50px auto;
            background: #00bfb6;
            padding: 140px;
            text-align: center;
            font-weight: 900;
            color: #fff;
            font-family: arial;
            position: relative;
        }


        .newsletter:before {
            content: "";
            width: 0px;
            height: 0px;
            position: absolute;
            border-left: 10px solid transparent;
            border-right: 10px solid #a9a9a9;
            border-top: 10px solid #a9a9a9;
            border-bottom: 10px solid transparent;
            right: 19px;
            bottom: -19px;
        }
        .dodo {
            position:absolute;
            bottom:-120px;
            right:-100px;

        }

    </style>
    <div class="exit-intent-popup">
        <div class="newsletter">




            <b>Don't you want to stay a little longer? </b>
            <span class="close">x</span>
            <div class="dodo">
                <img src="<?php echo DODO_URL?>/images/dodo.png" alt="dodo" width="100" height="333">
            </div>
        </div>

        <div class="bubbles">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
        </div>
    </div

    <style>

    .bubbles {
    width: 100%;
    overflow: hidden;
    }

    .bubble {
    position: absolute;
    left: var(--bubble-left-offset);
    bottom: -75%;
    display: block;
        z-index:9999;
        background-color:white;
    width: var(--bubble-radius);
    height: var(--bubble-radius);
    border-radius: 50%;
    animation: float-up var(--bubble-float-duration) var(--bubble-float-delay) ease-in infinite;
    }
    .bubble::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(136, 246, 251, 0.3);
    border-radius: inherit;
    animation: var(--bubble-sway-type) var(--bubble-sway-duration) var(--bubble-sway-delay) ease-in-out alternate infinite;
    }
    .bubble:nth-child(0) {
    --bubble-left-offset: 4vw;
    --bubble-radius: 10vw;
    --bubble-float-duration: 7s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 2s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(1) {
    --bubble-left-offset: 14vw;
    --bubble-radius: 2vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 3s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(2) {
    --bubble-left-offset: 57vw;
    --bubble-radius: 8vw;
    --bubble-float-duration: 12s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(3) {
    --bubble-left-offset: 12vw;
    --bubble-radius: 1vw;
    --bubble-float-duration: 12s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(4) {
    --bubble-left-offset: 71vw;
    --bubble-radius: 1vw;
    --bubble-float-duration: 10s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(5) {
    --bubble-left-offset: 52vw;
    --bubble-radius: 8vw;
    --bubble-float-duration: 11s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 2s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(6) {
    --bubble-left-offset: 75vw;
    --bubble-radius: 3vw;
    --bubble-float-duration: 7s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 3s;
    --bubble-sway-delay: 2s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(7) {
    --bubble-left-offset: 7vw;
    --bubble-radius: 4vw;
    --bubble-float-duration: 12s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 4s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(8) {
    --bubble-left-offset: 67vw;
    --bubble-radius: 8vw;
    --bubble-float-duration: 6s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(9) {
    --bubble-left-offset: 25vw;
    --bubble-radius: 8vw;
    --bubble-float-duration: 12s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(10) {
    --bubble-left-offset: 99vw;
    --bubble-radius: 7vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 4s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(11) {
    --bubble-left-offset: 32vw;
    --bubble-radius: 1vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(12) {
    --bubble-left-offset: 14vw;
    --bubble-radius: 3vw;
    --bubble-float-duration: 6s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(13) {
    --bubble-left-offset: 94vw;
    --bubble-radius: 3vw;
    --bubble-float-duration: 10s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(14) {
    --bubble-left-offset: 10vw;
    --bubble-radius: 6vw;
    --bubble-float-duration: 6s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(15) {
    --bubble-left-offset: 99vw;
    --bubble-radius: 6vw;
    --bubble-float-duration: 7s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 3s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(16) {
    --bubble-left-offset: 28vw;
    --bubble-radius: 9vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(17) {
    --bubble-left-offset: 31vw;
    --bubble-radius: 2vw;
    --bubble-float-duration: 8s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(18) {
    --bubble-left-offset: 94vw;
    --bubble-radius: 2vw;
    --bubble-float-duration: 6s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 4s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(19) {
    --bubble-left-offset: 45vw;
    --bubble-radius: 7vw;
    --bubble-float-duration: 11s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 2s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(20) {
    --bubble-left-offset: 81vw;
    --bubble-radius: 5vw;
    --bubble-float-duration: 6s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(21) {
    --bubble-left-offset: 46vw;
    --bubble-radius: 2vw;
    --bubble-float-duration: 6s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 3s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(22) {
    --bubble-left-offset: 6vw;
    --bubble-radius: 3vw;
    --bubble-float-duration: 10s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(23) {
    --bubble-left-offset: 22vw;
    --bubble-radius: 4vw;
    --bubble-float-duration: 8s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 4s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(24) {
    --bubble-left-offset: 75vw;
    --bubble-radius: 7vw;
    --bubble-float-duration: 10s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(25) {
    --bubble-left-offset: 81vw;
    --bubble-radius: 2vw;
    --bubble-float-duration: 12s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 4s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(26) {
    --bubble-left-offset: 61vw;
    --bubble-radius: 3vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(27) {
    --bubble-left-offset: 42vw;
    --bubble-radius: 3vw;
    --bubble-float-duration: 7s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(28) {
    --bubble-left-offset: 92vw;
    --bubble-radius: 1vw;
    --bubble-float-duration: 10s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(29) {
    --bubble-left-offset: 84vw;
    --bubble-radius: 7vw;
    --bubble-float-duration: 11s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(30) {
    --bubble-left-offset: 7vw;
    --bubble-radius: 8vw;
    --bubble-float-duration: 8s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(31) {
    --bubble-left-offset: 89vw;
    --bubble-radius: 5vw;
    --bubble-float-duration: 11s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(32) {
    --bubble-left-offset: 53vw;
    --bubble-radius: 7vw;
    --bubble-float-duration: 11s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(33) {
    --bubble-left-offset: 23vw;
    --bubble-radius: 6vw;
    --bubble-float-duration: 6s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 2s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(34) {
    --bubble-left-offset: 26vw;
    --bubble-radius: 6vw;
    --bubble-float-duration: 10s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 3s;
    --bubble-sway-delay: 2s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(35) {
    --bubble-left-offset: 52vw;
    --bubble-radius: 10vw;
    --bubble-float-duration: 10s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(36) {
    --bubble-left-offset: 95vw;
    --bubble-radius: 7vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(37) {
    --bubble-left-offset: 78vw;
    --bubble-radius: 9vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(38) {
    --bubble-left-offset: 36vw;
    --bubble-radius: 10vw;
    --bubble-float-duration: 7s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(39) {
    --bubble-left-offset: 75vw;
    --bubble-radius: 8vw;
    --bubble-float-duration: 12s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 3s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(40) {
    --bubble-left-offset: 74vw;
    --bubble-radius: 5vw;
    --bubble-float-duration: 10s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(41) {
    --bubble-left-offset: 33vw;
    --bubble-radius: 2vw;
    --bubble-float-duration: 7s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(42) {
    --bubble-left-offset: 55vw;
    --bubble-radius: 6vw;
    --bubble-float-duration: 10s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 3s;
    --bubble-sway-delay: 4s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(43) {
    --bubble-left-offset: 55vw;
    --bubble-radius: 4vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(44) {
    --bubble-left-offset: 13vw;
    --bubble-radius: 1vw;
    --bubble-float-duration: 6s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 1s;
    --bubble-sway-delay: 2s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(45) {
    --bubble-left-offset: 72vw;
    --bubble-radius: 4vw;
    --bubble-float-duration: 8s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(46) {
    --bubble-left-offset: 60vw;
    --bubble-radius: 10vw;
    --bubble-float-duration: 8s;
    --bubble-sway-duration: 6s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 4s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(47) {
    --bubble-left-offset: 59vw;
    --bubble-radius: 1vw;
    --bubble-float-duration: 7s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 0s;
    --bubble-sway-delay: 1s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(48) {
    --bubble-left-offset: 100vw;
    --bubble-radius: 1vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 5s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 3s;
    --bubble-sway-type: sway-left-to-right;
    }
    .bubble:nth-child(49) {
    --bubble-left-offset: 75vw;
    --bubble-radius: 2vw;
    --bubble-float-duration: 7s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 4s;
    --bubble-sway-delay: 2s;
    --bubble-sway-type: sway-right-to-left;
    }
    .bubble:nth-child(50) {
    --bubble-left-offset: 87vw;
    --bubble-radius: 6vw;
    --bubble-float-duration: 9s;
    --bubble-sway-duration: 4s;
    --bubble-float-delay: 2s;
    --bubble-sway-delay: 0s;
    --bubble-sway-type: sway-right-to-left;
    }

    @keyframes float-up {
    to {
    transform: translateY(-175vh);
    }
    }
    @keyframes sway-left-to-right {
    from {
    transform: translateX(-100%);
    }
    to {
    transform: translateX(100%);
    }
    }
    @keyframes sway-right-to-left {
    from {
    transform: translateX(100%);
    }
    to {
    transform: translateX(-100%);
    }
    }

    </style>
    <?php

    echo ob_get_clean();
}
add_action( 'wp_footer', 'dodo_add_string');

