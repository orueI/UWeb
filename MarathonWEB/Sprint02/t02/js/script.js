const questionName = "What animal is the superhero most similar to?"
const questionGender = "Is the superhero male or female? Leave blank if unknown or other."
const questionAge = "How old is the superhero?"

alert(infoSuperhero(prompt(questionName), prompt(questionGender), prompt(questionAge)))

function infoSuperhero(name, gender, age) {
    return "The superhero name is" + name +"-"+ genderToString(gender, age) + '!'
}
//todo add regex
function genderToString(gender, age) {
        if (gender == "male") {
            return age < 18 ? "boy" : "man"
        } else if (gender == "female") {
            return age < 18 ? "gir" : "woman"
        } else if (gender == "") {
            return age < 18 ? "kid" : "hero"
        } else return "Unknown gender"
}