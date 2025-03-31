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
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;"> I want to register as a user</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;"> Store Locator</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;"> I want to track an order</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;"> I want to cancel my order</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;"> Chat with a Sales Representative</button>
                <button class="btn btn-sm btn-outline-danger" style="width: 100%;"> Most viewed products</button>
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