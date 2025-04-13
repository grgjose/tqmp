<section>
    <div class="chatbot-container" id="chatbot">
        <div class="chatbot-header">TQMP Chatbot <button class="close-btn" onclick="closeChat()">&times;</button></div>

        <div class="chatbot-body" id="chatbot-body">
            <div class="d-flex align-items-start" style="gap: 10px;">
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
            </div>

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
    function showLoadingEffect(callback) {
        const chatbotBody = document.getElementById('chatbot-body');
        chatbotBody.innerHTML = `
            <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        `;
        setTimeout(callback, 600);
    }

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

    function showRegistrationPrompt() {
        showLoadingEffect(() => {
            const chatbotBody = document.getElementById('chatbot-body');
            chatbotBody.innerHTML = `
                <div class="d-flex align-items-start" style="gap: 10px;">
                    <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">TQ</div>
                    <div class="agent-message">
                        This is the link for registration: <a href="/register" target="_blank">Register Here</a>. <br><br>Do you have other concerns?
                    </div>
                </div>
                <div class="text-center chat-topics">
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="goBack()">Go back</button>
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="showBenefits()">What is the benefit of being a user?</button>
                </div>
            `;
        });
    }

    function showBenefits() {
        showLoadingEffect(() => {
            const chatbotBody = document.getElementById('chatbot-body');
            chatbotBody.innerHTML = `
                <div class="d-flex align-items-start" style="gap: 10px;">
                    <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">TQ</div>
                    <div class="agent-message">
                        If you are already a valid user, multiple delivery methods and benefits are available. Including Door-to-Door Delivery.
                    </div>
                </div>
                <div class="text-center chat-topics">
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="goBack()">Got it. Thank you!</button>
                </div>
            `;
        });
    }

    function goBack() {
        showLoadingEffect(() => {
            const chatbotBody = document.getElementById('chatbot-body');
            chatbotBody.innerHTML = `
                <div class="d-flex align-items-start" style="gap: 10px;">
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
                </div>
            `;
        });
    }

    function showStoreLocator() {
        showLoadingEffect(() => {
            const chatbotBody = document.getElementById('chatbot-body');
            chatbotBody.innerHTML = `
                <div class="d-flex align-items-start" style="gap: 10px;">
                    <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">TQ</div>
                    <div class="agent-message">
                        Click below to redirect to our locations</a>.
                    </div>
                </div>
                <div class="text-center chat-topics">
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="window.open('/contact', '_blank')">Link to locations</button>
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="goBack()">Go back</button>
                </div>
            `;
        });
    }

    function showTrackingPrompt() {
        showLoadingEffect(() => {
            const chatbotBody = document.getElementById('chatbot-body');
            chatbotBody.innerHTML = `
                <div class="d-flex align-items-start" style="gap: 10px;">
                    <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">TQ</div>
                    <div class="agent-message">
                        <a>Please input your tracking number so we can give you an update</a>.
                    </div>
                </div>
                <div class="text-center chat-topics">
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="window.open('/contact', '_blank')">Input Tracking Number</button>
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="goBack()">Go back</button>
                </div>
            `;
        });
    }

    function showCancelPrompt() {
        showLoadingEffect(() => {
            const chatbotBody = document.getElementById('chatbot-body');
            chatbotBody.innerHTML = `
                <div class="d-flex align-items-start" style="gap: 10px;">
                    <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">TQ</div>
                    <div class="agent-message">
                       <a>Please input your Order #.
                        <br>Note: If your Order is not yet in Transit, then it can be cancelled only for a valid reason.</a>.
                    </div>
                </div>
                <div class="text-center chat-topics">
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="window.open('/contact', '_blank')">Input Tracking Number</button>
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="goBack()">Go back</button>
                </div>
            `;
        });
    }

    function showMostViewedPrompt() {
        showLoadingEffect(() => {
            const chatbotBody = document.getElementById('chatbot-body');
            chatbotBody.innerHTML = `
                <div class="d-flex align-items-start" style="gap: 10px;">
                    <div class="agent-profile rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center">TQ</div>
                    <div class="agent-message">
                       <a>These are our most viewed products:</a>.
                    </div>
                </div>
                <div class="text-center chat-topics">
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="window.open('/contact', '_blank')">Check our Store</button>
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="goBack()">Go back</button>
                </div>
            `;
        });
    }
</script>