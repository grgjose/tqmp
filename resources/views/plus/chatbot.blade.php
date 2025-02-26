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