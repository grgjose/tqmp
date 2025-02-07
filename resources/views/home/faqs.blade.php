<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>FAQs | Total Quality Management Products Philippines</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('storage/css/main.css') }}">

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>

    <!-- Chatbot CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }

        .chatbot-container {
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 350px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            display: none;
            z-index: 1000;
        }

        .chatbot-header {
            background: #7E1416;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chatbot-header .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .chatbot-body {
            padding: 15px;
            height: 300px;
            overflow-y: auto;
            background: #fafafa;
            border: 1px solid #ddd;
            border-left: none;
            border-right: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .chat-message {
            padding: 10px;
            border-radius: 10px;
            max-width: 80%;
            word-wrap: break-word;
        }

        .chat-message.user {
            background: #7E1416;
            align-self: flex-end;
            color: #f1f1f1;
            /* border: 1px solid #7E1416; */
        }

        .chat-message.bot {
            background: #172647;
            align-self: flex-start;
            color: #f1f1f1;
            /* border: 1px solid #1e88e5; */
        }

        .chatbot-footer {
            display: flex;
            align-items: center;
            padding: 10px;
            background: white;
            border-top: 1px solid #ddd;
        }

        .chatbot-footer input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 20px;
            background: #f1f1f1;
            outline: none;
        }

        .chatbot-footer button,
        .chatbot-footer label {
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            color: #7E1416;
            font-size: 24px;
        }

        .chatbot-footer input[type="file"] {
            display: none;
        }

        .chatbot-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #7E1416;
            color: white;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            cursor: pointer;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
        }
    </style>
    <!-- End of Chatbot CSS -->

    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <!-- FAQs Section -->
    <section>
        <div class="container py-4">
            <!-- FAQ Section -->
            <div class="container faq-section">
                <div class="container text-center">
                    <!-- FAQ Heading -->
                    <span class="badge text-white mb-2" style="background-color: #950101;">FAQs</span>
                    <h2 class="fw-bold">Any Questions? Look Here</h2>
                    <p class="text-muted">
                        We have sorted out your frequently asked questions. You can select the one that best meets your needs by clicking below.
                    </p>
                </div>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Can you produce or process this?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we can. Kindly attach the Drawing in order for our Processing Department to assess and analyze your requirement/ sample.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                What is the ideal thickness for?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Depending on the application or use, for example, a primary door with 12mm glass for a frameless or patch door may use 6mm or 8mm, depending on the aluminum profile frame being used.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                What is the ideal size for?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                It depends on where you plan to use or apply it. For example, the main door height will be between 2.1 and 2.4 meters and width between 0.9 and 1.0 meters.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                What is the price of?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The pricing may vary or change depending on the day you received the quotation.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Do you have this item?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Please attach a clear picture to make item verification easier.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                What is your delivery date commitment?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="faq6"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                When you order our products, we can send it right away. You can pick from a variety of couriers or even pick it up right away. The quantity of your order will determine how long it takes to process or produce.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of FAQs Section -->

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->

    <!-- Chatbot -->
    <section>
        <div class="chatbot-container" id="chatbot">
            <div class="chatbot-header text-start">TQMP Chatbot <button class="close-btn" onclick="closeChat()">&times;</button></div>
            <div class="chatbot-body" id="chatbot-body">
                <div class="chat-message bot">Welcome! How can I help you?</div>
            </div>
            <div class="chatbot-footer">
                <input type="text" id="chat-input" placeholder="Type a message...">
                <label for="file-upload"><i class="fas fa-paperclip"></i></label>
                <input type="file" id="file-upload">
                <button onclick="sendMessage()"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
        <div class="chatbot-icon" onclick="toggleChat()">
            <i class="fas fa-comment"></i>
        </div>
    </section>
    <!-- End of Chatbot -->

    <!-- Chatbot Script  -->
    <script>
        function toggleChat() {
            var chatbox = document.getElementById("chatbot");
            if (chatbox.style.display === "none" || chatbox.style.display === "") {
                chatbox.style.display = "block";
            } else {
                chatbox.style.display = "none";
            }
        }

        function closeChat() {
            document.getElementById("chatbot").style.display = "none";
        }

        function sendMessage() {
            var input = document.getElementById("chat-input");
            var message = input.value.trim();
            if (message !== "") {
                var chatBody = document.getElementById("chatbot-body");
                var userMessage = document.createElement("div");
                userMessage.classList.add("chat-message", "user");
                userMessage.textContent = message;
                chatBody.appendChild(userMessage);
                input.value = "";
                chatBody.scrollTop = chatBody.scrollHeight;
            }
        }
    </script>
    <!-- End of Chatbot Script  -->
</body>

</html>