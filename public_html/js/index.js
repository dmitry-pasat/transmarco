$(function () {

    var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')

    //BEGIN JQUERY NEWS TICKER
    $('#sample').ticker({
        controls: false,
        titleText: ''
    });
    //END JQUERY NEWS TICKERS

    //BEGIN TODOS LIST
    $("#todos-list-sort").sortable();
    $("#todos-list-sort").disableSelection();


    $('#todos-list-add').click(function () {
        var index = $('#todos-list-sort > li').length;
        $('ul#todos-list-sort').append('<li><input type="checkbox" id="task-item-' + index + '" /><label for="task-item-' + index + '" >' + $("#todos-list-input").val() + '</label><a class="delete" href="javascript:;" data-hover="tooltip" data-original-title="remove"><span class="fa fa-trash-o"></span></a></li>');
        $("[data-hover='tooltip']").tooltip();
    });
    $('#todos-list-sort li a.delete').live('click', function () {
        $(this).parent().remove();
    });
    //END TODOS LIST

    //BEGIN JQUERY JVECTORMAP
    $('.widget-weather').css('height', '322px');
    $('#world-map').css('width', $('.col-lg-6').width());
    $('#world-map').css('height', '342px');
    $('#world-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        series: {
            regions: [
                {
                    values: gdpData,
                    scale: ['#B8312F', '#fc6e51'],
                    normalizeFunction: 'polynomial'
                }
            ]
        },
        hoverOpacity: 0.7,
        hoverColor: false
    });
    $(window).resize(function () {
        $('#world-map').css('width', $('.col-lg-6').width());
        $('#world-map').css('height', '342px');
    });
    //END JQUERY JVECTORMAP

    //BEGIN JQUERY ANIMATE NUMBER
    $({value: 0}).animate({value: $('.tp-chart input').attr("rel")}, {
        duration: 5000,
        easing: 'swing',
        step: function () {
            $('.tp-chart input').val(Math.ceil(this.value)).trigger('change');
        }
    });
	
    $({value: 0}).animate({value: $('.is-chart input').attr("rel")}, {
        duration: 5000,
        easing: 'swing',
        step: function () {
            $('.is-chart input').val(Math.ceil(this.value)).trigger('change');
        }
    });
	
    $('#tp-number').animateNumber({
        number: 55,
        numberStep: comma_separator_number_step
    }, 5000);
	
	
    $({value: 0}).animate({value: $('.tp-chart input').attr("rel")}, {
        duration: 5000,
        easing: 'swing',
        step: function () {
            $('.tp-chart input').val(Math.ceil(this.value)).trigger('change');
        }
    })

    $(".dial").knob({
        'draw': function () {
            $(this.i).val(this.cv + '%')
        },
        'fgColor': '#B8BEC8'
    });
    $({value: 0}).animate({value: $('.stats-chart.visits-stats input').attr("rel")}, {
        duration: 5000,
        easing: 'swing',
        step: function () {
            $('.stats-chart.visits-stats input').val(Math.ceil(this.value)).trigger('change');
        }
    })
    $({value: 0}).animate({value: $('.stats-chart.pageviews-stats input').attr("rel")}, {
        duration: 5000,
        easing: 'swing',
        step: function () {
            $('.stats-chart.pageviews-stats input').val(Math.ceil(this.value)).trigger('change');
        }
    })
    $('#bg-number').animateNumber({
        number: 13287,
        numberStep: comma_separator_number_step
    }, 5000);
    $('#at-number').animateNumber({
        number: 8636,
        numberStep: comma_separator_number_step
    }, 5000);
    $('#tm-number').animateNumber({
        number: 853,
        numberStep: comma_separator_number_step
    }, 5000);
    $('#gr-number').animateNumber({
        number: 15,
        numberStep: comma_separator_number_step
    }, 5000);
    $('#is-number').animateNumber({
        number: 1305,
        numberStep: comma_separator_number_step
    }, 5000);
    $({value: 0}).animate({value: $('.is-chart input').attr("rel")}, {
        duration: 5000,
        easing: 'swing',
        step: function () {
            $('.is-chart input').val(Math.ceil(this.value)).trigger('change');
        }
    })

    $('#pageviews-number').animateNumber({
        number: 62142,
        numberStep: comma_separator_number_step
    }, 5000);

	
    $('#ock-group-number').animateNumber({
        number: 3420,
        numberStep: comma_separator_number_step
    }, 5000);
	$('#foh-san-number').animateNumber({
        number: 4420,
        numberStep: comma_separator_number_step
    }, 5000);
	$('#tbm-number').animateNumber({
        number: 10220,
        numberStep: comma_separator_number_step
    }, 5000);
	$('#grand-teak-number').animateNumber({
        number: 6710,
        numberStep: comma_separator_number_step
    }, 5000);
	$('#yee-lee-number').animateNumber({
        number: 5190,
        numberStep: comma_separator_number_step
    }, 5000);
	$('#earning-number-vps').animateNumber({
        number: 5020,
        numberStep: comma_separator_number_step
    }, 5000);
	$('#earning-number-web-design').animateNumber({
        number: 1890,
        numberStep: comma_separator_number_step
    }, 5000);
	$('#earning-number-shared').animateNumber({
        number: 6970,
        numberStep: comma_separator_number_step
    }, 5000);
	$('#earning-number-dedicated').animateNumber({
        number: 2600,
        numberStep: comma_separator_number_step
    }, 5000);
	$('#earning-number-email88').animateNumber({
        number: 4580,
        numberStep: comma_separator_number_step
    }, 5000);
    $('#users-number').animateNumber({
        number: 15,
        numberStep: comma_separator_number_step
    }, 5000);
    $('#app-number').animateNumber({
        number: 32890,
        numberStep: comma_separator_number_step
    }, 5000);

    $('#shipping-number').animateNumber({
        number: 30.00,
        numberStep: comma_separator_number_step
    }, 5000);
    $('#quantity-number').animateNumber({
        number: 14,
        numberStep: comma_separator_number_step
    }, 5000);
    $('#ls-number').animateNumber({
        number: 252983,
        numberStep: comma_separator_number_step
    }, 5000);
    $('#ao-number').animateNumber({
        number: 6320,
        numberStep: comma_separator_number_step
    }, 5000);
    //END JQUERY ANIMATE NUMBER


	
	//BEGIN AREA CHART


    
	
	
	


});

