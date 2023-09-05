document.getElementById("contactForm").addEventListener('submit', functSubmit);

function functSubmit(event) {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const service = document.getElementById("services").value;
    const msg = document.getElementById("message").value;

    Email.send({
        SecureToken: "C973D7AD-F097-4B95-91F4-40ABC5567812",
        To: 'contact@neophilicsolutions.com',
        From: email,
        Subject: service,
        Body: `Name: ${name}, phone no: ${phone}, message:${msg}`
    }).then(
        message => alert(message)
    );
}

