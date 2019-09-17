
/* The slide images are contained in the slides array. */
var slides = new Array('images/slide_1.jpg',
        'images/slide_2.jpg',
        'images/slide_3.jpg',
        'images/slide_4.jpg',
        'images/slide_5.jpg');


$(document).ready(function() {

    $('.arrow.left').click(function() {
        prev();

        clearInterval(auto);
    });

    $('.arrow.right').click(function() {
        next();
        clearInterval(auto);
    });

    for (var i = 0; i < slides.length; i++)
    {
        (new Image()).src = slides[i];
    }

    transition(1);

    var auto;

    auto = setInterval(function() {
        next();
    }, 10 * 1000);
});

var current = {};
function transition(id)
{
    if (!slides[id - 1])
        return false;

    if (current.id)
    {
        if (current.id == id)
            return false;

        current.layer.css('z-index', 10);

        $('.mosaic-slide').not(current.layer).remove();
    }

    var newLayer = $('<div class="mosaic-slide">').html(generateGrid({rows: 7, cols: 8, image: slides[id - 1]}));

    newLayer.css('z-index', 1);

    $('#mosaic-slideshow').append(newLayer);

    if (current.layer)
    {

        $('.tile', current.layer).each(function(i) {
            var tile = $(this);
            setTimeout(function() {
                tile.css('visibility', 'hidden');
            }, i * 10);
        })
    }

    current.id = id;
    current.layer = newLayer;
}

function next()
{
    if (current.id)
    {
        transition(current.id % slides.length + 1);
    }
}

function prev()
{
    if (current.id)
    {
        transition((current.id + (slides.length - 2)) % slides.length + 1);
    }

}

var tabwidth = 60, tabheight = 60;

function generateGrid(param)
{

    var elem = $([]), tmp;

    for (var i = 0; i < param.rows; i++)
    {
        for (var j = 0; j < param.cols; j++)
        {
            tmp = $('<div>', {
                "class": "tile",
                "css": {
                    "background": '#555 url(' + param.image + ') no-repeat ' + (-j * tabwidth) + 'px ' + (-i * tabheight) + 'px'
                }
            });


            elem = elem.add(tmp);
        }


        elem = elem.add('<div class="clear"></div>');
    }

    return elem;
}