var input = document.getElementById('file');
var infoArea = document.getElementById('filelable');

console.log(document.getElementById('file'));
input.addEventListener('change', showFileName);

function showFileName(event) {
    var input = event.srcElement;
    var fileName = input.files[0].name;

    infoArea.textContent = fileName;

}