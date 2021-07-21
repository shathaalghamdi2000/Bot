<?php
if   (empty($_POST["Engine1"]))
{

}else{
    $Engine1=$_POST["Engine1"];
    $Engine2=$_POST["Engine2"];
    $Engine3=$_POST["Engine3"];
    $Engine4=$_POST["Engine4"];
    $Engine5=$_POST["Engine5"];
    $Engine6=$_POST["Engine6"];


    $conn = new mysqli("localhost","root", "", "armrobotdb") ;
    mysqli_query($conn,"delete FROM  armrobotdb");
    $a=mysqli_query($conn,"insert into armrobotdb (Engine1,Engine2,Engine3,Engine4,Engine5,Engine6,running) values($Engine1,$Engine2,$Engine3,$Engine4,$Engine5,$Engine6,1)");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Arm Control panelr</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #999999;
    }

    .container {
        position: relative;
        height: -10px;
        width: 600px;
        margin: 50px auto;
        left:8%;
    }

    .container .mySlider {
        position: absolute;
        left: 1%;
        top: 50%;
        transform: translate(-50%, -50%);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 300px;
        height: 10px;
        background-color: #00BFFF;
        border-radius: 20px;
        outline: none;
        opacity: 0.7;
        transition: opacity .2s ease-in;
        -webkit-transition: opacity .2s ease-in;
    }
    /hover on range slider/

    .container .mySlider:hover {
        opacity: 1;
    }
    /* chrome and safari supporter */

    .container .mySlider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        height: 30px;
        width: 30px;
        border-radius: 20%;
        background-color: #660066;
        cursor: pointer;
        -webkit-transition: all .3s ease-in;
        transition: all .3s ease-in;
        border: 2px solid #d3d3d3;
    }
    /* mozila firefox supporter */

    .container .mySlider::-moz-range-thumb {
        -moz-appearance: none;
        appearance: none;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        background-color: #660066;
        cursor: pointer;
        -moz-transition: all .3s ease-in;
        transition: all .3s ease-in;
        border: 2px solid #d3d3d3;
    }
    /* hover on slider thumb */

    .container .mySlider::-webkit-slider-thumb:hover {
        box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.4);
    }
    /* Range Value Span 800080 */

    .container .rangeValue {
        position: absolute;
        height: 40px;
        width: 60px;
        right: 290px;
        top: 50%;
        transform: translate(-50%, -50%);
        border: 1px solid #fff;
        color: #fff;
        font-weight: 600;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-align: center;
        font-size: 22px;
        line-height: 38px;
    }
    /* Draw with ::before on span*/

    .container .rangeValue::before {
        position: absolute;
        content: "";
        height: 10px;
        width: 10px;
        background-color: #999999;
        top: 14px;
        left: -6px;
        border-top: 1px solid transparent;
        border-bottom: 1px solid #fff;
        border-left: 1px solid #fff;
        border-right: 1px solid transparent;
        transform: rotate(45deg);
    }
    /animation key frames/

    @keyframes anim {
        0% {
            right: -20px;
        }
        25% {
            right: -10px;
        }
        50% {
            right: -30px;
        }
        70% {
            right: -10px;
        }
        100% {
            right: -20px;
        }
    }
    .h1{
        position: absolute;
        color:#FFFFFF;
        right: 25%;
        top:-38px;
    }

.buttons{
text-align:center;
}
</style>

<body>

<?php

//$conn = new mysqli("localhost","root", "", "armrobotdb") ;
//$read_data = $conn->query("SELECT * FROM info");
?>


<form action="#" method="post">

<div class="container" id="app1" >
    <div class ="h1"><h1>محرك 1</h1></div>

    <input @change="warning()"   v-model="value" type="range" class="mySlider" min="0" max="180" name="Engine1"  >
    <span :style="warning()" class="rangeValue"> {{ value }} </span>
