<?php
  /* Template Name: template-configurator
  * Template Post Type: page, post
  */

  /** test servsion**/
?>

<?php
function add_bootstrap_to_template_configurator() {
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
}
add_action('wp_head', 'add_bootstrap_to_template_configurator');
?>

<!-- Header block -->
<?php get_header(); ?>


<div style="position: relative; margin-top: 94px;">
  <style>
    :root {
    --main-blue: #101f3c;
    --main-white: #f5f5f5;
    --main-light-blue: #bcd3e0;
    --main-gray: #808080;
    --main-black: #2c2c2c;
    --search-bg: #e9f2f8;
    --main-orange: #f1ab86;
    --signin-blue: #2c4862;
    --signin-black: #202020;
    --message-bg: #f7fff6;
    --address-bar-height: 0px;
  }

  body, html {
    height: 100%;
  }

  * {
    -ms-overflow-style: none;
  }

  * {
    scrollbar-width: none;
  }

  *::-webkit-scrollbar {
    display: none;
  }

  /* Reset and base styles  */
  /* ** */
  * {
    padding: 0px;
    margin: 0px;
    border: none;
  }

  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }

  /* Links */
  a,
  a:link,
  a:visited {
    text-decoration: none;
  }

  a:hover {
    text-decoration: none;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    font-size: inherit;
    font-weight: inherit;
  }

  ul,
  ul li {
    list-style: none;
  }

  img {
    vertical-align: top;
  }

  img,
  svg {
    max-width: 100%;
    height: auto;
  }

  address {
    font-style: normal;
  }

  /* Form */

  textarea:active,
  textarea:focus {
    outline: none;
  }

  input,
  textarea,
  button,
  select {
    font-family: inherit;
    font-size: inherit;
    color: inherit;
    background-color: transparent;
  }

  input::-ms-clear {
    display: none;
  }

  button,
  input[type="submit"] {
    display: inline-block;
    box-shadow: none;
    background-color: transparent;
    background: none;
    cursor: pointer;
  }

  input:focus,
  input:active,
  button:focus,
  button:active {
    outline: none;
  }

  button::-moz-focus-inner {
    padding: 0;
    border: 0;
  }

  label {
    cursor: pointer;
  }
  /* ** */

  .hide {
    display: none;
  }

  .active {
    display: block;
  }

  .chet-modal-text {
    color: white;
  }

  .my-nav {
    position: absolute;
    padding: 12px;
    background: rgb(255 255 255 / 80%);
    z-index: 1000;
    left: 50%;
    /* top: 19%; */
    top: 0px;
    transform: translateX(-50%);

    max-width: 100vw;
    margin: 0 auto;
  }

  .padding-top {
    padding-top: 100px;
  }

  @media(max-width: 2000px) {
    .my-nav {
      top: 28px;
    }
  }

  @media(max-width: 1560px) {
    .my-nav {
      top: 0px;
    }
  }

  @media(max-width: 1400px) {
    .my-nav {
      top: 0px;
    }
  }

  @media(max-width: 911px) {
    .my-nav {
      top: 0px;
    }
  }

  @media(max-width: 430px) {
    .my-nav {
      top: 11px;
    }
  }

  @media(max-width: 360px) {
    .my-nav {
      top: 13px;
    }
  }

  #shapeToggle {
    background: transparent;
    border: 2px solid #000;
    border-radius: 0;
    padding: 0;
    cursor: pointer;
    position: relative;
    width: 30px; /* Adjust size as needed */
    height: 30px; /* Adjust size as needed */
    transform: rotate(0deg);
    transition: transform 0.25s ease;
  }

  #shapeToggle::before,
  #shapeToggle::after {
    content: "";
    display: block;
    background: #000;
    position: absolute;
    transition: all 0.25s ease;
  }

  /* X shape */
  #shapeToggle::before,
  #shapeToggle::after {
    left: 3px;
    top: 12px;
    width: 20px;
    height: 2px;
    background: #000;
  }

  #shapeToggle::before {
    transform: rotate(45deg);
  }

  #shapeToggle::after {
    transform: rotate(-45deg);
  }

  /* Windows */
  .about-window {
    margin: 40px 0px 85px 30px;
  }

  @media(max-width: 1024px) {
    .height-100  {
      overflow: scroll;
      height: 100vh;
    }
  }
  
  @media(max-width: 912px) {
    .about-window {
      overflow-y: scroll;
    }

    .faq-window {
      overflow-y: scroll;
    }
  }

  /* Drop Down List */
  .second-nav-drop-down-blackout {
    background: transparent !important;
    position: absolute !important;
  }

  .second-nav-drop-down {
    display: none;

    position: absolute;
    top: 60px;
    right: 30%;
    z-index: 100;

    background: var(--main-white);
    border-radius: 12px;
    padding: 10px 20px;
    width: 146px;
  }

  .second-nav-drop-down.open {
    display: block;
  }

  @media (max-width: 480px) {
    .drop-down__link {
      font-size: 12px;
    }

    .second-nav-drop-down {
      right: 10px;
      top: 50px;
    }
  }

  /* Chat Modal */
  .open-chat-btn {
    cursor: pointer;
    width: 60px;
    height: 49px;

    position: absolute;
    bottom: 16px;
    right: 53px;
    z-index: 2;
  }

  .chat-popup {
    display: none;

    position: absolute;
    bottom: 11px;
    right: 50px;
    z-index: 10;

    border-radius: 16px;
    width: 308px;
    height: 369px;
    border: 16px;
    background: var(--main-light-blue);
  }

  .chat-popup.open {
    display: block;
  }

  .chat-popup__img {
    width: 30px;
    height: 30px;
  }

  .chat-popup-btn {
    width: 14px;
    height: 14px;
  }

  .chat-popup__top {
    width: 308px;
    height: 54px;
    border-top-right-radius: 16px;
    border-top-left-radius: 16px;
    padding: 12px 24px 12px 16px;
    background: var(--signin-blue);
  }

  .chat-popup__messages {
    margin-top: 30px;
    padding: 0px 7px;
  }

  .chat-popup__message_txt {
    color: var(--main-black);
    background: var(--message-bg);
    padding: 16px 10px;
    border-top-right-radius: 24px;
    border-bottom-right-radius: 24px;
    border-bottom-left-radius: 16px;
  }

  .chat-popup__container {
    position: relative;
    min-height: 100%;
  }

  .chat-popup__text {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 294px;
    border-radius: 12px;
    background: var(--main-white);
    padding: 12px 16px;
    margin: 8px 7px;
  }

  .chat-popup__text_input {
    color: var(--main-black);
    position: relative;
  }

  .chat-popup__text_icon {
    position: absolute;
    top: 50%;
    right: 0%;
    transform: translate(-50%, -50%);
  }

  @media (max-width: 900px) {
    .open-chat-btn {
      bottom: 16px;
      right: 25px;
      width: 45px;
      height: 39px;
    }

    .chat-popup {
      bottom: 13px;
      right: 20px;
    }
  }

  /* Sign In */
  .signin {
    display: none;

    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 20;

    width: 860px;
    height: 560px;
    background: var(--main-white);
    border-radius: 24px;
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
    padding: 24px;
  }

  .signin.open {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .signin__title {
    font-weight: 600;
    color: var(--main-black);
  }

  .signin__form_signup-link {
    color: var(--signin-blue);
    font-weight: 600;
  }

  .signin__form_signup {
    color: var(--main-gray);
    font-weight: 600;
  }

  .signin__form_input {
    width: 380px;
    border-radius: 12px;
    border: 1px solid var(--main-blue);
    padding: 16px 24px;
    color: var(--main-black);
  }

  .signin__form_btn {
    width: 380px;
    border-radius: 12px;
    background: var(--main-blue);
    padding: 16px 24px;
  }

  @media (max-width: 480px) {
    .signin {
      width: 450px;
    }
  }

  @media (max-width: 390px) {
    .signin {
      width: 350px;
    }

    .signin__form_input {
      width: 300px;
    }

    .signin__form_btn {
      width: 300px;
    }
  }

  @media (max-width: 360px) {
    .signin {
      width: 330px;
    }
  }

  /* Gallery */
  .gallery {
    margin: 40px 0px 85px 30px;
  }

  .gallery__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, 380px);
    column-gap: 40px;
    row-gap: 40px;
    margin-bottom: 40px;
  }

  .gallery__title {
    font-weight: 600;
    color: var(--main-black);
  }

  .gallery__item {
    height: 383px;
    border-radius: 12px;
    background: var(--main-white);
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
    position: relative;
  }

  .gallery__img {
    width: 100%;
    border-top-right-radius: 12px;
    border-top-left-radius: 12px;
  }

  .gallery__item_title {
    color: var(--main-black);
    font-weight: 600;
  }

  .gallery__cont {
    padding: 0px 24px 24px 24px;
  }

  .gallery__accessors {
    color: var(--main-gray);
  }

  .gallery__accessors_title {
    font-weight: 500;
    color: var(--main-black);
    margin-bottom: 5px;
  }

  .gallery__btn {
    position: absolute;
    bottom: 24px;
    right: 24px;

    border-radius: 500px;
    padding: 10px 20px;
    background: var(--signin-blue);
    color: var(--main-white);
  }

  @media (max-width: 480px) {
    .gallery {
      margin-bottom: 80px;
    }

    .gallery__grid-bottom {
      display: none;
    }

    .gallery__btn {
      font-size: 12px;
    }
  }

  @media (max-width: 390px) {
    .gallery__grid {
      grid-template-columns: repeat(auto-fit, 330px);
    }
  }

  /* Contact */
  .contact {
    margin: 40px 0px 85px 30px;
  }

  .contact__title {
    color: var(--main-black);
  }

  .contact__form_label {
    color: var(--signin-blue);
    font-size: 12px;
  }

  .contact__form_input {
    width: 380px;
    height: 50px;
    padding: 16px;
    border-radius: 12px;
    border: 1px solid var(--signin-blue);
    color: var(--signin-blue);
    font-size: 14px;
    background: rgba(240, 240, 240, 0.2);
  }

  .contact__form_input::placeholder {
    font-size: 14px;
  }

  .contact__form_btn {
    padding: 0px 20px;
    border-radius: 12px;
    height: 37px;
    color: var(--main-white);
    background: var(--signin-blue);
  }

  .contact__form_textarea {
    width: 380px;
    height: 177px;
    padding: 16px;
    border-radius: 12px;
    border: 1px solid var(--signin-blue);
    color: var(--signin-blue);
    background: rgba(240, 240, 240, 0.2);
  }

  .request-blackout {
    display: none;

    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.3);

    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;
  }

  .request-blackout.active {
    display: block;
  }

  .request {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;

    width: 320px;
    height: 200px;
    background: var(--main-white);
    border-radius: 24px;
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
    padding: 24px 24px 30px 24px;
  }

  .request__title {
    color: var(--main-black) !important;
  }

  .request__btn {
    color: var(--signin-blue);
    font-weight: 600;
    background: var(--main-light-blue);
    padding: 10px 16px;
    border-radius: 500px;
  }

  .request__cont {
    margin-top: -10px !important;
  }

  @media (max-width: 480px) {
    .contact {
      margin: 30px 0px 100px 0px;
    }

    .contact__form_input {
      width: 345px;
    }

    .contact__form_textarea {
      width: 345px;
    }
  }

  @media (max-width: 360px) {
    .contact__form_input {
      width: 335px;
    }

    .contact__form_textarea {
      width: 335px;
    }
  }

  /* Profile */
  .profile {
    margin: 40px 0px 85px 30px;
  }

  .profile__title {
    color: var(--main-black);
  }

  .profile__form_label {
    color: var(--signin-blue);
    font-size: 12px;
  }

  .profile__form_input {
    width: 380px;
    height: 50px;
    padding: 16px;
    border-radius: 12px;
    border: 1px solid var(--signin-blue);
    color: var(--signin-blue);
    font-size: 14px;
    background: rgba(240, 240, 240, 0.2);
  }

  .profile__form_input::placeholder {
    font-size: 14px;
  }

  .profile__form_btn {
    padding: 0px 20px;
    border-radius: 12px;
    height: 37px;
  }

  .profile__form-cansel {
    border: 1px solid var(--signin-blue);
    color: var(--signin-blue);
  }

  .profile__form-save {
    color: var(--main-white);
    background: var(--signin-blue);
  }

  @media (max-width: 480px) {
    .profile {
      margin: 30px 0px 100px 0px;
    }

    .profile__form_input {
      width: 345px;
    }
  }

  @media (max-width: 360px) {
    .profile__form_input {
      width: 335px;
    }
  }

  /* Faq */
  .faq {
    margin: 40px 0px 85px 30px;
  }

  .faq__title {
    color: var(--main-black);
  }

  .faq__section_title {
    color: var(--signin-blue);
    font-weight: 500;
  }

  .faq__section_desc {
    max-width: 720px;
    color: var(--signin-blue);
  }

  @media (max-width: 480px) {
    .faq {
      margin: 30px 0px 100px 0px;
    }
  }

  /* Scene */
  .loading-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.9);
    z-index: 1000;

    display: none;
    justify-content: center;
    align-items: center;
  }

  .open-main-window {
    display: flex;
    align-items: center;
  }

  .loader {
    border: 8px solid #f3f3f3;
    border-top: 8px solid #3498db;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  .camera-view {
    max-width: 1200px;
    margin: 60px auto;
    overflow: scroll;
    padding-top: 50px;

    display: none;
    justify-content: center;
    grid-template-columns: repeat(auto-fit, 372px);
    column-gap: 30px;
    row-gap: 30px;
  }

  @media (max-width: 1280px) {
    .camera-view {
      max-width: 1000px;
    }
  }

  @media (max-width: 912px) {
    .camera-view {
      overflow-y: scroll;
      height: 100vh;
      margin-bottom: 20px;
    }

    .camera__item:last-child {
      margin-bottom: 100px;
    }
  }

  .camera__item {
    padding: 6px 6px 9px 6px;
    background: #dbdbdb;
    border-radius: 6px;
  }

  .camera__item_img {
    width: 360px;
    height: 196px;
  }

  .camera__item_txt {
    margin-right: auto;
    margin-top: 10px;
    font-size: 12px;
    color: var(--main-black);
  }

  .camera-view.active {
    display: grid;
  }

  .view-scene.hide {
    display: none;
  }

  @media(max-width: 912px) {
    .scene {
      height: var(--address-bar-height) !important;
    } 
  }

  .scene {
    width: 100vw;
    /* height: 100vh; */
    height: var(--address-bar-height)
    overflow: hidden;
    position: relative;
  }

  .order__container,
  .slidecontainer {
    transition: bottom 0.3s;
  }

  .my-cont {
    position: relative;
    width: 100vw;
    /* height: 100vh; */
    height: var(--address-bar-height);
    overflow-y: scroll;
  }

  .f-panzoom {
    width: 100vw;
    position: relative;
  }

  .f-panzoom::before {
    content: "";
    display: block;
    padding-top: 56.25%;
  }

  .f-panzoom__content {
    width: 100%;
    height: 100%;

    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .scene__bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .foreground {
    display: none;
    pointer-events: none;
    width: 100%;
    height: 100%;

    position: absolute;
    top: 0;
    left: 0;
    z-index: 25;
  }

  .foreground.active {
    display: block;
  }

  /* Slider Zoom */
  .slider__container {
    max-width: 1320px;
    margin-left: auto;
    position: relative;
  }

  .slidecontainer {
    position: absolute;
    bottom: 20px;
    z-index: 25;
    left: 70%;
    transform: translate(-70%, 0%);

    display: flex;
    align-items: center;
    z-index: 40;
  }

  .zoom-btn {
    width: 50px;
    height: 40px;
    background-color: #bec2c6;
  }

  .zoom-btn:not(:last-child) {
    border-right: 1px solid #8c8c8c;
  }

  .slider {
    -webkit-appearance: none;
    width: 100%;
    height: 15px;
    border-radius: 5px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: 0.2s;
    transition: opacity 0.2s;
  }

  .slider:hover {
    opacity: 1;
  }

  .slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: white;
    cursor: pointer;
  }

  .slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #4caf50;
    cursor: pointer;
  }

  .popup-blackout {
    display: none;

    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.3);

    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
  }

  .popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 20;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;

    width: 328px;
    height: 211px;
    padding: 20px;
    border-radius: 12px;
    background: rgba(245, 245, 245, 0.95);
    box-shadow: 0px 4px 18px 0px rgba(154, 141, 141, 0.1);
  }

  .popup-blackout.active {
    display: block;
  }

  .close-popup {
    margin-left: auto;
  }

  @media (max-width: 912px) {
    .f-panzoom {
      width: 100vw;
      height: 100vh;
      position: relative;
      overflow: scroll;
    }

    .f-panzoom__content {
      width: 1600px;
      height: 900px;
    }

    .f-panzoom::before {
      content: "";
      display: none;
      padding-top: 0;
    }

    .scene__bg {
      width: 1600px;
      height: 900px;
    }

    .slidecontainer {
      display: none;
    }

    .popup-txt {
      font-weight: 500;
      font-size: 16px;
      color: var(--main-black);
      margin-top: -10px;
    }
  }

  /** Options */
  .options-container {
    position: absolute;
    top: 15%;
    left: -80px;
    row-gap: 20px;
    z-index: 10;
    transition: all 0.3s ease;

    display: none;
    align-items: flex-start;
  }

  .options-container.open {
    left: 0;
  }

  .options-mobile {
    display: flex;
    flex-direction: column;
    align-items: center;
    row-gap: 20px;

    background: rgba(245, 245, 245, 0.8);
    border-bottom-right-radius: 12px;
    padding: 20px;
  }

  .options {
    display: flex;
    flex-direction: column;
    align-items: center;
    row-gap: 20px;

    background: rgba(245, 245, 245, 0.8);
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
    padding: 20px;

    position: absolute;
    top: 20%;
    left: 0;
    z-index: 10;
    transition: all 0.3s ease;
  }

  @media (max-width: 1280px) {
    .options {
      top: 10%;
      transform: translate(0%, 10%);
    }
  }

  @media (max-width: 900px) {
    .options {
      display: none;
    }

    .options-container {
      display: flex;
    }
  }

  .options__btn:hover,
  .options__btn:focus {
    background: #bcc3c9;
    transition: all 0.3s ease;
  }

  .options__btn {
    width: 40px;
    height: 40px;
    border-radius: 7px;
  }

  /* Tips */
  .options__tip {
    position: absolute;
    top: 5%;
    left: 170%;
    z-index: 1;

    background: var(--main-black);
    border-radius: 12px 12px 12px 0px;
    padding: 6px 12px;
    box-shadow: 0px 4px 4px 0px rgba(63, 63, 63, 0.25);
    color: white !important;

    display: none;
    align-items: center;
    justify-content: center;
  }

  .options__tip span {
    font-size: 12px;
    font-weight: 500;
  }

  .options__tip.active {
    display: flex;
  }

  .tip-save.active {
    display: flex;
  }

  .tip-3d.active {
    display: flex;
    width: 100px;
  }

  @media (max-width: 912px) {
    .options__tip {
      display: none !important;
    }
  }

  /* Options */

  .floating-div {
    z-index: 100;
    position: fixed;
    bottom: 0;
    right: 10px;
  }

  .btnff {
    background: red;
    padding: 10px;
  }

  /** Order */
  .order__container {
    position: relative;
    max-width: 1320px;
    height: auto;
    margin: 0 auto;
  }

  .cont {
    position: relative;
  }

  .order__menu {
    display: flex;
    align-items: center;
    justify-content: space-between;

    position: absolute;
    bottom: 20px;
    left: 0;

    width: 240px;
    border-radius: 500px;
    background: var(--main-white);
    padding: 6px 10px 6px 22px;
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
    z-index: 100;
  }

  @media (max-width: 851px) {
    .order__btn {
      margin-left: 18%;
    }
  }

  @media (max-width: 912px) {
    .order__menu {
      width: 226px;
    }

    .order__btn {
      padding: 7px 18px;
      font-size: 13px;
    }
  }

  @media (max-width: 430px) {
    .order__menu {
      bottom: 32px;
    }
  }

  .order__list.open {
    display: flex;
  }

  .order__list {
    display: none;

    position: absolute;
    bottom: 85px;
    left: 0;
    z-index: 30;
    transition: all 0.5s ease;

    flex-direction: column;
    row-gap: 10px;

    width: 222px;
    border-radius: 12px;
    padding: 12px 30px 12px 24px;
    background: var(--main-white);
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
  }

  @media (max-width: 1280px) {
    .order__menu {
      left: 100px;
    }

    .order__list {
      left: 100px;
    }
  }

  @media (max-width: 912px) {
    .order__menu {
      width: 240px;
    }

    .order__list {
      left: 33%;
      width: 208px;
      transform: translate(-50%, 0%);
    }
  }

  @media (max-width: 540px) {
    .order__menu {
      width: 240px;
    }

    .order__list {
      left: 40%;
      width: 208px;
      transform: translate(-50%, 0%);
    }
  }

  @media (max-width: 500px) {
    .order__menu {
      width: 240px;
    }

    .order__list {
      left: 50%;
      width: 208px;
      transform: translate(-50%, 0%);
    }
  }

  .order__count {
    font-weight: 600;
    color: var(--signin-blue);
  }

  .order__btn {
    font-weight: 600;
    border-radius: 53px;
    background: var(--main-orange);
    padding: 10px 24px;
    color: var(--signin-blue);
  }

  .move-up {
    margin-bottom: 4px;
  }

  .move-up.down {
    transform: rotate(180deg);
    transition: all 0.3s ease;
  }

  .order__item_title {
    color: var(--main-black);
    font-weight: 600;
    margin-bottom: 5px;
  }

  .order__item_price {
    color: var(--main-black);
  }

  @media (max-width: 850px) {
    .order__list {
      width: 205px;
    }

    .order__item_title {
      font-size: 14px;
    }

    .order__item_price {
      font-size: 14px;
    }

    .order__count {
      font-size: 14px;
    }

    .order__btn {
      font-size: 14px;
    }

    .order__list-empty {
      font-size: 14px;
    }

    .options {
      padding: 10px 15px;
      row-gap: 15px;
    }
  }

  .move-down {
    display: none;
  }

  /* Order */

  /** Custom */
  .custom {
    display: flex;
    align-items: start;

    position: absolute;
    top: 15%;
    right: -354px;
    z-index: 40;
    transition: all 0.3s ease;
  }

  @media (max-width: 1280px) {
    .custom {
      top: 10%;
    }
  }

  .custom.open {
    right: 0px;
  }

  .custom__items {
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease;

    width: 354px;
    padding: 22px;
    border-bottom-left-radius: 12px;
    background: rgba(245, 245, 245, 0.8);
    row-gap: 16px;
  }

  @media (max-width: 412px) {
    .custom.open {
      right: -40px;
    }

    .custom__block {
      width: 280px;
    }

    .custom__item {
      width: 280px !important;
    }
  }

  .custom__item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;

    width: 310px;
    border-radius: 12px;
    padding-right: 30px;
    background: var(--main-white);
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
  }

  .custom__item_title {
    color: var(--main-black);
  }

  .custom__img {
    width: 80px;
    height: 60px;
    border-radius: 12px;
  }

  .custom__item_img {
    width: 80px;
    height: 80px;
  }

  .custom-drop-list {
    display: none;
  }

  .custom-drop-list.open {
    display: block;
    overflow: scroll;
    background: rgba(0, 0, 0, 0.1);
    height: 180px;
    border-radius: 12px;
  }

  .custom-item-remove {
    display: none;
    width: 100%;
    padding: 10px;
    text-align: center;
    background: #f18686;
    color: white;
  }

  .custom-item-remove.active {
    display: block;
  }

  .drop-list-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(2, 1fr);
    column-gap: 20px;
    row-gap: 20px;
    padding: 20px;
  }

  .custom-item-btn {
    transition: all 0.3s ease;
  }

  .custom-item-btn.open {
    transition: all 0.3s ease;
    transform: rotate(90deg);
  }

  .bar-stool-img {
    display: none;
  }

  .lamp-img {
    display: none;
  }

  .kitchen-red-lamp {
    display: none;
  }

  .foreground-black.active {
    display: block;
  }

  .foreground-black-view2.active {
    display: block;
  }

  .foreground-red.active {
    display: block;
  }

  .fartuk-img {
    display: none;
  }

  .portuquet-img {
    display: none;
  }

  .portuquets.opacity {
    opacity: 0;
  }
  /* TODO: Soleve this code in js */

  .object-visible {
    pointer-events: none;
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 2;
  }

  /* Custom */

  /** Share Modal */
  .share-modal {
    width: 622px;
    height: 368px;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 999;

    padding: 24px;
    border-radius: 24px;
    background: var(--main-white);
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
  }

  .share__text {
    color: #202020 !important;
  }

  .share-modal__items {
    display: flex;
    justify-content: space-between;
    /* column-gap: 25px; */

    margin-top: -40px;
    width: 370px;
    padding: 20px 16px 20px 20px;
    border-radius: 12px;
    background: #f0f0f0;
  }

  @media (max-width: 912px) {
    .share-modal {
      width: 450px;
    }

    .share-modal__items {
      width: 330px;
    }
  }

  @media (max-width: 412px) {
    .share-modal {
      width: 350px;
    }

    .share-modal__items {
      width: 300px;
    }

    .share-modal__items img {
      column-gap: 15px;
      width: 40px;
      height: 40px;
    }
  }

  .share-modal__items_title {
    font-weight: 600;
    color: var(--signin-blue) !important;
  }

  .share-modal__item_title {
    color: var(--main-black);
    font-size: 12px;
  }

  .close-share-modal {
    font-weight: 600;
    color: var(--signin-blue);
  }

  .share-blackout {
    display: none;

    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.3);

    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
  }

  .share-blackout.active {
    display: block;
  }

  /* Share Modal */

  /** Saved Modal */
  .saved-modal-empty {
    width: 400px;
    height: 300px;

    display: none;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 20;

    padding: 24px;
    border-radius: 24px;
    background: var(--main-white);
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
  }

  .saved-modal-empty.active {
    display: flex;
  }

  .saved-modal {
    width: 500px;

    display: none;
    flex-direction: column;

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 20;

    padding: 24px;
    border-radius: 24px;
    background: var(--main-white);
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
  }

  @media (max-width: 412px) {
    .saved-modal-empty {
      width: 300px;
    }

    .saved-modal {
      width: 300px !important;
    }
  }

  .saved-modal-container {
    height: 350px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
  }

  @media (max-width: 912px) {
    .saved-modal {
      width: 400px;
    }
  }

  .saved-modal.active {
    display: flex;
  }

  .saved-modal__items {
    row-gap: 20px;
  }

  .saved-modal__item {
    max-width: 539px;
  }

  .saved-modal__items_title {
    font-weight: 600;
    color: var(--main-black) !important;
  }

  .saved-modal__item-price {
    font-weight: 400;
    color: var(--main-gray);
  }

  .saved-modal__item_title {
    color: #202020 !important;
    font-weight: 500;
  }

  .saved-modal__item_desc {
    color: var(--main-gray);
  }

  .check-out-saved-modal {
    padding: 10px 15px;
    border-radius: 12px;
    background: var(--signin-blue);
  }

  .close-saved-modal {
    font-weight: 600;
    color: var(--signin-blue);
  }

  .saved-blackout {
    display: none;

    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.3);

    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
  }

  .saved-blackout.active {
    display: block;
  }

  .saved-modal-empty {
    color: var(--main-black);
  }

  /* Saved Modal */

  /** Download Modal */
  .download-modal {
    display: none;
    flex-direction: column;
    row-gap: 15px;

    position: absolute;
    top: 43%;
    left: 112%;
    z-index: 9999;

    background: #f0f0f0;
    box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.05);
    border-radius: 13px;

    width: 132px;
    height: 74px;
    padding: 10px 20px;
  }

  @media (max-width: 912px) {
    .download-modal {
      left: 83%;
    }
  }

  .download-modal.active {
    display: flex;
  }

  .download-modal__btn {
    font-size: 12px;
    font-weight: 500;
    color: var(--main-black);
  }

  .download-blackout {
    display: none;

    width: 100vw;
    height: 100vh;
    background: transparent;

    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
  }

  .download-blackout.active {
    display: block;
  }

  /* Download Modal */

  /** Masks */
  /* TODO: Soleve this code in js */
  .kitchen-mask {
    display: none;
  }

  .kitchenBlackMasks.active {
    display: block;
  }

  .kitchen-red-masks.active {
    display: block;
  }

  .kitchen-white-masks.active {
    display: block;
  }

  .kitchen-view1 {
    display: none;
  }

  .kitchen-view2 {
    display: none;
  }

  .kitchen-view3 {
    display: none;
  }

  .kitchen-view1.active {
    display: block;
  }

  .kitchen-view2.active {
    display: block;
  }

  .kitchen-view3.active {
    display: block;
  }

  .kitchen-white-view3.active {
    display: block;
  }

  .kitchen-black-masks.active {
    display: block;
  }

  .kitchen-red-masks.active {
    display: block;
  }

  .kitchen-white-masks.active {
    display: block;
  }
  /* TODO: Soleve this code in js */

  .pointer {
    pointer-events: none;
  }

  .masks-container {
    width: 100vw;
    height: 100vh;
  }

  .kitchen-white-view3-chairs {
    width: 30%;
    height: 44%;
    background: transparent;
    position: absolute;
    bottom: 0;
    right: 38.5%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view3-floor1 {
    width: 31.5%;
    height: 33%;
    background: transparent;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view3-floor2 {
    width: 14.5%;
    height: 15%;
    background: transparent;
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view2-floor1 {
    width: 40.5%;
    height: 18%;
    background: transparent;
    position: absolute;
    bottom: 0;
    left: 18%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view2-floor2 {
    width: 17.5%;
    height: 18%;
    background: transparent;
    position: absolute;
    bottom: 13%;
    left: 32%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view1-chairs {
    width: 25.5%;
    height: 37.5%;
    background: transparent;
    position: absolute;
    bottom: 0;
    left: 40.5%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view1-floor1 {
    width: 40.5%;
    height: 18%;
    background: transparent;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view1-floor2 {
    width: 16%;
    height: 21%;
    background: transparent;
    position: absolute;
    bottom: 8%;
    left: 0;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view1-floor3 {
    width: 9%;
    height: 33%;
    background: transparent;
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view1-floor4 {
    width: 23.5%;
    height: 18%;
    background: transparent;
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-white-view1-lamps {
    width: 32.5%;
    height: 59%;
    background: transparent;
    position: absolute;
    top: 0;
    left: 39.5%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-red-view3-wall {
    width: 67.5%;
    height: 42%;
    background: transparent;
    position: absolute;
    top: 34%;
    left: 7%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-red-view2-wall {
    width: 33.5%;
    height: 22%;
    background: transparent;
    position: absolute;
    top: 46%;
    left: 31.5%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-red-view2-lamps {
    width: 86%;
    height: 46%;
    background: transparent;
    position: absolute;
    top: 0;
    left: 5.5%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-red-view1-wall {
    width: 22%;
    height: 14.5%;
    background: transparent;
    position: absolute;
    top: 47%;
    left: 39%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-red-view1-floor1 {
    width: 100%;
    height: 21%;
    background: transparent;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-red-view1-lamps {
    width: 57%;
    height: 46.5%;
    background: transparent;
    position: absolute;
    top: 0;
    left: 21.5%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view3-wall {
    width: 66%;
    height: 27%;
    background: transparent;
    position: absolute;
    top: 44%;
    left: 0;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view3-chairs {
    width: 54.5%;
    height: 17%;
    background: transparent;
    position: absolute;
    bottom: 0;
    left: 30%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view3-lamps {
    width: 66%;
    height: 44%;
    background: transparent;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view2-wall {
    width: 34%;
    height: 17%;
    background: transparent;
    position: absolute;
    top: 47%;
    left: 18.5%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view2-chairs {
    width: 13.5%;
    height: 25%;
    background: transparent;
    position: absolute;
    top: 63%;
    left: 64%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view2-floor1 {
    width: 33%;
    height: 12%;
    background: transparent;
    position: absolute;
    bottom: 0%;
    left: 0%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view2-floor2 {
    width: 22.5%;
    height: 34%;
    background: transparent;
    position: absolute;
    bottom: 0%;
    right: 0%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view2-lamps {
    width: 44%;
    height: 47%;
    background: transparent;
    position: absolute;
    top: 0;
    right: 37.5%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view1-wall {
    width: 39%;
    height: 15%;
    background: transparent;
    position: absolute;
    top: 48%;
    left: 30.5%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view1-chairs {
    width: 24%;
    height: 20%;
    background: transparent;
    position: absolute;
    top: 66%;
    left: 56%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view1-floor1 {
    width: 17%;
    height: 20%;

    background: transparent;
    position: absolute;
    bottom: 0%;
    left: 0%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view1-floor2 {
    width: 15%;
    height: 34%;

    background: transparent;
    position: absolute;
    bottom: 0%;
    right: 0%;
    z-index: 1;
    cursor: pointer;
  }

  .kitchen-black-view1-lamps {
    width: 55%;
    height: 47%;
    background: transparent;
    position: absolute;
    top: 0;
    right: 22%;
    z-index: 1;
    cursor: pointer;
  }

  .mask {
    pointer-events: none;
    width: 100%;
    height: 100%;
    transition: all 0.2s ease;
    display: none;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 20;
  }

  /* TODO: Soleve this code in js */
  .mask-wall-panels.active {
    display: block;
  }

  .mask-chairs.active {
    display: block;
  }

  .mask-floor.active {
    display: block;
  }

  .mask-lamps.active {
    display: block;
  }

  * {
    -ms-overflow-style: none;
  }

  * {
    scrollbar-width: none;
  }

  *::-webkit-scrollbar {
    display: none;
  }

  .container-xxl {
    position: relative !important;
  }

  .mynav {
    z-index: 3;
  }

  main {
    margin-top: auto;
    margin-bottom: auto;
    align-items: center;
  }

  footer {
    margin-top: auto;
    z-index: 2;
  }

  /** Swiper */
  .main-cont {
    width: 100vw;
    position: relative;
  }

  .main-cont::before {
    content: "";
    display: block;
    padding-top: var(--address-bar-height);
  }

  @media(max-width: 580px) {

  }

  .carousel__img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  @media (max-width: 912px) {
    .main-cont {
      width: 100vw;
      position: relative;
    }

    .carousel__img {
      height: var(--address-bar-height)
    }

    .main-cont::before {
      content: "";
      display: block;
      padding-top: 0;
    }

    .carousel__img {
      position: static;
      top: 0;
      left: 0;
      width: 100vw;
      object-fit: cover;
    }
  }

  @media(max-width: 540px) {
    /* .carousel__img {
      height: 88vh !important;
    } */
  }

  .swiper-button-next {
    bottom: 50% !important;
    transform: translate(-50%, 0%) !important;
  }

  .swiper-button-prev {
    bottom: 50% !important;
    transform: translate(-50%, 0%) !important;
  }

  .swiper-button-next:after,
  .swiper-button-prev:after {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 64px;
    height: 54px;
    padding: 20px;
    border-radius: 100%;
    font-size: 24px !important;
    background: var(--main-white);
  }

  @media (max-width: 1000px) {
    .swiper-button-next:after,
    .swiper-button-prev:after {
      width: 40px;
      height: 40px;
      font-size: 16px !important;
    }
  }

  .swiper-button-next:after {
    margin-right: 50px;
  }

  .swiper-button-prev:after {
    margin-left: 50px;
  }

  @media (max-width: 900px) {
    .swiper-button-next:after {
      margin-right: 10px !important;
    }
  }

  .swiper-btn {
    width: 64px;
    height: 64px;
  }

  .swiper-pagination {
    display: none !important;
    height: 10px !important;
  }

  .swiper-pagination-bullet {
    background: var(--main-white) !important;
  }

  .swiper-pagination-bullet-active {
    width: 24px !important;
    border-radius: 6px !important;
    background: var(--main-white);
  }

  @media (max-width: 576px) {
    .swiper-button-next,
    .swiper-button-prev {
      display: none !important;
    }

    .swiper-pagination {
      display: block !important;

      top: 70px !important;
    }
  }

  /* Swiper */

  /** Carousel */
  .carousel {
    margin: 11px 0px;
  }

  .carousel__title {
    pointer-events: none;
    position: absolute;
    bottom: 50px;
    left: 60px;
    z-index: 2;
    color: white !important;

    font-weight: 500;
  }

  @media(max-width: 570px) {
    .carousel__title {
      bottom: 140px;
    }

  }

  .carousel__title-mobile {
    display: none;
  }

  .carousel__btn-start {
    background: var(--main-white) !important;
  }

  .carousel__btn {
    display: none;

    color: var(--signin-blue);
    font-size: 14px;
    font-weight: 600;
    padding: 10px 24px;
    border-radius: 500px;
    background: var(--main-light-blue);

    position: absolute;
    bottom: 80px;
    left: 50%;
    transform: translate(-50%, 0%);
  }

  @media (max-width: 576px) {
    .carousel__title {
      /* top: 30px; */
      left: 50%;

      transform: translate(-50%, 0%);
    }

    .carousel__btn {
      display: block;
    }
  }

  /* Carousel */

  /** Blackout */
  .blackout {
    display: none;

    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.3);

    position: fixed;
    top: 0;
    left: 0;
    z-index: 3;
  }

  .blackout.active {
    display: block;
  }

  .second-blackout {
    display: none;

    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.3);

    position: fixed;
    top: 0;
    left: 0;
    z-index: 3;
  }

  .second-blackout.active {
    display: block;
  }

  /* Blackout */

  /** Blackout White */
  .blackout-white {
    display: none;

    width: 100vw;
    height: 100vh;
    background: rgba(245, 245, 245, 0.5);

    position: fixed;
    top: 0;
    left: 0;
    z-index: 2;
  }

  .blackout-white.active {
    display: block;
  }

  /* Blackout White */

  /** Navbar */
  .mynav {
    background: var(--main-blue);
    padding: 22px 0px 22px 0px !important;
  }

  .mynav__input {
    width: 540px;
    height: 40px;
    margin-right: 10px;
    padding: 11px 20px 11px 52px;
    border-radius: 12px;
    border: none;
    background: var(--search-bg);
    color: var(--main-black);
  }

  @media (max-width: 912px) {
    .mynav__input {
      width: 400px;
    }
  }

  .mynav__search-icon {
    position: absolute;
    top: 0;
    left: 20px;
    transform: translate(-50%, 50%);
  }

  .mynav__input::before {
    content: "";

    width: 18px;
    height: 18px;

    display: block;

    position: absolute;
    top: 0;
    left: 0;
    background-image: url("../img/icons/search.svg");
    background-repeat: no-repeat;
  }

  .mynav__list {
    column-gap: 20px;
    margin-top: 0px !important;
  }

  .mynav__brand {
    color: var(--main-white) !important;
  }

  .mynav__link {
    color: var(--main-white) !important;
    font-size: 14px;
    font-weight: 600;
  }

  .mynav__btn {
    padding: 10px 20px;
  }

  .mynav__btn-login {
    border: 1px solid var(--main-white);
    border-radius: 12px;
    background: transparent;
    color: var(--main-white);
  }

  .mynav__btn-signup {
    border: none;
    border-radius: 12px;
    background: var(--main-white);
    color: var(--main-blue);
  }

  @media (max-width: 991px) {
    .mynav {
      padding: 10px 0px 10px 0px !important;
    }

    .mynav__link {
      font-size: 12px !important;
    }

    .mynav__input {
      width: 345px;
    }

    .mynav__list {
      padding: 15px 0px;
      row-gap: 15px;
    }
  }

  @media (max-width: 360px) {
    .mynav__input {
      width: 330px;
    }
  }

  /* NavBar */

  /** Second Nav */
  .second-nav {
    height: 40px;
    display: flex;
    align-items: center;
    box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.05);
  }

  .second-nav-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .second-nav__list {
    display: flex;
    align-items: center;
    column-gap: 20px;
    margin-bottom: 0px;
  }

  .second-nav__logo {
    color: black;
    font-weight: 600;
    font-size: 16px;
    margin-left: 5px;
  }

  .second-nav__link {
    color: black;
    font-weight: 600;
    font-size: 16px;
  }

  .second-nav__icon {
    width: 16px;
    height: 16px;
  }

  @media (max-width: 480px) {
    .second-nav__link {
      font-size: 16px;
    }

    .second-nav__logo {
      font-size: 16px;
    }
  }

  /* Second Nav */

  /** Drop Down List */
  .drop-down-blackout {
    background: transparent !important;
    position: absolute !important;
  }

  .mynav-drop-down {
    display: none;

    position: absolute;
    top: -65px;
    right: 40px;
    z-index: 20;

    background: var(--main-white);
    border-radius: 12px;
    padding: 10px 20px;
    width: 146px;
  }

  .drop-down__link {
    color: var(--main-black) !important;
  }

  @media (max-width: 480px) {
    .drop-down__link {
      font-size: 12px;
    }

    .mynav-drop-down {
      top: -45px;
      right: 30px;
      width: 120px;
    }
  }

  .main {
    height: 100%;
    margin-top: 0px;
  }

  @media(max-width: 912px) {
    .main {
    height: auto;
    }
  }

  </style>

  <!-- Navbar -->
  <nav class="my-nav margin">
      <div class="second-nav-container">
      <div>
      <button class="open-main-window">
        <div id="shapeToggle" class="back-btn hide arrow"></div>
        <span class="second-nav__logo">Logo</span>
      </button>

      <button class="close-scene-window hide">
        <div id="shapeToggle" class="back-btn arrow"></div>
      </button>
      </div>

      <div>
      <ul class="second-nav__list">
          <li class="second-nav__item">
          <button class="open-about-window second-nav__link">About us</button>
          </li>

          <li class="second-nav__item">
          <button class="open-contact-window second-nav__link">
              Contact Us
          </button>
          </li>

          <li class="second-nav__item">
          <button class="second-nav__link second-nav-btn">User info</button>
          </li>
      </ul>
      </div>
      </div>

      <!-- Drop Down List -->
      <div class="second-blackout second-nav-drop-down-blackout">
      <div class="container-xxl">
          <div class="second-nav-drop-down">
          <ul class="navbar-nav">
              <li class="nav-item">
              <button
                  class="drop-down-btn open-gallery-window drop-down__link nav-link mb-1"
              >
                  My gallery
              </button>
              </li>

              <li class="nav-item">
              <button
                  class="drop-down-btn open-profile-window drop-down__link nav-link mb-1"
              >
                  Profile
              </button>
              </li>

              <li class="nav-item">
              <button
                  class="drop-down-btn open-faq-window drop-down__link nav-link mb-1"
              >
                  FAQ
              </button>
              </li>

              <li class="nav-item">
              <button class="drop-down-btn drop-down__link nav-link mb-1">
                  Log out
              </button>
              </li>
          </ul>
          </div>
      </div>
      </div>
  </nav>

  <!-- Content -->
  <div class="main">
      <!-- Blackout -->
      <div class="blackout-white"></div>

      <!-- Main Window -->
      <div class="main-window">
      <!-- Carousel -->
      <div class="carousel swiper mySwiper">
          <div class="swiper-wrapper">
          <div class="swiper-slide">
              <div class="main-cont">
              <h1 class="carousel__title carousel__title-mobile h1">
                  Black Kitchen
              </h1>

              <button
                  class="open-scene-window kitchen-scene"
                  data-scene="kitchen-black"
              >
                  <picture>
                  <source
                      data-scene="kitchen-black"
                      srcset="<?php echo get_template_directory_uri(); ?>/template-configurator/img/main-black-mobile.jpg"
                      media="(max-width: 912px)"
                  />
                  <img
                      data-scene="kitchen-black"
                      class="carousel__img kitchen-img"
                      src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/kitchen-black/View1/Jpeg/Final.jpg"
                      alt="kitchen-black"
                  />
                  </picture>
              </button>

              <div class="container-xxl">
                  <h1 class="carousel__title h1">Black Kitchen</h1>
                  <button
                  class="carousel__btn carousel__btn-start kitchen-scene"
                  data-scene="kitchen-black"
                  >
                  Get started
                  </button>
              </div>
              </div>
          </div>

          <div class="swiper-slide">
              <div class="main-cont">
              <h1 class="carousel__title carousel__title-mobile h1">
                  Red Kitchen
              </h1>

              <button
                  class="open-scene-window kitchen-scene"
                  data-scene="kitchen-red"
              >
                  <picture>
                  <source
                      data-scene="kitchen-red"
                      srcset="<?php echo get_template_directory_uri(); ?>/template-configurator/img/main-red-mobile.jpg
                      media="(max-width: 912px)"
                  />
                  <img
                      data-scene="kitchen-red"
                      class="carousel__img kitchen-img"
                      src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/kitchen-red/View1/Jpeg/Final.jpg"
                      alt="kitchen-red"
                  />
                  </picture>
              </button>

              <div class="container-xxl">
                  <h1 class="carousel__title h1">Red Kitchen</h1>
                  <button
                  class="carousel__btn carousel__btn-start kitchen-scene"
                  data-scene="kitchen-red"
                  >
                  Get started
                  </button>
              </div>
              </div>
          </div>

          <div class="swiper-slide">
              <div class="main-cont">
              <h1 class="carousel__title carousel__title-mobile h1">
                  White Kitchen
              </h1>

              <button
                  class="open-scene-window kitchen-scene"
                  data-scene="kitchen-white"
              >
                  <picture>
                  <source
                      data-scene="kitchen-white"
                      srcset="<?php echo get_template_directory_uri(); ?>/template-configurator/img/main-white-mobile.jpg
                      media="(max-width: 912px)"
                  />
                  <img
                      data-scene="kitchen-white"
                      class="carousel__img kitchen-img"
                      src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/kitchen-white/View1/Jpeg/Final.jpg"
                      alt="kitchen-gray"
                  />
                  </picture>
              </button>

              <div class="container-xxl">
                  <h1 class="carousel__title h1">White Kitchen</h1>
                  <button
                  class="carousel__btn carousel__btn-start kitchen-scene"
                  data-scene="kitchen-white"
                  >
                  Get started
                  </button>
              </div>
              </div>
          </div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
      </div>
      </div>

      <!-- About Window -->
      <div class="height-100 about-window padding-top hide">
      <div class="about">
          <div class="container-xxl">
          <h2 class="about__title h2 mb-5">About us</h2>

          <div class="about__section mb-4 d-flex flex-column">
              <h4 class="about__section_title h4">
              Lorem ipsum dolor sit amet consectetur?
              </h4>
              <p class="about__section_desc">
              Lorem ipsum dolor sit amet consectetur. Eu placerat ullamcorper
              ac non et sem ut proin. Volutpat ut sit a ut. Etiam arcu
              accumsan lobortis facilisis et. Interdum pulvinar cursus aenean
              ac fusce neque. Dignissim eget egestas non tellus mollis
              pulvinar ultricies mus. Iaculis aliquet dignissim ut diam ut et.
              Nibh commodo mattis dui nulla est pharetra a dictumst faucibus.
              Integer id erat vitae lacinia orci cursus lorem vestibulum
              bibendum. At auctor neque morbi posuere. Et ac turpis placerat
              ultricies egestas consectetur. Sed pellentesque enim sit
              sagittis malesuada viverra pellentesque urna vulputate.
              </p>
          </div>

          <div class="about__section mb-4 d-flex flex-column">
              <h4 class="about__section_title h4">
              Lorem ipsum dolor sit amet consectetur?
              </h4>
              <p class="about__section_desc">
              Lorem ipsum dolor sit amet consectetur. Eu placerat ullamcorper
              ac non et sem ut proin. Volutpat ut sit a ut. Etiam arcu
              accumsan lobortis facilisis et. Interdum pulvinar cursus aenean
              ac fusce neque. Dignissim eget egestas non tellus mollis
              pulvinar ultricies mus. Iaculis aliquet dignissim ut diam ut et.
              Nibh commodo mattis dui nulla est pharetra a dictumst faucibus.
              Integer id erat vitae lacinia orci cursus lorem vestibulum
              bibendum. At auctor neque morbi posuere. Et ac turpis placerat
              ultricies egestas consectetur. Sed pellentesque enim sit
              sagittis malesuada viverra pellentesque urna vulputate.
              </p>
          </div>

          <div class="about__section mb-4 d-flex flex-column">
              <h4 class="about__section_title h4">
              Lorem ipsum dolor sit amet consectetur?
              </h4>
              <p class="about__section_desc">
              Lorem ipsum dolor sit amet consectetur. Eu placerat ullamcorper
              ac non et sem ut proin. Volutpat ut sit a ut. Etiam arcu
              accumsan lobortis facilisis et. Interdum pulvinar cursus aenean
              ac fusce neque. Dignissim eget egestas non tellus mollis
              pulvinar ultricies mus. Iaculis aliquet dignissim ut diam ut et.
              Nibh commodo mattis dui nulla est pharetra a dictumst faucibus.
              Integer id erat vitae lacinia orci cursus lorem vestibulum
              bibendum. At auctor neque morbi posuere. Et ac turpis placerat
              ultricies egestas consectetur. Sed pellentesque enim sit
              sagittis malesuada viverra pellentesque urna vulputate.
              </p>
          </div>

          <div class="about__section mb-4 d-flex flex-column">
              <h4 class="about__section_title h4">
              Lorem ipsum dolor sit amet consectetur?
              </h4>
              <p class="about__section_desc">
              Lorem ipsum dolor sit amet consectetur. Sed etiam egestas
              phasellus in gravida. Varius fermentum non accumsan duis tellus.
              Volutpat nunc donec leo odio in tellus integer. Habitant mauris
              diam et lectus at. Facilisis lacus dui magna ornare enim in
              massa. Porta lorem enim eu turpis viverra ultrices malesuada
              diam. Elementum tincidunt aliquet blandit convallis.
              </p>
          </div>
          </div>
      </div>
      </div>

      <!-- Contact Window -->
      <div class="height-100 contact-window padding-top hide">
      <!-- Contact -->
      <div style="padding-top: 0px; padding-bottom: 0px;" class="contact">
          <div class="container-xxl">
          <h2 class="contact__title h2 mb-5">Contacts us</h2>

          <form class="contact__form">
              <div class="contact__form_top d-flex flex-column mb-4">
              <label class="contact__form_label mb-2">Title</label>
              <input
                  class="contact__form_input"
                  type="text"
                  placeholder="Title"
              />
              </div>

              <div class="contact__form_center d-flex flex-column mb-4">
              <label class="contact__form_label mb-2">Question</label>
              <textarea
                  class="contact__form_textarea"
                  cols="10"
                  rows="10"
                  placeholder="How can i..."
              ></textarea>
              </div>

              <div class="contact__form_center d-flex flex-column mb-5">
              <label class="contact__form_label mb-2">Contacts</label>
              <input
                  class="contact__form_input"
                  type="number"
                  placeholder="+1"
              />
              </div>

              <div class="contact__form_bottom d-flex">
              <button class="contact__form_btn contact-form-send-btn">
                  Send
              </button>
              </div>
          </form>
          </div>
      </div>

      <!-- Request is sent -->
      <div class="request-blackout">
          <div class="request">
          <button class="request-close-btn ms-auto mb-auto">
              <img src="<?php echo get_template_directory_uri(); ?>template-configurator/img/icons/Cancel.svg" alt="cansel" />
          </button>

          <div class="request__cont d-flex flex-column align-items-center">
              <h4 class="request__title h4 mb-4">Your request is sent</h4>
              <button class="request__btn request-close-btn">Got it</button>
          </div>
          </div>
      </div>
      </div>

      <!-- Gallery Window -->
      <div class="height-100 gallery-window padding-top hide">
      <div class="gallery">
          <div class="container-xxl">
          <h2 class="gallery__title h2 mb-4">My Gallery</h2>

          <div class="gallery__grid">
              <div class="gallery__item">
              <img
                  class="gallery__img mb-2"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/galarry1.jpg"
                  alt="Bath"
              />

              <div class="gallery__cont">
                  <h3 class="gallery__item_title mb-3">Bath</h3>

                  <div class="gallery__desc d-flex flex-column">
                  <span class="gallery__accessors">1x something</span>
                  <span class="gallery__accessors">2x something</span>
                  <span class="gallery__accessors">1x something + light</span>
                  </div>

                  <button class="gallery__btn">Check out</button>
              </div>
              </div>
          </div>
          </div>
      </div>
      </div>

      <!-- Profile Window -->
      <div class="height-100 profile-window padding-top hide">
      <div class="profile">
          <div class="container-xxl">
          <h2 class="profile__title h2 mb-5">Profile settings</h2>

          <form class="profile__form">
              <div class="profile__form_top d-flex flex-column mb-5">
              <label class="profile__form_label mb-2">Name</label>
              <input
                  class="profile__form_input mb-4"
                  type="text"
                  placeholder="John"
              />

              <label class="profile__form_label mb-2">Email</label>
              <input
                  class="profile__form_input"
                  type="email"
                  placeholder="fantom@gmail.com"
              />
              </div>

              <div class="profile__form_center d-flex flex-column mb-5">
              <label class="profile__form_label mb-2">Change password</label>
              <input
                  class="profile__form_input mb-4"
                  type="text"
                  placeholder="New password"
              />
              <input
                  class="profile__form_input"
                  type="text"
                  placeholder="Confirm password"
              />
              </div>

              <div class="profile__form_bottom d-flex">
              <button class="profile__form_btn me-3 profile__form-cansel">
                  Cansel
              </button>
              <button class="profile__form_btn profile__form-save">
                  Save changes
              </button>
              </div>
          </form>
          </div>
      </div>
      </div>

      <!-- FAQ Window-->
      <div class="height-100 faq-window padding-top hide">
      <div class="faq">
          <div class="container-xxl">
          <h2 class="faq__title h2 mb-5">FAQ</h2>

          <div class="faq__section mb-4 d-flex flex-column">
              <h4 class="faq__section_title h4">
              Lorem ipsum dolor sit amet consectetur?
              </h4>
              <p class="faq__section_desc">
              Lorem ipsum dolor sit amet consectetur. Risus enim etiam viverra
              leo pretium. Rhoncus nunc integer consequat ac molestie id nibh
              ullamcorper diam. Sit eu in sagittis turpis ac proin dolor
              mauris amet.
              </p>
          </div>

          <div class="faq__section mb-4 d-flex flex-column">
              <h4 class="faq__section_title h4">
              Lorem ipsum dolor sit amet consectetur?
              </h4>
              <p class="faq__section_desc">
              Lorem ipsum dolor sit amet consectetur. Odio sed velit lorem et.
              Risus in diam sed pellentesque non ut placerat massa. Nunc donec
              diam phasellus in pulvinar facilisis cras. Hac commodo quisque
              dignissim nascetur rhoncus ac habitant diam. Augue scelerisque
              consequat fusce cum.
              </p>
          </div>

          <div class="faq__section mb-4 d-flex flex-column">
              <h4 class="faq__section_title h4">
              Lorem ipsum dolor sit amet consectetur?
              </h4>
              <p class="faq__section_desc">
              Lorem ipsum dolor sit amet consectetur. Ut et urna a amet at
              mattis odio. Nec non ultricies velit donec libero viverra urna.
              </p>
          </div>

          <div class="faq__section mb-4 d-flex flex-column">
              <h4 class="faq__section_title h4">
              Lorem ipsum dolor sit amet consectetur?
              </h4>
              <p class="faq__section_desc">
              Lorem ipsum dolor sit amet consectetur. Sed etiam egestas
              phasellus in gravida. Varius fermentum non accumsan duis tellus.
              Volutpat nunc donec leo odio in tellus integer. Habitant mauris
              diam et lectus at. Facilisis lacus dui magna ornare enim in
              massa. Porta lorem enim eu turpis viverra ultrices malesuada
              diam. Elementum tincidunt aliquet blandit convallis.
              </p>
          </div>
          </div>
      </div>
      </div>

      <!-- Loading Modal -->
      <div id="loadingModal" class="loading-modal" style="display: none">
      <div class="loader"></div>
      </div>

      <!-- Scene Window -->
      <div class="scene-window hide">
      <div class="scene">
          <!-- Camera View -->
          <div class="camera-view">
          <button class="camera__item d-flex flex-column" data-view="View1">
              <img
              data-view="View1"
              class="camera__item_img view1"
              src=""
              alt=""
              />
              <span class="camera__item_txt">View 1</span>
          </button>

          <button class="camera__item d-flex flex-column" data-view="View2">
              <img
              data-view="View2"
              class="camera__item_img view2"
              src=""
              alt=""
              />
              <span class="camera__item_txt">View 2</span>
          </button>

          <button class="camera__item d-flex flex-column" data-view="View3">
              <img
              data-view="View3"
              class="camera__item_img view3"
              src=""
              alt=""
              />
              <span class="camera__item_txt">View 3</span>
          </button>
          </div>

          <!-- Scene Image / Masks / Objects -->
          <div class="view-scene">
          <!-- Popup Notify -->
          <div class="popup-blackout">
              <div class="popup">
              <button class="close-popup">
                  <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Cancel.svg" alt="" />
              </button>

              <span class="popup-txt">Swipe to move</span>
              <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Swipe-Icon.svg" alt="" />
              </div>
          </div>

          <!-- Panzoom / Scene images -->
          <div class="my-cont">
              <div class="f-panzoom">
              <div class="f-panzoom__content" id="myPanzoom">
                  <!-- Backogrund img -->
                  <img
                  usemap="#image-map"
                  id="scene-img"
                  class="loading-jpg scene__bg"
                  src=""
                  />

                  <!-- Foreground -->
                  <img
                  class="loading-jpg foreground foreground-black"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/kitchen-black/View1/Png/Foreground.png"
                  alt=""
                  />
                  <img
                  id="foreground-black-view2"
                  class="loading-jpg foreground foreground-black-view2"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/kitchen-black/View2/Png/Foreground.png"
                  alt=""
                  />
                  <img
                  class="loading-jpg foreground foreground-red"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/kitchen-red/View1/Png/Table.png"
                  alt=""
                  />
                  <img
                  class="loading-jpg foreground foreground-red-view2"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/kitchen-red/View2/Png/Table.png"
                  alt=""
                  />

                  <!-- Object Images -->
                  <div class="object__images">
                  <!-- Floor -->
                  <div class="portuquets">
                      <img
                      class="loading-jpg portuquet-img"
                      src=""
                      data-object="parquet1"
                      data-product="Parquet 1"
                      data-price="100"
                      data-remove="floor"
                      alt=""
                      />
                      <img
                      class="loading-jpg portuquet-img"
                      src=""
                      data-object="parquet2"
                      data-product="Parquet 2"
                      data-price="200"
                      data-remove="floor"
                      alt=""
                      />
                      <img
                      class="loading-jpg portuquet-img"
                      src=""
                      data-object="parquet3"
                      data-product="Parquet 3"
                      data-price="300"
                      data-remove="floor"
                      alt=""
                      />
                      <img
                      class="loading-jpg portuquet-img"
                      src=""
                      data-object="parquet4"
                      data-product="Parquet 4"
                      data-price="400"
                      data-remove="floor"
                      alt=""
                      />
                      <img
                      class="loading-jpg portuquet-img"
                      src=""
                      data-object="parquet5"
                      data-product="Parquet 5"
                      data-price="500"
                      data-remove="floor"
                      alt=""
                      />
                  </div>

                  <!-- Wall Patterns -->
                  <div class="fartuks">
                      <img
                      class="loading-jpg fartuk-img"
                      data-object="fartuk1"
                      data-product="Fartuk 1"
                      data-remove="wall-pattern"
                      data-price="100"
                      src=""
                      alt="Fartuk"
                      />

                      <img
                      class="loading-jpg fartuk-img"
                      data-object="fartuk2"
                      data-product="Fartuk 2"
                      data-remove="wall-pattern"
                      data-price="200"
                      src=""
                      alt="Fartuk"
                      />

                      <img
                      class="loading-jpg fartuk-img"
                      data-object="fartuk3"
                      data-product="Fartuk 3"
                      data-remove="wall-patternor"
                      data-price="300"
                      src=""
                      alt="Fartuk"
                      />
                  </div>

                  <!-- Chairs -->
                  <div class="bar-stools">
                      <img
                      class="loading-jpg bar-stool-img"
                      data-price="100"
                      data-product="BarStool1"
                      data-object="BarStool1"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                      <img
                      class="loading-jpg bar-stool-img"
                      data-price="200"
                      data-product="BarStool2"
                      data-object="BarStool2"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                      <img
                      class="loading-jpg bar-stool-img"
                      data-price="300"
                      data-product="BarStool3"
                      data-object="BarStool3"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                      <img
                      class="loading-jpg bar-stool-img"
                      data-price="400"
                      data-product="BarStool4"
                      data-object="BarStool4"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                      <img
                      class="loading-jpg bar-stool-img"
                      data-price="500"
                      data-product="BarStool5"
                      data-object="BarStool5"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                      <img
                      class="loading-jpg bar-stool-img"
                      data-price="300"
                      data-product="BarStool6"
                      data-object="BarStool6"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                  </div>

                  <!-- Lamps -->
                  <div class="lamps">
                      <img
                      class="loading-jpg lamp-img"
                      data-price="100"
                      data-product="lamp1"
                      data-object="Lamp1"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                      <img
                      class="loading-jpg lamp-img"
                      data-price="200"
                      data-product="lamp2"
                      data-object="Lamp2"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                      <img
                      class="loading-jpg lamp-img"
                      data-price="300"
                      data-product="lamp3"
                      data-object="Lamp3"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                      <img
                      class="loading-jpg lamp-img"
                      data-price="400"
                      data-product="lamp4"
                      data-object="Lamp4"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                      <!-- kitchen-white-lamp -->
                      <img
                      class="loading-jpg lamp-img"
                      data-price="500"
                      data-product="Lamp5"
                      data-object="Lamp5"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                      <!-- kitchen-red-lamp -->
                      <img
                      class="loading-jpg lamp-img"
                      data-price="600"
                      data-product="Lamp6"
                      data-object="Lamp6"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                  </div>
                  </div>

                  <!-- Masks -->
                  <div class="masks-container">
                  <!-- Kithcen Black -->
                  <div
                      id="kitchen-black-masks"
                      class="kitchen-mask kitchen-black-masks"
                  >
                      <!-- View 1 -->
                      <div class="kitchen-view1 active">
                      <div
                          class="mask_btn kitchen-black-view1-wall"
                          data-mask="wall-pattern"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view1-chairs"
                          data-mask="chairs"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view1-floor1"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view1-floor2"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view1-lamps"
                          data-mask="lamps"
                      ></div>
                      </div>

                      <!-- View 2 -->
                      <div class="kitchen-view2">
                      <div
                          class="mask_btn kitchen-black-view2-wall"
                          data-mask="wall-pattern"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view2-chairs"
                          data-mask="chairs"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view2-floor1"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view2-floor2"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view2-lamps"
                          data-mask="lamps"
                      ></div>
                      </div>

                      <!-- View 3 -->
                      <div class="kitchen-view3">
                      <div
                          class="mask_btn kitchen-black-view3-wall"
                          data-mask="wall-pattern"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view3-chairs"
                          data-mask="chairs"
                      ></div>
                      <div
                          class="mask_btn kitchen-black-view3-lamps"
                          data-mask="lamps"
                      ></div>
                      </div>
                  </div>

                  <!-- Kitchen Red -->
                  <div
                      id="kitchen-red-masks"
                      class="kitchen-mask kitchen-red-masks"
                  >
                      <!-- View 1 -->
                      <div class="kitchen-view1 active">
                      <div
                          class="mask_btn kitchen-red-view1-wall"
                          data-mask="wall-pattern"
                      ></div>
                      >
                      <div
                          class="mask_btn kitchen-red-view1-floor1"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-red-view1-lamps"
                          data-mask="lamps"
                      ></div>
                      </div>

                      <!-- View 2 -->
                      <div class="kitchen-view2">
                      <div
                          class="mask_btn kitchen-red-view2-wall"
                          data-mask="wall-pattern"
                      ></div>
                      <div
                          class="mask_btn kitchen-red-view2-lamps"
                          data-mask="lamps"
                      ></div>
                      </div>

                      <!-- View 3 -->
                      <div class="kitchen-view3">
                      <div
                          class="mask_btn kitchen-red-view3-wall"
                          data-mask="wall-pattern"
                      ></div>
                      </div>
                  </div>

                  <!-- Kitchen White -->
                  <div
                      id="kitchen-white-masks"
                      class="kitchen-mask kitchen-white-masks"
                  >
                      <!-- View 1 -->
                      <div class="kitchen-view1 active">
                      <div
                          class="mask_btn kitchen-white-view1-chairs"
                          data-mask="chairs"
                      ></div>
                      <div
                          class="mask_btn kitchen-white-view1-floor1"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-white-view1-floor2"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-white-view1-floor3"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-white-view1-floor4"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-white-view1-lamps"
                          data-mask="lamps"
                      ></div>
                      </div>

                      <!-- View 2 -->
                      <div class="kitchen-view2">
                      <div
                          class="mask_btn kitchen-white-view2-floor1"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-white-view2-floor2"
                          data-mask="floor"
                      ></div>
                      </div>

                      <!-- View 3 -->
                      <div class="kitchen-view3">
                      <div
                          class="mask_btn kitchen-white-view3-chairs"
                          data-mask="chairs"
                      ></div>
                      <div
                          class="mask_btn kitchen-white-view3-floor1"
                          data-mask="floor"
                      ></div>
                      <div
                          class="mask_btn kitchen-white-view3-floor2"
                          data-mask="floor"
                      ></div>
                      </div>
                  </div>

                  <!-- Mask Wall panels -->
                  <img
                      class="mask mask-wall-panels"
                      data-mask="wall-pattern"
                      src=""
                      alt="wall-panels"
                  />
                  <!-- Mask Chairs -->
                  <img
                      class="mask mask-chairs"
                      data-mask="chairs"
                      src=""
                      alt="chairs"
                  />
                  <!-- Mask Floor -->
                  <img
                      class="mask mask-floor"
                      data-mask="floor"
                      src=""
                      alt="floor"
                  />
                  <!-- Mask Lamps -->
                  <img
                      class="mask mask-lamps"
                      data-mask="lamps"
                      src=""
                      alt="floor"
                  />
                  </div>
              </div>
              </div>

              <!-- Order Menu -->
              <div class="container-xxl">
              <div class="order__container">
                  <div class="order__menu">
                  <button class="move-up">
                      <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/move-up.svg" alt="move-up" />
                  </button>
                  <span class="order__count ms-2">0 item</span>
                  <button class="order__btn">Order</button>
                  </div>

                  <div class="order__list"></div>
              </div>

              <!-- Zoom in / Zoom out -->
              <div class="slidecontainer">
                  <button class="zoom-btn" id="zoomOutButton">-</button>
                  <button class="zoom-btn" id="zoomInButton">+</button>
              </div>
              </div>
          </div>
          </div>

          <!-- Custom Menu -->
          <div class="custom d-flex align-items-start">
          <button class="custom-btn">
              <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Pencil.svg" alt="" />
          </button>

          <div class="custom__items">
              <!-- Wall panels -->
              <div id="wall-pattern" class="custom__block">
              <!-- Custom Item -->
              <div class="custom__item">
                  <img
                  class="custom__item_img"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/kitchen-black/Detailed/Wall.jpg"
                  alt="Wall panels"
                  />
                  <span class="custom__item_title">Wall panels</span>

                  <button class="custom-item-btn" data-mask="wall-pattern">
                  <img
                      data-item="wall-pattern"
                      src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/open-custom.svg"
                      alt=""
                  />
                  </button>
              </div>

              <!-- Custom Drop List -->
              <div
                  class="custom-drop-list"
                  data-item="wall-pattern"
                  data-mask="wall-pattern"
              >
                  <button class="custom-item-remove" data-remove="wall-pattern">
                  Remove
                  </button>

                  <div class="drop-list-container">
                  <button class="load-jpg object-fartuk-btn">
                      <img
                      class="custom__img custom-fartuk"
                      data-object="fartuk1"
                      data-remove="wall-pattern"
                      src=""
                      alt="Wall panels"
                      />
                  </button>

                  <button class="load-jpg object-fartuk-btn">
                      <img
                      class="custom__img custom-fartuk"
                      data-object="fartuk2"
                      data-remove="wall-pattern"
                      src=""
                      alt="Wall panels"
                      />
                  </button>

                  <button class="load-jpg object-fartuk-btn">
                      <img
                      class="custom__img custom-fartuk"
                      data-object="fartuk3"
                      data-remove="wall-pattern"
                      src=""
                      alt="Wall panels"
                      />
                  </button>
                  </div>
              </div>
              </div>

              <!-- Floor covering -->
              <div id="floor" class="custom__block">
              <!-- Custom Item -->
              <div class="custom__item">
                  <img
                  class="custom__item_img floor-custom-img"
                  src=""
                  alt=""
                  />
                  <span class="custom__item_title">Floor covering</span>

                  <button class="custom-item-btn" data-mask="floor">
                  <img
                      data-item="floor"
                      data-mask="floor"
                      src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/open-custom.svg"
                      alt=""
                  />
                  </button>
              </div>

              <!-- Custom Drop List -->
              <div
                  class="custom-drop-list"
                  data-item="floor"
                  data-mask="floor"
              >
                  <button class="custom-item-remove" data-remove="floor">
                  Remove
                  </button>

                  <div class="drop-list-container">
                  <button class="load-jpg object-parquet-btn">
                      <img
                      class="custom__img custom-parquet"
                      data-object="parquet1"
                      data-remove="floor"
                      src=""
                      alt="Floor"
                      />
                  </button>

                  <button class="load-jpg object-parquet-btn">
                      <img
                      class="custom__img custom-parquet"
                      data-object="parquet2"
                      data-remove="floor"
                      src=""
                      alt="Floor"
                      />
                  </button>

                  <button class="load-jpg object-parquet-btn">
                      <img
                      class="custom__img custom-parquet"
                      data-object="parquet3"
                      data-remove="floor"
                      src=""
                      alt="Floor"
                      />
                  </button>

                  <button class="load-jpg object-parquet-btn">
                      <img
                      class="custom__img custom-parquet"
                      data-object="parquet4"
                      data-remove="floor"
                      src=""
                      alt="Floor"
                      />
                  </button>

                  <button class="load-jpg object-parquet-btn">
                      <img
                      class="custom__img custom-parquet"
                      data-object="parquet5"
                      data-remove="floor"
                      src=""
                      alt="Floor"
                      />
                  </button>
                  </div>
              </div>
              </div>

              <!-- Chairs -->
              <div id="chair" class="custom__block">
              <!-- Custom Item -->
              <div class="custom__item">
                  <img
                  class="custom__item_img custom-chairs-img"
                  src=""
                  alt="Chairs"
                  />
                  <span class="custom__item_title">Chairs</span>

                  <button class="custom-item-btn" data-mask="chairs">
                  <img
                      data-item="chairs"
                      src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/open-custom.svg"
                      alt=""
                  />
                  </button>
              </div>

              <!-- Objects -->
              <div
                  class="custom-drop-list"
                  data-item="chairs"
                  data-mask="chairs"
              >
                  <button class="custom-item-remove" data-remove="chairs">
                  Remove
                  </button>

                  <div class="drop-list-container">
                  <button class="load-jpg object-bar-stool-btn">
                      <img
                      class="load-jpg-img custom__img custom-chair"
                      data-mask="chairs"
                      data-object="BarStool1"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                  </button>

                  <button class="load-jpg object-bar-stool-btn">
                      <img
                      class="load-jpg-img custom__img custom-chair"
                      data-mask="chairs"
                      data-object="BarStool2"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                  </button>

                  <button class="load-jpg object-bar-stool-btn">
                      <img
                      class="load-jpg-img custom__img custom-chair"
                      data-mask="chairs"
                      data-object="BarStool3"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                  </button>

                  <button class="load-jpg object-bar-stool-btn">
                      <img
                      class="load-jpg-img custom__img custom-chair"
                      data-mask="chairs"
                      data-object="BarStool4"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                  </button>

                  <button class="load-jpg object-bar-stool-btn">
                      <img
                      class="load-jpg-img custom__img custom-chair"
                      data-mask="chairs"
                      data-object="BarStool5"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                  </button>

                  <button class="load-jpg object-bar-stool-btn">
                      <img
                      class="load-jpg-img custom__img custom-chair kitchen-white-chair"
                      data-mask="chairs"
                      data-object="BarStool6"
                      data-remove="chairs"
                      src=""
                      alt="Chair"
                      />
                  </button>
                  </div>
              </div>
              </div>

              <!-- Lamps -->
              <div id="lamp" class="custom__block">
              <!-- Custom Item -->
              <div class="custom__item">
                  <img
                  class="custom__item_img custom-lamps-img"
                  src=""
                  alt=""
                  />
                  <span class="custom__item_title">Lamps</span>

                  <button class="custom-item-btn" data-mask="lamps">
                  <img
                      data-item="lamps"
                      data-mask="lamps"
                      src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/open-custom.svg"
                      alt=""
                  />
                  </button>
              </div>

              <!-- Objects -->
              <div
                  class="custom-drop-list"
                  data-item="lamps"
                  data-mask="lamps"
              >
                  <button
                  class="load-jpg-img custom-item-remove"
                  data-remove="lamps"
                  >
                  Remove
                  </button>

                  <div class="drop-list-container">
                  <button class="load-jpg object-lamp-btn">
                      <img
                      class="load-jpg-img custom__img custom-lamp"
                      data-mask="lamps"
                      data-object="Lamp1"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                  </button>

                  <button class="load-jpg object-lamp-btn">
                      <img
                      class="load-jpg-img custom__img custom-lamp"
                      data-mask="lamps"
                      data-object="Lamp2"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                  </button>

                  <button class="load-jpg object-lamp-btn">
                      <img
                      class="load-jpg-img custom__img custom-lamp"
                      data-mask="lamps"
                      data-object="Lamp3"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                  </button>

                  <button class="load-jpg object-lamp-btn">
                      <img
                      class="load-jpg-img custom__img custom-lamp"
                      data-mask="lamps"
                      data-object="Lamp4"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                  </button>

                  <button class="load-jpg object-lamp-btn kitchen-white-lamp">
                      <img
                      class="load-jpg-img custom__img custom-lamp"
                      data-mask="lamps"
                      data-object="Lamp5"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                  </button>

                  <button class="load-jpg object-lamp-btn kitchen-red-lamp">
                      <img
                      class="load-jpg-img custom__img custom-lamp"
                      data-mask="lamps"
                      data-object="Lamp6"
                      data-remove="lamps"
                      src=""
                      alt="Lamp"
                      />
                  </button>
                  </div>
              </div>
              </div>
          </div>
          </div>

          <!-- Options Desktop -->
          <div class="options">
          <!-- Save -->
          <button
              class="options__btn options-btn-save position-relative"
              data-tip="save"
          >
              <img
              data-tip="save"
              class="options__btn-img"
              src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Heart.svg"
              alt="Save"
              />

              <!-- Tip Save -->
              <div data-tip="save" class="options__tip tip-save">
              <span>Save</span>
              </div>
          </button>

          <!-- Camera View -->
          <button
              class="options__btn options-btn-3d position-relative"
              data-tip="3d"
          >
              <img data-tip="3d" src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Rotation.svg" alt="3D View" />

              <!-- Tip 3D View -->
              <div data-tip="3d" class="options__tip tip-3d">
              <span>Camera view</span>
              </div>
          </button>

          <!-- Download -->
          <button
              class="options__btn options-btn-download position-relative"
              data-tip="download"
          >
              <img
              data-tip="download"
              src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Download.svg"
              alt="Download"
              />

              <!-- Tip Download -->
              <div data-tip="download" class="options__tip tip-download">
              <span>Download</span>
              </div>
          </button>

          <!-- Download Modal -->
          <div class="download-blackout" data-modal="download"></div>
          <div class="download-modal">
              <button class="download-modal__btn download-modal-png me-auto">
              PNG
              </button>
              <button class="download-modal__btn download-modal-jpg me-auto">
              PDF
              </button>
          </div>

          <!-- Print -->
          <button
              class="options__btn options-btn-print position-relative"
              data-tip="print"
          >
              <img data-tip="print" src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Printer.svg" alt="Print" />

              <!-- Tip Print -->
              <div data-tip="print" class="options__tip tip-print">
              <span>Print</span>
              </div>
          </button>

          <!-- Share -->
          <button
              class="options__btn options-btn-share position-relative"
              data-tip="share"
          >
              <img data-tip="share" src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Share.svg" alt="Share" />

              <!-- Tip Share -->
              <div data-tip="share" class="options__tip tip-share">
              <span>Share</span>
              </div>
          </button>
          </div>

          <!-- Options Mobile -->
          <div class="options-container">
          <div class="options-mobile">
              <!-- Save -->
              <button
              class="options__btn options-btn-save position-relative"
              data-tip="save"
              >
              <img
                  data-tip="save"
                  class="options__btn-img"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Heart.svg"
                  alt="Save"
              />

              <!-- Tip Save -->
              <div data-tip="save" class="options__tip tip-save">
                  <span>Save</span>
              </div>
              </button>

              <!-- Camera View -->
              <button
              class="options__btn options-btn-3d position-relative"
              data-tip="3d"
              >
              <img
                  data-tip="3d"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Rotation.svg"
                  alt="3D View"
              />

              <!-- Tip 3D View -->
              <div data-tip="3d" class="options__tip tip-3d">
                  <span>Camera view</span>
              </div>
              </button>

              <!-- Download -->
              <button
              class="options__btn options-btn-download position-relative"
              data-tip="download"
              >
              <img
                  data-tip="download"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Download.svg"
                  alt="Download"
              />

              <!-- Tip Download -->
              <div data-tip="download" class="options__tip tip-download">
                  <span>Download</span>
              </div>
              </button>

              <!-- Download Modal -->
              <div class="download-blackout" data-modal="download"></div>
              <div class="download-modal">
              <button class="download-modal__btn download-modal-png me-auto">
                  PNG
              </button>
              <button class="download-modal__btn download-modal-jpg me-auto">
                  PDF
              </button>
              </div>

              <!-- Print -->
              <button
              class="options__btn options-btn-print position-relative"
              data-tip="print"
              >
              <img
                  data-tip="print"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Printer.svg"
                  alt="Print"
              />

              <!-- Tip Print -->
              <div data-tip="print" class="options__tip tip-print">
                  <span>Print</span>
              </div>
              </button>

              <!-- Share -->
              <button
              class="options__btn options-btn-share position-relative"
              data-tip="share"
              >
              <img data-tip="share" src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Share.svg" alt="Share" />

              <!-- Tip Share -->
              <div data-tip="share" class="options__tip tip-share">
                  <span>Share</span>
              </div>
              </button>
          </div>

          <button class="open-options-btn">
              <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/open-options-btn.svg" alt="" />
          </button>
          </div>

          <!-- Saved Modal -->
          <div class="saved-blackout" data-modal="saved">
          <div class="saved-modal">
              <button class="close-saved-modal ms-auto mb-4">
              <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Cancel.svg" alt="Cancel" />
              </button>

              <div class="saved-modal-container">
              <h4 class="saved-modal__items_title h4">Saved to My gallery</h4>

              <div class="saved-modal__items d-flex flex-column"></div>

              <div class="saved-modal__items d-flex flex-column">
                  <div class="d-flex me-auto mt-2">
                  <button class="check-out-saved-modal mb-2 me-3">
                      Check out
                  </button>
                  <button class="close-saved-modal mb-2">Back</button>
                  </div>
              </div>
              </div>
          </div>

          <!-- Empty Modal -->
          <div class="saved-modal-empty">
              <button class="close-saved-modal ms-auto">
              <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Cancel.svg" alt="Cancel" />
              </button>

              <h4 class="saved-modal__items_title mt-3 h4">
              No products to save
              </h4>
              <button class="close-saved-modal mb-2">Back</button>
          </div>
          </div>

          <!-- Share Modal -->
          <div class="share-blackout" data-modal="share">
          <div class="share-modal">
              <button class="close-share-modal ms-auto">
              <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Cancel.svg" alt="Cancel" />
              </button>

              <h4 class="share-modal__items_title h4 mb-4">Share to</h4>

              <div class="share-modal__items">
              <div
                  class="share-modal__item d-flex flex-column align-items-center"
              >
                  <a href="#!">
                  <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Whatsapp.svg" alt="Whatsapp" />
                  </a>

                  <span class="share-modal__item_title mt-2">WhatsApp</span>
              </div>

              <div
                  class="share-modal__item d-flex flex-column align-items-center"
              >
                  <a href="#!">
                  <img src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Facebook.svg" alt="Facbook" />
                  </a>

                  <span class="share-modal__item_title mt-2">Facebook</span>
              </div>

              <div
                  class="share-modal__item d-flex flex-column align-items-center"
              >
                  <a href="#!">
                  <img
                      src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/gmail-pr.svg"
                      width="48px"
                      heihgt="48px"
                      alt="Email"
                  />
                  </a>

                  <span class="share-modal__item_title mt-2">Email</span>
              </div>

              <div
                  class="share-modal__item d-flex flex-column align-items-center"
              >
                  <a href="#!">
                  <img
                      src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/link-pr.svg"
                      width="40px"
                      heihgt="40px"
                      alt="Link"
                  />
                  </a>

                  <span class="share-modal__item_title mt-2">Copy link</span>
              </div>
              </div>

              <button class="close-share-modal mb-2">Back</button>
          </div>
          </div>
      </div>
      </div>

      <!-- Chat Modal-->
      <div class="chat-modal container-xxl">
      <img
          class="open-chat-btn"
          src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/open-chat.png"
          alt="Open Chat"
      />

      <div class="chat-popup">
          <form class="chat-popup__container">
          <div
              class="chat-popup__top d-flex justify-content-between align-items-center"
          >
              <div>
              <img
                  class="chat-popup__img me-3"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/chat-img.png"
                  alt=""
              />
              <span class="chet-modal-text">Alice</span>
              </div>

              <button class="chat-popup-btn-close">
              <img
                  class="chat-popup-btn"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/chat-cancel.svg"
                  alt=""
              />
              </button>
          </div>

          <div class="chat-popup__messages">
              <span class="chat-popup__message_txt mb-2"
              >Hello. How can I help you?</span
              >
          </div>

          <div class="chat-popup__text">
              <input
              class="chat-popup__text_input"
              type="text"
              placeholder="Message"
              />

              <button class="chat-popup-send-btn">
              <img
                  class="chat-popup__text_icon"
                  src="<?php echo get_template_directory_uri(); ?>/template-configurator/img/icons/Send.svg"
                  alt="Send"
              />
              </button>
          </div>
          </form>
      </div>
      </div>
  </div>
</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
</script>
<script src="https://unpkg.com/@panzoom/panzoom@4.5.1/dist/panzoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sticky-js@1.3.1/src/sticky.min.js"></script>

<script>
const appHeight = () => document.documentElement.style.setProperty('--address-bar-height', `${window.innerHeight}px`)
window.addEventListener('resize', appHeight)
appHeight()

var openSceneWindow = document.querySelectorAll(".open-scene-window");
var openMainWindow = document.querySelector(".open-main-window");
var openAboutWindow = document.querySelector(".open-about-window");
var openContactWindow = document.querySelector(".open-contact-window");
var openGalleryWindow = document.querySelector(".open-gallery-window");
var openProfileWindow = document.querySelector(".open-profile-window");
var openFaqWindow = document.querySelector(".open-faq-window");
var backBtn = document.querySelector(".back-btn");
var shapeToggle = document.getElementById("shapeToggle");
var chatModal = document.querySelector(".chat-modal");
var isSceneClosed = false;
var openSceneWindowMobile = document.querySelectorAll(".carousel__btn-start");
var closeScene = document.querySelector(".close-scene-window");

// Windows
const windows = {
  main: document.querySelector(".main-window"),
  about: document.querySelector(".about-window"),
  contact: document.querySelector(".contact-window"),
  gallery: document.querySelector(".gallery-window"),
  profile: document.querySelector(".profile-window"),
  faq: document.querySelector(".faq-window"),
  scene: document.querySelector(".scene-window"),
};

function checkForHideClass() {
  if (windows.main.classList.contains("hide")) {
    backBtn.classList.remove("hide");
  } else {
    backBtn.classList.add("hide");
    chatModal.classList.remove("hide");
    Object.values(windows).forEach((window) => {
      window.classList.add("hide");
    });
  }
}

// Toggle windows classes
function toggleWindowClasses(activeWindow) {
  Object.values(windows).forEach((window) => {
    const isActive = window === activeWindow;
    window.classList.toggle("hide", !isActive);
    window.classList.toggle("active", isActive);
  });
}

openMainWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.main);
  checkForHideClass();
  clearAllSceneElements();

  if (document.getElementById("scene").classList.contains("active")) {
    location.reload();
  }
});

openAboutWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.about);
  checkForHideClass();
});

openContactWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.contact);
  checkForHideClass();
});

openGalleryWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.gallery);
  checkForHideClass();
});

openProfileWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.profile);
  checkForHideClass();
});

openFaqWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.faq);
  checkForHideClass();
});

// Save Scene Background to LocalStorage
var kitchenScene = document.querySelectorAll(".kitchen-scene");
var chosenKitchen = "kitchen-black";

kitchenScene.forEach((scene) => {
  scene.addEventListener("click", (e) => {
    var sceneTarget = e.target;
    var sceneAttr = sceneTarget.getAttribute("data-scene");
    chosenKitchen = sceneAttr;
  });
});

openSceneWindow.forEach((btn) => {
  btn.addEventListener("click", () => {
    chatModal.classList.add("hide");
    toggleWindowClasses(windows.scene);
    checkForHideClass();
    startSceneConfigurator();
    openMainWindow.style.display = "none";
    closeScene.classList.remove("hide");
    closeScene.classList.add("active");
  });
});

closeScene.addEventListener("click", () => {
  location.reload();
});

openSceneWindowMobile.forEach((btn) => {
  btn.addEventListener("click", () => {
    chatModal.classList.add("hide");
    toggleWindowClasses(windows.scene);
    checkForHideClass();
    startSceneConfigurator();
  });
});

var loadingModal = document.getElementById("loadingModal")

function showLoadingModal() {
  loadingModal.style.display = "flex";
  console.log('downloading...');
}

function hideLoadingModal() {
  loadingModal.style.display = "none";
  console.log('downloaded');
}

// Drop Dwon List
var secondNavBtn = document.querySelector(".second-nav-btn");
var secondDropDown = document.querySelector(".second-nav-drop-down");
var secondBlackout = document.querySelector(".second-blackout");
var dropDownBtns = document.querySelectorAll(".drop-down-btn");

secondNavBtn.addEventListener("click", () => {
  secondDropDown.classList.add("open");
  secondBlackout.classList.add("active");
});

document.addEventListener("click", (e) => {
  if (e.target.classList.contains("second-blackout")) {
    secondDropDown.classList.remove("open");
    secondBlackout.classList.remove("active");
  }
});

dropDownBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    secondDropDown.classList.remove("open");
    secondBlackout.classList.remove("active");
  });
});

// Chat Modal
var chatBtnClose = document.querySelector(".chat-popup-btn-close");
var chat = document.querySelector(".chat-popup");
var openChatBtn = document.querySelector(".open-chat-btn");
var blackoutWhite = document.querySelector(".blackout-white");
var chatSendBtn = document.querySelector(".chat-popup-send-btn");

chatSendBtn.addEventListener("click", (e) => e.preventDefault());

openChatBtn.addEventListener("click", () => {
  chat.classList.add("open");
  blackoutWhite.classList.add("active");
});

chatBtnClose.addEventListener("click", (e) => {
  e.preventDefault();
  chat.classList.remove("open");
  blackoutWhite.classList.remove("active");
});

document.addEventListener("click", (e) => {
  if (e.target.classList.contains("blackout-white")) {
    blackoutWhite.classList.remove("active");
    chat.classList.remove("open");
  }
});

// Swiper Carousel
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Open Request Modal
var requestCloseBtn = document.querySelectorAll(".request-close-btn");
var requestBlackout = document.querySelector(".request-blackout");
var contactFormSendBtn = document.querySelector(".contact-form-send-btn");

contactFormSendBtn.addEventListener("click", (e) => {
  e.preventDefault();
  requestBlackout.classList.add("active");
});

requestCloseBtn.forEach((element) => {
  element.addEventListener("click", () => {
    requestBlackout.classList.remove("active");
  });
});

document.addEventListener("click", (e) => {
  if (e.target.classList.contains("request-blackout")) {
    requestBlackout.classList.remove("active");
  }
});

document
  .querySelector(".profile__form")
  .addEventListener("click", (e) => e.preventDefault());

// Scene
var customArr = [];
var countItems = 0;
var productArr = [];
var productMaskChairs = "BarStool1";
var productMaskLamps = "lamp1";

// Options Btns
var optionsBtnSave = document.querySelectorAll(".options-btn-save");
var optionsBtn3d = document.querySelector(".options-btn-3d");
var optionsBtnDownload = document.querySelector(".options-btn-download");
var optionsBtnPrint = document.querySelector(".options-btn-print");
var optionsBtnShare = document.querySelectorAll(".options-btn-share");
var openOptionsBtn = document.querySelector(".open-options-btn");
var optionsMobileBtn = document.querySelector(".open-options-btn");

// Option Modals
var shareModal = document.querySelector(".share-blackout");
var savedModal = document.querySelector(".saved-modal");
var savedModalBlackout = document.querySelector(".saved-blackout");
var savedModalEmpty = document.querySelector(".saved-modal-empty");
var downloadModalBlackout = document.querySelectorAll(".download-blackout");
var downloadModal = document.querySelectorAll(".download-modal");
var optionsBoxMobile = document.querySelector(".options-box-mobile");
var optionsContainer = document.querySelector(".options-container");

// Option Btns Close Modals
var btnCloseShareModal = document.querySelectorAll(".close-share-modal");
var btnCloseSavedModal = document.querySelectorAll(".close-saved-modal");
var btnMoveToGallary = document.querySelector(".check-out-saved-modal");

// Show Order List
var orderList = document.querySelector(".order__list");
var moveUpBtn = document.querySelector(".move-up");

moveUpBtn.addEventListener("click", () => {
  orderList.classList.toggle("open");
  moveUpBtn.classList.toggle("down");
});

// Show Options Btn Tips
var optionsBtn = document.querySelectorAll(".options__btn");
var optionsTip = document.querySelectorAll(".options__tip");

optionsBtn.forEach((button) => {
  button.addEventListener("mouseover", (e) => {
    var buttonTarget = e.target;
    var buttonAttr = buttonTarget.getAttribute("data-tip");

    optionsTip.forEach((el) => {
      var elAttr = el.getAttribute("data-tip");

      if (buttonAttr === elAttr) {
        el.classList.add("active");
      } else {
        el.classList.remove("active");
      }
    });
  });

  // Hide Options Tips
  button.addEventListener("mouseout", (e) => {
    var buttonTarget = e.target;
    var buttonAttr = buttonTarget.getAttribute("data-tip");

    optionsTip.forEach((el) => {
      var elAttr = el.getAttribute("data-tip");

      if (buttonAttr === elAttr) {
        el.classList.remove("active");
      }
    });
  });
});

btnCloseShareModal.forEach((el) => {
  el.addEventListener("click", () => {
    shareModal.classList.remove("active");
  });
});

btnCloseSavedModal.forEach((el) => {
  el.addEventListener("click", () => {
    savedModalBlackout.classList.remove("active");
    savedModalEmpty.classList.remove("active");
    savedModal.classList.remove("active");
  });
});

// Open Mobile Options Menu / Hide Desktop Options menu
optionsMobileBtn.addEventListener("click", () => {
  optionsContainer.classList.toggle("open");
  checkOpenMenu();
});

// Open Options Modal
optionsBtn.forEach((button) => {
  button.addEventListener("click", (e) => {
    var buttonTarget = e.target;
    var buttonAttr = buttonTarget.getAttribute("data-tip");

    switch (buttonAttr) {
      case "share":
        shareModal.classList.add("active");
        break;
      case "save":
        if (customArr.length !== 0) {
          savedModalBlackout.classList.add("active");
          savedModal.classList.add("active");
        } else {
          savedModalBlackout.classList.add("active");
          savedModalEmpty.classList.add("active");
        }
        break;
      case "download":
        downloadModalBlackout.forEach((el) => {
          el.classList.add("active");
        });

        downloadModal.forEach((el) => {
          el.classList.add("active");
        });
        break;
      case "share":
        shareModal.classList.add("active");
        break;
      default:
        break;
    }
  });
});

// Remove All Blackouts From Modals
document.addEventListener("click", (e) => {
  const clickedElement = e.target;
  const modalBlackoutClasses = [
    "share-blackout",
    "saved-blackout",
    "download-blackout",
  ];

  if (
    modalBlackoutClasses.some((className) =>
      clickedElement.classList.contains(className)
    )
  ) {
    shareModal.classList.remove("active");
    savedModalBlackout.classList.remove("active");
    savedModalEmpty.classList.remove("active");
    savedModal.classList.remove("active");

    downloadModalBlackout.forEach((el) => el.classList.remove("active"));
    downloadModal.forEach((el) => el.classList.remove("active"));
  }
});

// Custon Item Btns
var customItemBtn = document.querySelectorAll(".custom-item-btn");
var customDropList = document.querySelectorAll(".custom-drop-list");
var customBtn = document.querySelector(".custom-btn");
var removeBtn = document.querySelectorAll(".custom-item-remove");
var custom = document.querySelector(".custom");
var lastClickedButton = null;

// Open Cusotm Menu Items
customItemBtn.forEach((button) => {
  button.addEventListener("click", (e) => {
    var btn = e.target;
    var buttonAttr = btn.getAttribute("data-item");

    customDropList.forEach((el) => {
      var listAttr = el.getAttribute("data-item");
      if (buttonAttr == listAttr) {
        el.classList.toggle("open");
      } else {
        el.classList.remove("open");
      }
    });

    button.classList.toggle("open");

    if (lastClickedButton && lastClickedButton !== button) {
      lastClickedButton.classList.remove("open");
    }

    lastClickedButton = button;
  });
});

// Open Custom Menu
customBtn.addEventListener("click", () => {
  custom.classList.toggle("open");

  if (!custom.classList.contains("open")) {
    customItemBtn.forEach((el) => el.classList.remove("open"));
    customDropList.forEach((el) => el.classList.remove("open"));
  }

  checkOpenMenu();
});

// Custom Objects Chairs
var objectBarStoolsBtn = document.querySelectorAll(".object-bar-stool-btn");
var barStoolsImg = document.querySelectorAll(".bar-stool-img");

objectBarStoolsBtn.forEach((button) => {
  customObjectsHandler(button, barStoolsImg);
});

// Custom Objects Lamps
var objectLamp = document.querySelectorAll(".object-lamp-btn");
var lampImg = document.querySelectorAll(".lamp-img");

objectLamp.forEach((button) => {
  customObjectsHandler(button, lampImg);
});

// Custom Objects Fartuk
var objectFartukBtn = document.querySelectorAll(".object-fartuk-btn");
var fartukImg = document.querySelectorAll(".fartuk-img");

objectFartukBtn.forEach((button) => {
  customObjectsHandler(button, fartukImg);
});

// Custom Objects Portuquet
var objectParquetBtn = document.querySelectorAll(".object-parquet-btn");
var portuquetImg = document.querySelectorAll(".portuquet-img");

objectParquetBtn.forEach((button) => {
  customObjectsHandler(button, portuquetImg);
});

// Custom Objects Handler
function customObjectsHandler(button, object) {
  button.addEventListener("click", (e) => {
    const objectBtn = e.target;
    const objectBtnAttr = objectBtn.getAttribute("data-object");
    const objectBtnMaskAttr = objectBtn.getAttribute("data-mask");
    const objectRemoveAttr = objectBtn.getAttribute("data-remove");

    // Toggle visibility of objects
    object.forEach((el) => {
      const objectAttr = el.getAttribute("data-object");
      el.classList.toggle("object-visible", objectAttr === objectBtnAttr);
    });

    // Update product mask based on clicked button
    if (objectBtnMaskAttr === "chairs") {
      productMaskChairs = objectBtnAttr;
    } else if (objectBtnMaskAttr === "lamps") {
      productMaskLamps = objectBtnAttr;
    }

    // Handle remove button clicks
    removeBtn.forEach((btn) => {
      const btnAttr = btn.getAttribute("data-remove");

      if (btnAttr === objectRemoveAttr) {
        btn.classList.add("active");

        btn.addEventListener("click", () => {
          object.forEach((el) => {
            const elProduct = el.getAttribute("data-product");

            if (el.classList.contains("object-visible")) {
              const indexProductArr = productArr.findIndex(
                (item) => item.elProduct === elProduct
              );
              const indexCustomArr = customArr.findIndex(
                (item) => item.elProduct === elProduct
              );
              if (indexProductArr !== -1 || indexCustomArr !== -1) {
                productArr.splice(indexProductArr, 1);
                customArr.splice(indexCustomArr, 1);
                countItems--;
              }
            }

            el.classList.remove("object-visible");
            btn.classList.remove("active");
          });
        });
      }
    });

    // Update object product visibility
    checkObjectProduct(object);
  });
}

// Check Object Product
function checkObjectProduct(product) {
  product.forEach((el) => {
    var elProduct = el.getAttribute("data-product");
    var elPrice = el.getAttribute("data-price");

    if (el.classList.contains("object-visible")) {
      var existingProductIndex = customArr.findIndex(
        (item) => item.elProduct === elProduct
      );
      var existingProductIndexPr = productArr.findIndex(
        (item) => item.elProduct === elProduct
      );

      if (existingProductIndex === -1 || existingProductIndexPr === -1) {
        customArr.push({
          elProduct,
          elPrice,
        });

        productArr.push({
          elProduct,
          elPrice,
        });

        countItems++;
      }
    } else {
      var existingItemIndex = customArr.findIndex(
        (item) => item.elProduct === elProduct
      );
      var existingProductIndex = productArr.findIndex(
        (item) => item.elProduct === elProduct
      );

      if (existingItemIndex !== -1 || existingProductIndex !== -1) {
        customArr.splice(existingItemIndex, 1);
        productArr.splice(existingProductIndex, 1);
        countItems--;
      }
    }
  });
}

optionsBtnSave.forEach((element) => {
  element.addEventListener("click", () => {
    pushProductsToSavedModal();
  });
});

document.addEventListener("click", () => pushProductsOrder());

// Push Products to Order
function pushProductsOrder() {
  const orderList = document.querySelector(".order__list");
  const orderCount = document.querySelector(".order__count");

  orderList.innerHTML =
    customArr.length !== 0
      ? ""
      : '<span style="color: black;">No products yet</span>';

  // orderList.innerHTML = "No product yet"
  customArr.forEach((item) => {
    const { elProduct: product, elPrice: price } = item;
    const itemElement = document.createElement("div");

    itemElement.classList.add("order__item", "d-flex", "flex-column");
    itemElement.innerHTML = `
      <span class="order__item_title">${product}</span>
      <span class="order__item_price">$${price}</span>
    `;

    orderList.appendChild(itemElement);
  });

  orderCount.textContent = `${countItems} ${
    countItems === 1 ? "item" : "items"
  }`;
}

// Save Products To Saved Modal
function pushProductsToSavedModal() {
  var savedModalItems = document.querySelector(".saved-modal__items");
  savedModalItems.innerHTML = "";

  productArr.forEach((item) => {
    var product = item.elProduct;
    var price = item.elPrice;
    var savedItem = document.createElement("div");

    savedItem.innerHTML = `
        <div class="saved-modal__item d-flex">
            <h5 class="saved-modal__item_title h5">${product} &nbsp;</h5>
            <h5 class="saved-modal__item-price">$${price}</h5>
        </div>
    `;

    savedModalItems.appendChild(savedItem);
  });
}

// Close Custom Menu if Options Menu is open
function checkOpenMenu() {
  if (custom.classList.contains("open")) {
    optionsContainer.classList.remove("open");
  } else if (optionsContainer.classList.contains("open")) {
    custom.classList.remove("open");
  } else {
    custom.classList.remove("open");
  }
}

// Open Popup notify
var closePopup = document.querySelector(".close-popup");
var popupBlackout = document.querySelector(".popup-blackout");

var popupMobile = window.matchMedia("(max-width: 912px)").matches;

if (popupMobile) popupBlackout.classList.add("active");

closePopup.addEventListener("click", () => {
  popupBlackout.classList.remove("active");
});

document.addEventListener("click", (e) => {
  if (e.target.classList.contains("popup-blackout")) {
    popupBlackout.classList.remove("active");
  }
});

// Zooming / Panzoom;
var container = document.querySelector("#myPanzoom");
var zoomInButton = document.getElementById("zoomInButton");
var zoomOutButton = document.getElementById("zoomOutButton");

var maxScale = 5;
var isMobile = window.matchMedia("(max-width: 912px)").matches;

var panzoomInstance = new Panzoom(container, {
  disablePan: maxScale <= 1,
  minScale: isMobile ? 0.3 : 1,
  startScale: 1,
  increment: 0.1,
  contain: isMobile ? false : "outside",
  disableZoom: false,
});

if (isMobile) {
  container.addEventListener("wheel", panzoomInstance.zoomWithWheel);
  panzoomInstance.setOptions({ cursor: "grab" });
}

// Masks
var masks = document.querySelectorAll(".mask_btn");

zoomInButton.addEventListener("click", () => panzoomInstance.zoomIn());
zoomOutButton.addEventListener("click", () => panzoomInstance.zoomOut());

// Handle Images Loading
function loadImageWithModal(imageElement, url) {
  showLoadingModal();

  setTimeout(() => {
    function onLoad() {
      hideLoadingModal();
      imageElement.removeEventListener("load", onLoad);
    }

    if (imageElement.complete && imageElement.naturalWidth !== 0) {
      hideLoadingModal();
    } else {
      imageElement.addEventListener("load", onLoad);
      imageElement.addEventListener("error", onLoad);
    }
  }, 2000);

  imageElement.src = url;
}

// Get Chosen Scene
function startSceneConfigurator() {
  // Get scene-kitchen
  var kitchen = chosenKitchen;


  var sceneImg = document.getElementById("scene-img");
  loadImageWithModal(
    sceneImg, `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/View1/Jpeg/Background.jpg`
  )

  // Show Camera View
  var cameraView = document.querySelector(".camera-view");
  var cameraViewBtn = document.querySelectorAll(".options-btn-3d");
  var viewScene = document.querySelector(".view-scene");
  var cameraItemView = document.querySelectorAll(".camera__item");
  var view1 = document.querySelector(".view1");
  var view2 = document.querySelector(".view2");
  var view3 = document.querySelector(".view3");
  var foregroundBlack = document.querySelector(".foreground-black");
  var foregroundBlackView2 = document.querySelector(".foreground-black-view2");
  var foregroundRed = document.querySelector(".foreground-red");
  var foregroundRedView2 = document.querySelector(".foreground-red-view2");
  var viewNum = "View1";

  var wallPattern = document.getElementById("wall-pattern");
  var chair = document.getElementById("chair");
  var floor = document.getElementById("floor");
  var lamp = document.getElementById("lamp");

  floor.style = "display: block";
  lamp.style = "display: block";
  chair.style = "display: block";

  // Scene Masks
  var kitchenBlackMasks = document.querySelector(".kitchen-black-masks");
  var kitchenRedMasks = document.querySelector(".kitchen-red-masks");
  var kitchenWhiteMasks = document.querySelector(".kitchen-white-masks");
  var maskWallPanels = document.querySelector(".mask-wall-panels");
  var maskChairs = document.querySelector(".mask-chairs");
  var maskFloor = document.querySelector(".mask-floor");
  var maskLamps = document.querySelector(".mask-lamps");
  var kitchenView1 = document.querySelectorAll(".kitchen-view1");
  var kitchenView2 = document.querySelectorAll(".kitchen-view2");
  var kitchenView3 = document.querySelectorAll(".kitchen-view3");

  // Scene Custom Items
  var chairsCustomImg = document.querySelector(".custom-chairs-img");
  var floorCustomImg = document.querySelector(".floor-custom-img");
  var lampsCustomImg = document.querySelector(".custom-lamps-img");

  // Scene Custom Items
  var customFartuks = document.querySelectorAll(".custom-fartuk");
  var customFloors = document.querySelectorAll(".custom-parquet");
  var customChairs = document.querySelectorAll(".custom-chair");
  var customLamps = document.querySelectorAll(".custom-lamp");

  // Scene Objects
  var objectFloor = document.querySelectorAll(".portuquet-img");
  var objectFartuk = document.querySelectorAll(".fartuk-img");
  var objectChair = document.querySelectorAll(".bar-stool-img");
  var objectLamp = document.querySelectorAll(".lamp-img");
  var chirsBox = document.querySelector(".bar-stools");
  var portuquetsBox = document.querySelector(".portuquets");
  var lampsBox = document.querySelector(".lamps");

  cameraViewBtn.forEach((element) => {
    element.addEventListener("click", () => {
      viewScene.classList.add("hide");
      cameraView.classList.add("active");
      custom.classList.remove("open");
      loadImageWithModal(
        view1,
        `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/View1/Jpeg/Final.jpg`
      );
      loadImageWithModal(
        view2,
        `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/View2/Jpeg/Final.jpg`
      );
      loadImageWithModal(
        view3,
        `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/View3/Jpeg/Final.jpg`
      );
    });
  });

  // Kitchens foreground
  switch (kitchen) {
    case "kitchen-black":
      foregroundBlack.classList.add("active");
      foregroundRed.classList.remove("active");
      break;
    case "kitchen-red":
      foregroundRed.classList.add("active");
      foregroundBlack.classList.remove("active");
      break;
    default:
      foregroundBlack.classList.remove("active");
      foregroundRed.classList.remove("active");
      break;
  }

  // Open Chosen Camera View
  cameraItemView.forEach((view) => {
    view.addEventListener("click", (e) => {
      const viewTarget = e.target;
      const viewAttr = viewTarget.getAttribute("data-view");

      viewNum = viewAttr;
      changeObjectsView(viewNum);
      changeMasksView(viewNum);
      changeObjectMaksView(viewNum);

      // Set background image
      loadImageWithModal(
        sceneImg,
        `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewAttr}/Jpeg/Background.jpg`
      );

      viewScene.classList.remove("hide");
      cameraView.classList.remove("active");
      portuquetsBox.classList.remove("hide");

      switch (viewAttr) {
        case "View1":
          if (kitchen === "kitchen-black") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.add("active");
            floor.style = "display: block";
          }
          if (kitchen === "kitchen-red") {
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            foregroundRed.classList.add("active");
            foregroundRedView2.classList.remove("active");
            floor.style = "display: block";
            lamp.style = "display: block";
            lampsBox.style = "display: block";
            portuquetsBox.style = "display: block";
          }
          if (kitchen === "kitchen-white") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            chair.style = "display: block";
            lamp.style = "display: block";
            lampsBox.style = "display: block";
            chirsBox.style = "display: block";
          }
          break;
        case "View2":
          if (kitchen === "kitchen-white") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            chirsBox.style = "display: none";
            chair.style = "display: none";
            lamp.style = "display: none";
            lampsBox.style = "display: none";
          }
          if (kitchen === "kitchen-red") {
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.add("active");
            floor.style = "display: block";
            lamp.style = "display: block";
            lampsBox.style = "display: block";
            portuquetsBox.style = "display: block";
          }
          if (kitchen === "kitchen-black") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            foregroundBlackView2.classList.add("active");
            foregroundBlack.classList.remove("active");
            floor.style = "display: block";
          }
          break;
        case "View3":
          if (kitchen === "kitchen-white") {
            chair.style = "display: block";
            lampsBox.style = "display: none";
            chirsBox.style = "display: block";
            floor.style = "display: block";
          }
          if (kitchen === "kitchen-black" || kitchen === "kitchen-red") {
            floor.style = "display: none";
          }
          if (kitchen === "kitchen-red") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            lampsBox.style = "display: none";
            lamp.style = "display: none";
            foregroundRed.classList.remove("active");
            foregroundBlackView2.classList.remove("active");
            portuquetsBox.style = "display: none";
          }
          if (kitchen === "kitchen-black") {
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            portuquetsBox.classList.add("hide");
          } else {
            portuquetsBox.classList.remove("hide");
          }
          break;
      }
    });
  });

  var mobileOptionsBtns = document.querySelectorAll(".option_btn_mobile");

  // Close OptionsModal for mobile
  mobileOptionsBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      var mediaQuery = window.matchMedia("(max-width: 912px)");

      if (mediaQuery.matches) {
        optionsContainer.classList.remove("open");
      }
    });
  });

  var maskBtn = document.querySelectorAll(".mask_btn");
  var maskWallPanels = document.querySelector(".mask-wall-panels");
  var maskChairs = document.querySelector(".mask-chairs");
  var maskFloor = document.querySelector(".mask-floor");
  var maskLamps = document.querySelector(".mask-lamps");

  maskBtn.forEach((button) => {
    button.addEventListener("click", (e) => {
      var buttonTarget = e.target;
      var buttonAttr = buttonTarget.getAttribute("data-mask");

      switch (buttonAttr) {
        case "wall-pattern":
          showMasks(maskWallPanels, buttonAttr);
          break;
        case "chairs":
          showMasks(maskChairs, buttonAttr);
          break;
        case "floor":
          showMasks(maskFloor, buttonAttr);
          break;
        case "lamps":
          showMasks(maskLamps, buttonAttr);
          break;
        default:
          break;
      }

      checkOpenMenu();
    });
  });

  // Show forEach Masks
  function showMasks(mask, customMenu) {
    // Remove Masks
    setTimeout(() => {
      mask.classList.remove("active");
    }, 200);

    // Check Chosen Product Mask
    var maskAttr = mask.getAttribute("data-mask");
    mask.classList.add("active");

    switch (maskAttr) {
      case "chairs":
        mask.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Masks/Png/${productMaskChairs}.png`
        break;
      case "lamps":
        mask.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Masks/Png/${productMaskLamps}.png`
        break;
      case "floor":
        mask.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Masks/Png/Parquet.png`
        break;
      case "wall-pattern":
        mask.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Masks/Png/KitchenFartuk.png`
        break;
      default:
        break;
    }

    // Open Custom Menu
    customItemBtn.forEach((button) => {
      const buttonAttr = button.getAttribute("data-mask");
      button.classList.toggle("open", buttonAttr === customMenu);
    });

    customDropList.forEach((el) => {
      const listAttr = el.getAttribute("data-mask");
      el.classList.toggle("open", listAttr === customMenu);
    });

    custom.classList.add("open");
  }

  // Show Maks Block
  switch (kitchen) {
    case "kitchen-black":
      kitchenBlackMasks.classList.add("active");
      break;
    case "kitchen-red":
      kitchenRedMasks.classList.add("active");
      break;
    case "kitchen-white":
      kitchenWhiteMasks.classList.add("active");
      break;
    default:
      break;
  }

  // Show View Masks
  function changeMasksView(view) {
    switch (view) {
      case "View1":
        kitchenView1.forEach((el) => el.classList.add("active"));
        kitchenView2.forEach((el) => el.classList.remove("active"));
        kitchenView3.forEach((el) => el.classList.remove("active"));
        break;
      case "View2":
        kitchenView1.forEach((el) => el.classList.remove("active"));
        kitchenView2.forEach((el) => el.classList.add("active"));
        kitchenView3.forEach((el) => el.classList.remove("active"));
        break;
      case "View3":
        kitchenView1.forEach((el) => el.classList.remove("active"));
        kitchenView2.forEach((el) => el.classList.remove("active"));
        kitchenView3.forEach((el) => el.classList.add("active"));
        break;
      default:
        break;
    }
  }

  // Show View Object Masks
  function changeObjectMaksView(view) {
    maskWallPanels.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Masks/Png/KitchenFartuk.png`
    maskChairs.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Masks/Png/BarStool1.png`
    maskLamps.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Masks/Png/Lamp1.png`
    maskFloor.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Masks/Png/Parquet.png`
  }

  // Change Chairs Custom img
  if (kitchen === "kitchen-black") {
    chairsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-black/Detailed/BarStool1.jpg`
    
  } else if (kitchen === "kitchen-white") {
    chairsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-white/Detailed/BarStool1.jpg`

  }

  // Change Lamps Custom img
  switch (kitchen) {
    case "kitchen-black":
      lampsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-black/Detailed/Lamp1.jpg`


      break;
    case "kitchen-red":
      lampsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-red/Detailed/Lamp1.jpg`


      break;
    case "kitchen-white":
      lampsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-white/Detailed/Lamp1.jpg`
      
      break;
    default:
      break;
  }

  // Wall Pattern Custom
  customFartuks.forEach((img, index) => {

      img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/KitchenFartuk${
        index + 1
      }.jpg`

  });

  // Floor Custom
  customFloors.forEach((img, index) => {

      img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Parquet${
        index + 1
      }.jpg`

  });

  // Chair Custom
  customChairs.forEach((img, index) => {
    if (kitchen == "kitchen-white") {
      var kitchenWhiteChair = document.querySelector(".kitchen-white-chair");
      kitchenWhiteChair.style = "display: none";
    }


      img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/BarStool${
        index + 1
      }.jpg`

  });

  // Lamp Custom
  var kitchenRedLamp = document.querySelectorAll(".kitchen-red-lamp");
  var kitchenWhiteLamp = document.querySelectorAll(".kitchen-white-lamp");

  customLamps.forEach((img, index) => {
    switch (kitchen) {
      case "kitchen-red":
        kitchenRedLamp.forEach((el) => (el.style = "display: block"));
        kitchenWhiteLamp.forEach((el) => (el.style = "display: block"));

          img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Lamp${
            index + 1
          }.jpg`

        break;
      case "kitchen-white":
        kitchenRedLamp.forEach((el) => (el.style = "display: none"));
        kitchenWhiteLamp.forEach((el) => (el.style = "display: none"));

          img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Lamp${
            index + 1
          }.jpg`


        break;
      default:
        kitchenRedLamp.forEach((el) => (el.style = "display: none"));
        kitchenWhiteLamp.forEach((el) => (el.style = "display: block"));

          img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Lamp${
            index + 1
          }.jpg`

        break;
    }
  });

  // Chair Objects
  objectChair.forEach((img, index) => {
    if (kitchen === "kitchen-red") {
      chair.style = "display: none";
    } else {

        img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Png/BarStool${
          index + 1
        }.png`

    }
  });

  // Lamp Objects
  objectLamp.forEach((img, index) => {

      img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Png/Lamp${
        index + 1
      }.png`
  });

  // Floor Objects
  objectFloor.forEach((img, index) => {

      img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Png/Parquet${
        index + 1
      }.png`

  });

  // Wall pattern Objects
  objectFartuk.forEach((img, index) => {
    if (kitchen == "kitchen-white") {
      wallPattern.style = "display: none";
    } else {
      wallPattern.style = "display: block";

        img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Png/KitchenFartuk${
          index + 1
        }.png`

    }
  });

  // Change Objects By ViewNum
  function changeObjectsView(view) {
    // Lamp Objects
    objectLamp.forEach((img, index) => {

        img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Png/Lamp${
          index + 1
        }.png`

    });

    // Chair Objects
    objectChair.forEach((img, index) => {
      if (kitchen == "kitchen-red") {
        chair.style.display = "none";
      } else {

          img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Png/BarStool${
            index + 1
          }.png`

      }
    });

    // Floor Objects
    objectFloor.forEach((img, index) => {

        img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Png/Parquet${
          index + 1
        }.png`

    });

    // Wall pattern Objects (Fartuk)
    objectFartuk.forEach((img, index) => {
      if (kitchen == "kitchen-white") {
        wallPattern.style.display = "none";
      } else {

          img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Png/KitchenFartuk${
            index + 1
          }.png`

      }
    });
  }

  // Change Floor Custom img

    floorCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Parquet1.jpg`


  // Main Scene Bg

}

// Clear all elements in scene
function clearAllSceneElements() {
  var chairsImgs = document.querySelectorAll(".bar-stool-img");
  var lampImgs = document.querySelectorAll(".lamp-img");
  var fartukImgs = document.querySelectorAll(".fartuk-img");
  var portuquetImgs = document.querySelectorAll(".portuquet-img");

  chairsImgs.forEach((el) => el.classList.remove("object-visible"));
  lampImgs.forEach((el) => el.classList.remove("object-visible"));
  fartukImgs.forEach((el) => el.classList.remove("object-visible"));
  portuquetImgs.forEach((el) => el.classList.remove("object-visible"));
  custom.classList.remove("open");

  var kitchenBlackMasks = document.getElementById("kitchen-black-masks");
  var kitchenRedMasks = document.getElementById("kitchen-red-masks");
  var kitchenWhiteMasks = document.getElementById("kitchen-white-masks");
  var kitchenView1 = document.querySelectorAll(".kitchen-view1");
  var kitchenView2 = document.querySelectorAll(".kitchen-view2");
  var kitchenView3 = document.querySelectorAll(".kitchen-view3");

  kitchenView1.forEach((el) => el.classList.add("active"));
  kitchenView2.forEach((el) => el.classList.remove("active"));
  kitchenView3.forEach((el) => el.classList.remove("active"));
  kitchenBlackMasks.classList.remove("active");
  kitchenRedMasks.classList.remove("active");
  kitchenWhiteMasks.classList.remove("active");

  productMaskChairs = "BarStool1";
  productMaskLamps = "lamp1";
  customArr.length = 0;
  productArr.length = 0;
  countItems = 0;
  viewNum = "View1";

  var foregroundBlack = document.querySelector(".foreground-black-view2");
  var foregroundRed = document.querySelector(".foreground-red-view2");
  foregroundBlack.classList.remove("active");
  foregroundRed.classList.remove("active");
  floor.style = "display: block";
  lamp.style = "display: block";
  chair.style = "display: block";
}

openMainWindow.addEventListener("click", () => clearAllSceneElements());

</script>

<?php
echo get_bloginfo('description');
?>

<!-- Footer block -->
<?php get_footer(); ?>