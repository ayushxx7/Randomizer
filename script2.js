var safeColors = ['00','33','66','99','cc','ff'];
var rand = function() {
    return Math.floor(Math.random()*6);
};
var randomColor = function() {
    var r = safeColors[rand()];
    var g = safeColors[rand()];
    var b = safeColors[rand()];
    return "#"+r+g+b;
};
function hover(img) {
    img.setAttribute('src', 'http://dummyimage.com/100x100/eb00eb/fff');
}
function unhover(img) {
    img.setAttribute('src', 'http://dummyimage.com/100x100/000/fff');
}
