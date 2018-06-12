/**
 * Created by Igor on 21.04.2017.
 */

var swiper4_1 = new Swiper('.swiper-container4-1', {
    // Optional parameters
    direction: 'horizontal',
    loop: 'true',
    spaceBetween: 0,
    slidesPerView: 4,

    breakpoints: {
        // when window width is <= 400px
        400: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // when window width is <= 635px
        635: {
            slidesPerView: 2,
            spaceBetween: 0
        },
        // when window width is <= 865px
        865: {
            slidesPerView: 3,
            spaceBetween: 0
        },
        // when window width is <= 991px
        991: {
            slidesPerView: 4,
            spaceBetween: 0
        },
        // when window width is <= 1313px
        1313: {
            slidesPerView: 3,
            spaceBetween: 0
        },
        // when window width is <= 1620px
        1620: {
            slidesPerView: 4,
            spaceBetween: 0
        }
    },

    //  pagination
    pagination: '.swiper-pagination',
    paginationType: 'progress'

});

var swiper6_1 = new Swiper('.swiper-container6-1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    spaceBetween: 25,
    slidesPerView: 3,

    breakpoints: {
        // when window width is <= 665px
        665: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // when window width is <= 920px
        920: {
            slidesPerView: 2,
            spaceBetween: 25
        },
        // when window width is <= 991px
        991: {
            slidesPerView: 3,
            spaceBetween: 25
        },
        // when window width is <= 1392px
        1392: {
            slidesPerView: 2,
            spaceBetween: 25
        }
    },

    // pagination
    pagination: '.swiper-pagination6-1',
    paginationType: 'fraction',
    watchSlidesProgress: true,
    nextButton: '.swiper-button-next6-1'

});

var swiper9_1 = new Swiper('.swiper-container9-1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    grabCursor: true,

    nextButton: '.swiper-button-next9-1',
    prevButton: '.swiper-button-prev9-1',

    effect: 'coverflow',
    coverflow: {
        rotate: 0,
        stretch: 28,
        depth: 80,
        modifier: 2,
        slideShadows: false
    },

    breakpoints: {

        1024: {
            slidesPerView: 1
            //effect: 'slide'
        }
    }
});

var swiper8_1 = new Swiper('.swiper-container8-1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,
    grabCursor: true
    //centeredSlides: true,
    //controlInverse: true
    /*effect: 'coverflow',
    coverflow: {
        rotate: 0,
        stretch: -50,
        depth: 150,
        modifier: 2,
        slideShadows: false
    }*/

});

var advancement02 = new Swiper('.swiper-container-advancement02', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    centeredSlides: true,
    slidesPerView: 1,
    grabCursor: true,
    nextButton: '.swiper-button-next-advancement02'
});

var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    direction: 'horizontal',
    grabCursor: true

});
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 17,
    //loop: true,
    centeredSlides: true,
    slidesPerView: 5,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    nextButton: '.next-gallery-thumbs',
    prevButton: '.prev-gallery-thumbs',
    grabCursor: true
});
galleryTop.params.control = galleryThumbs;
galleryThumbs.params.control = galleryTop;

var circle_progress = new Swiper('.circle-progress', {
    // Optional parameters
    direction: 'horizontal',
    grabCursor: true,
    //loop: true,
    spaceBetween: 20,
    slidesPerView: 4,

    nextButton: '.next-circle-progress',
    prevButton: '.prev-circle-progress',

    breakpoints: {

        1391: {
            slidesPerView: 3
        },
        1110: {
            slidesPerView: 2
        },
        991: {
            slidesPerView: 4
        },
         950: {
            slidesPerView: 3
        },
         750: {
            slidesPerView: 2
        },
        530: {
            slidesPerView: 1
        }

    }

});

var alt_circle_progress = new Swiper('.alt-circle-progress', {
    // Optional parameters
    direction: 'horizontal',
    grabCursor: true,
    //loop: true,
    spaceBetween: 20,
    slidesPerView: 4,

    nextButton: '.next-circle-progress',
    prevButton: '.prev-circle-progress',

    breakpoints: {

        1021: {
            slidesPerView: 3
        },

        760: {
            slidesPerView: 2
        },

        540: {
            slidesPerView: 1
        }

    }

});



