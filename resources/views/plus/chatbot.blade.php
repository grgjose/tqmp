<section>
    <div class="chatbot-container" id="chatbot">
        <div class="chatbot-header text-start">TQMP Chatbot <button class="close-btn" onclick="closeChat()">&times;</button></div>
        <div class="chatbot-body" id="chatbot-body">
            <div class="chat-message bot">Welcome! Let's get started. What do you need?</div>
            <div class="chat-topics">
                <p>Select a topic:</p>
                <div class="topics-buttons" style="display: flex; flex-direction: column; gap: 10px;">
                    <button class="btn btn-sm btn-danger" onclick="selectTopic('General Inquiry')">General Inquiry</button>
                    <button class="btn btn-sm btn-danger" onclick="selectTopic('Technical Support')">Technical Support</button>
                    <button class="btn btn-sm btn-danger" onclick="selectTopic('Billing')">Billing</button>
                    <button class="btn btn-sm btn-danger" onclick="selectTopic('Feedback')">Feedback</button>
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