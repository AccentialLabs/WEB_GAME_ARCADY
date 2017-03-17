<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="//d2d3qesrx8xj6s.cloudfront.net/dist/bootsnipp.min.css?ver=7d23ff901039aef6293954d33d23c066">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <link href="../../css/bootstrap.min.css" rel="stylesheet"/> <!--responsável por não deixara ocabeçãllho solto-->

        <link href="../../assets/css/tela1.css" rel="stylesheet"/> 
        <script src="../../assets/js/tela1.js"></script> 
        <script src="../../assets/js/Dashboard-v2.js"></script> 

        <script type="text/javascript" src="http://anthonyterrien.com/demo/knob/jquery.knob.min.js"></script>

        <script>
            $(function() {
                $(".dial").knob();
            });
        </script>
        <style>

            .small-text{
                font-size: 0.5em;
            }

            .jogo-desativado{
                background-color: lightgrey;
                opacity: 0.6;
            }

            .loader {
                border: 16px solid #333; /* Light grey */
                border-top: 16px solid #3498db; /* Blue */
                border-radius: 50%;
                width: 60px;
                height: 60px;
                animation: spin 2s linear infinite;
                position: fixed;
                z-index: 99999;
                top: 45%;
                left: 50%;
                display: none;
            }

            .pause, .stop, .config, .play{
                cursor: pointer;
            }

            .config:hover{
                opacity: 0.9;
            }

            .pause:hover{
                opacity: 0.9;
            }

            .stop:hover{
                opacity: 0.9;
            }
            .tabs-left, .tabs-right {
                border-bottom: none;
                //padding-top: 2px;
            }
            .tabs-left {
                border-right: 1px solid #ddd;
            }
            .tabs-right {
                border-left: 1px solid #ddd;
            }
            .tabs-left>li, .tabs-right>li {
                float: none;
                //margin-bottom: 2px;
            }
            .tabs-left>li {
                margin-right: -1px;
            }
            .tabs-right>li {
                margin-left: -1px;
            }
            .tabs-left>li.active>a,
            .tabs-left>li.active>a:hover,
            .tabs-left>li.active>a:focus {
                border-bottom-color: #ddd;
                border-right-color: transparent;
            }

            .tabs-right>li.active>a,
            .tabs-right>li.active>a:hover,
            .tabs-right>li.active>a:focus {
                border-bottom: 1px solid #ddd;
                border-left-color: transparent;
            }
            .tabs-left>li>a {
                border-radius: 4px 0 0 4px;
                margin-right: 0;
                display:block;
            }
            .tabs-right>li>a {
                border-radius: 0 4px 4px 0;
                margin-right: 0;
            }
            .vertical-text {
                margin-top:50px;
                border: none;
                position: relative;
            }
            .vertical-text>li {
                height: 20px;
                width: 120px;
                margin-bottom: 100px;
            }
            .vertical-text>li>a {
                border-bottom: 1px solid #ddd;
                border-right-color: transparent;
                text-align: center;
                border-radius: 4px 4px 0px 0px;
            }
            .vertical-text>li.active>a,
            .vertical-text>li.active>a:hover,
            .vertical-text>li.active>a:focus {
                border-bottom-color: transparent;
                border-right-color: #ddd;
                border-left-color: #ddd;
            }
            .vertical-text.tabs-left {
                left: -50px;
            }
            .vertical-text.tabs-right {
                right: -50px;
            }
            .vertical-text.tabs-right>li {
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
            }
            .vertical-text.tabs-left>li {
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
            }

            body{
                margin-top: 0px !important;
            }

            .row{
                margin-right: 0px;
            }

            .col-lateral-menu{
                padding-right: 0px;
                padding-left: 0px;
            }

            .nav-tabs>li>a{
                border-radius: 0px !important;
            }

            .menu-tab{
                padding: 20px !important;
            }

            a{
                color: #666;
            }

            .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
                color: #444;
            }

            a span{
                font-size: 18px;
            }

            a {
                border-color: #ddd #ddd #ddd #ddd !important;
            }

            .tab-content{
                padding-top: 15px;
            }

            legend.scheduler-border {
                font-size: 0.9em !important;
                font-weight: normal !important;
                text-align: left !important;
                width:auto;
                padding:0 10px;
                border-bottom:none;

            }

            fieldset.scheduler-border {
                background: transparent !important;
                padding: 0 1.4em 1.4em 1.4em !important;
            }

            .btn-default{
                background-image: none !important;
            }

            .game-icon{
                opacity: 0.5;
            }

            .count-jogadores{
                margin-bottom: 0px !important;
                margin-top: 0px !important;
            }

            .dashboard-icon-list{
                border: 1px solid #888;
                padding: 5px;
                color: #888;
                border-radius: 4px;
                font-size: 1.2em;
                margin-right: 7px;
            }

            .dashboard-icon-list-div{
                margin-top: 7px;
                color: #333;
            }

            .calendar-icon{
                font-size: 2em;
                opacity: 0.6;
            }

            .box-content-dash{
                margin-top: 15%;
            }

            .coluna-box-dash{
                border-left: 1px solid #999;
            }

            .chart-graphic-icon{
                opacity: 0.6;
            }

            .coluna-box-dash-geral{
                // border-bottom: 1px solid 
                //   #999;
            }

            /*            [data-pie-id] li:nth-child(0) {
                            color: blue;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id] li:nth-child(1) {
                            color: #4d00ff;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id] li:nth-child(2) {
                            color: #9900ff;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id] li:nth-child(3) {
                            color: #e500ff;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id] li:nth-child(4) {
                            color: #ff00cc;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id] li:nth-child(5) {
                            color: #ff0080;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id] li:nth-child(6) {
                            color: #ff0033;
                        }
            
                         line 26, ../sass/pizza.scss 
                        ul[data-pie-id] {
                            list-style: none;
                            padding: 10px;
                        }
            
            
                        [data-pie-id='my-cool-chart'] li:nth-child(0) {
                            color: #d84200;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id='my-cool-chart'] li:nth-child(1) {
                            color: #fc4d00;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id='my-cool-chart'] li:nth-child(2) {
                            color: #ff6420;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id='my-cool-chart'] li:nth-child(3) {
                            color: #ff7d44;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id='my-cool-chart'] li:nth-child(4) {
                            color: #ff9668;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id='my-cool-chart'] li:nth-child(5) {
                            color: #ffaf8b;
                        }
            
                         line 20, ../sass/pizza.scss 
                        [data-pie-id='my-cool-chart'] li:nth-child(6) {
                            color: #ffc8af;
                        }*/

            .graphic-content-div{
                line-height: -15px;
                margin-top: 3px;
            }

            .graphic-content-text-ponto{
                position: absolute;
                bottom: 60;
                left: 75px;

            }

            .graphic-content-text-tempo{
                position: absolute;
                bottom: 115;
                left: 75px;
            }

            .graphic-content-text-percentage{
                position: absolute;
                bottom: 15;
                left: 75px;
            }

            .coluna-right-box-dash-geral{
                font-size: 2em;
                text-align: center;
                //border-right: 1px solid #999;
                //border-bottom: 1px solid #999;
            }

            .icons-from-top{
                margin-top: 30px;

            }

            .icons-from-top-last{
                margin-bottom: 20px;
                margin-top: 42px;
            }

            .coluna-box-dash-down{
                border-top: 1px solid #999;
                padding: 10px;
                padding-top: 5px;
            }

            .game-body{
                padding: 10px;
                border: 1px solid #999;
            }

            .fieldset {
                border: 1px groove #999;
                border-top: none;
                padding: 0.5em;
                margin: 1em 2px;
            }
            .fieldset > h1 {
                font-size: 1em;
                margin: -1em -0.5em 0;
            }   
            .fieldset > h1 > span {
                float: left;
            }
            .fieldset > h1:before {
                border-top: 1px groove #999;
                content: ' ';
                float: left;
                margin: 0.5em 2px 0 -1px;
                width: 0.75em;
            }
            .fieldset > h1:after {
                border-top: 1px groove #999;
                content: ' ';
                display: block;
                height: 1.5em;
                left: 2px;
                margin: 0 1px 0 0;
                overflow: hidden;
                position: relative;
                top: 0.5em;
            }
        </style>

        <script>
            ;
            (function($, window, document, undefined) {
                'use strict';

                var Pizza = {
                    version: '0.0.1',
                    settings: {
                        donut: false,
                        donut_inner_ratio: 0.4, // between 0 and 1
                        percent_offset: 35, // relative to radius
                        stroke_color: '#333',
                        stroke_width: 0,
                        show_percent: true, // show or hide the percentage on the chart.
                        animation_speed: 500,
                        animation_type: 'elastic' // options: backin, backout, bounce, easein, 
                                //          easeinout, easeout, linear
                    },
                    init: function(scope, options) {
                        var self = this;
                        this.scope = scope || document.body;

                        var pies = $('[data-pie-id]', this.scope);

                        $.extend(true, this.settings, options)

                        if (pies.length > 0) {
                            pies.each(function() {
                                return self.build($(this), options);
                            });
                        } else {
                            this.build($(this.scope), options);
                        }

                        this.events();
                    },
                    events: function() {
                        var self = this;

                        $(window).off('.pizza').on('resize.pizza', self.throttle(function() {
                            self.init();
                        }, 100));

                        $(this.scope).off('.pizza').on('mouseenter.pizaa mouseleave.pizza touchstart.pizza', '[data-pie-id] li', function(e) {
                            var parent = $(this).parent(),
                                    path = Snap($('#' + parent.data('pie-id') + ' path[data-id="s' + $(this).index() + '"]')[0]),
                                    text = Snap($(path.node).parent()
                                            .find('text[data-id="' + path.node.getAttribute('data-id') + '"]')[0]),
                                    settings = $(this).parent().data('settings');

                            if (/start/i.test(e.type)) {
                                $(path.node).siblings('path').each(function() {
                                    if (this.nodeName) {
                                        path.animate({
                                            transform: 's1 1 ' + path.node.getAttribute('data-cx') + ' ' + path.node.getAttribute('data-cy')
                                        }, settings.animation_speed, mina[settings.animation_type]);
                                        Snap($(this).next()[0]).animate({
                                            opacity: 0
                                        }, settings.animation_speed);
                                    }
                                });
                            }

                            if (/enter|start/i.test(e.type)) {
                                path.animate({
                                    transform: 's1.05 1.05 ' + path.node.getAttribute('data-cx') + ' ' + path.node.getAttribute('data-cy')
                                }, settings.animation_speed, mina[settings.animation_type]);

                                if (settings.show_percent) {
                                    text.animate({
                                        opacity: 1
                                    }, settings.animation_speed);
                                }
                            } else {
                                path.animate({
                                    transform: 's1 1 ' + path.node.getAttribute('data-cx') + ' ' + path.node.getAttribute('data-cy')
                                }, settings.animation_speed, mina[settings.animation_type]);
                                text.animate({
                                    opacity: 0
                                }, settings.animation_speed);
                            }
                        });
                    },
                    build: function(legends, options) {
                        var self = this;

                        var legend = legends, graph;

                        legend.data('settings', $.extend({}, self.settings, options, legend.data('options')));
                        self.data(legend, options || {});

                        return self.update_DOM(self.pie(legend));
                    },
                    data: function(legend, options) {
                        var data = [],
                                count = 0;

                        $('li', legend).each(function() {
                            var segment = $(this);

                            if (options.data) {
                                data.push({
                                    value: options.data[segment.index()],
                                    color: segment.css('color'),
                                    segment: segment
                                });
                            } else {
                                data.push({
                                    value: segment.data('value'),
                                    color: segment.css('color'),
                                    segment: segment
                                });
                            }
                        });

                        return legend.data('graph-data', data);
                    },
                    update_DOM: function(parts) {
                        var legend = parts[0],
                                graph = parts[1];

                        return $(this.identifier(legend)).html(graph);
                    },
                    pie: function(legend) {
                        // pie chart concept from JavaScript the 
                        // Definitive Guide 6th edition by David Flanagan
                        var settings = legend.data('settings'),
                                svg = this.svg(legend, settings),
                                data = legend.data('graph-data'),
                                total = 0,
                                angles = [],
                                start_angle = 0,
                                base = $(this.identifier(legend)).width() - 4;

                        for (var i = 0; i < data.length; i++) {
                            total += data[i].value;
                        }

                        for (var i = 0; i < data.length; i++) {
                            angles[i] = data[i].value / total * Math.PI * 2;
                        }

                        for (var i = 0; i < data.length; i++) {
                            var end_angle = start_angle + angles[i];
                            var cx = (base / 2),
                                    cy = (base / 2),
                                    r = ((base / 2) * 0.85);

                            if (!settings.donut) {
                                // Compute the two points where our wedge intersects the circle
                                // These formulas are chosen so that an angle of 0 is at 12 o'clock
                                // and positive angles increase clockwise
                                var x1 = cx + r * Math.sin(start_angle);
                                var y1 = cy - r * Math.cos(start_angle);
                                var x2 = cx + r * Math.sin(end_angle);
                                var y2 = cy - r * Math.cos(end_angle);

                                // This is a flag for angles larger than than a half circle
                                // It is required by the SVG arc drawing component
                                var big = 0;
                                if (end_angle - start_angle > Math.PI)
                                    big = 1;

                                // This string holds the path details
                                var d = "M" + cx + "," + cy + // Start at circle center
                                        " L" + x1 + "," + y1 + // Draw line to (x1,y1)
                                        " A" + r + "," + r + // Draw an arc of radius r
                                        " 0 " + big + " 1 " + // Arc details...
                                        x2 + "," + y2 + // Arc goes to to (x2,y2)
                                        " Z";                      // Close path back to (cx,cy)
                            }

                            var existing_path = $('path[data-id="s' + i + '"]', svg.node);

                            if (existing_path.length > 0) {
                                var path = Snap(existing_path[0]);
                            } else {
                                var path = svg.path();
                            }

                            var percent = (data[i].value / total) * 100.0;

                            // thanks to Raphael.js
                            var existing_text = $('text[data-id="s' + i + '"]', svg.node);

                            if (existing_text.length > 0) {
                                var text = Snap(existing_text[0]);
                                text.attr({
                                    x: cx + (r + settings.percent_offset) * Math.sin(start_angle + (angles[i] / 2)),
                                    y: cy - (r + settings.percent_offset) * Math.cos(start_angle + (angles[i] / 2))
                                });
                            } else {
                                var text = path.paper.text(cx + (r + settings.percent_offset) * Math.sin(start_angle + (angles[i] / 2)),
                                        cy - (r + settings.percent_offset) * Math.cos(start_angle + (angles[i] / 2)), Math.ceil(percent) + '%');
                            }

                            var left_offset = text.getBBox().width / 2;

                            text.attr({
                                x: text.attr('x') - left_offset,
                                opacity: 0
                            });

                            text.node.setAttribute('data-id', 's' + i);
                            path.node.setAttribute('data-cx', cx);
                            path.node.setAttribute('data-cy', cy);

                            if (settings.donut) {
                                this.annular_sector(path.node, {
                                    centerX: cx, centerY: cy,
                                    startDegrees: start_angle, endDegrees: end_angle,
                                    innerRadius: (r * settings.donut_inner_ratio), outerRadius: r
                                });
                            } else {
                                path.attr({d: d});
                            }

                            path.attr({
                                fill: data[i].color,
                                stroke: settings.stroke_color,
                                strokeWidth: settings.stroke_width
                            });

                            path.node.setAttribute('data-id', 's' + i);

                            this.animate(path, cx, cy, settings);

                            // The next wedge begins where this one ends
                            start_angle = end_angle;
                        }

                        return [legend, svg.node];
                    },
                    animate: function(el, cx, cy, settings) {
                        var self = this;

                        el.hover(function(e) {
                            var path = Snap(e.target),
                                    text = Snap($(path.node).parent()
                                            .find('text[data-id="' + path.node.getAttribute('data-id') + '"]')[0]);

                            path.animate({
                                transform: 's1.05 1.05 ' + cx + ' ' + cy
                            }, settings.animation_speed, mina[settings.animation_type]);

                            text.touchend(function() {
                                path.animate({
                                    transform: 's1.05 1.05 ' + cx + ' ' + cy
                                }, settings.animation_speed, mina[settings.animation_type]);
                            });

                            if (settings.show_percent) {
                                text.animate({
                                    opacity: 1
                                }, settings.animation_speed);
                                text.touchend(function() {
                                    text.animate({
                                        opacity: 1
                                    }, settings.animation_speed);
                                });
                            }
                        }, function(e) {
                            var path = Snap(e.target),
                                    text = Snap($(path.node).parent()
                                            .find('text[data-id="' + path.node.getAttribute('data-id') + '"]')[0]);

                            path.animate({
                                transform: 's1 1 ' + cx + ' ' + cy
                            }, settings.animation_speed, mina[settings.animation_type]);

                            text.animate({
                                opacity: 0
                            }, settings.animation_speed);
                        });
                    },
                    svg: function(legend, settings) {
                        var container = $(this.identifier(legend)),
                                svg = $('svg', container),
                                width = container.width(),
                                height = width;

                        if (svg.length > 0) {
                            svg = Snap(svg[0]);
                        } else {
                            svg = Snap(width, height);
                        }

                        svg.node.setAttribute('width', 200);
                        svg.node.setAttribute('height', height + settings.percent_offset);
                        svg.node.setAttribute('viewBox', '-' + settings.percent_offset + ' -' + settings.percent_offset + ' ' +
                                (width + (settings.percent_offset * 1.5)) + ' ' +
                                (height + (settings.percent_offset * 1.5)));

                        return svg;
                    },
                    // http://stackoverflow.com/questions/11479185/svg-donut-slice-as-path-element-annular-sector
                    annular_sector: function(path, options) {
                        var opts = optionsWithDefaults(options);

                        var p = [// points
                            [opts.cx + opts.r2 * Math.sin(opts.startRadians),
                                opts.cy - opts.r2 * Math.cos(opts.startRadians)],
                            [opts.cx + opts.r2 * Math.sin(opts.closeRadians),
                                opts.cy - opts.r2 * Math.cos(opts.closeRadians)],
                            [opts.cx + opts.r1 * Math.sin(opts.closeRadians),
                                opts.cy - opts.r1 * Math.cos(opts.closeRadians)],
                            [opts.cx + opts.r1 * Math.sin(opts.startRadians),
                                opts.cy - opts.r1 * Math.cos(opts.startRadians)],
                        ];

                        var angleDiff = opts.closeRadians - opts.startRadians;
                        var largeArc = (angleDiff % (Math.PI * 2)) > Math.PI ? 1 : 0;
                        var cmds = [];
                        cmds.push("M" + p[0].join());                                // Move to P0
                        cmds.push("A" + [opts.r2, opts.r2, 0, largeArc, 1, p[1]].join()); // Arc to  P1
                        cmds.push("L" + p[2].join());                                // Line to P2
                        cmds.push("A" + [opts.r1, opts.r1, 0, largeArc, 0, p[3]].join()); // Arc to  P3
                        cmds.push("z");                                // Close path (Line to P0)
                        path.setAttribute('d', cmds.join(' '));

                        function optionsWithDefaults(o) {
                            // Create a new object so that we don't mutate the original
                            var o2 = {
                                cx: o.centerX || 0,
                                cy: o.centerY || 0,
                                startRadians: (o.startDegrees || 0),
                                closeRadians: (o.endDegrees || 0),
                            };

                            var t = o.thickness !== undefined ? o.thickness : 100;
                            if (o.innerRadius !== undefined)
                                o2.r1 = o.innerRadius;
                            else if (o.outerRadius !== undefined)
                                o2.r1 = o.outerRadius - t;
                            else
                                o2.r1 = 200 - t;
                            if (o.outerRadius !== undefined)
                                o2.r2 = o.outerRadius;
                            else
                                o2.r2 = o2.r1 + t;

                            if (o2.r1 < 0)
                                o2.r1 = 0;
                            if (o2.r2 < 0)
                                o2.r2 = 0;

                            return o2;
                        }
                    },
                    identifier: function(legend) {
                        return '#' + legend.data('pie-id');
                    },
                    throttle: function(fun, delay) {
                        var timer = null;
                        return function() {
                            var context = this, args = arguments;
                            clearTimeout(timer);
                            timer = setTimeout(function() {
                                fun.apply(context, args);
                            }, delay);
                        };
                    }
                };

                window.Pizza = Pizza;

            }($, this, this.document));

            $(window).load(function() {
                Pizza.init();
            });

        </script>

    </head>
    <body>
        <!-- -->
        <div class="loader" id="loader"></div>
        <div class="row" style="min-height:300px;">
            <div  class="col-md-9 tab-content">

                <div class="col-xs-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">



                            <a href="../Jogo/cadastro"><button class="btn btn-default pull-right btn-sm ">NOVO JOGO</button></a>

                            <?php
                            if (!empty($jogos)) {
                                foreach ($jogos as $jogo) {
                                    ?>
                                    <div class="col-md-12 game-body fieldset <?php
                                    if ($jogo['status'] != 1) {
                                        echo "jogo-desativado";
                                    }
                                    ?>" id="content-jogo-<?php echo $jogo['id']; ?>">
                                        <h1><span><?php echo $jogo['nome'] ?></span></h1>

                                        <!-- left side -->
                                        <div class="col-md-11 coluna-box-dash-geral" >
                                            <div class="col-md-12">
                                                <!-- COLUNA 1 -->
                                                <div class="col-md-2">
                                                    <img src="http://simpleicon.com/wp-content/uploads/users.png" width="45" class="game-icon"/>

                                                    <div class="text-center box-content-dash">
                                                        <span>
                                                            <small> Todos as Equipes</small>
                                                            <h3 class="count-jogadores"><span><strong>300</strong></span><br/></h3>
                                                            jogadores
                                                        </span>
                                                    </div>
                                                </div>

                                                <!-- COLUNA 2-->
                                                <div class="col-md-4 coluna-box-dash" >
                                                    <div class="dashboard-icon-list-div">
                                                        <span class="glyphicon glyphicon-flash dashboard-icon-list"></span> 
                                                        3 AÇÕES = 120 ptos.
                                                    </div>

                                                    <div class="dashboard-icon-list-div">
                                                        <span class="glyphicon glyphicon-briefcase dashboard-icon-list"></span>
                                                        4 MISSÕES = 20 ptos.
                                                    </div>

                                                    <div class="dashboard-icon-list-div">
                                                        <span class="glyphicon glyphicon-folder-close dashboard-icon-list"></span>
                                                        4 PROGRAMAS = 320 ptos.
                                                    </div>

                                                    <div class="dashboard-icon-list-div">
                                                        <span class="glyphicon glyphicon-fire dashboard-icon-list"></span>
                                                        0 DESAFIOS
                                                    </div>
                                                    <br/>
                                                </div>


                                                <div class="col-md-2 coluna-box-dash">
                                                    <span class="glyphicon glyphicon-calendar calendar-icon"></span>  <br/>
                                                    <div class="text-center box-content-dash">
                                                        13/dez/2017<br/>
                                                        a<br/>
                                                        13/dez/2018<br/><br/>

                                                        <strong>120</strong>/180 dias
                                                    </div>
                                                </div>

                                                <div class="col-md-3 coluna-box-dash">
                                                    <div class="graphic-content-div"><input type="text" value="75%" class="dial" data-width="50" data-height="50"> <div class="graphic-content-text-tempo">TEMPO</div></div>

                                                    <div class="graphic-content-div"><input type="text" value="80%" class="dial" data-width="50" data-height="50"> <div class="graphic-content-text-ponto">PONTOS</div></div>

                                                    <div><img src="http://www.free-icons-download.net/images/column-chart-icon-63291.png" width="50" class="chart-graphic-icon" /><div class="graphic-content-text-percentage">+10%</div></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">

                                                <div class="col-md-2 text-center coluna-box-dash-down">
                                                    <button type="button" class="btn btn-default btn-sm">RANKING</button>
                                                    <br/>
                                                </div>

                                                <div class="col-md-4 coluna-box-dash-down">
                                                    <strong>700</strong>/950 pontos
                                                    <button type="button" class="btn btn-default btn-sm pull-right">DETALHES</button>
                                                    <br/>
                                                </div>

                                                <div class="col-md-2 coluna-box-dash-down"></div>

                                                <div class="col-md-3 text-center coluna-box-dash-down">
                                                    <button type="button" class="btn btn-default btn-sm">ESTATÍSTICAS</button>
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- right side -->
                                        <div class="col-md-1 coluna-right-box-dash-geral">

                                            <?php if ($jogo['status'] != 2) { ?>
                                                <div class="icons-from-top">
                                                    <span class="glyphicon <?php
                                                    if ($jogo['status'] == 1) {
                                                        echo 'glyphicon-pause pause';
                                                    } else if ($jogo['status'] == 0) {
                                                        echo 'glyphicon-play play';
                                                    }
                                                    ?> " value="<?php echo $jogo['id'] ?>"></span>
                                                </div>

                                                <div class="icons-from-top">
                                                    <span class="glyphicon glyphicon-stop stop" value="<?php echo $jogo['id'] ?>"></span>
                                                </div>
                                            <?php } else { ?>
                                                <div class="icons-from-top small-text">
                                                    <small><small>Jogo interrompido</small></small>
                                                </div>
                                            <?php } ?>
                                            <div class="icons-from-top-last">
                                                <span class="glyphicon glyphicon-cog config" value="<?php echo $jogo['id'] ?>"></span>
                                            </div>

                                        </div>
                                    </div>

                                    <?php
                                }
                            }
                            ?>

                        </div>
                        <div class="tab-pane" id="profile">Profile Tab.</div>
                        <div class="tab-pane" id="messages">Messages Tab.</div>
                        <div class="tab-pane" id="settings">Settings Tab.</div>
                        <div class="tab-pane" id="configuracoes">Settings Tab.</div>
                        <div class="tab-pane" id="logout">Settings Tab.</div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


        <!-- -->
    </body>
</html>
