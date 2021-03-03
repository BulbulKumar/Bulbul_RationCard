<!DOCTYPE html>
<html>
<html>
    <head>
        <title>
        Acknowledement
        </title>
        <style>
            *{
                margin-left:30px;
                margin-right:30px;
                border:2px block;
            }
            .layout
            {
                font-family:normal,sans-serif;
                line-height:2;
            }
            .title
            {
            text-align:center;
            font-weight:bold;
            text-decoration:underline;
            }
            .body
            {
                text-indent:5em;
                border-bottom:3px underline black;
            }
            .time
            {

            }
            .sign
            {
                text-align:right;
            }
            p
            {
            display:inline;
            padding-right:20px;
            padding-left:20px;
            border-bottom:1px solid black;
            font-weight:bold;
            }
        </style>
    </head>
    <body>
        .<div class='layout'>
            <fieldset>
                <div class='title'>
                 <u>Acknowledgment</u><br><br>
                </div>
                <div class='body'>
                   This is to acknowledge the receipt with registration number {{ $person->Registration_no}}
                   <p>delete of name </p><p>{{$person->Name}}</p> with Application NO:12354<p></p>
                  date on<p>2.3.21</p>to the<p>DCSO</p>
                  has been<p> Submitted</p><br><br>
                </div>
                <div class='time'>
                    place:AIZAWL<br>
                    Date:
                </div>
                <div class='sign'>
                    Register Authority<br>
                    Aizawl:Mizoram
                </div>
            </fieldset>
        </div>
    </body>
</html>