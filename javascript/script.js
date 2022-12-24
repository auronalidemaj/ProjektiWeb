var vargu = [
    'img/foto.jpg',
    'img/man1.jpg',
    'img/running.jpg'
];

var index = 0;
const koha = 3500;

function krijoSlider(){
    document.getElementById('slider').src = vargu[index];
    index++;
    if(index == vargu.length) {
        index = 0;
    }
    setTimeout("krijoSlider()",koha);
}

krijoSlider();