</div>
    <br>

    <div class="container" id="app2" >
        <div class ="h1"><h1>محرك 2</h1></div>
        <input @change="warning()"  v-model="value" type="range" class="mySlider" min="0" max="180" name="Engine2">
        <span :style="warning()" class="rangeValue"> {{ value }} </span>
    </div>
    <br>

    <div class="container" id="app3" >
        <div class ="h1"><h1>محرك 3</h1></div>
        <input @change="warning()"  v-model="value" type="range" class="mySlider" min="0" max="180" name="Engine3">
        <span :style="warning()" class="rangeValue"> {{ value }} </span>
    </div>
    <br>

    <div class="container" id="app4" >
        <div class ="h1"><h1>محرك 4</h1></div>
        <input @change="warning()"  v-model="value" type="range" class="mySlider" min="0" max="180" name="Engine4">
        <span :style="warning()" class="rangeValue"> {{ value }} </span>
    </div>
    <br>

    <div class="container" id="app5" >
        <div class ="h1"><h1>محرك 5</h1></div>
        <input @change="warning()"  v-model="value" type="range" class="mySlider" min="0" max="180" name="Engine5">
        <span :style="warning()" class="rangeValue"> {{ value }} </span>
    </div>
    <br>

    <div class="container" id="app6" >
        <div class ="h1"><h1>محرك 6</h1></div>
        <input @change="warning()"  v-model="value" type="range" class="mySlider" min="0" max="180" name="Engine6">
        <span :style="warning()" class="rangeValue"> {{ value }} </span>
    </div>
    <br>




    <br><br>
<div class="buttons">

<input type="submit" value=" حفظ  و تشغيل" ></div>
</form>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<?Php
//PHP & MYSQL

$connection = new mysqli("localhost","root", "", "armrobotdb") ;//server name, username, password,  databasename
$stmt = $connection->prepare("select * from armrobotdb");
$stmt->execute();

$result = $stmt ->get_result();
$row = $result->fetch_assoc();
if  ( is_null($row))

{

?>
    <script>

        new Vue({
            el: "#app1",
            data() {
                return {
                    value: "10"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });

        new Vue({
            el: "#app2",
            data() {
                return {
                    value:"10"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });

        new Vue({
            el: "#app3",
            data() {
                return {
                    value:"10"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });

        new Vue({
            el: "#app4",
            data() {
                return {
                    value: "10"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });

        new Vue({
            el: "#app5",
            data() {
                return {
                    value:"10"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });

        new Vue({
            el: "#app6",
            data() {
                return {
                    value:"10"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });

    </script>
    <?php
}else
{   
    /*while($row = $result->fetch_assoc()){*/   //Converts data into an array

    ?>
    <script>
        new Vue({
            el: "#app1",
            data() {
                return {
                    value: "<?php echo $row["Engine1"] ; ?>"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });
        new Vue({
            el: "#app2",
            data() {
                return {
                    value:   "<?php echo $row["Engine2"] ; ?>"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });
        new Vue({
            el: "#app3",
            data() {
                return {
                    value: "<?php echo $row["Engine3"] ; ?>"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });
        new Vue({
            el: "#app4",
            data() {
                return {
                    value: "<?php echo $row["Engine4"] ; ?>"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });
        new Vue({
            el: "#app5",
            data() {
                return {
                    value: "<?php echo $row["Engine5"] ; ?>"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });
        new Vue({
            el: "#app6",
            data() {
                return {
                    value: "<?php echo $row["Engine6"] ; ?>"
                }
            } ,

            methods: {
                warning: function() {
                    if (this.value > 50) {
                        return {
                            color: "#660066",
                            animation: "anim .3s ease-in 1 alternate"
                        }
                    }
                }
            },
        });

    </script>
<?php /*}*/
}

?>
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "b6d43e24-38b4-4622-9b18-86923b30ed21", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "c796adec-3fc1-4f67-9d11-98c88e2fcca5", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</body>

</html>