<style>
    /* Font */
    body {
        font-family: 'Inter', sans-serif;
        font-size: small;
        margin: 0;
        padding: 0;
    }

    /* Header  */
    /* General Button Styling */
    .btn {
        width: 110px;
    }

    .btn-red {
        background-color: #950101;
        color: white;
    }

    .btn-red:hover {
        background-color: #950101;
        opacity: 0.9;
    }

    /* Style for menu items */
    .nav-link {
        color: #1C2033;
        font-weight: normal;
        transition: color 0.3s ease, font-weight 0.3s ease;
    }

    .nav-link:hover,
    .nav-link.active {
        color: #950101;
        font-weight: bold;
    }

    /* Header Styling */
    .sticky-top {
        position: sticky;
        top: 0;
        /* z-index: 1020; */
        background-color: white;
        /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
    }

    .header {
        max-width: 100%;
        height: auto;
    }

    /* Responsive Toggle Button */
    .navbar-toggler {
        border: none;
        outline: none;
        font-size: 1.5rem;
        color: #950101;
        background: none;
        cursor: pointer;
    }

    /* Responsive Styles */
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

        .btn-red {
            width: 100%;
            text-align: center;
            margin-top: 10px;
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
        background-color: #ffffff;
        /* Light grey background */
        font-family: 'Roboto', sans-serif;
        /* Modern, clean font */
    }

    .text-danger {
        color: #950101 !important;
        /* Consistent color branding */
    }

    button.btn-danger {
        background-color: #950101;
        /* Match primary brand color */
        color: white;
        border: none;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-danger:hover {
        background-color: #950101;
        transform: translateY(-2px);
        font-size: smaller;
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
        border-color: #950101;
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
    /* Scrolling container */
    .logo-scroller {
        overflow: hidden;
        position: relative;
        white-space: nowrap;
    }

    .logos {
        display: inline-flex;
        gap: 50px;
        /* Space between logos */
        animation: slide 20s linear infinite;
    }

    /* Logos: maintain aspect ratio and size */
    .header-img {
        height: 40px;
        /* Set a consistent height for all logos */
        object-fit: contain;
        /* Ensures logos fit without stretching */
        aspect-ratio: auto;
        /* Automatically maintains the aspect ratio */
    }

    /* Keyframes for infinite sliding */
    @keyframes slide {
        from {
            transform: translateX(0%);
        }

        to {
            transform: translateX(-15%);
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
        /* Highlight on hover */
        color: #950101;
        /* Change text color */
    }
</style>