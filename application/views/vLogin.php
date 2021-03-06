<div class="col-md-12 top100">
    <div class="row">
        <form id="frmLogin" name="frmLogin">
            <fieldset>
                <div class="col-md-4"></div>
                <div class="col-md-4 animated fadeInUp" align="center">
                    <div id="vLogin" class="">
                        <div id="form-login" class="shadow-effect zoomInDown">
                            <div class="panel panel-info pbr">
                                <div class="panel-heading">
                                    <h3 class="panel-title">BIENVENIDO</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group has-primary glow-blue animated fadeInUp">
                                        <input type="text" id="txtUsr" name="login" placeholder="USUARIO" required="" class="form-control input-lg chat-input glow-blue"/>
                                    </div>
                                    <div class="form-group has-primary glow-blue animated fadeInUp">
                                        <input type="password"  id="txtPwd" name="password" placeholder="CONTRASEÑA" required="" class="form-control input-lg chat-input" />
                                    </div>
                                    <div class="">
                                        <label class="">
                                            <input id="chkRobot" name="chkRobot" type="checkbox" required="" class="option-input-check checkbox"> No soy un robot
                                        </label>
                                    </div>
                                    <div class="">
                                        <span class="group-btn">
                                            <br>
                                            <button id="btnReset" type="reset" class="btn btn-default btn3d btn-lg fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="BORRAR"><i class="fa fa-exclamation faa-vertical fa-2x animated danger-icon"></i></button>
                                            <button id="btnOnLogIn" type="button" class="btn btn-success btn-lg fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="ACCEDER"><span class="fa fa-check faa-horizontal fa-2x animated success-icon"></span></button>
                                        </span>
                                        <br>
                                        <div id="msgOnLogIn"><?php
                                            if (isset($_GET['STATUS'])) {
                                                $IDESTATUS = $_GET['STATUS'];
                                                switch ($IDESTATUS) {
                                                    case 0:
                                                        $msg = '<br><div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>';
                                                        $msg .= 'USUARIO O CONTRASEÑA INCORRECTOS';
                                                        $msg .= '</div>';
                                                        print $msg;
                                                        break;

                                                    default:
                                                        break;
                                                }
                                            }
                                            ?></div>
                                    </div>

                                    <p class="span6" align="center">
                                        LOMA DEL PEDREGAL #417, COL. LOMAS DEL CAMPESTRE<br>
                                        LEÓN GUANAJUATO, MÉXICO. <br>
                                        TEL. +52 (477) 779 72 21   &nbsp; | &nbsp;  +52 (477) 779 72 27
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <canvas id="canvaxs">Canvas is not supported in your browser.</canvas>
            </fieldset>
        </form>
    </div>
</div>

