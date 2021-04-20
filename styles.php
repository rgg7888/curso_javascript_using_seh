<?php

require_once __DIR__ . "/vendor/autoload.php";

echo implode("",

    [
        #Estilos Base
            //example replace it !
            vars([
                "bitcoin-orange" => "#f7931a",
                "soft-orange" => "#ffe9d5",
                "secondary-blue" => "#1a9af7",
                "soft-blue" => "#e7f5ff",
                "warm-black" => "#201e1c",
                "black" => "#282623",
                "grey" => "#bababa",
                "off-white" => "#FAF8F7",
                "just-white" => "#fff"
            ]),
            sltr("*",["0border-box","10","20"]),
            sltr("html",["362.5%","4'DM Sans', sans-serif"]),
        #
        #Header
           //your code here
        #
        #Main
            //your code here
            unirStyles([
                sltr(".card",[
                    "M0 4px 8px 0 rgba(0,0,0,0.2)",
                    "C40%","150px auto"
                ]),
                sltr2(".card",[
                    "B0.3"
                ])
            ]),
            sltr(".card:hover",[
                "M0 8px 16px 0 rgba(0,0,0,0.2)"
            ]),
            sltr(".container",[
                "225px 16px"
            ]),
            sltr(".box",[
                "C100%"
            ])
        #
        #footer
            //your code here
        #
        #media queries
            //your code here
        #
    ]

);
