var firstName = prompt("Enter your first name")
var lastName = prompt("Enter your last name")

function showError() {

}

if (isValid(firstName) && isValid(lastName))
    showFullName(firstName,lastName)
else
    showError()

    function isValid(value) {

    }

function showFullName(fName, lName) {
    console.log(firstName + " " + lastName)
    alert(firstName + " " + lastName)
}