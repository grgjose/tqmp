$(document).ready(function () {
    function computeTotal() {
        let subtotal = 0;
        let shippingCost = 0; // Example shipping cost
        let discount = 0; // Example discount
        let checkedItems = 0;

        // Loop through only checked items
        $("tbody tr").each(function () {
            let isChecked = $(this).find("input[type='checkbox']").prop("checked");
            if (isChecked) {
                let priceText = $(this).find(".prices").text().replace("₱", "").trim();
                let quantity = $(this).find("input[type='number']").val();

                if (priceText && quantity) {
                    let price = parseFloat(priceText) || 0;
                    let qty = parseInt(quantity, 10) || 1;
                    subtotal += price * qty;

                    $(this).find(".hiddenPrice").val(price * qty);
                    checkedItems++; // Count checked items
                }
            }
        });

        // If no items are checked, reset everything to ₱0.00
        if (checkedItems === 0) {
            subtotal = 0;
            shippingCost = 0;
            discount = 0;
        }

        let total = subtotal + shippingCost - discount;

        // Update UI with computed values
        $(".subtotal").text("₱" + subtotal.toFixed(2));
        $(".shipping-cost").text("₱" + shippingCost.toFixed(2));
        $(".discount").text("₱" + discount.toFixed(2));
        $(".total-payable2").text("₱" + total.toFixed(2));
    }

    // Compute total on page load
    computeTotal();

    // Recompute when quantity changes or checkbox is toggled
    $(document).on("input", "input[type='number']", function () {
        computeTotal();
    });

    $(document).on("change", "input[type='checkbox']", function () {
        computeTotal();
    });
});

function removeItem(element) {
    // Find the closest row and remove it
    const row = element.closest('tr');
    if (row) {
        row.remove();
    }
}
