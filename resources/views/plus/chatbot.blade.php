<section>
    <div class="chatbot-container" id="chatbot">
        <div class="chatbot-header">TQMP Chatbot <button class="close-btn" onclick="closeChat()">&times;</button></div>

        <div class="chatbot-body" id="chatbot-body">

            <!-- Old content -->
            <!-- <div class="d-flex align-items-start" style="gap: 10px;">
                <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">TQ</div>
                <div class="agent-message">
                    Welcome! Let's get started. What do you need? <br><br> Select a topic:
                </div>
            </div>

            <div class="text-center chat-topics">
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="showRegistrationPrompt()"> I want to register as a user</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="showStoreLocator()"> Store Locator</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="showTrackingPrompt()"> I want to track an order</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="showCancelPrompt()"> I want to cancel my order</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;"> Chat with a Sales Representative</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="showMostViewedPrompt()"> Most viewed products</button>
            </div> -->

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

<!-- js for workflows -->
<script>
    // Main chat functions
    function showRegistrationPrompt() {
        addUserMessage("I want to register as a user");
        showLoadingEffect(() => {
            addAgentMessage(
                "Sure! You can register as a user by clicking the link below: <br>" +
                "<a href='/register' target='_blank'>Register Here</a>. <br><br>" +
                "Is there anything else I can help you with?",
                [{
                        text: "What are the benefits?",
                        action: "showBenefits()"
                    },
                    {
                        text: "Go back",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function showBenefits() {
        addUserMessage("What are the benefits of being a user?");
        showLoadingEffect(() => {
            addAgentMessage(
                "Being a registered user comes with many perks! You can enjoy:<br>" +
                "• Multiple delivery options<br>" +
                "• Exclusive offers<br>" +
                "• Door-to-door delivery services<br><br>" +
                "Does that sound good to you?",
                [{
                        text: "Yes, I want to register",
                        action: "showRegistrationPrompt()"
                    },
                    {
                        text: "Go back",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function goBack() {
        showLoadingEffect(() => {
            document.getElementById('chatbot-body').innerHTML = '';
            addAgentMessage(
                "Welcome back! How can I assist you today?",
                [{
                        text: "Register as user",
                        action: "showRegistrationPrompt()"
                    },
                    {
                        text: "Store Locator",
                        action: "showStoreLocator()"
                    },
                    {
                        text: "Track an order",
                        action: "showTrackingPrompt()"
                    },
                    {
                        text: "Cancel order",
                        action: "showCancelPrompt()"
                    },
                    {
                        text: "Popular products",
                        action: "showMostViewedPrompt()"
                    },
                    {
                        text: "Chat with agent",
                        action: "startLiveChat()"
                    }
                ]
            );
        });
    }


    // Main chat functions
    function showRegistrationPrompt() {
        addUserMessage("I want to register as a user");
        showLoadingEffect(() => {
            addAgentMessage(
                "Sure! You can register as a user by clicking the link below: <br>" +
                "<a href='/register' target='_blank' class='text-danger'>Register Here</a>. <br><br>" +
                "Is there anything else I can help you with?",
                [{
                        text: "What are the benefits of being a user?",
                        action: "showBenefits()"
                    },
                    {
                        text: "Go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function showBenefits() {
        addUserMessage("What are the benefits?");
        showLoadingEffect(() => {
            addAgentMessage(
                "Being a registered user comes with many perks! You can enjoy:<br><br>" +
                "✓ Multiple delivery options<br>" +
                "✓ Exclusive member offers<br>" +
                "✓ Door-to-door delivery services<br>" +
                "✓ Faster checkout process<br>" +
                "✓ Order history tracking<br><br>" +
                "Would you like to register now?",
                [{
                        text: "Yes, take me to registration",
                        action: "window.open('/register', '_blank')"
                    },
                    {
                        text: "No, go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function showStoreLocator() {
        addUserMessage("I need to find a store");
        showLoadingEffect(() => {
            addAgentMessage(
                "You can find our nearest store locations using our store locator. <br><br>" +
                "Would you like to:",
                [{
                        text: "Open store locator",
                        action: "window.open('/contact', '_blank')"
                    },
                    {
                        text: "See store hours",
                        action: "showStoreHours()"
                    },
                    {
                        text: "Go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function showStoreHours() {
        addUserMessage("What are your store hours?");
        showLoadingEffect(() => {
            addAgentMessage(
                "Our standard store hours are:<br>" +
                "Monday-Saturday: 8:00 AM - 5:00 PM<br>" +
                "Sunday: Closed<br><br>",
                [{
                        text: "Open store locator",
                        action: "window.open('/Contact', '_blank')"
                    },
                    {
                        text: "Go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function showTrackingPrompt() {
        addUserMessage("I want to track an order");
        showLoadingEffect(() => {
            addAgentMessage(
                "To track your order, please enter your tracking number below. <br><br>" +
                "You can find your tracking number in your order confirmation email.",
                [{
                        text: "Enter tracking number",
                        action: "openTrackingPage()"
                    },
                    {
                        text: "I don't have my tracking number",
                        action: "showNoTrackingHelp()"
                    },
                    {
                        text: "Go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function openTrackingPage() {
        window.open('/track-order', '_blank');
        addUserMessage("I'll open the tracking page");
        showLoadingEffect(() => {
            addAgentMessage(
                "I've opened the order tracking page in a new tab. <br><br>" +
                "Is there anything else I can help you with?",
                [{
                        text: "Yes, I need other help",
                        action: "goBack()"
                    },
                    {
                        text: "No, I'm done",
                        action: "endChat()"
                    }
                ]
            );
        });
    }

    function showNoTrackingHelp() {
        addUserMessage("I don't have my tracking number");
        showLoadingEffect(() => {
            addAgentMessage(
                "No problem! You can retrieve your tracking number by:<br>" +
                "1. Checking your order confirmation email<br>" +
                "2. Logging into your account<br>" +
                "3. Contacting our customer service<br><br>" +
                "Would you like me to help you with any of these options?",
                [{
                        text: "Help me find confirmation email",
                        action: "showEmailHelp()"
                    },
                    {
                        text: "Open login page",
                        action: "window.open('/login', '_blank')"
                    },
                    {
                        text: "Contact customer service",
                        action: "startLiveChat()"
                    },
                    {
                        text: "Go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function showCancelPrompt() {
        addUserMessage("I want to cancel my order");
        showLoadingEffect(() => {
            addAgentMessage(
                "I can help you cancel your order. Please note:<br>" +
                "• Orders already shipped cannot be canceled<br>" +
                "• Refunds may take 3-5 business days<br><br>" +
                "Would you like to proceed with cancellation?",
                [{
                        text: "Yes, cancel my order",
                        action: "openCancelPage()"
                    },
                    {
                        text: "Check order status first",
                        action: "showTrackingPrompt()"
                    },
                    {
                        text: "Go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function openCancelPage() {
        window.open('/cancel-order', '_blank');
        addUserMessage("I'll proceed with cancellation");
        showLoadingEffect(() => {
            addAgentMessage(
                "I've opened the order cancellation page in a new tab. <br><br>" +
                "If you need any assistance with the process, please don't hesitate to ask.",
                [{
                        text: "I need help with cancellation",
                        action: "startLiveChat()"
                    },
                    {
                        text: "Return to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function showMostViewedPrompt() {
        addUserMessage("Show me popular products");
        showLoadingEffect(() => {
            addAgentMessage(
                "Here are our current most popular services/products:<br>" +
                "1. Aluminum Manufacturing<br>" +
                "2. Glass Manufacturing<br>" +
                "3. Glass Processing<br>" +
                "4. Bullet Proofing<br>" +
                "5. Other Products<br><br>" +
                "Would you like to browse any of these categories?",
                [{
                        text: "View Aluminum Manufacturing",
                        action: "window.open('/aluminummanufacturing', '_blank')"
                    },
                    {
                        text: "View Glass Manufacturing",
                        action: "window.open('/glassmanufacturing', '_blank')"
                    },
                    {
                        text: "View Glass Processing",
                        action: "window.open('/glassprocessing', '_blank')"
                    },
                    {
                        text: "View Bullet Proofing",
                        action: "window.open('/bulletproofing', '_blank')"
                    },
                    {
                        text: "View Other Products",
                        action: "window.open('/gentrade', '_blank')"
                    },
                    {
                        text: "Go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function startLiveChat() {
        addUserMessage("I want to chat with an agent");
        showLoadingEffect(() => {
            addAgentMessage(
                "I'm connecting you to a live agent now. Please wait...<br>" +
                "Average wait time: 2 minutes<br><br>" +
                "While you wait, is there anything else I can help with?",
                [{
                        text: "Continue waiting for agent",
                        action: "continueWaiting()"
                    },
                    {
                        text: "Cancel and go back",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function endChat() {
        addUserMessage("No, I'm done");
        showLoadingEffect(() => {
            addAgentMessage(
                "Thank you for chatting with us! If you need any further assistance, don't hesitate to come back.<br><br>" +
                "Have a great day!",
                [{
                    text: "Start new conversation",
                    action: "goBack()"
                }]
            );
        });
    }

    // function goBack() {
    //     showLoadingEffect(() => {
    //         addAgentMessage(
    //             "What would you like help with today?",
    //             [{
    //                     text: "Register as user",
    //                     action: "showRegistrationPrompt()"
    //                 },
    //                 {
    //                     text: "Find a store",
    //                     action: "showStoreLocator()"
    //                 },
    //                 {
    //                     text: "Track an order",
    //                     action: "showTrackingPrompt()"
    //                 },
    //                 {
    //                     text: "Cancel order",
    //                     action: "showCancelPrompt()"
    //                 },
    //                 {
    //                     text: "Popular products",
    //                     action: "showMostViewedPrompt()"
    //                 },
    //                 {
    //                     text: "Chat with agent",
    //                     action: "startLiveChat()"
    //                 }
    //             ]
    //         );
    //     });
    // }

    // Helper functions
    function toggleChat() {
        const chatbotContainer = document.getElementById('chatbot');
        if (chatbotContainer.style.display === 'none' || chatbotContainer.style.display === '') {
            chatbotContainer.style.display = 'block';
            showLoadingEffect(() => {
                goBack(); // Show the main menu after the loading effect
            });
        } else {
            chatbotContainer.style.display = 'none';
        }
    }

    function addUserMessage(message) {
        const chatbotBody = document.getElementById('chatbot-body');
        const messageDiv = document.createElement('div');
        messageDiv.className = 'd-flex align-items-start justify-content-end';
        messageDiv.innerHTML = `
                <div class="user-message">
                    ${message}
                </div>
            `;
        chatbotBody.appendChild(messageDiv);
        scrollToBottom();
    }

    function addAgentMessage(message, buttons) {
        const chatbotBody = document.getElementById('chatbot-body');
        const messageDiv = document.createElement('div');
        messageDiv.className = 'd-flex align-items-start';
        messageDiv.innerHTML = `
                <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">TQ</div>
                <div class="agent-message">
                    ${message}
                </div>
            `;
        chatbotBody.appendChild(messageDiv);

        if (buttons && buttons.length > 0) {
            const buttonsDiv = document.createElement('div');
            buttonsDiv.className = 'chat-topics';
            buttons.forEach(btn => {
                const button = document.createElement('button');
                button.className = 'btn btn-outline-danger mb-2 w-100';
                button.textContent = btn.text;
                button.onclick = function() {
                    eval(btn.action);
                };
                buttonsDiv.appendChild(button);
            });
            chatbotBody.appendChild(buttonsDiv);
        }

        scrollToBottom();
    }

    function showLoadingEffect(callback) {
        const chatbotBody = document.getElementById('chatbot-body');
        const loader = document.createElement('div');
        loader.className = 'd-flex align-items-start mb-3';
        loader.style.opacity = '0'; // Start with opacity 0 for animation
        loader.style.transition = 'opacity 0.5s ease'; // Smooth transition for opacity
        loader.innerHTML = `
                <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">TQ</div>
                <div class="typing-indicator">
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                </div>
            `;
        chatbotBody.appendChild(loader);

        // Trigger the animation
        setTimeout(() => {
            loader.style.opacity = '1'; // Fade in
        }, 10);

        scrollToBottom();

        setTimeout(() => {
            loader.style.opacity = '0'; // Fade out before removal
            setTimeout(() => {
                chatbotBody.removeChild(loader);
                callback();
            }, 500); // Match the fade-out duration
        }, 1500);
    }

    function scrollToBottom() {
        const chatbotBody = document.getElementById('chatbot-body');
        chatbotBody.scrollTop = chatbotBody.scrollHeight;
    }

    // Initialize chat
    function initChatbot() {
        document.getElementById('chatbot-body').innerHTML = '';
        addAgentMessage(
            "Hello! I'm TQ, your virtual assistant. How can I help you today?",
            [{
                    text: "Register as user",
                    action: "showRegistrationPrompt()"
                },
                {
                    text: "Find a store",
                    action: "showStoreLocator()"
                },
                {
                    text: "Track an order",
                    action: "showTrackingPrompt()"
                },
                {
                    text: "Cancel order",
                    action: "showCancelPrompt()"
                },
                {
                    text: "Popular products",
                    action: "showMostViewedPrompt()"
                },
                {
                    text: "Chat with agent",
                    action: "startLiveChat()"
                }
            ]
        );
    }

    // Start the chat when page loads
</script>