// Online education script

if (document.getElementsByClassName("menu_online_edu").length > 0) {
    var menuEdu = document.getElementsByClassName("menu_online_edu")[0];


    var links = menuEdu.getElementsByTagName("a");

    function onlineEduCallback(e) {
        e.preventDefault();
        console.log(e.target.href);
        var url = e.target.href

        var indexOfTag = url.indexOf("tag");
        var tagNameString = url.substring(indexOfTag);

        var tagNameArray = tagNameString.split("/");
        var tagName = tagNameArray[1];

        // var expires = new Date() + 365 * 24 * 60 * 60 * 1000; // in a year
        var expires = new Date(); // in a year
        var maxAge = 365 * 24 * 60 * 60;
        var cookie = "online_edu_class=" + tagName + ";path=/;max-age=" + maxAge + "";

        document.cookie = cookie;

        location = location;

    }

    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("click", onlineEduCallback);
    }

    // menuEdu.onclick(function (e) {
    //     e.target.getElementsByTagName("a").preventDefault();
    //     console.log(e);
    // });
}