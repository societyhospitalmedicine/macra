/* prevent default behavior in image maping for links*/
var areas = document.getElementsByTagName('area');
                        for(var i = 0; i<areas.length; i++){
                            areas[i].addEventListener("click", function(e){
                                e.preventDefault();
                            });
                        };

$(document).ready(function() {
    $('map').imageMapResize();
});