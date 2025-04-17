<section>
    <div class="chatbot-container" id="chatbot">
        <div class="chatbot-header">TQMP Chatbot <button class="close-btn" onclick="closeChat()">&times;</button></div>

        <div class="chatbot-body" id="chatbot-body">
            <!-- Old content -->
            <!-- <div class="d-flex align-items-start" style="gap: 10px;">
                <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="background-color: #7E1416;">TQ</div>
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
            <input type="text" id="chat-input" style="font-size: smaller;" placeholder="Type a message...">
            <label for="file-upload"><i class="fas fa-paperclip fa-xs"></i>
                <input type="file" id="file-upload"></label>
            <button onclick="sendMessage()"><i class="fas fa-paper-plane fa-xs"></i></button>
        </div>
    </div>

    <div class="chatbot-icon" onclick="toggleChat()">
        <i class="fas fa-comment"></i>
    </div>
</section>

<!-- JS for workflows -->
<script>
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

    // Chat Menus
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
                        action: "openBenifitsMenu()"
                    },
                    {
                        text: "No, go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function openBenifitsMenu() {
        window.open('/register', '_blank');
        addUserMessage("I'll open the registration page");
        showLoadingEffect(() => {
            addAgentMessage(
                "I've opened the registration page in a new tab. <br><br>" +
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

    function showStoreLocator() {
        addUserMessage("I need to find a store");
        showLoadingEffect(() => {
            addAgentMessage(
                "You can find our nearest store locations using our store locator. <br><br>" +
                "Would you like to:",
                [{
                        text: "Open store locator",
                        action: "openLocationMenu()"
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
                "Sunday: Closed<br>",
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

    function showStoreHours() {
        addUserMessage("What are your store hours?");
        showLoadingEffect(() => {
            addAgentMessage(
                "Our standard store hours are:<br>" +
                "Monday-Saturday: 8:00 AM - 5:00 PM<br>" +
                "Sunday: Closed<br>",
                [{
                        text: "Open store locator",
                        action: "openLocationMenu()"
                    },
                    {
                        text: "Go back to main menu",
                        action: "goBack()"
                    }
                ]
            );
        });
    }

    function openLocationMenu() {
        window.open('/contact', '_blank');
        addUserMessage("I'll open the Contact page and browse the locations");
        showLoadingEffect(() => {
            addAgentMessage(
                "I've opened the contact us page in a new tab. <br><br>" +
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

    function goBack() {
        addUserMessage("Go back to main menu");
        showLoadingEffect(() => {
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

    function endChat() {
        addUserMessage("No, I'm done");
        showLoadingEffect(() => {
            addAgentMessage(
                "Thank you for chatting with us! If you need any further assistance, don't hesitate to come back.<br><br>" +
                "Have a great day!",
                [{
                    text: "Start new conversation",
                    action: "resetAndCollapseChat()" // Changed to new function
                }]
            );
        });
    }

    // New function to handle reset and collapse
    function resetAndCollapseChat() {
        // 1. Clear the chat history
        const chatBody = document.getElementById('chatbot-body');
        if (chatBody) {
            chatBody.innerHTML = '';
        }

        // 2. Collapse the chat window
        const chatbotContainer = document.getElementById('chatbot');
        if (chatbotContainer) {
            chatbotContainer.style.opacity = '0';
            setTimeout(() => {
                chatbotContainer.style.display = 'none';
                // Update toggle button if exists
                const toggleButton = document.getElementById('chatbot-toggle-button');
                if (toggleButton) {
                    toggleButton.textContent = '💬 Open Chat';
                    toggleButton.classList.remove('active');
                }
            }, 300);
        }
    }


    // Keyword detection for all functions
    document.getElementById('chat-input').addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            const userInput = this.value.toLowerCase().trim();

            // Check for registration keywords
            const registrationKeywords = [
                "register", "registration", "sign up", "create account",
                "new account", "how to join", "i want to register",
                "become member", "user registration", "make account"
            ];
            if (registrationKeywords.some(keyword => userInput.includes(keyword))) {
                showRegistrationPrompt();
                this.value = '';
                return;
            }

            // Check for benefits keywords
            const benefitsKeywords = [
                "benefits", "perks", "advantages", "what do i get",
                "why register", "user benefits"
            ];
            if (benefitsKeywords.some(keyword => userInput.includes(keyword))) {
                showBenefits();
                this.value = '';
                return;
            }

            // Check for store locator keywords
            const storeLocatorKeywords = [
                "find store", "store near me", "locations",
                "where are you", "physical store", "store"
            ];
            if (storeLocatorKeywords.some(keyword => userInput.includes(keyword))) {
                showStoreLocator();
                this.value = '';
                return;
            }

            // Check for store hours keywords
            const storeHoursKeywords = [
                "store hours", "opening times", "when are you open",
                "what time do you close", "business hours"
            ];
            if (storeHoursKeywords.some(keyword => userInput.includes(keyword))) {
                showStoreHours();
                this.value = '';
                return;
            }

            // Check for order tracking keywords
            const trackingKeywords = [
                "track", "track order", "track package", "where is my order",
                "order status", "delivery status"
            ];
            if (trackingKeywords.some(keyword => userInput.includes(keyword))) {
                showTrackingPrompt();
                this.value = '';
                return;
            }

            // Check for cancellation keywords
            const cancelKeywords = [
                "cancel", "cancel order", "stop my order", "refund",
                "return item", "want to cancel"
            ];
            if (cancelKeywords.some(keyword => userInput.includes(keyword))) {
                showCancelPrompt();
                this.value = '';
                return;
            }

            // Check for popular products keywords
            const popularKeywords = [
                "popular items", "best sellers", "trending products",
                "what's popular", "recommended products"
            ];
            if (popularKeywords.some(keyword => userInput.includes(keyword))) {
                showMostViewedPrompt();
                this.value = '';
                return;
            }

            // Check for live chat keywords
            const liveChatKeywords = [
                "live agent", "talk to human", "customer service",
                "representative", "real person"
            ];
            if (liveChatKeywords.some(keyword => userInput.includes(keyword))) {
                startLiveChat();
                this.value = '';
                return;
            }

            // Go back to main menu
            const goBackKeywords = [
                "go back", "main menu", "back to main",
                "return to menu", "home"
            ];
            if (goBackKeywords.some(keyword => userInput.includes(keyword))) {
                goBack();
                this.value = '';
                return;
            }

            // If no keywords matched, send as normal message
            sendMessage();
            this.value = '';
        }
    });

    function addUserMessage(msg) {
        /*...*/
    }

    function addAgentMessage(msg, buttons) {
        /*...*/
    }

    function showLoadingEffect(callback) {
        /*...*/
    }

    function sendMessage() {
        /*...*/
    }

    // Helper functions
    function toggleChat() {
        const chatbotContainer = document.getElementById('chatbot');
        const chatBody = document.getElementById('chatbot-body');
        const toggleButton = document.getElementById('chatbot-toggle-button'); // Optional toggle button

        if (chatbotContainer.style.display === 'none' || chatbotContainer.style.display === '') {
            // Show the chat
            chatbotContainer.style.opacity = '0';
            chatbotContainer.style.display = 'block';
            chatbotContainer.style.transition = 'opacity 0.3s ease';

            setTimeout(() => {
                chatbotContainer.style.opacity = '1';
            }, 10);

            // Only initialize if this is the first time opening
            if (chatBody && chatBody.children.length === 0) {
                showLoadingEffect(() => {
                    initChatbot(); // Show main menu only if chat is empty
                });
            }

            // Update button state if toggle button exists
            if (toggleButton) {
                toggleButton.textContent = '× Close Chat';
                toggleButton.classList.add('active');
            }
        } else {
            // Hide the chat
            chatbotContainer.style.opacity = '0';

            setTimeout(() => {
                chatbotContainer.style.display = 'none';
                // Update button state if toggle button exists
                if (toggleButton) {
                    toggleButton.textContent = '💬 Open Chat';
                    toggleButton.classList.remove('active');
                }
            }, 300);
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
                <div class="agent-profile rounded-circle text-white d-flex align-items-center justify-content-center" style="background-color: #7E1416;">TQ</div>
                <div class="agent-message">
                    ${message}
                </div>
            `;
        chatbotBody.appendChild(messageDiv);

        if (buttons && buttons.length > 0) {
            // Remove any existing button groups first
            const existingButtons = document.querySelectorAll('.chat-topics');
            existingButtons.forEach(btnGroup => {
                btnGroup.remove();
            });

            // Create button group container
            const buttonGroup = document.createElement('div');
            buttonGroup.className = 'btn-group-vertical w-100';
            buttonGroup.setAttribute('role', 'group');
            buttonGroup.setAttribute('aria-label', 'Chat options');

            // Create each button
            buttons.forEach((btn, index) => {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'btn btn-outline-danger';

                // Special styling for first/last buttons to maintain rounded corners
                if (index === 0) {
                    button.className += ' rounded-0';
                } else if (index === buttons.length - 1) {
                    button.className += ' rounded-0';
                } else {
                    button.className += ' rounded-0';
                }

                button.textContent = btn.text;

                // Handle button click actions
                button.onclick = function() {
                    // Hide all existing button groups when a new one is clicked
                    const allButtons = document.querySelectorAll('.chat-topics');
                    allButtons.forEach(btnGroup => {
                        btnGroup.remove();
                    });

                    if (btn.action === 'goBack()') {
                        goBack();
                    } else if (btn.action === 'showRegistrationPrompt()') {
                        showRegistrationPrompt();
                    } else if (btn.action.startsWith('window.open')) {
                        const urlMatch = btn.action.match(/window.open\('([^']+)'/);
                        if (urlMatch && urlMatch[1]) {
                            window.open(urlMatch[1], '_blank');
                        }
                    } else {
                        try {
                            eval(btn.action);
                        } catch (e) {
                            console.error('Error executing action:', e);
                        }
                    }
                };

                buttonGroup.appendChild(button);
            });

            // Create wrapper div for proper spacing
            const buttonsDiv = document.createElement('div');
            buttonsDiv.className = 'chat-topics';
            buttonsDiv.appendChild(buttonGroup);
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
                <div class="agent-profile rounded-circle text-white d-flex align-items-center justify-content-center" style="background-color: #7E1416;">TQ</div>
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
</script>