var related = new Swiper('.swiper_related_projects', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    spaceBetween: 20,
    slidesPerView: 4,
    
    nextButton: '.swiper_related_projects_next',
    prevButton: '.swiper_related_projects_prev',

    breakpoints: {

        1391: {
            slidesPerView: 3
        },
        1110: {
            slidesPerView: 2
        },
        991: {
            slidesPerView: 4
        },
        950: {
            slidesPerView: 3
        },
        750: {
            slidesPerView: 2
        },
        530: {
            slidesPerView: 1
        }

    }

});

var swiperOurStory = new Swiper('.swiper-our-story__container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,
    centeredSlides: true,
    grabCursor: true,

    nextButton: '.swiper-our-story__next',
    prevButton: '.swiper-our-story__prev',

    effect: 'coverflow',
    coverflow: {
        rotate: 0,
        stretch: 0,
        depth: 200,
        modifier: 2,
        slideShadows: false
    },

    breakpoints: {

        720: {
            slidesPerView: 1
        }
    }
});

var swiperClientSay = new Swiper('.swiper-client-say__container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    spaceBetween: 30,
    slidesPerView: 4,
    grabCursor: true,

    nextButton: '.swiper-client-say__next',
    prevButton: '.swiper-client-say__prev',

    breakpoints: {

        1550: {
            slidesPerView: 3,
            spaceBetween: 50
        },
        1229: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        1021: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        600: {
            slidesPerView: 1
        }

    }
});

var altTeam = new Swiper('.alt-team-block__carusel', {
    direction: 'horizontal',
    spaceBetween: 10,
    slidesPerView: 1,
    grabCursor: true
});

var altTeam_menu = new Swiper('.alt-team-block__list-menu', {
    direction: 'vertical',
    spaceBetween: 12,
    touchRatio: 0.2,
    slidesPerView: 5,
    centeredSlides: true,
    slideToClickedSlide: true
});

altTeam.params.control = altTeam_menu;
altTeam_menu.params.control = altTeam;


var $grid= $('.grid').isotope({
    // options
    itemSelector: '.grid-item',
    percentPosition: true,

    masonry: {
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer'
    }
});

$('.isotope-filter-group').on( 'click','li', function() {
    var filterValue = $(this).attr('data-filter');

    $('.isotope-filter-group').find('.isotope-active').removeClass('isotope-active');
    $(this).addClass('isotope-active');

    $grid.isotope({ filter: filterValue });
});

$grid.imagesLoaded().progress( function() {
   $grid.isotope('layout');
});
var $masonry= $('.masonry-latest-project').isotope({
    // options
    itemSelector: '.masonry-latest-project__grid-item',
    percentPosition: true,
    masonry: {
        columnWidth: '.masonry-latest-project__grid-sizer'
        //isFitWidth: true
    }
});

$masonry.imagesLoaded().progress( function() {
    $masonry.isotope('layout');
});

function AccordionGMol (params){
    this.accordionId = params.accordionId;
    this.duration = params.duration;
    this.activeClassModifier = params.activeClassModifier;
    this.hidingClass = params.hidingClass;
    this.initialItemActive = params.initialItemActive;

    var self = this;
    var accordionInner = document.getElementById(self.accordionId);

    if(accordionInner){

        var listItems = accordionInner.getElementsByTagName('li');
        var contents = accordionInner.getElementsByClassName(self.hidingClass);


        var inspectCollection = function (collection, actorFunction) {
            var item;
            for (var i = 0; i < collection.length; i++) {
                item = collection[i];
                actorFunction(item);
            }
        };

        var setCallBack = function (item) {
            item.onclick = callBackFunction;
        };

        var setZeroHeight = function (element) {
            element.style.height = 0;
        };

        var setFullHeight = function (element) {
            var fullHeight = element.scrollHeight;
            element.style.height = fullHeight + 'px';
        };

        var setFromAutoToFull = function (element) {
            var fullHeight = element.scrollHeight;
            if (element.style.height == 'auto') {
                element.style.height = fullHeight + 'px';
                element.scrollHeight; //  magic
            }
        };

        var setTransition = function (element) {
            element.style.transition = 'height' + ' ' + self.duration;

        };

        var setTransitionedCallBack = function (element) {
            element.addEventListener("transitionend", transitionedCallBackFunc);
        };

        var transitionedCallBackFunc = function (eventObj) {
            var elem = eventObj.target;
            var elemHeight = parseFloat(elem.style.height);
            if (elemHeight != 0) {
                elem.style.height = 'auto';
            }
        };

        var addActiveClassModifier = function (element) {
            if (!element.classList.contains(self.activeClassModifier)) {
                element.classList.add(self.activeClassModifier);
            }
        };

        var removeActiveClassModifier = function (element) {
            element.classList.remove(self.activeClassModifier);
        };

        var callBackFunction = function (eventObj) {
            var element = eventObj.currentTarget;
            var hidingBlocks = element.getElementsByClassName(self.hidingClass);
            if (!element.classList.contains(self.activeClassModifier)) {
                inspectCollection(contents, setFromAutoToFull);
                inspectCollection(listItems, removeActiveClassModifier);
                inspectCollection(contents, setZeroHeight);
                inspectCollection(hidingBlocks, setFullHeight);
                addActiveClassModifier(element);
            }
        };

        var init = function () {
            inspectCollection(listItems, setCallBack);

            inspectCollection(contents, setZeroHeight);

            setFullHeight(contents[self.initialItemActive]);

            addActiveClassModifier(listItems[self.initialItemActive]);

            inspectCollection(contents, setTransition);

            inspectCollection(contents, setTransitionedCallBack);
        };

        init();
    }
}

