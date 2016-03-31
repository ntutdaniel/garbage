/* Drag'n drop stuff */
window.ondragover = function (e) {
    e.preventDefault()
};
window.ondrop = function (e) {
    e.preventDefault();
    upload(e.dataTransfer.files[0]);
}
function upload(file) {
    if (!file || !file.type.match(/image.*/)) {
        alert("請上傳圖片");
        return;
    }
    $("body").addClass("uploading");
    $("#loading").show();
    var fd = new FormData();
    fd.append("image", file);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "https://api.imgur.com/3/image.json"); // Boooom!
    xhr.onload = function () {
        $.ajax({
            type: "POST",
            url: './db/update.php',
            data: 'url=' + JSON.parse(xhr.responseText).data.link,
            dataType: 'text',
            success: function (data) {
                console.log(data);
                window.location.reload("./index.html");
            }
        });
    };
    xhr.setRequestHeader('Authorization', 'Client-ID 6f9e22c68cacf03'); // Get your own key http://api.imgur.com/
    xhr.send(fd);
    //$("button").attr("data");
}
