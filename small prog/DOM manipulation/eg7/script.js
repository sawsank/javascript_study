function myFunction() {
    var w = window.open();
    w.document.open();
    w.document.write("<h2>hello world!</h2>");
    w.document.close();
}