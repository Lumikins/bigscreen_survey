let myText = document.getElementById("comment_20");
let result = document.getElementById("current");
let limit = 500;

result.textContent = `0 / ${limit}`;

myText.addEventListener("input", function () {
    let textLength = myText.value.length;
    result.textContent = `${textLength} / ${limit}`;
});