var myaccord = new  AccordionGMol({
    accordionId: 'our-story-by-date-block__accordion',
    duration: '0.6s',
    activeClassModifier: 'our-story-by-date-block__item_active',
    hidingClass: 'our-story-by-date-block__content',
    initialItemActive: 0});


var map;
function initMap() {

    if(document.getElementById('map')) {

        var pos = {lat: -37.825, lng: 144.995};
        map = new google.maps.Map(document.getElementById('map'), {
            center: pos,
            zoom: 15,
            styles: [
                {
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "gamma": 0.5
                        }
                    ]
                }
            ]
        });
        var marker = new google.maps.Marker({
            position: pos,
            map: map,
            icon: {
                url: "sections/map-and-form/assets/marker.svg",
                scaledSize: new google.maps.Size(56, 78)
            }
        });
    }
}

$(document).ready(initMap());

var setProgress = function () {

    var flag = false;

    function onLoad() {

        if (!flag) {

            var activeColor = '#f7b830';

            var themeWrap = document.getElementsByClassName('dark-theme');

            if (themeWrap.length) {
                activeColor = '#2eb5a8';
            }

            var bar = new ProgressBar.Circle('.architecture', {
                color: activeColor,
                strokeWidth: 4,
                trailWidth: 4,
                trailColor: '#202020',
                text: {
                    value: 'Text',
                    autoStyleContainer: false
                },
                from: {color: activeColor, width: 4},
                to: {color: activeColor, width: 4},
                step: function (state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);
                    if (value === 0) {
                        circle.setText('');
                    } else {
                        circle.setText('<p>ARCHITECTURE</p>' + (value) + '%');
                    }

                }

            });


            var bar1 = new ProgressBar.Circle('.consulting', {
                color: activeColor,
                strokeWidth: 4,
                trailWidth: 4,
                trailColor: '#202020',
                text: {
                    value: 'Text',
                    autoStyleContainer: false
                },
                from: {color: activeColor, width: 4},
                to: {color: activeColor, width: 4},
                step: function (state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);
                    if (value === 0) {
                        circle.setText('');
                    } else {
                        circle.setText('<p>CONSULTING</p>' + (value) + '%');
                    }

                }

            });


            var bar2 = new ProgressBar.Circle('.interior', {
                color: activeColor,
                strokeWidth: 4,
                trailWidth: 4,
                trailColor: '#202020',
                text: {
                    value: 'Text',
                    autoStyleContainer: false
                },
                from: {color: activeColor, width: 4},
                to: {color: activeColor, width: 4},
                step: function (state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);
                    if (value === 0) {
                        circle.setText('');
                    } else {
                        circle.setText('<p>INTERIOR&nbspDESIGN</p>' + (value) + '%');
                    }

                }

            });


            var bar3 = new ProgressBar.Circle('.product', {
                color: activeColor,
                strokeWidth: 4,
                trailWidth: 4,
                trailColor: '#202020',
                text: {
                    value: 'Text',
                    autoStyleContainer: false
                },
                from: {color: activeColor, width: 4},
                to: {color: activeColor, width: 4},
                step: function (state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);
                    if (value === 0) {
                        circle.setText('');
                    } else {
                        circle.setText('<p>PRODUCT&nbspDESIGN</p>' + (value) + '%');
                    }

                }

            });

            bar.animate(0.8);
            bar1.animate(0.6);
            bar2.animate(0.85);
            bar3.animate(0.5);
            flag = true;

        }
    }

    return onLoad;
};

