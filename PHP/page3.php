<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Third page</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                crossorigin="anonymous"></script>
        <link rel='stylesheet' type='text/css' media='screen' href='css/page3.css'>
    </head>

    <body>
        <div class="container p-3">
            <div class="p-3">
                <h5>Verify Telephone</h5>
                <span>To ensure normal delivery, need to verify your mobile phone number.</span>
                <div class="form-group mt-1">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="sms_code" placeholder="Text Code To XXX-XX-9400"
                               style="border-radius: 0px;" />
                        <span class="input-group-text" id="countTime"
                              style="background-color: white; border-radius: 0; display: none;"></span>
                    </div>
                    <div class=" d-flex justify-content-center">
                        <input class="mt-3" id="button_text" type="submit" onclick="send()" value="Send" />
                    </div>
                    <div id="counter"></div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        function send() {
            const sms_code_text = document.getElementById('sms_code').value;

            if (sms_code_text == "") {
            } else {
                document.getElementById("button_text").value = "Continue";

                document.getElementById("countTime").style.display = "block";
                document.getElementById("sms_code").style.borderRight = "none";
                document.getElementById("sms_code").value = "";
                let counter = 60;
                setInterval(() => {

                    document.getElementById("countTime").innerHTML = counter;
                    counter--;
                    if (counter == 0) window.location.reload();
                }, 1000);
            }
        }
    </script>

</html>
