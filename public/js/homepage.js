$(document).ready(function () {

    window.alert(1);

    // Function to check if the URL ends with "/carts"
    function isCartPage() {
        return window.location.pathname.endsWith("/cart");
    }

    // Function to compute subtotal and total
    function computeTotal() {
        let subtotal = 0;
        let shippingCost = 100; // Example shipping cost, change dynamically if needed
        let discount = 0; // Example discount, change dynamically if needed

        // Loop through all products in the cart
        $("tbody tr").each(function () {
            let priceText = $(this).find("td:nth-child(4)").text().replace("₱", "").trim();
            let quantity = $(this).find("input[type='number']").val();

            if (priceText && quantity) {
                let price = parseFloat(priceText) || 0;
                let qty = parseInt(quantity, 10) || 1;
                subtotal += price * qty;
            }
        });

        // Calculate total
        let total = subtotal + shippingCost - discount;

        // Update the UI with computed values
        $(".subtotal").text("₱" + subtotal.toFixed(2));
        $(".shipping-cost").text("₱" + shippingCost.toFixed(2));
        $(".discount").text("₱" + discount.toFixed(2));
        $(".total-payable2").text("₱" + total.toFixed(2));
    }

    // Check if we're on the /carts page before running computeTotal()
    if (isCartPage()) {
        computeTotal(); // Compute total on page load

        // Recompute when quantity input changes
        $("input[type='number']").on("input", function () {
            computeTotal();
        });
    }
});