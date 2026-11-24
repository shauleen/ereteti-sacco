document.addEventListener("DOMContentLoaded", function () {
    const deliveryForm = document.getElementById("delivery-form");

    if (deliveryForm) {
        deliveryForm.addEventListener("submit", function (event) {
            event.preventDefault();

            const member = document.getElementById("member").value.trim();
            const litres = Number(document.getElementById("litres").value);
            const message = document.getElementById("form-message");
            const memberMessage = document.getElementById("member-message");
            const litresMessage = document.getElementById("litres-message");

            memberMessage.textContent = "";
            litresMessage.textContent = "";
            message.textContent = "";

            let valid = true;

            if (!/^ER-\d{4}$/.test(member)) {
                memberMessage.textContent = "Enter a member number like ER-0001.";
                valid = false;
            }

            if (!Number.isFinite(litres) || litres <= 0) {
                litresMessage.textContent = "Enter a number of litres greater than zero.";
                valid = false;
            }

            if (valid) {
                message.textContent = "Delivery form checked. This demonstration does not save the delivery.";
            }
        });
    }
});
