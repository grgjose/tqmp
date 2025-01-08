<style>
    /* Base styles for word animations */
    .word-fade-in span {
        display: inline-block;
        opacity: 0;
        transform: translateY(20px);
        /* Start slightly below */
        animation: wordFadeIn 0.5s ease-out forwards;
    }

    /* Stagger effect */
    .word-fade-in span:nth-child(1) {
        animation-delay: 0.1s;
    }

    .word-fade-in span:nth-child(2) {
        animation-delay: 0.2s;
    }

    .word-fade-in span:nth-child(3) {
        animation-delay: 0.3s;
    }

    .word-fade-in span:nth-child(4) {
        animation-delay: 0.4s;
    }

    .word-fade-in span:nth-child(5) {
        animation-delay: 0.5s;
    }

    .word-fade-in span:nth-child(6) {
        animation-delay: 0.6s;
    }

    .word-fade-in span:nth-child(7) {
        animation-delay: 0.7s;
    }

    .word-fade-in span:nth-child(8) {
        animation-delay: 0.8s;
    }

    .word-fade-in span:nth-child(9) {
        animation-delay: 0.9s;
    }

    .word-fade-in span:nth-child(10) {
        animation-delay: 1s;
    }

    /* Keyframes for the fade-in effect */
    @keyframes wordFadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* fade in up effect */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 1s ease-out forwards;
        /* Adjust the duration and easing as needed */
    }

    /* fade up effect  */
    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-up {
        animation: fadeUp 1s ease-out forwards;
    }

    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
    .hero {
        width: 100%;
        min-height: 100vh;
        position: relative;
        padding: 120px 0 80px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero img {
        position: absolute;
        inset: 0;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .hero:before {
        content: "";
        background: color-mix(in srgb, var(--background-color), transparent 30%);
        position: absolute;
        inset: 0;
        z-index: 2;
    }

    .hero .container {
        position: relative;
        z-index: 3;
    }

    .hero h2 {
        margin: 0;
        font-size: 56px;
        font-weight: 700;
        font-family: var(--nav-font);
    }

    .hero h2 span {
        color: var(--accent-color);
    }

    .hero p {
        margin: 10px 0 0 0;
        font-size: 24px;
        color: color-mix(in srgb, var(--default-color), transparent 30%);
    }

    .hero .icon-box {
        padding: 30px 20px;
        transition: ease-in-out 0.3s;
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 70%);
        height: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .hero .icon-box i {
        font-size: 32px;
        line-height: 1;
        color: var(--accent-color);
    }

    .hero .icon-box h3 {
        font-weight: 700;
        margin: 10px 0 0 0;
        padding: 0;
        line-height: 1;
        font-size: 20px;
        line-height: 26px;
    }

    .hero .icon-box h3 a {
        color: color-mix(in srgb, var(--default-color), transparent 20%);
        transition: ease-in-out 0.3s;
    }

    .hero .icon-box:hover {
        border-color: var(--accent-color);
    }

    .hero .icon-box:hover h3 a {
        color: var(--accent-color);
    }

    @media (max-width: 768px) {
        .hero h2 {
            font-size: 32px;
        }

        .hero p {
            font-size: 18px;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* body,
    html {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #hero {
        height: 100vh;
        margin-top: -80px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url('storage/logos/tqmpnew-edited.jpg') center/cover no-repeat, rgba(0, 0, 0, 0.4);
        background-blend-mode: overlay;
    } */

    /* video playback */
    .hover-video {
        width: 100%;
        transition: opacity 0.3s ease;
    }

    .hover-video:not(:hover) {
        opacity: 0.7;
    }

    .hover-video:hover {
        opacity: 1;
        /* Play video on hover */
        animation-play-state: running;
    }

    .hover-video:not(:hover) {
        /* Pause video when not hovered */
        animation-play-state: paused;
    }

    /* Font */
    body {
        font-family: 'Poppins', sans-serif;
        font-size: small;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;

    }

    /* General Button Styling */

    /* Card Animation */
    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        opacity: 1;
        /* Ensure the card is fully visible initially */
        transform: translateY(0);
        /* Set the starting position */
        transition: opacity 0.3s ease, transform 0.3s ease;
        /* Smooth transition */
    }

    .card:hover {
        opacity: 0.9;
        /* Slightly fade the card on hover */
        transform: translateY(-10px);
        /* Move the card up */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        /* Add shadow for emphasis */
    }

    /* Button Styles */
    .card-button {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px 0;
        width: 100%;
        background-color: rgb(30, 50, 92);
        color: #fff;
        border-radius: 0 0 8px 8px;
        text-decoration: none;
        opacity: 1;
        /* Ensure the button is fully visible initially */
        transform: translateY(0);
        /* Set the starting position */
        transition: background-color 0.3s ease, opacity 0.3s ease, transform 0.3s ease;
        /* Smooth transition */
    }

    .card-button:hover {
        text-decoration: none;
        background-color: #172647;
        color: #fff;
        opacity: 0.9;
        /* Slightly fade the button on hover */
        transform: translateY(-5px);
        /* Move the button up slightly */
    }




    .btn {
        width: 120px;
    }

    /* navbar effects  */

    .nav-link {
        color: #1C2033;
        font-weight: normal;
        transition: color 0.3s ease, font-weight 0.3s ease;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link:focus,
    .navbar .nav-link.active {
        color: #7E1416;
        font-weight: bold;
    }

    .sticky-top {
        position: sticky;
        top: 0;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .header {
        max-width: 100%;
        height: auto;
    }

    .navbar-toggler {
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .nav {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .nav-link {
            width: 100%;
            text-align: left;
            padding: 0.5rem 1rem;
        }

        .navbar-collapse {
            background-color: white;
            padding: 10px;
        }

        .navbar-toggler {
            display: inline-block;
        }
    }

    @media (min-width: 769px) {
        .navbar-toggler {
            display: none;
        }

        .nav {
            flex-direction: row;
            align-items: center;
        }

    }

    /* button effect  */
    .btn {

        border: none;
        border-radius: 4px;
        /* Slightly rounded corners */
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
    }

    .btn:hover {

        transform: translateY(-2px);
        /* Subtle lift on hover */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        /* Enhanced shadow */
    }

    .btn:active {
        transform: translateY(1px);
        /* Press effect */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Reduced shadow */
    }

    .btn:focus {
        outline: none;
        /* Remove default outline */
        box-shadow: 0 0 8px rgba(23, 38, 71, 0.8);
        /* Focus glow */
    }



    /* End of header */

    /* Landing Page Scrolling Animation */
    .custom-section {
        background-color: rgb(255, 255, 255);
        /* Light grey background */
        font-family: 'Roboto', sans-serif;
        /* Modern, clean font */
    }

    .text-danger {
        color: #7E1416 !important;
        /* Consistent color branding */
    }

    button.btn-danger {
        background-color: #7E1416;
        /* Match primary brand color */
        color: white;
        border: none;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-danger:hover {
        background-color: #7E1416;
        transform: translateY(-2px);
        font-size: smaller;
    }

    button.btn-primary {
        background-color: #1E325C;
        /* Match primary brand color */
        color: white;
        border: none;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-primary:hover {
        background-color: #172647;
        transform: translateY(-2px);
        font-size: smaller;
    }

    button.btn-warning {
        background-color: #EACF68;
        /* Match primary brand color */
        color: #172647;
        border: none;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-warning:hover {
        background-color: #EACF68;
        transform: translateY(-2px);
        font-size: smaller;
    }


    button.btn-light {
        background-color: #FFFFFF;
        /* Match primary brand color */
        color: #172647;
        border: rgb(48, 53, 65);
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-light:hover {
        background-color: #FFFFFF;
        transform: translateY(-2px);
        font-size: smaller;
    }

    button.btn-outline-light {
        background-color: none;
        /* Match primary brand color */
        color: #FFFFFF;
        border: 1px solid #FFFFFF;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-outline-light:hover {
        background-color: #FFFFFF;
        transform: translateY(-2px);
        font-size: smaller;
        font-weight: bold;
    }

    button.btn-outline-warning {
        background-color: none;
        /* Match primary brand color */
        color: #EACF68;
        border: #EACF68;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-outline-warning:hover {
        background-color: #EACF68;
        transform: translateY(-2px);
        font-size: smaller;
    }

    button.btn-outline-danger {
        background-color: transparent;
        /* Fix 'none' to 'transparent' */
        color: #7E1416;
        border: 1px solid #7E1416;
        /* Specify solid border style */
        font-size: smaller;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-outline-danger:hover {
        background-color: #7E1416;
        color: #ffffff;
        font-weight: bold;
        /* Optional: Change text color on hover */
        transform: translateY(-2px);
    }

    button.btn-outline-primary {
        background-color: transparent;
        color: #172647;
        border: 1px solid #1E325C;
        font-size: smaller;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-outline-primary:hover {
        background-color: #172647;
        color: #ffffff;
        font-weight: bold;
        transform: translateY(-2px);
    }

    a.btn-outline-danger {
        background-color: #7E1416;
        /* Fix 'none' to 'transparent' */
        color: #fff;
        border: 0.5px solid #7E1416;
        /* Specify solid border style */
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    a.btn-outline-danger:hover {
        background-color: #fff;
        color: #7E1416;
        font-weight: bold;
        transform: translateY(-2px);
    }

    a.btn-danger {
        background-color: #7E1416;
        /* Match primary brand color */
        color: #ffffff;
        border: none;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    a.btn-danger:hover {
        background-color: #7E1416;
        transform: translateY(-2px);
        font-size: smaller;
    }

    a.btn-primary {
        background-color: #1E325C;
        /* Match primary brand color */
        color: white;
        border: none;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    a.btn-primary:hover {
        background-color: #172647;
        transform: translateY(-2px);
        font-size: smaller;
    }

    a.btn-light {
        background-color: #FFFFFF;
        /* Match primary brand color */
        color: #172647;
        border: #172647;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    a.btn-light:hover {
        background-color: #FFFFFF;
        transform: translateY(-2px);
        font-size: smaller;
    }

    a.btn-outline-primary {
        background-color: #1E325C;
        color: #fff;
        border: 0.5px solid #1E325C;
        font-size: smaller;

        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    a.btn-outline-primary:hover {
        background-color: #fff;
        color: #172647;
        font-weight: bold;
        transform: translateY(-2px);
    }

    a.btn-outline-light {
        background-color: none;
        /* Match primary brand color */
        color: #FFFFFF;
        border: 1px solid #FFFFFF;
        font-size: smaller;

        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    a.btn-outline-light:hover {
        background-color: #FFFFFF;
        transform: translateY(-2px);
        font-size: smaller;
        font-weight: bold;
    }

    .img-fluid {
        border-radius: 10px;
    }

    .image-overlay {
        pointer-events: none;
    }

    .image-overlay.transition-opacity {
        transition: opacity 0.3s ease-in-out;
    }

    .image-overlay.hover-opacity-50:hover {
        opacity: 0.5;
    }

    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* End of Landing Page Scrolling Animation */


    /* About us Page */

    /* Optional: Adds top padding to the text column */
    .text-column {
        padding-top: 50px;
        /* Adjust padding for proper spacing */
    }

    .custom-image {
        border-radius: 0 50px 50px 0;
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .custom-section {
        min-height: 65vh;
        display: flex;
        align-items: center;
    }

    .thumbnail {
        cursor: pointer;
        border: 1px solid #ddd;
        border-radius: 8px;
        width: 100px;
    }

    .thumbnail:hover {
        border-color: #7E1416;
    }

    /* Company Logos Animation  */
    .logo-scroller {
        overflow: hidden;
        position: relative;
        white-space: nowrap;
    }

    .logos {
        display: inline-flex;
        gap: 20px;
        animation: slide 20s linear infinite;
    }

    .header-img {
        height: 50px;
        object-fit: contain;
        aspect-ratio: auto;
    }

    /* Keyframes for infinite sliding */
    @keyframes slide {
        from {
            transform: translateX(0%);
        }

        to {
            transform: translateX(-20%);
        }
    }

    /* End of Company Logos Animation  */
    .image-aboutus-banner {
        background: linear-gradient(rgba(129, 38, 38, 0.7), rgba(71, 69, 69, 0.7)), url("https://images.pexels.com/photos/7219187/pexels-photo-7219187.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        color: #fff;
        padding-top: 110px;
        padding-bottom: 110px;
    }

    /* Dropdown hover effects!! */
    /* General Styles for Dropdown */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-menu {
        display: none;
        /* Hidden by default */
        position: absolute;
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 10px;
        list-style-type: none;
        margin: 0;
        z-index: 1000;
    }

    /* Show menu on hover */
    .dropdown:hover .dropdown-menu {
        display: block;
        /* Show the dropdown */
    }

    /* Style dropdown links */
    .dropdown-menu li a {
        color: #000;
        text-decoration: none;
        padding: 5px 15px;
        display: block;
    }

    .dropdown-menu li a:hover {
        background-color: #f1f1f1;
        color: #7E1416;
    }

    .dropdown-menu-sm {
        font-size: 0.875rem;
        padding: 0.5rem;
    }

    /* Pagination button styles */
    .pagination-button {
        /* background-color: #172647;
        color: #fff;
        font-size: smaller;
        padding: 5px 10px;
        margin-right: 10px;
        border: 1px solid transparent;
        border-radius: 4px;
        transition: all 0.3s ease; */

        background-color: transparent;
        color: #7E1416;
        border: 1px solid #7E1416;
        font-size: smaller;
        padding: 5px 10px;
        margin-right: 10px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .pagination-button.active {
        background-color: #7E1416;
        color: #fff;
        border-color: #7E1416;
        border-radius: 4px;
        font-weight: bold;
        transform: scale(1.1);

    }

    .pagination-button:hover {
        background-color: #7E1416;
        border-radius: 4px;
        color: #ffffff;
        transform: translateY(-2px);
        cursor: pointer;
    }
</style>