<style>
    /* Font */
    body {
        font-family: 'Poppins', sans-serif;
        font-size: small;

        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        margin: 0;
        padding: 0;


    }

    /* .montserrat-<uniquifier> {
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    } */

    /* Header  */
    /* General Button Styling */

    /* Card Animation */
    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    /* Button Styles */
    .card-button {
        display: flex;
        justify-content: center;
        padding: 10px 0;
        width: 100%;
        background-color: rgb(30, 50, 92);
        color: #fff;
        border-radius: 0 0 8px 8px;
        text-decoration: none;
        transition: background-color 0.3s, transform 0.3s;
    }

    .card-button:hover {
        text-decoration: none;
        background-color: #172647;
        color: #fff;
        transform: translateY(-5px);
    }


    .btn {
        width: 120px;
    }

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
        border: 2px;
        outline: 2px;
        font-size: 1.5rem;
        /* color: #7E1416; */
        background-color: #7E1416;
        /* background: none; */
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

        .btn-red {
            width: auto;
            text-align: center;
        }
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
        font-weight: bold;
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
        font-weight: bold;
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
        font-weight: bold;
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

    /* About us parallax effect */
    /* Parallax Section */
    .parallax-section {
        background-image: url('https://images.pexels.com/photos/159358/construction-site-build-construction-work-159358.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        background-size: cover;
        background-attachment: fixed;
        /* Enables parallax effect */
        background-position: center;
        background-repeat: no-repeat;
        min-height: 500px;
        display: flex;
        align-items: center;
    }

    .parallax-section .container {
        background: rgba(255, 255, 255, 0.8);
        /* Add a white overlay for text readability */
        padding: 2rem;
        border-radius: 10px;
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