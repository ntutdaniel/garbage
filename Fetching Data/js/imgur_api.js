    /* Drag'n drop stuff */
    window.ondragover = function(e) {
        e.preventDefault()
    };
    window.ondrop = function(e) {
        e.preventDefault(); 
        upload(e.dataTransfer.files[0]); 
    }
    function upload(file) {

        /* Is the file an image? */
        if (!file || !file.type.match(/image.*/)) 
        {
            alert("請上傳圖片");
            return;
        }
        /* It is! */
        document.body.className = "uploading";

        /* Lets build a FormData object*/
        var fd = new FormData(); // I wrote about it: https://hacks.mozilla.org/2011/01/how-to-develop-a-html5-image-uploader/
        fd.append("image", file); // Append the file
        var xhr = new XMLHttpRequest(); // Create the XHR (Cross-Domain XHR FTW!!!) Thank you sooooo much imgur.com
        xhr.open("POST", " https://api.imgur.com/3/"); // Boooom!
        xhr.onload = function() {
            // Big win!
            document.querySelector("#link").href = JSON.parse(xhr.responseText).data.link;
            //document.querySelector("#download-pic").src = JSON.parse(xhr.responseText).data.link;
            document.body.className = "uploaded";
            //顯示address
            var li = document.createElement("li");
            li.innerHTML = JSON.parse(xhr.responseText).data.link;
            document.querySelector("ul").appendChild(li);
        }        

        xhr.setRequestHeader('Authorization', 'Client ID 6f9e22c68cacf03'); // Get your own key http://api.imgur.com/
        
        // Ok, I don't handle the errors. An exercise for the reader.

        /* And now, we send the formdata */
        xhr.send(fd);
    }
