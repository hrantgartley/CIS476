[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/67wvAZQ6)
# Secure Shopping

Create a web app consisting of the following pages:

*    Display at least three items that can be purchased along with a quantity field and price for each. Provide a submit button that sends the order to the server for processing.
*    Create an order summary page based on the quantities chosen on the first page. Display a subtotal for confirmation. When the user confirms the purchase they are sent to the tax calculation page.
*    Calculate the tax based on the rate in Florence. Display the subtotal, tax, and total. Allow the user to proceed to the checkout or continue shopping.
*    To checkout, the user must login first.  The password is "imnotbroke".  Use the "PHP File", authentication.php, which sends authenticated users to the checkout page; invalid users are sent back to the login page. 
*    The checkout page must display the total and simulate payment with a credit card.  Only authenticated users can use the checkout page.
*    Extra Credit:  Validate the credit card number, using the information below, with a message that indicates that the card was accepted by name or rejected (e.g., Your VISA ending with 1234 has been charged $12.50; Invalid card). You must use a function to validate the card number.
*    You must use the user's session to track conversational state (no HTML hidden fields).
*    You must validate all form input to ensure that there are no special characters received as input.

Cards Accepted

    MASTERCARD Prefix=51-55, Length=16
    VISA Prefix=4, Length=13 or 16
    AMEX Prefix=34 or 37, Length=15

