<section>
    <div class="chatbot-container" id="chatbot">
        <div class="chatbot-header text-start">TQMP Chatbot <button class="close-btn" onclick="closeChat()">&times;</button></div>
        <div class="chatbot-body" id="chatbot-body">
            <div class="chat-message.bot" style="width: 100%;"> Welcome! Let's get started. What do you need? <br> Select a topic:</div>
            <div class="chat-topics">

                <div class="topics-buttons" style="display: flex; flex-direction: column; gap: 10px;">
                    <button class="btn btn-sm btn-outline-danger" style="width: 100%;" onclick="selectTopic('General Inquiry')">I want to register as a user</button>
                    <button class="btn btn-sm btn-outline-danger"  style="width: 100%;" onclick="selectTopic('Technical Support')">Store Locator</button>
                    <button class="btn btn-sm btn-outline-danger"  style="width: 100%;" onclick="selectTopic('Billing')">I want to track an order</button>
                    <button class="btn btn-sm btn-outline-danger"  style="width: 100%;" onclick="selectTopic('Feedback')">I want to cancel my order</button>
                    <button class="btn btn-sm btn-outline-danger"  style="width: 100%;" onclick="selectTopic('Feedback')">Chat with a Sales Representative</button>
                    <button class="btn btn-sm btn-outline-danger"  style="width: 100%;" onclick="selectTopic('Feedback')">Most viewed products</button>
                </div>
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