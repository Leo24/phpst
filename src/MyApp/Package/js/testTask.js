var testTask = {

    changeBackgroundColor: function (colorID, blockID){
        var color, div, s;
        color = document.getElementById(colorID).value;
        if (color.length >= 6){
            div = document.getElementById(blockID);
            s = div.style;
            s.background = "#"+color;
        } else {
            return false;
        }
    },

    showClock: function(){
        var day, clock, id;
        day=new Date();
        clock=day.getHours()+":"+day.getMinutes()+":"+day.getSeconds();
        document.form.form_clock.value=clock;
        id=setTimeout("testTask.showClock()",100);
    },

    dragNdrop: function(){
        var book = document.getElementById('book');
        book.onmousedown = function(e) {

            var coords = getCoords(book);
            var shiftX = e.pageX - coords.left;
            var shiftY = e.pageY - coords.top;

            book.style.position = 'absolute';
            document.body.appendChild(book);
            moveAt(e);

            book.style.zIndex = 1000;
            book.style.width = 30;
            book.style.height = 30;

            function moveAt(e) {
                book.style.left = e.pageX - shiftX + 'px';
                book.style.top = e.pageY - shiftY + 'px';
            }

            function getCoords(elem) {
                var box = elem.getBoundingClientRect();
                return {
                    top: box.top + pageYOffset,
                    left: box.left + pageXOffset
                };
            }

            document.onmousemove = function(e) {
                moveAt(e);
            };

            book.onmouseup = function() {
                document.onmousemove = null;
                book.onmouseup = null;
            };
        };

        book.ondragstart = function() {
            return false;
        };

    },

    validate: function validate() {

        if (document.myForm.Name.value.length <= 3) {
            alert("Name cannot be less than 3 letters!");
            document.myForm.Name.focus();
            return false;
        }

            if (document.myForm.EMail.name == "EMail") {
                testTask.validateEmail();
                return false;
            }

        if (document.myForm.Zip.value == "" ||
            isNaN(document.myForm.Zip.value) ||
            document.myForm.Zip.value.length != 5) {
            alert("Please provide a zip in the format #####.");
            document.myForm.Zip.focus();
            return false;
        }

        if (document.myForm.Country.value == "-1") {
            alert("Please provide your country!");
            return false;
        }

        return ( true );
    },

    validateEmail: function validateEmail()
    {
        var emailID = document.myForm.EMail.value;
        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".");

        if (atpos < 1 || ( dotpos - atpos < 2 ))
        {
            alert("Please enter correct email ID");
            document.myForm.EMail.focus() ;
            return false;
        }
        return( true );
    }




};

document.addEventListener("keyup", function(){testTask.changeBackgroundColor('color', 'custom-background')}, false);

document.addEventListener("DOMContentLoaded", function(){testTask.showClock()});

document.addEventListener("DOMContentLoaded", function(){testTask.dragNdrop()});