if (document.getElementById("circleProgress")) {
    var waypointProgressBar = new Waypoint({
        element: document.getElementById("circleProgress"),
        handler: setProgress()
    });
}

(function () {

    var searchForm = document.getElementsByClassName('modal-search')[0];

    if(searchForm){

        function openSearchForm() {
            searchForm.style.display = 'block';
            searchForm.getElementsByTagName('input')[0].focus();
            searchForm.classList.remove('modal-search_invisible');
            searchForm.classList.add('modal-search_visible');
            return false
        }

        function closeSearchForm() {
            searchForm.classList.remove('modal-search_visible');
            searchForm.classList.add('modal-search_invisible');
            setTimeout(function () {
                searchForm.style.display = '';
            }, 500);
        }

        function startSearch() {
            searchForm.getElementsByClassName('modal-search__search-form')[0].submit();
            return false
        }

        var openBtn = document.getElementById('search-link');
        openBtn.onclick = openSearchForm;

        var closeBtn = document.getElementById('close-search');
        closeBtn.onclick = closeSearchForm;

        var startBtn = document.getElementById('search-start');
        startBtn.onclick = startSearch;
    }

})();

/*Scrolling to elements*/
$(document).ready(function(){
    $('.go_to').click( function(){
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
        }
        return false;
    });
});

if(document.getElementsByClassName('theme-container')[0]){
    
var themes = {
    themeContainer: document.getElementsByClassName('theme-container')[0],
    themeButton: document.getElementById('theme-switch-button'),
    buttonLightText: document.getElementById('light-btn-text'),
    buttonDarkText: document.getElementById('dark-btn-text'),
    themeStorageMark: window.localStorage,

    applyTheme: function () {
        if(this.themeStorageMark['theme'] == 'light'){
            this.themeContainer.classList.remove('dark-theme');
            this.themeContainer.classList.remove('basic-dark-theme');
            this.themeContainer.classList.add('light-theme');
            this.buttonLightText.style.display = 'none';
            this.buttonDarkText.style.display = '';
            this.themeButton.setAttribute('data-role', 'dark-button');
        }
        else if(this.themeStorageMark['theme'] == 'dark'){
            this.themeContainer.classList.remove('light-theme');
            if(this.themeContainer.classList.contains('basic')){
                this.themeContainer.classList.add('basic-dark-theme');
            }
            else{this.themeContainer.classList.add('dark-theme');}
            this.buttonDarkText.style.display = 'none';
            this.buttonLightText.style.display = '';
            this.themeButton.setAttribute('data-role', 'light-button');
        }
    },
    setLight: function () {
        this.themeStorageMark['theme'] = 'light';
    },
    setDark: function () {
        this.themeStorageMark['theme'] = 'dark';
    },

    setDefault: function () {
        if(!this.themeStorageMark['theme']){
            this.setDark();
        }
    },

    getButton: function () {
        this.themeButton.onclick = function () {
            if(this.getAttribute('data-role') == 'dark-button'){
                themes.setDark();
            }
            else if(this.getAttribute('data-role') == 'light-button'){
                themes.setLight();
            }
            themes.applyTheme();
        }
    },

    init: function () {
        this.setDefault();
        this.applyTheme();
        this.getButton();
    }
};

themes.init();
window.addEventListener('storage', function() {
    themes.applyTheme();
});
}


function VideoGmol() {
    this.videoContainer = document.getElementById('video__container');
    this.video = document.getElementById('video');
    this.button = document.getElementById('video__button');
    this.button.style.transitionProperty = 'opacity';
    this.button.style.transitionDuration = '0.5s';
    var isPlay = false;
    var self = this;

    var play = function () {
        self.video.play();
        isPlay = true;
    };

    var stop = function () {
        self.video.pause();
        isPlay = false;
    };

    var controlsOff = function () {
        self.video.removeAttribute('controls');
        self.button.style.opacity = 1;
        isPlay = false;
    };

    var controlsOn = function () {
        self.video.setAttribute('controls', 'controls');
        self.button.style.opacity = 0;
        isPlay = true;
    };

    this.videoContainer.onclick = function () {
        if(!isPlay){
            play();
        }
        else{
            stop();
        }
    };

    this.video.addEventListener('pause', controlsOff);
    this.video.addEventListener('ended', controlsOff);
    this.video.addEventListener('play', controlsOn);
}

if(document.getElementById('video__container')) var video = new VideoGmol();