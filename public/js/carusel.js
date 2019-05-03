(function($) {
	jQuery.fn.electroCarousel = function(options) {

		var options = $.extend({
			resizeElement: false,
			countElement: 6,
			speed: 400,
			severity: 8,
                        vertical: false,
                        control: true,
                        widthType:"%"
		}, options);

		var $main = new Main($(this));

		function Main(obj) {
			this.ths = obj;
			this.ul = obj.find("ul");//.css({cursor: "move"});
			this.li = this.ul.find("li");
			this.a =  this.ths.find("a");
			this.qtyLI = this.li.length;
			this.curPos = null;
			this.startTouch = false;
			this.startTouchPos = false;
			this.clicking = false;
			this.active = false;
                        this.perPercent = 0;
		}

		// main functions
		var bindEvents = function(e) {
			if (e) {

				$(document).on("click", options.leftButton, {direction: "left"}, moveUL);
				$(document).on("click", options.rightButton, {direction: "right"}, moveUL);
				$(document).on("mouseup touchend", touchEnd);


				$main.ul.on("mousedown touchstart", touchStart);
				$main.ul.on("mousemove touchmove", touchMove);
				$main.active = true;

			}
		}

		var resizeElements = function(count) {
                    
                    if(options.vertical) {
                        $main.ul.css({
				height: ($main.qtyLI * 100) + "%"
			});
                        _conf = (options.widthType=='%') ? {height: (100 / $main.qtyLI / count) + "%"} : {height: ($main.li.outerHeight() * options.countElement) -5 + "px"}
                        $main.ul.parent().css(_conf);
                    }
                    else {
			$main.ul.css({
				width: ($main.qtyLI * 100) + "%"
			});
                        _conf = (options.widthType=='%') ? {width: (100 / $main.qtyLI / count) + "%"} : {width: $main.li.outerWidth() + "px"};
			$main.li.css(_conf);
                    }
		};

		var calculateParams = function(windowSize) {
			var currentCount = options.countElement;

			if (options.resizeElement === true) {
				if (windowSize >= 1411) {
					options.countElement = 6;
				} else if (windowSize >= 1077 && windowSize <= 1299) {
					options.countElement = 5;
				} else if (windowSize >= 779 && windowSize <= 1076) {
					options.countElement = 4;
				} else if (windowSize >= 621 && windowSize <= 778) {
                                        options.countElement = 3;
                                } else if (windowSize >= 466 && windowSize <= 620) {
                                        options.countElement = 2;
                                } else if (windowSize <= 465) {
					options.countElement = 1;
				}
			}

			if (options.countElement < $main.qtyLI) {

				$(options.leftButton).show();
				$(options.rightButton).show();

				if (!$main.active) {
					$main.active = true;
					if(options.control) bindEvents(true);
				}

			} else {

				$(options.leftButton).hide();
				$(options.rightButton).hide();
				$main.ul.unbind();
				$main.active = false;

			}

			$main.ul.css("left", 0);
                        $main.perPercent = (100 / options.countElement) * ($main.qtyLI - options.countElement);

		};

		var moveUL = function(event) {
			var direction = event.data.direction == "left" ? "left" : "right",
				maxPos = $main.qtyLI - options.countElement,
				animateValue = null

                        widthElem = (options.widthType=='%') ? 100 / options.countElement : ((options.vertical)?$main.li.outerHeight():$main.li.outerWidth());            

			if (direction == "left") {
				if (!$main.curPos) {
					animateValue = "-" + (widthElem * maxPos) + options.widthType;
					$main.curPos = maxPos;
				} else {
					animateValue = "-" + (widthElem * --$main.curPos) + options.widthType;
				}
			} else {
				if ($main.curPos == maxPos) {
					$main.curPos = maxPos;
					$main.curPos = animateValue = 0;
				} else {
					animateValue = "-" + (widthElem * ++$main.curPos) + options.widthType;
				}
			}
                        
                        if(options.vertical) {
                            $main.ul.finish().animate({
				"top": animateValue
                            }, options.speed);
                        }
                        else {
                            $main.ul.finish().animate({
				"left": animateValue
                            }, options.speed);
                        }

			event.preventDefault();
		};

		var touchStart = function(event) {
                        if (options.vertical) {
                            $main.startTouch = event.type == "touchstart" ? event.originalEvent.touches[0].pageY : event.pageY;
                            $main.startTouchPos = Math.abs(parseInt($main.ul.css("top"), 10));
                        } else {
                            $main.startTouch = event.type == "touchstart" ? event.originalEvent.touches[0].pageX : event.pageX;
                            $main.startTouchPos = Math.abs(parseInt($main.ul.css("left"), 10));
                        }
			if(event.type !== "touchstart"){
				event.preventDefault();
			}
		};

		var touchMove = function(event) {
			if ($main.startTouch) {
                                if (options.vertical) {
                                    event.pageY = event.type == "touchmove" ? event.originalEvent.touches[0].pageY : event.pageY;
                                    var animateValue = (-$main.startTouchPos - ($main.startTouch - event.pageY));
                                    var maxPos = ($main.li.outerHeight() * $main.qtyLI) - (options.countElement * $main.li.outerHeight());

                                    if (animateValue > 0) {
                                            animateValue /= 8;
                                    } else if (maxPos < Math.abs(parseInt($main.ul.css("top")))) {
                                            animateValue = -(maxPos + ((Math.abs(animateValue) - maxPos) / 8));
                                    }

                                    $main.ul.stop().css({"top" : animateValue + "px"});
                                } else {
                                    event.pageX = event.type == "touchmove" ? event.originalEvent.touches[0].pageX : event.pageX;
                                    var animateValue = (-$main.startTouchPos - ($main.startTouch - event.pageX));
                                    var maxPos = ($main.li.outerWidth() * $main.qtyLI) - (options.countElement * $main.li.outerWidth());

                                    if (animateValue > 0) {
                                            animateValue /= 8;
                                    } else if (maxPos < Math.abs(parseInt($main.ul.css("left")))) {
                                            animateValue = -(maxPos + ((Math.abs(animateValue) - maxPos) / 8));
                                    }

                                    $main.ul.stop().css({"left" : animateValue + "px"});
                                }

				$main.clicking = true;
			}
		};

		var touchEnd = function(event) {
			if ($main.startTouch) {
                            if (options.vertical) {
                                var maxPos = ($main.li.outerHeight() * $main.qtyLI) - (options.countElement * $main.li.outerHeight()),
					posNow = parseInt($main.ul.css("top")),
					animateValue = null;
				if (posNow > 0) {
					animateValue = 0;
				} else if (Math.abs($main.startTouchPos - Math.abs(posNow)) < 30) {
					animateValue = "-" + $main.startTouchPos;
					$main.clicking = false;
				} else if (maxPos < Math.abs(posNow)) {
					animateValue = "-" + maxPos;
				} else {
					animateValue = "-" + (Math.abs(posNow) > $main.startTouchPos ? Math.ceil(Math.abs(posNow) / $main.li.outerHeight()) : Math.floor(Math.abs(posNow) / $main.li.outerHeight())) * $main.li.outerHeight();
				}
                                
				$main.ul.finish().animate({"top" : animateValue + "px"}, options.speed);
                            } else {
				var maxPos = ($main.li.outerWidth() * $main.qtyLI) - (options.countElement * $main.li.outerWidth()),
					posNow = parseInt($main.ul.css("left")),
					animateValue = null;
				if (posNow > 0) {
					animateValue = 0;
				} else if (Math.abs($main.startTouchPos - Math.abs(posNow)) < 30) {
					animateValue = "-" + $main.startTouchPos;
					$main.clicking = false;
				} else if (maxPos < Math.abs(posNow)) {
					animateValue = "-" + maxPos;
				} else {
					animateValue = "-" + (Math.abs(posNow) > $main.startTouchPos ? Math.ceil(Math.abs(posNow) / $main.li.outerWidth()) : Math.floor(Math.abs(posNow) / $main.li.outerWidth())) * $main.li.outerWidth();
				}
                                
				$main.ul.finish().animate({"left" : animateValue + "px"}, options.speed);
				
                            }
                            $main.startTouch = false;

                            if($main.clicking){
                                    $main.a.each(function(){

                                            var $ths = $(this);

                                            if($ths.is(":hover")){
                                                    $ths.one("click", function(event){
                                                            event.preventDefault();
                                                    });

                                                    return false;
                                            }

                                    });

                                    $main.clicking = false;

                            }
			}
		};
                
                /**
                 * Передвинуть слайдер на процент
                 * @param {type} percent процент
                 */
                var movePercentage = function(percent) {
                    $main.ul.finish().css({
                        "left":  - ($main.perPercent * percent / 100) + "%"
                    });
                };
                
                var getPercentage = function(percent) {
                    return 100*100/$main.perPercent/options.countElement;
                };
                
		$(window).resize(function(e) {
			calculateParams($main.ul.parent().width());
			resizeElements(options.countElement);
		});

		calculateParams($main.ul.parent().width());
		resizeElements(options.countElement);
		if(options.control) bindEvents();

                var public = {
                    scrollTo: function(percent){
                        movePercentage(percent);
                    },
                    getPerPercent: function(){
                        return getPercentage();
                    },
                };
                
                return public;
	};

})($);


