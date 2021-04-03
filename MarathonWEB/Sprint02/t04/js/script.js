checkDivision(
    Number(prompt("Enter start Of Range")),
    Number(prompt("Enter start Of Range"))
)
function checkDivision(beginRange, endRange) {
    if (beginRange < endRange) {
        showInfoOfNumber(beginRange)
        beginRange++
        checkDivision(beginRange, endRange)
    }
}
function showInfoOfNumber(number) {
    var result = number + " is"
    if (number % 2 == 0) result += " even"
    if (number % 3 == 0) result += " a multiple of 3"
    if (number % 10 == 0) result += " multiple of 10"
    if (result == (number + " is")) result = number + " -"
    console.log(result)
}