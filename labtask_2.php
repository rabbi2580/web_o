<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                    font-family: 'Times New Roman', Times, serif;
                    padding: 10px;
                    background-color: white;
                    color: black;
                    
                }
            h2,h1{
                text-align: center;
            }
            .section-box{
                background-color:white;
                padding: 15px;
                width: 200px;
                margin: auto;
                border-radius: 10px;
            }
            input,button{
                width: 100%;
                padding:5px;
                margin: auto;

            }
            button{
                background-color: blue;
                color: white;
                cursor: pointer;
            }
            #error{
                color: red;
                text-align: center;
                margin-top: auto;
            }
            .activity{
                background:#e8e8e8 ;
                padding: 15px;
                margin-top: auto;
                border-radius: 10px;
                
            }
            .remove_button {
                background:red ;
                padding: 15px;
                margin-top: auto;
                border-radius: 10px;
                cursor: pointer;
                
            }
            
            </style>
            

    </head>
    <body>
        <h1>Participant Registration</h1>
    <div class="section_box">
        <h3>Full Name:</h3>
        <input type="text" id="name">
        <h3>Full Email:</h3>
        <input type="text" id="email">
        <h3>phone Number:</h3>
        <input type="text" id="phone">
        <h3>password:</h3>
        <input type="password" id="pass">
        <h3>confirm password:</h3>
        <input type="password" id="conpass"><br>
        <button oneclick="register()">register</button>
        <div id="error"></div>
        <div id="output"></div>

    </div>

        

</html>