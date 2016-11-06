$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-signed')
                    .addClass('btn-signed-checked');
            }
            else {
                $button
                    .removeClass('btn-signed-checked')
                    .addClass('btn-signed');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
    //calendario
    
             $(document).on('shown.calendar.calendario', function(e, instance){
                    if(!instance) instance = cal;
                    var $cell = instance.getCell(new Date().getDate());
                    if($cell.hasClass('fc-today')) $cell.trigger('click.calendario');
                });
            
                var transEndEventNames = {
                        'WebkitTransition' : 'webkitTransitionEnd',
                        'MozTransition' : 'transitionend',
                        'OTransition' : 'oTransitionEnd',
                        'msTransition' : 'MSTransitionEnd',
                        'transition' : 'transitionend'
                    },
                    transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
                    $wrapper = $( '#custom-inner' ),
                    $calendar = $( '#calendar' ),
                    cal = $calendar.calendario({
                        onDayClick : function( $el, data, dateProperties ) {

                            if(data.content.length > 0 ) {
                                showEvents(data.content, dateProperties );
                            }

                        },
                        caldata : TinderboxEvents,
                        displayWeekAbbr : true,
                        events: 'click'
                    } ),
                    $month = $( '#custom-month' ).html( cal.getMonthName() ),
                    $year = $( '#custom-year' ).html( cal.getYear() );

                $( '#custom-next' ).on( 'click', function() {
                    cal.gotoNextMonth( updateMonthYear );
                } );
                $( '#custom-prev' ).on( 'click', function() {
                    cal.gotoPreviousMonth( updateMonthYear );
                } );

                function updateMonthYear() {                
                    $month.html( cal.getMonthName() );
                    $year.html( cal.getYear() );
                }

                // just an example..
                function showEvents( contentEl, dateProperties ) {

                    hideEvents();
                    /* <h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4> */
                    var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"></div>' ),
                        $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

                    $events.append( contentEl.join('') , $close ).insertAfter( $wrapper );
                    
                    setTimeout( function() {
                        $events.css( 'top', '0%' );
                    }, 25 );

                }
                function hideEvents() {

                    var $events = $( '#custom-content-reveal' );
                    if( $events.length > 0 ) {
                        
                        $events.css( 'top', '100%' );
                        Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

                    }

                }
            
});