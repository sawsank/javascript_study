function getElements() {
    var x = document.getElementsByTagName("input");
    document.getElementById("demo").innerHTML = x.length;
}