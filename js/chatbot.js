const cache = {};

const OPENAI_API_KEY = "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";
const OPENAI_API_ENDPOINT = "https://api.openai.com/v1/engines/text-davinci-003/completions";

const chatToggle = document.getElementById('chat-toggle');
const chatWidget = document.getElementById("chat-widget");
const chatContainer = document.getElementById("chat-container");
const chatMessages = document.getElementById("chat-messages");
const chatInput = document.getElementById("chat-input");
const chatSendButton = document.getElementById("chat-send");

let chatVisible = false;
let introMessageSent = true;

chatToggle.addEventListener('click', () => {
chatVisible = !chatVisible;
chatWidget.classList.toggle('visible', chatVisible);
chatToggle.innerText = chatVisible ? 'X' : 'Chat';
});

chatInput.addEventListener('keydown', (event) => {
if (event.key === 'Enter') {
event.preventDefault();
const userInput = chatInput.value.trim();
if (userInput) {
addChatMessage("You", userInput);
sendChatMessage(userInput);
chatInput.value = "";
}
}
});

chatSendButton.addEventListener("click", () => {
const userInput = chatInput.value.trim();
if (userInput) {
addChatMessage("You", userInput);
sendChatMessage(userInput);
chatInput.value = "";
}
});

function addChatMessage(sender, message) {
const messageContainer = document.createElement("div");
messageContainer.classList.add("chat-message-container");
const messageHeader = document.createElement("div");
messageHeader.classList.add("chat-message-header");
messageHeader.textContent = sender + ":";
const messageBody = document.createElement("div");
messageBody.classList.add("chat-message-body");
messageBody.textContent = message;
messageContainer.appendChild(messageHeader);
messageContainer.appendChild(messageBody);
chatMessages.appendChild(messageContainer);
chatContainer.scrollTop = chatContainer.scrollHeight;
}

function sendChatMessage(message) {

  const loadingElement = document.getElementById("loading");
  loadingElement.style.display = "block";

  fetch(OPENAI_API_ENDPOINT, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${OPENAI_API_KEY}`,
    },
    body: JSON.stringify({
      prompt: `Q: ${message}\nA: `,
      max_tokens: 600,
      temperature: 0.6,
      stop: ["\n"],
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      const chatbotResponse = data.choices[0].text.trim();
      addChatMessage("Neophilic Solutions", chatbotResponse);
      loadingElement.style.display = "none";
    })
    .catch((error) => {
      console.error(error);
      addChatMessage("Neophilic Solutions", "Sorry, Something went wrong in our backend server. We are aware of this issue and trying to get it fixed as soon as possible.");
      loadingElement.style.display = "none";
    });
}
