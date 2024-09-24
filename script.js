// Texte qui s'écrit et s'efface
const typedText = document.getElementById('typed-text');
const textArray = ["Ecommerce Manager", "Digital Growth Manager", "Performance Manager"];
let textArrayIndex = 0;
let charIndex = 0;

function type() {
    if (charIndex < textArray[textArrayIndex].length) {
        typedText.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, 100);
    } else {
        setTimeout(erase, 1500);
    }
}

function erase() {
    if (charIndex > 0) {
        typedText.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(erase, 50);
    } else {
        textArrayIndex++;
        if (textArrayIndex >= textArray.length) {
            textArrayIndex = 0;
        }
        setTimeout(type, 500);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    if(textArray.length) setTimeout(type, 1000);
});
