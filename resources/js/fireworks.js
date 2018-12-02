// setTimeout(e => {
//  document.querySelector("h2.tap").classList.add("in")
// }, 3000)
// setTimeout(e => {
//  document.querySelector("h2.tap").classList.add("out")
// }, 8000)
// setTimeout(e => {
//  document.querySelector("h2.tap").remove()
// }, 12000)
//////////////////////////////////////////////
var isMobile = false; //initiate as false
// device detection
if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
    isMobile = true;
}
if (isMobile) {
    console.log("mobile!!!");
}
////////////////////////////////
let tl = new TimelineLite();
if (document.querySelector("#canvas-container")) {
    tl.staggerTo(document.querySelectorAll("h2.tap span"), .8, {
        opacity: 1,
        delay: 1
    }, 0.5).to(document.querySelector("h2.tap"), .6, {
        opacity: 0,
        delay: .6
    }).to(document.querySelector(".invitation .bg"), .6, {
        opacity: 1,
        delay: .7
    }).to(document.querySelector(".invitation--head"), .6, {
        opacity: 1,
    }).to(document.querySelector(".show-invite"), .5, {
        opacity: 1
    }, "-=0.75").staggerTo(document.querySelectorAll(".svgee"), .8, {
        opacity: 1,
        transform: "translateY(0)"
    }, 0.2, "-=1.5")
    const rsvp = document.querySelectorAll("input[name='rsvp']")
    const rsvp_form = document.querySelector("form.form.rsvp")
    rsvp.forEach(e => {
        e.addEventListener("click", e => {
            document.querySelector("form.form.rsvp .form--submit .info").classList.remove("active")
            if (e.target.getAttribute("id") == "no") {
                document.querySelector(".form--submit .rsvp-msg").innerHTML = "Unfortunate :/ Happy New Year though! Have a nice 31st :)"
                document.querySelector(".form--submit .rsvp-msg").classList.add("active")
            } else {
                document.querySelector(".form--submit .rsvp-msg").innerHTML = "Ayy! Glad to have you :)"
                document.querySelector(".form--submit .rsvp-msg").classList.add("active")
                // document.querySelector(".form--submit .rsvp-msg").classList.remove("active")
            }
        })
    })
    rsvp_form.addEventListener("submit", ev => {
        ev.target.querySelector("button.btn").classList.add("active")
        setTimeout(evv => {
            ev.target.querySelector("button.btn").classList.remove("active")
        }, 700)
        rsvp_checked = (document.querySelector("input[name='rsvp']:checked") !== null) ? true : false;
        console.log(rsvp_checked);
        if (!rsvp_checked) {
            ev.preventDefault()
            document.querySelector("form.form.rsvp .form--submit .info").classList.add("active")
            return false
        }
        return true
    })
}
if(document.querySelector(".show-invite")) {
    document.querySelector(".show-invite").addEventListener("click", e => {
        e.preventDefault();
        document.querySelector(".invitation").classList.toggle("active")
        if(document.querySelector(".invitation--head")) {
            document.querySelector(".invitation--head").classList.toggle("hide")
        }
        document.querySelector(".invitation--body").classList.toggle("active")
        e.target.classList.toggle("active")
        if (e.target.innerHTML.indexOf("hide") !== -1) {
            e.target.innerHTML = "show details"
        } else {
            e.target.innerHTML = "hide details"
        }
    })
}
if (document.querySelector(".alert")) {
    document.querySelector(".alert").addEventListener("click", ev => {
        ev.target.parentElement.classList.add("rm")
        setTimeout(e => {
            ev.target.parentElement.remove()
        }, 1000)
    })
}
if (document.querySelector(".rsvp-fin")) {
    TweenMax.staggerTo(document.querySelectorAll(".svgee"), 1, {
        opacity: 0.33,
        transform: "translateY(0)",
        delay: 0.5
    }, 0.16)
}
///////////// HOVER ANIMATION /////////////
if (!isMobile && document.querySelector("#canvas-container")) {
    const cards = document.querySelector(".invitation--head");
    const images = document.querySelectorAll(".svgee");
    const range = 40;
    // const calcValue = (a, b) => (((a * 100) / b) * (range / 100) -(range / 2)).toFixed(1);
    const calcValue = (a, b) => (a / b * range - range / 2).toFixed(1) // thanks @alice-mx
    let timeout;
    document.addEventListener('mousemove', ({
        x,
        y
    }) => {
        if (timeout) {
            window.cancelAnimationFrame(timeout);
        }
        timeout = window.requestAnimationFrame(() => {
            const yValue = calcValue(y, window.innerHeight);
            const xValue = calcValue(x, window.innerWidth);
            cards.style.transform = `translateX(-50%) rotateX(${xValue*0.6}deg) rotateY(${yValue*0.6}deg) translate(${xValue*0.5}px, ${yValue*0.5}px)`;
            [].forEach.call(images, (image) => {
                image.style.marginTop = `${-xValue}px`;
                image.style.marginLeft = `${yValue}px`;
                image.style.transform = `rotateX(${xValue*0.6}deg) rotateY(${yValue*0.6}deg) translate(${xValue*0.5}px, ${yValue*0.5}px)`;
            });
            // [].forEach.call(backgrounds, (background) => {
            //     background.style.backgroundPosition = `${xValue*.45}px ${-yValue*.45}px`;
            // })
        })
    }, false);
}
if (isMobile && document.querySelector("#canvas-container")) {
    document.querySelector(".invitation").addEventListener("scroll", e => {
        console.log(document.querySelector(".invitation--body h3:first-child").offsetTop);
        console.log(document.querySelector(".invitation--body h3:first-child").scrollTop);
        // if(window.pageYOffset > 10) {
        //     console.log("yoffset");
        //     document.querySelector("a.show-invite").classList.add("fade")
        // }
    })
}
///////////// HOVER ANIMATION /////////////
/////////////////////
var Fireworks = function() {
    /*=============================================================================*/
    /* Utility
    /*=============================================================================*/
    var self = this;
    var rand = function(rMi, rMa) {
        return ~~((Math.random() * (rMa - rMi + 1)) + rMi);
    }
    var hitTest = function(x1, y1, w1, h1, x2, y2, w2, h2) {
        return !(x1 + w1 < x2 || x2 + w2 < x1 || y1 + h1 < y2 || y2 + h2 < y1);
    };
    window.requestAnimFrame = function() {
        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(a) {
            window.setTimeout(a, 1E3 / 60)
        }
    }();
    /*=============================================================================*/
    /* Initialize
    /*=============================================================================*/
    self.init = function() {
        self.dt = 0;
        self.oldTime = Date.now();
        self.canvas = document.createElement('canvas');
        self.canvasContainer = $('#canvas-container');
        var canvasContainerDisabled = document.getElementById('canvas-container');
        self.canvas.onselectstart = function() {
            return false;
        };
        // console.log(window.innerWidth);
        self.canvas.width = self.cw = window.innerWidth;
        self.canvas.height = self.ch = window.innerHeight;
        self.particles = [];
        self.partCount = 99;
        self.fireworks = [];
        self.mx = self.cw / 2;
        self.my = self.ch / 2;
        self.currentHue = 170;
        self.partSpeed = 3;
        self.partSpeedVariance = 10;
        self.partWind = 50;
        self.partFriction = 5;
        self.partGravity = 1;
        self.hueMin = 30;
        self.hueMax = 200;
        self.fworkSpeed = 2;
        self.fworkAccel = 2;
        self.hueVariance = 150;
        self.flickerDensity = 20;
        self.showShockwave = false;
        self.showTarget = false;
        self.clearAlpha = 25;
        self.canvasContainer.append(self.canvas);
        self.ctx = self.canvas.getContext('2d');
        self.ctx.lineCap = 'round';
        self.ctx.lineJoin = 'round';
        self.lineWidth = 0;
        self.bindEvents();
        self.canvasLoop();
        self.canvas.onselectstart = function() {
            return false;
        };
    };
    /*=============================================================================*/
    /* Particle Constructor
    /*=============================================================================*/
    var Particle = function(x, y, hue) {
        this.x = x;
        this.y = y;
        this.coordLast = [{
            x: x,
            y: y
        }, {
            x: x,
            y: y
        }, {
            x: x,
            y: y
        }];
        this.angle = rand(0, 360);
        this.speed = rand(((self.partSpeed - self.partSpeedVariance) <= 0) ? 1 : self.partSpeed - self.partSpeedVariance, (self.partSpeed + self.partSpeedVariance));
        this.friction = 1 - self.partFriction / 100;
        this.gravity = self.partGravity / 2;
        this.hue = rand(hue - self.hueVariance, hue + self.hueVariance);
        this.brightness = rand(50, 80);
        this.alpha = rand(40, 100) / 100;
        this.decay = rand(10, 50) / 1000;
        this.wind = (rand(0, self.partWind) - (self.partWind / 2)) / 25;
        this.lineWidth = self.lineWidth;
    };
    Particle.prototype.update = function(index) {
        var radians = this.angle * Math.PI / 180;
        var vx = Math.cos(radians) * this.speed;
        var vy = Math.sin(radians) * this.speed + this.gravity;
        this.speed *= this.friction;
        this.coordLast[2].x = this.coordLast[1].x;
        this.coordLast[2].y = this.coordLast[1].y;
        this.coordLast[1].x = this.coordLast[0].x;
        this.coordLast[1].y = this.coordLast[0].y;
        this.coordLast[0].x = this.x;
        this.coordLast[0].y = this.y;
        this.x += vx * self.dt;
        this.y += vy * self.dt;
        this.angle += this.wind;
        this.alpha -= this.decay;
        if (!hitTest(0, 0, self.cw, self.ch, this.x - this.radius, this.y - this.radius, this.radius * 2, this.radius * 2) || this.alpha < .05) {
            self.particles.splice(index, 1);
        }
    };
    Particle.prototype.draw = function() {
        var coordRand = (rand(1, 3) - 1);
        self.ctx.beginPath();
        self.ctx.moveTo(Math.round(this.coordLast[coordRand].x), Math.round(this.coordLast[coordRand].y));
        self.ctx.lineTo(Math.round(this.x), Math.round(this.y));
        self.ctx.closePath();
        self.ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
        self.ctx.stroke();
        if (self.flickerDensity > 0) {
            var inverseDensity = 50 - self.flickerDensity;
            if (rand(0, inverseDensity) === inverseDensity) {
                self.ctx.beginPath();
                self.ctx.arc(Math.round(this.x), Math.round(this.y), rand(this.lineWidth, this.lineWidth + 3) / 2, 0, Math.PI * 2, false)
                self.ctx.closePath();
                var randAlpha = rand(50, 100) / 100;
                self.ctx.fillStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + randAlpha + ')';
                self.ctx.fill();
            }
        }
    };
    /*=============================================================================*/
    /* Create Particles
    /*=============================================================================*/
    self.createParticles = function(x, y, hue) {
        var countdown = self.partCount;
        while (countdown--) {
            self.particles.push(new Particle(x, y, hue));
        }
    };
    /*=============================================================================*/
    /* Update Particles
    /*=============================================================================*/
    self.updateParticles = function() {
        var i = self.particles.length;
        while (i--) {
            var p = self.particles[i];
            p.update(i);
        };
    };
    /*=============================================================================*/
    /* Draw Particles
    /*=============================================================================*/
    self.drawParticles = function() {
        var i = self.particles.length;
        while (i--) {
            var p = self.particles[i];
            p.draw();
        };
    };
    /*=============================================================================*/
    /* Firework Constructor
    /*=============================================================================*/
    var Firework = function(startX, startY, targetX, targetY) {
        this.x = startX;
        this.y = startY;
        this.startX = startX;
        this.startY = startY;
        this.hitX = false;
        this.hitY = false;
        this.coordLast = [{
            x: startX,
            y: startY
        }, {
            x: startX,
            y: startY
        }, {
            x: startX,
            y: startY
        }];
        this.targetX = targetX;
        this.targetY = targetY;
        this.speed = self.fworkSpeed;
        this.angle = Math.atan2(targetY - startY, targetX - startX);
        this.shockwaveAngle = Math.atan2(targetY - startY, targetX - startX) + (90 * (Math.PI / 180));
        this.acceleration = self.fworkAccel / 100;
        this.hue = self.currentHue;
        this.brightness = rand(50, 80);
        this.alpha = rand(50, 100) / 100;
        this.lineWidth = self.lineWidth;
        this.targetRadius = 1;
    };
    Firework.prototype.update = function(index) {
        self.ctx.lineWidth = this.lineWidth;
        vx = Math.cos(this.angle) * this.speed,
            vy = Math.sin(this.angle) * this.speed;
        this.speed *= 1 + this.acceleration;
        this.coordLast[2].x = this.coordLast[1].x;
        this.coordLast[2].y = this.coordLast[1].y;
        this.coordLast[1].x = this.coordLast[0].x;
        this.coordLast[1].y = this.coordLast[0].y;
        this.coordLast[0].x = this.x;
        this.coordLast[0].y = this.y;
        if (self.showTarget) {
            if (this.targetRadius < 8) {
                this.targetRadius += .25 * self.dt;
            } else {
                this.targetRadius = 1 * self.dt;
            }
        }
        if (this.startX >= this.targetX) {
            if (this.x + vx <= this.targetX) {
                this.x = this.targetX;
                this.hitX = true;
            } else {
                this.x += vx * self.dt;
            }
        } else {
            if (this.x + vx >= this.targetX) {
                this.x = this.targetX;
                this.hitX = true;
            } else {
                this.x += vx * self.dt;
            }
        }
        if (this.startY >= this.targetY) {
            if (this.y + vy <= this.targetY) {
                this.y = this.targetY;
                this.hitY = true;
            } else {
                this.y += vy * self.dt;
            }
        } else {
            if (this.y + vy >= this.targetY) {
                this.y = this.targetY;
                this.hitY = true;
            } else {
                this.y += vy * self.dt;
            }
        }
        if (this.hitX && this.hitY) {
            var randExplosion = rand(0, 9);
            self.createParticles(this.targetX, this.targetY, this.hue);
            self.fireworks.splice(index, 1);
        }
    };
    Firework.prototype.draw = function() {
        self.ctx.lineWidth = this.lineWidth;
        var coordRand = (rand(1, 3) - 1);
        self.ctx.beginPath();
        self.ctx.moveTo(Math.round(this.coordLast[coordRand].x), Math.round(this.coordLast[coordRand].y));
        self.ctx.lineTo(Math.round(this.x), Math.round(this.y));
        self.ctx.closePath();
        self.ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
        self.ctx.stroke();
        if (self.showTarget) {
            self.ctx.save();
            self.ctx.beginPath();
            self.ctx.arc(Math.round(this.targetX), Math.round(this.targetY), this.targetRadius, 0, Math.PI * 2, false)
            self.ctx.closePath();
            self.ctx.lineWidth = 1;
            self.ctx.stroke();
            self.ctx.restore();
        }
        if (self.showShockwave) {
            self.ctx.save();
            self.ctx.translate(Math.round(this.x), Math.round(this.y));
            self.ctx.rotate(this.shockwaveAngle);
            self.ctx.beginPath();
            self.ctx.arc(0, 0, 1 * (this.speed / 5), 0, Math.PI, true);
            self.ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + rand(25, 60) / 100 + ')';
            self.ctx.lineWidth = this.lineWidth;
            self.ctx.stroke();
            self.ctx.restore();
        }
    };
    /*=============================================================================*/
    /* Create Fireworks
    /*=============================================================================*/
    self.createFireworks = function(startX, startY, targetX, targetY) {
        self.fireworks.push(new Firework(startX, startY, targetX, targetY));
    };
    /*=============================================================================*/
    /* Update Fireworks
    /*=============================================================================*/
    self.updateFireworks = function() {
        var i = self.fireworks.length;
        while (i--) {
            var f = self.fireworks[i];
            f.update(i);
        };
    };
    /*=============================================================================*/
    /* Draw Fireworks
    /*=============================================================================*/
    self.drawFireworks = function() {
        var i = self.fireworks.length;
        while (i--) {
            var f = self.fireworks[i];
            f.draw();
        };
    };
    /*=============================================================================*/
    /* Events
    /*=============================================================================*/
    self.bindEvents = function() {
        $(window).on('resize', function() {
            clearTimeout(self.timeout);
            self.timeout = setTimeout(function() {
                self.ctx.lineCap = 'round';
                self.ctx.lineJoin = 'round';
            }, 100);
        });
        $(self.canvas).on('mousedown', function(e) {
            var randLaunch = rand(0, 5);
            self.mx = e.pageX - self.canvasContainer.offset().left;
            self.my = e.pageY - self.canvasContainer.offset().top;
            self.currentHue = rand(self.hueMin, self.hueMax);
            self.createFireworks(self.cw / 2, self.ch, self.mx, self.my);
            $(self.canvas).on('mousemove.fireworks', function(e) {
                var randLaunch = rand(0, 5);
                self.mx = e.pageX - self.canvasContainer.offset().left;
                self.my = e.pageY - self.canvasContainer.offset().top;
                self.currentHue = rand(self.hueMin, self.hueMax);
                self.createFireworks(self.cw / 2, self.ch, self.mx, self.my);
            });
        });
        $(self.canvas).on('mouseup', function(e) {
            $(self.canvas).off('mousemove.fireworks');
        });
    }
    /*=============================================================================*/
    /* Clear Canvas
    /*=============================================================================*/
    self.clear = function() {
        self.particles = [];
        self.fireworks = [];
        self.ctx.clearRect(0, 0, self.cw, self.ch);
    };
    /*=============================================================================*/
    /* Delta
    /*=============================================================================*/
    self.updateDelta = function() {
        var newTime = Date.now();
        self.dt = (newTime - self.oldTime) / 16;
        self.dt = (self.dt > 5) ? 5 : self.dt;
        self.oldTime = newTime;
    }
    /*=============================================================================*/
    /* Main Loop
    /*=============================================================================*/
    self.canvasLoop = function() {
        requestAnimFrame(self.canvasLoop, self.canvas);
        self.updateDelta();
        self.ctx.globalCompositeOperation = 'destination-out';
        self.ctx.fillStyle = 'rgba(0,0,0,' + self.clearAlpha / 100 + ')';
        self.ctx.fillRect(0, 0, self.cw, self.ch);
        self.ctx.globalCompositeOperation = 'lighter';
        self.updateFireworks();
        self.updateParticles();
        self.drawFireworks();
        self.drawParticles();
    };
    self.init();
    var initialLaunchCount = 13;
    while (initialLaunchCount--) {
        setTimeout(function() {
            self.fireworks.push(new Firework(self.cw / 2, self.ch, rand(50, self.cw - 50), rand(50, self.ch / 2) - 50));
        }, initialLaunchCount * 100);
    }
}
/*=============================================================================*/
/* GUI
/*=============================================================================*/
var guiPresets = {
    "preset": "Default",
    "remembered": {
        "Default": {
            "0": {
                "fworkSpeed": 2,
                "fworkAccel": 4,
                "showShockwave": false,
                "showTarget": true,
                "partCount": 88,
                "partSpeed": 5,
                "partSpeedVariance": 10,
                "partWind": 50,
                "partFriction": 5,
                "partGravity": 1,
                "flickerDensity": 20,
                "hueMin": 50,
                "hueMax": 200,
                "hueVariance": 111,
                "lineWidth": 1,
                "clearAlpha": 25
            }
        },
        "Anti Gravity": {
            "0": {
                "fworkSpeed": 4,
                "fworkAccel": 10,
                "showShockwave": true,
                "showTarget": false,
                "partCount": 150,
                "partSpeed": 5,
                "partSpeedVariance": 10,
                "partWind": 10,
                "partFriction": 10,
                "partGravity": -10,
                "flickerDensity": 30,
                "hueMin": 0,
                "hueMax": 360,
                "hueVariance": 30,
                "lineWidth": 1,
                "clearAlpha": 50
            }
        },
        "Battle Field": {
            "0": {
                "fworkSpeed": 10,
                "fworkAccel": 20,
                "showShockwave": true,
                "showTarget": true,
                "partCount": 200,
                "partSpeed": 30,
                "partSpeedVariance": 5,
                "partWind": 0,
                "partFriction": 5,
                "partGravity": 0,
                "flickerDensity": 0,
                "hueMin": 20,
                "hueMax": 30,
                "hueVariance": 10,
                "lineWidth": 1,
                "clearAlpha": 40
            }
        },
        "Mega Blast": {
            "0": {
                "fworkSpeed": 3,
                "fworkAccel": 3,
                "showShockwave": true,
                "showTarget": true,
                "partCount": 500,
                "partSpeed": 50,
                "partSpeedVariance": 5,
                "partWind": 0,
                "partFriction": 0,
                "partGravity": 0,
                "flickerDensity": 0,
                "hueMin": 0,
                "hueMax": 360,
                "hueVariance": 30,
                "lineWidth": 20,
                "clearAlpha": 20
            }
        },
        "Nimble": {
            "0": {
                "fworkSpeed": 10,
                "fworkAccel": 50,
                "showShockwave": false,
                "showTarget": false,
                "partCount": 120,
                "partSpeed": 10,
                "partSpeedVariance": 10,
                "partWind": 100,
                "partFriction": 50,
                "partGravity": 0,
                "flickerDensity": 20,
                "hueMin": 0,
                "hueMax": 360,
                "hueVariance": 30,
                "lineWidth": 1,
                "clearAlpha": 80
            }
        },
        "Slow Launch": {
            "0": {
                "fworkSpeed": 2,
                "fworkAccel": 2,
                "showShockwave": false,
                "showTarget": false,
                "partCount": 200,
                "partSpeed": 10,
                "partSpeedVariance": 0,
                "partWind": 100,
                "partFriction": 0,
                "partGravity": 2,
                "flickerDensity": 50,
                "hueMin": 0,
                "hueMax": 360,
                "hueVariance": 20,
                "lineWidth": 4,
                "clearAlpha": 10
            }
        },
        "Perma Trail": {
            "0": {
                "fworkSpeed": 4,
                "fworkAccel": 10,
                "showShockwave": false,
                "showTarget": false,
                "partCount": 150,
                "partSpeed": 10,
                "partSpeedVariance": 10,
                "partWind": 100,
                "partFriction": 3,
                "partGravity": 0,
                "flickerDensity": 0,
                "hueMin": 0,
                "hueMax": 360,
                "hueVariance": 20,
                "lineWidth": 1,
                "clearAlpha": 0
            }
        }
    },
    "closed": true,
    "folders": {
        "Fireworks": {
            "preset": "Default",
            "closed": false,
            "folders": {}
        },
        "Particles": {
            "preset": "Default",
            "closed": true,
            "folders": {}
        },
        "Color": {
            "preset": "Default",
            "closed": true,
            "folders": {}
        },
        "Other": {
            "preset": "Default",
            "closed": true,
            "folders": {}
        }
    }
};
var fworks = new Fireworks();
var gui = new dat.GUI({
    autoPlace: false,
    load: guiPresets,
    preset: 'Default'
});
// var customContainer = document.getElementById('gui');
// customContainer.appendChild(gui.domElement);
var guiFireworks = gui.addFolder('Fireworks');
guiFireworks.add(fworks, 'fworkSpeed').min(1).max(10).step(1);
guiFireworks.add(fworks, 'fworkAccel').min(0).max(50).step(1);
guiFireworks.add(fworks, 'showShockwave');
guiFireworks.add(fworks, 'showTarget');
var guiParticles = gui.addFolder('Particles');
guiParticles.add(fworks, 'partCount').min(0).max(500).step(1);
guiParticles.add(fworks, 'partSpeed').min(1).max(100).step(1);
guiParticles.add(fworks, 'partSpeedVariance').min(0).max(50).step(1);
guiParticles.add(fworks, 'partWind').min(0).max(100).step(1);
guiParticles.add(fworks, 'partFriction').min(0).max(50).step(1);
guiParticles.add(fworks, 'partGravity').min(-20).max(20).step(1);
guiParticles.add(fworks, 'flickerDensity').min(0).max(50).step(1);
var guiColor = gui.addFolder('Color');
guiColor.add(fworks, 'hueMin').min(0).max(360).step(1);
guiColor.add(fworks, 'hueMax').min(0).max(360).step(1);
guiColor.add(fworks, 'hueVariance').min(0).max(180).step(1);
var guiOther = gui.addFolder('Other');
guiOther.add(fworks, 'lineWidth').min(1).max(20).step(1);
guiOther.add(fworks, 'clearAlpha').min(0).max(100).step(1);
guiOther.add(fworks, 'clear').name('Clear');
gui.remember(fworks);