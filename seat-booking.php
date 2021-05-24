
<html>

<head>
    <title>
        BOOKING
    </title>

    <style>
        #payment_link_para {
            position: bottom;
        }

        #A {
            font-size: 31px;
            color: red;
        }

        .stadium_image {
            background-image: url(Stadium_IPL_Booking.png);
            background-size: cover;
            width: relative;
            height: 561px;
            background-position: center;
        }

        .classForSeats {
            display: none;
        }

        .first_div {
            position: relative;
            top: 119px;
            height: auto;
            float: left;
            width: 210px;
            border: 2px solid red;
            text-align: center;
        }

        .second_div {
            position: relative;
            top: 119px;
            height: auto;
            float: right;
            width: 320px;
            border: 2px solid red;
            text-align: center;
            font-weight: bold;
        }

        /*---  everything related to seats  ---*/

        .seats_container {
            display: flex;
            text-align: center;
            border: solid red 1px;
        }

        .seat {
            width: 20%;
            border: solid black 2px;
            padding: 5px;
            margin: auto;
        }

        .row_name {
            border: solid black 2px;
            width: 25px;
            height: 25px;
            padding: 5px;
            margin: auto;
        }

        .second_row {
            border: solid red 1px;
            display: flex;
            text-align: center;
        }

        .seat_B {
            border: solid black 2px;
            width: 25px;
            height: 25px;
            padding: 5px;
            margin: auto;
        }

        .third_row {
            border: solid red 1px;
            display: flex;
            text-align: center;
        }

        .seat_C {
            border: solid black 2px;
            width: 15%;
            padding: 5px;
            margin: auto;
        }


        .fourth_row {
            border: solid red 1px;
            display: flex;
            text-align: center;
        }

        .seat_D {
            border: solid black 2px;
            width: 25px;
            height: 25px;
            padding: 5px;
            margin: auto;
        }

        /* Animantion related to selection and booking*/

        .seat.booked,
        .seat_B.booked,
        .seat_C.booked,
        .seat_D.booked {
            color: blue;
            background: rgb(168, 1, 1);
            border-radius: 50% 50% 0 0;
            background: -moz-linear-gradient(-45deg, #000000 0%, #000000 25%, #ff0000 50%, #f82323 75%, rgb(248, 4, 4) 100%);
            background: -webkit-linear-gradient(-45deg, #000000 0%, #000000 25%, #ff3c00 50%, #f88d35 75%, #bb2323 100%);
            background: linear-gradient(135deg, #000000 0%, #000000 25%, #ff3c00 50%, #f88d35 75%, #bb2323 100%);
            background-repeat: no-repeat;
            display: flex;
            max-width: 100vw;
            max-height: 100vh;
            justify-content: center;
            align-items: center;
            color: #fff;
            position: relative;
            cursor: pointer;
            transition: .9s all;
        }

        .seat.selected,
        .seat_B.selected,
        .seat_C.selected,
        .seat_D.selected {
            color: blue;
            background: green;
            border-radius: 50% 50% 0 0;
            background: -moz-linear-gradient(-45deg, #000000 0%, #000000 25%, #1e539e 50%, #ff3083 75%, #7800a8 100%);
            background: -webkit-linear-gradient(-45deg, #000000 0%, #000000 25%, #30ad69 50%, #85df51 75%, #60d35c 100%);
            background: linear-gradient(135deg, #000000 0%, #000000 25%, #30ad69 50%, #85df51 75%, #60d35c 100%);
            background-repeat: no-repeat;
            display: flex;
            max-width: 100vw;
            max-height: 100vh;
            justify-content: center;
            align-items: center;
            color: #fff;
            position: relative;
            cursor: pointer;
            transition: .9s all;
        }

        .three_no {
            font-size: 25px;
            border: solid red 1px;
            background-color: red;
            color: white;
            width: 35px;
            border-radius: 50%;
        }

        .payment_module {
            text-align: center;
            margin-bottom: 29px;
            border: 1px solid black;
            width: 40%;
            border-radius: 30%;
            color: #e53935;
            box-shadow: 20px 20px 50px 15px red;
        }

        .selected_seats {
            width: 70%;
            min-height: 190px;
            overflow: hidden;
            border: 3px solid rgb(80, 110, 243);
        }

        /*checking seat button*/

        .btn:link,
        .btn:visited {
            text-transform: uppercase;
            text-decoration: none;
            padding: 15px 40px;
            display: inline-block;
            border-radius: 100px;
            transition: all .2s;
            position: absolute;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-white {
            background-color: #81d4fa;
            color: #777;
        }

        .btn::after {
            content: "";
            display: inline-block;
            height: 100%;
            width: 100%;
            border-radius: 100px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            transition: all .4s;
        }

        .btn-white::after {
            background-color: #fff;
        }

        .btn:hover::after {
            transform: scaleX(1.4) scaleY(1.6);
            opacity: 0;
        }

        .btn-animated {
            animation: moveInBottom 5s ease-out;
            animation-fill-mode: backwards;
        }

        @keyframes moveInBottom {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
</head>

<body>

    <form method="post" action="seats.php">
        <div class="first_div">
            <fieldset style="margin:5px;border:2px solid blue;"><u><b>Steps to Follow:</b></u><br><br>
                1.Select Section:S1-S6<br><img src="arrow.png" width="40px" height="40px"><br>
                2.Select Quadrant:<br>U1-U2 || L1-L2<br><img src="arrow.png" width="40px" height="40px" /><br>
                3.Select Seat Row:<br><img src="arrow.png" width="40px" height="40px"><br>
                4.Payment</fieldset>
        </div>
        <div class="second_div">
            <fieldset style="margin:5px;border:2px solid blue;">
                <p id="A">A.
                    <hr>
                </p><img src="1.png" width="55px" height="55px" /><br>
                <label for="Section">Select Section:<select name="section" id="Section" required>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        <option value="S4">S4</option>
                        <option value="S5">S5</option>
                        <option value="S6">S6</option>
                        <option value="S7">S7</option>
                    </select></label>
                <br><br><img src="2.png" width="55px" height="55px" /><br>
                <label for="Quadrant">Select Quadrant:<select name="quadrant" id="Quadrant" required>
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="U1">U1</option>
                        <option value="U2">U2</option>
                    </select></label>
                <br><br>
                <!--<center>
                    <p class="three_no">3</p>
                </center>
                <label for="Seat_Row">Select Seat Row:<select name="Seat_Row" id="Seat_Row" required>
                        <option value="R_A">R:A</option>
                        <option value="R_B">R:B</option>
                        <option value="R_C">R:C</option>
                        <option value="R_D">R:D</option>
                    </select></label>-->
            </fieldset>
        </div>
        <div class="stadium_image" style="position:center;">
        </div><br><br>
        <fieldset>
            <legend align="center"><u><b>Select Seat</b></u></legend>
            <div class="seats_container">
                <div class="row_name">R:A</div>
                <div class="seat">1</div>
                <div class="seat">2</div>
                <div class="seat">3</div>
                <div class="seat">4</div>
                <div class="seat">5</div>
                <div class="seat">6</div>
                <div class="seat">7</div>
                <div class="seat">8</div>
                <div class="seat">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat">12</div>
                <div class="seat">13</div>
                <div class="seat">14</div>
                <div class="seat">15</div>
                <div class="seat">16</div>
                <div class="seat">17</div>
                <div class="seat">18</div>
                <div class="seat">19</div>
            </div>
            <input type="checkbox" class="classForSeats" name="seats[]" value=1>
            <input type="checkbox" class="classForSeats" name="seats[]" value=2>
            <input type="checkbox" class="classForSeats" name="seats[]" value=3>
            <input type="checkbox" class="classForSeats" name="seats[]" value=4>
            <input type="checkbox" class="classForSeats" name="seats[]" value=5>
            <input type="checkbox" class="classForSeats" name="seats[]" value=6>
            <input type="checkbox" class="classForSeats" name="seats[]" value=7>
            <input type="checkbox" class="classForSeats" name="seats[]" value=8>
            <input type="checkbox" class="classForSeats" name="seats[]" value=9>
            <input type="checkbox" class="classForSeats" name="seats[]" value=10>
            <input type="checkbox" class="classForSeats" name="seats[]" value=11>
            <input type="checkbox" class="classForSeats" name="seats[]" value=12>
            <input type="checkbox" class="classForSeats" name="seats[]" value=13>
            <input type="checkbox" class="classForSeats" name="seats[]" value=14>
            <input type="checkbox" class="classForSeats" name="seats[]" value=15>
            <input type="checkbox" class="classForSeats" name="seats[]" value=16>
            <input type="checkbox" class="classForSeats" name="seats[]" value=17>
            <input type="checkbox" class="classForSeats" name="seats[]" value=18>
            <input type="checkbox" class="classForSeats" name="seats[]" value=19>
            <br>
            <div class="second_row">
                <div class="row_name">R:B</div>
                <div class="seat_B">20</div>
                <div class="seat_B">21</div>
                <div class="seat_B">22</div>
                <div class="seat_B">23</div>
                <div class="seat_B">24</div>
                <div class="seat_B">25</div>
                <div class="seat_B">26</div>
                <div class="seat_B">27</div>
                <div class="seat_B">28</div>
                <div class="seat_B">29</div>
                <div class="seat_B">30</div>
                <div class="seat_B">31</div>
                <div class="seat_B">32</div>
                <div class="seat_B">33</div>
                <div class="seat_B">34</div>
                <div class="seat_B">35</div>
                <div class="seat_B">36</div>
            </div>
            <input type="checkbox" class="classForSeats" name="seats[]" value=20>
            <input type="checkbox" class="classForSeats" name="seats[]" value=21>
            <input type="checkbox" class="classForSeats" name="seats[]" value=22>
            <input type="checkbox" class="classForSeats" name="seats[]" value=23>
            <input type="checkbox" class="classForSeats" name="seats[]" value=24>
            <input type="checkbox" class="classForSeats" name="seats[]" value=25>
            <input type="checkbox" class="classForSeats" name="seats[]" value=26>
            <input type="checkbox" class="classForSeats" name="seats[]" value=27>
            <input type="checkbox" class="classForSeats" name="seats[]" value=28>
            <input type="checkbox" class="classForSeats" name="seats[]" value=29>
            <input type="checkbox" class="classForSeats" name="seats[]" value=30>
            <input type="checkbox" class="classForSeats" name="seats[]" value=31>
            <input type="checkbox" class="classForSeats" name="seats[]" value=32>
            <input type="checkbox" class="classForSeats" name="seats[]" value=33>
            <input type="checkbox" class="classForSeats" name="seats[]" value=34>
            <input type="checkbox" class="classForSeats" name="seats[]" value=35>
            <input type="checkbox" class="classForSeats" name="seats[]" value=36>
            <br>
            <div class="third_row">
                <div class="row_name">R:C</div>
                <div class="seat_C">37</div>
                <div class="seat_C">38</div>
                <div class="seat_C">39</div>
                <div class="seat_C">40</div>
                <div class="seat_C">41</div>
                <div class="seat_C">42</div>
                <div class="seat_C">43</div>
                <div class="seat_C">44</div>
                <div class="seat_C">45</div>
                <div class="seat_C">46</div>
                <div class="seat_C">47</div>
                <div class="seat_C">48</div>
                <div class="seat_C">49</div>
                <div class="seat_C">50</div>
                <div class="seat_C">51</div>
                <div class="seat_C">52</div>
                <div class="seat_C">53</div>
                <div class="seat_C">54</div>
                <div class="seat_C">55</div>
            </div>
            <input type="checkbox" class="classForSeats" name="seats[]" value=37>
            <input type="checkbox" class="classForSeats" name="seats[]" value=38>
            <input type="checkbox" class="classForSeats" name="seats[]" value=39>
            <input type="checkbox" class="classForSeats" name="seats[]" value=40>
            <input type="checkbox" class="classForSeats" name="seats[]" value=41>
            <input type="checkbox" class="classForSeats" name="seats[]" value=42>
            <input type="checkbox" class="classForSeats" name="seats[]" value=43>
            <input type="checkbox" class="classForSeats" name="seats[]" value=44>
            <input type="checkbox" class="classForSeats" name="seats[]" value=45>
            <input type="checkbox" class="classForSeats" name="seats[]" value=46>
            <input type="checkbox" class="classForSeats" name="seats[]" value=47>
            <input type="checkbox" class="classForSeats" name="seats[]" value=48>
            <input type="checkbox" class="classForSeats" name="seats[]" value=49>
            <input type="checkbox" class="classForSeats" name="seats[]" value=50>
            <input type="checkbox" class="classForSeats" name="seats[]" value=51>
            <input type="checkbox" class="classForSeats" name="seats[]" value=52>
            <input type="checkbox" class="classForSeats" name="seats[]" value=53>
            <input type="checkbox" class="classForSeats" name="seats[]" value=54>
            <input type="checkbox" class="classForSeats" name="seats[]" value=55>
            <br>
            <div class="fourth_row">
                <div class="row_name">R:D</div>
                <div class="seat_D">56</div>
                <div class="seat_D">57</div>
                <div class="seat_D">58</div>
                <div class="seat_D">59</div>
                <div class="seat_D">60</div>
                <div class="seat_D">61</div>
                <div class="seat_D">62</div>
                <div class="seat_D">63</div>
                <div class="seat_D">64</div>
                <div class="seat_D">65</div>
                <div class="seat_D">66</div>
                <div class="seat_D">67</div>
                <div class="seat_D">68</div>
                <div class="seat_D">69</div>
                <div class="seat_D">70</div>
                <div class="seat_D">71</div>
                <div class="seat_D">72</div>
            </div>
            <input type="checkbox" class="classForSeats" name="seats[]" value=56>
            <input type="checkbox" class="classForSeats" name="seats[]" value=57>
            <input type="checkbox" class="classForSeats" name="seats[]" value=58>
            <input type="checkbox" class="classForSeats" name="seats[]" value=59>
            <input type="checkbox" class="classForSeats" name="seats[]" value=60>
            <input type="checkbox" class="classForSeats" name="seats[]" value=61>
            <input type="checkbox" class="classForSeats" name="seats[]" value=62>
            <input type="checkbox" class="classForSeats" name="seats[]" value=63>
            <input type="checkbox" class="classForSeats" name="seats[]" value=64>
            <input type="checkbox" class="classForSeats" name="seats[]" value=65>
            <input type="checkbox" class="classForSeats" name="seats[]" value=66>
            <input type="checkbox" class="classForSeats" name="seats[]" value=67>
            <input type="checkbox" class="classForSeats" name="seats[]" value=68>
            <input type="checkbox" class="classForSeats" name="seats[]" value=69">
            <input type="checkbox" class="classForSeats" name="seats[]" value=70>
            <input type="checkbox" class="classForSeats" name="seats[]" value=71>
            <input type="checkbox" class="classForSeats" name="seats[]" value=72>
        </fieldset>

        <!--<center><img src="Stadium_IPL_Booking.png"></img><br><br><br></center>-->

        <br><br>
        <center>
            <div class="selected_seats"><br>
                <center><input type="button" class="btn btn-white btn-animate" onclick="Displaying_Selected_Seats()" value="Click here to Check Selected Seats"></button></center>
                <br><br>

				<font style="font-size:20;"><b>Price per seat = Rs. 750	</b></font><br><br>
                <textarea disabled type='text' id='writingSeatNo' style="height:60px;width:50%;font-weight:bold;color:green;text-align:center;"></textarea></br>
                <br>
                <label style="font-weight: bold;" for="count">Total No. Of Seats Selected:</label>
                <input disabled type='text' id='count' style="width:20%;text-align:center;font-weight: bold;"><br>
                <br>
                <div class="payment_module">
                    <!--p id="payment_link_para"><u><b><button id="PaymentButton"><a id="paymentLink" href="payment.html">Proceed for Payment:</a></button></b></u></p--> 

				<br>
                    <input type="submit" value="Proceed for Payment:" >
                </div>
            </div>
        </center>
    </form>

    <script>
        $(() => {
            $('.seat').click((e) => {
                const $el = $(e.currentTarget);
                if ($el.hasClass('booked')) return;
                const val = $el.html();
                $(`input[type="checkbox"][value="${val}"]`).prop('checked', !$el.hasClass('selected'));
                $el.toggleClass('selected');
            })
        })

        $(() => {
            $('.seat_B').click((e) => {
                const $el = $(e.currentTarget);
                if ($el.hasClass('booked')) return;
                const val = $el.html();
                $(`input[type="checkbox"][value="${val}"]`).prop('checked', !$el.hasClass('selected'));
                $el.toggleClass('selected');
            })
        })

        $(() => {
            $('.seat_C').click((e) => {
                const $el = $(e.currentTarget);
                if ($el.hasClass('booked')) return;
                const val = $el.html();
                $(`input[type="checkbox"][value="${val}"]`).prop('checked', !$el.hasClass('selected'));
                $el.toggleClass('selected');
            })
        })

        $(() => {
            $('.seat_D').click((e) => {
                const $el = $(e.currentTarget);
                if ($el.hasClass('booked')) return;
                const val = $el.html();
                $(`input[type="checkbox"][value="${val}"]`).prop('checked', !$el.hasClass('selected'));
                $el.toggleClass('selected');
            })
        })

        /*Displaying the seats selected by user: */
        function Displaying_Selected_Seats() {
            document.getElementById("writingSeatNo").innerHTML = "";
            let section = document.getElementById("Section").value;
            let quadrant = document.getElementById("Quadrant").value;
            let row = [];
            let seats = [];
            let checkedSeats = document.getElementsByClassName('classForSeats');

            for (i = 0; i < 72; i++) {
                if (checkedSeats[i].checked == true) {
                    seats.push(checkedSeats[i].value);
                    if (checkedSeats[i].value >= 1 && checkedSeats[i].value <= 19)
                        row.push('A');
                    if (checkedSeats[i].value >= 20 && checkedSeats[i].value <= 36)
                        row.push('B');
                    if (checkedSeats[i].value >= 37 && checkedSeats[i].value <= 55)
                        row.push('C');
                    if (checkedSeats[i].value >= 56 && checkedSeats[i].value <= 72)
                        row.push('D');
                }
            }

            let temp = '';
            //document.getElementById("writingSeatNo").innerHTML = seats + "section: " + section + " Selected Array: " + a;
            for (let i = 0; i < seats.length; i++) {
                //temp = "Section: " + section + " Quadrant: " + quadrant + " Row: " + row[i] + " Seat: " + seats[i] + "\n";
                document.getElementById("writingSeatNo").innerHTML += "Section: " + section + " Quadrant: " + quadrant + " Row: " + row[i] + " Seat: " + seats[i] + "\n";;
            }
            document.getElementById("count").value = seats.length;

            let tempBt = document.querySelector('button');
            if (seats.length == 0) {
                alert("NO SEAT SELECTED...Cannot Proceed....");
                tempBt.disabled = true;
            } else
                tempBt.disabled = false;

        }
    </script>

</body>

</html>