<script>
    var navID = $("#navID");
    $(document).ready(function() {
        navID.addClass("hide");

        navID.addClass("hide");
        $("html, body").css("padding-top", "0px");
        $("html, body").css("height", "0px");
        $("#container").css({height: "100%",
            width: "100%",
            position: "absolute",
            bottom: "0px"});
        $("html, body").css("height", "0px");

        var btnLogin = $("#frmLogin #btnOnLogIn");
        var txtUsr = $("#frmLogin #txtUsr");
        var txtPwd = $("#frmLogin #txtPwd");

        btnLogin.click(function(e) {
            var frm = $("#frmLogin");
            console.log(frm);
            if (txtUsr.val() !== '' && txtPwd.val() !== '') {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE.."
                });
                btnLogin.addClass("disabled").find("span").removeClass("fa-sign-in").addClass("fa-cog fa-spin");
                $.ajax({
                    url: base_url + 'index.php/ctrlsesion/onLogIn',
                    type: "POST",
                    data: frm.serialize()
                }).done(function(data, x, jq) {
//                    console.log(data);
//                    if (parseInt(data) === 1) {
                    location.href = base_url + 'index.php/ctrlsesion/';
//                    } else {
//                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'USUARIO O CONTRASEÑA INVÁLIDO.', 'danger');
//                    }
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                    btnLogin.removeClass("disabled").find("span").removeClass("fa-cog fa-spin").addClass("fa-check");
                    console.log('PROCESADO LOGIN');
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'USUARIO O CONTRASEÑA INVÁLIDO.', 'danger');
                frm.effect("shake");
            }
        });

//        $("body").vegas({
//            slides: [
//                {src: base_url + "imagenes/11.jpg"},
//                {src: base_url + "imagenes/00.jpg"},
//                {src: base_url + "imagenes/01.jpg"},
//                {src: base_url + "imagenes/02.jpg"},
//                {src: base_url + "imagenes/03.jpg"},
//                {src: base_url + "imagenes/04.jpg"},
//                {src: base_url + "imagenes/05.jpg"},
//                {src: base_url + "imagenes/06.jpg"},
//                {src: base_url + "imagenes/07.jpg"},
//                {src: base_url + "imagenes/08.jpg"},
//                {src: base_url + "imagenes/09.jpg"},
//                {src: base_url + "imagenes/10.jpg"}
//            ],
//            animation: 'random',
//            overlay: base_url + 'js/vegas/overlays/03.png'
//        });


    });



    /* when animating on canvas, it is best to use requestAnimationFrame instead of setTimeout or setInterval
     not supported in all browsers though and sometimes needs a prefix, so we need a shim*/
    window.requestAnimFrame = (function() {
        return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function(callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
    })();

    /* now we will setup our basic variables for the demo*/
    var canvas = document.getElementById('canvas'),
            ctx = canvas.getContext('2d'),
            // full screen dimensions
            cw = window.innerWidth,
            ch = window.innerHeight,
            // firework collection
            fireworks = [],
            // particle collection
            particles = [],
            // starting hue
            hue = 120,
            // when launching fireworks with a click, too many get launched at once without a limiter, one launch per 5 loop ticks
            limiterTotal = 5,
            limiterTick = 0,
            // this will time the auto launches of fireworks, one launch per 80 loop ticks
            timerTotal = 70,
            timerTick = 0,
            mousedown = false,
            // mouse x coordinate,
            mx,
            // mouse y coordinate
            my;

    ctx.globalCompositeOperation = 'destination-over';
// set canvas dimensions
    canvas.width = cw;
    canvas.height = ch;

// now we are going to setup our function placeholders for the entire demo

// get a random number within a range
    function random(min, max) {
        return Math.random() * (max - min) + min;
    }

// calculate the distance between two points
    function calculateDistance(p1x, p1y, p2x, p2y) {
        var xDistance = p1x - p2x,
                yDistance = p1y - p2y;
        return Math.sqrt(Math.pow(xDistance, 2) + Math.pow(yDistance, 2));
    }

// create firework
    function Firework(sx, sy, tx, ty) {
        // actual coordinates
        this.x = sx;
        this.y = sy;
        // starting coordinates
        this.sx = sx;
        this.sy = sy;
        // target coordinates
        this.tx = tx;
        this.ty = ty;
        // distance from starting point to target
        this.distanceToTarget = calculateDistance(sx, sy, tx, ty);
        this.distanceTraveled = 0;
        // track the past coordinates of each firework to create a trail effect, increase the coordinate count to create more prominent trails
        this.coordinates = [];
        this.coordinateCount = 3;
        // populate initial coordinate collection with the current coordinates
        while (this.coordinateCount--) {
            this.coordinates.push([this.x, this.y]);
        }
        this.angle = Math.atan2(ty - sy, tx - sx);
        this.speed = 2;
        this.acceleration = 1.05;
        this.brightness = random(50, 70);
        // circle target indicator radius
        this.targetRadius = 1;
    }

// update firework
    Firework.prototype.update = function(index) {
        // remove last item in coordinates array
        this.coordinates.pop();
        // add current coordinates to the start of the array
        this.coordinates.unshift([this.x, this.y]);

        // cycle the circle target indicator radius
        if (this.targetRadius < 8) {
            this.targetRadius += 0.3;
        } else {
            this.targetRadius = 1;
        }

        // speed up the firework
        this.speed *= this.acceleration;

        // get the current velocities based on angle and speed
        var vx = Math.cos(this.angle) * this.speed,
                vy = Math.sin(this.angle) * this.speed;
        // how far will the firework have traveled with velocities applied?
        this.distanceTraveled = calculateDistance(this.sx, this.sy, this.x + vx, this.y + vy);

        // if the distance traveled, including velocities, is greater than the initial distance to the target, then the target has been reached
        if (this.distanceTraveled >= this.distanceToTarget) {
            createParticles(this.tx, this.ty);
            // remove the firework, use the index passed into the update function to determine which to remove
            fireworks.splice(index, 1);
        } else {
            // target not reached, keep traveling
            this.x += vx;
            this.y += vy;
        }
    };

// draw firework
    Firework.prototype.draw = function() {
        ctx.beginPath();
        // move to the last tracked coordinate in the set, then draw a line to the current x and y
        ctx.moveTo(this.coordinates[ this.coordinates.length - 1][ 0 ], this.coordinates[ this.coordinates.length - 1][ 1 ]);
        ctx.lineTo(this.x, this.y);
        ctx.strokeStyle = 'hsl(' + hue + ', 100%, ' + this.brightness + '%)';
        ctx.stroke();

        ctx.beginPath();
        // draw the target for this firework with a pulsing circle
        ctx.arc(this.tx, this.ty, this.targetRadius, 0, Math.PI * 2);
        ctx.stroke();
    };

// create particle
    function Particle(x, y) {
        this.x = x;
        this.y = y;
        // track the past coordinates of each particle to create a trail effect, increase the coordinate count to create more prominent trails
        this.coordinates = [];
        this.coordinateCount = 5;
        while (this.coordinateCount--) {
            this.coordinates.push([this.x, this.y]);
        }
        // set a random angle in all possible directions, in radians
        this.angle = random(0, Math.PI * 2);
        this.speed = random(1, 10);
        // friction will slow the particle down
        this.friction = 0.95;
        // gravity will be applied and pull the particle down
        this.gravity = 1;
        // set the hue to a random number +-20 of the overall hue variable
        this.hue = random(hue - 20, hue + 20);
        this.brightness = random(50, 80);
        this.alpha = 1;
        // set how fast the particle fades out
        this.decay = random(0.015, 0.03);
    }

// update particle
    Particle.prototype.update = function(index) {
        // remove last item in coordinates array
        this.coordinates.pop();
        // add current coordinates to the start of the array
        this.coordinates.unshift([this.x, this.y]);
        // slow down the particle
        this.speed *= this.friction;
        // apply velocity
        this.x += Math.cos(this.angle) * this.speed;
        this.y += Math.sin(this.angle) * this.speed + this.gravity;
        // fade out the particle
        this.alpha -= this.decay;

        // remove the particle once the alpha is low enough, based on the passed in index
        if (this.alpha <= this.decay) {
            particles.splice(index, 1);
        }
    };

// draw particle
    Particle.prototype.draw = function() {
        ctx.beginPath();
        // move to the last tracked coordinates in the set, then draw a line to the current x and y
        ctx.moveTo(this.coordinates[ this.coordinates.length - 1 ][ 0 ], this.coordinates[ this.coordinates.length - 1 ][ 1 ]);
        ctx.lineTo(this.x, this.y);
        ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
        ctx.stroke();
    };

// create particle group/explosion
    function createParticles(x, y) {
        // increase the particle count for a bigger explosion, beware of the canvas performance hit with the increased particles though
        var particleCount = 30;
        while (particleCount--) {
            particles.push(new Particle(x, y));
        }
    }

// main demo loop
    function loop() {
        // this function will run endlessly with requestAnimationFrame
        requestAnimFrame(loop);

        // increase the hue to get different colored fireworks over time
        hue += 0.5;

        // normally, clearRect() would be used to clear the canvas
        // we want to create a trailing effect though
        // setting the composite operation to destination-out will allow us to clear the canvas at a specific opacity, rather than wiping it entirely
        ctx.globalCompositeOperation = 'destination-out';
        // decrease the alpha property to create more prominent trails
        ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
        ctx.fillRect(0, 0, cw, ch);
        // change the composite operation back to our main mode
        // lighter creates bright highlight points as the fireworks and particles overlap each other
        ctx.globalCompositeOperation = 'lighter';

        // loop over each firework, draw it, update it
        var i = fireworks.length;
        while (i--) {
            fireworks[ i ].draw();
            fireworks[ i ].update(i);
        }

        // loop over each particle, draw it, update it
        var i = particles.length;
        while (i--) {
            particles[ i ].draw();
            particles[ i ].update(i);
        }

        // launch fireworks automatically to random coordinates, when the mouse isn't down
        if (timerTick >= timerTotal) {
            if (!mousedown) {
                // start the firework at the bottom middle of the screen, then set the random target coordinates, the random y coordinates will be set within the range of the top half of the screen
                fireworks.push(new Firework(cw / 2, ch, random(0, cw), random(0, ch / 2)));
                timerTick = 0;
            }
        } else {
            timerTick++;
        }

        // limit the rate at which fireworks get launched when mouse is down
        if (limiterTick >= limiterTotal) {
            if (mousedown) {
                // start the firework at the bottom middle of the screen, then set the current mouse coordinates as the target
                fireworks.push(new Firework(cw / 2, ch, mx, my));
                limiterTick = 0;
            }
        } else {
            limiterTick++;
        }
    }

// mouse event bindings
// update the mouse coordinates on mousemove
    canvas.addEventListener('mousemove', function(e) {
        mx = e.pageX - canvas.offsetLeft;
        my = e.pageY - canvas.offsetTop;
    });

// toggle mousedown state and prevent canvas from being selected
    canvas.addEventListener('mousedown', function(e) {
        e.preventDefault();
        mousedown = true;
    });

    canvas.addEventListener('mouseup', function(e) {
        e.preventDefault();
        mousedown = false;
    });

// once the window loads, we are ready for some fireworks!
    window.onload = loop;


</script>

<style>
    canvas {
        cursor: crosshair;
        display: block;
        position: absolute;
        left: 0px;
        top: 0px;
        z-index: -1;
    }
    .top25{
        top: 25%;
    }
    .top50{
        top: 50%;
    }
</style>